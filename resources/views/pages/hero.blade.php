@extends('layouts.app')

@section('page-content')
    {{-- first section --}}
    <section class="">
        <div class="video">
            <!--<video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src=" https://www.distinctdestinations.in/asset/video/ddvideos.mp4" id='video-slider-1'></video>-->
            <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="video/v1.mp4"
                id='video-slider-1'></video>
            <!--<img src="slider/banner-1.jpg" alt="banner-1">-->
            <div class="text-video">
                <h2><span
                        style="ont-size: 3.75rem;font-weight: 400;letter-spacing: 3px;line-height: 1.05;text-transform:uppercase;color:white">
                        YOUR DEPENDABLE PARTNER FOR
                        EXCLUSIVE AND INNOVATIVE LUXURY!
                    </span></h2>

            </div>
        </div>
    </section>

    {{-- second section --}}
    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="trips-text">
                        <h2 style="margin-top:25px;margin-bottom:10px;">
                            <spna class="titleheading">THE LUXURY TRAVEL EXPERTS</spna>
                        </h2>
                        <p>It’s the era of limitless information about the wonders of
                            the world. It’s not easy to navigate your way to the choices
                            you really want to make. That’s where we come in. To create
                            a space within which you need to focus on only the very best
                            luxury travel — just for you. Being deeply immersed in the
                            world of travel we are super-skilled at anticipating even your
                            unspoken desires. That’s because we have a strong belief in
                            communications and its power in the people-to-people
                            connect. It&#39;s why you can rely on us for the most awesome
                            luxury travel adventures in a borderless world.
                            <br />
                            <br />
                            Let’s Go. Far and Beyond. Together.
                        </p>
                        <div class="btn_know"><a class="btn_more" href="#" style="text-decoration:none;">KNOW
                                US MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- third section --}}
    <section class="destination" style="background:#FFF3EF;padding-top:30px;padding-bottom: 65px;">
        <div class="dest-heading">
            <h2>Our Destinations</h2>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:10px;padding-right:10px; ">
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hover">
                    <img src="images/home/india.jpg" alt="vote-for-us">
                    <!--<section class="botom"></section>-->
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-weight:400;">INDIA</h2>
                        <div class="slider_p">
                            <p style="font-size:0.85rem;">
                                History, heritage, culture and the modern avatar of this
                                ancient land defines the quintessential “India Experience”</p>
                        </div>
                        <button class="expo"><a href="#">EXPLORE</a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hover">
                    <img src="images/home/nepal%20home.jpg" alt="vote-for-us">
                    <!--<button class="expo"><a href="">EXPLORE</a></button>-->
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-weight:400;">NEPAL</h2>
                        <div class="slider_p">
                            <p style="font-size:0.85rem;">
                                Home to many of the world’s highest mountains, it is still
                                deeply grounded in ancient traditions.</p>
                        </div>
                        <button class="expo"><a href="#">EXPLORE</a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hover">
                    <img src="images/home/bhutan%20home.jpg" alt="vote-for-us">
                    <!--<button class="expo"><a href="">EXPLORE</a></button>-->
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-weight:400;">BHUTAN</h2>
                        <div class="slider_p">
                            <p style="font-size:0.85rem;">
                                This remote Himalayan kingdom reminds us how sustainable
                                practices can drive travel.
                            </p>
                        </div>
                        <button class="expo"><a href="#">EXPLORE</a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hover">
                    <img src="images/home/sri%20lanka%20home.jpg" alt="vote-for-us">
                    <!--<button class="expo"><a href="">EXPLORE</a></button>-->
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-weight:400;">SRI LANKA</h2>
                        <div class="slider_p">
                            <p style="font-size:0.85rem;">
                                The ‘Spice Island’ illustrates, in the most imaginative ways,
                                why— “Small is Beautiful”.</p>
                        </div>
                        <button class="expo"><a href="#">EXPLORE</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- wtf --}}
    <div class="why-choose">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Why travel with Far and Beyond:</h2>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Heart.svg" class="img-fluid">
                        <h4>Responsible Travel</h4>
                        <div class="slider_p">
                            <p>Only Responsible Travel makes our world a better place.
                                Come share this vision with us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Philanthropy.svg" class="img-fluid">
                        <h4>In our hands</h4>
                        <div class="slider_p">
                            <p>Our fantastic Concierge network ‘far and beyond’ empowers
                                the guest experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_TravelExperts.svg" class="img-fluid">
                        <h4>Travel Experts</h4>
                        <div class="slider_p">
                            <p>We take you only where we have gone, as your comfort is our comfort</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Guide.svg" class="img-fluid">
                        <h4>Finest Guides</h4>
                        <div class="slider_p">
                            <p>The intimate knowledge and the immersive approach of our
                                private and specialist guides bring invaluable insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="destination" style="background:#FFF3EF;padding-top: 55px;padding-bottom: 65px;">
        <div class="container-fluid">
            <div class="row" style="padding-left:7px;padding-right:7px;">
                <div class="col-lg-3 col-md-6 col-sm-12" style="position:relative">
                    <div class="inner_img_text">
                        <h2 style="color:black;text-align: left;">Our Services:</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="font-weight:bold; color:black;text-align: left;">
                                We offer the most exclusive experiences to guests through
                                our three highly personalised services:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2">
                    <img src="images/home/luxury%20collection%20home.jpg" alt="vote-for-us">
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-size: 20px; color:white;">The Luxury Collection</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="color:white">
                                Our Luxury Collection is in sync with the expanded
                                new &quot;three T&#39;s&quot; of luxury: Time, Truth and Trust.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2">
                    <img src="images/home/meetingandconf.jpg" alt="vote-for-us">
                    <!--<span class="text" style="font-size: 15px;">MICE</span>-->
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-size:20px;color:white;">meeting & conferences</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="color:white">
                                We provide a comprehensive range of customisable services,
                                including technological solutions and more, for a richly
                                value-added experience to the secure long-term growth of
                                your business
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2">
                    <img src="images/home/incentives.jpg" alt="vote-for-us">
                    <div class="offer-slider-btn-expele">
                        <h2 style="font-size: 20px;color:white;">Incentives</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="color:white">
                                Our leisure time programmes offer the greatest value for
                                time and money through a spectrum of thrilling events and
                                fun activities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="pakage" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-1.jpg" class="img-fluid">
                    </div>
                    <div class="pakage-text">
                        <p>Lorem Ipsum is</p>
                        <h1>Lorem Ipsum is simply dummy</h1>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-2.jpg" class="img-fluid">
                    </div>
                    <div class="pakage-text">
                        <p>Lorem Ipsum is</p>
                        <h1>Lorem Ipsum</h1>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="texti-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px; 0px;min-height: 40vw; overflow: hidden;">
                    <img src="images/home/little%20inspirations%20F%20and%20B.jpg" alt="image">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px;min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        <h2>Inspirational Adventures</h2>
                        <p>
                            Out- of- the ordinary insights go a long way in creating a
                            more immersive experience of the places we visit— and the
                            communities and cultures we encounter in those environs.
                            We put the spotlight here on our beautifully packaged mini
                            city guides, a dedicated accommodation series, theme-based
                            itineraries and captivating videos on must-visit destinations.
                            Packed with information, visually inspiring, and driven by
                            evocative insights for the curious traveller, this is one of our
                            most alluring in-house products.
                        </p>
                        <span style=" margin-top: 20px;
        display: inline-block;">
                            <a href="#" class="enquri" style="cursor: pointer;border-radius:5px;">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="texti-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px; background:#FFF3EF; min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        <h2>Responsible Travel</h2>
                        <p>Everything we do, to act responsibly in the field of travel, we
                            do it for you and Planet Earth. Our long-term goal to help
                            reduce the carbon footprint is driven by even the smallest
                            footsteps. Our words are backed by our deeds on many
                            levels—Far and Beyond is a paperless company-everything is
                            done digitally; we try to use local transport; saying ‘no’ to
                            plastic is in our DNA; respecting communities and their
                            culture is embedded in our work ethos…</p>
                        <span style=" margin-top: 20px;
        display: inline-block;">
                            <a href="#" class="enquri" style="cursor: pointer;border-radius:5px;">Read More</a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px; min-height: 40vw; overflow: hidden;">
                    <img src="images/home/responsible%20travel%20home.jpg" alt="image">
                </div>
            </div>
        </div>
    </section>


    <div class="trips-slider" style="display:none;">
        <div class="trips-text1">
            <h3>OUR BLOGS</h3>
            <h2>Inspiration For Travelers</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/festive-holiday.jpg"
                        alt="Luxury Travels South Africa">
                    <div class="box-content">
                        <h3 class="title">Festive Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/textile-art-and-craft.jpg"
                        alt="Luxury Travels Dubai Abu Dhabi">
                    <div class="box-content">
                        <h3 class="title">Testile, Arts and Craft</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/food-holiday.jpg"
                        alt="Luxury Travels Maldives">
                    <div class="box-content">
                        <h3 class="title">Food Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/Untitled-design-(2).jpg"
                        alt="Luxury Travels Switzerland">
                    <div class="box-content">
                        <h3 class="title">Wildlife Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/MYS-multi-activity.jpg"
                        alt="Luxury Travels Paris">
                    <div class="box-content">
                        <h3 class="title">Multi-Active Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/positive-impact.jpg"
                        alt="Luxury Travels Japan">
                    <div class="box-content">
                        <h3 class="title">positive Impact Travel</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="box">
                    <img src="../../www.alphonsostories.com/AlphonSoStoriesImages/TourCategoryImage/wheelchair.jpg"
                        alt="Luxury Travels China">
                    <div class="box-content">
                        <h3 class="title">Wheelchair Accessible Holidays</h3>
                        <span class="post">
                            <a href="#">Know More</a>
                        </span>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="category"></div>
                    <h5 class="blog-t">Learn how to find and book the best food tours</h5>
                    <div class="comment">
                        <span>07 May 2024</span>
                        <span style="margin-left:40px;"> 0 Comment</span>
                    </div>
                </div>
            </div>
            <!--<div class="box">-->
            <!--<img src="images/1/hongkong-travels.jpg" alt="Luxury Travels Hongkong, Makau">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">HONGKONG MACAU</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/singapore-travels.jpg" alt="Luxury Travels Singapore">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">SINGAPORE</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/malaysia-travels.jpg" alt="Luxury Travels Malaysia">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">MALAYSIA</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/vietnam-travels.jpg" alt="Luxury Travels Vietnam">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">VIETNAM</h3>-->
            <!--<span class="post"><a href="#">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/thailand-travels.jpg" alt="Luxury Travels Thailand">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">THAILAND</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/usa-travels.jpg" alt="Luxury Travels USA">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">USA</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/canada-travels.jpg" alt="Luxury Travels Canada">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">CANADA</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="box">-->
            <!--<img src="images/1/new-zealand-travels.jpg" alt="Luxury Travels New Zealand">-->
            <!--<div class="box-content">-->
            <!--<h3 class="title">NEW ZEALAND</h3>-->
            <!--<span class="post"><a href="">Know More</a></span>-->
            <!--</div>-->
            <!--</div>-->
        </div>
        <!--<div style="text-align: center;">-->
        <!--    <a href="" class="btn btn-outline-success" style="width:200px;">View All</a>-->
        <!--</div>-->
    </div>
    <div class="clear"></div>
    <!--End blog section-->

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

    <!--End news latter-->
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
