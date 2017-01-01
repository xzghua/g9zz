@extends('admin.default.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','帖子列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">帖子列表</h3>
        <div class="table-responsive overflow">
            <table class="tile table table-bordered table-striped table-hover">
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
                        <td>{{$item->author->name}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->reply_count}}</td>
                        <td>{{$item->view_count}}</td>
                        <td>{{$item->vote_count}} </td>
                        <td class="text-center">
                            @if (!empty($item->last_reply_user))
                                {{$item->last_reply_user->name}}
                            @else
                                --
                            @endif
                        </td>
                        <td>
                            {{$item->is_top == 'no' ? '否' : '是'}}
                        </td>
                        <td>
                            {{$item->is_excellent == 'no' ? '否' : '是'}}
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <button class="btn-primary"><a href="/admin/post/{{$item->id}}/edit">  <span class="icon">&#61952;</span> 修改</a></button>
                            <form action="/admin/post/{{$item->id}}" method="post">
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


@endsection

@section('js')
    {{--<script src="/admin/default/js/icheck.js"></script>--}}
    {{--<script src="/admin/default/js/toggler.min.js"></script>--}}
@endsection
