@extends('index.g9zz.master')

@section('title','详情')

@section('css')
    <link rel="stylesheet" type="text/css" href="/index/g9zz/css/editormd.css"/>


    <script src="/index/g9zz/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../index/g9zz/js/editormd.js" type="text/javascript" charset="utf-8"></script>
    <script src="/index/g9zz/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        //    调用编辑器
        var testEditor;
        $(function() {
            testEditor = editormd("test-editormd", {
                width   : "100%",
                height  : 340,
                path    : "lib/",
                imageUpload : true,
                imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                imageUploadURL : "./php/upload.php",
                saveHTMLToTextarea : true,
                watch : false
            });
        });
        $(function () { $("[data-toggle='tooltip']").tooltip(); });
    </script>
@endsection

@section('content')
    <!--
        	作者：hanying991763@163.com
        	时间：2017-01-11
        	描述：帖子详情
        -->
    <div class="container">
        <div class="col-md-9 index_left">
            <div class="info_info">
                <div class="index_left_head info_title">
                    <h2>
                        @if ($detail->is_top == 'yes') <span>置顶</span> @endif
                        @if ($detail->is_excellent == 'yes') <span>精华</span> @endif
                        {{$detail->title}}
                    </h2>
                    <p>{{$detail->author->name}} ⋅ 于 {{$detail->created_at->diffForHumans()}} ⋅ @if (!empty($detail->last_reply_user))最后由 {{$detail->last_reply_user->name}} 回复 @endif⋅ {{$detail->view_count}} 阅读</p>
                </div>
                <div class="info_content">
                    <div class="info_code">
                        {{$detail->content}}
                    </div>
                    <div class="info_postscript">
                        <span>附言/一个月前</span>
                        <p>原来https://www.viw3c.com/users/这里有全部成员……</p>
                    </div>
                    <div class="info_postscript">
                        <span>附言/一个月前</span>
                        <p>原来https://www.viw3c.com/users/这里有全部成员……</p>
                    </div>

                    <div class="info_operation">
                        <a href="" title="帖子编辑" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="" title="删除帖子" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href="" title="加精帖子" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-glass"></span></a>
                        <a href="" title="置顶帖子" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-floppy-open"></span></a>
                        <a href="" title="下沉帖子" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-save"></span></a>
                        <a href="" title="关闭回复" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-map-marker"></span></a>
                        <a href="javascript:;" data-toggle="modal" data-target="#myModal" title="帖子附言" data-toggle="tooltip" data-placement="top">
                            <span class="glyphicon glyphicon-pushpin"></span>
                        </a>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">添加附言</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-warning" role="alert">附加内容</div>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary">提交</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="info_reply">
                <div class="index_left_head info_title">
                    <h4>回复数：{{count($replies)}}</h4>
                </div>
                <div class="info_content">

                    @if (!empty($replies))
                        @foreach($replies as $key => $item)
                            <div class="info_code row">
                                <div class="info_avat col-md-1">
                                    <img src="{{!empty($item->reply_user->avatar) ? $item->reply_user->avatar : '/index/g9zz/images/logo.png'}}" alt="{{$item->reply_user->name}}"/>
                                </div>
                                <div class="info_codeinfo col-md-10">
                                    <div class="">
                                        <span class="label label-info">{{$item->reply_user->name}}</span>{{$key+1}}楼•{{$item->created_at->diffForHumans()}}
                                    </div>
                                    <div class="">
                                        {{$item->body}}
                                    </div>
                                </div>
                                <div class="info_replynice col-md-1">
                                    <a href="" data-toggle="tooltip" data-placement="top" title="点赞"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                    <a href="" data-toggle="tooltip" data-placement="top" title="回复"><span class="glyphicon glyphicon-share-alt"></span></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="info_code row">
                            <p style="text-align: center;color: #ccc;line-height: 20px;margin: 10px;">空空乳液</p>
                        </div>

                    @endif

                </div>

            </div>
            <div class="info_addreply">
                <div class="editormd" id="test-editormd">
                    <textarea class="editormd-markdown-textarea" name="test-editormd-markdown-doc"></textarea>
                    <!-- 第二个隐藏文本域，用来构造生成的HTML代码，方便表单POST提交，这里的name可以任意取，后台接受时以这个name键为准 -->
                    <textarea class="editormd-html-textarea" name="markdowncode"></textarea>
                </div>
            </div>
            <div class="create_submit">
                <button type="button" class="btn btn-success">发布</button>
            </div>
        </div>

        @include('index.g9zz.side')
    </div>
@endsection


@section('js')

@endsection