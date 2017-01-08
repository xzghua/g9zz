@extends('admin.default.master')

@section('title','个人首页')

@section('menu','首页')
@section('page','个人首页')

@section('pageTitle','首页')

@section('content')


        <div class="block-area">
            <div class="row">
                <div class="col-md-9">
                    <div class="tile-light p-5 m-b-15">
                        <div class="cover p-relative">
                            <img src="/admin/default/img/cover-bg.jpg" class="w-100" alt="">
                            <img class="profile-pic" src="{{Auth::user()->avatar}}" alt="">
                            <div class="profile-btn">
                                <button class="btn btn-alt btn-sm"><i class="icon-bubble"></i> <span>Message</span></button>
                                <button class="btn btn-alt btn-sm"><i class="icon-user-2"></i> <span>Friend</span></button>
                            </div>
                        </div>
                        <div class="p-5 m-t-15">
                            人生如隙，时光如驹。你是尘中的烟火，我是尘中的马蹄。万事莫等错过才悔不当初。当我们对将来一无所知时，我们只能顾及现在，珍惜眼前人。

                            愿你爱的人还在你身边，爱你的人也不曾离弃。这样，就很好。
                        </div>
                    </div>

                    <div class="m-b-15 text-center profile-summary">
                        <button class="btn btn-sm">{{Auth::user()->follower_count}} Followers</button>
                        <button class="btn btn-sm">{{Auth::user()->reply_count}} Replies</button>
                        <button class="btn btn-sm hidden-xs">{{Auth::user()->topic_count}} Comments</button>
                        <button class="btn btn-sm hidden-xs">165 Likes</button>
                    </div>

                    <div class="row">
                        <!-- Works -->
                        <div class="col-md-7">
                            <div class="tile">
                                <h2 class="tile-title">Works in progress</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="">Edit</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>

                                <div class="p-10">
                                    <div class="m-b-10">
                                        Joomla CMS website for Lexus Inc. - 60%
                                        <div class="progress progress-striped progress-alt">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                        </div>
                                    </div>

                                    <div class="m-b-10">
                                        Lotus Design's AMC updates - 90%
                                        <div class="progress progress-striped progress-alt">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                        </div>
                                    </div>

                                    <div class="m-b-10">
                                        Chrome Extension developement - 33%
                                        <div class="progress progress-striped progress-alt">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%"></div>
                                        </div>
                                    </div>

                                    <div class="m-b-10">
                                        Wireframes for new website - 50%
                                        <div class="progress progress-striped progress-alt">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        Wordpress Website & Plugin - 99%
                                        <div class="progress progress-striped progress-alt">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Completed Projects -->
                            <div class="tile">
                                <h2 class="tile-title m-b-5">Completed Projects</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="">Edit</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>

                                <div class="p-10 news">
                                    <div class="col-xs-4">
                                        <div class="tile p-5 m-b-10">
                                            <a target="_blank" title="Medical-Pro Bootstrap Responsive Template" href="https://wrapbootstrap.com/theme/medical-pro-responsive-template-WB06421XL">
                                                <img class="w-100" src="/admin/default/img/projects/1.png" alt="">
                                                <small class="t-overflow m-t-10">Medical-Pro Bootstrap Responsive</small>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="tile p-5 m-b-10">
                                            <a target="_blank" title="Black Pearl Responsive Admin Template" href="https://wrapbootstrap.com/theme/black-pearl-responsive-admin-template-WB040H333">
                                                <img class="w-100" src="/admin/default/img/projects/2.png" alt="">
                                                <small class="t-overflow m-t-10">Black Pearl Responsive Admin Template</small>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="tile p-5 m-b-10">
                                            <a target="_blank" title="UNEKUE Single Page Portfolio Template" href="https://wrapbootstrap.com/theme/unekue-single-page-portfolio-template-WB04R2B18">
                                                <img class="w-100" src="/admin/default/img/projects/3.png" alt="">
                                                <small class="t-overflow m-t-10">UNEKUE Single Page Portfolio Template</small>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-5">
                            <div class="tile">
                                <h2 class="tile-title">Recent Activities</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="">Edit</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>

                                <div class="listview narrow">
                                    <div class="media">
                                        <div class="pull-right">
                                            <img width="37" src="/admin/default/img/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            Connected with <a class="news-title underline" href="">Mitchell Christein</a>
                                            <div class="clearfix"></div>
                                            <small class="muted">30 Minutes ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-right">
                                            <img width="37" src="/admin/default/img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a class="news-title underline" href="">Wayne Cerolina</a> Accepted your friend request
                                            <div class="clearfix"></div>
                                            <small class="muted">2 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <a class="news-title" href="">Uploaded 7 files to DOCS folder</a>
                                            <div class="clearfix"></div>
                                            <small class="muted">3 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            Joined the Group <a class="news-title underline" href="">'90s Rock Hits'</a>
                                            <div class="clearfix"></div>
                                            <small class="muted">5 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-right">
                                            <img width="37" src="/admin/default/img/profile-pics/5.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            Wrote on <a class="news-title underline" href="">David Villa's</a> Wall
                                            <div class="clearfix"></div>
                                            <small class="muted">8 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            Signed up an Affiliate
                                            <div class="clearfix"></div>
                                            <small class="muted">6 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            Completed and submited the project <a class="news-title underline" href="">Joomla</a>
                                            <div class="clearfix"></div>
                                            <small class="muted">12 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            Travelled to <a class="news-title underline" href="">San Fransisco</a>, United States
                                            <div class="clearfix"></div>
                                            <small class="muted">12 Hours ago</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-right">
                                            <img width="37" src="/admin/default/img/profile-pics/6.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            Conneted with <a class="news-title underline" href="">Emma Stone</a>
                                            <div class="clearfix"></div>
                                            <small class="muted">2 Days ago</small>
                                        </div>
                                    </div>
                                    <div class="media p-5 text-center l-100">
                                        <a href=""><small>VIEW ALL</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <!-- About Me -->
                    <div class="tile">
                        <h2 class="tile-title">About me</h2>
                        <div class="tile-config dropdown">
                            <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                            <ul class="dropdown-menu pull-right text-right">
                                <li><a href="">Edit</a></li>
                                <li><a href="">Delete</a></li>
                            </ul>
                        </div>

                        <div class="listview icon-list">
                            <div class="media">
                                <i class="icon pull-left">&#61744</i>
                                <div class="media-body">Software Developer at Google</div>
                            </div>

                            <div class="media">
                                <i class="icon pull-left">&#61753</i>
                                <div class="media-body">Studied at Oxford University</div>
                            </div>

                            <div class="media">
                                <i class="icon pull-left">&#61713</i>
                                <div class="media-body">Lives in Saturn, Milkyway</div>
                            </div>

                            <div class="media">
                                <i class="icon pull-left">&#61742</i>
                                <div class="media-body">From Titan, Jupitor</div>
                            </div>
                        </div>
                    </div>

                    <!-- Friends -->
                    <div class="tile">
                        <h2 class="tile-title">Connections</h2>
                        <div class="tile-config dropdown">
                            <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                            <ul class="dropdown-menu pull-right text-right">
                                <li><a href="">Edit</a></li>
                                <li><a href="">Delete</a></li>
                            </ul>
                        </div>

                        <div class="listview narrow">
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="37" src="/admin/default/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a class="news-title" href="">Mitchell Christein</a>
                                    <div class="clearfix"></div>
                                    <a href=""><small class="text-muted">Unfriend</small></a>
                                </div>
                            </div>
                            <div class="media p-l-5">
                                <div class="pull-left">
                                    <img width="37" src="/admin/default/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a class="news-title" href="">David Villa</a>
                                    <div class="clearfix"></div>
                                    <a href=""><small class="text-muted">Unfriend</small></a>
                                </div>
                            </div>
                            <div class="media" p-l-5">
                            <div class="pull-left">
                                <img width="37" src="/admin/default/img/profile-pics/3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a class="news-title" href="">The Iron man Jr.</a>
                                <div class="clearfix"></div>
                                <a href=""><small class="text-muted">Unfriend</small></a>
                            </div>
                        </div>
                        <div class="media" p-l-5">
                        <div class="pull-left">
                            <img width="37" src="/admin/default/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <a class="news-title" href="">Stephen Elop</a>
                            <div class="clearfix"></div>
                            <a href=""><small class="text-muted">Unfriend</small></a>
                        </div>
                    </div>
                    <div class="media" p-l-5">
                    <div class="pull-left">
                        <img width="37" src="/admin/default/img/profile-pics/5.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <a class="news-title" href="">Wendy wenkitson</a>
                        <div class="clearfix"></div>
                        <a href=""><small class="text-muted">Unfriend</small></a>
                    </div>
                </div>
                <div class="media p-5 text-center l-100">
                    <a href=""><small>VIEW ALL</small></a>
                </div>
            </div>
        </div>

        <!-- Photos -->
        <div class="tile">
            <h2 class="tile-title">Photos</h2>
            <div class="tile-config dropdown">
                <a data-toggle="dropdown" href="" class="tooltips tile-menu" title="" data-original-title="Options"></a>
                <ul class="dropdown-menu pull-right text-right">
                    <li><a href="">Edit</a></li>
                    <li><a href="">Delete</a></li>
                </ul>
            </div>

            <div class="p-5 photos">
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/1.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/2.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/3.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/4.jpg"  alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/5.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/6.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/2.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/5.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/1.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/3.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/4.jpg" alt="">
                </div>
                <div class="col-xs-3">
                    <img src="/admin/default/img/profile-pics/6.jpg" alt="">
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        </div>

        <br/><br/><br/>
        </div>
    </section>
@endsection

@section('js')
@endsection