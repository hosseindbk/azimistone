@extends('Admin.admin')
@section('title')
    <title> ایجاد سطوح </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/select2.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/levelAdmins')}}">مدیریت سطح بندی</a><i class="fa fa-angle-left"></i></li>
    <li class="active">افزودن سطح دسترسی</li>
@endsection

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>ورود اطلاعات سطح بندی</header>
                        </div>
                        <div class="card-body" id="bar-parent">
                            <form class="form-horizontal" action="{{ route('levelAdmins.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @include('error')
                                <div class="form-group row">
                                    <label class="control-label col-md-3">دسته بندی<span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control" name="user_id" id="user_id" data-live-search="true">
                                            @foreach(\App\User::whereLevel('admin')->get() as $user)
                                                <option value="{{ $user->id }}">{{ $user->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">دسته بندی<span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control" name="role_id" id="role_id">
                                            @foreach(\App\Role::all() as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }} - {{ $role->label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
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
    <script src="{{ asset("js/admin/select2.js")}}"></script>
    <script src="{{ asset("js/admin/select2-init.js")}}"></script>
@endsection
@endsection
