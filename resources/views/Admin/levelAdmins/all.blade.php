@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی </title>
@endsection
@section('main')
@section('menu')
    <li class="active">سطح بندی کاربران</li>
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
                                                <header>لیست کاربران</header>
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
                                                            <a href="{{url('admin/levelAdmins/create')}}" id="addRow"
                                                               class="btn btn-info">
                                                                افزود کاربر جدید <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                        <thead>
                                                        <tr>


                                                            <th> نام کاربری </th>
                                                            <th> آدرس ایمیل </th>
                                                            <th> سمت </th>
                                                            <th> وضعیت </th>
                                                             <th> تغییر </th>
                                                            <th> حذف </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($roles as $role)
                                                            @if(count($role->users))
                                                                @foreach($role->users as $user)
                                                                    <tr class="odd gradeX">
                                                                        <td>{{ $user->name }}</td>
                                                                        <td>{{ $user->email }}</td>
                                                                        <td>{{ $role->name }}</td>
                                                                        <td>
                                                                            @if($user->status == 1)

                                                                                <span class="label label-sm label-success">فعال</span>

                                                                            @elseif($user->status == 0)

                                                                                <span class="label label-sm label-danger">غیر فعال</span>

                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            <a href="{{ route('levelAdmins.create') }}"  class="btn btn-primary btn-xs">
                                                                                <i class="fa fa-pencil"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <form action="{{ route('levelAdmins.destroy'  , $user->id) }}" method="post">
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
                                                            @endif
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


