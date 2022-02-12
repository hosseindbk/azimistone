@extends('Admin.admin')
@section('title')
    <title> ایجاد مقاله </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/bootstrap-material-datetimepicker.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/blogs')}}">مدیریت مقاله ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/blogs/create')}}">افزودن مقاله</a>&nbsp;</li>
@endsection
@include('sweet::alert')

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>ورود اطلاعات مقاله</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form class="form-horizontal" id="upload_form" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    @include('error')

                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">عنوان مقاله<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" placeholder="نام مقاله را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">توضیحات مقاله
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="توضیحات برند را وارد کنید"></textarea>
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

@section('end')
    <script>
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"{{ route('blog.action') }}",
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
