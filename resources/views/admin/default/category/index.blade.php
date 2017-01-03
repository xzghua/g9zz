@extends('admin.default.master')

@section('title','分类')

@section('menu','分类')
@section('page','分类列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">分类列表</h3>
        <div class="table-responsive overflow">
            <table class="tile table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>分类名</th>
                    <th>缩略名</th>
                    <th>描述</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->html.$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <button class="btn-primary"><a href="/admin/category/{{$item->id}}/edit">  <span class="icon">&#61952;</span> 修改</a></button>
                            <form action="/admin/category/{{$item->id}}" method="post">
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

    {{--<div class="text-center">--}}
        {{--{{ $category->appends(['sort' => 'created_at'])->links() }}--}}
    {{--</div>--}}
@endsection

@section('js')
    {!! reminder()->message() !!}
@endsection
