@extends('master')
@section('title')
    @foreach($products as $product)

            <title> {{$product->title}} </title>
            <meta name="description" content="{{$product->description}}">
            <meta name="keyword" content="{{$product->keyword}}">
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content=" {{$product->title}}" />
            <meta name="twitter:description" content="{{$product->description}}" />
            <meta itemprop="name" content=" {{$product->title}} ">
            <meta itemprop="description" content="{{$product->description}}">
            <meta property="og:title" content="{{$product->title}}"/>
            <meta property="og:description" content="{{$product->description}}" />
    @endforeach

@endsection
@section('main')
    <div class="breadcrumb-option set-bg" data-setbg="@foreach($slides as $slide) {{asset($slide->images)}} @endforeach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        @foreach($products as $product)
                        <h1 class="direction-r">{{$product->title}}</h1>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="product-details spad">
    @foreach($products as $product)
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images)}}">
                        <img src="{{asset($product->images)}}" alt="{{$product->title}}" class="product__details__big__pic lazy" style="margin-bottom: 30px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="" style="direction: rtl;text-align: justify;">
                    <div class="title" style="font-size: 20px;margin-bottom: 20px;border-bottom: 1px solid;"> مشخصات {{$product->title}}</div>
                    <div>
                        <div style="padding-right: 40px">
                            <h2 style="margin-top: 15px;font-size: 17px;">نام سنگ : {{$product->title}}</h2>
                            <h2 style="margin-top: 15px;font-size: 17px;"> سایز سنگ:  {{$product->size}}  </h2>
                            <h2 style="margin-top: 15px;font-size: 17px;"> کاربرد :  {{$product->karbord}}</h2>
                            <h2 style="margin-top: 15px;font-size: 17px;">سورت سنگ : {{$product->sort}}</h2>
                        </div>
                    </div>
                    <div class="title" style="font-size: 20px;margin: 20px 0px;border-bottom: 1px solid;"> توضیحات {{$product->title}}</div>
                    <div>
                        <p style="padding-right: 40px">{{$product->description}}</p>
                        <p style="padding-right: 40px">{{$product->text}}</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="container">
                <div class="row">
                    @if($product->images2 != null)
                    <div class="col-lg-3">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images2)}}" >
                        <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($product->images2)}}" alt="{{$product->title}}" style="margin-bottom: 30px;">
                        </a>
                    </div>
                    @endif
                        @if($product->images3 != null)
                    <div class="col-lg-3">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images3)}}">
                        <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($product->images3)}}" alt="{{$product->title}}" style="margin-bottom: 30px;">
                        </a>
                    </div>@endif
                            @if($product->images4 != null)
                    <div class="col-lg-3">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images4)}}">
                        <img src="{{asset('images/loadimage.png')}}"  class="lazy" data-src="{{asset($product->images4)}}" alt="{{$product->title}}" style="margin-bottom: 30px;">
                        </a>
                    </div>@endif
                                @if($product->images5 != null)
                    <div class="col-lg-3">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images5)}}">
                        <img src="{{asset('images/loadimage.png')}}"  class="lazy" data-src="{{asset($product->images5)}}" alt="{{$product->title}}" style="margin-bottom: 30px;">
                        </a>
                    </div>@endif
                                    @if($product->images6 != null)
                    <div class="col-lg-3">
                        <a class="test-popup-link zoom-in" href="{{asset($product->images6)}}">
                        <img src="{{asset('images/loadimage.png')}}"  class="lazy" data-src="{{asset($product->images6)}}" alt="{{$product->title}}" style="margin-bottom: 30px;">
                        </a>
                    </div>
                        @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="related__products">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2> محصولات سنگبری عظیمی</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product__slider owl-carousel">
                    @foreach($allproducts as $product)
                    <div class="col-lg-3">
                        <div class="product__item">
                                <a href="{{url(Request::segment(1) .'/'. $product->slug) }}">
                                    <div class="product__item__pic set-bg">
                                        <img src="{{asset('images/loadimage.png')}}"  class="lazy" data-src="{{asset($product->images)}}" height="220" title="{{$product->title}}" alt="{{$product->title}}">
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    @foreach($submenus as $submenu)
                                        @if($submenu->id == $product->submenu_id)
                                            <span>{{$submenu->title}}</span>
                                        @endif
                                    @endforeach
                                    <h6><a href="{{url(Request::segment(1) .'/'. $product->slug) }}">{{$product->title}}</a></h6>
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

