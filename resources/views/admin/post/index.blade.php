@extends('admin.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','帖子列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">Table Striped</h3>
        <div class="table-responsive overflow">
            <table class="table tile table-striped  table-hover ">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>作者</th>
                    <th>贴子标题</th>
                    <th>分类</th>
                    <th>回复数</th>
                    <th>查看数</th>
                    <th>点赞数</th>
                    <th>最后回复</th>
                    <th>置顶</th>
                    <th>加精</th>
                    <th>发帖时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($paginate as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user_id}}</td>
                        <td>09/04/2012</td>
                        <td>分类{{$item->id}}</td>
                        <td>{{rand(1,100)}}</td>
                        <td>{{rand(1,100)}}</td>
                        <td>{{rand(1,100)}} </td>
                        <td>叶落</td>
                        <td>是</td>
                        <td>是</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <button class="btn-primary">  <span class="icon">&#61952;</span> Button</button>
                            <button class="btn-danger"> <span class="icon">&#61918;</span> Button</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
@endsection

@section('js')

@endsection
