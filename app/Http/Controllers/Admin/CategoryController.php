<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public $repository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->repository = $categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->repository->getCate();
        return view('admin.'.set_theme().'.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->repository->getCate();
        return view('admin.'.set_theme().'.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['parentId','name','slug','description']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'parent_id' => 'required',
            'name' => 'required',
            'slug' => 'max:60|unique:categories',
        ];

        $this->requestValidate($input,$rules,'category');
        $this->repository->create($input);
        return  redirect()->route('category.index');
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
        $category =  $this->repository->find($id);
        $categories = $this->repository->getCate();
        return view('admin.'.set_theme().'.category.edit',compact('category','categories'));
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

        $input = $request->only(['parentId','name','slug','description']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        //如果自己选自己为父类是不允许的
        if ($input['parent_id'] == $id) {
            dd('不允许');
        }

        //自己不能改成自己的子类

        $rules = [
            'parent_id' => 'required',
            'name' => 'required',
            'slug' => 'max:60|unique:categories,slug,'.$id,
        ];

        $this->requestValidate($input,$rules,'category');
        $this->repository->update($input,$id);
        return  redirect()->route('category.index');
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
