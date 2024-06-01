@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <div class="banner">
            <img src="images/destinations/Dest-cover.webp" class="d-block w-100" alt="Luxury Travels Bali">
        </div>
        <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2>Destinations</h2>
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
            font-size: 1rem;
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
            width: 70%;
            /* background: red; */
            /* margin: auto; */
            text-align: center;
            margin-top: 5%;
            margin-left: 25%;
            padding: 20px;
            box-sizing: border-box;

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
    <section class="trips-bg" style="background:#FFF7F7;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <p>
                            Our fabulous portfolio of holiday destinations summons up the most alluring foreign experiential
                            travel programs for the discerning visitor. Captured in four of the world’s most enticing
                            countries — India, Bhutan, Nepal and Sri Lanka, are a fantastic array of novel engagements with
                            their history and heritage, people, culture, food and environment. Returning home with numerous
                            stories to tell, our guests reflect how these meaningful learning experiences, out of their
                            comfort zone, have expanded and shaped their worldview.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" id="india">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                    <div class="about-img1">
                        <img src="images/destinations/india.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main">
                        <div class="about-h">
                            <h2 style="margin-bottom:31px;text-align:left;">India</h2>
                        </div>
                        <div class="about_p">
                            <p style="font-size:16px; text-align: center !importent;">
                                The dazzling diversity of India’s matchless cultural splendour is shaped by the grand
                                theatre of its geographic settings. From the glittering 2410-km curving expanse of the
                                snow-mantled Himalaya in the North to the steamy tropical forestlands and coastal expanses
                                in the South, from the hot desert lands in the West to the vivid delta lands of the East,
                                and from the central enclaves of the mighty Deccan Plateau to the verdant stretches of the
                                North East, visitors are spoilt for choice. That’s because each region offers a range of
                                unique travel experiences which distinguish it from the next.

                                <br />
                                <br />
                                Love it or hate it, there’s no denying the pull of this ancient land, brimming over with
                                stunning locales, a sumptuous documentation of its history and heritage, rich seams of
                                cultural beauty, the culinary heritage and the pageantry, yoga and wellness practices —and
                                the warmth and hospitality of its people. With its seamless fusion of the ancient and the
                                contemporary. ‘Incredible India’, you’ll discover, again and again, is truly incredible.

                            </p>
                            <br>

                            <!--<p style="font-size:16px;text-align: center !importent;">-->
                            <!--    <strong>-->
                            <!--    Spray paint drying time can vary based on several-->
                            <!--    factors, including the type-->
                            <!--    </strong>-->
                            <!--</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:20px;text-align:left;font-weight: bold;">Luxury In India</h3>
                            </div>
                            <div class="about_p">
                                <p style="font-size:16px;text-align:left;">
                                    Custom-designed vibrant experiences are at the heart of our private luxury tours of
                                    India. Navigating your way through the fantastic choices of immersive travel can be a
                                    challenge even for the veteran traveller looking for that hitherto hidden ‘discovery’ of
                                    the Indian subcontinent ranked amongst the world’s oldest civilisations.

                                    <br />
                                    <br />
                                    From top-notch hotels to luxury spas in the Himalayas, from luxury lodges in game parks
                                    to amazing heritage palace hotels and private villas, we re-ignite your desire for a
                                    luxury experience even in inhospitable landscapes such as Ladakh and hot desert expanses
                                    of Rajasthan. Luxury train journeys, vintage toy train tours, river cruises past ancient
                                    Hindu shrines and a UNESCO-acclaimed National Park
                                    and camel safaris in moonscape terrain during the Rann of Kutch Festival… these are but
                                    par for the course for our exclusive offerings.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/destinations/india_1.webp" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" id="nepal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                    <div class="about-img1">
                        <img src="images/destinations/nepal.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main">
                        <div class="about-h">
                            <h2 style="margin-bottom:31px;text-align:left;">Nepal</h2>
                        </div>
                        <div class="about_p">
                            <p style="font-size:16px; text-align: center !importent;">
                                Home to eight of the world’s highest mountains, Nepal has emerged as one of the most
                                breathtaking adventure destinations. From summiting Mt Everest to safaris in Chitwan
                                National Park to trekking through its legendary trails, Nepal is an idyllic experiential
                                travel allurement for the adventure buff. Mountain climbing, trekking, river rafting,
                                wildlife spotting, star gazing— this wish list offers an incredible reason to return again
                                and again to this ancient Hindu kingdom in the high Himalaya.

                                <br />
                                <br />
                                The spiritual heritage of Nepal is reflected in its antique Hindu temples, Buddhist shrines
                                and monasteries and array of religious festivals. Its unique worship of Kumari, the virgin
                                goddess has lent wing to Nepal’s superb artisanal heritage as well. From its captivating
                                community interactions to culinary delights, from farm visits to artisanal workshops, Nepal
                                offers a multiple range of deeply engaging holiday experiences.

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
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:20px;text-align:left;font-weight: bold;">Luxury In Nepal</h3>
                            </div>
                            <div class="about_p">
                                <p style="text-align: left;">
                                    The multiple opportunities for exploring those grand Himalayan vistas, its deep-seated
                                    spiritual heritage and community traditions, along with its allure as one of the world’s
                                    top adventure travel countries, make Nepal idyllic for customised luxury experiences.

                                    <br />
                                    <br />
                                    Private tours of the highest order bring you in direct contact with its Hindu and
                                    Buddhist roots through special arrangements with representatives of the shrines and
                                    lamas of the monasteries for their blessings. Our special interfaces with communities
                                    such as the Sherpas, Newar and Tharu provide indelible cross-cultural experiences. Our
                                    expert drivers and guides offer local insights as you observe religious ceremonies and
                                    festivals and explore artisan workshops and traditional bazaars.



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/destinations/nepal_1.webp" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" id="bhutan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                    <div class="about-img1">
                        <img src="images/destinations/bhutan.webp" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main">
                        <div class="about-h">
                            <h2 style="margin-bottom:31px;text-align:left;">Bhutan</h2>
                        </div>
                        <div class="about_p">
                            <p style="font-size:16px; text-align: center !importent;">
                                For years it chose to stay away from the limelight on the world’s tourism arena. Having
                                quietly, and very cautiously opened its doors to the global travelling community Bhutan
                                adheres steadfastly to protecting its natural heritage and cultural roots. Time and again
                                its agenda of checks and balances on the tourism footprint has been to the great advantage
                                of its environs, its people— and the discerning traveller looking for a once-in-a-lifetime
                                experiential holiday.

                                <br />
                                <br />
                                For Bhutan, providing qualitative visitor experiences is of the highest order in this era of
                                climate change. Long regarded for its sustainable living practices, it’s one of the world’s
                                most eco-friendly destinations. From its ancient dzongs to its beautiful Buddhist
                                monasteries, from its gorgeous palaces to its superb museums, from its fabulous chaams to
                                its crafting skills, from the lovely Himalayan trekking trails to its wonderful game parks,
                                Bhutan offers some of the most unique experiential travel memories in the world.


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
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:20px;text-align:left;font-weight: bold;">Luxury In Bhutan</h3>
                            </div>
                            <div class="about_p">
                                <p style="text-align: left;">
                                    Bhutan defines luxury in a very addictive, unique way for the fussy luxury aficionado of
                                    today. Experiential travel in Bhutan is of the most memorable kind, with deeply
                                    enriching interfaces with its stunning natural heritage, its ancient culture and
                                    friendly communities.
                                    <br />
                                    <br />
                                    Unmatched is that rare eco-friendly environment wherever you travel in one of the
                                    world’s greenest Himalayan settings in a deeply satisfying sustainable way. Then there’s
                                    the amazing range of largely uncrowded rural and urban spaces where one is privileged to
                                    enjoy one’s time well-spent.

                                    <br />
                                    <br />
                                    Empowered by our excellent connections our customised luxury tour itineraries take into
                                    account Bhutan’s world-class luxury hotels, hand-picked knowledgeable guides,
                                    experiential artisanal and spiritual interfaces and customised wellness and bespoke
                                    culinary opportunities.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/destinations/bhutan_1.webp" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" id="shrilanka">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                    <div class="about-img1">
                        <img src="images/destinations/srilanka.webp" alt="sri_lanka_2">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main">
                        <div class="about-h">
                            <h2 style="margin-bottom:31px;text-align:left;">Sri Lanka</h2>
                        </div>
                        <div class="about_p">
                            <p style="font-size:16px; text-align: center !importent;">
                                The tiny island with a big heart has been welcoming visitors from around the globe for
                                centuries. One of the most significant factors that have shaped its multi-cultural offerings
                                has been its position as a staging post for international trade on the ancient sea routes.

                                <br />
                                <br />
                                While the colonists, driven by the allure of its spices and tea trade, have left behind
                                their indelible stamp on Sri Lanka, the country has a rich and solid ancestral history and
                                heritage to explore at will. The grand theatre of its ruined cities, its palaces and superb
                                Buddhist temples are a huge draw for travellers. The untrammelled splendour of the pageantry
                                of its festivals is as immersive as the explorations of its fantastic natural heritage of
                                beaches, rainforests and amazing wildlife on land and water.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trips-bg" style="padding-bottom: 60px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section innner-content">
                    <div class="about_main2">
                        <div class="about_main3">
                            <div class="about-h">
                                <h3 style="margin-bottom:20px;text-align:left;font-weight: bold;">Luxury In Sri Lanka</h3>
                            </div>
                            <div class="about_p">
                                <p style="text-align: left;">
                                    Our uber-personalised luxury tours offer the most insightful immersive experience of the
                                    “Spice Island”. From its superb beaches to its gorgeous game parks, you can be assured
                                    of the classiest arrangements for a range of deeply rewarding luxury experiences.
                                    <br />
                                    <br />
                                    Travel sahib-style on a safari; revel in the delights of a luxury spa in a beach town;
                                    stay at a heritage property in the highlands where world-class teas can be observed on
                                    their journey from the garden to a tea cup; private game viewings on land or water,
                                    trips to local artisans and sacred spaces, uncrowded water sports island visits. All
                                    this and more are yours to enjoy. And, everywhere our lively guides
                                    are at hand to deepen your understanding of local communities and their culture.



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                    <div class="about-img2">
                        <img src="images/destinations/srilanka_1.webp" alt="srilanka">
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
