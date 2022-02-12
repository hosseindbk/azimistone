@extends('Admin.admin')
@section('title')
    <title> ایجاد نمونه کار </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/bootstrap-select.min.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("js/admin/bootstrap-select.min.js")}}"></script>
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/portfos')}}">مدیریت نمونه کار ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/portfos/create')}}">افزودن نمونه کار</a>&nbsp;</li>

@endsection
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>ورود اطلاعات نمونه کار</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('portfos.store')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    @include('error')

                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">عنوان<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" placeholder="نام عنوان را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">انتخاب برند<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="brand_id">
                                                    <option value="">انتخاب...</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">انتخاب خدمات<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="submenu_id">
                                                    <option value="">انتخاب...</option>
                                                    @foreach($submenus as $submenu)
                                                        <option value="{{$submenu->id}}">{{$submenu->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">توضیحات
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="توضیحات را وارد کنید"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">کلمات کلیدی
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="tags" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="کلمات کلیدی را وارد کنید"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images" class="form-control">
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
