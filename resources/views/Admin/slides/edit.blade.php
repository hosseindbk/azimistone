@extends('Admin.admin')
@section('title')
    <title> ویرایش اسلاید </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/slides')}}">مدیریت اسلاید</a><i class="fa fa-angle-left"></i></li>
    <li class="active">ویرایش اسلاید&nbsp;</li>
@endsection
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>ویرایش اسلاید</header>
                        </div>
                        @foreach($slides as $slide)
                        <div class="card-body" id="bar-parent">
                            <form action="{{ route('slides.update', $slide->id)}}" method="post" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}
                                @include('error')
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">عنوان<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="title" data-required="1" value="{{$slide->title}}" class="form-control input-height" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">انتخاب اسلاید<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-control input-height" name="menu_id">
                                                @foreach($menus as $menu)
                                                    @if($menu->id == $slide->menu_id)
                                                        <option value="{{$menu->id}}">{{$menu->title}}</option>
                                                    @endif
                                                @endforeach
                                                    @foreach($menus as $menu)
                                                            <option value="{{$menu->id}}">{{$menu->title}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">وضعیت نمایش<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                @if($slide->status == 0)
                                                    <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input">
                                                @elseif($slide->status == 1)
                                                    <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input" checked>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">توضیحات
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" >{{$slide->description}}</textarea>
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
                            @endforeach
                    </div>
                </div>
            </div>
@section('end')
    <script src="{{asset('js/admin/getmdl-select.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('js/admin/datetimepicker.js')}}"></script>
@endsection
@endsection
