@extends('admin.default.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','创建帖子')

@section('pageTitle','创建帖子')

@section('css')

@endsection

@section('content')

        <div class="block-area" id="required">

            <form role="form" class="form-validation-1" action="/admin/permission" method="post">
                {{ csrf_field() }}

                <h3 class="block-title">NAME</h3>
                <i style="color: red;font-size: 5px;">(建议使用英文或英文加下划线)</i>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control m-b-8 input-sm validate[required]" placeholder="请输入权限名">
                    </div>
                </div>

                <h3 class="block-title">DISPLAY_NAME</h3>

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="displayName" class="form-control m-b-8 input-sm validate[required]" placeholder="请输入权限名称">
                    </div>
                </div>



                <h3 class="block-title">权限描述</h3>
                <br/>
                <p>请使用markdown语法</p>
                <textarea class="markdown-editor" name="description" rows="10"></textarea>
                <div class="block-area" id="block-level">
                    <button class="btn btn-block m-b-10">提交</button>
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
