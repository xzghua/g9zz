@extends('index.default.master')
@section('title','详情')

@section('css')

@endsection

@section('content')

<div class="container main-container">

    <div class="col-md-9 topics-show main-col">
        <!-- Topic Detial -->
        <div class="topic panel panel-default">
            <div class="infos panel-heading">

                <h1 class="panel-title topic-title">{{$detail->title}}</h1>

                <div class="meta inline-block" >

                    <a href="../categories/1" class="remove-padding-left">
                        <i class="fa fa-folder text-md" aria-hidden="true"></i> {{$detail->category->name}}
                    </a>
                    ⋅
                    <a class="author" href="../users/50">
                        {{$detail->author->name}}
                    </a>

                    ⋅
                    于 <abbr title="2016-12-03 21:46:33" class="timeago">{{$detail->created_at}}</abbr>
                    ⋅
                    @if (!empty($detail->last_reply_user))
                        最后回复由
                        <a href="../users/51">
                            {{$detail->last_reply_user->name}}
                        </a>
                        于 <abbr title="2016-12-15 17:24:14" class="timeago">2016-12-15 17:24:14</abbr>
                    @endif
                    ⋅

                    {{$detail->view_count}} 阅读

                </div>
                <div class="clearfix"></div>
            </div>

            <div class="content-body entry-content panel-body ">

                <div class="markdown-body" id="emojify">
                    {{$detail->content}}
                </div>

                <div data-lang-excellent="本帖已被设为精华帖！" data-lang-wiki="本帖已被设为社区 Wiki！" class="ribbon-container">
                </div>
            </div>
            <div class="appends-container" data-lang-append="附言">
                @if (!empty($detail['postscript']))
                    @foreach($detail['postscript'] as $key =>  $value)
                        <div class="appends">
                            <span class="meta">附言 {{$key+1}} &nbsp;·&nbsp; <abbr title="{{$value->created_at}}" class="timeago">{{$value->created_at}}</abbr></span>
                            <div class="sep5"></div>
                            <div class="markdown-reply append-content">
                                {{$value->content}}
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="panel-footer operate">

                <div class="pull-left hidden-xs">
                    <div class="social-share-cs "></div>
                </div>


                <div class="pull-right actions">

                    {{--<a data-ajax="post" id="topic-recomend-button" href="javascript:void(0);" data-url="http://www.g9zz.com/topics/recommend/172" class="admin popover-with-html " data-content="推荐主题，加精的帖子会出现在首页">--}}
                        {{--<i class="fa fa-trophy"></i>--}}
                    {{--</a>--}}

                    {{--<a data-ajax="post" id="topic-pin-button" href="javascript:void(0);" data-url="http://www.g9zz.com/topics/pin/172" class="admin popover-with-html " data-content="帖子置顶，会在列表页置顶">--}}
                        {{--<i class="fa fa-thumb-tack"></i>--}}
                    {{--</a>--}}

                    {{--<a data-ajax="post" id="topic-sink-button" href="javascript:void(0);" data-url="http://www.g9zz.com/topics/sink/172" class="admin popover-with-html " data-content="沉贴，帖子将会被降低排序优先级">--}}
                        {{--<i class="fa fa-anchor"></i>--}}
                    {{--</a>--}}

                    <a data-method="delete" id="topic-delete-button" href="javascript:void(0);" data-url="http://www.g9zz.com/topics/delete/172" data-content="删除" class="admin  popover-with-html">
                        <i class="fa fa-trash-o"></i>
                    </a>

                    <a id="topic-append-button" href="javascript:void(0);" class="admin  popover-with-html" data-toggle="modal" data-target="#exampleModal" data-content="帖子附言234">
                        <i class="fa fa-plus"></i>
                    </a>

                    {{--<a id="topic-edit-button" href="http://www.g9zz.com/topics/172/edit" data-content="编辑" class="admin  popover-with-html">--}}
                        {{--<i class="fa fa-pencil-square-o"></i>--}}
                    {{--</a>--}}

                </div>
                <div class="clearfix"></div>
            </div>


        </div>


        {{--<div class="votes-container panel panel-default padding-md">--}}

            {{--<div class="panel-body vote-box text-center">--}}

                {{--<div class="btn-group">--}}

                    {{--<a data-ajax="post" href="javascript:void(0);" data-url="http://www.g9zz.com/topics/170/upvote" title="Up Vote"--}}
                       {{--data-content="点赞相当于收藏，可以在个人页面的「赞过的话题」导航里查看"--}}
                       {{--id="up-vote"--}}
                       {{--class="vote btn btn-primary btn-inverted popover-with-html " >--}}
                        {{--<i class="fa fa-thumbs-up" aria-hidden="true"></i>--}}
                        {{--点赞--}}
                    {{--</a>--}}

                {{--</div>--}}

                {{--<div class="voted-users">--}}

                    {{--<div class="user-lists">--}}
                        {{--<a href="../users/50" data-userId="50">--}}
                            {{--<img class="img-thumbnail avatar avatar-middle" src="#" style="width:48px;height:48px;">--}}
                        {{--</a>--}}
                        {{--<a href="../users/51" data-userId="51">--}}
                            {{--<img class="img-thumbnail avatar avatar-middle" src="#" style="width:48px;height:48px;">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<a class="voted-template" href="#" data-userId="" style="display:none">--}}
                        {{--<img class="img-thumbnail avatar avatar-middle" src="#" style="width:48px;height:48px;">--}}
                    {{--</a>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        <!-- Reply List -->


        <div class="replies panel panel-default list-panel replies-index">
            <div class="panel-heading">
                <div class="total">回复数量: <b>{{count($detail->reply)}}</b> </div>
            </div>

            <div class="panel-body">

                @if (!empty($replies))
                <ul class="list-group row">

                    @foreach($replies as $key =>  $item)

                            <li class="list-group-item media" style="margin-top: 0px;">

                                <div class="avatar pull-left">
                                    <a href="../users/50">
                                        <img class="media-object img-thumbnail avatar avatar-middle" alt="{{$item->reply_user->name}}" src="https://avatars2.githubusercontent.com/u/13896147?v=2&amp;s=100"  style="width:48px;height:48px;"/>
                                    </a>
                                </div>

                                <div class="infos">

                                    <div class="media-heading">

                                        <a href="../users/50" title="{{$item->reply_user->name}}" class="remove-padding-left author">
                                            {{$item->reply_user->name}}
                                        </a>

                                        <a class="label label-success mod-label popover-with-html" data-content="管理员" href="../roles/1">MOD</a>

                                        <span class="introduction">
                                             {{$item->reply_user->introduction}}
                                        </span>

                                        <span class="operate pull-right">
                                            <a class="fa fa-reply" href="javascript:void(0)" onclick="replyOne('{{$item->reply_user->name}}');" title="回复 {{$item->reply_user->name}}"></a>
                                        </span>

                                        <div class="meta">
                                            <a name="reply1" class="anchor" href="" aria-hidden="true"># {{$key+1}}</a>


                                            <span> ⋅  </span>
                                            <abbr class="timeago" title="{{$item->created_at}}">{{$item->created_at}}</abbr>

                                        </div>

                                    </div>

                                    <div class="media-body markdown-reply content-body">
                                        {{$item->body}}
                                    </div>

                                </div>

                            </li>
                    @endforeach

                </ul>


                @else

                    <ul class="list-group row"></ul>
                    <div id="replies-empty-block" class="empty-block">咱无评论~~</div>
                @endif
                <!-- Pager -->
                <div class="pull-right" style="padding-right:20px">

                </div>

            </div>

        </div>

        <!-- Reply Box -->
        <div class="reply-box form box-block">

            <form method="POST" action="/reply" accept-charset="UTF-8" id="reply-form">
                {!! csrf_field() !!}
                <input type="hidden" name="postId" value="{{$detail->id}}" />

                <div id="reply_notice" class="box">
                    <ul class="helpblock list">
                        <li>此处可以放点广告</li>
                        <li>此处可以放点广告</li>
                    </ul>
                </div>

                <div class="form-group">
                    <textarea class="form-control" {{--disabled="disabled"--}} rows="5" placeholder="需要登录后才能发表评论." name="body" cols="50"></textarea>
                </div>

                <div class="form-group reply-post-submit">
                    <input class="btn btn-primary " id="reply-create-submit" type="submit" value="回复">
                    <span class="help-inline" title="Or Command + Enter">Ctrl+Enter</span>
                </div>

                <div class="box preview markdown-reply" id="preview-box" style="display:none;"></div>

            </form>
        </div>



    </div>


        <div class="col-md-3 side-bar">



            {{--<div class="panel panel-default corner-radius">--}}
                {{--<div class="panel-heading text-center">--}}
                    {{--<h3 class="panel-title">叶落山城 的其他话题</h3>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="panel panel-default corner-radius">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">分类下其他主题</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>




            {{--<div class="panel panel-default corner-radius">--}}
                {{--<div class="panel-body text-center sidebar-sponsor-box">--}}
                {{--</div>--}}
            {{--</div>--}}



            <div class="panel panel-default corner-radius panel-hot-topics">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">随机推荐话题</h3>
                </div>
                <div class="panel-body">
                </div>
            </div>






            <div class="box text-center">
                <p style="margin-bottom: 10px;margin-top: 10px;">看呀,那边有个sb</p>
                <img class="image-border popover-with-html" data-content=""
                     src="http://dl.bizhi.sogou.com/images/2012/03/22/49350.jpg" style="width:80%">
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

        <div class="banner-container rbs row">
        </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">帖子附言</h4>
            </div>

            <form method="POST" action="/appends/{{$detail->id}}" accept-charset="UTF-8">
                {!! csrf_field() !!}
                <div class="modal-body">

                    <div class="alert alert-warning">
                        附加内容
                    </div>
                    <input type="hidden" name="topic_id" value="{{$detail->id}}">
                    <div class="form-group">
                        <textarea class="form-control" style="min-height:20px" placeholder="请使用markdown语法 " name="content1" cols="50" rows="10"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>

            </form>

        </div>
    </div>
</div>




@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function()
        {
            var $config = {
                title               : '对于这个 g9zz 网,你怎么看 @叶落山城秋 @叶落山城秋 ',
                wechatQrcodeTitle   : "微信扫一扫：分享", // 微信二维码提示文字
                wechatQrcodeHelper  : '<p>微信里点“发现”，扫一下</p><p>二维码便可将本文分享至朋友圈。</p>',
                sites               : ['weibo','wechat',  'facebook', 'twitter', 'google','qzone', 'qq', 'douban'],
            };

            socialShare('.social-share-cs', $config);

            Config.following_users =   [] ;
            PHPHub.initAutocompleteAtUser();
        });
    </script>
@endsection