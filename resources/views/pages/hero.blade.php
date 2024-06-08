@extends('web-layouts.app')

@section('page-content')
    <link href="css/hero.min.css" type="text/css" rel="stylesheet">


    <style>
        @media only screen and (max-width: 600px) {
            .text-video {
                left: 50% !important;
                right: 50% !important;
            }
        }
    </style>
    <section class="">
        <div class="video video-slider-1">
            <video width="100%" class="elVideo video-slider-1" loop="loop" autoPlay playsInline muted
                src="{{ $pageData['section1video'] }}" id='video-slider-1'></video>
            <div class="text-video hard-responsive">
                <h2><span class="hard-responsive"
                        style="font-size:3rem;font-weight: 400;letter-spacing: 2px;line-height: 1.05;color:white; font-weight: 600; line-height:1.5;">
                        {{ $pageData['section1heading'] }}</span></h2>

            </div>
        </div>
    </section>

    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="trips-text">
                        {!! $pageData['section2title'] !!}
                        <div class="btn_know"><a class="btn_more" href="about-us.html" style="text-decoration:none;">Know
                                More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="destination" style="background:#FFF7F7!important; padding-bottom:40px;">
            <div class="dest-heading">
                <h2 style="margin-bottom:0px!important; margin-top:0px;">Destinations</h2>
            </div>

            <div style="padding-left:0px!important">
                <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="width: 2867px; padding-left: 50px; padding-right: 50px; transform: translate3d(-1729px, 0px, 0px); transition: all 0.25s ease 0s;">



                            <div class="owl-item col-lg-3 col-md-6 col-sm-12 hard-responsive desti-img">
                                <a href="our-destination#india">
                                    <div class="card img-hover1">
                                        <img src="{{ $pageData['section3image1'] }}" alt="vote-for-us">
                                        <div class="h3">{{ $pageData['section3title1'] }}</div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span class="colorWhite" aria-label="Next">›</span></button>
                    </div>
                    <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button>
                    </div>
                </div>
            </div>


            <div class="dest-btn">
                <button class="expo"><a href="our-destination">Explore</a></button>
            </div>
        </div>
    </section>

    <section class="destination" style="padding-top: 55px;padding-bottom: 65px;padding-right:35px;">
        <div class="container-fluid">
            <div class="row" style="padding-left:7px;padding-right:7px;">
                <div class="col-lg-3 col-md-6 col-sm-12" style="position:relative">
                    <div class="inner_img_text1">
                        <h2 style="color:black;text-align: left;">Our Services</h2>
                        <div class="slider_p" style="padding-top: 10px;">
                            <p style="text-align: left; font-size:18px!important;">
                                We offer the most exclusive experiences to guests through
                                our three highly personalised services.
                            </p>
                        </div>
                        <div class="ourser-btn">
                            <button class="expo"><a href="our-servic">Read More</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img">
                    <div class="card">
                        <img src="images/home/luxury-collection.webp" alt="vote-for-us">
                        <a href="our-servic" style="text-decoration:none;" class="hiden">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size: 24px; color:white;">The Luxury Collection</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        Our Luxury Collection is in sync with the expanded
                                        new &quot;three T&#39;s&quot; of luxury: Time, Truth and Trust.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img">
                    <div class="card">
                        <img src="images/home/meetings-and-conferences.webp" alt="vote-for-us">
                        <!--<span class="text" style="font-size: 15px;">MICE</span>-->
                        <a href="our-servic">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size:24px;color:white;">Meeting & Conferences</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        We provide a comprehensive range of ultra-personalised services, including
                                        technological solutions and more.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 hard-responsive desti-img img-hove2 srv-img">
                    <div class="card">
                        <img src="images/home/Incentives.webp" alt="vote-for-us">
                        <a href="our-servic">
                            <div class="offer-slider-btn-expele">
                                <h2 style="font-size: 24px;color:white;">Incentives</h2>
                                <div class="slider_p" style="padding-top: 10px;">
                                    <p style="color:white; font-size:18px!important;">
                                        Our leisure time programmes offer the greatest value for
                                        time and money through a spectrum of thrilling events and
                                        fun activities.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="why-choose">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Why Travel With Far & Beyond</h2>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Heart.svg" class="img-fluid">
                        <h4>Responsible Travel</h4>
                        <div class="slider_p">
                            <p>Only Responsible Travel makes our world a better place. Come share this vision with us.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Philanthropy.svg" class="img-fluid">
                        <h4>In Our Hands</h4>
                        <div class="slider_p">
                            <p>Our fantastic Concierge network ‘far and beyond’ empowers
                                the guest experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_TravelExperts.svg" class="img-fluid">
                        <h4>Travel Experts</h4>
                        <div class="slider_p">
                            <p>We take you only where we have gone, as your comfort is our comfort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="pakage-image text-center">
                        <img src="images/FarAndBeyond_Guide.svg" class="img-fluid">
                        <h4>Our Guarantee</h4>
                        <div class="slider_p">
                            <p>We deliver what we commit, your extended team on- ground creating memorable experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pakage" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-1.html" class="img-fluid">
                    </div>
                    <div class="pakage-text">
                        <p>Lorem Ipsum is</p>
                        <h1>Lorem Ipsum is simply dummy</h1>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pakage-image">
                        <img src="images/pakage-2.html" class="img-fluid">
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

                    <div id="carouselExampleIndicators" style="padding-bottom: 0px !important;" class="carousel slide"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/home/Responsible-travel.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/Responsible-travel.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" alt="image">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev1" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next1" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px;min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        <h2>Inspirational Adventures</h2>
                        <p>
                            Out-of-the ordinary insights go a long way in creating a more immersive experience of the
                            places we visit— and the communities and cultures we encounter in those environs.
                            <br><br>
                            We put the spotlight here on our beautifully packaged mini city guides, a dedicated
                            accommodation series, theme-based itineraries and captivating videos on must-visit
                            destinations. Packed with information, visually inspiring, and driven by evocative insights
                            for the curious traveller, this is one of our most alluring in-house products.

                        </p>
                        <div class="ourser-btn">
                            <br><br>
                            <button class="expo"><a href="littile-inspiration">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="texti-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px; background:#FFF7F7; min-height: 40vw; overflow: hidden;height: 680px;">
                    <div class="texti-inner">
                        <h2>Responsible Travel</h2>
                        <p>
                            Everything we do, to act responsibly in the field of travel, we do it for you and Planet
                            Earth. Our long-term goal to help reduce the carbon footprint is driven by even the smallest
                            footsteps.
                            <br><br>
                            Our words are backed by our deeds on many levels—Far and Beyond is a paperless
                            company-everything is done digitally; we try to use local transport; saying ‘no’ to plastic
                            is in our DNA; respecting communities and their culture is embedded in our work ethos…

                        </p>
                        <div class="ourser-btn">
                            <br><br>
                            <button class="expo"><a href="responsible-travel">Read More</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px; 0px;min-height: 40vw; overflow: hidden;">


                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/home/Responsible-travel.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/Responsible-travel.webp" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" alt="image">
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
    <div class="clear"></div>
    <!--End blog section-->

    <!--End news latter-->


    <section class="our_team">
        <h2 style="margin-top:65px">What They Say</h2>
        {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel" position="relative;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/3.html" alt="">
                    </div>
                    <p class="testimonial">With these few words, would like to mention that, Vinay has been my reliable
                        partner for more than 15 years for the requests of my VIP clients in India, Sri Lanka, Nepal,
                        and Bhutan. He is an exceptional destination manager who understands and meets even the most
                        complex requirements. His deep expertise and extensive knowledge of these destinations ensure
                        unique and memorable experiences for travellers. I highly recommend his services for an
                        authentic and worthwhile exploration of this wonderful region.</p>
                    <p class="overview">
                        <b> Laurence
                        </b> LOCAZUR Travel - Yachting - Cruises<br>
                        Belgium
                    </p>
                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/1.html" alt="">
                    </div>
                    <p class="testimonial">
                        Je travaille avec Vinay depuis plus de 10 ans maintenant, j’apprécie particulièrement son
                        professionnalisme et son efficacité mais aussi sa disponibilité pour le suivi des dossiers.
                        Nous avons l’occasion de travailler ensemble sur l’organisation de voyages assez compliqués avec
                        des clients très exigeants ou avec des demandes originales.
                        En 10 ans de collaboration, tout s’est toujours parfaitement bien passé avec mes clients, je
                        n’ai jamais eu le moindre retour négatif.

                    </p>
                    <p class="overview">
                        <b>Aimée Bon-Hecker</b>Managing Director<br>TERANUI BY TSELANA TRAVEL
                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Plus de 10 ans que Vinay, veille au bonheur de nos hôtes. Notre
                        collaboration prend force grâce à ce supplément d’âme qui fait que chaque voyage en Inde que
                        nous créons devient une féerie, embellis par les conseils avisés que nous recevons pour proposer
                        une nouvelle adresse, un site à ne pas manquer…Et puis il y a ce sens de l’hospitalité et de la
                        courtoisie totalement inné chez Vinay et donne force et sécurité à une collaboration à distance.
                    </p>
                    <p class="overview">
                        <b>Nathalie BUENO</b>Directrice Générale – Managing Director<br>SECRETS DE VOYAGES

                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vinay Dhall is a highly skilled professional with whom I have built a strong
                        relationship over the years.
                        Available at anytime, efficient, enthusiastic and always offering excellent advice.
                        I entrust my clients to him with complete confidence.
                        When we work with such a professional, business becomes easier.
                    </p>
                    <p class="overview">
                        <b>OLIVIER GLASBERG</b>Product Director
                        <br>SUCCES VOYAGE

                    </p>

                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial"> J’ai rencontré Vinay lors notre arrivée en Inde avec notre premier groupe
                        de voyageurs en 2011. Vinay avait construit notre voyage et a veillé sur chaque instant de notre
                        voyage. Un voyage pavé de surprises comme nous n’en avions jamais vécues dans les cadres
                        somptueux des anciens palais choisis avec soin. Et depuis 2011 nous avons toujours gardé contact
                        et un de mes rêves et retourner dans cet incroyable pays ☀️ et laisser à Vinay le soin de
                        construire ce voyage ! </p>
                    <p class="overview">
                        <b>Sylvie ARRIGHI-REVAH</b>Veuve Clicquot
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
        </div> --}}

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/3.html" alt="Image">
                    </div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                        Etiam faucibus
                        mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus,
                        volutpat vel
                        tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview">
                        <b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a>
                    </p>
                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/1.html" alt="">
                    </div>
                    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                        varius quam
                        at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum
                        idac nisl
                        bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    <p class="overview">
                        <b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a>
                    </p>
                </div>
                <div class="carousel-item">
                    <div class="img-box" style="display:none">
                        <img src="../examples/images/clients/2.html" alt="">
                    </div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                        mi suscipit
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
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                        mi suscipit
                        tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse
                        potenti.
                        Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                    <p class="overview">
                        <b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a>
                    </p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    {{-- <script>
        (function($) {
            $('.carousel-item-next').css('transform', 'translateY(100%)');
            $('.carousel-item-prev').css('transform', 'translateY(-100%)');

            $('#carouselExampleIndicators').on('slide.bs.carousel', function(e) {
                var dir = e.direction === 'left' ? 'translateY(-100%)' : 'translateY(100%)';
                $(e.relatedTarget).css('transform', dir);
            });

            $('#carouselExampleIndicators').on('slid.bs.carousel', function(e) {
                $('.carousel-item').css('transform', 'translateY(0)');
            });
        })(jQuery);
    </script> --}}
    <script>
        (function($) {
            $(document).ready(function() {
                $('#carouselExampleIndicators').on('slide.bs.carousel', function(e) {
                    var $next = $(e.relatedTarget);
                    var index = $next.index();
                    var itemsPerSlide = 1;
                    var totalItems = $('.carousel-item').length;

                    if (index >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - index);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });

                $('#carouselExampleIndicators').on('slid.bs.carousel', function(e) {
                    $('.carousel-item').css('transform', 'translateY(0)');
                });
            });
        })(jQuery);
    </script>
@endsection
