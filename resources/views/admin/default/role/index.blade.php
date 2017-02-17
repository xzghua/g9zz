@extends('admin.default.master')

@section('title','角色')

@section('menu','角色')
@section('page','角色列表')

@section('pageTitle','列表')

@section('css')



@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">角色列表</h3>
        <a href="{{route('role.create')}}"><button class="btn-info">创建新角色</button></a>
        <div class="table-responsive overflow">
            <table class="tile table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>角色名</th>
                    <th>角色别名</th>
                    <th>描述</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->display_name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <form action="/admin/post/{{$item->id}}" method="post">
                                <button class="btn-primary"><a href="{{route('role.edit',$item->id)}}">  <span class="icon">&#61952;</span> 修改</a></button>
                                <button class="btn-info"><a href="{{route('role.assignment',$item->id)}}">  <span class="icon">&#61735;</span> 分配权限</a></button>
                                <input type="hidden" name="_method" value="delete">
                                {!! csrf_field() !!}
                                <button class="btn-danger"><span class="icon">&#61918;</span> 删除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center">
        {{ $roles->appends(['sort' => 'created_at'])->links() }}
    </div>

@endsection

@section('js')
    {!! reminder()->message() !!}
@endsection
