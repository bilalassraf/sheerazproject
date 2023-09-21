<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt=""></a></div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">

                                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                    <li>
                                        <span class="dropdown" id="dropdownMenuButton">
                                            <a href="{{ route('flights') }}">
                                                Flights<a class=" dropdown-toggle p-0" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"></a>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('city_india') }}"> <i
                                                        class="fas fa-map-marker-alt"></i> India </a>
                                                <a class="dropdown-item" href="{{ route('city_thailand') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Thailand </a>
                                                <a class="dropdown-item" href="{{ route('city_phillippines') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Philippines</a>
                                                <a class="dropdown-item" href="{{ route('city_uae') }}"><i
                                                        class="fas fa-map-marker-alt"></i> UAE</a>
                                                <a class="dropdown-item" href="{{ route('city_malaysia') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Malaysia</a>
                                                <a class="dropdown-item" href="{{ route('city_paksitan') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Pakistan</a>
                                                <a class="dropdown-item" href="{{ route('city_ghana') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Ghana</a>
                                                <a class="dropdown-item" href="{{ route('city_nigeria') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Nigeria</a>
                                                <a class="dropdown-item" href="{{ route('city_zimbabwe') }}"><i
                                                        class="fas fa-map-marker-alt"></i> Zimbabwe</a>
                                                <a class="dropdown-item" href="{{ route('city_southafrica') }}"><i
                                                        class="fas fa-map-marker-alt"></i> South Africa</a>
                                            </div>
                                        </span>
                                    </li>
                                    <li><a href="{{ route('umrah') }}">Umrah</a></li>
                                    <li><a href="{{ route('callBack') }}">Call Me Back</a></li>
                                    <li><a href="{{ route('quote') }}">Beat My Quote</a></li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                    <li><a href="tel:+92 300 123456789" class="call-action"><i
                                                class="fa-solid fa-phone"></i> 020 3545 0985</a></li>
                                    <li>
                                        <div class="mt-3">
                                            <a href="{{ route('login') }}" class="btn btn-search">Login<i
                                                    class=""></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->

                    <div class="mobile-menu">

                        <nav class="menu-box">

                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>



                            <div class="row h-100">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-5">
                                    <ul class="navigation h-100">
                                        <li class="dropdown">
                                            <span class="dropdown" id="dropdownMenuButton">
                                                <a>
                                                    Flights<a class=" dropdown-toggle p-0" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"></a>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="flight.html"><i
                                                            class="fas fa-plane fa-rotate-270"></i><strong> Cheap
                                                            Flights</strong> </a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">India</span> </a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Thailand </a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Philippines</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">UAE</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Malaysia</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Pakistan</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Ghana</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Nigeria</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">Zimbabwe</a>
                                                    <a class="dropdown-item" href="city-country.html"><i
                                                            class="fas fa-map-marker-alt"></i> <span
                                                            class="pl-2">South Africa</a>
                                                </div>
                                            </span>
                                        </li>

                                        <li><a href="umrah.html">Umrah</a></li>

                                        <li><a href="call-me-back.html">Call Me Back</a></li>

                                        <li><a href="beat-my-quote.html">Beat My Quote</a></li>

                                        <li><a href="contact.html">Contact Us</a></li>

                                        <li><a href="tel:0736 0968 237" class="">Call Now </a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-6 text-center">
                                    <div class="nav-logo text-center"><a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend-assets/img/logo/logo_02.png') }}"
                                                alt="" title=""></a>
                                    </div>
                                    <h2 class="title">Subscribe Us</h2>
                                    <div class="row">
                                        <div class="col-12 mt-3"><input class="w-100 p-2" type="email"
                                                placeholder="Enter your Name"></div>
                                        <div class="col-12 mt-3"><input class="w-100 p-2" type="email"
                                                placeholder="Enter your Email"></div>
                                        <div class="col-12 mt-3"><button class="w-100"
                                                type="submit">Subscribe</button></div>
                                    </div>
                                </div>
                            </div>

                            <div class="social-links">

                                <ul class="clearfix">


                                    <li><a target="_blank" href="https://twitter.com/travelcartuk"><span
                                                class="fab fa-twitter"></span></a></li>

                                    <li><a target="_blank" href="https://www.facebook.com/travelcartuk.co.uk"><span
                                                class="fab fa-facebook-f"></span></a></li>

                                    <li><a target="_blank" href="https://www.pinterest.co.uk/travelcartuk/"><span
                                                class="fab fa-pinterest-p"></span></a></li>

                                    <li><a target="_blank" href="https://www.instagram.com/travelcartuk/"><span
                                                class="fab fa-instagram"></span></a></li>

                                </ul>

                            </div>


                        </nav>

                    </div>

                    <div class="menu-backdrop"></div>

                    <!-- End Mobile Menu -->

                </div>

            </div>

        </div>

    </div>

</header>

<!-- header-area-end -->
