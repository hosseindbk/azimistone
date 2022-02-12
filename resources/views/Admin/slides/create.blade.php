@extends('Admin.admin')
@section('title')
    <title> ایجاد اسلاید </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/bootstrap-select.min.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("js/admin/bootstrap-select.min.js")}}"></script>
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/portfos')}}">مدیریت اسلاید</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/portfos/create')}}">افزودن اسلاید</a>&nbsp;</li>
@endsection
@include('sweet::alert')
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>ورود اطلاعات اسلاید</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form method="post" id="upload_form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    @include('error')

                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">عنوان اسلاید<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" placeholder="نام عنوان را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">انتخاب منو<span class="required"> * </span>
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
                                            <label class="control-label col-md-3">توضیحات
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="توضیحات را وارد کنید"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images" id="select_file" />                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@section('end')
    <script>
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"{{ route('slide.action') }}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (results) {
                        document.getElementById("upload_form").reset();
                        location.reload();
                    }
                })
            });

        });
    </script>
@endsection
@endsection
