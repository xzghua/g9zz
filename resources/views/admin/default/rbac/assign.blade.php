@extends('admin.default.master')

@section('title','分配权限')

@section('menu','分配权限')
@section('page','分配权限')

@section('pageTitle','分配权限')

@section('css')

@endsection

@section('content')
    <h4 class="page-title b-0">分配角色</h4>

    <div class="listview list-container">
        <header class="listview-header media">
            <input type="checkbox" class="pull-left list-parent-check" value="">

            <ul class="list-inline list-mass-actions pull-left">

                <li>
                    <a href="" title="Refresh" class="tooltips">
                        <i class="sa-list-refresh"></i>
                    </a>
                </li>
            </ul>

            <div class="clearfix"></div>
        </header>
        <form action="#">
            @foreach($permissions as $item)
                <div class="media" title="{{$item->description}}">
                    <label for="{{$item->id}}">
                    <input type="checkbox" id="{{$item->id}}" @if(in_array($item->id,$rolePermissionIds)) checked @endif class="pull-left list-check" value="">
                        <div class="media-body">
                            {{$item->display_name}}
                        </div>
                    </label>
                </div>
            @endforeach
            <div class="listview-header">
                <button class="btn-primary">这是一个大大大大的提交按钮</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
    {!! reminder()->message() !!}

@endsection