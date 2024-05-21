@extends('web-layouts.app')

@section('page-content')
    <section class="hero" style="position:relative; ">
        <img src="images/home/destination.jpg" class="d-block w-100" alt="Luxury Travels Bali">
        <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-title" style="text-align:center;">
                        <h2 style="font-size:4.5rem;line-height: .8em; color:#000;">CONTACT US</h2>
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

    {{-- <section class="trips-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text">
                        <h2
                            style="font-size:4.5rem;line-height: .8em; color:#000; text-align:center;text-transform:uppercase;">
                            design to be updated</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- new section for the for --}}
    <section>
        <div class="ArDressShwToppar" id="DwnSl">
            <div class="container">
                <div class="Cl12AddrsSec">
                    <div class="Cl4ddrsSec">
                        <div class="AddrCnntSec">
                            <h3>Corporate Office Address</h3>
                            <!--<p>Alt F Private Office 2, Tower B Suncity success Tower, Golf course Ext. Road Sector-65 Gurugram, Haryana, 122018</p>-->
                            <!--<p>123- AltF, 7th Floor, Tower D, Global Business Park, Mehrauli-Gurgaon Rd, Sikanderpur, Sector 26, Gurugram, Haryana 122002</p>-->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae aspernatur voluptatum
                                hic!</p>
                            <div class="GetDrsec">
                                <p><a href="https://g.page/distinct-destinations?share" target="_blank"> Get Directions <img
                                            src="images/icons/down-arrowyelow.png" /> </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="Cl4ddrsSec">
                        <div class="AddrCnntSec">
                            <h3>Write us</h3>
                            <p><a href="mailto:info@distinctdestinations.in"> Loremipsum@adnjas.in </a></p>
                        </div>
                    </div>
                    <div class="Cl4ddrsSec">
                        <div class="AddrCnntSec">
                            <h3>Call Us</h3>
                            <!--<p><a href="tel:+911244224162"> +91-124-4224-162</a>/<a href="tel:+911244224163">63</a>/<a href="tel:+911244224164">64</a><br /><a href="tel:+919971466955"> +91 9971-466-955</a></p>-->
                            <p><a href="tel:+919818401791"> +91 1234 378 283</a><br /><a href="tel:+919971466955"> +91
                                    3276-328-328</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ftlgoCnt"><img src="asset/icon/contlogo.png" /></div>
        </div>
    </section>
    <section>
        <div class="QickEnquiry">
            <div class="IqryFrmBx-Wppr">
                <div class="Clm-sm-7">
                    <div class="IqryFrmBx">
                        <div class="title">
                            <h2>Quick Inquiry</h2>
                        </div>
                        <div class="IqryFrm-Wppr">
                            <div id="ContentPlaceHolder1_PnlNOrmalinquiry"
                                onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ContentPlaceHolder1_btnNormal&#39;)">

                                <div id="ContentPlaceHolder1_UpdatePanelNOrmalinquiry">

                                    <fieldset>
                                        <input name="ctl00$ContentPlaceHolder1$txtNOrmalinquiryName" type="text"
                                            id="ContentPlaceHolder1_txtNOrmalinquiryName" class="FtrInpt"
                                            style="background:none" oncopy="return false" onpaste="return false"
                                            oncut="return false" autocomplete="off" />
                                        <label class="InptTxtName">First Name</label>
                                    </fieldset>
                                    <fieldset>
                                        <input name="ctl00$ContentPlaceHolder1$txtLastName" type="text"
                                            id="ContentPlaceHolder1_txtLastName" class="FtrInpt" style="background:none"
                                            oncopy="return false" onpaste="return false" oncut="return false"
                                            autocomplete="off" />
                                        <label class="InptTxtName">Last Name</label>
                                    </fieldset>
                                    <fieldset>
                                        <input name="ctl00$ContentPlaceHolder1$txtNOrmalinquiryEmail" type="text"
                                            id="ContentPlaceHolder1_txtNOrmalinquiryEmail" class="FtrInpt"
                                            style="background:none" oncopy="return false" onpaste="return false"
                                            oncut="return false" autocomplete="off" />
                                        <label class="InptTxtName"> Email </label>
                                    </fieldset>
                                    <fieldset>
                                        <input name="ctl00$ContentPlaceHolder1$txtNOrmalinquiryPhone" type="text"
                                            maxlength="10" id="ContentPlaceHolder1_txtNOrmalinquiryPhone" class="FtrInpt"
                                            style="background:none" oncopy="return false" onpaste="return false"
                                            oncut="return false" autocomplete="off" onkeypress="return numeralsOnly(event)"
                                            pattern="[0-9]*" inputmode="numeric" />
                                        <label class="InptTxtName"> Phone </label>
                                    </fieldset>

                                    <fieldset class="FlWdth">
                                        <textarea name="ctl00$ContentPlaceHolder1$textarea1" id="ContentPlaceHolder1_textarea1" class="FtrInpt"></textarea>
                                        <label class="InptTxtName">Message</label>
                                    </fieldset>
                                    <div class="ComBtnBx">
                                        <a onclick="return pagecheckNOrmalinquiryMaster();"
                                            id="ContentPlaceHolder1_btnNormal" class="Cmn-Btn"
                                            href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnNormal&#39;,&#39;&#39;)">Submit
                                            <img src="images/icons/down-arrowshwn.png" /></a>
                                    </div>


                                </div>
                                <div id="ContentPlaceHolder1_UpdateProgressNOrmalinquiry" class="progress_aeodc"
                                    style="display:none;">

                                    <span class="ibrandoxWeb31 ibrandoxWeb32">Please Wait...&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </div>

                            </div>
                        </div>
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



    {{-- script section  --}}
    <script src="../ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
    <script src="asset/js/fontawesome-all.min.js"></script>
    <script src="asset/js/perfect-scrollbar.js"></script>
    <script src="asset/js/owl.carousel.js"></script>
    <script type="text/javascript" src="asset/js/jquery.cssslider.js"></script>
    <script src="asset/js/common.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdgtKv7SriM13lFaja6Kg0DM4yZXkpoRA"></script>
    <script src="asset/js/Validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        //.1 Numbers only
        function numeralsOnly(evt) {
            evt = (evt) ? evt : event;
            var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
            if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode != 43)) {
                alert("Enter Digit only in this field!");
                return false;
            }
            return true;
        }

        //2. Subscribetion
        function pagecheckSubscribeMaster() {
            if (!req(document.getElementById("txtEmailIDSubscribe"), "Please enter your emailid."))
                return false;
            if (!isEmail(document.getElementById("txtEmailIDSubscribe"), "Should be  valid emailid."))
                return false;
        }

        //3. Normal inquiry
        function pagecheckNOrmalinquiryMaster() {
            var txtOTP = document.getElementById("ContentPlaceHolder1_txtNOrmalinquiryPhone").value;
            if (!req(document.getElementById("ContentPlaceHolder1_txtNOrmalinquiryName"), "Please enter your first name."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtLastName"), "Please enter your last name."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtNOrmalinquiryEmail"), "Please enter your emailid."))
                return false;
            if (!isEmail(document.getElementById("ContentPlaceHolder1_txtNOrmalinquiryEmail"), "Should be  valid emailid."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtNOrmalinquiryPhone"), "Please enter your Phone no.."))
                return false;
            if (txtOTP.length < 10) {
                alert("Please enter 10 digits OTP.");
                return false;
            }
            if (!req(document.getElementById("ContentPlaceHolder1_textarea1"), "Please enter your msg."))
                return false;
        }

        //3. Normal inquiry
        function pagecheckPaymentinquiryMaster() {
            var txtOTP = document.getElementById("ContentPlaceHolder1_txtPaymentPhone").value;
            if (!req(document.getElementById("ContentPlaceHolder1_txtPaymentfirstName"), "Please enter your first name."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtPaymentLastName"), "Please enter your Last name."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtPaymentPhone"), "Please enter your Phone no.."))
                return false;
            if (txtOTP.length < 10) {
                alert("Please enter minimum 10 digits phone.");
                return false;
            }
            if (!req(document.getElementById("ContentPlaceHolder1_txtPaymentEmail"), "Please enter your emailid."))
                return false;
            if (!isEmail(document.getElementById("ContentPlaceHolder1_txtPaymentEmail"), "Should be  valid emailid."))
                return false;
            if (!chkValue(document.getElementById("ContentPlaceHolder1_DDPaymentCurrency"), 0, "Select Currency."))
                return false;
            if (!req(document.getElementById("ContentPlaceHolder1_txtPaymentAmount"), "Please enter your amount."))
                return false;
        }
    </script>
    <script type="text/javascript">
        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 0.2, {
                x: -((mouse.clientX - window.innerWidth / 2) / resistance),
                y: -((mouse.clientY - window.innerHeight / 2) / resistance)
            });
        };
        $(document).mousemove(function(e) {
            // $(".background").parallax(-30, e);
            $(".cloud1").parallax(10, e);
            $(".cloud2").parallax(20, e);
            $(".cloud3").parallax(30, e);
        });

        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 0.2, {
                x: -((mouse.clientX - window.innerWidth / 2) / resistance),
                y: -((mouse.clientY - window.innerHeight / 2) / resistance)
            });
        };

        $(document).mousemove(function(e) {
            // $(".background").parallax(-30, e);
            $(".cloud1").parallax(10, e);
            $(".cloud2").parallax(20, e);
            $(".cloud3").parallax(30, e);
        });

        $(function() {
            $("#mySlider1").AnimatedSlider({
                prevButton: "#btn_prev1",
                nextButton: "#btn_next1",
                visibleItems: 5,
                infiniteScroll: true,
            });

            $("#mySlider2").AnimatedSlider({
                prevButton: "#btn_prev2",
                nextButton: "#btn_next2",
                visibleItems: 5,
                infiniteScroll: true
            });
        });
    </script>
    <script type="text/javascript">
        var locations = [
            ['Nepal', 27.700769, 85.300140, 14, '#loc2'],
            ['Ahmedabad', 23.0059618, 72.5591327, 14, '#loc3'],
            ['Mumbai', 18.924043, 72.823788, 14, '#loc4'],
            ['Bengaluru', 12.9476028, 77.5725637, 14, '#loc5'],
            ['Chennai', 13.0384572, 80.2776654, 14, '#loc6'],
            ['Bhutan', 27.5314, 90.4359, 14, '#loc7'],
            ['Kolkata', 22.5458099, 88.3502851, 14, '#loc8'],
            ['<h4> United Kingdom & Ireland ( MICE) </h4> <h5> Ms.Nikki Buse Michell </h5>  <p><a href="mailto:duindia@distinctdestinations.in">  duindia@distinctdestinations.in  </a> </p>',
                55.3617609, -3.4433238, 14, '#loc9'
            ],
            ['<h4>  United Kingdom & Ireland ( MICE)  </h4> <h5>  Ms.Nikki Buse Michell  </h5> <p><a href="mailto:duindia@distinctdestinations.in">  duindia@distinctdestinations.in </a> </p>',
                51.903614, -8.468399, 14, '#loc10'
            ],
            //['<h4>   Brazil   </h4> <h5> Ms. Julienne Gananian </h5> <p>Brazil Experts Bureau</p>  <p><a href="mailto:brazil@distinctdestinations.in">  Brazil@distinctdestinations.in  </a> </p>', -9.3474154, -58.6519044, 14, '#loc11'],
            //['<h4> Sweden  (Finland, Denmark, Scandinavia & Norway)  </h4> <h5>  Mr. Paul Sikic  </h5> <p><a href="mailto:scandinavia@distinctdestinations.in">  Scandinavia@distinctdestinations.in  </a> </p>', 59.334591, 18.063240, 14, '#loc12'],
            ['<h4>  Australia & New Zealand ( MICE)   </h4> <h5>  Ms. Donna Kessler   </h5> <p> Tourism Portfolio Pty Limited </p><p> <a href="mailto:australia@distinctdestinatios.in">  Australia@distinctdestinatios.in   </a> </p>',
                -35.473469, 149.012375, 14, '#loc13'
            ],
            ['<h4>  Germany, Austria and Switzerland    </h4> <h5>  Ms. Donna Kessler </h5> <p> Tourism Portfolio Pty Limited /<p><p><a href="mailto:australia@distinctdestinatios.in">    Australia@distinctdestinatios.in </a> </p>',
                48.210033, 16.363449, 14, '#loc14'
            ],
            ['<h4>  Germany, Austria and Switzerland    </h4> <h5>  Ms.Claudia Majunke </h5> <p> Majunke International sales </p><p><a href="mailto:germany@distinctdestinations.in"> Germany@distinctdestinations.in  </a> </p>',
                46.204391, 6.143158, 14, '#loc15'
            ],
            ['<h4>  North America & Canada    </h4> <h5>  Renate Graham </h5> <p> Graham International </p><p><a href="mailto:nac@distinctdestinations.in"> nac@distinctdestinations.in  </a> </p>',
                48.547622, -106.019531, 4, '#loc15_1'
            ],
            ['<h4>  Germany, Austria and Switzerland    </h4> <h5>  Ms.Claudia Majunke </h5> <p> Majunke International sales </p> <p> <a href="mailto:germany@distinctdestinations.in"> Germany@distinctdestinations.in  </a> </p>',
                52.520008, 13.404954, 14, '#loc16'
            ],
            //['<h4>  LATIN AMERICA    </h4> <h5>  Carlota Dadamo </h5> <p> International BTB </p> <p> <a href="mailto:connect@distinctdestinations.in"> connect@distinctdestinations.in  </a> </p>', -38.419264, -63.5989206, 14, '#loc144'],

            ['<h4> Latin America, Brazil and Europe </h4> <h5>  Paulina Giovagnoli </h5> <p> <a href="mailto:paulina@distinctdestinations.in"> paulina@distinctdestinations.in  </a> </p>',
                -7.4042175, -57.8112231, 14, '#loc145'
            ],

            ['Srilanka', 6.927079, 79.861244, 14, '#loc17'],
            ['Delhi (NCR)', 28.644800, 77.216721, 14, '#loc18'],
            ['Agra', 27.176670, 78.008072, 14, '#loc19'],
            ['Jaipur', 26.922070, 75.778885, 14, '#loc20'],
            ['jodhpur', 26.263863, 73.008957, 14, '#loc21'],
            ['Udaipur', 24.571270, 73.691544, 14, '#loc22'],
            ['Varanasi', 25.321684, 82.987289, 14, '#loc23'],
            ['Goa', 15.496777, 73.827827, 14, '#loc24'],
            ['Cochin', 9.931233, 76.267303, 14, '#loc25'],
            ['Periyar', 9.58392, 77.118293, 14, '#loc26'],
            ['Madurai', 9.939093, 78.121719, 14, '#loc27'],
            ['Khajuraho', 24.8478, 79.93344, 14, '#loc28'],
            ['Trivandrum', 8.524139, 76.936638, 14, '#loc29'],
        ];
        var map_style = [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#c5c3c3"
                }]
            },
            {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#000000"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#000000"
                }]
            },
            {
                "featureType": "administrative.neighborhood",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#181818"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "road",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#2c2c2c"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#8a8a8a"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#373737"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#3c3c3c"
                }]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#4e4e4e"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "transit",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#3d3d3d"
                }]
            }
        ];

        var zumSet = 0;
        if ($(window).width() <= 1366) {
            zumSet = 4.7
        } else {
            zumSet = 4.5;
        }
        var map = new google.maps.Map(document.getElementById('map_2'), {
            zoom: zumSet,
            center: new google.maps.LatLng(22.2916419, 66.1098353),
            styles: map_style,
            streetViewControl: false,
            backgroundColor: "#222",
            mapTypeControl: false,
            mapTypeControl: false,
            disableDefaultUI: true,
            panControl: true,
            zoomControl: true,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        if ($(window).width() <= 1366) {
            map.panBy(100, 150);
        } else {
            map.panBy(140, 60);
        }
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: 'asset/icon/pinmn.png'
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                    $('.c2_as_city ul li[data-infow-ref="' + locations[i][4] + '"]').trigger('click');
                }
            })(marker, i));
        }
        setTimeout(function() {
            $('.map_era2').addClass('map_era2_act');
            $('.abs_cnt_intr').addClass('abs_cnt_intr_act');
        }, 1200);
        $('.c2_as_city ul li').click(function() {
            $(this).addClass('act_cit').siblings().removeClass('act_cit');
            map.setCenter(new google.maps.LatLng($(this).attr('data-lat'), $(this).attr('data-long')));
            map.setZoom(parseInt($(this).attr('data-zoom')));
            if ($(this).attr('data-infow-ref') == "#loc0") {
                $('.abs_adr_m_inf').removeClass('abs_adr_m_inf_act');
                $('.rel_cnt_int').removeClass('rel_cnt_int_fade');
            } else {
                $($(this).attr('data-infow-ref')).addClass('abs_adr_m_inf_act').siblings().removeClass(
                    'abs_adr_m_inf_act');
                $('.rel_cnt_int').addClass('rel_cnt_int_fade');
                $('.back2Ho').addClass('back2Ho_act');
            }
            $('[data-c3-tb-ref]').removeClass('act_c3_htb');
        });
        $('[data-trig-ref]').click(function() {
            $('.c2_as_city ul li[data-infow-ref="' + $(this).attr('data-trig-ref') + '"]').trigger('click');
        });
    </script>
    <script type="text/javascript">
        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 0.2, {
                x: -((mouse.clientX - window.innerWidth / 2) / resistance),
                y: -((mouse.clientY - window.innerHeight / 2) / resistance)
            });
        };
        $(document).mousemove(function(e) {
            // $(".background").parallax(-30, e);
            $(".cloud1").parallax(10, e);
            $(".cloud2").parallax(20, e);
            $(".cloud3").parallax(30, e);
        });
    </script>
    <!-- script end-->
    </div>


    <script type="text/javascript">
        //<![CDATA[
        Sys.Application.add_init(function() {
            $create(Sys.UI._UpdateProgress, {
                "associatedUpdatePanelId": null,
                "displayAfter": 500,
                "dynamicLayout": true
            }, null, null, $get("UpdateProgress2"));
        });
        Sys.Application.add_init(function() {
            $create(Sys.UI._UpdateProgress, {
                "associatedUpdatePanelId": "ContentPlaceHolder1_UpdatePanelNOrmalinquiry",
                "displayAfter": 500,
                "dynamicLayout": true
            }, null, null, $get("ContentPlaceHolder1_UpdateProgressNOrmalinquiry"));
        });
        Sys.Application.add_init(function() {
            $create(Sys.UI._UpdateProgress, {
                "associatedUpdatePanelId": "UpdatePanel1Newsletter",
                "displayAfter": 500,
                "dynamicLayout": true
            }, null, null, $get("UpdateProgress1Newsletter"));
        });
        //]]>
    </script>
@endsection
