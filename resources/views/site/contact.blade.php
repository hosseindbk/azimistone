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
		<section class="contact spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact__map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416532.1156303528!2d50.937337875366225!3d35.351746013210494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea54324ed55cf4ab!2sAzimi%20Stone!5e0!3m2!1sen!2s!4v1621087272734!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="contact__form">
							<h2 style="text-align: center;">ارتباط با سنگبری عظیمی</h2>
								<form action="#">
								<div class="row">
									<div class="col-lg-6">
										<input type="text" placeholder="Name*">
									</div>
								<div class="col-lg-6">
									<input type="text" placeholder="Phone*">
								</div>
								<div class="col-lg-6">
									<input type="text" placeholder="Email*">
								</div>
								<div class="col-lg-6">
									<input type="text" placeholder="Subject">
								</div>
								<div class="col-lg-12">
									<textarea placeholder="Message"></textarea>
										<button type="submit" class="site-btn">Send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
				<form class="search-model-form">
					<input type="text" id="search-input" placeholder="Search here.....">
				</form>
		</div>
	</div>
@endsection
