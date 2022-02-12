@extends('Admin.admin')
@section('title')
    <title> ایجاد منو </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/menus')}}">مدیریت منو ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/menus/create')}}">افزودن منو</a>&nbsp;</li>

@endsection
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>ورود اطلاعات منو</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('menus.store')}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    @include('error')

                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">نام منو<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" placeholder="نام منو را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">توضیحات صفحه
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="توضیحات صفحه را وارد کنید"></textarea>
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
