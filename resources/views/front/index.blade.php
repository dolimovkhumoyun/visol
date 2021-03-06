<!DOCTYPE html>
<html>

<head>
    <!--Some important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewpoint" content="width=device-width, initial-scale = 1">

    <!-- Title and icon -->
    <title>Visol | Wedding House</title>

    <link rel="shortcut icon" href="/resources1/icon.jfif">

    <!-- Font awesome -->
    <link rel="stylesheet" href="/css3/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css3/bootstrap/css/bootstrap.css">


    <!-- Responsive Tabs -->
    <link rel="stylesheet" href="/css3/responsive-tabs/responsive-tabs.css">


    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css3/style.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65px">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Navbar -->
    <header>
        <!-- Top menu -->
        <nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="/resources1/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item scroll-link">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.reserve') }}">Reserve Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user-o fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Top content -->
    <section id="home">
        <div class="top-content">
            <div class="row no-gutters">
                <div class="col">
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/resources1/slider/main.jpg" class="d-block w-100" alt="img1">
                                <div class="carousel-caption">
                                    <!-- Home Content -->
                                    <div id="home-content">

                                        <div id="home-content-inner" class="text-center">

                                            <div id="home-heading">
                                                <h1>The Best Place</h1>
                                            </div>

                                            <div id="home-text">
                                                <h3>to make your dream come true</h3>
                                            </div>

                                            <div id="home-image">
                                                <img src="/resources1/slider/figure.svg">
                                            </div>

                                            <div id="home-btn">
                                                <a class="btn btn-general btn-home" href="#about" title="Start Now" role="button">Start Now</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="/resources1/slider/main_2.jpg" class="d-block w-100" alt="img2">

                                <div class="carousel-caption">
                                    <!-- Home Content -->
                                    <div id="home-content">

                                        <div id="home-content-inner" class="text-center">

                                            <div id="home-heading">
                                                <h1 id="">The Best Place</h1>
                                            </div>

                                            <div id="home-text">
                                                <h3>to make your dream come true</h3>
                                            </div>

                                            <div id="home-image">
                                                <img src="/resources1/slider/figure.svg">
                                            </div>

                                            <div id="home-btn">
                                                <a class="btn btn-general btn-home" href="#about" title="Start Now" role="button">Start Now</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="carousel-item">
                                <img src="/resources1/slider/main_3.jpg" class="d-block w-100" alt="img3">
                                <div class="carousel-caption">

                                    <!-- Home Content -->
                                    <div id="home-content">

                                        <div id="home-content-inner" class="text-center">

                                            <div id="home-heading">
                                                <h1 id="">The Best Place</h1>
                                            </div>

                                            <div id="home-text">
                                                <h3>to make your dream come true</h3>
                                            </div>

                                            <div id="home-image">
                                                <img src="/resources1/slider/figure.svg">
                                            </div>

                                            <div id="home-btn">
                                                <a class="btn btn-general btn-home" href="#about" title="Start Now" role="button">Start Now</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img id="pattern" src="/resources1/slider/pattern.svg">

    <!-- Services -->
    <section id="services">
        <div class="content-box-md">
            <div class="container">

                <div class="service-heading">
                    <h3>Services we provide</h3>
                    <img src="/resources1/services/logo.svg">
                </div>

                <div class="row" id="service-item">

                    <!-- Left Side -->
                    <div class="col-md-4">
                        <img src="/resources1/services/1.jpg">
                        <h4>Wedding Planning</h4>
                        <span class="span"></span>
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>

                    <!-- Center Side -->
                    <div class="col-md-4">
                        <img src="/resources1/services/2.jpg">
                        <h4>Wedding Decoration</h4>
                        <span class="span"></span>
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-4">
                        <img src="/resources1/services/3.jpg">
                        <h4>Catering</h4>
                        <span class="span"></span>
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About --->
    <section id="about">
        <div class="content-box-md">
            <!-- About Heading -->
            <div class="about-heading">
                <h3>About Us</h3>
                <img src="/resources1/services/logo.svg">
            </div>
            <div class="row" id="about-content">
                <!-- Left Side -->
                <div class="col-md-6" id="about-content-left">
                    <img src="/resources1/about/4.jpg">
                </div>

                <!-- Right Side -->
                <div class="col-md-6" id="about-content-right">
                    <h4>Restaurant</h4>
                    <img src="/resources1/about/nike2.svg">
                    <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    <div id="home-btn">
                        <a class="btn btn-general blog-btn" href="#about" title="Start Now" role="button">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Our -->
    <section id="whyour">
        <div class="content-box-md">
            <div class="container">
                <div class="whyour-heading">
                    <h3>Why our restaurant</h3>
                    <img src="/resources1/about/why_our.svg">
                </div>
                <div class="row" id="whyour-content">

                    <!-- Left Side -->
                    <div class="col-md-6">
                        <img src="/resources1/about/5.jpg">
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6">
                        <h4>Extraordinary Design</h4>
                        <img id="line" src="/resources1/about/nike2.svg">
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>

                    <!-- Left Side -->
                    <div class="col-md-6">
                        <h4>Friendly Service</h4>
                        <img id="line" src="/resources1/about/nike1.svg">
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6">
                        <img id="second" src="/resources1/about/6.jpg">
                    </div>

                    <!-- Left Side -->
                    <div class="col-md-6">
                        <img src="/resources1/about/7.jpg">
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6">
                        <h4>Unique Taste</h4>
                        <img id="line" src="/resources1/about/nike2.svg">
                        <p>Today your wedding planing is our objeftive and we will try to do our best to make this house as exactly as you imagined, this task will be initial of our negotianiton and hope that in the future we will colobarate again to make you happuy because we believe that if we do somehting we love always is liked by our customers too</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="parallax">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery -->
    <section id="gallery">

        <!-- Gallery Heading -->
        <div class="gallery-heading">
            <h3>Gallery</h3>
            <img src="/resources1/services/logo.svg">
        </div>

        <div id="gallery-wrapper wrap">
            <div class="content-box-md">
                <div class="container nopadding">


                    <div class="row no-gutters">

                        <div class="col-md-3">

                            <!-- Gallery Item 01 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/9.jpg">
                                    <img src="/resources1/gallery/9.jpg" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 02 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/10.png">
                                    <img src="/resources1/gallery/10.png" class="img-responsive">
                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 03 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/11.png">
                                    <img src="/resources1/gallery/11.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 04 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/12.png">
                                    <img src="/resources1/gallery/12.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 05 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/13.png">
                                    <img src="/resources1/gallery/13.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 06 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/14.png">
                                    <img src="/resources1/gallery/14.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 07 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/15.png">
                                    <img src="/resources1/gallery/15.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 08 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/16.png">
                                    <img src="/resources1/gallery/16.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 09 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/17.png">
                                    <img src="/resources1/gallery/17.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 10 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/18.png">
                                    <img src="/resources1/gallery/18.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 11 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/19.png">
                                    <img src="/resources1/gallery/19.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <!-- Gallery Item 12 -->
                            <div class="gallery-item">
                                <a href="/resources1/gallery/20.png">
                                    <img src="/resources1/gallery/20.png" class="img-responsive">

                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-details text-center">

                                            <!-- Item Header -->
                                            <span></span>
                                            <img src="/resources1/gallery/zoom-in.svg">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section id="blog">
        <div class="content-box-md">
            <div class="container padding">

                <!-- Blog Heading -->
                <div class="blog-heading">
                    <h3>Blog</h3>
                    <img src="/resources1/services/logo.svg">
                </div>
                <div class="row blogger">
                    <div class="col-md-3">

                        <!-- Left Side -->
                        <div class="blog-item">
                            <a href="/resources1/blog/21.png">
                                <img src="/resources1/blog/21.png" class="img-responsive">
                                <div class="blog-item-overlay">
                                    <div class="blog-item-details text-center">
                                        <!-- Item Header -->
                                        <img src="/resources1/blog/link.svg">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <h5>17 April 2019</h5>
                        <h3>Secrets of Serving</h3>
                        <span class="span"></span>
                        <p>We are very glad of serving for your happiest day ever, just have a try and enjoy of every moment of this special day</p>
                        <div id="blog-btn">
                            <a class="btn btn-general blog-btn" href="#about" title="Start Now" role="button">More</a>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <!-- Middle -->
                        <div class="blog-item">
                            <a href="/resources1/blog/22.png">
                                <img src="/resources1/blog/22.png" class="img-responsive">
                                <div class="blog-item-overlay">
                                    <div class="blog-item-details text-center">
                                        <!-- Item Header -->
                                        <span></span>
                                        <img src="/resources1/blog/link.svg">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <h5>17 April 2019</h5>
                        <h3>Secrets of Serving</h3>
                        <span class="span"></span>
                        <p>We are very glad of serving for your happiest day ever, just have a try and enjoy of every moment of this special day</p>
                        <div id="blog-btn">
                            <a class="btn btn-general blog-btn" href="#about" title="Start Now" role="button">More</a>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <!-- Right Side -->
                        <div class="blog-item">
                            <a href="/resources1/blog/23.png">
                                <img src="/resources1/blog/23.png" class="img-responsive">
                                <div class="blog-item-overlay">
                                    <div class="blog-item-details text-center">
                                        <!-- Item Header -->
                                        <img src="/resources1/blog/link.svg">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <h5>17 April 2019</h5>
                        <h3>Secrets of Serving</h3>
                        <span class="span"></span>
                        <p>We are very glad of serving for your happiest day ever, just have a try and enjoy of every moment of this special day</p>
                        <div id="blog-btn">
                            <a class="btn btn-general blog-btn" href="#about" title="Start Now" role="button">More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rose Image -->
            <div id="rose-image">
                <img src="/resources1/blog/full.svg">
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="content-box-md">
            <!-- Contact Heading-->
            <div class="contact-heading">
                <h3>Contacts</h3>
                <img src="/resources1/services/logo.svg">
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11982.544540690993!2d69.33453!3d41.338525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3772abeffc72e7b8!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQmNC90YXQsA!5e0!3m2!1sru!2s!4v1556550319539!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
        <div id="info_table">
            <img src="/resources1/contact/Group%20328.png" alt="">
        </div>
        <div class="pic">
            <img src="/resources1/contact/pic.png" alt="">
        </div>
    </section>
    <div id="united">
        <img id="pattern" src="/resources1/Slider/pattern.svg">

        <div class="social">
            <ul class="social-list">
                <li><a href="https://facebook.com/Ashurov.Islombek"><i class="fa fa-send-o"></i></a></li>
                <li><a href="https://www.facebook.com/nusratillo.shavkatov"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCd-tWVKjAhb2xV_VxtNJafA?view_as=subscriber"><i class="fa fa-youtube-play"></i></a></li>
                <li><a href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="https://www.skype.com"><i class="fa fa-skype"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>

        <!-- Back to button -->
        <a href="#home" id="back-to-top" class="btn btn-sm btn-vignit btn-back-to-top smooth-scroll">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Footer -->
        <section class="text-center">
            <div class="footervisol">
                <ul>
                    <li><img src="/resources1/footer/footer_fl1.svg" alt=""></li>
                    <li class="visolsvg"><img src="/resources1/logo.png" alt=""></li>
                    <li><img src="/resources1/footer/footer_fl2.svg" alt=""></li>
                </ul>
            </div>

            <!-- Copyright -->

        </section>
    </div>
    <footer>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2019. All Rights Reserved By <span>Phoenix Team</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- JQuery -->
    <script src="javascript/jquery.js"></script>
    <!-- Custom JS -->
    <script src="javascript/script.js"></script>
    <!-- Carousel -->
    <script src="javascript/carousel/jquery-migrate-3.0.0.min.js"></script>
    <!-- Defaul Scroller -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="javascript/carousel/jquery.backstretch.min.js"></script>

</body>

</html>