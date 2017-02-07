@extends('admin.default.master')

@section('title','回复')

@section('menu','回复')
@section('page','创建回复')

@section('pageTitle','创建回复')

@section('css')

@endsection

@section('content')

    <div class="block-area" id="required">
        <form role="form" method="post" class="form-validation-1" action="/admin/reply" >
            {!! csrf_field() !!}

            <input type="hidden" name="postId" value="{{rand(1,10)}}">

            <h3 class="block-title">回复内容</h3>
            <br/>
            <p>请使用markdown语法</p>
            <textarea class="markdown-editor"  name="body" rows="10"></textarea>
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
    {!! reminder()->message() !!}
@endsection
