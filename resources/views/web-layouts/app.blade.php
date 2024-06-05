<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="/">
    <link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script src="../../stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <!-- css****** -->
    <link href="css/custom_style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href="https://db.onlinewebfonts.com/c/02d8f1743ede250c7c9865f1574d7cc6?family=Circular+Book" rel="stylesheet">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&amp;display=swap"
        rel="stylesheet">
    <link href="http://db.onlinewebfonts.com/c/b46bb1fc76216f5cd90457d0451dbee4?family=Futura+Book" rel="stylesheet"
        type="text/css" />
    <style>
        body {}

        p {
            font-family: "Futura Book" !important;
            font-size: 1.25rem !important;

        }

        p {
            color: #495057;
        }

        h2 {
            font-weight: 600;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Futura Book" !important;
        }

        .track .content {
            margin: 64px;
            padding: 0;
            font-size: 144px;
            font-weight: 100;
            font-family: system-ui;
            /*color: #b2893d;*/
            color: #e2b855;
        }

        .marquee {
            position: relative;
            width: 100vw;
            max-width: 100%;
            height: 235px;
            overflow-x: hidden;
            background: #efeae2;
        }

        .track {
            position: absolute;
            white-space: nowrap;
            will-change: transform;
            animation: marquee 30s linear infinite;
            padding-top: 35px;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .client-logo-bg {
            background-color: #000;
            padding: 40px 0 50px 0;
            position: relative;
            z-index: 0;
        }

        p.desination_text {
            font-size: 1.375rem;
            padding-bottom: 1.875rem;
            border-bottom: 1px solid #dedede;
            color: #b2893d;
            margin-left: 3px;
        }

        .trips-slider {
            margin-bottom: 0px;
            background: #e0e6e4;
            padding-bottom: 40px;
        }

        .trips-text {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
        }

        .text-h {
            font-family: 'Kadwa', serif;
            font-size: 3.5em;
            text-align: center;
            margin-bottom: 48px;
        }

        .testi_desination h5 {
            font-size: 20px;
            padding-top: 48px;
            padding-bottom: 48px;
        }

        .testi_main_box h4 {
            font-size: 30px;
            line-height: 38px;
            margin-top: 54px;
            margin-bottom: 54px;
        }

        .trips-text p {
            padding-top: 20px;
            line-height: 30px;
            /*color:#A9A9A9 !important;*/
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
        }

        .why-choose p {
            font-size: 16px;
            margin-bottom: 35px;
        }

        p {
            /*font-family: 'Kadwa', serif;*/
            /*font-size: 16px;*/
            /*font-family: 'Candara', serif;*/
            /*color:#A9A9A9;*/
        }

        .trips-text1 h1 {
            font-family: 'Kadwa', serif;
            font-size: 3.5em;
        }

        .trips-text1 span {
            font-size: 3.3rem;
            padding-top: 20px;
            display: inline-block;
            padding-bottom: 43px;
        }

        .trips-text1 h3 {
            font-size: 1rem;
        }

        .trips-text h1 {
            font-size: 3.5em;
            /*font-family:arial;*/
            font-family: arial;
            margin-bottom: 10px;
        }

        .text-effect {
            font-size: 45px;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
            font-size: 15px;
        }

        .menu-bg {
            width: 100%;
            background: rgba(0, 0, 0, 0);
            background-size: cover;
            position: fixed;
            z-index: 1;
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-lg,
        .navbar>.container-md,
        .navbar>.container-sm,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            /* justify-content: space-between; */
            justify-content: flex-end;
        }

        .pakage-text {
            background: #fff;
            padding: 20px 30px;
            margin-left: 50px;
            margin-right: 50px;
            position: relative;
            bottom: 50px;
            margin-top: -50px;
            z-index: 1;
            font-family: 'Kadwa', serif;
        }

        .text-video {
            position: absolute;
            top: 35%;
            text-align: center;
            left: 15%;
            right: 15%;
        }

        .logo-bg {
            width: 100%;
            padding: 20px 0 20px 0;
            background-size: cover;
            background: white;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        #tabs-nav li {
            text-align: center;
        }

        p.desination_text {
            text-align: center;
        }

        .text-effect {
            color: #333;
            font-family: 'Kadwa', serif;
            font-size: 60px;
            /*color: #198754;*/
            color: #a5854b;
            margin-bottom: 30px;
        }

        .trips-text1 {
            width: 92%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            text-align: center;
            padding-top: 60px;
        }

        .marque marquee {
            height: 41vh;
            font-size: 20vh;
            padding-top: 94px;
            font-weight: 100;
            font-family: system-ui;
            color: #b2893d;
        }

        .navbar {
            position: relative;
            display: flex !important;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            /*padding-top: .5rem;*/
            /*padding-bottom: .5rem;*/
            /*height:55px;*/
            padding: 0px;
        }

        .left {
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
            width: 17%;
        }

        .enquri {
            text-decoration: none;
            /* border: 1px solid; */
            background: #000;
            border-radius: 5px;
            /*background-color:#091a54;*/
            cursor: pointer;
            color: #fff;
            padding: 7px 38px 7px 38px;
            display: inline-block;
        }

        .contact {
            height: 50px;
            width: 100%;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
            font-size: 16px;
            font-weight: 500;
            margin-left: 10px;
        }

        .contact:hover {
            text-decoration: none;
            border: 1px solid #5f698c;
            background: #fff;
            color: #5f698c;
            /*border-radius: 10px;*/
            cursor: pointer;

        }

        .enquri:hover {
            text-decoration: none;
            border: 1px solid #5f698c;
            padding: 7px 38px 7px 38px;
            background: #fff;
            color: #5f698c;
            border-radius: 10px;
        }

        .cont-num span {
            padding-left: 10px;
        }

        .cont-num {
            font-size: 17px;
            font-weight: 500;
            padding-left: 20px;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            font-weight: 500;
        }

        .cta a {
            text-decoration: none;
            /*border: 1px solid;*/
            padding: 7px 55px 7px 55px;
            /*padding: 10px 60px;*/
            background: #000;
            color: white;
            border-radius: 5px;
        }

        .cta:hover a {
            text-decoration: none;
            border: 1px solid #5f698c;
            padding: 10px 60px;
            background: #fff;
            color: #5f698c;
            border-radius: 10px;
        }

        .video img {
            width: 100%;
            height: 100vh;
            /*object-fit: contain;*/
        }

        .video {
            position: relative;
        }

        .trips-bg {
            padding: 10px 0 60px 0;
            /*background-image: url(https://indiaforworld.com/design2/images/Backpanel.jpg);*/
            /*background-size:contain;*/
            /*background-repeat:no-repeat;*/
            /*background-clip:content-box;*/
        }

        .logo {
            width: 27%;
        }

        .tog-btn {
            display: inline-block;
            font-size: 40px;
            cursor: pointer;
            position: relative;
        }

        .mainu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            visibility: hidden;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mainu .inner-mainu {
            background: black;
            /*background:rgba (91,91,91, 0.85);*/
            border-radius: 50%;
            width: 200vw;
            height: 200vw;
            display: flex;
            flex: none;
            align-items: center;
            justify-content: center;
            transform: scale(0);
            transition: all 0.4s ease;
        }

        .tog-btn:hover .mainu {
            visibility: visible;
        }

        .tog-btn:hover .mainu .inner-mainu {
            transform: scale(1);
            transition-duration: 0.75s;
            visibility: visible;

        }

        .mainu .inner-mainu .main-menu>ul>li {
            list-style: none;
            color: #fff;
            font-size: 1.5rem;
            padding: 0.8rem;
        }


        /*     .mainu {*/
        /*    position: absolute;*/
        /*    width: 24.5vw;*/
        /*    height: auto;*/
        /*    background: black;*/
        /*    z-index: 1000;*/
        /*    height: auto;*/
        /*    visibility: hidden;*/
        /*    top: 50px;*/
        /*    right: -195px;*/
        /*}*/
        /*      .tog-btn:hover .mainu{*/
        /*          visibility: visible;*/
        /*      }*/
        .list-mainu {
            padding: 0px;
            text-align: left;
            text-align: center;
        }

        .list-mainu .list {
            list-style: none;
            padding: 5px;
        }

        .list-mainu .list a {
            font-size: 18px;
            text-align: left;
            color: #fff;
            text-decoration: none;
        }

        /*      .inner-mainu{*/
        /*          width:100%;*/
        /*          padding:10px;*/
        /*      }*/
        .list-mainu .list a:hover {
            color: #FFA8B0;
            transition-delay: 0ms;
            text-decoration: underline;
        }

        .titleheading {
            color: #000;
            font-size: 18px;
            font-size: 1.125rem;
            font-weight: 700;
            letter-spacing: 1.8px;
            line-height: 1.28;
            margin-bottom: 6.375px;

        }

        p {
            /*color: #52575c!important;*/
            /*color:#A9A9A9!important;*/
            font-size: 1.15rem !important;
        }

        .btn_know {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .btn_more:hover {
            height: 35px;
            padding: 5px 15px;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
            border: 1px solid black;

        }

        .btn_more {
            height: 35px;
            padding: 5px 15px;
            text-align: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            color: black;
            border: 1px solid black;

        }

        /*.btn_more:hover{  text-decoration: none;*/
        /*  border: 1px solid #5f698c;*/
        /*  background: #fff;*/
        /*  color: #5f698c;*/
        /*border-radius: 10px;*/
        /*  cursor:pointer;}*/


        .FrBrighShw {
            /*width: 40px;*/
            /*height: 38px;*/
            /*cursor: pointer;*/
            width: 40px;
            height: 50px;
            cursor: pointer;
            padding-top: 10px;
        }

        .FrBrighShw .Fnb {
            width: 100%;
            height: 2px;
            display: block;
            cursor: pointer;
        }

        .FrBrighShw .Fnb:nth-child(2) {
            width: 70%;
            margin: 7px 0px;
        }

        .FrBrighShw .Fnb:nth-child(3) {
            width: 50%;
        }

        .FrBrighShw .Fnb:nth-child(4) {
            margin: 7px 0px 0px 0px;
            width: 25%;
        }

        /*social media icon css*/

        .social {
            display: flex;
            justify-content: left;
            text-align: center;
            align-items: center;
            margin-top: 10px;
        }

        .social i {
            color: #000;
            width: 30px;
            height: 30px;
            background-color: transparent;
            font-size: 16px;
            text-align: center;
            margin-right: 5px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /*End social media icon css*/

        @media only screen and (max-width:1013px) {
            .contact {
                display: none;
            }

            .inner_img_text1 {
                position: relative !important;
                padding: 30px 30px 30px 30px !important;
            }

            p {
                1rem;
            }

            .text-video {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

            .trips-text {
                width: 100% !important;
            }

            .home-banner span {
                font-size: 1.5rem !important;

            }

            .left {
                display: flex;
                text-align: center;
                align-items: center;
                width: 9%;
                justify-content: space-evenly;
            }

            .carousel {
                width: 100% !important;
            }

            .texti-section .texti-inner {
                padding: 12px 13px !important;
            }

            .desti-img {
                padding-left: 0px !important;
            }
        }

        .header-logo {
            /*height:32px;*/
            /*width:226px;*/
        }

        .header-logo img {
            width: 200px;
            height: 100%;
            object-fit: cover;
        }

        .home-banner span {
            font-size: 3rem;
            font-weight: 400;
            letter-spacing: 2px;
            line-height: 1.05;
            color: white;
            font-weight: 600;
            line-height: 1.5;
            "

        }

        .nameform-footer {
            background: transparent !important;
            border: 0;
            border-bottom: 1px solid rgb(255 255 255 / 50%) !important;
            border-radius: 0 !important;
            padding: 13px 13px 13px 0 !important;
            color: #FFFFFF;
            outline: #000000 !important;
            font-size: 15px !important;
            line-height: 16px;
            letter-spacing: .5px;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="menu-bg" id="navbar">
            <div class="container-fluid" style="padding-right: 0;">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="logo" id="logo1">
                                <a href="index.html" class="logo">
                                    <div class="header-logo">
                                        <img src="images/logo/logo_far_and_beyond.png" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="logo" id="logo2" style="display:none;">
                                <a href="index.html" class="logo">
                                    <div class="header-logo">
                                        <img src="images/logo/logo_far_and_beyond_black.png" alt="logo">
                                    </div>
                                </a>
                            </div>
                            <div class="left">
                                <div class="tog-btn">
                                    <div class="FrBrighShw" id="logo3">
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                        <span class="Fnb" style="background-color: #fff;"></span>
                                    </div>
                                    <div class="FrBrighShw" id="logo4" style="display:none;">
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                        <span class="Fnb" style="background-color: #000;"></span>
                                    </div>
                                    <div class="mainu">
                                        <div class="inner-mainu">
                                            <div class="main-menu">
                                                <ul class="list-mainu">
                                                    <li class="list"><a href="/">HOME</a></li>
                                                    <li class="list"><a href="about-us">ABOUT US</a></li>
                                                    <li class="list"><a href="our-destination">DESTINATIONS</a></li>
                                                    <li class="list"> <a href="our-servic">SERVICES</a></li>
                                                    <li class="list"><a href="littile-inspiration">INSPIRING
                                                            EXPERIENCES</a></li>
                                                    <li class="list"><a href="responsible-travel">RESPONSIBLE
                                                            TRAVEL</a></li>
                                                    <li class="list"> <a href="about-us#why-us">WHY US</a></li>
                                                    <li class="list"><a href="about-us#our-team">MEET OUR TEAM</a>
                                                    </li>
                                                    <!--<li class="list"> <a href="blogs.html">BLOGS</a></li>-->
                                                    <li class="list"> <a href="contact-us">CONTACT</a></li>
                                                    <li class="list"> <a href=""
                                                            style="color:red;text-decoration:underline;">CLOSE</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact" onclick="location.href='contact-us';">Contact Us</div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>





    @yield('page-content')



    <style>
        /*.carousel-inner {*/
        /*    position: relative;*/
        /*    width: 100%;*/
        /*    overflow: hidden;*/
        /*    background-image: url(https://indiaforworld.com/design2/images/home/testi.jpg);*/
        /*}*/
        h2 {
            text-align: center;
            position: relative;
            margin: 50px 0 30px;
        }

        /*h2::after {*/
        /*  content: "";*/
        /*  width: 100px;*/
        /*  position: absolute;*/
        /*  margin: 0 auto;*/
        /*  height: 3px;*/
        /*  background: #e6d1cc;*/
        /*  left: 0;*/
        /*  right: 0;*/
        /*  bottom: -10px;*/
        /*}*/

        .carousel {
            width: 850px;
            margin: 0 auto;
            padding-bottom: 85px;
        }

        .carousel .carousel-item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 340px;
        }

        .carousel .carousel-item a {
            color: #eb7245;
        }

        .carousel .img-box {
            width: 145px;
            height: 145px;
            margin: 0 auto;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 20px 0 10px;
        }

        .carousel .overview {
            text-align: center;
            padding-bottom: 5px;
        }

        .carousel .overview b {
            color: #333;
            font-size: 15px;
            text-transform: uppercase;
            display: block;
            padding-bottom: 5px;
        }

        .carousel .star-rating i {
            font-size: 18px;
            color: #ffdc12;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #999;
            text-shadow: none;
            top: 295px;
            z-index: -1 ;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 20px;
            margin-right: 2px;
        }

        /*.carousel-control-prev {*/
        /*  left: auto;*/
        /*  right: 40px;*/
        /*}*/
        .carousel-control-prev {
            left: auto;
            right: 22rem;
        }

        .carousel-control-next {
            left: auto;
            left: 22rem;
        }

        .carousel-control-next i {
            margin-right: -2px;
        }

        .carousel .carousel-indicators {
            bottom: 15px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 11px;
            height: 11px;
            margin: 1px 5px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: none;
        }

        .carousel-indicators li.active {
            background: #888;
        }
    </style>
    <!--End our patener-->



    <!--contact-us-->
    <section class="contact" style="display:none;">
        <img src="slider/banner-4.jpg" alt="" style="width: 100%;">
        <div class="form">
            <div class="inner-f">
                <p>CONTACT US</p>
                <h3
                    style=" font-family: 'Kadwa', serif;
        font-size: 3.5em; line-height: 52px;
    letter-spacing: -2.5px;margin-bottom: 40px;">
                    Have questions? <br> Get in touch! </h3>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Last Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Email">
                    </div>
                    <div class="col-sm-6">
                        <input type="Text" id="pwd" placeholder="Country">
                    </div>
                </div>
                <div class="chek cheack" style="padding-left: 20px;">
                    <input class="form-check-input" type="checkbox" id="" name="option1" value="something"
                        checked>
                    <span>I agree to the Privacy Policy.</span>
                </div>
                <button class="btn btn-1 ">Get in Touch </button>
            </div>
        </div>
    </section>
    <!--contact us end-->
    <!--news latter -->

    <style>
        .cheack input {
            margin-left: -20px;
        }

        .check input {
            margin-top: -35px;
        }

        .check {
            width: 70%;
            font-size: 14px;
            color: white;
            margin-top: 20px;
        }

        .btn-2:hover a {
            color: black;
            background: white;
        }

        .btn-2 {
            padding: 12px 25px !important;
            border: 1px solid rgb(255 255 255 / 50%);
            color: white !important;
            font-size: 13px !important;
            line-height: 14px;
            letter-spacing: 1px;
            position: relative;
            color: white;
            z-index: 0;
            background: black;
        }

        .form-inline .form-group {
            width: 33%;
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center;
            justify-content: space-between;
        }

        .form-inline input[type=email] {
            background: transparent;
            border: 0;
            border-bottom: 1px solid rgb(255 255 255 / 50%);
            border-radius: 0;
            padding: 13px 13px 13px 0 !important;
            color: #FFFFFF;
            outline: #000000;
            font-size: 15px !important;
            line-height: 16px;
            letter-spacing: .5px;
            width: 100%;
        }

        .news-cont {
            color: white;
            font-family: "Portrait", Sans-serif;
            font-size: 21px;
            font-weight: 400;
            line-height: 35px;
        }

        .news-latter {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 64px 30px 62px 30px;
            background: #000000;
        }

        .group-aff {
            text-align: center;
            padding-bottom: 20px;
            color: white;
        }

        .owl-carousel .owl-stage {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <!--End news latter-->
    <div class="client-logo-bg">
        <div class="group-aff">
            <h3 style="font-weight:600;">
                <span>Group Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="images/footerlogo/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="images/footerlogo/keralatravelmart.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Tourcert.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="images/footerlogo/Toft.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="images/footerlogo/RTSOI-LOGO.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="images/footerlogo/One-Tree-Planted.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="images/footerlogo/IATO.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="images/footerlogo/sanderson-phillips.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/USTOA.png" alt="Preferred hotels">
                </div>
                <div class="item">
                    <img src="images/footerlogo/SITE_wordmark.png" alt="site_wordmark">
                </div>
            </div>
        </div>
    </div>
    <style>
        .footers {
            border-top: 1px #dedede solid;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 30px 0px 30px;
        }

        .f-list-item .list-item {
            list-style: none;
            padding: 0px 0px;
        }

        .f-list-item {
            padding-left: 0px;
        }

        .f-list-item .list-item a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            text-transform: none;
            line-height: 16px;
            letter-spacing: .5px;
            color: black;
            transition: all 0.2s ease
        }

        .f-list-item .list-item a:hover {
            margin-left: 5px;
            border-bottom: 3px solid #FFA8B0;
        }

        .f-heading {
            font-size: 1rem;
            color: #000;
            font-weight: 600;
        }

        .footer-logo {
            /*height:250px;*/
            /*width:250px;*/
        }

        .footer-logo img {
            width: 125px;
            object-fit: cover;
        }

        .btn-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            border: 1px solid black;
            height: 41px;
            width: 41px;
            text-align: center;
            border-radius: 50px;
            background: black;
        }
    </style>
    <section class="news-latter" style="border-top:1px solid rgb(255 255 255 / 50%);">
        <div class="container-fluid">
            <a href="#" class="btn-top"><img src="images/icon/top_arrow.png"></a>
            <div class="row">
                <div class="col-5">
                    <div class="news-cont">Join our travel notebook!</div>
                    <div class="news-desc news-cont">Stay ahead with the latest updates in travel trends.</div>
                </div>
                <div class="col-7">
                    <form class="form-inline" action={{ route('admin.save.subscription') }} method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="nameform-footer" type="text" id="name" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <input class="nameform-footer" type="email" id="email" placeholder="Enter email" name="email">
                        </div>
                        <button type="submit" class="btn-2">SUBSCRIBE</button>
                        <div class="checkbox">
                            <label class="check" style="display:flex">
                                <input type="checkbox">
                                <p style="font-size:1rem!important;">I have read and accept the <a
                                        style="text-decoration: underline;">Privacy and Data Protection Policy*</a> and
                                    I know that I can unsubscribe at any time. </p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--new footer desine-->
    <footer class="footers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <a href="index.html">
                                <div class="footer-logo">
                                    <img src="images/logo/footer-logo.png" alt="logo">
                                </div>
                            </a>
                            <div><span style="color: #6c757d;font-size: 0.85rem;">(A Distinct Destinations
                                    company)</span></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Quick Links</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="contact-us.html">
                                        <span class="">About Us</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="services.html">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="littile-inspiration">
                                        <span>Inspirational Adventures</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="responsible-travel">
                                        <span class="">Responsible Travels</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="about-us#our-team">
                                        <span class="">Our Team</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="https://www.distinctdestinations.in/pay-online" target="_blank">
                                        <span class="">Payment Links</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="contact-us">
                                        <span class="">Contact Us</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="https://api.whatsapp.com/send?phone=919599360800" target="_blank">
                                        <span>Start a Whatsapp Chat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Destinations</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="destinations.html#india">
                                        <span class="">India</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destinations.html#nepal">
                                        <span>Nepal</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destinations.html#bhutan">
                                        <span>Bhutan</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="destinations.html#shrilanka">
                                        <span>Sri Lanka</span>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="f-heading">Services</h3>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <a href="our-servic#luxury-collection">
                                        <span class="">The Luxury Collection</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="services.html#meetings-and-conferences">
                                        <span class="">Meetings & Conferences</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="our-servic#incentives">
                                        <span class="">Incentives</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="f-heading">Contact Us</h3>
                            <p class="list-item" style="font-size:16px!important; color:black;">
                                Unit No 701 to 708<br />
                                Tower D, Global Business Park
                                <br />
                                Sector-26, Gurugram, Haryana, 122002
                                <br />
                                +91 9599-360-800
                                <br>
                                info@farandbeyond.in
                            </p>
                            <ul class="f-list-item">
                                <li class="list-item">
                                    <div class="social">
                                        <a href="https://www.facebook.com/profile.php?id=61559894617770"
                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.linkedin.com/company/102744889/admin/feed/posts/"
                                            target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/farandbeyondd/" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .copy-itm {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            list-style: none;
        }

        .copy-itm {
            padding-left: 0px;
            margin: 0px !important;
        }

        .copywrite {
            background: white;
            padding: 10px 0 10px 0;
            border-top: 1px #dedede solid;
            color: black;
            text-align: center;
        }

        .copy-itm .list-itm span {
            color: black;
            font-weight: 100;
            padding-left: 24px;
            font-size: 14px;
        }

        .footer-cent {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center
        }
    </style>
    <div class="copywrite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 text-center footer-cent" style="font-size:14px;"><span>© 2024
                        FAR & BEYOND. All Rights Reserved.</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left footer-cent">
                    <ul class="copy-itm" st>
                        <li class="list-itm">
                            <a href="privacy-policy.html#tab_payment">
                                <span class="">Privacy Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy.html#tab_cookie">
                                <span class=" ">Cookies Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy.html#tab_gdpr">
                                <span class=" "> GDPR Policy</span>
                            </a>
                        </li>
                        <li class="list-itm">
                            <a href="privacy-policy.html#tab_policy">
                                <span class=" "> Payment Policy</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 text-left footer-cent" style="font-size:14px;">
                    <ul class="copy-itm">
                        <li class="list-itm">
                            <a href="https://bitgaintech.com/" target="_blank">
                                <span style="color:#0dcaf0;padding:0px!important; font-weight:bold;">bit</span><span
                                    style="color: #28a745;padding:0px; font-weight:bold;">Gain</span><span
                                    style="padding:0px!important; font-weight:bold; color:gray;">-Tech</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer end-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                stagePadding: 50,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <script>
        $('.testi_box').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: [' < i class = "fa fa-caret-left" > < /i>', ' < i class = "fa fa-caret-right" > < /i>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 1
                }
            }
        });
    </script>
    <!--logo slider-->
    <script>
        $('.inspired_slider1').owlCarousel({
            loop: true,
            autoplay: true,
            stagePadding: 150,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                960: {
                    items: 6
                },
                1200: {
                    items: 7
                }
            }
        });
    </script>
    <script>
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();
        // Click function
        $('#tabs-nav li').mouseenter(function() {
            $('#tabs-nav li').removeClass('active');
            // $(this).addClass('active');
            $('.tab-content').hide();
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });
    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <!--transparent nabigation-->
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {

                document.getElementById("navbar").style.background = "#fff";
                document.getElementById('logo1').style.display = "none";
                document.getElementById('logo2').style.display = "block";
                document.getElementById('logo3').style.display = "none";
                document.getElementById('logo4').style.display = "block";
                document.getElementByClass('Fnb').style.color = "#fff"
            } else {

                document.getElementById("navbar").style.background = "none";
                document.getElementById('logo2').style.display = "none";
                document.getElementById('logo1').style.display = "block";
                document.getElementById('logo4').style.display = "none";
                document.getElementById('logo3').style.display = "block";
            }
        }




        ///////////////////////////////////////////////
    </script>










</body>

</html>
