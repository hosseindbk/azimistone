@extends('Admin.admin')
@section('title')
    <title> داشبورد مدیریتی بستا</title>
@endsection

@section('first')
    <link href="{{ asset("css/admin/summernote.css")}}" rel="stylesheet">
    <link href="{{ asset("css/admin/inbox.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('main')
                <div class="state-overview">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-green">
                                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">تعداد کاربران</span>
                                    <span class="info-box-number">{{$countusers}} </span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 45%"></div>
                                    </div>
                                    <span class="progress-description">
											در یک ماه گذشته 45% رشد
										</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-yellow">
                                <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">تعداد محصولات</span>
                                    <span class="info-box-number">654</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 30%"></div>
                                    </div>
                                    <span class="progress-description">
											30% در یک ماه گذشته فعال بوده اند
										</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-blue">
                                <span class="info-box-icon push-bottom"><i class="material-icons">map</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">تعداد بازدید در ماه</span>
                                    <span class="info-box-number">{{$monthvisits}}</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{$monthvisits * 100 /10000}}%"></div>
                                    </div>
                                    <span class="progress-description">
											{{'%'.$monthvisits * 100 /10000}}    بازدید در ماه
										</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-b-pink">
                                <span class="info-box-icon push-bottom"><i class="material-icons">local_library</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text"> تعداد بازدید امروز </span>
                                    <span class="info-box-number">{{$dayvisitos}} </span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{$dayvisitos * 100 /500}}%"></div>
                                    </div>
                                    <span class="progress-description">

											{{'%'.$dayvisitos * 100 /500}}  بازدید در روز
										</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-box">
                            <div class="card-head">

                                <header>نمودار بازدید   </header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <canvas id="canvas1" :lables = "{!! json_encode($lables) !!}" :values = "{!! json_encode($visitors) !!}" ></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>نمودار کلیک بر روی محصول</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <canvas id="chartjs_pie" :values = "{!! json_encode($pievisitors) !!}"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@section('end')
        <script src="{{ asset("js/admin/Chart.bundle.js")}}"></script>
        <script src="{{ asset("js/admin/utils.js")}}"></script>
        <script src="{{ asset("js/admin/summernote.js")}}"></script>
        <script src="{{ asset("js/admin/summernote-data.js")}}"></script>


        <script type="text/javascript">

            var labels = {!! json_encode($lables) !!};
            var values = {!! json_encode($visitors) !!};

            var ctx = document.getElementById('canvas1');
            Chart.defaults.global.defaultFontFamily = 'IranSans'
            var color = Chart.helpers.color;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets: [{
                        label: 'آمار بازدید وبسایت',
                        data:
                        this.values,

                        backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
                        borderColor: window.chartColors.green,
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        </script>



        <script type="text/javascript">

            $(document).ready(function() {
               var config = {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: {!! json_encode($pievisitors) !!},
                            backgroundColor: [
                                window.chartColors.grey,
                                window.chartColors.red,
                                window.chartColors.green,
                                window.chartColors.blue,
                                window.chartColors.yellow,
                                window.chartColors.orange,

                            ],
                            label: 'سنگبری عظیمی'
                        }],
                        labels: [
                            "صفحه اصلی",

                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            labels: {
                                fontFamily:'IranSans',
                            }
                        },
                    }
                };

                var ctx = document.getElementById("chartjs_pie").getContext("2d");
                window.myPie = new Chart(ctx, config);
            });
        </script>

@endsection
@endsection
