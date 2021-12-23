<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">

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
        <!-- <link rel="stylesheet" href="{{asset('assets/css/default.css')}}"> -->

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    </head>
    <body>
    <div class="header-section">
        <x-navbar />
        <div class="header-text-section">
            <div class="header-text">
                <p class="enjoy">enjoy your healthy delicios meal</p>
                <h1 class="header-title py-2">Treat Yourself</h1>
                <p class="pt-2 pb-2 mx-sm-4 header-desc">Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <button class="header-btn btn btn-warning mt-sm-3">Explore Now</button>
            </div>
        </div>
    </div> <!-- HEADER SECTION ENDS HERE -->
    <div class="home-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <p class="selection-p">select your meal</p>
                    <h3 class="popular-foods pt-2 pb-3">Popular <span class="foods">Foods</span></h3>
                    <ul class="menu-side-list" id="menu-side-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'entrantes')" class="mb-3 side-menu-item active-menu"><img class="mr-4" src="{{asset('images/menu/breakfst.webp')}}" alt="breakfast menu" height="30" width="30" />Entrantes</li>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'sopas')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/lunch.webp')}}" alt="lunch menu" height="30" width="30" />Sopas</li>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'fideos')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/dinner.webp')}}" alt="dinner menu" height="30" width="30" />Arroz & Fideos</li>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'huevos')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/drinks.webp')}}" alt="drinks menu" height="30" width="30" />Huevos & Verduras</li>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'cerdo')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/breakfst.webp')}}" alt="drinks menu" height="30" width="30" />Cerdo</li>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <li onclick="showTab(event,'pescado')" class="mb-3 side-menu-item"><img class="mr-4" src="{{asset('images/menu/lunch.webp')}}" alt="drinks menu" height="30" width="30" />Pescados</li>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div id="entrantes" class="tab-content">
                        @include('partials.menu._entrantes')
                    </div>
                    <div id="sopas" class="tab-content d-none">
                        @include('partials.menu._sopas')
                    </div>
                    <div id="fideos" class="tab-content d-none">
                        @include('partials.menu._fideos')
                    </div>
                    <div id="huevos" class="tab-content d-none">
                        @include('partials.menu._huevos')
                    </div>
                    <div id="cerdo" class="tab-content d-none">

                    </div>
                    <div id="pescado" class="tab-content d-none">

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- HOME MENU ONE ENDS HERE -->

    <!-- HOME MENU TWO STARTS HERE -->
    <div class="home-menu">
        <div class="container">
            <!-- dessert section begins  -->
            <div class="row pb-5">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <p class="choose-dessert">Choose Desserts</p>
                    <h3 class="popular-dessert">Popular <span class="dessert">Desserts</span></h3>
                </div>
            </div>
            <!-- dessert header -->

            <div class="row"> <!-- dessert items -->
                <div class="col-lg-4 col-sm-6 mt-sm-3">
                    <div class="dessert-item p-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/desserts/first.webp')}}" alt="dessert pic" height="88" width="94" />
                            </div>
                            <div class="col-7">
                                <p class="dessert-name">Cherry Muffin</p>
                                <p class="dessert-price">$20</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-3">
                    <div class="dessert-item p-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/desserts/second.webp')}}" alt="dessert pic" height="88" width="94" />
                            </div>
                            <div class="col-7">
                                <p class="dessert-name">Rose Muffin</p>
                                <p class="dessert-price">$20</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-3">
                    <div class="dessert-item p-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/desserts/third.webp')}}" alt="dessert pic" height="88" width="94" />
                            </div>
                            <div class="col-7">
                                <p class="dessert-name">Choco Cake</p>
                                <p class="dessert-price">$20</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!--  dessert section ends here -->

        </div>
    </div> <!-- HOME MENU TWO ENDS HERE -->

    <!-- testimonials section begins -->
    <section class="testimonial-section">
        <div class="testimonial-opacity">
            <div class="container">
                <!-- TESTINOMIAL AREA STARTS -->
                <section class="mb-3">
                    <div class="row py-5">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                            <p class="testimonials-section">testimonials</p>
                            <h3 class="satis-customers">Satisfied <span class="customers">Customers</span></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="row mb-3" style="width: 50%">
                                <div class="col-lg-4 col-sm-12">
                                    <img class="user-review-pic mr-lg-2" src="{{asset('images/testimonials/first.webp')}}" alt="user pic"  height="100" width="100" />
                                </div>
                                <div class="col-lg-8 col-sm-12">
                                    <div class="user-info">
                                        <h4 class="reviewer-name pt-4 pb-2">John Doe</h4>
                                        <p class="reviewer-prof">Chef at Labrynth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex flex-row justify-content-center align-items-center">
                                    <p class="review-content user-testimonial-col">
                                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- TESTINOMIAL AREA ENDS -->
        </div>
        <!-- GALLERY AREA START -->
        <section class="gallery-section p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <p class="gallery-p">galleries</p>
                        <h3 class="py-3 gallery-h3">Photo <span class="gallery-span">Gallery</span></h3>
                        <p class="gallery-desc">
                            Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-6 mt-1">
                                <img class="gallery-image" src="{{asset('images/breakfast/first.jfif')}}" alt="gallery pic" />
                            </div>
                            <div class="col-6 mt-1">
                                <img class="gallery-image" src="{{asset('images/events/first.webp')}}" alt="gallery pic" height="143" width="255" />
                            </div>
                            <div class="col-6 mt-1">
                                <img class="gallery-image" src="{{asset('images/events/second.webp')}}" alt="gallery pic" height="143" width="255" />
                            </div>
                            <div class="col-6 mt-1">
                                <img class="gallery-image" src="{{asset('images/breakfast/second.jfif')}}" alt="gallery pic" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- GALLERY AREA ENDS -->

        <!-- BOOK TABLE AREA STARTS -->
        <section class="book-table-section">
            <div class="testimonial-opacity2 p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="book-table-wrapper d-flex flex-column justify-content-center align-items-center">
                                <p class="book-table-p">book a table</p>
                                <h3 class="book-table-h3 py-3">Book A Table Now</h3>
                                <p class="book-table-desc pb-3">
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </p>
                                <button class="book-table-button">book a table</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <! --BOOK TABLE AREA ENDS -->

        <!-- FOOTER AREA STARTS -->
        <section class="footer-section">

        </section>
    </section>















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

        function showTab2(event,option){
            let i, tabContent, tabLinks, tabOption;
            tabContent = document.getElementsByClassName('tab-content2');
            tabLinks = document.getElementsByClassName('side-menu-item2');
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
