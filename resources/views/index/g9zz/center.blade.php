@extends('index.g9zz.master')

@section('title','个人中心')

@section('css')

    <script src="/index/g9zz/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/index/g9zz/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
@endsection

@section('content')

    <div class="container">
        <div class="row center_content">
            <div class="col-xs-2 me_left">
                <div class="me_left_avat">
                    <img src="/index/g9zz/images/avat.jpg" class="img-circle"/> 琴歌
                </div>
                <div class="me_leftlist">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#settting" data-toggle="tab">设置</a></li>
                        <li><a href="#notice" data-toggle="tab">通知</a></li>
                        <li><a href="#post" data-toggle="tab">帖子</a></li>
                        <li><a href="#collection" data-toggle="tab">收藏</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-10 me_right">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="settting">
                        <h2>个人设置</h2>
                        <form role="form">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1" style="margin-top: 15px;">头像</label>
                                <div class="col-xs-2 me_radio">
                                    <label class="local-avatar-label" title="上传头像">
                                        <img src="/index/g9zz/images/avat.jpg" class="img-circle"/>
                                    </label>
                                </div>
                                <label class="col-xs-4 me_file">
                                    <a href="javaxcript:;" class="file">选择文件<input type="file" name="" id="" value="" /></a>
                                </label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">昵称</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" id="name" placeholder="请输入你的昵称">
                                </div>
                                <label class="col-xs-4">请跟 GitHub 上保持一致</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">邮箱</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的邮箱">
                                </div>
                                <label class="col-xs-4">请输入正确的邮箱</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">城市</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的城市">
                                </div>
                                <label class="col-xs-4">如：北京、广州</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">公司</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的公司名称">
                                </div>
                                <label class="col-xs-4">如：百度</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">微博</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的个人微博">
                                </div>
                                <label class="col-xs-4">微博个人主页链接</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">Twitter</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的Twitter账号">
                                </div>
                                <label class="col-xs-4">如：twitter</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">LinkedIn</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的LinkedIn主页">
                                </div>
                                <label class="col-xs-4">你的 LinkedIn 主页完整 URL 地址</label>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-xs-1">网站</label>
                                <div class="col-xs-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入你的个人网站">
                                </div>
                                <label class="col-xs-4">如：example.com，不需要加前缀 </label>
                            </div>
                            <button type="submit" class="btn btn-info">更新信息</button>
                        </form>

                    </div>
                    <div class="tab-pane fade "   id="notice">
                        <h2>站内通知</h2>
                        <div class="notice_list">
                            共有<span class="">5</span>条通知记录
                        </div>
                        <div class="alert alert-success"><a href="">偏执 </a>• 赞了你的主题 <a href="">ECMAScript 6 中文社区已开通</a>-10天前</div>
                        <div class="alert alert-info"><a href="">偏执 </a>• 回复了你的主题 <a href="">ECMAScript 6 中文社区已开通</a>-刚刚</div>
                        <div class="alert alert-warning">你的主题 <a href="">ECMAScript 6 中文社区已开通 </a>已被设置为下沉-1分钟前</div>
                        <div class="alert alert-warning">你的主题 <a href="">ECMAScript 6 中文社区已开通 </a>已被设置为精华-10分钟前</div>
                        <div class="alert alert-warning">你的主题 <a href="">ECMAScript 6 中文社区已开通 </a>已被设置为置顶-刚刚</div>
                        <div class="alert alert-danger">你的主题 <a href="">ECMAScript 6 中文社区已开通 </a>已被删除-10分钟前</div>
                    </div>
                    <div class="tab-pane fade" id="post">
                        <h2>帖子</h2>
                        <div class="me_right_postlist">
                            <ul>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="collection">
                        <h2>收藏</h2>
                        <div class="me_right_postlist">
                            <ul>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                                <li><a href="" class="me_right_postlist_title">ECMAScript 6 中文社区已开通 </a><a href="" class="me_right_postlist_ag">公告</a>⋅ 2 点赞 ⋅ 0 回复 ⋅ 12天前</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('js')

@endsection