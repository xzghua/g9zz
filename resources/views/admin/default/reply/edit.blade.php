@extends('admin.default.master')

@section('title','回复')

@section('menu','回复')
@section('page','修改回复')

@section('pageTitle','修改回复')

@section('css')

@endsection

@section('content')

    <div class="block-area" id="required">
        <h3 class="block-title">帖子标题</h3>
        <form role="form" method="post" class="form-validation-1" action="/admin/reply/{{$reply->id}}" >
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="put">

            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="postTitle" disabled value="@if (isset($reply->post)) {{$reply->post->title}} @endif"  class="form-control m-b-8 input-sm validate[required]" placeholder="">
                </div>
            </div>

            <h3 class="block-title">回复人</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="title" disabled value="@if (isset($reply->reply_user)) {{$reply->reply_user->name}} @endif"  class="form-control m-b-8 input-sm validate[required]" placeholder="">
                </div>
            </div>

            <h3 class="block-title">是否BLOCKED</h3>

            <div class="row">
                <div class="col-md-1">
                    <label for="blocked">BLOCK</label>
                    <input type="checkbox" @if ($reply->is_blocked == 'yes') checked @endif  id="blocked" name="isBlocked" class="form-control m-b-8 " >
                </div>

            </div>

            <h3 class="block-title">帖子内容</h3>
            <br/>
            <p>请使用markdown语法</p>
            <textarea class="markdown-editor"  name="body" rows="10">@if (isset($reply->body)) {{$reply->body}} @endif</textarea>
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
