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
                        <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/about-pic.jpg')}}" title="???????????? ?????????? ?????????? ??????????"  alt="???????????? ?????????? ?????????? ??????????">
                        <p class="tolid-anboh">?????????? ?????????? ???? ?????????? ????????
                            <br>
                            <strong style="font-family:Tahoma"> 165X165 ?? 125X125</strong>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-sx-12">
                        <div>
                            <h1 class="z-index text-center">?????????????? ???????????? ?????????? ( ?????????????? ?????????? ?????????? )</h1>
                        </div>
                        <div class="section-title">
                            <h3 style="text-align: center;">???????? ???????????????????? ?????????? ?????? ???????????????? ???? ?????????? ????????</h3>
                        </div>
                        <p>
                            <h2 class="display-inline">?????????????? ???????????? ??????????</h2>
                            ( ?????????????? ?????????? ?????????? ) ???? ???????????? ???? ???????? ???????? ???????????? ?????? ?????????? ??????????
                            <h2 class="display-inline">?????? ?????? ????????????????</h2>
                            ???????????? ??
                        <h2 class="display-inline">?????????? ?????? ?????? ????????????????</h2>
                        ???? ?????????? ???????? ?? ?????? ???? ???????????? ???????? ?????????????? ???? ?????? ???????? ???????????? . ???????????? ?????? ???????? ???? ?????? ???????? ????  ?????????? ???? ?????? ???????? ?? ???? ???????? ?????????? ???????? .
                            ???? ?????????????? ???? ???????? ???????? ???? ?????????? ?? ???????????????? ???????? ?? ????????????
                        <h2 class="display-inline">?????? ??????????</h2>
                        (?????????????? ?????????? ?????????? ) ???????? ???? ?????????? ?????????? ?????? ?????? ???????? ???????????????? ???? ?????????? ????????  165*165  ??  125*125 ???? ?????????? ???????????? .
                        ?????? ?????? ?? ???? ???? ???? ?????????? ?????????? ???? ???????????? ?? ???????? ?????????????? ???? ???????? ?????? ???????????????? ???????? ?????????? ?????? ???????? ?? ???????? ?????????? ?????????? ??????.
                    </p>
                        <a href="#" class="primary-btn offset-4">???????? ???? ????</a>
                    </div>
                </div>
            </div>
    </section>
    <section class="services set-bg spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>?????????? <strong class="color-6e1212">?????? ????????????????</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/stone1.jpg')}}" title="?????? ?????????? ?????????? ??????????" alt="?????? ?????????? ?????????? ??????????">
                        </div>
                        <div class="services__item__text">
                            <a href="{{url('??????????????/??????-??????????-??????????')}}"><h2>?????? ?????????? ??????????</h2></a>
                            <h3 class="color-6e1212">????????????</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item services__item__top">
                        <div class="services__item__text">
                            <a href="{{url('??????????????/??????-????????????????-????????-??????????????')}}"><h2>?????? ???????????????? ???????? ??????????????</h2></a>
                            <h3 class="color-6e1212">????????????</h3>
                        </div>
                        <div class="services__item__pic">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/stone2.jpg')}}" title="?????? ???????????????? ???????? ??????????????" alt="?????? ???????????????? ???????? ??????????????">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/stone3.jpg')}}" title="?????? ???????? ????????" alt="?????? ???????? ????????">
                        </div>
                        <div class="services__item__text">
                            <a href="{{url('??????????????/??????-????????-????????')}}"><h2>?????? ???????? ????????</h2></a>
                            <h3 class="color-6e1212">????????????</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services__item services__item__top">
                        <div class="services__item__text">
                            <a href="{{url('??????????????/??????-??????-??????????')}}"><h2>?????? ?????? ??????????</h2></a>
                            <h3 class="color-6e1212">????????????</h3>
                        </div>
                        <div class="services__item__pic">
                            <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/stone4.jpg')}}" title="?????? ?????? ??????????" alt="?????? ?????? ??????????">
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
                                <h5>?????? <strong class="color-6e1212">???????????? ?????????????? ?????????? ??????????</strong> ???? ???????????? ???????? ??</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal4"><h3>?????????? ?????????? ?????????? ???????? ?????????? ???? ??????</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal1"><h3>???????? ??????????</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal2"><h3>?????? ?? ???????????? ???? ????????</h3></button>
                        </div>
                        <div class="col-lg-3 text-center">
                            <button type="button" class="btn btn-lg btn-outline-danger" data-toggle="modal" data-target="#myModal3"><h3>?????? ???????? ?? ??????????</h3></button>
                        </div>
                        <div id="myModal4" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">?????????? ?????????? ?????????? ???????? ?????????? ???? ??????</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>?????????????? ???????????? ?????????????? ?????????? ?????????? ???? ?????????? ?????? ?????? ???????????????? ???? ?????????? ???????? 165*165 ?????????? ?????????? ?????????? ???????????? ???? ?????? ???? ?????????? ???? ???? ?????????? ?????? ?????? ?????????? ???? ???? ?????????? ?????? ???????????????? ?????????? ??????.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">???????? ?????????? ???? ??????</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>???????? ?????????? ???? ?????? ???? ???????? ???? ?????????? ???????? ( 90 ???????? ) ?????????? ?????? ???????? ?????? ???????????????? ???????????? ?????? ?? ?????? ?????? ?????????? ???? ???????????? ???????? ???????? ?????????? ?????? ???? ?????? ???????? ???????? ???????????? ?????????? ?????? ?????????? ?????? ???????????? ?????????? ?? ?????????? ???????????? ??????</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">?????? ?? ???????????? ???? ????????</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>?????? ?? ???????????? ???? ?????????????? ?????? ?????? ?????????? ?????? ??????????. ?????? ?????? ???? ?????????? ?????? ???????? ???? ???????? ???????????? ???? 90 ?? ???????????? ???? ???????? ???????? ????????????. ???? ???????? ???? ???????????? ?????????? ?????????????? ?????? ???? ?????? ???????????? ???????????????? ?????????? ?????? ?????????? ???? ???????? ???????????? ????????????.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header direction-r">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">?????? ???????? ?? ??????????</h4>
                                    </div>
                                    <div class="modal-body direction-r text-justify">
                                        <p>?????? ???????? ?? ?????????? ???????? ???????? ?????? ???????? ?????? ?????????? ??????????. ?????????????? ???????????? ?????????????? ???????????? ?????????? ?????? ?????? ???? ???? ?????? ?????? ?????? ???????????? ???????????? ???????? ???? ?????????? ?????????????? ??????.</p>
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
                    <h4 style="padding-top: 14px;">?????????? ?????? ?????????? ??????</h4>
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                            <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                                    <a href="{{url('??????????'.'/'.$project->slug)}}">
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
                        <h2>?????????????? ?????? ?????? ????????????????</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <a href="{{url('????????-??????'.'/'.$blog->slug)}}">
                                    <img  src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($blog->images)}}" height="290" title="{{$blog->title}}" alt="{{$blog->title}}">
                                </a>
                            </div><div class="blog__item__text">
                                <h2><a href="{{url('????????-??????'.'/'.$blog->slug)}}">{{$blog->title}}</a></h2>
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
                        <h2>?????????? ?????????????? ?????? ??????????</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product__slider owl-carousel">
                    @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="product__item">
                                <a href="{{url('??????????????'.'/'.$product->slug)}}">
                                    <div class="product__item__pic">
                                        <img  src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset($product->images)}}" height="220" title="{{$product->title}}" alt="{{$product->title}}">
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    @foreach($submenus as $submenu)
                                        @if($submenu->id  == $product->submenu_id)
                                            <span>{{$submenu->title}}</span>
                                        @endif
                                    @endforeach
                                    <h6 class="direction-r"><a href="{{url('??????????????'.'/'.$product->slug)}}">{{$product->title}}</a></h6>
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
                        <img src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/callto-text-bg.jpg')}}" style="width: 100%;height: 500px;" title="?????????????? ???????????? ?????????????? ?????????? ??????????" alt="?????????????? ???????????? ?????????????? ?????????? ??????????">
                        <div  style="position:absolute;line-height: 10px;margin: -256px 10% 0px 35%;">
                            <h2 style="color: #fff">?????????????? ?????? ??????????</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div>
                        <img  src="{{asset('images/loadimage.png')}}" class="lazy" data-src="{{asset('images/callto-quote-bg.jpg')}}" style="width: 100%;height: 500px;" title="?????????????? ???????????? ?????????????? ?????????? ??????????" alt="?????????????? ???????????? ?????????????? ?????????? ??????????">
                        <div  style="position:absolute;line-height: 10px;margin: -256px 10% 0px 35%;">
                            <h2 style="color: #fff">?????????? ?????? ?????????????? ?????? ??????????</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
