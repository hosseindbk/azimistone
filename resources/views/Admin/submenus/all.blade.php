@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی  / مدیریت زیرمنو ها </title>
@endsection
@section('main')
@section('menu')
    <li class="active">مدیریت زیرمنو ها</li>
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
                                    <header>لیست زیرمنو ها</header>
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
                                                <a href="{{url('admin/submenus/create')}}" id="addRow" class="btn btn-info">
                                                    افزود زیرمنو جدید <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                            <thead>
                                            <tr>

                                                <th> ردیف </th>
                                                <th> نام صفحه </th>
                                                <th> تصویر </th>
                                                <th> آدرس صفحه </th>
                                                <th> توضیحات مختصر </th>
                                                <th> توضیحات کامل </th>
                                                <th> وضعیت </th>
                                                <th> ویرایش </th>
                                                <th> حذف </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $s = 1; ?>

                                            @foreach($submenus as $submenu)
                                                <tr class="odd gradeX">

                                                    <td>{{$s++}}</td>

                                                    <td class="patient-img sorting_1">
                                                        <img src="{{ asset($submenu->images) }}" alt="" />
                                                    </td>

                                                    <td>{{$submenu->title}}</td>

                                                    <td>
                                                        <a href="{{url($submenu->slug)}}">{{$submenu->slug}}</a>
                                                    </td>

                                                    <td class="left">{{$submenu->description}}</td>

                                                    <td class="left">{{$submenu->text}}</td>

                                                    <td>
                                                        @if($submenu->status == 1)

                                                            <span class="label label-sm label-success">فعال</span>

                                                        @elseif($submenu->status == 0)

                                                            <span class="label label-sm label-danger">غیر فعال</span>

                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('submenus.edit' , $submenu->id) }}"  class="btn btn-primary btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('submenus.destroy'  , $submenu->id) }}" method="post">
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
