@extends('admin.default.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','创建帖子')

@section('pageTitle','创建帖子')

@section('css')

@endsection

@section('content')

        <div class="block-area" id="required">

            <form role="form" class="form-validation-1" action="/admin/post" method="post">
                {{ csrf_field() }}

                <h3 class="block-title">帖子标题</h3>

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control m-b-8 input-sm validate[required]" placeholder="请输入标题">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <h3 class="block-title">分类</h3>

                        <select name="categoryId" class="form-control input-sm validate[required]">
                            <option value="0">顶层</option>
                            @foreach( $categories as $item)
                                <option value="{{$item->id}}">{{$item->html.$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h3 class="block-title">加精和置顶</h3>

                <div class="row">
                    <div class="col-md-1">
                        <label for="top">置顶</label>
                        <input type="checkbox" id="top" name="isTop" class="form-control m-b-8 " >
                    </div>
                    <div class="col-md-1">
                        <label for="excellent">加精</label>
                        <input type="checkbox" id="excellent" name="isExcellent" class="form-control m-b-8 ">
                    </div>
                </div>

                <h3 class="block-title">帖子内容</h3>
                <br/>
                <p>请使用markdown语法</p>
                <textarea class="markdown-editor" name="content" rows="10"></textarea>
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
