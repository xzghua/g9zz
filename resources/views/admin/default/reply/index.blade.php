@extends('admin.default.master')

@section('title','回复')

@section('menu','回复')
@section('page','回复列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">回复列表</h3>
        <div class="table-responsive overflow">
            <table class="tile table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>帖子名</th>
                    <th>用户名</th>
                    <th>是否block</th>
                    <th>投票数</th>
                    <th>回复内容</th>
                    <th>内容原文</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reply as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{empty($item->post) ? '--' : $item->post->title}}</td>
                        <td>{{empty($item->reply_user) ? '--' : $item->reply_user->name}}</td>
                        <td>{{$item->is_blocked == 'yes' ? '是' : '否'}}</td>
                        <td>{{$item->vote_count}}</td>
                        <td>{{ cut_html_str( $item->body,30)}}</td>
                        <td>{{ cut_html_str($item->body_original,30)}}</td>
                        <td>
                            <button class="btn-primary"><a href="/admin/reply/{{$item->id}}/edit">  <span class="icon">&#61952;</span> 修改</a></button>
                            <form action="/admin/reply/{{$item->id}}" method="post">
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
        {{ $reply->appends(['sort' => 'created_at'])->links() }}
    </div>
@endsection

@section('js')

@endsection
