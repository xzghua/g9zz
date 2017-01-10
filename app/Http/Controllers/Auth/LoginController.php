<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/index';


    public $userRepository;

    /**
     * LoginController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->userRepository = $userRepository;
    }

    public function redirectToProvider(Request $request,$service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function handleProviderCallback(Request $request,$service)
    {
        $user = Socialite::driver($service)->stateless()->user();

        switch ($service)
        {
            case 'github':
                $this->loginByGithub($user);
                break;
            case 'weixin':
                $this->loginByWeixin($user);
                break;
            case 'weibo':
                $this->loginByWeibo($user);
                break;
            default:
                $this->loginByEmail();
                break;
        }

        return redirect()->route('admin.index');

    }

    public function loginByGithub($user)
    {
        if(!Users::where('github_id',$user->id)->first()){

            $create = [
                'github_id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'avatar' => $user->avatar,
                'register_source' => 'github',
                'company' => $user->user['company'],
                'city' => $user->user['location'],
                'github_url' => $user->user['html_url'],
            ];

            $this->userRepository->create($create);
        }
        $userInstance = $this->userRepository->getUserByGithubId($user->id);
        \Auth::login($userInstance);

    }

    public function loginByWeixin($user)
    {

    }

    public function loginByWeibo($user)
    {

    }

    public function loginByEmail()
    {

    }


    //curl获取参数
    //https 中的 get  和  post
    public function https_request($url,$data=null){

        $curl = curl_init();

        curl_setopt($curl,CURLOPT_URL,$url);

        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);

        //不为空，使用post传参数，否则使用get
        if($data){

            curl_setopt($curl,CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$data);

        }

        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

        $output = curl_exec($curl);
        curl_close($curl);

        return $output;
    }



    //获取接口票据access_token
    public function get_token(){

        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".env('WEIXIN_KEY')."&secret=".env('WEIXIN_SECRET');

        $json = $this->https_request($url);

        $arr = json_decode($json,true);

        return $arr['access_token'];
    }




    /**
     *微信获取二维码ticket
     *@param string $type
     *@param string $time
     **/
    public function getTicket($type="temporary",$time="604800"){

        /*
        http请求方式: POST
        URL: https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=TOKEN
        POST数据格式：json

        临时二维码请求说明
        POST数据例子：{"expire_seconds": 604800, "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id": 123}}}

        永久二维码请求说明
        POST数据例子：{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id": 123}}}
        或者也可以使用以下POST数据创建字符串形式的二维码参数：
        {"action_name": "QR_LIMIT_STR_SCENE", "action_info": {"scene": {"scene_str": "123"}}}
        */

        if((int)($time) > 604800){
            $time = 604800;
        }

        //获取token
        $token = $this->get_token();

        //临时
        $temporary_qrcode = '{"expire_seconds": '.$time.', "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id": 123}}}';

        //永久
        $permanent_qrcode = '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id": 123}}}';

        //永久字符串
        $permanent_str_qrcode = '{"action_name": "QR_LIMIT_STR_SCENE", "action_info": {"scene": {"scene_str": 123}}}';

        //获取类型判定
        $code = $type.'_qrcode';
        $qrcode = $$code;

        //请求ticket
        $ticket_url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token={$token}";

        $ticket = $this->https_request($ticket_url,$qrcode);

        return $ticket;
    }

    /**
     *凭借ticket到指定URL换取二维码
     **/
    public function getQrcode(){

        //本接口无须登录态即可调用    TICKET进行UrlEncode
        // HTTP GET请求（请使用https协议）
        // https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=TICKET

        QrCode::generate('Hello,LaravelAcademy!');

//        $ticket = json_decode($this->getTicket(),true);
//
//        $qrcode_url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".urlencode($ticket['ticket'])."&redirect_uri=".urldecode(env('WEIXIN_REDIRECT_URI'));
//
////        echo  $qrcode_url;
//
//        $qrcode = $this->https_request($qrcode_url);
//
//        // header("");
//        return response($qrcode, 200, [
//            'Content-Type' => 'image/png',
//        ]);
    }


}
