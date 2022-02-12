@extends('Admin.admin')
@section('title')
    <title> تغییر محصول </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/bootstrap-material-datetimepicker.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/products')}}">مدیریت محصولات</a><i class="fa fa-angle-left"></i></li>
    <li class="active">تغییرات محصولات&nbsp;</li>
@endsection

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>ورود اطلاعات محصولات</header>
                        </div>
                        @foreach($products as $product)
                        <div class="card-body" id="bar-parent">
                            <form action="{{ route('products.update', $product->id)}}" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}

                                @include('error')

                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">نام محصول<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="title" data-required="1" value="{{$product->title}}" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">سایز سنگ<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="size" data-required="1" value="{{$product->size}}" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">کاربرد سنگ<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="karbord" data-required="1" value="{{$product->karbord}}" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">سورت سنگ<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="sort" data-required="1" value="{{$product->sort}}" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">منو<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-control input-height" name="menu_id">

                                                @foreach($menus as $menu)
                                                        <option value="{{$menu->id}}" {{$menu->id == $product->menu_id ? 'selected' : ''}}>{{$menu->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">زیرمنو<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-control input-height" name="submenu_id">

                                                @foreach($submenus as $submenu)
                                                        <option value="{{$submenu->id}}" {{$submenu->id == $product->submenu_id ? 'selected' : ''}}>{{$submenu->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">توضیحات محصول
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <textarea name="description" id="" cols="30" data-required="1" rows="10" class="form-control" >{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">وضعیت نمایش<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                @if($product->status == 0)
                                                    <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input">
                                                @elseif($product->status == 1)
                                                    <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input" checked>
                                                @endif
                                            </label>
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
