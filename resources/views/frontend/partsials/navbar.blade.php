    <!-- header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="{{ route('home') }}" class="logo"><img src="{{ asset('frontend/images/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">PriceList</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cycle.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endauth
                    @endif
                </ul>
            </div>
            <div id="main">
                <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img
                        src="{{ asset('frontend/images/toggle-icon.png') }}" style="height: 30px;"></span>
            </div>
        </nav>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="{{ asset('frontend/images/pngwing.com.png') }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Car</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Rent Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="{{ asset('frontend/images/pngwing.com.png') }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Car</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Rent Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="{{ asset('frontend/images/pngwing.com.png') }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">New Model Car</h1>
                                    <p class="banner_text">It is a long established fact that a reader will be
                                        distracted by the readable content </p>
                                    <div class="contact_bt"><a href="contact.html">Rent Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
