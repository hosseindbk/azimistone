@extends('master')
@section('title')
    @foreach($submenus as $submenu)
        @if($submenu->slug == Request::segment(2))
                <title> {{$submenu->pagetitle}} </title>
                <meta name="description" content="{{$submenu->description}}">
                <meta name="keyword" content="{{$submenu->keyword}}">
                <meta name="twitter:card" content="summary" />
                <meta name="twitter:title" content="{{$submenu->pagetitle}} " />
                <meta name="twitter:description" content="{{$submenu->description}}" />
                <meta itemprop="name" content="{{$submenu->pagetitle}} ">
                <meta itemprop="description" content="{{$submenu->description}}">
                <meta property="og:title" content="{{$submenu->keyword}}"/>
                <meta property="og:description" content="{{$submenu->description}}" />
        @endif
    @endforeach
@endsection
@section('main')
    <div class="breadcrumb-option set-bg" data-setbg="@foreach($slides as $slide) {{asset($slide->images)}} @endforeach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        @foreach($submenus as $submenu)
                            @if($submenu->slug == Request::segment(2))
                                <h1>{{$submenu->pagetitle}}</h1>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="products spad">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="product__item">
                            <a href="{{url('محصولات'.'/'.$product->slug)}}">
                                <div class="product__item__pic">
                                    <img src="{{asset($product->images)}}"  loading="lazy"  style="max-height: 338px;width: -webkit-fill-available;" title="{{$product->title}}" alt="{{$product->title}}">
                                </div>
                            </a>
                            <div class="product__item__text">
                                @foreach($submenus as $submenu)
                                    @if($submenu->id == $product->submenu_id)
                                        <h3 style="color: #861d00;">{{$submenu->title}}</h3>
                                    @endif
                                @endforeach
                                <a href="{{url('محصولات'.'/'.$product->slug)}}"><h2 style="direction: rtl;color: #444;padding: 20px;">{{$product->title}}</h2></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
