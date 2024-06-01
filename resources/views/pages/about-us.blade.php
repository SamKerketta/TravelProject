@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/about/about-us-cover.webp" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>About us</h2>
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
            font-size: 1.25rem !important;
            line-height: 30px;
            text-align: center;
        }

        p {
            color: #495057;
            font-size: 1.25rem !important;
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
            font-size: 2rem;
            font-weight: bold;
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

        .about-img1 {}

        .about-img1 img {
            width: 100%;
            /*height:40vw;*/
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
            /*height:37vw;*/
        }

        .about_main2 {
            display: flex;
            text-align: center;
            align-items: center;
        }

        .about_main3 {
            padding: 0px 75px;
            margin-bottom: 1px;
            width: 85%;
            position: relative;
            bottom: 20px;

        }

        .meet_team {
            max-height: 20vw;
            height: 20vw;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        .about-img4 {
            max-width: 540px;
            width: 80%;
            margin: auto;
            overflow: hidden;
            position: relative;
            top: -15%;
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

        .about_main1 {
            padding: 25px 25px 25px 10px;
            width: 95%;
        }
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>Empowered by over two decades of experience in experiential luxury travel we are leveraging our
                            skills at destination specialism to roll out our spanking new B2B travel platform Far and
                            Beyond. Rooted in the longstanding experience of DMC Distinct Destinations, its parent body, Far
                            and Beyond aims to go the extra mile to enhance its experiential offerings to its niche target—
                            the Luxury and MICE Market into India.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding-bottom:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 inner-section">
                    <div class="about-img1" style="padding:0px 75px;">
                        <img src="images/about/about-us.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 inner-section innner-content">
                    <div class="about_main1">
                        <div class="about-h" style="text-align:left;padding-bottom:25px;">
                            <h2>Our Mission</h2>
                        </div>
                        <div class="about_p">
                            <p style="text-align:left!important;">
                                We aim to embed ourselves as a specialised brand for years to come in this unique market,
                                which is growing by leaps and bounds. We are experts in creating the most alluring
                                handcrafted luxury travel programmes. Over the years we have honed our skills in handling
                                the most exclusive luxury experiential friends and family travel.
                                <br />
                                <br />
                                Our personalized and customized journeys are a compelling choice for the discerning luxury
                                traveller. The passion of our dedicated team and hyper-personalisation have been the key
                                components in designing these re-imagined, delight-giving traveller experiences.
                            </p>
                        </div>
                        <br />
                        <br />
                        <div class="about-h" style="text-align:left;padding-bottom:25px;">
                            <h2>Exclusivity Just For You</h2>
                        </div>
                        <div class="about_p">
                            <p style="text-align:left!important;">
                                Exclusivity, careful curation and innovation — ourbespoke modern luxury offerings have all
                                these hallmarksto elevate the guest experience for travellers looking forexceptional
                                experiences in their next destination.Exclusivity, careful curation and innovation —
                                ourbespoke modern luxury offerings have all these hallmarksto elevate the guest experience
                                for travellers looking forexceptional experiences in their next destination.
                                <br />
                                <br />
                                Our Travel Partners, the cornerstone of our global operations, have worked closely alongside
                                with theirmarket-savvy actionable insights, in supporting these unique, once-in-a-lifetime
                                and culturally immersive luxury experinces.

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="about_main2">
                        <div class="about_main3" style="padding:0px 75px;">
                            <div class="about-h" style="text-align:left;padding-bottom:25px;">
                                <h2>Our Network</h2>
                            </div>
                            <div class="about_p">
                                <p>
                                    Our 18 offices at all key locations of India, and in every country in which we operate –
                                    Nepal, Bhutan, and Sri Lanka, underpin the strength of our ground operations. We also
                                    have a Global presence with dedicated offices and sales teams in the UK, Ireland, Latin
                                    America, Germany, Austria and Switzerland, Scandinavia, Australia, North America, and
                                    Canada.
                                    <br />
                                    <br />
                                    With the launch of Far and Beyond we aim to cement our status as a leading player in the
                                    luxury travel space.
                                    <br />
                                    <br />
                                    Now, when you think Luxury Experiential Travel, let's take you Far and Beyond
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12" style="padding-right:0px;">
                    <div class="about-img2" style="padding-left:45px;padding-top:45px;">
                        <img src="images/about/about-us-1.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;margin-top:50px" id="why-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="about_main3">
                        <div class="about-h">
                            <h2 style="text-align:left;padding-bottom:25px;">Why Travel With Far & Beyond</h2>
                        </div>
                        <div class="about_p">
                            <p>
                                Designing hyper-personalised travel programmes packed with adventure and discovery wherever
                                we offer to send you is our biggest drawcard. Our thrust on novel experiential travel and
                                authentic cultural encounters is at the core how you travel with us. No detail is too small
                                for our attention to ensure that every experience yields years of happy memories to savour.
                                <br />
                                <br />
                                We firmly believe in promoting sustainable tourism development and the mutual benefits of
                                the engagement with people, community and planet.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-5 col-sm-12" style="padding-left:0px;padding-right:0px;">

                    <img src="images/about/about-us-why-travel-with-FB.webp" alt="about" style="width:100%">

                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12" style="padding-left:0px;padding-right:0px;">
                    <div class="about-img2">
                        <img src="images/about/why-us-2.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="about_main2">
                        <div class="about_main3" style="margin-top: 243px;">
                            <div class="about_p">
                                <p style="font-size:16px">
                                    Our fantastic luxury Concierge network ‘far and beyond’ empowers the guest experience.
                                    These amazing connections set the stage for driving home the message that each guest is
                                    well-cared-for and their needs are attended to at any time, any place.
                                    <br />
                                    <br />
                                    Our partnerships with deeply knowledgeable local service providers serve as a pivotal
                                    point for our delivery of exceptional experiences. The intimate knowledge and the
                                    immersive approach of our private and specialist guides bring invaluable insights.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#FFF7F7;" id="meet-our-team">
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
                        <img src="images/about/vinay.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            <div class="about-h  about_left">
                                <h2 style="text-align:left;">Vinay DHALL</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p  about_left">
                                <p>
                                    For someone who has run over 25,000 kms in over 25 cities around world, Travel being a
                                    passion is not surprising. What is surprising is the number of years he has spent in
                                    travel since his first stint with Travel Corporation of India. Clocking twenty years in
                                    the industry Vinay has been heading Luxury MICE and experiential FIT for a company
                                    counted among the top five Luxury Operators in the World.

                                </p>
                                <br>
                                <p style="font-size:16px">
                                    His other love is people and their cultures, fluent in French his insight into
                                    travellers profile has ensured many a successful luxury operations both for incentive
                                    travel, small groups and individual curations for FITs. Eager to see and experience
                                    places around the globe to connect with people and show them the beauty of the
                                    subcontinent is his project for life, one that he continued to excel at, even after all
                                    these years. Fitness is mantra for him, while food and heritage are favourite subjects.
                                    Nothing describes Vinay better than catching him running barefoot - he has run in the
                                    Himalayas, in the Parks for Delhi, around the Louvre in
                                    Paris, the silent lanes of London at night, in the cold mornings of Zurich. Awaiting
                                    more barefoot adventures, Vinay is now a man on a mission, unstoppable.


                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">&nbsp;</div>
            </div>
        </div>
    </section>

    <section class="trips-bg" style="position:relative;">
        <div style="background:#FFF7F7; position:absolute;position: absolute; height:18vw; top:35px; width: 100%;">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main4">
                        <div class="inner_main">
                            <div class="about-h about_left">
                                <h2 style="text-align:left;">Rahul Sareen</h2>
                                <h3>Role</h3>
                            </div>
                            <div class="about_p about_left">
                                <p>
                                    Rahul Sareen is a curator at heart and his greatest joy is being able to assist couples
                                    and families in crafting unforgettable and impeccable journeys. From the beginning of
                                    his career, Rahul’s operational excellence is his forte. He honed his skills and gained
                                    destination knowledge, an asset for Inbound operations for Voyageurs India dealing with
                                    French and UK markets.


                                </p>
                                <br>
                                <p style="font-size:16px">
                                    A gym enthusiast Rahul is committed to fitness, one reason for his energy and hardwork.
                                    In his own words he loves sharing information about destinations, stunning and unique
                                    places in the country. His best reward is to have a happy guest, after travelling on one
                                    of his curated itineraries to return with cherished memories that last a lifetime.
                                    Travel is truly his muse and operations his strength. A team player Rahul is looking
                                    forward to crafting experiences for guests from all over the world.



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img4">
                        <img src="images/about/ProfilePic.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="position:relative; padding-bottom:20px!important;display:none;">
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
                                <h2 style="text-align:left;">Name</h2>
                                <h3>Role</h3>
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
        <div class="container" style="padding-bottom:20px!important;">
            <div class="row">
                <div class="col-12">
                    <div class="our-t"><span class="h2">Our Experts To Help You</span></div>
                    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item active">
                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team1.jpg" alt="ankurgupta"
                                                    style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2">Mr Daniel</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
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
                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team.jpg" alt="ankurgupta"
                                                    style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2">Mr James</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
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
                                    <div class="item item1">
                                        <div class="shadow-effect">
                                            <div class="wrapper">
                                                <img class="image--cover" src="images/team/f-team1.jpg"
                                                    alt="farandbeyond team" style="width:100px;height:100px;">
                                            </div>
                                            <span class="h2"> Mr Joseph</span>
                                            <div id="pastexp">
                                                <p style="margin-top:-5px;">For someone who has run over 25,000 kms in over
                                                    25 cities around world,</p>
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
        .our-t {
            padding-bottom: 20px;
        }

        .h2 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-transform: capitalize;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .image--cover {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px;

            object-fit: cover;
            object-position: center right;
        }

        .item1 .shadow-effect {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid #ECECEC;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10), 0 15px 12px rgba(0, 0, 0, 0.02);
        }

        .item1 {
            height: 400px !important;
            text-align: center;
            padding: 10px;
            /* opacity: .2; */
            -webkit-transform: scale3d(0.8, 0.8, 1);
            transform: scale3d(0.8, 0.8, 1);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .item1 p {
            font-size: 15px;
        }

        .item1 h2 {
            font-size: 28px !important;
            font-weight: 500 !important;
        }

        .item1 .title {
            font-size: 18px;
        }

        .item1 h5 {
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
@endsection
