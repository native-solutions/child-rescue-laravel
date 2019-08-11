<!DOCTYPE html> 
<html lang="en">
<head> 

<title> @if($setting) {{ $setting->site_name }} @endif</title> 

<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Style Sheets --> 
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/reset.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/trunk.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/nivo-slider.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/index.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/liMarquee.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/104.css') }}" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/single-page.css') }}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"/>

<!-- Scripts --> 
<script type="text/javascript">
    if (typeof jQuery == 'undefined')
        document.write(unescape("%3Cscript src='js/jquery-1.9.js'" + 
                                                            "type='text/javascript'%3E%3C/script%3E"))
</script>



<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->


</head> 
 
<body> 

<div class="container">

    <header class="slide">     <!-- Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <ul id="navToggle" class="burger slide">    <!--    Add "slideRight" class to items that move right when viewing Nav Drawer  -->
            <li></li><li></li><li></li>
        </ul>
        <h1>@if($setting)  @if(\App::isLocale('en')) Emergency Number: {{ $setting->emergency_number }}  @else आपतकालिन: {{ $setting->emergency_number_nepali }} @endif @endif</h1>
        
    </header>
</div>
    <div class=" slide toptop">
        <div class="slide level container">
        <div class="level-left">
            <ul class="top-left-menu">
                <li><a href="{{ route('ecomplain') }}">e-complain</a></li>
                <li><a href="">Mail</a></li>
                <li><a href="">Sitemap</a></li>
            </ul>
        </div>
        <div class="level-right">
            <div class="phone-number">
                <img src="{{ asset('images/icons/message.svg') }}" width="24" alt="">
                <span class="numbers email"> @if($setting) {{ $setting->email }} @endif </span>

            </div>

            <div class="phone-number">
                <img src="{{ asset('images/icons/office-telephone.svg') }}" width="24" alt="">
                <span class="numbers"> @if($setting) @if(\App::isLocale('en')) {{ $setting->phone_number }} @else {{ $setting->phone_number_nepali }} @endif @endif </span>

            </div>


                <form action="{{ route('change-locale') }}" class="onoffswitch">
                    <input type="checkbox" name="locale" value="np" class="onoffswitch-checkbox" id="myonoffswitch" @if(\App::isLocale('en')) checked @endif>
                    <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                    </label>
                </form>
</div>

        </div>

    </div>


    <div class="container">
    <div class="slide slideright">
        <div class="page-logo">
            <figure>

  <div class="wrapper">
    <div class="ring">
        <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
            <div class="coccoc-alo-ph-circle"></div>
            <div class="coccoc-alo-ph-circle-fill"></div>
            <div class="coccoc-alo-ph-img-circle"></div>
            <div class="emergency-number" title="Emergency Number : 104">
                @if($setting) @if(\App::isLocale('en')) {{ $setting->emergency_number }} @else {{ $setting->emergency_number_nepali }} @endif @endif
            </div>

        </div>
    </div>
</div>


                <img src="@if($setting) {{ Storage::url($setting->header_logo_center) }} @endif" alt="">
                <figure class="visit-nepal">
                        <img src="@if($setting) {{ Storage::url($setting->header_logo_right) }} @endif" alt="">
                    </figure>
            </figure>
        </div>
    </div>
</div>

    <nav class="slide level slideright">
        <ul class="level-left">
            <li><a href="{{ route('home') }}" class="active"> @lang('menu.home')</a></li>
            @foreach($menus as $menu)
            
            @if(App::isLocale('en'))

           <li>
                <a href="{{ route('page', ['id' => $menu->id]) }}"> {{ $menu->title }} <ion-icon name="arrow-dropdown"></ion-icon></a>
                @if($menu->hasSubmenu())
                <div class="menu-dropdown">
                    <ul class="menu">
                        @foreach($menu->submenus() as $submenu)
                            <li class="item"><a href=" {{ route('page', ['id' => $submenu->id]) }}"> {{ $submenu->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </li>
           @else
            
            <li>
                <a href="{{ route('page', ['id' => $menu->id]) }}"> {{ $menu->title_nepali }} <ion-icon name="arrow-dropdown"></ion-icon></a>
                @if($menu->hasSubmenu())
                <div class="menu-dropdown">
                    <ul class="menu">
                        @foreach($menu->submenus() as $submenu)
                            <li class="item"><a href=" {{ route('page', ['id' => $submenu->id]) }}"> {{ $submenu->title_nepali }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </li>
 
 @endif 
            @endforeach

          <li><a href="{{ route('gallery') }}"> @lang('menu.gallery')</a></li>  
            <li ><a id="searchmenu" href="#">@lang('menu.search') <img src="{{ asset('images/icons/search.svg') }}" width="18" alt=""></a>
                <form action="{{ route('search') }}" class="searchbox" onkeypress="" id="searchform">
                    <input type="text" name="q" id="" placeholder="Search ">
                </form>
            </li>
        </ul>
    </nav>

    <div class="slide quick-notice slideright">
        <span class="notice">
            @foreach($newss as $news)
                <span class="bold-and-big"></span>
                {{ $news->title }}
                |||
            @endforeach
        </span> 
    </div>

@yield('content')







<footer class="footer bg-footer">
    <div class="container">
        <div class="columns">
            <div class="column is-two-fifths">
                <div class="title"> @lang('menu.about')</div>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt commodi facere maiores, ut, vel mollitia quasi repellat fuga? Cum, esse! Dolor deleniti minus totam facere iure autem laboriosam architecto.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt amet mollitia quis facere, ad consectetur adipisci voluptatibus labore. Velit repellendus nemo, nostrum possimus commodi. Consectetur nobis neque officia? Deserunt voluptas architecto, nostrum quod dolor illo cum voluptatibus itaque neque, consectetur repellendus, quo sit illum voluptate facere maiores voluptatem ab. Vel.
                </p>
                <a href="" class="read-more">Read More +</a>
            </div>
            <div class="column  is-offset-1">
                <div class="title">Quick Links</div>
                <div class="columns">
                    <ul class="menus column">
                        <li class="item">Home</li>
                        <li class="item">Organization</li>
                        <li class="item">Projects</li>
                        <li class="item">Notices</li>
                        <li class="item">Downloads</li>
                        <li class="item">Contact Us</li>
                        <li class="item">Press Release</li>
                    </ul>
                    <ul class="menus column">
                        <li class="item">Home</li>
                        <li class="item">Organization</li>
                        <li class="item">Projects</li>
                        <li class="item">Notices</li>
                        <li class="item">Downloads</li>
                        <li class="item">Contact Us</li>
                        <li class="item">Press Release</li>
                    </ul>

                </div>
            </div>
            

        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ asset('js/trunk.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{  asset('js/jquery.nivo.slider.js') }}"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.liMarquee.js') }}"></script>

<script type="text/javascript">
    $(window).load(function(){
        console.log("hello");
        $('#slider').nivoSlider({
            effect: 'sliceUpDownLeft',
            directionNav: false,
            controlNav: false,
            pauseTime: 5000,
        });
        $('.notice').liMarquee({
            direction : 'left',
            loop : -1,
            circular: false,
        });

        $('#searchmenu').on('click', function(){
            $('#searchform > input').toggleClass('d-block').toggleClass('w-200');
        })      

        $('#searchform > input').on('keyup', function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                $("#searchform").submit();
     
            }
        })

        $('.onoffswitch').on('click', function(event){
            event.preventDefault();
            $('.onoffswitch').submit();
        });

     

    });
</script>
    
</body> 
</html>







