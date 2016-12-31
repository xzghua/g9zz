@extends('admin.master')

@section('title','帖子')

@section('menu','帖子')
@section('page','帖子列表')

@section('pageTitle','列表')

@section('css')


@endsection

@section('content')

    <!-- Table Striped -->
    <div class="block-area" id="tableStriped">
        <h3 class="block-title">Table Striped</h3>
        <div class="table-responsive overflow">
            <table class="table tile table-striped  table-hover ">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Jhon </td>
                    <td>Makinton </td>
                    <td>@makinton</td>
                    <td>@makinton</td>
                    <td>@makinton</td>
                    <td>@makinton</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Malinda</td>
                    <td>Hollaway</td>
                    <td>@hollway</td>
                    <td>@hollway</td>
                    <td>@hollway</td>
                    <td>@hollway</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Wayn</td>
                    <td>Parnel</td>
                    <td>@wayne123</td>
                    <td>@wayne123</td>
                    <td>@wayne123</td>
                    <td>@wayne123</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>TB - Monthly</td>
                    <td>05/04/2012</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>TB - Monthly</td>
                    <td>06/04/2012</td>
                    <td>Pending</td>
                    <td>Pending</td>
                    <td>Pending</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>TB - Monthly</td>
                    <td>07/04/2012</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>TB - Monthly</td>
                    <td>08/04/2012</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>TB - Monthly</td>
                    <td>09/04/2012</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>Call in to confirm</td>
                    <td>
                        <button class="btn-primary">  <span class="icon">&#61952;</span> Button</button>
                        <button class="btn-primary"> <span class="icon">&#61752;</span>Button</button>
                        <button class="btn-danger"> <span class="icon">&#61918;</span> Button</button>
                        <button class="btn-default">Button</button>
                        <button class="btn-info">Button</button>
                        <button class="btn-success">Button</button>
                        <button class="btn-group ">Button</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>




@endsection

@section('js')

@endsection
