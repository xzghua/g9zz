@extends('admin.default.master')

@section('title','用户')

@section('menu','用户')
@section('page','用户列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">用户列表</h3>
        <div class="table-responsive overflow">
            <table class="tile table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>头像</th>

                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td><img src="{{$item->avatar}}" alt="头像" style="height: 40px;width: 40px; border-radius: 50%"> </td>

                        <td>
                            <form action="#" method="post">

                            <button class="btn-primary"><a href="/admin/post/{{$item->id}}/edit">  <span class="icon">&#61952;</span> 修改</a></button>
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
        {{ $users->appends(['sort' => 'created_at'])->links() }}
    </div>

@endsection

@section('js')
    {!! reminder()->message() !!}
@endsection
