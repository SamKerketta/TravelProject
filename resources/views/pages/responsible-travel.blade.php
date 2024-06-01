@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/responsible/Responsible-travel-cover.webp" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top:48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>Responsible Travel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .trips-top {
            padding: 60px 0 20px 0;
        }

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
            font-size: 1rem;
            line-height: 30px;
            text-align: center;
            font-family: "Futura Book" !important;
        }

        .about-text {
            width: 70%;
            margin: auto;
        }

        .about-img img {
            width: 100%;
        }


        .about-h h2 {
            font-size: 3rem;
            font-weight: bold;
        }

        .about-h {
            text-align: left;
        }

        /*responsive travel css start*/
        .res-trav {
            width: 100%;
            max-height: 80vh;
        }

        .res-trav img {
            width: 100%;
            object-fit: cover;

        }

        .zoom-img img {}

        .res-inner {
            overflow: hidden;
            cursor: pointer;
        }

        .res-inner img {
            width: 100%;
            object-fit: cover;
        }

        .res-inner img:hover {
            transform: scale(1.3);
            transform-origin: 50% 50%;
            transition: all .5s ease-in-out
        }

        /*end responsive travel css*/
    </style>
    <section class="trips-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>
                            Responsible Tourism serves as one of the most important bridges between
                            climate change, environmental concerns and communities wherever
                            travellers venture out to explore the world.
                            For a more sustainable future for the travel industry, it is imperative that
                            we put together our collective strengths to combine responsible practices
                            with a desirable guest experience for the global travel community.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="padding: 30px 50px;">
                    <div class="res-trav">
                        <img src="images/responsible/responsible%20travel%20image.webp" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 0px 0px;">
                    <div class="about-text">
                        <p>

                            Responsible Tourism has achieved greater weightage in these past few
                            years. We are seeing how it is now drawing in a rapidly growing community
                            worldwide. That’s because people are recognising, even more strongly, how
                            the initiative aims to reduce the negative imprint on tourism, while
                            simultaneously maximising the benefits for local communities and the
                            environment.

                            Sustainable tourism development with a special focus on giving back to local
                            communities is all about moving in the right direction for the travel industry.
                            But what drives this even more strongly is an integrated and cooperative
                            approach. This cohesive, mindful thinking will touch upon all the key
                            components of this endeavour— including environmentally sustainable,
                            economically beneficial, and culturally respectful practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-12" style="padding: 30px 50px;">-->
                <!--    <div class="res-trav" >-->
                <!--         <img src="images/home/destinations/india.jpg" alt="about">-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12" style="padding:0px 0px 30px 0px;">
                    <div class="about-text">
                        <p>At Far and Beyond we see that these efforts can be further cemented on-
                            ground by strong partnerships with like-minded operators right along the
                            chain all the way to the local level.
                            We are deeply committed to driving this initiative in a meaningful way. This
                            is richly illustrated by inviting guests to participate in local eco-friendly
                            activities; to be mindful of preserving the environment, and to immerse
                            themselves in the delights of the community culture in a non-invasive way.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-rsp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="padding-left:60px">
                    <div class="res-inner">
                        <img src="images/responsible/Responsible-travel.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-6" style="padding-right:60px">
                    <div class="res-inner">
                        <img src="images/responsible/iStock-.webp" alt="about">
                    </div>
                </div>
                <div class="col-12" style="padding: 30px 0px 30px 0px;">
                    <div class="about-text">
                        <p>We aim to inspire our guests with our proactive approach towards giving
                            back to the local community in multiple ways— which includes support
                            for local employment, friendship and cultural tolerance and the protection
                            of their natural environments and wildlife.

                            <br>
                            <br>
                            We strongly believe that this will not only serve as a win-win experience for
                            our guests and the communities they meet on their travels, but also, in a
                            broader context, add that extra push for safeguarding Planet Earth.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer end-->
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
