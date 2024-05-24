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
            font-size: 1rem;
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
            font-size: 1 rem;
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
                        <p>Empowered by over two decades of experience in experiential luxury travel we are leveraging our
                            skills at
                            destination specialism to roll out our spanking new B2B travel platform Far and Beyond. Rooted
                            in the
                            longstanding experience of DMC Distinct Destinations, its parent body, Far and Beyond aims to go
                            the extra
                            mile to enhance its experiential offerings to its niche target— the Luxury and MICE Market into
                            India.
                        </p>
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
                        <!--<div class="about-h"><h2 style="margin-bottom:47px; ">OUR STORY</h2></div>-->
                        <div class="about_p">
                            <p style="text-align:left!important;">
                                We aim to embed ourselves as a specialised brand for years to come in this unique market,
                                which is
                                growing by leaps and bounds. We are experts in creating the most alluring handcrafted luxury
                                travel
                                programmes. Over the years we have honed our skills in handling the most exclusive luxury
                                experiential
                                friends and family travel.
                                <br />
                                <br />
                                Our personalized and customized journeys are a compelling choice for the discerning luxury
                                traveller.
                                The passion of our dedicated team and hyper-personalisation have been the key components in
                                designing
                                these re-imagined, delight-giving traveller experiences.
                                <br />
                                <br />
                                Exclusivity, careful curation and innovation — our bespoke modern luxury offerings have all
                                these
                                hallmarks to elevate the guest experience for travellers looking for exceptional experiences
                                in their
                                next destination.
                                <br />
                                <br />
                                Right from the planning stage to booking management, execution to customer service, the
                                team’s energy,
                                expertise and vision has defined the successful outcomes of the stress-free luxury travel
                                experience.
                                <br />
                                <br />
                                Our travel partners, the cornerstone of our global operations, have worked closely alongside
                                with their
                                market-savvy actionable insights, in supporting these unique, once-in-a-lifetime and
                                culturally
                                immersive luxury experiences.
                                <br />
                                <br />
                                Our 18 offices at all key locations of India, and in every country in which we operate –
                                Nepal, Bhutan,
                                and Sri Lanka, underpin the strength of our ground operations. We also have a Global
                                presence with
                                dedicated offices and sales teams in the UK, Ireland, Latin America, Germany, Austria and
                                Switzerland,
                                Scandinavia, Australia, North America, and Canada.


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
                                <p>
                                    Only Responsible Travel makes our world a better place. We firmly believe in promoting
                                    sustainable
                                    tourism development and the mutual benefits of the engagement with people, community and
                                    planet. We
                                    open up numerous opportunities for an in-depth, emotionally-fulfilling,
                                    intellectually-enriching
                                    connection with people, places and cultures wherever you travel with us.
                                    <br />
                                    <br />
                                    Designing hyper-personalised travel programmes packed with adventure and discovery
                                    wherever we offer
                                    to send you is our biggest drawcard. Our thrust on novel experiential travel and
                                    authentic cultural
                                    encounters is at the core how you travel with us. No detail is too small for our
                                    attention to ensure
                                    that every experience yields years of happy memories to savour.

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
                                <h2 style="text-align:left;">Vinay Dhall</h2>
                                <h3>ROLE</h3>
                            </div>
                            <div class="about_p  about_left">
                                <p>For someone who has run over 25,000 kms in over 25 cities around world, Travel being a
                                    passion is not
                                    surprising. What is surprising is the number of years he has spent in travel since his
                                    first stint
                                    with Travel Corporation of India. Clocking twenty years in the industry Vinay has been
                                    heading Luxury
                                    MICE and experiential FIT for a company counted among the top five Luxury Operators in
                                    the World.
                                </p>
                                <br>
                                <p style="font-size:16px">
                                    <!--His other love is people and their cultures, fluent in French his insight into travellers profile has ensured many a successful luxury operations both for incentive travel, small groups and individual curations for FITs. Eager to see and experience places around the globe to connect with people and show them the beauty of the subcontinent is his project for life, one that he continued to excel at, even after all these years. Fitness is mantra for him, while food and heritage are favourite subjects. Nothing describes Vinay better than catching him running barefoot - he has run in the Himalayas, in the Parks for Delhi, around the Louvre in Paris, the silent lanes of London at night, in the cold mornings of Zurich. Awaiting more barefoot adventures, Vinay is now a man on a mission, unstoppable.-->

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
                                <h2 style="text-align:left;">Rahul Sareen</h2>
                                <h3>ROLE</h3>
                            </div>
                            <div class="about_p about_left">
                                <p>
                                    Rahul Sareen is a curator at heart and his greatest joy is being able to assist couples
                                    and families
                                    in crafting unforgettable and impeccable journeys. From the beginning of his career,
                                    Rahul’s
                                    operational excellence is his forte. He honed his skills and gained destination
                                    knowledge, an asset
                                    for Inbound operations for Voyageurs India dealing with French and UK markets.

                                </p>
                                <br>
                                <p style="font-size:16px">
                                    A gym enthusiast Rahul is committed to fitness, one reason for his energy and hardwork.
                                    In his own
                                    words he loves sharing information about destinations, stunning and unique places in the
                                    country. His
                                    best reward is to have a happy guest, after travelling on one of his curated itineraries
                                    to return
                                    with cherished memories that last a lifetime. Travel is truly his muse and operations
                                    his strength. A
                                    team player Rahul is looking forward to crafting experiences for guests from all over
                                    the world.

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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item active">
                                    <div class="item">
                                        <div class="shadow-effect">
                                            <img class="img-circle"
                                                src="../../homedroidtech.com/assets/images/team/ankurgupta.jpeg"
                                                alt="ankurgupta">
                                            <h2>Vinay Dhall</h2>
                                            <div id="pastexp">
                                                <p>Dept. of CSE</p>
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around
                                                    world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <div class="shadow-effect">
                                            <img class="img-circle"
                                                src="../../homedroidtech.com/assets/images/team/ankurgupta.jpeg"
                                                alt="ankurgupta">
                                            <h2>Vinay Dhall</h2>
                                            <div id="pastexp">
                                                <p>Dept. of CSE</p>
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around
                                                    world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <div class="shadow-effect">
                                            <img class="img-circle"
                                                src="../../homedroidtech.com/assets/images/team/ankurgupta.jpeg"
                                                alt="ankurgupta">
                                            <h2>Vinay Dhall</h2>
                                            <div id="pastexp">
                                                <p>Dept. of CSE</p>
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around
                                                    world,</p>
                                            </div>
                                            <div class="social-icons" id="teamsocial">
                                                <a class="social-icon social-icon--facebook" id="socialicon">
                                                    <img src="https://imgur.com/c9JxYPS">
                                                </a>
                                                <a class="social-icon social-icon--twitter" id="socialicon">
                                                    <img src="https://imgur.com/VHB4APa">
                                                </a>
                                                <a class="social-icon social-icon--linkedin" id="socialicon">
                                                    <img src="https://imgur.com/egfJ4V2">
                                                </a>
                                                <a class="social-icon social-icon--instagram" id="socialicon">
                                                    <img src="https://imgur.com/cgH07pQ">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .item .shadow-effect {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid #ECECEC;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10), 0 15px 12px rgba(0, 0, 0, 0.02);
        }

        .item {
            height: 400px !important;
            text-align: center;
            padding: 10px;
            opacity: .2;
            -webkit-transform: scale3d(0.8, 0.8, 1);
            transform: scale3d(0.8, 0.8, 1);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .item p {
            font-size: 12px;
        }

        .item h2 {
            font-size: 28px !important;
            font-weight: 500 !important;
        }

        .item .title {
            font-size: 14px;
        }

        .item h5 {
            font-size: 15px !important;
            font-weight: 700 !important;
        }

        .owl-item.active.center .item {
            opacity: 1;
            -webkit-transform: scale3d(1.0, 1.0, 1);
            transform: scale3d(1.0, 1.0, 1);
        }

        .teams .owl-carousel .owl-item .img-circle {
            transform-style: preserve-3d;
            max-width: 170px;
            margin: 0 auto 17px;
            transition: transform .5s;
        }

        .teams .owl-carousel .owl-item .img-circle:hover {
            transform: scale(0.9);
        }

        @media only screen and (max-width: 1000px) {
            #customers-teams.owl-carousel .owl-dots .owl-dot span {
                height: 20px;
                width: 20px;
                margin-top: 30px;
            }
        }


        #teamsocial {
            align-items: center;
            justify-content: center;
            display: flex;
            margin: 10px auto;
            margin-top: 20px;

        }

        #teamsocial #socialicon {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 40px;
            height: 40px;
            margin: 0 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            text-decoration: none;
            transition: all 0.3s ease;

        }

        #teamsocial #socialicon:hover {
            font-size: 2rem;
            width: 50px;
            height: 50px;
        }
    </style>

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
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam
                        faucibus
                        mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat
                        vel
                        tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
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
                        varius quam
                        at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac
                        nisl
                        bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    <p class="overview">
                        <b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a>
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi
                        suscipit
                        tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
                        potenti.
                        Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                    <p class="overview">
                        <b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a>
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi
                        suscipit
                        tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
                        potenti.
                        Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
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
                                        Protection
                                        Policy*</a> and I know that I can unsubscribe at any time. </p>
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
@endsection
