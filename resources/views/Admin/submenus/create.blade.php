@extends('Admin.admin')
@section('title')
    <title> ایجاد زیرمنو </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/submenus')}}">مدیریت زیرمنو ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/submenus/create')}}">افزودن زیرمنو</a>&nbsp;</li>

@endsection

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ورود اطلاعات زیرمنو</header>
            </div>
            <div class="card-body" id="bar-parent">
                <form action="{{ route('submenus.store')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('error')
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">نام زیرمنو<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="title" data-required="1" placeholder="نام زیرمنو را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">منو<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select class="form-control input-height" name="menu_id">
                                    <option value="">انتخاب...</option>
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
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="متن را وارد کنید"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">توضیحات کامل
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <textarea name="text" id="" cols="30" rows="5" class="form-control" placeholder="متن را وارد کنید"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 p-t-20 text-center">
                            <button type="submit" class="btn btn-info  btn-lg m-r-20">ذخیره اطلاعات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
