@extends('web-layouts.app')

@section('page-content')

<link href="css/destination.min.css" type="text/css" rel="stylesheet">

<section class="hero" style="position:relative; ">
    <div class="banner">
        <img src="{{$pageData['section1video']??''}}" class="d-block w-100" alt="Luxury Travels Bali">
    </div>
    <div class="container" style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="hero-title" style="text-align:center;">
                    <h2>{{$pageData['section1heading']??""}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trips-bg" style="background:#FFF7F7;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-text">
                    {!! $pageData['section2content']??"" !!}
                </div>
            </div>
        </div>
    </div>
</section>
@foreach($designations as $key=>$designation)
<section class="trips-bg" id="{{$designation->destination_name??''}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 inner-section">
                <div class="about-img1">
                    <img src="{{$designation->destination_name??''}}" alt="about">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 inner-section innner-content">
                <div class="about_main">
                    <div class="about-h">
                        <h2 style="margin-bottom:31px;text-align:left;">{{$designation->destination_name??''}}</h2>
                    </div>
                    <div class="about_p">
                        {!! $designation->content_one??'' !!}
                        <br>
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
                        {!! $designation->content_two??'' !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 inner-section">
                <div class="about-img2">
                    <img src="{{$designation->image_two}}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- <section class="trips-bg" id="nepal">
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
</section> -->


@endsection