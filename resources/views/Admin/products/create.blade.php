@extends('Admin.admin')
@section('title')
    <title> ایجاد محصول </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/bootstrap-material-datetimepicker.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/products')}}">مدیریت محصول</a><i class="fa fa-angle-left"></i></li>
    <li class="active"><a class="parent-item" href="{{url('admin/products/create')}}">افزودن محصول</a>&nbsp;</li>
@endsection
@include('sweet::alert')

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>ورود اطلاعات محصول</header>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form class="form-horizontal" id="upload_form" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    @include('error')
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">نام سنگ<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="title" data-required="1" placeholder="نام سنگ را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">سایز سنگ<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="size" data-required="1" placeholder="سایز سنگ را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">کاربرد سنگ<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="karbord" data-required="1" placeholder="کاربرد سنگ را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">سورت سنگ<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="sort" data-required="1" placeholder="سورت سنگ را وارد کنید" class="form-control input-height" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">منو<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="menu_id" id="menu_id">
                                                    <option value="">انتخاب...</option>
                                                    @foreach($menus as $menu)
                                                        <option value="{{$menu->id}}">{{$menu->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">زیرمنو<span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" name="submenu_id" id="submenu_id">
                                                    <option value="">انتخاب</option>

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">توضیحات
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" placeholder="توضیحات برند را وارد کنید"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">تصویر اصلی
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">2تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images2" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">3تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images3" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">4تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images4" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">5تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images5" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">6تصویر
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="file" name="images6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button type="submit" class="btn btn-info btn-lg m-r-20 " id="button">ذخیره اطلاعات</button>
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
                    url:"{{ route('product.action') }}",
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
    <script>
        $(function(){
            $('#menu_id').change(function(){
                $("#submenu_id option").remove();
                var id = $('#menu_id').val();

                $.ajax({
                    url : '{{ route( 'option' ) }}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    type: 'post',
                    dataType: 'json',
                    success: function( result )
                    {
                        $.each( result, function(k, v) {
                            $('#submenu_id').append($('<option>', {value:k, text:v}));
                        });
                    },
                    error: function()
                    {
                        //handle errors
                        alert('error...');
                    }
                });
            });
        });
    </script>
@endsection
@endsection
