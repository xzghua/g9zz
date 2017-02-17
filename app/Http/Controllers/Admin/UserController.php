<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\RoleRepository;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public $userRepository;

    public $roleRepository;

    public function __construct(UserRepository $userRepository,RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->models()->with('roles')->orderBy('created_at','desc')->paginate(20);
//        dd($users->toArray());
        return view('admin.'.set_theme().'.user.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function getAssignRole($id)
    {
        $roles = $this->roleRepository->all();
        $ids = $this->userRepository->getAssignRoleIds($id);
        return view('admin.'.set_theme().'.rbac.userAssignRole',compact('roles','ids','id'));
    }

    public function postAssignRole(Request $request,$id)
    {
        $role = $request->only('role');
        $res = $this->userRepository->syncRelationship($role,$id);

        if ($res) {
            reminder()->success('角色分配成功','操作成功');
        } else {
            reminder()->error('角色分配失败','操作失败');
        }

        return  redirect()->route('user.index');
    }

}
