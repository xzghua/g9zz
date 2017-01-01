@extends('admin.default.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','创建帖子')

@section('pageTitle','创建帖子')

@section('css')

@endsection

@section('content')

    <div class="block-area" id="required">
        <h3 class="block-title">帖子标题</h3>
        <form role="form" method="post" class="form-validation-1" action="/admin/post/{{$post->id}}" >
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="put">

            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="title" value="@if (isset($post->title)) {{$post->title}} @endif"  class="form-control m-b-8 input-sm validate[required]" placeholder="请输入标题">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <h3 class="block-title">分类</h3>

                    <select name="categoryId" class="form-control input-sm validate[required]">
                        <option value="1">分类1</option>
                        <option value="2">分类2</option>
                        <option value="3">分类3</option>
                        <option value="4">分类4</option>
                    </select>
                </div>
            </div>

            <h3 class="block-title">帖子内容</h3>
            <br/>
            <p>请使用markdown语法</p>
            <textarea class="markdown-editor"  name="content" rows="10">@if (isset($post->content)) {{$post->content}} @endif</textarea>
            <div class="block-area" id="block-level">
                <button class="btn btn-block m-b-10" type="submit">提交</button>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script src="/admin/default/js/validation/validate.min.js"></script>
    <script src="/admin/default/js/validation/validationEngine.min.js"></script>
    <script src="/admin/default/js/select.min.js"></script>
    <script src="/admin/default/js/markdown.min.js"></script>

@endsection
