<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

//use Illuminate\Support\Facades\Input;

class PostController extends Controller
{

    public $repository;

    public $categoryRepository;

    public function __construct(PostRepository $repository,CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = $this->repository->paginate(per_page());

        return view('admin.'.set_theme().'.post.index',compact('paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.'.set_theme().'.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =  $request->only(['title','categoryId','content']);
        $input = parse_input($input);

        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'title' => 'required',
            'category_id' => 'required',//还需校验分类是否存在

        ];

        $this->requestValidate($input,$rules,'post');

        $input['user_id'] = 1;//作者名称

        $id = $this->repository->create($input);

        return view('.admin.'.set_theme().'.post.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->repository->find($id);

        $categories = $this->categoryRepository->all();

        return view('admin.'.set_theme().'.post.edit',compact('post','categories'));

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

        $input = $request->only(['title','categoryId','content']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'title' => 'required',
            'category_id' => 'required',//还需校验分类是否存在

        ];

        $this->requestValidate($input,$rules,'post');

        $this->repository->update($input,$id);

        return redirect()->route('post.index');

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
        dd($id,222222);
    }
}
