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
            <meta property="og:url" content="https://azimistone.com" />
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
		<section class="services-page spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 order-lg-1">
						<div class="services__page__text">
							<div class="price"> سنگبری عظیمی</div>
								<h2>چرا <strong style="color: #6e1212;">سنگبری پارسیان دهبید عظیمی</strong> را انتخاب کنیم ؟</h2>
							<ul>
								<li><span class="fa fa-check"></span> برش دقیق و گونیا</li>
								<li><span class="fa fa-check"></span> ساب و اپوکسی بی نظیر</li>
								<li><span class="fa fa-check"></span> سورت منحصر به فرد</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 order-lg-2">
						<div class="services__page__pic">
							<div class="services__page__pic__item">
								<img src="images/azimislice3.jpg" loading="lazy"  alt="درباره سنگبری عظیمی">
							</div>
							<div class="services__page__pic__item small__item">
								<img src="images/azimislice4.jpg" loading="lazy"  alt="درباره سنگبری عظیمی">
							</div>
						</div>
					</div>
				<div class="col-lg-6 order-lg-4">
					<div class="services__page__text">
						<div class="price" style="text-align: right;">درباره سنگبری عظیمی</div>
							<h2 style="text-align: right;">تنها تولیدکننده انبوه سنگ ساختمانی در ابعاد بزرگ</h2>
                        <p style="text-align: justify;direction: rtl;">مجموعه سنگ عظیمی با در اختیار داشتن کارخانه سنگبری پارسیان دهبید عظیمی ، بیش از یک دهه است که در صنعت تولید سنگ های ساختمانی پیشگام و صاحب سبک بوده است . مدیران خلاق و با تجربه این مجموعه با تاسیس و راه اندازی این کارخانه که مجهز به ماشین آلات بروز دنیا میباشد، توانسته اند با توجه به حجم بالای تولید و کیفیت فرآوری قابل توجه، رضایت مشتریان خود را در طول این سالها به همراه داشته باشند. طی سالهای اخیر این مجموعه، طی این سال ها سنگ مرمریت لته ترکیه امپرادور دارک اسپانیا و امپرادور لایت ترکیه  را در کنار مرمریت دهبید به پروسه تولید انبوه خود اضافه نموده است. حجم توليد بالا ، حفظ كيفيت مطابق با استانداردهای بین المللی، قیمت استثنایی و زمان بندي دقيق براي تامين سفارش مشتريان از أهداف اصلي اين مجموعه به شمار مي آيد و تا به امروز اين هدف به بهترين نحو در اين مجموعه اجرا شده است.</p>
					</div>
				</div>
				<div class="col-lg-6 order-lg-3">
					<div class="services__page__pic">
						<div class="services__page__pic__item small__item">
							<img src="images/azimislice1.jpg" loading="lazy"  alt="درباره سنگبری عظیمی">
						</div>
						<div class="services__page__pic__item">
							<img src="images/azimislice2.jpg" loading="lazy"  alt="درباره سنگبری عظیمی">
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
@endsection
