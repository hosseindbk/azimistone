@extends('Admin.admin')
@section('title')
    <title> تغییر دسترسی </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/permissions')}}">مدیریت دسترسی ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active">تغییرات دسترسی </li>
@endsection
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ویرایش دسترسی</header>
            </div>
            @foreach($permissions as $permission)
                <div class="card-body" id="bar-parent">
                    <form action="{{ route('permissions.update', ['id' => $permission->id])}}" method="post" id="form_sample_1" class="form-horizontal">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}

                        @include('error')

                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">نام دسترسی<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="name" data-required="1" value="{{$permission->name}}" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">لیبل دسترسی<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="label" data-required="1" value="{{$permission->label}}" class="form-control input-height" />
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
