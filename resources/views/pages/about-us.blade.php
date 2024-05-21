@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <img src="images/home/about03.jpg" class="d-block w-100" alt="Luxury Travels Bali">
        <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:6.0625rem;line-height: .8em; color:#000;">ABOUT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .hero-title .bottom-head {
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 1.6px;
            line-height: 1.4;
            color: #379c8a;
        }

        .about-cont {
            padding: 60px 0 0px 0;
        }

        .about-cont .container {
            padding-top: 40px;
        }

        .about-text p {
            padding-top: 0px;
            font-family: 'arial', serif;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
        }

        .about-text {
            width: 80%;
            margin: auto;
        }

        .about-img img {
            width: 100%;
        }

        .trips-bg .inner-section {
            padding: 0px;
        }

        .about-h h2 {
            font-size: 3rem;
            font-weight: bold;
        }

        .about-h {
            text-align: center;
        }

        .innner-content {
            overflow: hidden;
        }

        .about-img .inner-img {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .about_main {
            min-height: 37vw;
            height: 100%;
            width: 80%;
            margin: auto;
        }

        .about_main .about_p {
            text-align: center;
        }

        .about_main .about_p p {
            font-size: 19px;
        }

        .about-img1 {
            max-width: 432px;
            width: 80%;
            margin: auto;
            background: red;
            overflow: hidden;
        }

        .about-img1 img {
            width: 100%;
            height: 37vw;
        }

        .about-img2 {
            min-height: 37vw;
            /*min-width:506px;*/
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .about-img2 img {
            width: 100%;
            height: 37vw;
        }

        .about_main2 {
            min-height: 37vw;
            /*min-width:506px;*/
            height: 100%;
            width: 100%;
            /*background:green;*/
            display: flex;
            text-align: center;
            align-items: center;
        }

        .about_main3 {
            width: 60%;
            /*background:red;*/
            margin: auto;
            text-align: center;
        }

        .meet_team {
            max-height: 20vw;
            height: 20vw;
            display: flex;
            justify-content: left;
            text-align: center;
            align-items: center;
        }

        .about-img4 {
            max-width: 540px;
            width: 80%;
            margin: auto;
            background: red;
            overflow: hidden;
            position: sticky;
            bottom: 20%;
            left: 10%;
        }

        .about-img4 img {
            width: 100%;
            height: 37vw;
        }

        .about_left,
        p {
            text-align: left;
        }

        .about_main4 {
            min-height: 37vw;
            height: 100%;
            width: 80%;
            margin: auto;
            display: flex;
            text-align: center;
            align-items: center;
        }
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>spray point drying time can very based on several factors, including the type of paint,
                            surgace,
                            humidity, and temperature. erature. Spray paint drying time can vary based on several
                            factors,
                            including the typee of paint, surface, humidity, and temperqture.</p>
                        <br>
                        <p>Spray paint drying time can vary based on several factors, includding the type of paint,
                            surface,
                            humidity, and temperature. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 inner-section">
                    <div class="about-img1">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main">
                        <div class="about-h">
                            <h2 style="margin-bottom:47px;">OUR STORY</h2>
                        </div>
                        <div class="about_p">
                            <p style="text-align: center!important;"> <strong>Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature</strong>
                            </p>
                            <br>
                            <p style="font-size:16px;text-align:center!important;">
                                Spray paint drying time can vary based on
                                several factors, including the type of paint,
                                surface, humidity, and temperature.
                                erature. Spray paint drying time can vary
                                based on several factors, including the type
                                of paint, surface, humidity, and
                                temperature
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;" id="why-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about-h">
                                <h2 style="margin-bottom:47px;">WHY US?</h2>
                            </div>
                            <div class="about_p">
                                <p> <strong>Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature. erature.
                                        Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about_p">
                                <p style="font-size:16px">
                                    Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#FFF3EF;" id="meet-our-team">
        <div class="container meet_team">
            <div class="about-p">
                <h2 style="font-size: 3rem;font-weight: bold;">MEET OUR TEAM</h2>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="position:relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            <div class="about-h  about_left">
                                <h2 style="text-align:left;">NAME</h2>
                                <h3>ROLE</h3>
                            </div>
                            <div class="about_p  about_left">
                                <p> <strong>Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature.
                                        erature. Spray paint drying time can vary
                                        based on several factors, including the type
                                        of paint, surface, humidity, and
                                        temperature</strong>
                                </p>
                                <br>
                                <p style="font-size:16px">
                                    Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="position:relative;">
        <div style="background:#FFF3EF; position:absolute;position: absolute; height:18vw; top:135px; width: 100%;">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            <div class="about-h about_left">
                                <h2 style="text-align:left;">NAME</h2>
                                <h3>ROLE</h3>
                            </div>
                            <div class="about_p about_left">
                                <p> <strong>Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature.
                                        erature. Spray paint drying time can vary
                                        based on several factors, including the type
                                        of paint, surface, humidity, and
                                        temperature</strong>
                                </p>
                                <br>
                                <p style="font-size:16px">
                                    Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="position:relative;">
        <div style="background:#FFF3EF; position:absolute;position: absolute; height:18vw; top:135px; width: 100%;">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            <div class="about-h about_left">
                                <h2 style="text-align:left;">NAME</h2>
                                <h3>ROLE</h3>
                            </div>
                            <div class="about_p about_left">
                                <p> <strong>Spray paint drying time can vary based on
                                        several factors, including the type of paint,
                                        surface, humidity, and temperature.
                                        erature. Spray paint drying time can vary
                                        based on several factors, including the type
                                        of paint, surface, humidity, and
                                        temperature</strong>
                                </p>
                                <br>
                                <p style="font-size:16px">
                                    Spray paint drying time can vary based on
                                    several factors, including the type of paint,
                                    surface, humidity, and temperature.
                                    erature. Spray paint drying time can vary
                                    based on several factors, including the type
                                    of paint, surface, humidity, and
                                    temperature
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- new slider sections  --}}
    <section id="ContentPlaceHolder1_PnlExperiencesDistinctDestinations">
        <div class="Nwlter exprSec" id="target7">
            <div class="container">
                <div class="NwlShw">
                    <div class="SliderMnNweshw2 owl-carousel owl-theme">

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="accessible-tours" title="Accessible Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="art-and-architecture" title="Art and Architecture" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name2</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="bike-tour" title="Bike Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name3</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="craft-and-textile-tours" title="Craft and Textile Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name4</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="culinary-tours" title="Culinary Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name5</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="cultural-tours" title="Cultural Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name6</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="family-tour" title="Family Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name7</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="food-tour" title="Food Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name8</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="history-tours" title="History Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name9</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="photography-tour" title="Photography Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name10</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="social-impact-tours" title="Social Impact Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name11</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="unique-tours" title="Unique Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name12</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="village-tours" title="Village Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name13</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="something-went-wrong.html" target="_blank">
                                <div class="cl12Nwslter">
                                    <div class="ImgScHw"><img
                                            src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png"
                                            alt="walking-tours" title="Walking Tours" /></div>
                                    <div class="cl12Cnt">
                                        <p style="margin-top:15px ">Name14</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Our patenar-->
    <section class="our_team">
        <h2>Our Partners Say</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" position="relative;">
            <!--<span style="position:absolute">-->
            <!--  <img src="images/home/icon-3.png" style="height:58px; position: absolute;left:297px; top: -30px;">-->
            <!--</span>-->
            <!-- Carousel indicators -->
            <!--<ol class="carousel-indicators">-->
            <!--	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
            <!--	<li data-target="#myCarousel" data-slide-to="1"></li>-->
            <!--	<li data-target="#myCarousel" data-slide-to="2"></li>-->
            <!--</ol>   -->
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/3.html" alt="">
                    </div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                        Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus
                        risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget
                        rutrum.</p>
                    <p class="overview">
                        <b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a>
                    </p>
                    <!--<div class="star-rating">-->
                    <!--  <ul class="list-inline">-->
                    <!--    <li class="list-inline-item">-->
                    <!--      <i class="fa fa-star"></i>-->
                    <!--    </li>-->
                    <!--    <li class="list-inline-item">-->
                    <!--      <i class="fa fa-star"></i>-->
                    <!--    </li>-->
                    <!--    <li class="list-inline-item">-->
                    <!--      <i class="fa fa-star"></i>-->
                    <!--    </li>-->
                    <!--    <li class="list-inline-item">-->
                    <!--      <i class="fa fa-star"></i>-->
                    <!--    </li>-->
                    <!--    <li class="list-inline-item">-->
                    <!--      <i class="fa fa-star-o"></i>-->
                    <!--    </li>-->
                    <!--  </ul>-->
                    <!--</div>-->
                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/1.html" alt="">
                    </div>
                    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                        varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.
                        Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.
                    </p>
                    <p class="overview">
                        <b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a>
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                        mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                        Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor
                        velit.</p>
                    <p class="overview">
                        <b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a>
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                        mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                        Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor
                        velit.</p>
                    <p class="overview">
                        <b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a>
                    </p>

                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
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
            width: 650px;
            margin: 0 auto;
            padding-bottom: 50px;
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
            top: 198px;
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
    <section class="news-latter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <div class="news-cont">Subscribe to our travel notebook</div>
                    <div class="news-desc news-cont">Be the first to discover the latest news in travel trends</div>
                </div>
                <div class="col-7">
                    <form class="form-inline" action="#">
                        <div class="form-group">
                            <input type="email" id="name" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Enter email" name="email">
                        </div>
                        <a class="btn-2"> SUBSCRIBE </a>
                        <div class="checkbox">
                            <label class="check">
                                <input type="checkbox">
                                <p>I have read and accept the <a style="text-decoration: underline;">Privacy and Data
                                        Protection Policy*</a> and I know that I can unsubscribe at any time. </p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
    </style>
    <!--End news latter-->

    <style>
        .wedding {
            margin-left: 60px;
        }
    </style>
    <style>
        .footers {
            border-top: 1px #dedede solid;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 90px 30px 100px 30px;
        }

        .f-list-item .list-item {
            list-style: none;
        }

        .f-list-item {
            padding-left: 0px;
        }

        .f-list-item .list-item a {
            text-decoration: none;
            font-family: "Inter", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: none;
            line-height: 16px;
            letter-spacing: .5px;
            color: black;
        }

        .f-heading {
            font-size: 1rem;
        }
    </style>
    <div class="client-logo-bg">
        <div class="client-text" style="display:none;">
            <h3 class="border_line1">
                <span>Our Affiliations</span>
            </h3>
        </div>
        <div class="inspired_section-1">
            <div class="owl-carousel owl-theme inspired_slider1">
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="One and only ">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Atlantis">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="Four Seasons">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Raffles">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="Fairmont">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Sofitel">
                </div>
                <div class="item">
                    <img src="slider/trustedFITservice.png" alt="St Regis">
                </div>
                <div class="item">
                    <img src="slider/IATO.png" alt="Preferred hotels">
                </div>
            </div>
        </div>
    </div>
@endsection
