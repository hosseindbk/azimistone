@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی </title>
@endsection
@section('main')
@section('menu')
    <li class="active"> مدیریت خدمات </li>
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
                                                <header>لیست خدمات</header>
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
                                                            <a href="{{url('admin/services/create')}}" id="addRow"
                                                               class="btn btn-info">
                                                                افزود خدمات جدید <i class="fa fa-plus"></i>
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
                                                            <th> تصویر خدمات </th>
                                                            <th> عنوان خدمات </th>
                                                            <th> توضیحات </th>
                                                            <th> وضعیت </th>
                                                            <th> ویرایش </th>
                                                            <th> حذف </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $s = 1; ?>
                                                        @foreach($services as $service)
                                                            <tr class="odd gradeX">

                                                                <td>{{$s++}}</td>
                                                                <td class="patient-img sorting_1">
                                                                    <img src="{{ asset($service->images) }}" alt="" />

                                                                  {{--  @foreach($slide->images['images'] as $key => $image)
                                                                        <img src="{{ $slide->images['thumb'] }}" alt="" />
                                                                    @endforeach--}}
                                                                </td>
                                                                <td>{{$service->title}}</td>

                                                                <td class="left">{{$service->description}}</td>

                                                                <td>
                                                                    @if($service->status == 1)

                                                                        <span class="label label-sm label-success">فعال</span>

                                                                    @elseif($service->status == 0)

                                                                        <span class="label label-sm label-danger">غیر فعال</span>

                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    <a href="{{ route('services.edit' , $service->id) }}"  class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ route('services.destroy'  , $service->id) }}" method="post">
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
