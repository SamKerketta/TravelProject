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
                src="{{ $pageData['section1video'] ?? '' }}" id='video-slider-1'></video>
            <div class="text-video hard-responsive">
                <h2><span class="hard-responsive"
                        style="font-size:3rem;font-weight: 400;letter-spacing: 2px;line-height: 1.05;color:white; font-weight: 600; line-height:1.5;">
                        {{ $pageData['section1heading'] ?? '' }}</span></h2>

            </div>
        </div>
    </section>

    <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="trips-text">
                        {!! $pageData['section2title'] ?? '' !!}
                        <div class="btn_know"><a class="btn_more" href="about-us" style="text-decoration:none;">Know
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








                <div class="col-9 hard-responsive" style="padding-left:0px!important; width:100%">
                    <div id="service-carousel" class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="width: 4864px !important;">
                                <?php foreach ($destination as $key => $value) { ?>
                                <div class="owl-item owl-item2 active hard-responsive" style="width: 7.8% !important;">
                                    <div class="item">
                                        <a href="{{ 'our-destination#' . $value->destination_name ?? '' }}">
                                            <div class="card img-hover1">
                                                <img src="{{ $value->l_image ?? '' }}"
                                                    alt="{{ $value->destination_name ?? '' }}">
                                                <div class="h3">{!! $value->destination_name ?? '' !!}</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="dest-btn">
                    <button class="expo"><a href="our-destination">Explore</a></button>
                </div>
            </div>
    </section>






    <section class="trips-bg">
        <div class="container-fluid">
            <div class="row">
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

                <style>
                    @media only screen and (max-width: 600px) {
                        .hard-responsive {
                            width: 100% !important;
                        }

                        .col-3 {
                            padding-left: 0px !important;
                        }
                    }
                </style>

                <div class="col-9 hard-responsive" style="padding-left:0px!important; width:75%">
                    <div id="service-carousel2" class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="width: 3344px !important;">



                                <div class="owl-item active hard-responsive servicesSlider" style="width: 12% !important;">
                                    <div class="item" style="border-radius: 10px;">
                                        <?php for ($i = 1; $i <= 5; $i++); {?>
                                        <div class="col-lg-3 col-md-6 col-sm-12 desti-img img-hove2 srv-img">
                                            <div class="card" style="width: 400% !important; border-radius: 10px;">
                                                <div class="offer-slider-btn-expele">
                                                    <h2 style="font-size: 24px; color:white;">The Luxury Collection
                                                    </h2>
                                                    <div class="slider_p" style="padding-top: 10px;">
                                                        <p style="color:white; font-size:18px!important;">
                                                            Our Luxury Collection is in sync with the expanded new
                                                            &quot;three T&#39;s&quot;
                                                            of luxury: Time, Truth and Trust.
                                                        </p>
                                                    </div>
                                                </div>
                                                <img src="images/home/luxury-collection.webp"
                                                    style="width: 500px !important" alt="vote-for-us">
                                                <a href="our-servic" style="text-decoration:none;" class="hiden">

                                                </a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>


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
                            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button> --}}
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $pageData['section6image1'] ?? '' }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $pageData['section6image2'] ?? '' }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $pageData['section6image3'] ?? '' }}" alt="image">
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev carousel-control-prev1" type="hidden"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next1" type="hidden"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12"
                    style="padding: 0px 0px 0px 0px;min-height: 40vw; overflow: hidden;">
                    <div class="texti-inner">
                        {{-- <h2>Inspirational Adventures</h2>
                        <p>
                            Out-of-the ordinary insights go a long way in creating a more immersive experience of the
                            places we visit— and the communities and cultures we encounter in those environs.
                            <br><br>
                            We put the spotlight here on our beautifully packaged mini city guides, a dedicated
                            accommodation series, theme-based itineraries and captivating videos on must-visit
                            destinations. Packed with information, visually inspiring, and driven by evocative insights
                            for the curious traveller, this is one of our most alluring in-house products.

                        </p> --}}

                        {!! $pageData['section6content'] ?? '' !!}
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
                        {{-- <h2>Responsible Travel</h2>
                        <p>
                            Everything we do, to act responsibly in the field of travel, we do it for you and Planet
                            Earth. Our long-term goal to help reduce the carbon footprint is driven by even the smallest
                            footsteps.
                            <br><br>
                            Our words are backed by our deeds on many levels—Far and Beyond is a paperless
                            company-everything is done digitally; we try to use local transport; saying ‘no’ to plastic
                            is in our DNA; respecting communities and their culture is embedded in our work ethos…

                        </p> --}}

                        {!! $pageData['section7content'] ?? '' !!}

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
                            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button> --}}
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $pageData['section7image1'] ?? '' }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $pageData['section7image2'] ?? '' }}" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $pageData['section7image3'] ?? '' }}" alt="image">
                            </div>
                            {{-- <div class="carousel-item">
                                <img src="images/home/little-inspirations.webp" alt="image">
                            </div> --}}
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

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
            {{-- <div style="z-index: 9 !important;"></div> --}}
            <button class="carousel-control-prev" style="z-index: 10; top: 230px !important; " type="button"
                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="z-index: 10; top: 230px !important;" type="button"
                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <style>
            h3 p {
                color: white !important;
            }
        </style>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            // $(document).ready(function() {
            //     $("#service-carousel").owlCarousel({
            //         loop: true,
            //         margin: 10,
            //         nav: true,
            //         responsive: {
            //             0: {
            //                 items: 1
            //             },
            //             600: {
            //                 items: 3
            //             },
            //             1000: {
            //                 items: 4
            //             }
            //         }
            //     });
            // });


            $(document).ready(function() {
                $("#service-carousel").owlCarousel({
                    items: 4, // Number of items you want to display
                    margin: 15,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            });


            // $("#service-carousel2").owlCarousel({
            //     items: 4, // Number of items you want to display
            //     margin: 15,
            //     loop: true,
            //     autoplay: true,
            //     autoplayTimeout: 3000,
            //     autoplayHoverPause: true,
            //     responsive: {
            //         0: {
            //             items: 1
            //         },
            //         600: {
            //             items: 1
            //         },
            //         1000: {
            //             items: 3
            //         }
            //     }
            // });
        </script>
    </section>
@endsection
