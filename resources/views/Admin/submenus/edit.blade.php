@extends('Admin.admin')
@section('title')
    <title> ویرایش زیرمنو </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/submenus')}}">مدیریت زیرمنو</a><i class="fa fa-angle-left"></i></li>
    <li class="active">ویرایش زیرمنو&nbsp;</li>
@endsection

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ویرایش زیرمنو</header>
            </div>
            @foreach($submenus as $submenu)
                <div class="card-body" id="bar-parent">
                    <form action="{{ route('submenus.update', $submenu->id)}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        @include('error')
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">نام زیرمنو<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="title" data-required="1" value="{{$submenu->title}}" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">وضعیت نمایش<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                        @if($submenu->status == 0)
                                            <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input">
                                        @elseif($submenu->status == 1)
                                            <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input" checked>
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">منو <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="menu_id">
                                        @foreach($menus as $menu)
                                            @if($menu->id == $submenu->menu_id)
                                                <option value="{{$menu->id}}">{{$menu->title}}</option>
                                            @endif
                                        @endforeach
                                        @foreach($menus as $menu)
                                            <option value="{{$menu->id}}">{{$menu->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">توضیحات مختصر
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control" >{{$submenu->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">توضیحات کامل
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="text" id="" cols="30" rows="5" class="form-control" >{{$submenu->text}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-info  btn-lg m-r-20">ذخیره اطلاعات</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>
@section('end')
    <script src="{{ asset("js/admin/getmdl-select.js")}}"></script>
    <script src="{{ asset("js/admin/moment-with-locales.min.js")}}"></script>
    <script src="{{ asset("js/admin/bootstrap-material-datetimepicker.js")}}"></script>
    <script src="{{ asset("js/admin/datetimepicker.js")}}"></script>
@endsection
@endsection
