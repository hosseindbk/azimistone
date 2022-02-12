@extends('master')
@section('title')
    @foreach($menus as $menu)
        @if($menu->slug == Request::segment(1))
            <title>{{$menu->pagetitle}}</title>
            <meta name="description" content="{{$menu->description}}">
            <meta name="keyword" content="{{$menu->keyword}}">
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content=" {{$menu->pagetitle}} " />
            <meta name="twitter:description" content="{{$menu->description}}" />
            <meta itemprop="name" content="{{$menu->pagetitle}} ">
            <meta itemprop="description" content="{{$menu->description}}">
            <meta property="og:url" content="https://azimistone.com" />
            <meta property="og:title" content="{{$menu->keyword}}"/>
            <meta property="og:description" content="{{$menu->description}}" />
            <link rel="canonical" href="https://azimistone.com" />
        @endif
    @endforeach
@endsection
@section('main')
    <header>
        <div class="owl-carousel owl-theme">
            @foreach($slides as $slide)
                <div class="item">
                    <img src="{{asset($slide->images)}}" title="{{$slide->title}}" alt="{{$slide->title}}">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h4>{{$slide->description}}</h4>
                                <h2>{{$slide->title}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </header>
    <section class="about spad">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12 col-sm-12 col-sx-12">
                    <div class="about__pic">
                        <img src="{{asset('images/about-pic.jpg')}}" title="سنگبری شایان دهبید عظیمی"  alt="سنگبری شایان دهبید عظیمی">
                        <p class="tolid-anboh">تولید انبوه در ابعاد بزرگ
                            <br>
                            <strong style="font-family:Tahoma"> 165X165 و 125X125</strong>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-sx-12">
                        <div>
                            <h1 class="z-index text-center">کارخانه سنگبری عظیمی ( پارسیان دهبید عظیمی )</h1>
                        </div>
                        <div class="section-title">
                            <h3 style="text-align: center;">تنها تولیدکننده انبوه سنگ ساختمانی در ابعاد بزرگ</h3>
                        </div>
                        <p>
                            <h2 class="display-inline">کارخانه سنگبری عظیمی</h2>
                            ( پارسیان دهبید عظیمی ) را میتوان از بزرگ ترین مجموعه های تولید کننده
                            <h2 class="display-inline">سنگ های ساختمانی</h2>
                            برشمرد ،
                        <h2 class="display-inline">تولید سنگ های ساختمانی</h2>
                        در ابعاد بزرگ ، یکی از پیچیده ترین تولیدات در این صنعت میباشد . مخصوصا اگر قرار بر این باشد که  تولید در حجم زیاد و به صورت انبوه باشد .
                            با استفاده از بروز ترین خط تولید و تکنولوژی بالا ، مجموعه
                        <h2 class="display-inline">سنگ عظیمی</h2>
                        (پارسیان دهبید عظیمی ) قادر به تولید انبوه سنگ های لوکس ساختمانی در ابعاد بزرگ  165*165  و  125*125 در ایران میباشد .
                        این مهم ، ما را به تامین کننده ای همیشگی و قابل اطمینان در صنعت سنگ ساختمانی برای پروژه های بزرگ و لوکس تبدیل نموده است.
                    </p>
                        <a href="#" class="primary-btn offset-4">تماس با ما</a>
                    </div>
                </div>
            </div>
    </section>
    <section class="services set-bg spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>انواع <strong class="color-6e1212">سنگ ساختمانی</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="{{asset('images/stone1.jpg')}}" title="سنگ دهبید شایان عظیمی" alt="سنگ دهبید شایان عظیمی">
                        </div>
                        <div class="services__item__text">
                            <a href="{{url('محصولات/سنگ-دهبید-شایان')}}"><h2>سنگ دهبید شایان</h2></a>
                            <h3 class="color-6e1212">مرمریت</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item services__item__top">
                        <div class="services__item__text">
                            <a href="{{url('محصولات/سنگ-امپرادور-دارک-اسپانیا')}}"><h2>سنگ امپرادور دارک اسپانیا</h2></a>
                            <h3 class="color-6e1212">مرمریت</h3>
                        </div>
                        <div class="services__item__pic">
                            <img src="{{asset('images/stone2.jpg')}}" title="سنگ امپرادور دارک اسپانیا" alt="سنگ امپرادور دارک اسپانیا">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="{{asset('images/stone3.jpg')}}" title="سنگ چینی ازنا" alt="سنگ چینی ازنا">
                        </div>
                        <div class="services__item__text">
                            <a href="{{url('محصولات/سنگ-چینی-ازنا')}}"><h2>سنگ چینی ازنا</h2></a>
                            <h3 class="color-6e1212">مرمریت</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item services__item__top">
                        <div class="services__item__text">
                            <a href="{{url('محصولات/سنگ-لته-ترکیه')}}"><h2>سنگ لته ترکیه</h2></a>
                            <h3 class="color-6e1212">مرمریت</h3>
                        </div>
                        <div class="services__item__pic">
                            <img src="{{asset('images/stone4.jpg')}}" title="سنگ لته ترکیه" alt="سنگ لته ترکیه">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h5>چرا <strong class="color-6e1212">سنگبری پارسیان دهبید عظیمی</strong> را انتخاب کنیم ؟</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal4"><h3>تولید انبوه ابعاد بزرگ منحصر به فرد</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal1"><h3>سورت یکدست</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal2"><h3>ساب و اپوکسی بی نظیر</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal3"><h3>برش دقیق و گونیا</h3></button>
                        </div>
                        <div id="myModal4" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">تولید انبوه ابعاد بزرگ منحصر به فرد</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>کارخانه سنگبری پارسیان دهبید عظیمی با تولید سنگ های ساختمانی در ابعاد بزرگ 165*165 بصورت انبوه اولین مجموعه ای است در ایران که می تواند این نوع تولید را در بازار سنگ ساختمانی ارائه دهد.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">سورت منحصر به فرد</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>سورت منحصر به فرد با توجه به تعداد سورت ( 90 سورت ) انجام شده توسط این کارخانه، اختلاف رنگ و طرح سنگ دهبید به کمترین حالت ممکن رسیده است که این مزیت باعث افتخار تامین سنگ پروژه های لاکچری تهران و ایران گردیده است</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">ساب و اپوکسی بی نظیر</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>ساب و اپوکسی بی نظیرسنگ های ما، آیینه شما هستند. این هدف با تولید سنگ هایی با لوکس بالاتر از 90 و اپوکسی بی نظیر محقق میگردد. با توجه به اپوکسی همرنگ استفاده شده بر روی سنگها، کوچکترین سوراخ های سوزنی هم قابل مشاهده نیستند.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">برش دقیق و گونیا</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>برش دقیق و گونیا باعث زیبا شدن خطوط بین سنگها میشود. کارخانه سنگبری پارسیان دهبید، ظرافت برش خود را با لبه های تیز سنگهای تولیدی خود، به نمایش درآورده است.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="work">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                <div class="section-title">
                    <h4 style="padding-top: 14px;">پروژه های تکمیل شده</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @foreach($projects as $project)
                                @if($project->pagestatus == 1)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item large__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @foreach($projects as $project)
                                @if($project->pagestatus == 2)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                            @foreach($projects as $project)
                                @if($project->pagestatus == 3)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @foreach($projects as $project)
                        @if($project->pagestatus == 4)
                            <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                <div class="work__item large__item set-bg" data-setbg="{{asset($project->images)}}">
                                    <div class="work__item__text">
                                        <h3>{{$project->title}}</h3>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @foreach($projects as $project)
                                @if($project->pagestatus == 5)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @foreach($projects as $project)
                                @if($project->pagestatus == 6)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-12">
                            @foreach($projects as $project)
                                @if($project->pagestatus == 7)
                                    <a href="{{url('پروژه'.'/'.$project->slug)}}">
                                        <div class="work__item set-bg" data-setbg="{{asset($project->images)}}">
                                            <div class="work__item__text">
                                                <h3>{{$project->title}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="latest-blog spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>دانستنی سنگ های ساختمانی</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <a href="{{url('مجله-سنگ'.'/'.$blog->slug)}}">
                                    <img src="{{asset($blog->images)}}" height="290" title="{{$blog->title}}" alt="{{$blog->title}}">
                                </a>
                            </div><div class="blog__item__text">
                                <h2><a href="{{url('مجله-سنگ'.'/'.$blog->slug)}}">{{$blog->title}}</a></h2>
                                <p class="direction-r">{{ Str::limit($blog->description, 200) }}</p>
                                <ul>
                                    <li>{{$blog->date}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
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
            <div class="row">
                <div class="product__slider owl-carousel">
                    @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="product__item">
                                <a href="{{url('محصولات'.'/'.$product->slug)}}">
                                    <div class="product__item__pic">
                                        <img src="{{asset($product->images)}}" height="220" title="{{$product->title}}" alt="{{$product->title}}">
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    @foreach($submenus as $submenu)
                                        @if($submenu->id  == $product->submenu_id)
                                            <span>{{$submenu->title}}</span>
                                        @endif
                                    @endforeach
                                    <h6 class="direction-r"><a href="{{url('محصولات'.'/'.$product->slug)}}">{{$product->title}}</a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="callto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div>
                        <img src="{{asset('images/callto-text-bg.jpg')}}" style="width: 100%;height: 500px;" title="کارخانه سنگبری پارسیان دهبید عظیمی" alt="کارخانه سنگبری پارسیان دهبید عظیمی">
                        <div  style="position:absolute;line-height: 10px;margin: -256px 10% 0px 35%;">
                            <h2 style="color: #fff">کارخانه سنگ عظیمی</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div>
                        <img src="{{asset('images/callto-quote-bg.jpg')}}" style="width: 100%;height: 500px;" title="کارخانه سنگبری پارسیان دهبید عظیمی" alt="کارخانه سنگبری پارسیان دهبید عظیمی">
                        <div  style="position:absolute;line-height: 10px;margin: -256px 10% 0px 35%;">
                            <h2 style="color: #fff">انبار سنگ کارخانه سنگ عظیمی</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
