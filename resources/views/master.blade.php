<!DOCTYPE html>
   <html lang="FA-IR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="icon" href="{{asset('images/logo.png')}}">

            <meta name="author" content="آژانس تخصصی تبلیغات بستا" />
            <meta property="og:image" content="{{asset('images/logo.png')}}" />
            <meta name="twitter:image" content="{{asset('images/logo.png')}}"/>
            <meta itemprop="image" content="{{asset('images/logo.png')}}" />
            <meta itemprop="image" content="{{asset('images/logo.png')}}">

            <meta property="og:type" content="Shopping" />
            <meta name="format-detection" content="telephone=+989127125646">

            <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo.png')}}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/logo.png')}}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/logo.png')}}">

            @yield('title')
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/mattings.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
            <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
            <!--[if lt IE 9]>
            <script src="{{asset('js/respond.min.js')}}"></script>

            <![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->

        </head>
    <body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">

        <div class="offcanvas__logo">
            <a href="">
                <img src="{{asset('images/logo.png')}}" title="سنگبری دهبید عظیمی" alt="سنگبری دهبید عظیمی" >
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-sm-12 col-md-12">
                    <div class="header__logo">
                        <a href=""><img src="{{asset('images/logo.png')}}" title="سنگبری دهبید عظیمی" alt="سنگبری دهبید عظیمی" class="w-60"></a>
                        <a href="https://www.facebook.com/azimistonee" style="color: #000;font-size: 16px;padding-right: 5px;"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/azimistonee" style="color: #000;font-size: 16px;padding-right: 5px;"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/azimistonee" style="color: #000;font-size: 16px;padding-right: 5px;"><i class="fa fa-instagram"></i></a>
                        <a href="tel:+989127125646" style=" color: #000;font-size: 18px;padding-right: 5px;"><i class="fa fa-phone"><b>+989127125646</b> </i></a>
                    </div>
                </div>
                <div class="col-xl-8 col-sm-12 col-md-12">
                    <div class="header__options">
                        <nav class="header__menu mobile-menu direction-r text-justify">
                            <ul>

                                @foreach($menus as $menu)
                                    @if($menu->submenu == '0')
                                        <li @if(Request::segment(1) == $menu->slug) class="active" @endif>
                                            <a href="{{url($menu->slug)}}">{{$menu->title}}</a>
                                        </li>
                                    @endif
                                        @if($menu->submenu == '1')
                                            <li @if(Request::segment(1) == $menu->slug) class="active" @endif>
                                                <a href="{{url($menu->slug)}}">{{$menu->title}}</a>
                                                    <ul class="dropdown" style="padding-right: 20px;">
                                                        @foreach($submenus as $submenu)
                                                            @if($submenu->menu_id == $menu->id)
                                                                <li><a href="{{url($menu->slug.'/'.$submenu->slug)}}">{{$submenu->title}}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                            </li>
                                        @endif
                                @endforeach
                                <li><a href=""></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGJNFJX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    @yield('main')


    <footer class="footer">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__contact__item">
                            <div class="footer__contact__icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <strong>آدرس</strong>
                            <p style="text-align: right;"><strong>انبار</strong> :بزرگراه تهران قم - شهرک صنعتی شمس آباد - بلوار بوستان - ابتدای خیابان گلبن نهم<br><br>
                                <strong>کارخانه</strong> : کیلومتر 50 جاده اصفهان - شیراز</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__contact__item">
                            <div class="footer__contact__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <strong>تلفن تماس</strong>
                            <p> +989121125646 <br> +989121129854 <br> +989121158352  <br> +982122980935-7</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__contact__item">
                            <div class="footer__contact__icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <strong>ایمیل</strong>
                            <p>info@azimistone.com</p>
                            <p>daftaretehran91@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer__logo">
                            <a href=""><img src="{{asset('images/logo.png')}}" title="سنگبری دهبید عظیمی" alt="سنگبری دهبید عظیمی" ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <p class="footer__copyright__text">
                            <a href="https://bestagroup.ir" target="_blank" rel="nofollow noopener">Bestagroup</a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="footer__copyright__text text-center">
                            کلیه حقوق محتوایی این وبسایت متعلق به کارخانه سنگبری پارسیان دهبید عظیمی می باشد
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer__copyright__social">
                            <a href="https://www.facebook.com/azimistonee"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/azimistonee"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/azimistonee"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="call-whatsapp">
        <div class="bg-whatsapp">

            <a href="https://api.whatsapp.com/send?phone=+989127125646" style="color: #fff;">
                <img src="{{asset('images/whatsapp-logo-32x32.png')}}" title="سنگبری دهبید عظیمی" alt="سنگبری دهبید عظیمی">ارتباط باما
            </a>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P9Q9Z0SG8V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-P9Q9Z0SG8V');
    </script>
<script type="application/ld+json">
                { "@context" : "http://schema.org",
                    "@type" : "shopping",
                    "legalName" : "سنگبری دهبید پارسیان عظیمی",
                    "url" : "https://azimistone.ir/",
                    "contactPoint" : [{
                        "@type" : "ContactPoint",
                        "telephone" : "+989127125646",
                        "contactType" : "shopping"
                    }],
                    "logo" : "https://www.azimistone.ir/images/logo.png",
                    "sameAs" : [ "https://www.facebook.com/azimistonee",
                        "https://twitter.com/azimistonee",
                        "https://www.instagram.com/azimistonee"
                        ]
                }
            </script>
    <script>
        !function(window){
            var $q = function(q, res){
                    if (document.querySelectorAll) {
                        res = document.querySelectorAll(q);
                    } else {
                        var d=document
                            , a=d.styleSheets[0] || d.createStyleSheet();
                        a.addRule(q,'f:b');
                        for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
                            l[b].currentStyle.f && c.push(l[b]);

                        a.removeRule(0);
                        res = c;
                    }
                    return res;
                }
                , addEventListener = function(evt, fn){
                    window.addEventListener
                        ? this.addEventListener(evt, fn, false)
                        : (window.attachEvent)
                            ? this.attachEvent('on' + evt, fn)
                            : this['on' + evt] = fn;
                }
                , _has = function(obj, key) {
                    return Object.prototype.hasOwnProperty.call(obj, key);
                }
            ;

            function loadImage (el, fn) {
                var img = new Image()
                    , src = el.getAttribute('data-src');
                img.onload = function() {
                    if (!! el.parent)
                        el.parent.replaceChild(img, el)
                    else
                        el.src = src;

                    fn? fn() : null;
                }
                img.src = src;
            }

            function elementInViewport(el) {
                var rect = el.getBoundingClientRect()

                return (
                    rect.top    >= 0
                    && rect.left   >= 0
                    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
                )
            }

            var images = new Array()
                , query = $q('img.lazy')
                , processScroll = function(){
                    for (var i = 0; i < images.length; i++) {
                        if (elementInViewport(images[i])) {
                            loadImage(images[i], function () {
                                images.splice(i, i);
                            });
                        }
                    };
                }
            ;
            // Array.prototype.slice.call is not callable under our lovely IE8
            for (var i = 0; i < query.length; i++) {
                images.push(query[i]);
            };

            processScroll();
            addEventListener('scroll',processScroll);

        }(this);
    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplay:true,
            animateOut: 'slideOutUp',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    </script>
    <script>
        $('.test-popup-link').magnificPopup({
            type: 'image'
        });
    </script>
    </body>
</html>
