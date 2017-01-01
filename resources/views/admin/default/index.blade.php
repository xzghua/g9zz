@extends('admin.default.master')

@section('title','后台首页')

@section('menu','首页')
@section('page','后台首页')

@section('pageTitle','首页')

@section('content')

    <!-- Shortcuts -->
    <div class="block-area shortcut-area">
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/money.png" alt="">
            <small class="t-overflow">注册人数</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/twitter.png" alt="">
            <small class="t-overflow">帖子数</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/calendar.png" alt="">
            <small class="t-overflow">标签数</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/stats.png" alt="">
            <small class="t-overflow">分类数</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/connections.png" alt="">
            <small class="t-overflow">回复数</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="/admin/default/img/shortcuts/reports.png" alt="">
            <small class="t-overflow">哎哟</small>
        </a>
    </div>

    <hr class="whiter" />

    @endsection

@section('js')
    @endsection