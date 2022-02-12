@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی </title>
@endsection
@section('main')
@section('menu')
    <li class="active">سطح دسترسی</li>
@endsection
@include('sweet::alert')
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-line">
                            <div class="tab-content">
                                <div class="tab-pane active fontawesome-demo" id="tab1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-box">
                                                <div class="card-head">
                                                    <header>لیست سطوح دسترسی</header>
                                                    <div class="tools">
                                                        <a class="fa fa-repeat btn-color box-refresh"
                                                           href="javascript:;"></a>
                                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                                           href="javascript:;"></a>
                                                        <a class="t-close btn-color fa fa-times"
                                                           href="javascript:;"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-6">
                                                            <div class="btn-group pull-right">
                                                                <a href="{{url('admin/roles/create')}}" id="addRow"
                                                                   class="btn btn-info">
                                                                    افزود سطح جدید <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-6">
                                                            <div class="btn-group pull-left">
                                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                                   data-toggle="dropdown">ابزار
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-print"></i> Print </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-pdf-o"></i> Save as
                                                                            PDF </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-excel-o"></i>
                                                                            Export to Excel </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-scrollable">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                            <thead>
                                                            <tr>

                                                                <th> ردیف </th>
                                                                <th> نام سطح </th>
                                                                <th> لیبل سطح </th>
                                                                <th> دسترسی ها </th>
                                                                <th> ویرایش </th>
                                                                <th> حذف </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($roles as $role)
                                                            <tr class="odd gradeX">

                                                                <td class="left">{{$role->id}}</td>

                                                                <td>{{$role->name}}</td>

                                                                <td class="left">{{$role->label}}</td>
                                                                <td>
                                                                    @foreach(\App\Permission::latest()->get() as $permission)
                                                                          @if(in_array(trim($permission->id) , $role->permissions->pluck('id')->toArray()) ? 'selected' : '')  {{ $permission->label }} -  @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('roles.edit' ,  $role->id) }}"  class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ route('roles.destroy'  ,  $role->id) }}" method="post">
                                                                        {{ method_field('delete') }}
                                                                        {{ csrf_field() }}
                                                                        <div class="btn-group btn-group-xs">
                                                                            <button type="submit" class="btn btn-danger btn-xs">
                                                                                <i class="fa fa-trash-o "></i>
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
