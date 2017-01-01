<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\ReplyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
    public $repository;

    public $postRepository;

    public function __construct(ReplyRepository $replyRepository,PostRepository $postRepository)
    {
        $this->repository = $replyRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reply = $this->repository->with(['post'])->with(['reply_user'])->paginate(per_page());
        return view('admin.'.set_theme().'.reply.index',compact('reply'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.'.set_theme().'.reply.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {

        $input = $request->only(['body','postId']);
        $input = parse_input($input);

        $rules = [
            'body' => 'required',
            'post_id' => 'required|exists:posts,id'
        ];

        $this->requestValidate($input,$rules,'reply');
        $input['body_original'] = $input['body'];
        $input['user_id'] = rand(1,30);//回复人的ID 谁登陆就是谁

        $reply_count = $this->postRepository->find($input['post_id'])->reply_count;

        try {
            \DB::beginTransaction();
            $this->repository->create($input);

            $update['last_reply_user_id'] = $input['user_id'];
            $update['reply_count'] = $reply_count + 1;
            $this->postRepository->update($update,$input['post_id']);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            $code = $e->getCode();
            throw new \Exception($code);
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reply = $this->repository->getEditReply($id);
        return view('admin.'.set_theme().'.reply.edit',compact('reply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->repository->find($id);

        $input = $request->only(['isBlocked','body']);
        $input = parse_input($input);

        $input['is_blocked'] = !empty($input['is_blocked']) && $input['is_blocked'] == 'on' ? 'yes' : 'no';

        $rules = [
            'body' => 'required'
        ];

        $this->requestValidate($input,$rules,'reply');

        $this->repository->update($input,$id);
        return redirect()->route('reply.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
