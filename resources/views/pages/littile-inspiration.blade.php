@extends('layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <img src="images/home/destination.jpg" class="d-block w-100" alt="Luxury Travels Bali">
        <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#000;">LITTLE INSPIRATIONS</h2>
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
            background: green;
            height: 80vh;
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
            object-fit: cover;
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
    <section class="trips-bg">
        <div class="owl-carousel owl-theme inspired_slider owl-loaded owl-drag">

            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-8813px, 0px, 0px); transition: all 0.25s ease 0s; width: 18566px; padding-left: 50px; padding-right: 50px;">
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/scotland.jpg" alt="Luxury Travels Scotland">
                                <div class="content">
                                    <h3>Scotland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/spain.jpg" alt="Luxury Travels Spain">
                                <div class="content">
                                    <h3>Spain</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/turkey.jpg" alt="Luxury Travels Turkey">
                                <div class="content">
                                    <h3>Turkey</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/uk.jpg" alt="Luxury Travels UK">
                                <div class="content">
                                    <h3>UK</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/australia.jpg" alt="Luxury Travels Australia">
                                <div class="content">
                                    <h3>Australia</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/bora-bora.jpg" alt="Luxury Travels Bora Bora">
                                <div class="content">
                                    <h3>Bora Bora</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/fiji.jpg" alt="Luxury Travels Fiji">
                                <div class="content">
                                    <h3>Fiji</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/argentina.jpg" alt="Luxury Travels Argentina">
                                <div class="content">
                                    <h3>Argentina</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/brazil.jpg" alt="Luxury Travels Brazil">
                                <div class="content">
                                    <h3>Brazil</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/mexico.jpg" alt="Luxury Travels Mexico">
                                <div class="content">
                                    <h3>Mexico</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/peru.jpg" alt="Luxury Travels Peru">
                                <div class="content">
                                    <h3>Peru</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/sri-lanka.jpg" alt="Luxury Travels Sri Lanka">
                                <div class="content">
                                    <h3>Sri Lanka</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/egypt.jpg" alt="Luxury Travels Egypt">
                                <div class="content">
                                    <h3>Egypt</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/kenya-tanzania-rwanda.jpg"
                                    alt="Luxury Travels Kenya - Tanzania - Rawanda">
                                <div class="content">
                                    <h3>Kenya - Tanzania - Rwanda</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/mauritius.jpg" alt="Luxury Travels Mauritius">
                                <div class="content">
                                    <h3>Mauritius</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/morocco.jpg" alt="Luxury Travels Morocco">
                                <div class="content">
                                    <h3>Morocco</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/seychelles.jpg" alt="Luxury Travels Seychelles">
                                <div class="content">
                                    <h3>Seychelles</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/finland.jpg" alt="Luxury Travels Finland">
                                <div class="content">
                                    <h3>Finland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/greece.jpg" alt="Luxury Travels Greece">
                                <div class="content">
                                    <h3>Greece</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/italy.jpg" alt="Luxury Travels Italy">
                                <div class="content">
                                    <h3>Italy</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/ireland.jpg" alt="Luxury Travels Ireland">
                                <div class="content">
                                    <h3>Ireland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/russia.jpg" alt="Luxury Travels Russia">
                                <div class="content">
                                    <h3>Russia</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/scotland.jpg" alt="Luxury Travels Scotland">
                                <div class="content">
                                    <h3>Scotland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/spain.jpg" alt="Luxury Travels Spain">
                                <div class="content">
                                    <h3>Spain</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/turkey.jpg" alt="Luxury Travels Turkey">
                                <div class="content">
                                    <h3>Turkey</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/uk.jpg" alt="Luxury Travels UK">
                                <div class="content">
                                    <h3>UK</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/australia.jpg" alt="Luxury Travels Australia">
                                <div class="content">
                                    <h3>Australia</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/bora-bora.jpg" alt="Luxury Travels Bora Bora">
                                <div class="content">
                                    <h3>Bora Bora</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/fiji.jpg" alt="Luxury Travels Fiji">
                                <div class="content">
                                    <h3>Fiji</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/argentina.jpg" alt="Luxury Travels Argentina">
                                <div class="content">
                                    <h3>Argentina</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/brazil.jpg" alt="Luxury Travels Brazil">
                                <div class="content">
                                    <h3>Brazil</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/mexico.jpg" alt="Luxury Travels Mexico">
                                <div class="content">
                                    <h3>Mexico</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/peru.jpg" alt="Luxury Travels Peru">
                                <div class="content">
                                    <h3>Peru</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/sri-lanka.jpg" alt="Luxury Travels Sri Lanka">
                                <div class="content">
                                    <h3>Sri Lanka</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/egypt.jpg" alt="Luxury Travels Egypt">
                                <div class="content">
                                    <h3>Egypt</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/kenya-tanzania-rwanda.jpg"
                                    alt="Luxury Travels Kenya - Tanzania - Rawanda">
                                <div class="content">
                                    <h3>Kenya - Tanzania - Rwanda</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/mauritius.jpg" alt="Luxury Travels Mauritius">
                                <div class="content">
                                    <h3>Mauritius</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/morocco.jpg" alt="Luxury Travels Morocco">
                                <div class="content">
                                    <h3>Morocco</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/seychelles.jpg" alt="Luxury Travels Seychelles">
                                <div class="content">
                                    <h3>Seychelles</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/finland.jpg" alt="Luxury Travels Finland">
                                <div class="content">
                                    <h3>Finland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/greece.jpg" alt="Luxury Travels Greece">
                                <div class="content">
                                    <h3>Greece</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/italy.jpg" alt="Luxury Travels Italy">
                                <div class="content">
                                    <h3>Italy</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/ireland.jpg" alt="Luxury Travels Ireland">
                                <div class="content">
                                    <h3>Ireland</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 409.667px; margin-right: 10px;">
                        <div class="item">
                            <div class="inspired_box">
                                <img src="images/tours/russia.jpg" alt="Luxury Travels Russia">
                                <div class="content">
                                    <h3>Russia</h3>
                                    <p class="read-more color-primary sans-serif">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot active"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="about-h">
                    <h2 style="margin-bottom:31px;text-align:center;">video</h2>
                </div>
                <div class="col-12" style="padding: 30px 50px;">
                    <div class="res-trav">
                        <video width="100%" controls="controls">
                            <source src="video/v1.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
            <div class="row" style="padding:0px 30px 36px 36px;">
                <div class="col-lg-4">
                    <div class="litt-trav">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="litt-trav">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="litt-trav">
                        <img src="images/home/destinations/india.jpg" alt="about">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="about-h">
                    <h2 style="margin-bottom:31px;text-align:center;">BLOGS</h2>
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
