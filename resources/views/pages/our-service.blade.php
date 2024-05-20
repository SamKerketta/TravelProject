@extends('layouts.app')
@section('page-content')
    <section class="hero" style="position:relative; ">
        <img src="images/home/destination.jpg" class="d-block w-100" alt="Luxury Travels Bali">
        <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#000;">OUR SERVICES</h2>
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
            text-align: left;
        }

        .innner-content {
            /*overflow:hidden;*/
            position: relative;
        }

        .about-img .inner-img {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .about_main {
            min-height: 39.4vw;
            height: auto;
            width: 90%;
            margin: auto;
            padding-top: 40px;
            padding-left: 14px;
            padding-right: 14px;
        }

        .about_main .about_p {
            text-align: center;
        }

        .about_main .about_p p {
            font-size: 19px;
        }

        .about-img1 {
            /*max-width: 562px;*/
            width: 100%;
            margin: auto;
            background: red;
            overflow: hidden;
        }

        .about-img1 img {
            width: 100%;
            height: 43vw;
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

        /*services page css*/
        .about_main2 {
            min-height: 26vw;
            max-height: 26vw;
            height: 100%;
            width: 100%;
            padding: 35px 50px;
            position: absolute;
            right: 4%;
        }

        .about_main4 {
            min-height: 26vw;
            max-height: 26vw;
            height: 100%;
            width: 100%;
            padding: 35px 50px;
            position: absolute;
            right: 4%;

        }

        .innner-content {
            position: relative;
        }


        /*end services page css*/


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
            position: absolute;
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

        .about_main5 {
            min-height: 26vw;
            max-height: 26vw;
            height: 100%;
            width: 100%;
            padding: 35px 50px;
            position: absolute;
            left: 4%;
            z-index: 2;
        }

        /*services inner section css*/
        .inner_sect {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about_main3 {
            /*background: red; */
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            width: 100%;
            height: 100%;

        }

        .about
        /*End inner section css*/
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>Spray paint drying time can vary based on several factors, including the type of paint, surface,
                            humidity, and
                            temperature. erature. Spray paint drying time can vary based on several factors, including the
                            type of paint, surface,
                            humidity, and temperature.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding-bottom:40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                    <div class="about_main2" style="background:rgb(255 241 241);">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">LUXURY COLLECTION</h3>
                            </div>
                            <div class="about_p">
                                <p>
                                    <strong>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature. Spray
                                        paint drying time can vary based on several factors, including the
                                        type of paint, surface, humidity, and temperature.
                                        <br />
                                        <br>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding-top:40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                    <div class="about_main5" style="background:rgb(255 241 241);">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">MICE</h3>
                            </div>
                            <div class="about_p">
                                <p>
                                    <strong>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature. Spray
                                        paint drying time can vary based on several factors, including the
                                        type of paint, surface, humidity, and temperature.
                                        <br>
                                        <br>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature.

                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding-bottom:40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                    <div class="about_main2" style="background:rgb(255 241 241);">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">INCENTIVES</h3>
                            </div>
                            <div class="about_p">
                                <p>
                                    <strong>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature. Spray
                                        paint drying time can vary based on several factors, including the
                                        type of paint, surface, humidity, and temperature.
                                        <br>
                                        <br>
                                        Spray paint drying time can vary based on several factors, including
                                        the type of paint, surface, humidity, and temperature. erature.

                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="trips-bg" style="padding-top:40px;">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">-->
    <!--                <div class="about_main5" style="background:rgb(255 241 241);">-->
    <!--                    <div class="about_main3">-->
    <!--                    <div class="about-h"><h3 style="margin-bottom:23px;font-weight: bold;">LUXURY IN INDIA</h3></div>-->
    <!--                    <div class="about_p">-->
    <!--                                 <p> -->
    <!--                                       <strong> -->
    <!--                                                 Spray paint drying time can vary based on several factors, including-->
    <!--                                                the type of paint, surface, humidity, and temperature. erature. Spray-->
    <!--                                                paint drying time can vary based on several factors, including the-->
    <!--                                                type of paint, surface, humidity, and temperature.-->
    <!--                                                <br>-->
    <!--                                                <br>-->
    <!--                                                Spray paint drying time can vary based on several factors, including-->
    <!--                                                the type of paint, surface, humidity, and temperature. erature.-->

    <!--                                      </strong>-->
    <!--                                </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--             <div class="col-lg-6 col-md-6 col-sm-12 inner-section">-->
    <!--                <div class="about-img2">-->
    <!--                     <img src="images/home/destinations/india.jpg" alt="about">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
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
