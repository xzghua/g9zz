@extends('index.simon.master')

@section('title','首页')

@section('css')

@endsection

@section('sub-navbar')



    <div class="sub-navbar node-header hide-ios">
        <div class="container">


            <div class="modal" id="node-selector" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>选择话题节点</strong>
                        </div>


                        <div class="modal-body">
                            <div class="index-sections panel panel-default">
                                <div class="panel-heading">讨论节点分类导航</div>
                                <div class="panel-body">
                                    <div class="row node-list">
                                        <div class="node media">
                                            <label class="media-left">Ruby</label>
                                            <span class="nodes media-body">
        										<span class="name"><a title="新手问题" data-id="52" href="/topics/node52">新手问题</a></span>
												<span class="name"><a title="招聘" data-id="25" href="/topics/node25">招聘</a></span>
												<span class="name"><a title="Rails" data-id="2" href="/topics/node2">Rails</a></span>
												<span class="name"><a title="Gem" data-id="3" href="/topics/node3">Gem</a></span>
												<span class="name"><a title="部署" data-id="44" href="/topics/node44">部署</a></span>
												<span class="name"><a title="RVM/rbenv" data-id="45" href="/topics/node45">RVM/rbenv</a></span>
												<span class="name"><a title="开源项目" data-id="47" href="/topics/node47">开源项目</a></span>
												<span class="name"><a title="mRuby" data-id="66" href="/topics/node66">mRuby</a></span>
												<span class="name"><a title="求职" data-id="64" href="/topics/node64">求职</a></span>
												<span class="name"><a title="测试" data-id="37" href="/topics/node37">测试</a></span>
												<span class="name"><a title="Sinatra" data-id="43" href="/topics/node43">Sinatra</a></span>
												<span class="name"><a title="Ruby" data-id="1" href="/topics/node1">Ruby</a></span>
												<span class="name"><a title="重构" data-id="29" href="/topics/node29">重构</a></span>
												<span class="name"><a title="JRuby" data-id="54" href="/topics/node54">JRuby</a></span>
												</span>
                                        </div>
                                        <div class="node media">
                                            <label class="media-left">Front-End</label>
                                            <span class="nodes media-body">
            									<span class="name"><a title="JavaScript" data-id="5" href="/topics/node5">JavaScript</a></span>
												<span class="name"><a title="CSS" data-id="41" href="/topics/node41">CSS</a></span>
												<span class="name"><a title="EmberJS" data-id="73" href="/topics/node73">EmberJS</a></span>
												<span class="name"><a title="AngularJS" data-id="71" href="/topics/node71">AngularJS</a></span>
												<span class="name"><a title="ReactJS" data-id="72" href="/topics/node72">ReactJS</a></span>
												<span class="name"><a title="Vue" data-id="77" href="/topics/node77">Vue</a></span>
												</span>
                                        </div>
                                        <div class="node media">
                                            <label class="media-left">Back-End</label>
                                            <span class="nodes media-body">
           										<span class="name"><a title="数据库" data-id="12" href="/topics/node12">数据库</a></span>
												<span class="name"><a title="运维" data-id="55" href="/topics/node55">运维</a></span>
												<span class="name"><a title="Git" data-id="11" href="/topics/node11">Git</a></span>
												<span class="name"><a title="搜索引擎" data-id="39" href="/topics/node39">搜索引擎</a></span>
												<span class="name"><a title="Linux" data-id="17" href="/topics/node17">Linux</a></span>
												<span class="name"><a title="Redis" data-id="10" href="/topics/node10">Redis</a></span>
												<span class="name"><a title="云服务" data-id="20" href="/topics/node20">云服务</a></span>
												<span class="name"><a title="算法" data-id="40" href="/topics/node40">算法</a></span>
												<span class="name"><a title="Mailer" data-id="46" href="/topics/node46">Mailer</a></span>
												<span class="name"><a title="安全" data-id="60" href="/topics/node60">安全</a></span>
												<span class="name"><a title="Nginx" data-id="18" href="/topics/node18">Nginx</a></span>
												<span class="name"><a title="MongoDB" data-id="9" href="/topics/node9">MongoDB</a></span>
												</span>
                                        </div>




                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>



            <ul class="filter nav nav-pills">

                <li>
                    <a href="#" class="all-nodes" data-toggle="modal" data-target="#node-selector">所有节点 <span class="caret-right"></span></a>
                </li>


                <li  data-content="当前分类下の所有"   @if (url()->current() == url()->full()) class="active" @endif ><a href="{{url()->current()}}">全部</a></li>
                <li  data-content="精华的话题" @if (url()->current().'?filter=excellent' == url()->full()) class="active" @endif><a href="{{url()->current()}}?filter=excellent" >精华</a></li>
                @foreach($cateShow as $value)
                    <li data-content="{{$value->name}}" @if (url()->current()."?cate=".$value->slug == url()->full()) class="active" @endif><a href="{{url()->current()}}?cate={{$value->slug}}" >{{$value->name}}</a></li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="topics topics-index panel panel-default">

                <div class="panel-body item-list">

                    @foreach($postList as $item)

                        <div class="topic media">
                            <div class="avatar media-left">
                                <a title="{{$item->author->name}}" href="#"><img class="media-object avatar-48" src="{{!empty($item->author->avatar) ? $item->author->avatar : 'https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2720246094,3678904868&fm=21&gp=0.jpg'}}" alt="{{$item->author->name}}" /></a>
                            </div>
                            <div class="infos media-body">
                                <div class="title media-heading">
                                    <a title="{{$item->title}}" href="">
                                        <span class="node">{{$item->category->name}}</span> {{$item->title}}
                                    </a>
                                    {{--<i class="fa fa-angle-double-up" title="置顶"></i>--}}
                                    <i title="" class="fa fa-diamond" data-toggle="tooltip" data-original-title="精华帖"></i>

                                </div>
                                <div class="info">
                                    <a class="user-name" data-name="{{$item->author->name}}" href="">{{$item->author->name}}</a>
                                    <span class="hidden-mobile">
     									 	•最后由 <a class="user-name" data-name="{{$item->last}}" href="">gakki</a> 回复于 <abbr class="timeago" title="{{$item->created_at}}">{{$item->created_at->diffForHumans()}}</abbr>
  										</span>
                                </div>
                            </div>
                            <div class="count media-right">
                                <a class="state-false" href="">{{$item->reply_count}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="panel-footer clearfix">

                    {{$postList->links()}}

                    
                </div>
            </div>


        </div>

        @include('index.simon.side')

    </div>
@endsection


@section('js')

@endsection