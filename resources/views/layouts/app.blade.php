<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Include CSS Links -->
        @include('partials.styles')

        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="zelda-responsive-nav">
                <div class="container">
                    <div class="zelda-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="assets/img/logo-new.png" alt="logo">
                                <!-- <b style="color:white;font-size: 20px;">Chandrani Music</b> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zelda-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <!-- <img src="assets/img/logo.png" alt="logo"> -->
                            <b style="color:white;font-size: 38px;">Chandrani Music</b>
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{ route('seasonal') }}" class="nav-link">Seasonal</a></li>
                                <li class="nav-item"><a href="{{ route('entertainment') }}" class="nav-link">Entertainment</a></li>
                                <li class="nav-item"><a href="{{ route('traveller') }}" class="nav-link">Traveller</a></li>
                                <li class="nav-item"><a href="{{ route('music') }}" class="nav-link">Music</a></li>
                                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                            </ul>

                            <!-- 3 bar for laptop view -->
                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="flaticon-null-2" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class='bx bx-x'></i></button>

                    <div class="modal-body">
                        <div class="logo">
                            <a href="index.html" class="d-inline-block">
                                <!-- <img src="{{ asset('assets/img/logo.png') }}" alt="image"> -->
                                <b style="color:white;font-size: 38px;">Chandrani Music</b>
                            </a>
                        </div>

                        <div class="instagram-list">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member1.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member2.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member3.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member4.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member5.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="box">
                                        <img src="{{ asset('assets/img/team-member6.jpg') }}" alt="image">
                                        <i class='bx bxl-instagram'></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-contact-info">
                            <h2>
                                <a href="tel:+8802419268615">+91 7978250660</a>
                                <span>OR</span>
                                <a href=""><span class="__cf_email__" data-cfemail="">chandranimusic784@gmail.com</span></a>
                            </h2>
                        </div>

                        <ul class="social-list">
                            <li><span>Follow Us On:</span></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        <!-- Search Overlay -->
        <!-- <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class="flaticon-search-1"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Search Overlay -->

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Common Footer -->
        <!-- Start Social Area -->
        <section class="social-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Official</span>
                    <h2>Stay Conected</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-facebook'></i>
                                Facebook
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape3.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-twitter'></i>
                                Twitter
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape4.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-youtube'></i>
                                YouTube
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape5.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-instagram'></i>
                                Instagram
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape6.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Social Area -->
        <!-- Start Footer Area -->  
        <div class="copyright-area">
            <p style="text-align:center; margin-bottom:50px;">&copy; {{ date('Y') }} Chandrani Music. All Rights Reserved. Managed By <a href="#" target="_blank"> Team</a></p>
            <div class="container">
                <!-- <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-5">
                        <p>&copy; {{ date('Y') }} Chandrani Music. All Rights Reserved. Managed By <a href="#" target="_blank"> Team</a></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="lang-switcher">
                            <span>Select your language</span>
                            <select>
                                <option>English</option>
                                <option>ODIA</option>
                            </select>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- <div class="zelda-cursor"></div> -->
        <!-- <div class="zelda-curs     or2"></div> -->

        <!-- Include JS Links -->
        @include('partials.js')
    </body>
</html>