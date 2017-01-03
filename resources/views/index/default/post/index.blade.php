@extends('index.default.master')

@section('title','列表')

@section('css')

@endsection

@section('content')

    <div class="container main-container">

    <div class="col-md-9 topics-index main-col">
        <div class="panel panel-default">

            <div class="panel-heading">

                <ul class="list-inline topic-filter">
                    <li class="popover-with-html" data-content="最后回复排序"><a href="topics?filter=default" class="active">活跃</a></li>
                    <li class="popover-with-html" data-content="只看加精的话题"><a href="topics?filter=excellent">精华</a></li>
                    <li class="popover-with-html" data-content="点赞数排序"><a href="topics?filter=vote">投票</a></li>
                    <li class="popover-with-html" data-content="发布时间排序"><a href="topics?filter=recent">最近</a></li>
                    <li class="popover-with-html" data-content="无人问津的话题"><a href="topics?filter=noreply1">零回复</a></li>
                </ul>

                <div class="clearfix"></div>
            </div>


            <div class="panel-body remove-padding-horizontal">
                <ul class="list-group row topic-list">

                    <li class="list-group-item media" style="margin-top: 0px;">

                        <a class="reply_last_time hidden-xs" href="topics/172">
                            <img class="user_small_avatar avatar-circle" src="https://avatars1.githubusercontent.com/u/13896147?v=2&amp;s=100">

                            <span class="timeago">2016-12-16 18:09:30</span>
                        </a>

                        <div class="avatar pull-left">
                            <a href="users/51">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="叶落" src="http://www.g9zz.com/uploads/avatars/51_1480773038.png?imageView2/1/w/100/h/100"/>
                            </a>
                        </div>

                        <div class="reply_count_area hidden-xs" >
                            <div class="count_of_votes" title="投票数">
                                2
                            </div>
                            <div class="count_set">
                    <span class="count_of_replies" title="回复数">
                      5
                    </span>
                                <span class="count_seperator">/</span>
                                <span class="count_of_visits" title="查看数">
                      38
                    </span>
                            </div>
                        </div>

                        <div class="infos">

                            <div class="media-heading">

                                <span class="hidden-xs label label-default">问答</span>

                                <a href="topics/172" title="有个问题">
                                    有个问题
                                </a>
                            </div>

                        </div>

                    </li>

                    <li class="list-group-item media" style="margin-top: 0px;">

                        <a class="reply_last_time hidden-xs" href="topics/170">
                            <img class="user_small_avatar avatar-circle" src="http://www.g9zz.com/uploads/avatars/51_1480773038.png?imageView2/1/w/100/h/100">

                            <span class="timeago">2016-12-15 17:24:14</span>
                        </a>

                        <div class="avatar pull-left">
                            <a href="users/50">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="叶落山城" src="https://avatars2.githubusercontent.com/u/13896147?v=2&amp;s=100"/>
                            </a>
                        </div>

                        <div class="reply_count_area hidden-xs" >
                            <div class="count_of_votes" title="投票数">
                                2
                            </div>
                            <div class="count_set">
                    <span class="count_of_replies" title="回复数">
                      5
                    </span>
                                <span class="count_seperator">/</span>
                                <span class="count_of_visits" title="查看数">
                      57
                    </span>
                            </div>
                        </div>

                        <div class="infos">

                            <div class="media-heading">

                                <span class="hidden-xs label label-default">知乎</span>

                                <a href="topics/170" title="对于这个 g9zz 网,你怎么看">
                                    对于这个 g9zz 网,你怎么看
                                </a>
                            </div>

                        </div>

                    </li>

                    <li class="list-group-item media" style="margin-top: 0px;">

                        <a class="reply_last_time hidden-xs" href="topics/171">
                            <img class="user_small_avatar avatar-circle" src="https://avatars1.githubusercontent.com/u/13896147?v=2&amp;s=100">

                            <span class="timeago">2016-12-04 01:09:45</span>
                        </a>

                        <div class="avatar pull-left">
                            <a href="users/51">
                                <img class="media-object img-thumbnail avatar avatar-middle" alt="叶落" src="http://www.g9zz.com/uploads/avatars/51_1480773038.png?imageView2/1/w/100/h/100"/>
                            </a>
                        </div>

                        <div class="reply_count_area hidden-xs" >
                            <div class="count_of_votes" title="投票数">
                                1
                            </div>
                            <div class="count_set">
                    <span class="count_of_replies" title="回复数">
                      1
                    </span>
                                <span class="count_seperator">/</span>
                                <span class="count_of_visits" title="查看数">
                      43
                    </span>
                            </div>
                        </div>

                        <div class="infos">

                            <div class="media-heading">

                                <span class="hidden-xs label label-default">教程</span>

                                <a href="topics/171" title="这是个教程">
                                    这是个教程
                                </a>
                            </div>

                        </div>

                    </li>
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