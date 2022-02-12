@extends('master')
@section('title')

    @foreach($menus as $menu)
        @if($menu->slug == Request::segment(1))
            <title>@foreach($blogs as $blog) {{$blog->title}} @endforeach</title>
            <meta name="description" content="{{$menu->description}}">
            <meta name="keyword" content="{{$menu->keyword}}">
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="@foreach($blogs as $blog) {{$blog->title}} @endforeach" />
            <meta name="twitter:description" content="{{$menu->description}}" />
            <meta itemprop="name" content="@foreach($blogs as $blog) {{$blog->title}} @endforeach">
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
        @foreach($blogs as $blog)
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <a class="test-popup-link zoom-in" href="{{asset($blog->images)}}">
                            <img src="{{asset($blog->images)}}" alt="" class="product__details__big__pic" data-pagespeed-url-hash="3329915024" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-tabs" role="tablist" style="direction: rtl;">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">توضیحات </a>
                        </li>
                    </ul>
                    <div class="tab-content" style="direction: rtl;text-align: justify;">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel" >
                            <p style="padding: 40px;">{{$blog->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="related__products">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            @foreach($menus as $menu)
                                @if($menu->slug == Request::segment(1))
                                    <h2>{{$menu->pagetitle}}</h2>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__slider owl-carousel">
                        @foreach($allblogs as $blog)
                        <div class="col-lg-3">
                            <div class="product__item">
                                <a href="{{url(Request::segment(1) .'/'. $blog->slug) }}">
                                    <img src="{{asset($blog->images)}}" style ='width:300px; height:300px;' class="img-fluid">
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="{{url(Request::segment(1) .'/'. $blog->slug) }}">{{$blog->title}}</a></h6>
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

