@extends('master')
@section('title')

    @foreach($menus as $menu)
        @if($menu->slug == Request::segment(1))
            <title>@foreach($projects as $project) {{$project->title}} @endforeach</title>
            <meta name="description" content="{{$menu->description}}">
            <meta name="keyword" content="{{$menu->keyword}}">
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="@foreach($projects as $project) {{$project->title}} @endforeach" />
            <meta name="twitter:description" content="{{$menu->description}}" />
            <meta itemprop="name" content="@foreach($projects as $project) {{$project->title}} @endforeach">
            <meta itemprop="description" content="{{$menu->description}}">
            <meta property="og:title" content="{{$menu->keyword}}"/>
            <meta property="og:description" content="{{$menu->description}}" />
        @endif
    @endforeach
@endsection
@section('main')
    <div class="breadcrumb-option set-bg" data-setbg="@foreach($slides as $slide) {{asset($slide->images)}} @endforeach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        @foreach($menus as $menu)
                            @if($menu->slug == Request::segment(1))
                                <h1>{{$menu->pagetitle}}</h1>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product-details spad">
        @foreach($projects as $project)
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images)}}">
                            <img src="{{asset($project->images)}}" alt="" class="product__details__big__pic" data-pagespeed-url-hash="3329915024" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-tabs" role="tablist" style="direction: rtl;">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">توضیحات پروژه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">مشخصات پروژه</a>
                        </li>

                    </ul>
                    <div class="tab-content" style="direction: rtl;text-align: justify;">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel" >
                            <p style="padding: 40px;">{{$project->description}}</p>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel" >
                            <div class="" style="padding: 40px">
                            <p> سایز سنگ به کار رفته : {{$project->size}}</p>
                            <p> مورد استفاده : {{$project->karbord}}</p>
                            <p> پیمانکار : {{$project->peymankar}}</p>
                            <p>ابعاد پروژه : {{$project->abad}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @if($project->images2 != null)
                        <div class="col-lg-3">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images2)}}">
                                <img src="{{asset($project->images2)}}" style="margin-bottom: 30px;" alt="">
                            </a>
                        </div>
                    @endif
                    @if($project->images3 != null)
                        <div class="col-lg-3">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images3)}}">
                                <img src="{{asset($project->images3)}}" style="margin-bottom: 30px;" alt="">
                            </a>
                        </div>@endif
                    @if($project->images4 != null)
                        <div class="col-lg-3">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images4)}}">
                                <img src="{{asset($project->images4)}}" style="margin-bottom: 30px;" alt="">
                            </a>
                        </div>@endif
                    @if($project->images5 != null)
                        <div class="col-lg-3">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images5)}}">
                                <img src="{{asset($project->images5)}}" style="margin-bottom: 30px;" alt="">
                            </a>
                        </div>@endif
                    @if($project->images6 != null)
                        <div class="col-lg-3">
                            <a class="test-popup-link zoom-in" href="{{asset($project->images6)}}">
                                <img src="{{asset($project->images6)}}" style="margin-bottom: 30px;" alt="">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        <div class="related__products">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2> پروژه های انجام شده توسط سنگبری عظیمی</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__slider owl-carousel">
                        @foreach($allprojects as $project)
                        <div class="col-lg-3">
                            <div class="product__item">
                                <a href="{{url(Request::segment(1) .'/'. $project->slug) }}">
                                    <img src="{{asset($project->images)}}" style ='width:300px; height:300px;' class="img-fluid">
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="{{url(Request::segment(1) .'/'. $project->slug) }}">{{$project->title}}</a></h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

