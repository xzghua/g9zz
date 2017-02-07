@extends('index.g9zz.master')

@section('title','首页')

@section('css')
    <style>
        .pagination {
            margin: 13px 0;
        }
    </style>


@endsection

@section('content')


    <!--
        	作者：hanying991763@163.com
        	时间：2017-01-11
        	描述：首页内容
        -->
    <div class="container">
        <div class="row index">
            <div class="col-md-9 index_left">
                <div class="index_content">

                    <div class="index_left_head">
                        <ul class="">
                            <li  data-content="当前分类下の所有"   @if (url()->current() == url()->full()) class="active" @endif ><a href="{{url()->current()}}">全部</a></li>
                            <li  data-content="精华的话题" @if (url()->current().'?filter=excellent' == url()->full()) class="active" @endif><a href="{{url()->current()}}?filter=excellent" >精华</a></li>
                            {{--{{dd(url()->current(),url()->full())}}--}}
                            @foreach($cateShow as $value)
                                <li data-content="{{$value->name}}" @if (url()->current()."?cate=".$value->slug == url()->full()) class="active" @endif><a href="{{url()->current()}}?cate={{$value->slug}}" >{{$value->name}}</a></li>
                            @endforeach
                            </ul>
                    </div>
                    <div class="index_list">
                        <ul class="topic-list">

                            @if ($postList->total() == 0)

                                <a href="">
                                    <li class="row list-group-item">
                                        <div class="col-md-12" >
                                            <p style="text-align: center;color: #ccc;line-height: 20px;margin: 10px;">空空乳液</p>
                                        </div>
                                    </li>
                                </a>


                            @else
                                @foreach($postList as $item)


                                        <li class="row list-group-item">
                                            <div class="col-md-9">
                                                <img src="{{!empty($item->author->avatar) ? $item->author->avatar : 'https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2720246094,3678904868&fm=21&gp=0.jpg'}}" alt="{{$item->author->name}}" />
                                                <a href="{{route('index.post.detail', [$item->id])}}">
                                                <span class="label label-success">{{$item->category->name}}</span>{{$item->title}}
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{!empty($item->author->avatar) ? $item->author->avatar : 'https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2720246094,3678904868&fm=21&gp=0.jpg'}}" alt="{{$item->author->name}}" />

                                                <span class="" title="查看数">{{$item->view_count}}</span>/
                                                <span class="" title="评论数">{{$item->reply_count}}</span>-
                                                <span class="" title="{{$item->created_at}}" style="float: right">{{$item->created_at->diffForHumans()}}</span>
                                            </div>
                                        </li>


                                @endforeach
                            @endif




                        </ul>

                        <nav class="index_page">
                        {{$postList->links()}}
                            {{--<ul class="pagination">--}}
                                {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                                {{--<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">4</a></li>--}}
                                {{--<li><a href="#">5</a></li>--}}
                                {{--<li><a href="#">&raquo;</a></li>--}}
                            {{--</ul>--}}
                        </nav>
                    </div>
                </div>
            </div>

            @include('index.g9zz.side')
        </div>
    </div>

@endsection


@section('js')

@endsection

