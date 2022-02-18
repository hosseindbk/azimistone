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
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <a href="{{Request::segment(1) .'/'. $blog->slug }}">
                                    <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($blog->images)}}" height="290" title="{{$blog->title}}" alt="{{$blog->title}}">
                                </a>
                            </div><div class="blog__item__text">
                                <h2><a href="{{Request::segment(1) .'/'. $blog->slug }}"></a></h2>
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
@endsection
