@extends('Admin.admin')
@section('title')
    <title> ایجاد کاربر </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/users')}}">مدیریت کربران</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/users/create')}}">افزودن کاربر</a>&nbsp;</li>

@endsection

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ورود اطلاعات کاربر</header>
            </div>
            <div class="card-body" id="bar-parent">
                <form action="{{ route('users.store')}}" method="post" id="form_sample_1" class="form-horizontal">
                    {{csrf_field()}}

                    @include('error')

                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">نام و نام خانوادگی<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="name" data-required="1" placeholder="نام  را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">نام کاربری<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="username" data-required="1" placeholder="نام کاربری را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">آدرس ایمیل<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="email" data-required="1" placeholder="آدرس ایمیل را وارد کنید" class="form-control input-height" autocomplete="email" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">رمز عبور<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="password" data-required="1" class="form-control input-height" autocomplete="new-password"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="control-label col-md-3">تکرار رمز عبور</label>

                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
