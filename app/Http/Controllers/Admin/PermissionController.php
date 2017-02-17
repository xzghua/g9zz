<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\PermissionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    public $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = $this->permissionRepository->models()->orderBy('created_at','desc')->paginate(20);
        return view('admin.'.set_theme().'.permission.index',compact('permissions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.'.set_theme().'.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['name','displayName','description']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'name' => 'required|unique:permissions',
            'display_name' => 'required',
            'description' => 'max:60',
        ];

        $this->requestValidate($input,$rules,'permission');

        $this->permissionRepository->create($input);
        reminder()->success('权限创建成功','创建成功');
        return redirect()->route('admin.permission.index');
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
        $permission =  $this->permissionRepository->find($id);
        return view('admin.'.set_theme().'.permission.edit',compact('permission'));
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
        $this->permissionRepository->find($id);

        $input = $request->only(['name','displayName','description']);
        $input = parse_input($input);
        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'name' => 'required|unique:permissions,name,'.$id,
            'display_name' => 'required',
            'description' => 'max:60',
        ];

        $this->requestValidate($input,$rules,'permission');

        $this->permissionRepository->update($input,$id);
        reminder()->success('权限修改成功','修改成功');

        return  redirect()->route('admin.permission.index');
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
