<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('web/images/favicon.png')}}" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('web/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('web/css/style.scss')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('web/css/responsive.css')}}" rel="stylesheet" />

</head>
<body class="sub_page">
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                            </ul>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/out">LogOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                     <g>
                                         <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                     </g>
                                 </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                              </svg>
                            </a>
                        </li>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>
<!-- inner page section -->
<section class="inner_page_head">
    <div class="container_fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <h3>Hi  {{session('login')}}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end inner page section -->
<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Men's Shirt
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p1.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $75
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p2.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $80
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p3.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $68
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p4.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $70
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p5.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $75
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p6.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $58
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p7.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $80
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p8.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p9.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p10.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p11.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('web/images/p12.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
</section>
<!-- end product section -->
<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Reach at..
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                        demo@gmail.com
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="index.html" class="footer-logo">
                        Famms
                    </a>
                    <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                    </p>
                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <div class="col-lg-7 mx-auto px-0">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a><br>

                    Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- jQery -->
<script src="{{asset('web/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('web/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('web/js/bootstrap.js')}}"></script>
<!-- custom js -->
<script src="{{asset('web/js/custom.js')}}"></script>
</body>
</html>
