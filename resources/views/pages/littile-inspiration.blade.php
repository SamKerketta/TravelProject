@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/little-inspirations/Inspirational%20Adventures.webp" class="d-block w-100"
                alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>Inspirational Adventures</h2>
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
            overflow: hidden;
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

        .res-trav {
            width: 100%;
            /*background: green;*/
            max-height: 80vh;
            overflow: hidden;
        }

        .res-trav img {
            width: 100%;
            object-fit: cover;
        }

        .trips-rsp {
            padding: 0px 0 0px 0px;
        }

        .litt-trav img {
            width: 100%;
            height: 227px;
            object-fit: cover;
        }

        .litt-trav {
            width: 100%;
            height: 227px;
        }

        .trav-video {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .trav-video2 {
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .trav-video img {
            width: 100%;
        }

        .owl-carousel {
            display: none;
            width: 100%;
            z-index: 0 !important;
        }

        .exper-cont {
            width: 100%;
            height: auto;
        }

        .content {
            padding: 27px 27px 0px 27px;
        }

        .content button {
            width: 100%;
            padding: 7px;
            background: black;
            color: white;
            border: none;
        }

        .read-more {
            color: white;
        }

        .litt-videos {
            text-align: center;
        }

        .litt-videos h2 {
            font-weight: 600;
            font-size: 2.5rem;
        }

        .dest-btn {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            margin-bottom: 60px;
        }

        .expo {
            padding: 0px;
        }

        .expo a {
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 17px;
            text-decoration: none;
            color: #ffffff;
            background: #000000;
            font-weight: 500;
            border: 1px solid black;
            min-width: 133px;
        }

        .experiences-box {
            position: relative;
            bottom: 0px;
        }
    </style>
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>
                            We continue to cement our status in the travel space by putting the shine on hitherto
                            lesser-known facets of the places we send you to and the community culture you encounter. Our
                            in-house alluring range of mini city guides are packed with information you didn’t know, or,
                            which just serve as timely reminders. This easy-to-track approach touches on vital travel
                            components such as a dedicated accommodation series, theme-based itineraries and captivating
                            videos on must-visit destinations. Visually evocative, they aim to unleash the adventurer in
                            even the most incurious traveller.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" style="padding-right:0px!important; padding-left:40px;">
                    <div class="experiences-box">
                        <div class="exper-cont" style="padding-top:99px;">
                            <div class="content">
                                <div class="alpo-hedading">
                                    <h3>Alphonso Experiences</h3>
                                </div>
                                <br />
                                <br />
                                <p>
                                    Choose from our exclusive selection of handpicked experiences and fall in love with the
                                    city, one story at a time.
                                </p>
                                <button style=""><a
                                        href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                        style="text-decoration:none;color:white;">View All Experiences</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9" style="padding-left:0px!important">
                    <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">


                                <?php foreach ($tourData as $key => $value) {
                                ?>

                                <div class="owl-item active">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Village-tour.webp"
                                            {{-- <img src="{{ $value->file_path }}" alt="Luxury Travels Sri Lanka"> --}}
                                            {{-- <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences" --}}

                                            style="color:white;">
                                            <div class="content">
                                                <h3>Village Tour</h3>
                                                <p class="read-more color-primary sans-serif"> Read more </p>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php }?>

                                {{-- <div class="owl-item active">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Unique-tour.webp"
                                                alt="Luxury Travels Egypt">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Unique Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/History.webp"
                                                alt="Luxury Travels Kenya - Tanzania - Rawanda">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>History</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Family-tour.webp"
                                                alt="Luxury Travels Mauritius">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Family Tou</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Cultural-tour.webp"
                                                alt="Luxury Travels Morocco">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Cultural Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Culinary.webp"
                                                alt="Luxury Travels Seychelles">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Culinary</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Craft-Textile.webp"
                                                alt="Luxury Travels Finland">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Craft Textile</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Bike-tour.webp"
                                                alt="Luxury Travels Greece">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Bike Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Art-architecture.webp"
                                                alt="Luxury Travels Italy">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Art Architecture</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Photography-tour.webp"
                                                alt="Luxury Travels Ireland">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Photography Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Walking-tour.webp"
                                                alt="Luxury Travels Ireland">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Walking Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Social-impact.webp"
                                                alt="Luxury Travels Ireland">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Social Impact</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <div class="inspired_box">
                                            <img src="images/little-inspirations/Accessible-tour.webp"
                                                alt="Luxury Travels Ireland">
                                            <a href="https://www.alphonsostories-partners.com/partner-login?From_Url=/experiences"
                                                style="color:white;">
                                                <div class="content">
                                                    <h3>Accessible Tour</h3>
                                                    <p class="read-more color-primary sans-serif"> Read more </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>  
                                </div> --}}

                                <style>
                                    .play-button-wrapper {
                                        position: relative;
                                        top: 0;
                                        left: 0;
                                        right: 0;
                                        bottom: 0;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        width: 100%;
                                        height: auto;
                                        pointer-events: none;

                                        #circle-play-b {
                                            cursor: pointer;
                                            pointer-events: auto;

                                            svg {
                                                width: 70px;
                                                /*height: 100px;*/
                                                fill: #fff;
                                                stroke: #fff;
                                                cursor: pointer;
                                                background-color: rgba(black, 0.2);
                                                border-radius: 50%;
                                                opacity: 0.9;
                                            }
                                        }
                                    }
                                </style>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="litt-videos">
                    <h2 style="margin-bottom:23px;">Little Inspirations By Distinct Destinations</h2>
                    <p>Browse the videos created by our team of constant travellers and some favourites we've discovered
                        along the way.</p>
                </div>
                <div class="col-12" style="padding: 30px 50px;">
                    <div class="res-trav">
                        <div
                            onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                            <div class="play-button-wrapper">
                                <div title="Play video" class="play-gif" id="circle-play-b">
                                    <!-- SVG Play Button -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                        <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                    </svg>
                                </div>
                            </div>
                            <img class="thumb" style="cursor: pointer;" src="video/little-inspirat/chitwan.webp">
                        </div>
                        <div id="thevideo" style="display: none;">
                            <video controls width="100%" height="470px" class="elVideo" loop="loop" autoplay=""
                                playsinline="" muted="" src="{{ $videoData1}}"
                                {{-- src="video/little-inspirat/CHITWAN.mp4"  --}}
                                id="video-slider-1 big-video"></video>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px; margin-bottom: 60px;">
                <div class="col-lg-4">
                    <div class="litt-trav">
                        <div
                            onclick="thevid=document.getElementById('thevideo1'); thevid.style.display='block'; this.style.display='none'">
                            <div class="play-button-wrapper">
                                <div title="Play video" class="play-gif" id="circle-play-b">
                                    <!-- SVG Play Button -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="width:50px;">
                                        <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                    </svg>
                                </div>
                            </div>
                            <img class="thumb" style="cursor: pointer;" src="video/little-inspirat/jodhpur.webp">
                        </div>
                        <div id="thevideo1" style="display: none;">
                            <video controls width="100%" class="elVideo" loop="loop" autoplay="" playsinline=""
                                muted="" src="video/little-inspirat/JODHPUR.mp4"
                                id="video-slider-1 big-video"></video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="litt-trav ">
                        <div
                            onclick="thevid=document.getElementById('thevideo2'); thevid.style.display='block'; this.style.display='none'">
                            <div class="play-button-wrapper">
                                <div title="Play video" class="play-gif" id="circle-play-b">
                                    <!-- SVG Play Button -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="width:50px;">
                                        <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                    </svg>
                                </div>
                            </div>
                            <img class="thumb" style="cursor: pointer;" src="video/little-inspirat/galle.webp">
                        </div>
                        <div id="thevideo2" style="display: none;">
                            <video controls width="100%" class="elVideo" loop="loop" autoplay="" playsinline=""
                                muted="" src="video/little-inspirat/GALLE.mp4"
                                id="video-slider-1 big-video"></video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="litt-trav">
                        <div
                            onclick="thevid=document.getElementById('thevideo3'); thevid.style.display='block'; this.style.display='none'">
                            <div class="play-button-wrapper">
                                <div title="Play video" class="play-gif" id="circle-play-b">
                                    <!-- SVG Play Button -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="width:50px;">
                                        <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                    </svg>
                                </div>
                            </div>
                            <img class="thumb" style="cursor: pointer;" src="video/little-inspirat/paro.webp">
                        </div>
                        <div id="thevideo3" style="display: none;">
                            <video controls width="100%" class="elVideo" loop="loop" autoplay="" playsinline=""
                                muted="" src="video/little-inspirat/PARO.mp4"
                                id="video-slider-1 big-video"></video>
                        </div>
                    </div>
                </div>

            </div>
            <div class="dest-btn">
                <button class="expo"><a href="#">View all videos</a></button>
            </div>
        </div>
    </section>
    <script></script>
    <section>
        <div class="PopShwMnVriBkle" style="display: none;">
            <div class="SurciseSecSwn">
                <div class="clseShw"> <img src="../../www.distinctdestinations.in/asset/icon/closenv.png"> </div>
                <div>
                    <h5>Disclaimar</h5>
                    <p>To Explore our collection, please contact us on <a
                            href="mailto:littleinspirations@distinctdestinations.in">
                            littleinspirations@distinctdestinations.in </a> for the Login and password.</p>
                </div>
            </div>
        </div>
    </section>
    <style>
        .PopShwMnVriBkle,
        .PopShwMnVriBklehmshw {
            position: fixed;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, .8);
            z-index: 10;
            bottom: 0;
            top: 0;
            display: none;
        }

        .PopShwMnVriBkle .SurciseSecSwn,
        .PopShwMnVriBklehmshw .SurciseSecSwn {
            position: absolute;
            width: 390px;
            background: #fff;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            height: 200px;
            display: flex;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .PopShwMnVriBkle .SurciseSecSwn .clseShw,
        .PopShwMnVriBklehmshw .SurciseSecSwn .clseShw {
            position: absolute;
            top: 0;
            right: 13px;
            top: 13px;
            cursor: pointer;
            width: 20px;
        }

        .PopShwMnVriBkle .SurciseSecSwn h5,
        .PopShwMnVriBklehmshw .SurciseSecSwn h5 {
            font-size: 36px;
            font-family: "Playfair Display", serif;
            margin-bottom: 10px;
        }

        .PopShwMnVriBkle .SurciseSecSwn a,
        .PopShwMnVriBklehmshw .SurciseSecSwn a {
            color: #f17011;
            text-decoration: none;
        }
    </style>
    <section class="trips-rsp" style="display:none;">
        <div class="container-fluid">
            <div class="row">
                <div class="about-h">
                    <h2 style="margin-bottom:31px;text-align:center;">Blogs</h2>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 10px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video">
                        <img src="images/home/destinations/india.jpg" alt="about" style="height:400px!important">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="trav-video">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px;">
                <div class="col-lg-4" style="padding-right:0">
                    <div class="trav-video2">
                        <img src="images/home/destinations/india.jpg" alt="about" style="height:300px!important">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="trav-video2">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer start-->
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
