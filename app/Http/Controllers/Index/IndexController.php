<?php

namespace App\Http\Controllers\Index;

use App\Mail\SendMail;
use App\Repositories\Eloquent\AppendRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\ReplyRepository;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $categoryRepository;

    public $postRepository;

    public $replyRepository;

    public $appendRepository;

    public function __construct(CategoryRepository $categoryRepository,PostRepository $postRepository,ReplyRepository $replyRepository,AppendRepository $appendRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
        $this->replyRepository = $replyRepository;
        $this->appendRepository = $appendRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAllSortCate();
        return view('index.'.set_index_theme().'.index',compact('categories'));
    }

    /**
     * 分类下帖子列表
     *
     * @param $cate_slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postList($cate_slug)
    {
        $slugId  = $this->categoryRepository->checkSlugExists($cate_slug);

        if (empty($slugId)) $this->indexPushError();

        $request = \Request::only(['filter','cate']);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $request]);

        if (!empty($request['cate'])) {
            $cate_slug = $request['cate'];
        }

        $cateShow = $this->categoryRepository->getAllIsShowCateByCateSlug($cate_slug);//该分类或者该父分类下所有的is_show列表
        $cateList = $this->categoryRepository->getPostListByCateSlug($cate_slug);
        $postList = $this->postRepository->getPostListByCateList($cateList);

        if ($request['filter'] == 'excellent') {
            $postList = $postList->where('is_excellent','yes');
        }

        $postList = $postList
            ->orderBy('is_top','asc')
            ->with('category')
            ->with('author')
            ->with('last_reply_user')
            ->paginate(per_page());
        return view('index.'.set_index_theme().'.post.index',compact('postList','cateShow'));
    }

    /**
     * 帖子详情
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postDetail($id)
    {
        $this->postRepository->find($id);

        $detail = $this->postRepository->getPostDetail($id);
        $replies = $this->replyRepository->getReply($id);
//        dd($detail->toArray(),$replies);
        return view('index.'.set_index_theme().'.post.detail',compact('detail','replies'));
    }


    public function postAppend($id)
    {
        $this->postRepository->find($id);

        $input = \Request::only(['content']);
        $input['topic_id'] = $id;

        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);


        $rules = [
            'content' => 'required'
        ];

        $this->requestValidate($input,$rules,'append');

        $append = $this->appendRepository->create($input);

        return response([
            'status'  => 200,
            'message' => '创建成功',
            'append'  => $append
        ]);
    }


    public function postReply(Request $request)
    {

        $input = $request->only(['body','postId']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'body' => 'required',
            'post_id' => 'required|exists:posts,id'
        ];

        $this->requestValidate($input,$rules,'reply');
        $input['body_original'] = $input['body'];
        $input['user_id'] = rand(1,30);//回复人的ID 谁登陆就是谁

        $reply_count = $this->postRepository->find($input['post_id'])->reply_count;

        $email = '2067930913@qq.com';//被回复的帖子的人
        $replier = url(route('post.show',$input['user_id']));
        $name = '叶落山城秋';
        $articleAddress = url(route('post.show',$input['user_id']));
        $article = $this->postRepository->find($input['post_id'])->title;
        $content = $input['body'];

        try {
            \DB::beginTransaction();
            $reply = $this->replyRepository->create($input);

            $update['last_reply_user_id'] = $input['user_id'];
            $update['reply_count'] = $reply_count + 1;
            $this->postRepository->update($update,$input['post_id']);


            \Mail::to($email)->send(new SendMail('reply',$replier,$name,$articleAddress,$article,$content));

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            $code = $e->getCode();
            throw new \Exception($code);
        }

        $user = User::find(1);

        $reply->user = $user;

        return response([
            'status'        => 200,
            'message'       => '成功回复',
            'reply'         => $reply,
            'manage_topics' => 'yes',
        ]);
    }


    public function test()
    {
        return view('welcome');
    }

}
