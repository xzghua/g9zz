@extends('index.g9zz.master')

@section('title','发表新主题')

@section('css')
    <link rel="stylesheet" type="text/css" href="/index/g9zz/css/editormd.css"/>
    <link rel="stylesheet" type="text/css" href="/index/g9zz/css/bootstrap-select.min.css"/>


    <script src="/index/g9zz/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../index/g9zz/js/editormd.js" type="text/javascript" charset="utf-8"></script>
    <script src="/index/g9zz/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        //    调用编辑器
        var testEditor;
        $(function() {
            testEditor = editormd("test-editormd", {
                width   : "100%",
                height  : 640,
                path    : "lib/",
                imageUpload : true,
                imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                imageUploadURL : "./php/upload.php",
                saveHTMLToTextarea : true,
                watch : false
            });
        });

    </script>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-9 index_left">
            <div class="info_info">
                <div class="index_left_head info_title">
                    <h2>发布帖子</h2>
                </div>
            </div>
            <form action="">
                <div class="create_add">
                    <div class="create_select">

                        <select id="done" class="selectpicker"  data-done-button="true">
                            <option>选择分类</option>
                            <option>教程</option>
                            <option>分享</option>
                            <option>社区</option>
                            <option>文档</option>
                            <option>问答</option>
                        </select>
                    </div>
                    <div class="create_title">
                        <div class="form-group ">
                            <input type="email" id="topicTitle" class="form-control"  placeholder="帖子标题">
                        </div>
                    </div>
                </div>
                <div class="info_addreply" style="margin: 0;">
                    <div class="editormd" id="test-editormd">
                        <textarea class="editormd-markdown-textarea" name="test-editormd-markdown-doc"></textarea>
                        <textarea class="editormd-html-textarea" name="markdowncode"></textarea>
                    </div>
                </div>
                <div class="create_submit">
                    <button type="button" class="btn btn-success">发布</button>
                </div>
            </form>
        </div>
        @include('index.g9zz.side')
    </div>
@endsection




@section('js')
    <script src="/index/g9zz/js/bootstrap-select.min.js" type="text/javascript" charset="utf-8"></script>

@endsection