@extends('master')
@section('title')
    @foreach($menus as $menu)
        @if($menu->slug == Request::segment(1))
            <title>{{$menu->pagetitle}}</title>
            <meta name="description" content="{{$menu->description}}">
            <meta name="keyword" content="{{$menu->keyword}}">
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="{{$menu->pagetitle}}" />
            <meta name="twitter:description" content="{{$menu->description}}" />
            <meta itemprop="name" content="{{$menu->pagetitle}}">
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
    <div class="testimonial" style="margin-top:55px; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title">
                                    <p style="direction: rtl;font-size: 16px" class="text-justify">سنگ دهبید از مرغوب ترین سنگهای ساختمانی در ایران است.اما مهمترین مشکل آن، نزدیک بودن رنگ این سنگها به یکدیگر می باشد، که اگر سورتینگ به درستی انجام نشود بازی رنگ سنگها در اتمام کار باعث رنجش هر بیننده ای خواهد شد.
                                        این مجموعه برای اولین بار در سال 1387 در ایران سورت سنگ دهبید را طی روشی خاص و همچنین به صورت چشمی انجام می داد، که خود موجب برتری محسوس نسبت به سایر رقبا در این حوضه شده بود،مدیران این مجموعه به علت بالا بردن سرعت در انجام سورتینگ و همچنین پیشرفت با علم روز و تکنولوژی دنیا و بالا بردن کیفیت تولید، سورتینگ سنگ با دستگاه به صورت مکانیزه را در دستور کار خود قرار دادند.
                                        گروه تولیدی سنگبری پارسیان دهبیدعظیمی، با سرمایه گذاری کلان و تشکیل کارگروهی از متخصصین در مدت 3 سال موفق به اختراع دستگاهی شدند که توانایی سورتینگ انواع سنگ در ابعاد مختلف به ویژه سنگ دهبید را داشته باشد. دقت ، تفاوت و خاص بودن سورتینگ توسط این دستگاه و همچنین گارانتی پارسیان دهبید عظیمی، مکمل هم گردیده تا مصرف کننده نهایت رضایت را از سورت سنگ دهبید داشته باشد.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                        <div class="">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/sort.png')}}" alt="سورت سنگ کارخانجات سنگ عظیمی">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                        <div class="" >
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/sort-stone.png')}}" alt="سورت سنگ کارخانجات سنگ عظیمی">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <div class="">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/sort-2.jpg')}}" alt="سورت سنگ کارخانجات سنگ عظیمی">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <div class="" >
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/sort-3.jpg')}}" alt="سورت سنگ کارخانجات سنگ عظیمی">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <div class="" >
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/sort-4.jpg')}}"  alt="سورت سنگ کارخانجات سنگ عظیمی">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="beauty-products spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>انواع محصولات سنگ عظیمی</h2>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="product__slider owl-carousel">--}}
{{--                    @foreach($products as $product)--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <div class="product__item">--}}
{{--                                <a href="{{url('محصولات'.'/'.$product->slug)}}">--}}
{{--                                    <div class="product__item__pic set-bg">--}}
{{--                                        <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($product->images)}}"  height="220" title="{{$product->title}}" alt="{{$product->title}}">--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="product__item__text">--}}
{{--                                    @foreach($submenus as $submenu)--}}
{{--                                        @if($submenu->id  == $product->submenu_id)--}}
{{--                                            <span>{{$submenu->title}}</span>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                    <h6><a href="{{url('محصولات'.'/'.$product->slug)}}">{{$product->title}}</a></h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

@endsection
