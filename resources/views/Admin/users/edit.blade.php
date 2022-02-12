@extends('Admin.admin')
@section('title')
    <title> ویرایش کاربر </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/users')}}">مدیریت کاربران</a><i class="fa fa-angle-left"></i></li>
    <li class="active">ویرایش کاربر&nbsp;</li>
@endsection

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>ویرایش منو</header>
            </div>
            @foreach($users as $user)
                <div class="card-body" id="bar-parent">
                    <form action="{{ route('users.update', $user->id)}}" method="post" id="form_sample_1" class="form-horizontal">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}

                        @include('error')

                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">نام کاربر<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="name" data-required="1" value="{{$user->name}}" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">ایمیل کاربر<span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="email" data-required="1" value="{{$user->email}}" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">وضعیت <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                        @if($user->status == 0)
                                            <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input">
                                        @elseif($user->status == 1)
                                            <input type="checkbox" name="status"  id="switch-3" class="mdl-switch__input" checked>
                                        @endif
                                    </label>
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
