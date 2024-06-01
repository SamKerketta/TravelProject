@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/services/Our-Services.webp" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .banner {
            width: 100%;
            height: 40vw;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        .hero-title h2 {
            font-size: 6.5rem;
            line-height: .8em;
            color: #fff;
            text-transform: capitalize;
            font-weight: bold;
        }

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
            font-size: 1.25rem;
            line-height: 30px;
            text-align: center;
        }

        .about-text {
            width: 70%;
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
            font-size: 1.25rem;
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
            /*max-height: 26vw;*/
            /*height: 100%;*/
            width: 100%;
            padding: 35px 50px;
            position: absolute;
            left: 4%;
            z-index: 0;
        }

        /*services inner section css*/
        .inner_sect {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about_main3 {
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
                        <p>
                            We offer the most exclusive experiences to guests through our three ultra- personalised
                            services: The Luxury Collection; Meetings & Conferences; Incentives. We are laser-focused on
                            offering only the finest value-added propositions to our clients. Our expertise has long been
                            recognised for the design, coordination and management of luxury experiential travel, Incentive
                            trips, and Meetings and Conferences. Supported by strong partnerships and an authentic
                            representation we have navigated the challenges of these evolving markets and seek to raise the
                            bar in this growing space as a lead player.

                        </p>
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
                        <img src="images/services/Our-Services-luxury.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                    <div class="about_main2" style="background:#FFF7F7;">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">The Luxury Collection</h3>
                            </div>
                            <div class="about_p">
                                <p>

                                    Our Luxury Collection is in sync with the expanded new "three T's" of luxury: Time,
                                    Truth and Trust. Individual attention, privacy and exclusivity are the hallmarks of our
                                    alluring Luxury Collection. We pride ourselves on our deep commitment to redefining
                                    modern luxury experiential travel. Our one-of-a-kind offerings pivot on
                                    hyper-personalisation in the very best way. Rest easy, that we know what we do, have
                                    fantastic connections and save time.

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
                    <div class="about_main5" style="background:#FFF7F7;">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">Meetings & Conferences </h3>
                            </div>
                            <div class="about_p">
                                <p>
                                    Our dedicated team is long skilled in end-to-end destination management for the Meetings
                                    & Conferences in the Indian Subcontinent, is at hand to iron out any unexpected
                                    wrinkles, any time any place.<br /><br /> Be it a corporate event to expand your
                                    networking or a business conference we have it all covered.The key considerations that
                                    distinguish us from others is our hands-on, in-depth knowledge and wide experience of
                                    the special needs of clients in this market segment. We are your go-to, one-stop
                                    solution-provider for all your needs.



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section" style="position:relative; z-index:-1;">
                    <div class="about-img2">
                        <img src="images/services/Our-Services-mice.webp" alt="about">
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
                        <img src="images/services/Our-Services-incentive.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content inner_sect">
                    <div class="about_main2" style="background:#FFF7F7;">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:23px;font-weight: bold;">Incentives</h3>
                            </div>
                            <div class="about_p">
                                <p>
                                    We stand out for our exceptional leisure-time programmes. We have redefined the concept
                                    of ‘Bluxury’ with our key components of authenticity, personalisation and guest
                                    satisfaction. They distinguish the uniqueness of our Incentives portfolio of activities
                                    and experiences on offer. Far and Beyond holds the promise of giving the greatest value
                                    for time and money through a spectrum of thrilling events and fun activities


                                </p>
                            </div>
                        </div>
                    </div>
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

        .group-aff {
            text-align: center;
            padding-bottom: 20px;
            color: white;
        }
    </style>
@endsection
