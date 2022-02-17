@extends('master')
@section('title')
    @foreach($menus as $menu)
        @if($menu->slug == Request::segment(1))
                <title> {{$menu->pagetitle}} </title>
                <meta name="description" content="{{$menu->description}}">
                <meta name="keyword" content="{{$menu->keyword}}">
                <meta name="twitter:card" content="summary" />
                <meta name="twitter:title" content="{{$menu->pagetitle}} " />
                <meta name="twitter:description" content="{{$menu->description}}" />
                <meta itemprop="name" content="{{$menu->pagetitle}} ">
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

                                            @if(Request::segment(1) == 'سنگ-ایرانی')
                                                <p style="direction: rtl;font-size: 16px" class="text-justify">
                                                    کارخانه سنگبری دهبید عظیمی یکی از تولید کنندگان موفق سنگ دهبید در سال 1385 با تکیه بر فناوری روز دنیا و بهترین فرآوری تولیدات تاسیس گردید و بر اساس سه اصل :
                                                    <br>● برش دقیق و گونیا
                                                    <br>● اپوکسی و ساب (پولیش) شیشه ای
                                                    <br>● سورتینگ منحصر به فرد
                                                    <br>این مجموعه خط تولید خود را طراحی و تنظیم نمود که همین موضوع آن را به بهترین تولیدکننده سنگ دهبید در سطح کشور تبدیل نموده است. ما کیفیت برتر و مشتری مداری را سرلوحه کار خود قرار داده و اعتقاد داریم یک واحد تولیدی جهت سبقت گرفتن از رقبای خود میبایست محصولات خود را بهتر از گذشته، روانه بازار فروش نماید تا مصرف کننده هر روز اعتماد و اطمینان بیشتری به این تولیدات سنگ دهبید پیدا کند. در حال حاظر ظرفیت تولید و فروش  سنگ دهبید کارخانه به صورت تخصصی در سال ، 300/000 متر مربع سنگ دهبید میباشد که با این کیفیت در نوع خود بی نظیر است. قابل ذکر است تمام مراحل تهیه کوپ، فرآیند تولید و فروش تحت کنترل مستمر میباشد، لذا روش کار بدین صورت است که تهیه کوپهای صادراتی سنگ دهبید توسط کارشناسان و نمایندگان متخصص این شرکت از معادن سنگ دهبید انجام میپذیرد و با بهره گیری از فناوری روز دنیا و فراوری عالی سنگ در هر سایز و ابعاد، تولید و با کنترل مستمر آن، روانه بازار میکند.
                                                </p>
                                            @endif


                                                @if(Request::segment(1) == 'سنگ-خارجی')
                                                    <p style="direction: rtl;font-size: 16px" class="text-justify">
                                                        جهت تولید سنگ مرمریت لَته،سنگ امپرادور ترکیه و سنگ امپرادور دارک اسپانیا مجموعه سنگ عظیمی از طریق کارشناسان حرفه ای و مجرب خود، سنگ خام را انتخاب و خریداری کرده و به صورت بلوک وارد کشور میکنند و به این ترتیب مدیران این مجموعه از یک طرف  با ایجاد اشتغال زایی برای کارکنان و کارگران خود خدمت ملی کرده و از طرف دیگر  با  عرضه سنگ های نام برده شده در کنار مرمریت دهبید توانسته اند طیف رنگی وسیعتری از محصولات خود را برای جلب رضایت بیشتر مشتریان نمایش و ارا ئه دهند.
                                                    </p>
                                                @endif

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
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="product__item">
                            <a href="{{url('محصولات'.'/'.$product->slug)}}">
                                <div class="product__item__pic">
                                    <img src="{{'images/loadimage.png'}}" data-src="{{asset($product->images)}}" class="lazy"  style="max-height: 338px;width: -webkit-fill-available;" title="{{$product->title}}" alt="{{$product->title}}">
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
