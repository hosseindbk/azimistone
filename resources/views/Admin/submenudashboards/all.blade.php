@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی  / مدیریت منو ها </title>
@endsection
@section('main')
@section('menu')
    <li class="active">مدیریت منو ها</li>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line">
            <div class="tab-content">
                <div class="tab-pane active fontawesome-demo" id="tab1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>لیست منو ها</header>
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
                                                <a href="{{url('admin/submenudashboards/create')}}" id="addRow" class="btn btn-info">
                                                    افزود منو جدید <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                            <thead>
                                            <tr>

                                                <th> ردیف </th>
                                                <th> عنوان صفحه </th>
                                                <th> نام صفحه </th>
                                                <th> آدرس صفحه </th>
                                                <th> لیبل صفحه </th>
                                                <th> وضعیت </th>
                                                <th> ویرایش </th>
                                                <th> حذف </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($submenudashs as $submenudashboard)
                                                <tr class="odd gradeX">

                                                    <td class="left">{{$submenudashboard->id}}</td>

                                                    <td>{{$submenudashboard->title}}</td>
                                                    <td>{{$submenudashboard->name}}</td>

                                                    <td>
                                                        <a href="{{url($submenudashboard->slug)}}">{{$submenudashboard->slug}}</a>
                                                    </td>

                                                    <td class="left">{{$submenudashboard->namayesh}}</td>

                                                    <td>
                                                        @if($submenudashboard->status == 1)

                                                            <span class="label label-sm label-success">فعال</span>

                                                        @elseif($submenudashboard->status == 0)

                                                            <span class="label label-sm label-danger">غیر فعال</span>

                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('submenudashboards.edit' , $submenudashboard->id) }}"  class="btn btn-primary btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('submenudashboards.destroy'  , $submenudashboard->id) }}" method="post">
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
