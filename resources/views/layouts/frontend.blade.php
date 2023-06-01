<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
        

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Travel Website - ypcode</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <div class ="ya">
            <div class ="row g-3 align-items-center mt-3">
                <div class ="col-auto">
                  <form action="/wisata" method="GET">
                  <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelp"> <button action = "/wisata" type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
            </div>
            </div>
            <nav class="nav container">
                <div class ="logo">
                <!--<a href=""><img src="images/travel1.png" class="putih" /></a> </div> -->

                <a href="{{ route('homepage') }}" class="nav__logo"> <img src="{{ asset('frontend/assets/img/travel1.png' ) }}" alt ="Logo Website"/></a>
                </div>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Package Travel</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('Peta') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Peta</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href='/ulasan/{id}' class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Ulasan</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('galeri') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Galery</span>
                            </a>
                        </li>
                    </ul>
                </div>
                

                <!-- theme -->
            </nav>
            
        </header>
        

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">  
                        Ayo Melakukan  Perjalanan
                    </a>
                    <p class="footer__description">
                        Tujuan kami adalah untuk menampilkan <br />
                        tempat terbaik yang dapat anda kunjungi di Bali
                    </p>
                </div>

             
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="https://web.facebook.com/ashter.tambunan" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="https://instagram.com/samprulll_?igshid=MzNlNGNkZWQ4Mg==" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                
                <div class="footer__privacy">
                    <h2> Selamat Datang di Website Kami</h2><br>
                    <h3> Carilah tempat yang ingin Anda kunjungi!!! </h3>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
