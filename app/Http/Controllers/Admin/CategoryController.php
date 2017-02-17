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
        $category = $this->repository->getTopCate();
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
        $input = $request->only(['parentId','name','slug','description','isShow']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'parent_id' => 'required',
            'name' => 'required|unique:categories',
            'slug' => 'max:60|unique:categories|regex:/^[a-zA-Z0-9]+$/',
        ];


        $this->requestValidate($input,$rules,'category');
        $input['is_show'] = !empty($input['is_show']) && $input['is_show'] == 'on' ? 'yes' : 'no';
        $this->checkCateShow($input);

        if ($input['parent_id'] != 0){
            $input['weight'] = 1;
            $parentId =  $this->repository->checkParentId($input['parent_id']);
            if ($parentId != 0) {
                $code = config('validation')['category']['parent.error'];
                $this->pushError($code);
            }
        }

        $this->repository->create($input);
        reminder()->success('分类创建成功','创建成功');
        return view('admin.'.set_theme().'.category.index',compact('category'));

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

        $input = $request->only(['parentId','name','slug','description','isShow']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        if ($input['parent_id'] == $id) {
            $code = config('validation')['category']['parentEqualToSelf.error'];
            $this->pushError($code);
        }

        $rules = [
            'parent_id' => 'required',
            'name' => 'required|unique:categories,name,'.$id,
            'slug' => 'max:60|unique:categories,slug,'.$id.'|regex:/^[a-zA-Z0-9]+$/',
        ];

        $this->requestValidate($input,$rules,'category');

        $input['is_show'] = !empty($input['is_show']) && $input['is_show'] == 'on' ? 'yes' : 'no';
        $this->checkCateShow($input);
        $parentId = $this->repository->checkParentId($input['parent_id']);
        if ($parentId != 0) {
            $code = config('validation')['category']['parent.error'];
            $this->pushError($code);
        }


        $this->repository->update($input,$id);
        reminder()->success('分类修改成功','修改成功');

        return  redirect()->route('admin.category.index');
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

    /**
     * 分类的is_show 在该分类下总共显示数不能超过n个(n在config/g9zz.php里的cate_show_max_count进行配置)
     *
     * @param $input
     */
    public function checkCateShow($input)
    {
        //TM的显示不能超过十个!
        if ($input['is_show'] == 'yes' && $input['parent_id'] != 0) {
            $shows = $this->repository->getAllIsShowCate($input['parent_id']);
            if (count($shows) > config('g9zz')['cate_show_max_count']) {
                $code = config('validation')['category']['showMaxCount.error'];
                $this->pushError($code);
            }
        }
    }
}
