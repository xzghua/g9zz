@extends('admin.default.master')

@section('title','分类')

@section('menu','分类')
@section('page','创建分类')

@section('pageTitle','创建分类')

@section('css')

@endsection

@section('content')

    <div class="block-area" id="required">
        <form role="form" class="form-validation-1" action="/admin/category" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-6 form-group">
                    <h3 class="block-title">父类</h3>

                    <select name="parentId" class="form-control input-sm validate[required]">
                        <option value="0">顶层</option>
                        @foreach( $category as $item)
                            <option value="{{$item->id}}">{{$item->html.$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="block-title">分类名</h3>

                    <input type="text" name="name" class="form-control m-b-8 input-sm validate[required]" placeholder="请输入分类名">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="block-title">缩略名</h3>

                    <input type="text" name="slug" class="form-control m-b-8 input-sm " placeholder="请输入缩略名">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="block-title">描述</h3>

                    <input type="text" name="description" class="form-control m-b-8 input-sm " placeholder="请输入描述">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6 form-group">
                    <button class="btn btn-block">提交</button>
                </div>
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
