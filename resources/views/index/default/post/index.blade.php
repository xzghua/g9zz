@extends('index.default.master')

@section('title','列表')

@section('css')

@endsection

@section('content')

    <div class="container main-container">

    <div class="col-md-9 topics-index main-col">
        <div class="panel panel-default">

            <div class="panel-heading">

                {{--<ul class="list-inline topic-filter">--}}
                    {{--<li class="popover-with-html" data-content="最后回复排序"><a href="topics?filter=default" class="active">活跃</a></li>--}}
                    {{--<li class="popover-with-html" data-content="只看加精的话题"><a href="topics?filter=excellent">精华</a></li>--}}
                    {{--<li class="popover-with-html" data-content="点赞数排序"><a href="topics?filter=vote">投票</a></li>--}}
                    {{--<li class="popover-with-html" data-content="发布时间排序"><a href="topics?filter=recent">最近</a></li>--}}
                    {{--<li class="popover-with-html" data-content="无人问津的话题"><a href="topics?filter=noreply1">零回复</a></li>--}}
                {{--</ul>--}}

                <ul class="list-inline topic-filter">
                    <li class="popover-with-html" data-content="当前分类下の所有"><a href="{{url()->current()}}"  @if (url()->current() == url()->full()) class="active" @endif >全部</a></li>
                    <li class="popover-with-html" data-content="精华的话题"><a href="{{url()->current()}}?filter=excellent" @if (url()->current().'?filter=excellent' == url()->full()) class="active" @endif>精华</a></li>

                    {{--<ul class="list-inline topic-filter">--}}
                        {{--<li class="popover-with-html" data-content="点赞数排序"><a href="topics?filter=vote">投票</a></li>--}}
                        {{--<li class="popover-with-html" data-content="点赞数排序"><a href="topics?filter=vote">投票</a></li>--}}
                        {{--<li class="popover-with-html" data-content="点赞数排序"><a href="topics?filter=vote">投票</a></li>--}}

                    {{--</ul>--}}
                    @foreach($cateShow as $value)
                        <li class="popover-with-html" data-content="{{$value->name}}"><a href="{{url()->current()}}?cate={{$value->slug}}"  @if (url()->current()."?cate=".$value->slug == url()->full()) class="active" @endif>{{$value->name}}</a></li>
                    @endforeach
                    {{--<li class="popover-with-html" data-content="无人问津的话题"><a href="topics?filter=noreply1">零回复</a></li>--}}
                </ul>


                <div class="clearfix"></div>
            </div>


            <div class="panel-body remove-padding-horizontal">
                <ul class="list-group row topic-list">

                    @foreach($postList as $item)
                        <li class="list-group-item media" style="margin-top: 0px;">

                            <a class="reply_last_time hidden-xs" href="topics/172">
                                <img class="user_small_avatar avatar-circle" src="{{empty($item->last_reply_user) || empty($item->last_reply_user->avatar) ?  'https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2720246094,3678904868&fm=21&gp=0.jpg' : $item->last_reply_user->avatar}}">

                                <span class="timeago">{{$item->created_at}}</span>
                            </a>

                            <div class="avatar pull-left">
                                <a href="/">
                                    <img class="media-object img-thumbnail avatar avatar-middle" alt="{{$item->author->name}}" src="{{isset($item->author->avatar) ? $item->author->avatar : 'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1693841294,2799914919&fm=21&gp=0.jpg'}}"/>
                                </a>
                            </div>

                            <div class="reply_count_area hidden-xs" >
                                <div class="count_of_votes" title="投票数">
                                    {{$item->vote_count}}
                                </div>
                                <div class="count_set">
                                <span class="count_of_replies" title="回复数">
                                    {{$item->reply_count}}
                                </span>
                                    <span class="count_seperator">/</span>
                                    <span class="count_of_visits" title="查看数">
                                    {{$item->view_count}}
                                </span>
                                </div>
                            </div>

                            <div class="infos">

                                <div class="media-heading">

                                    <span class="hidden-xs label label-default">{{$item->category->name}}</span>

                                    <a href="{{$item->id}}" title="{{$item->title}}">
                                        {{$item->title}}
                                    </a>
                                </div>

                            </div>

                        </li>



                    @endforeach


                </ul>

            </div>

            <div class="panel-footer text-right remove-padding-horizontal pager-footer">
                <!-- Pager -->

            </div>


        </div>

        <!-- Nodes Listing -->

    </div>

    <div class="col-md-3 side-bar">







        <div class="panel panel-default corner-radius">
            <div class="panel-body text-center">
                <div class="btn-group">
                    <a href="topics/create" class="btn btn-primary btn-lg btn-inverted">
                        <i class="fa fa-paint-brush" aria-hidden="true"></i>  新 建 话 题
                    </a>
                </div>
            </div>
        </div>

        <div class="panel panel-default corner-radius panel-active-users">
            <div class="panel-heading text-center">
                <h3 class="panel-title">活跃用户</h3>
            </div>
            <div class="panel-body">
            </div>
        </div>

        <div class="panel panel-default corner-radius panel-hot-topics">
            <div class="panel-heading text-center">
                <h3 class="panel-title">热门话题</h3>
            </div>
            <div class="panel-body">
            </div>
        </div>



        <div class="panel panel-default corner-radius">
            <div class="panel-body text-center sidebar-sponsor-box">
            </div>
        </div>







        <div class="box text-center">
            <p style="margin-bottom: 10px;margin-top: 10px;">哎哟,这里放啥呢</p>
            <img class="image-border popover-with-html" data-content=""
                 src="https://oe9nbfytu.qnssl.com/user/edc0d38840774bb6a1c3e5b731059eb2/thumb" style="width:80%">
            <br/><br/>
        </div>


        <div class="panel panel-default corner-radius" style="color:#a5a5a5">
            <div class="panel-body text-center">
                ♥ All you have lost will be back bit by bit as long as you had lost it <br>
                by <a href="http://estgroupe.com/"  style="color:#a5a5a5">Yela</a>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>


    </div>
@endsection

@section('js')
@endsection