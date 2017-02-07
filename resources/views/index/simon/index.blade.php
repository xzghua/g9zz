@extends('index.simon.master')

@section('title','叶落山城秋')

@section('css')

@endsection

@section('content')
    <div class="panel panel-default hidden-xs">
        <div class="panel-body" style="text-align: center;">
            <div class="media" style="width: 480px; margin:0px auto; text-align: left;">
                <div class="media-left">
                    <img src="https://twemoji.b0.upaiyun.com/2/svg/1f381.svg" style="width: 55px;" />
                </div>
                <div class="media-body" style="line-height: 200%; text-align: center;">
                    <div style="font-size: 15px">
                        Ruby China 官方
                        <a href="https://gems.ruby-china.org" target="_blank">RubyGems 镜像</a>、
                        <a href="/wiki/ruby-mirror">Ruby 镜像</a> 正式上线！
                    </div>
                    <div>
                        <code style="padding: 4px 10px;">gem source -a https://gems.ruby-china.org</code>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row home-icons hidden-sm hidden-xs">
        <div class="col-md-3">
            <div class="item item1">
                <div class="icon">
                    <a href="/topics"><i class="fa fa-comments-o"></i></a>
                </div>
                <div class="text">
                    <a href="/topics">Ruby 社区 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item2">
                <div class="icon">
                    <a href="/wiki"><i class="fa fa-support"></i></a>
                </div>
                <div class="text">
                    <a href="/wiki">技术文档 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item3">
                <div class="icon">
                    <a href="/jobs"><i class="fa fa-users"></i></a>
                </div>
                <div class="text">
                    <a href="/jobs" title="Ruby 相关的招聘与求职">招聘与求职 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item4">
                <div class="icon">
                    <a href="/topics/popular"><i class="fa fa-diamond"></i></a>
                </div>
                <div class="text">
                    <a href="/topics/popular">精华文章 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="home_suggest_topics panel panel-default">
        <div class="panel-heading">社区精华帖</div>
        <div class="panel-body topics row indexlist">
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>

            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>
            <div class="topic media">
                <div class="avatar media-left">
                    <a title="琴歌" href=""><img src="/index/simon/img/avat.jpg"/></a>
                </div>
                <div class="infos media-body">
                    <div class="title media-heading">
                        <a title="Rails 最佳实践之配置管理" href="">
                            <span class="node">Rails</span> Rails 最佳实践之配置管理
                        </a> <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>
                    </div>
                    <div class="info">
                        <a class="user-name" data-name="imedal" href="/zamia">琴歌</a>
                        <span class="hidden-mobile">
								      •最后由 <a class="user-name" data-name="叶落山城" href="/">叶落山城</a> 回复于 <abbr class="timeago" title="2017-01-17T17:14:24+08:00">2017年1月17日</abbr>
								    </span>
                    </div>
                </div>
                <div class="count media-right">
                    <a class="state-false" href="/topics/32126#reply8">8</a>
                </div>
            </div>



        </div>
        <div class="panel-footer">
            <a href="/topics/excellent">查看更多精华帖...</a>
        </div>
    </div>

    <div class="index-sections panel panel-default">
        <div class="panel-heading">讨论节点分类导航</div>
        <div class="panel-body">
            <div class="row node-list">
                <div class="node media">
                    <label class="media-left">节点一</label>
                    <span class="nodes media-body">
            				<span class="name"><a title="新手问题" data-id="52" href="">新手问题</a></span>
							<span class="name"><a title="招聘" data-id="25" href="">招聘</a></span>
							<span class="name"><a title="Rails" data-id="2" href="">Rails</a></span>
							<span class="name"><a title="Gem" data-id="3" href="">Gem</a></span>
							<span class="name"><a title="部署" data-id="44" href="">部署</a></span>
							<span class="name"><a title="RVM/rbenv" data-id="45" href="">RVM/rbenv</a></span>
							<span class="name"><a title="开源项目" data-id="47" href="">开源项目</a></span>
							<span class="name"><a title="mRuby" data-id="66" href="">mRuby</a></span>
							<span class="name"><a title="求职" data-id="64" href="">求职</a></span>
							<span class="name"><a title="测试" data-id="37" href="">测试</a></span>
							<span class="name"><a title="Sinatra" data-id="43" href="">Sinatra</a></span>
							<span class="name"><a title="Ruby" data-id="1" href="">Ruby</a></span>
							<span class="name"><a title="重构" data-id="29" href="">重构</a></span>
							<span class="name"><a title="JRuby" data-id="54" href="">JRuby</a></span>
							</span>
                </div>
                <div class="node media">
                    <label class="media-left">节点二</label>
                    <span class="nodes media-body">
	            				<span class="name"><a title="JavaScript" data-id="5" href="">JavaScript</a></span>
								<span class="name"><a title="CSS" data-id="41" href="">CSS</a></span>
								<span class="name"><a title="EmberJS" data-id="73" href="">EmberJS</a></span>
								<span class="name"><a title="AngularJS" data-id="71" href="">AngularJS</a></span>
								<span class="name"><a title="ReactJS" data-id="72" href="">ReactJS</a></span>
								<span class="name"><a title="Vue" data-id="77" href="">Vue</a></span>
								<span class="name"><a title="JavaScript" data-id="5" href="">JavaScript</a></span>
								<span class="name"><a title="CSS" data-id="41" href="">CSS</a></span>
								<span class="name"><a title="EmberJS" data-id="73" href="">EmberJS</a></span>
								<span class="name"><a title="AngularJS" data-id="71" href="">AngularJS</a></span>
								<span class="name"><a title="ReactJS" data-id="72" href="">ReactJS</a></span>
								<span class="name"><a title="Vue" data-id="77" href="">Vue</a></span>
								<span class="name"><a title="JavaScript" data-id="5" href="">JavaScript</a></span>
								<span class="name"><a title="CSS" data-id="41" href="">CSS</a></span>
								<span class="name"><a title="EmberJS" data-id="73" href="">EmberJS</a></span>
								<span class="name"><a title="AngularJS" data-id="71" href="">AngularJS</a></span>
								<span class="name"><a title="ReactJS" data-id="72" href="">ReactJS</a></span>
								<span class="name"><a title="Vue" data-id="77" href="">Vue</a></span>
							</span>
                </div>

                <div class="node media">
                    <label class="media-left">节点三</label>
                    <span class="nodes media-body">
            				<span class="name"><a title="反馈" data-id="22" href="">反馈</a></span>
							<span class="name"><a title="公告" data-id="21" href="">公告</a></span>
							<span class="name"><a title="Homeland" data-id="23" href="">Homeland</a></span>
							<span class="name"><a title="NoPoint" data-id="61" href="">NoPoint</a></span>
							</span>
                </div>

            </div>
        </div>
    </div>

    <div class="index-locations panel panel-default">
        <div class="panel-heading">热门城市</div>
        <div class="panel-body location-list" style="text-align:center;">
            <span class="name"><a href="">北京</a></span>
            <span class="name"><a href="">上海</a></span>
            <span class="name"><a href="">深圳</a></span>
            <span class="name"><a href="">杭州</a></span>
            <span class="name"><a href="">成都</a></span>
            <span class="name"><a href="">广州</a></span>
            <span class="name"><a href="">武汉</a></span>
            <span class="name"><a href="">西安</a></span>
        </div>
    </div>
@endsection


@section('js')

@endsection