@extends('Admin.admin')
@section('title')
    <title> ایجاد زیرمنو داشبورد </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/submenudashboards')}}">مدیریت زیرمنو داشبورد</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/submenudashboards/create')}}">افزودن زیرمنو داشبورد</a>&nbsp;</li>

@endsection

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ورود اطلاعات زیرمنو داشبورد</header>
            </div>
            <div class="card-body" id="bar-parent">
                <form action="{{ route('submenudashboards.store')}}" method="post" id="form_sample_1" class="form-horizontal">
                    {{csrf_field()}}
                    @include('error')
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">عنوان زیرمنو داشبورد<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="title" data-required="1" placeholder="عنوان زیرمنو داشبورد را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">نام زیرمنو داشبورد<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="name" data-required="1" placeholder="نام زیرمنو داشبورد را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">لیبل نمایش<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="namayesh" data-required="1" placeholder="لیبل نمایش را وارد کنید" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">منو داشبورد<span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select class="form-control input-height" name="menu_id">
                                    <option value="">انتخاب...</option>
                                    @foreach($menudashboards as $menudashboard)
                                        <option value="{{$menudashboard->id}}">{{$menudashboard->title}}</option>
                                    @endforeach
                                </select>
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
