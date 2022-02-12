@extends('Admin.admin')
@section('title')
    <title> تغییر سطح دسترسی </title>
@endsection
@section('first')
    <link href="{{ asset("css/admin/formlayout.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/select2.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
@section('menu')
    <li class="active"><a class="parent-item" href="{{url('admin/roles')}}">مدیریت سطح دسترسی ها</a><i class="fa fa-angle-left"></i></li>
    <li class="active">تغییر سطح دسترسی&nbsp;</li>

@endsection

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>ورود اطلاعات سطح دسترسی</header>
                        </div>
                        @foreach($roles as $role)
                        <div class="card-body" id="bar-parent">
                            <form action="{{ route('roles.update', $role->id)}}" method="post" id="form_sample_1" class="form-horizontal">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}

                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">دسترسی ها<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-control select2-multiple input-height" name="permission_id[]" multiple="multiple">
                                                @foreach(\App\Permission::latest()->get() as $permission)
                                                    <option value="{{ $permission->id }}" {{ in_array(trim($permission->id) , $role->permissions->pluck('id')->toArray()) ? 'selected' : ''  }}>{{ $permission->label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">نام سطح<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="name" data-required="1" value="{{$role->name}}" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">لیبل سطح<span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="label" data-required="1" value="{{$role->label}}" class="form-control input-height" />
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
    <script src="{{ asset("js/admin/select2.js")}}"></script>
    <script src="{{ asset("js/admin/select2-init.js")}}"></script>
@endsection
@endsection
