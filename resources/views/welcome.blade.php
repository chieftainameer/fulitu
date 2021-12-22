<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->
        <title>RESTAURANTE FULITU</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!--====== Aos css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    </head>
    <body class="antialiased">
    <div style="background-color: black">
    <div class="header-section">
        <x-navbar />
        <div class="header-text-section">
            <div class="header-text">
                <p class="enjoy">enjoy your healthy delicios meal</p>
                <h1 class="header-title py-2">Treat Yourself</h1>
                <p class="pt-2 pb-2 header-desc">Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <button class="header-btn btn btn-warning">Explore Now</button>
            </div>
        </div>
    </div>
    </div>
    <div class="home-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <p class="selection-p">select your meal</p>
                    <h3 class="popular-foods pt-2 pb-3">Popular <span class="foods">Foods</span></h3>
                    <ul class="menu-side-list" id="menu-side-list">
                        <li onclick="showTab(event,'entrantes')" class="mb-3 side-menu-item active-menu"><img class="mr-4" src="{{asset('images/menu/breakfst.webp')}}" alt="breakfast menu" height="30" width="30" />Entrantes</li>
                        <li onclick="showTab(event,'sopas')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/lunch.webp')}}" alt="lunch menu" height="30" width="30" />Sopas</li>
                        <li onclick="showTab(event,'fideos')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/dinner.webp')}}" alt="dinner menu" height="30" width="30" />Arroz & Fideos</li>
                        <li onclick="showTab(event,'huevos')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/drinks.webp')}}" alt="drinks menu" height="30" width="30" />Huevos & Verduras</li>
                        <li onclick="showTab(event,'cerdo')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/breakfst.webp')}}" alt="drinks menu" height="30" width="30" />Cerdo</li>
                        <li onclick="showTab(event,'pescado')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/lunch.webp')}}" alt="drinks menu" height="30" width="30" />Pescados</li>
                        <li onclick="showTab(event,'mariscos')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/dinner.webp')}}" alt="drinks menu" height="30" width="30" />Mariscos</li>
                        <li onclick="showTab(event,'ternera')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/drinks.webp')}}" alt="drinks menu" height="30" width="30" />Ternera</li>
                        <li onclick="showTab(event,'pollo')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/breakfst.webp')}}" alt="drinks menu" height="30" width="30" />Pollo</li>
                        <li onclick="showTab(event,'pato')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/lunch.webp')}}" alt="drinks menu" height="30" width="30" />Pato</li>
                        <li onclick="showTab(event,'plato-esp')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/dinner.webp')}}" alt="drinks menu" height="30" width="30" />Platos Especiales</li>
                        <li onclick="showTab(event,'plato-plancha')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/drinks.webp')}}" alt="drinks menu" height="30" width="30" />Platos a la plancha</li>
                    </ul>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <h3 id="entrantes" class="tab-content" style="font-family: 'Playfair Display', sans-serif">ENTRANTES</h3>
                    <h3 id="sopas" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">SOPAS</h3>
                    <h3 id="fideos" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">ARROZ & TALLARINES & FIDEOS</h3>
                    <h3 id="huevos" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">HUEVOS & VERDURAS</h3>
                    <h3 id="cerdo" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">CERDO</h3>
                    <h3 id="pescado" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">PESCADOS</h3>
                    <h3 id="mariscos" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">MARISCOS</h3>
                    <h3 id="ternera" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">TERNERA</h3>
                    <h3 id="pollo" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">POLLO</h3>
                    <h3 id="pato" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">PATO</h3>
                    <h3 id="plato-esp" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">PLATO ESPECIALES</h3>
                    <h3 id="plato-plancha" class="tab-content d-none" style="font-family: 'Playfair Display', sans-serif">PLATO A LA PLANCHA</h3>
                </div>
            </div>
        </div>
    </div>

    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== WOW js ======-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>

    <!--====== Aos js ======-->
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function showTab(event,option){
            let i, tabContent, tabLinks, tabOption;
            tabContent = document.getElementsByClassName('tab-content');
            tabLinks = document.getElementsByClassName('side-menu-item');
            tabOption = document.getElementById(option);
            for(i = 0; i < tabContent.length; i++){
                tabContent[i].style.display = 'none';
                tabLinks[i].className = tabLinks[i].className.replace('active-menu',"");
            }
            tabOption.className = tabOption.className.replace('d-none','');
            tabOption.style.display = 'block';
            event.target.className += " active-menu";
        }
    </script>
    </body>
</html>
