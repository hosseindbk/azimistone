@extends('Admin.admin')
@section('title')
    <title> تغییر پروژه </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/services')}}">مدیریت خدمات</a><i class="fa fa-angle-left"></i></li>
    <li class="active">تغییرات خدمات&nbsp;</li>
@endsection
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>ورود اطلاعات خدمات</header>
                        </div>
                        @foreach($services as $service)
                            <div class="card-body" id="bar-parent">
                                <form action="{{ route('services.update', $service->id)}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH') }}

                                    @include('error')

                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">عنوان خدمات<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" value="{{$service->title}}" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">توضیحات
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" >{{$service->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">وضعیت نمایش<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                    @if($service->status == 0)
                                                        <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input">
                                                    @elseif($service->status == 1)
                                                        <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input" checked>
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">تصاویر
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
                        @endforeach
                    </div>
                </div>
            </div>
@endsection
