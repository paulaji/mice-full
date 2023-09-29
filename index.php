<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('functions.php');
$events   = json_decode( file_get_contents('data/events.json'), true);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Mice Events International</title>
    <link rel="stylesheet" href="./fonts/font_stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="./bootstrap-5.2.0/scss/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/mobilenew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        .span3 {

            will-change: transform;
        }
    </style>

<body>
    <div class="fluid_div">
        <div class="container-fluid">
            <div class="row">
         
                <div class="col-md-12 col-xs-12">

                    <div class="sidebar_wrap">
                        <div class="side-menu">
							<nav class="navbar navbar-expand-lg bg-light">
								<div class="container-fluid">
									<a class="navbar-brand lang_ar" href="#">Arabic</a>
									<button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<i class="bi bi-text-left"></i>
									</button>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="nav flex-column navbar-nav me-auto mb-2 mb-lg-0 deskt_menu">
											<li class="nav-item">
												<a class="nav-link" href="#Contact">Contact</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#Services">Services</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#About">About</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#Work">The Work</a>
											</li>
											<li class="nav-item">
												<a class="nav-link first-nav active" href="#Home">Home</a>
											</li>
										</ul> 

										<!---------Mobile Menu---------->
										<ul class="nav flex-column navbar-nav me-auto mb-2 mb-lg-0 mob_menu">
											<li class="nav-item">
												<a class="nav-link first-nav active" href="#Home">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#Work">The Work</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#About">About</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#Services">Services</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#Contact">Contact</a>
											</li>
										</ul> 
										<!---------Mobile Menu---------->

									</div> 
								</div>      
							</nav>
						</div>
                    </div>
                    
                    <div id="content">
                        <section id="Home" class=" section">
                            <div class="row">
                                <div class="col-xxl-12 header_wrap">
                                    <div class="header">
                                        <a href="#">English</a>
                                        <a href="#">Arabic</a>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <h1>
                                        <img style="height: 80vh;" src="./images/Logo.gif">
                                    </h1>
                                </div>
                            </div>
                        </section>
                        

                        <main class="main " id="hscroll">
                            <div class="panel  panel2 o-scroll">
                                <div class="row">
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="o-scroll-outer">
                                            <div class="o-scroll_left desk_trns">
                                                <h2 class="m_t20">
                                                    <span class="">Building events,</span><br>
                                                    <span class="">framing</span><br>
                                                    <span class="">dreamscapes.</span>
                                                </h2>
                                                <h3 class="m40">
                                                    to create strong <br>
                                                    brands impression.
                                                </h3>
                                            </div>
                                            <div class="o-scroll_left ipsGrid_span7 ipsType_right mob_trns">
                                                <h2 class="m_t20 gs_reveal">
                                                    <span class="">Building events,</span><br>
                                                    <span class="">framing</span><br>
                                                    <span class="">dreamscapes.</span>
                                                </h2>
                                                <h3 class="m40 gs_reveal">
                                                    to create strong <br>
                                                    brands impression.
                                                </h3>
                                            </div>
                                            <div class="scrollouter" id="style-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="para-1">
                                                            MICE International is a leading event management company with an extensive 
                                                            portfolio of game-changing initiatives for governments, corporations, and civil 
                                                            society organisations. We excel in going beyond event management and design, 
                                                            transforming perspectives and shifting views through our events. Specialising 
                                                            in international large scale events, we craft compelling opening and closing 
                                                            ceremonies,  
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="para-1">
                                                            sports and large-scale conferences and events that include captivating stories of 
                                                            our clients, leaving a lasting impact on attendees. At MICE International, we are 
                                                            designers of dreams, creators and storytellers. Our dedication to excellence and 
                                                            innovation makes us a trusted partner for creating transformative experiences that 
                                                            resonate with audiences locally, regionally and worldwide.  
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-md-7">
                                        <div class="scroll_right vd_rt">
                                            
                                            <video width="400" height="" loop="true" autoplay="autoplay" controls muted>
                                                <source src="images/Abu Dhabi Tour.mp4" type="video/mp4">
                                                <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="move-this-fix">
                                    <div class="move-this">
                                        <span class="rotating-text hidden">FUN.COLLABORATIVE.FLEXIBLE.SUPPORTIVE.</span>
                                        <span class="rotating-animation"></span>
                                    </div>
                                </div>
                            </div>
                            <section class="artwork_area  panel  panel3" id="Work">
                                <div class="art_work an_text">
                                    <h2 class="c-brand_name c-brand marquee" id="text1">
                                        <span class="span1 marquee__inner">THE WORK</span>
                                    </h2>
                                </div>
                                <div class="artwork_main scrollbar" id="style-3">
                                    <ul class="list force-overflow">
                                        <?php
                                        foreach ( $events as $event ) {
                                            $achievements   = explode(PHP_EOL, $event['MICE Achievements']);
                                            ?>
                                            <li>
                                                <button class="list-heading">
                                                    <h3>
                                                        <?=$event['Event Name']?>
                                                    </h3>
                                                </button>
                                                <div class="list-text">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-md-4 col-sm-12">
                                                        <h4><?=$event['Where']?> / Date : <?=$event['When']?></h4>
                                                            <p>
                                                                <?=$event['Summary of the event']?>
                                                            </p>
                                                            <ul>
                                                                <?php 
                                                                foreach( $achievements as $achievement ) { ?>
                                                                    <li><?=$achievement;?></li>
                                                                    <?php
                                                                } ?>
                                                            </ul>
                                                            <div class="sm_lk">
                                                                <a href="#"><img src="./images/facebook.svg"></a>
                                                                <a href="#"><img src="./images/twitter.svg"></a>
                                                                <a href="#"><img src="./images/linkedIn.svg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-9 col-md-8 col-sm-12">
                                                            <div class="main_gal">
                                                                <div class="container_gal">
                                                                    <?php 
                                                                    if ( array_key_exists( 'media_path', $event ) ) {
                                                                        $media_path     = $event['media_path'];
                                                                        $images = glob($media_path . "/*.jpg");
                                            
                                                                        foreach($images as $image) { ?>
                                                                            <div class="card-out">
                                                                                <div class="card-image">
                                                                                <a href="<?=$image?>" data-fancybox="gallery" data-caption="Gallery">
                                                                                    <img src="<?=$image?>" alt="$event['Event Name']">
                                                                                </a>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </section>

                            <!-- Transition 1 -->
                            <section class="text_anm intro slide--0 panel  panel4 desk_trns" id="slide-0">
                                <div class="intro__content">
                                    <h2 class="intro__title intro__title_1">
                                        <!--<line class="line1"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Realising stories</line>-->
                                        <line class="line2">Realising stories</line>
                                        <line class="line3">of the dreamt and </line>
                                        <line class="line4">the unseen..</line>
                                        <span class="line14">
                                            Visions become <br>
                                            tangible here.
                                        </span>
                                    </h2>
                                </div>
                            </section>
                            <section class="text_anm intro slide--0 panel  panel4 mob_trns" id="slide-0">
                                <div class="intro__content ipsGrid_span7 ipsType_right">
                                    <h2 class="intro__title gs_reveal">
                                        <!--<line class="line1"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Realising stories</line>-->
                                        <line class="line2">Realising stories</line>
                                        <line class="line3">of the dreamt and </line>
                                        <line class="line4">the unseen..</line>
                                        <span class="line14">
                                            Visions become <br>
                                            tangible here.
                                        </span>
                                    </h2>
                                </div>
                            </section>
                            <section id="About" class="panel panel5">
                                <div class="artwork_area about_area" id="">
                                    <div class="art_work about_head an_text">

                                        <h2 class="c-brand_name c-brand marquee" id="text2">
                                            <span class="span2 marquee__inner">ABOUT US</span>
                                        </h2>

                                    </div>
                                    <div class="artwork_main artwork_main2 scrollbar about_mob" id="style-3">
                                        <div class="about_main ipsType_left">
                                            <div class="row">
                                                <div class="col-xxl-12 col-md-12">
                                                    <h3 class="gs_reveal">
                                                        Crafting tomorrow's <br>
                                                        innovations.
                                                    </h3>
                                                    <p>
                                                        Powerful storytelling using visually stimulating <br>
                                                        effects and making a mark on minds.
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="para-1">
                                                                Founded in 2011,  our skilled team of creators, visionary designers, and 
                                                                meticulous project managers have been immersed in the event management 
                                                                industry. With a deep understanding of the GCC market, we firmly believe 
                                                                that events serve as the perfect canvas for the seamless fusion of art 
                                                                and business, where creativity intertwines with planning.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="para-1">
                                                                What sets us apart is our unwavering capacity to envision events beyond 
                                                                their present form. We anticipate every “what if” scenario with meticulous 
                                                                precision, allowing us to plan beyond traditional boundaries. We produce and 
                                                                conceptualise events that don’t just elevate standards, but create standards 
                                                                and set new trends. Our work in this dynamic industry serves to unite people 
                                                                in the pursuit of remarkable achievements.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="col-xxl-4 col-md-4">
                                                    <div class="ipsGrid_span5 gs_reveal gs_reveal_fromRight">
                                                        <img src="./images/about_img.svg">
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-8 col-md-12">
                                                    <h3 class="client_head">CLIENTS & PARTNERS</h3>
                                                    <div class="row">
                                                        <div class="client_in">
                                                            <div class="client">
                                                                <span><img src="images/cl_1.png"></span>
                                                                <span><img src="images/cl_2.png"></span>
                                                                <span><img src="images/cl_3.png"></span>
                                                                <span><img src="images/cl_4.png"></span>
                                                                <span><img src="images/cl_5.png"></span>
                                                                <span><img src="images/cl_6.png"></span>
                                                                <span><img src="images/cl_7.png"></span>
                                                                <span><img src="images/cl_8.png"></span>
                                                                <span><img src="images/cl_9.png"></span>
                                                                <span><img src="images/cl_10.png"></span>
                                                                <span><img src="images/cl_11.png"></span>
                                                                <span><img src="images/cl_12.png"></span>
                                                                <span><img src="images/cl_13.png"></span>
                                                                <span><img src="images/cl_15.png"></span>
                                                                <span><img src="images/cl_16.png"></span>
                                                                <span><img src="images/cl_17.png"></span>
                                                                <span><img src="images/cl_19.png"></span>
                                                                <span><img src="images/cl_20.png"></span>
                                                                <span><img src="images/cl_21.png"></span>
                                                                <span><img src="images/cl_22.png"></span>
                                                                <span><img src="images/cl_23.png"></span>
                                                            </div>
                                                            <div class="togl_arw my_animation">
                                                                <img src="./images/arrow-down.svg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="text_anm intro slide--1 panel  panel6 desk_trns" id="slide-1">
                                <div class="intro__content">
                                    <h2 class="intro__title intro__title_2">
                                        <!-- <line class="line1"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Sculpting motion,</line> -->
                                        <line class="line12">Sculpting motion,</line>
                                        <line class="line13">making dreams</line>
                                        <line class="line4">move.</line>
                                        <span class="line15 trans_2">
                                            Experiences that <br>
                                            echo dreams.
                                        </span>
                                    </h2>
                                </div>
                            </section>

                            <section class="text_anm intro slide--1 panel  panel6 mob_trns" id="slide-1">
                                <div class="intro__content ipsGrid_span7 ipsType_right">
                                    <h2 class="intro__title gs_reveal">
                                        <!-- <line class="line1"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Sculpting motion,</line> -->
                                        <line class="line12">Sculpting motion,</line>
                                        <line class="line13">making dreams move.</line>
                                        <!-- <line class="line4">making dreams move.</line> -->
                                        <span class="line15 trans_2">
                                            Experiences that echo dreams.
                                        </span>
                                    </h2>
                                </div>
                            </section>

                            <section id="Services" class="services artwork_area panel  panel7">
                                <div class="contact_head art_work an_text">
                                    <h2 class="c-brand_name c-brand marquee" id="text3">
                                        <span class="span3 marquee__inner">SERVICES</span>
                                    </h2>
                                </div>
                                <div class="artwork_main service_main scrollbar" id="style-3">
                                    <div class="expand_wrap dest_services">
                                        <div class="expand_in scrollbar" id="style-3">
                                            <div class="img_wrap">
                                                <img src="./images/Contentcreation2.jpg">
                                                <h4>
                                                    Content<br>
                                                    Creation
                                                </h4>
                                            </div>
                                            <div class="expand_cont">
                                                <img src="./images/Contentcreation_large.jpg">
                                                <h4>Content Creation</h4>
                                                <p>
                                                    At MICE International, we thoroughly explore your brand and identity, delving deep 
                                                    into the needs of your customer base, in order to craft compelling content that 
                                                    resonates with your target audience. Our team of experienced creators and 
                                                    strategists works tirelessly to ensure the production of an impactful and 
                                                    unforgettable experience that is bound to bring you tremendous success.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/Eventsolutions2 1.jpg">
                                                <h4>
                                                    Event<br>
                                                    Management
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/Eventsolutions_large.jpg">
                                                <h4>Event Management</h4>
                                                <p>
                                                    Our comprehensive event management services encompass a wide range of essential 
                                                    elements to ensure every aspect of your event is meticulously planned and 
                                                    flawlessly executed. These services include:
                                                </p>
                                                <ul class="list_ul">
                                                    <li>Event planning</li>
                                                    <li>Project management</li>
                                                    <li>Operational management</li>
                                                    <li>Strategy</li>
                                                    <li>Production</li>
                                                    <li>Project Design</li>
                                                    <li>Concept creation</li>
                                                    <li>Content Creation</li>
                                                    <li>Guest management</li>
                                                    <li>Programming</li>
                                                    <li>Branding</li>
                                                    <li>Marketing</li>
                                                    <li>Event ideation</li>
                                                    <li>Event consultancy</li>
                                                    <li>Set design</li>
                                                    <li>Sound and lighting design</li>
                                                    <li>Experiential design</li>
                                                    <li>Technology</li>
                                                    <li>Product launch</li>
                                                    <li>Gala dinners</li>
                                                    <li>Opening and closing ceremonies</li>
                                                    <li>Retail experiences</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/Eventtechnology.jpg">
                                                <h4>
                                                    Retail <br>
                                                    Experiences
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/Eventtechnology_large.jpg">
                                                <h4>Retail Experiences</h4>
                                                <p>
                                                    MICE International is the premier destination for crafting exceptional and unforgettable 
                                                    retail events. Our portfolio boasts successful collaborations with luxury boutiques, 
                                                    high-end jewellery, clothing and footwear brands, and renowned sports labels. 
                                                    From dazzling product launches to enticing promotions, joyous celebrations and 
                                                    captivating window-themed designs, we ensure that your brand’s vision comes 
                                                    to life with an unparalleled flair. When you choose Mice International, you 
                                                    gain access to a comprehensive suite of services meticulously designed to 
                                                    exceed your expectations:
                                                </p>
                                                <ul class="list_ul">
                                                    <li>Ribbon-cutting and opening ceremonies</li>
                                                    <li>Design of the setup venue, stage, and branding elements</li>
                                                    <li>Projection shows, setup design, decoration, sound and lighting</li>
                                                    <li>Video animations</li>
                                                    <li>Branding</li>
                                                    <li>Full event management</li>
                                                    <li>Pop-up booths</li>
                                                    <li>Entertainment and workshop activities for adults and kids</li>
                                                    <li>Cocktail setup</li>
                                                    <li>Guest/crowd management</li>
                                                    <li>Interactive , technology advanced experiences</li>
                                                </ul>
                                                <p>
                                                    We are a leading company in organising top international sporting events, with 
                                                    a unique focus on hosting events within local settings. Notable examples include 
                                                    the Saudi Tour and Dubai Tour, which were adapted to showcase the region’s cultural 
                                                    richness while meeting global standards. Our team has extensive experience in 
                                                    handling players, athletes and sport production. We are dedicated to creating 
                                                    unforgettable experiences that blend international excellence with the essence 
                                                    of host locations. Our proven track record and our passion make us the ideal 
                                                    partner for bringing sporting events to life in captivating destinations.
                                                </p>
                                                <p>Our portfolio includes major events such as: </p>
                                                <ul class="list_ul">
                                                    <li>Dubai Sports Conference ( editions 6,7,8,9,10 & 11)</li>
                                                    <li>Globe Soccer International Awards</li>
                                                    <li>Sport Accord</li>
                                                    <li>UAE Tour 2016 Routes and Jerseys unveiling</li>
                                                    <li>Saudi Tour ( 1st and 3rd edition)</li>
                                                    <li>The 12th Dubai International Symposium for Sports Creativity</li>
                                                    <li>Dubai Tour</li>
                                                    <li>AbuDhabi tour</li>
                                                    <li>UAE tour</li>
                                                    <li>FUTSAL UAE sport championship</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/Biddvlpmt1.jpg">
                                                <h4>
                                                    Bid<br>
                                                    Development
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/Biddvlpmt2.jpg">
                                                <h4>Bid Development</h4>
                                                <p>
                                                    We understand the significance of a successful bidding process, and we are 
                                                    here to assist you every step of the way. With our wealth of experience in 
                                                    designing, developing and submitting bids for both private and public sectors, 
                                                    we bring a comprehensive and efficient methodology to ensure your bid stands 
                                                    out. Our expertise spans from the initial conception to the delivery of a 
                                                    final ballot process, encompassing the following key components:
                                                </p>
                                                <ul class="list_ul">
                                                    <li>Business Plan</li>
                                                    <li>Feasibility study</li>
                                                    <li>Compliance with legal requirements</li>
                                                    <li>Implementation strategy</li>
                                                    <li>Development plans</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/project-management.jpg">
                                                <h4>
                                                    Project <br>
                                                    Management
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/project-management_large.jpg">
                                                <h4>Project Management</h4>
                                                <p>
                                                    At MICE International, we pride ourselves in offering comprehensive project management 
                                                    services that encompass every stage of your event's lifecycle, from conception to 
                                                    immaculate execution. With our extensive experience, we navigate the complexities 
                                                    of event management, ensuring every detail aligns flawlessly and delivering 
                                                    exceptional experiences to both new and returning clients. From coordinating 
                                                    multiple stakeholders to orchestrating seamless logistics, our team is 
                                                    well-versed in handling unforeseen circumstances, employing a proactive 
                                                    approach to troubleshoot any potential issues before they arise. We meticulously 
                                                    prioritise every aspect, considering timelines, budgets, resources, and dependencies 
                                                    to ensure project success.
                                                </p>
                                                <p>
                                                    We collaborate closely with you, we grasp your vision, objectives, and unique 
                                                    requirements. Through effective project management methodologies, we mitigate 
                                                    risks, streamline processes, and optimise efficiency, driving your project 
                                                    seamlessly forward.
                                                </p>
                                                <p>
                                                    We navigate the complexities of event management, ensuring every detail aligns 
                                                    flawlessly. From coordinating multiple stakeholders to orchestrating seamless 
                                                    logistics. Our team is well-versed in handling unforeseen circumstances, 
                                                    employing a proactive approach to troubleshoot any potential issues before 
                                                    they arise. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/Forum1.jpg">
                                                <h4>
                                                    Forum & <br>
                                                    Conference<br>
                                                    Management
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/Forum1_large.jpg">
                                                <h4>Forum and Conference Management</h4>
                                                <p>
                                                    We take immense pride in our expertise as global conference planners, offering 
                                                    unparalleled forum and conference management services. Our comprehensive services 
                                                    include opening and closing ceremonies, programming, speaker management, content 
                                                    creation and event space design. We strive to infuse creativity and innovation in 
                                                    your events. We ensure that every element aligns with your vision and objectives 
                                                    and helps build an environment fostering network opportunities, while optimising 
                                                    costs and enhancing attendee satisfaction.
                                                </p>
                                                <p>Our range of services includes:</p>
                                                <ul class="list_ul">
                                                    <li>Program development</li>
                                                    <li>Financial analysis/Budget services</li>
                                                    <li>Operation management</li>
                                                    <li>Execution of targeted marketing activities</li>
                                                    <li>VIP guest management</li>
                                                    <li>On-site support</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/event-technology.jpg">
                                                <h4>
                                                    Event <br>
                                                    Technology
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/event-technology_large.jpg">
                                                <h4>Event Technology</h4>
                                                <p>
                                                    We are industry leaders in utilising cutting-edge technology tools to create 
                                                    transformative and engaging event experiences. Our primary goal is to enhance 
                                                    audience engagement, facilitate communication, provide real-time updates, and 
                                                    unlock potentials. Through experiential design, we integrate technology into events, 
                                                    offering interactive presentations, augmented reality experiences, and various 
                                                    immersive elements. By combining technology and experiential design, we set new 
                                                    standards for events that transcend traditional boundaries and exceed expectations 
                                                    through a fusion of advanced technologies, artistic forms as well as a variety of 
                                                    sound, visual and digital mediums, installations, and performances.
                                                </p>
                                                <p>Some of the key technologies we incorporate into our event experiences include:</p> 
                                                <ul class="list_ul">
                                                    <li>
                                                        Event Applications: We develop customised event applications that serve as 
                                                        a central hub for attendees and as an interactive platform for communication 
                                                        and real-time updates.
                                                    </li>
                                                    <li>
                                                        Augmented and Virtual Reality: We harness the power of augmented reality (AR) 
                                                        and virtual reality (VR) technologies to create immersive and interactive 
                                                        experiences. These technologies can be utilised for virtual tours, product 
                                                        demonstrations, interactive games and immersive storytelling, enhancing the 
                                                        overall event experience.
                                                    </li>
                                                    <li>
                                                        Live streaming: Live streaming allows you to increase event visibility and  
                                                        engage with a global audience,  irrespective of geographical limitations.
                                                    </li>
                                                </ul>                                              
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/travel-service.jpg">
                                                <h4>
                                                    Travel <br>
                                                    Services
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/travel-service_large.jpg">
                                                <h4>Travel Services</h4>
                                                <p>
                                                    Since 2016, MICE Le Voyage has been dedicated to providing exceptional travel 
                                                    services to over 15,000 individuals, ensuring easy, seamless, and stress-free 
                                                    journeys. Our experienced team at Le Voyage inspires and tailors trips to meet 
                                                    your precise needs, resulting in a perfect getaway. Whether for business or 
                                                    pleasure, we serve as your dedicated travel advocate, nurturing your travel 
                                                    curiosity and enriching your life through transformative journeys, no matter
                                                     where your adventures take you.
                                                </p>
                                                <p>
                                                    We offer an exceptional range of comprehensive services for your business trips, 
                                                    ensuring a seamless and high-quality experience:
                                                </p>
                                                <ul class="list_ul">           
                                                    <li>24/7 Travel Counselling</li>
                                                    <li>365 Emergency Travel Service</li>
                                                    <li>Detailed Itinerary Planning</li>
                                                    <li>High-Quality Service</li>
                                                    <li>Budget-Friendly Flight and Hotel Options</li>
                                                    <li>Flight Check-In Assistance</li>
                                                    <li>Data-Saving Tools</li>
                                                </ul>
                                                <p>
                                                    For Travel for Fun, we specialise in designing unforgettable experiences through 
                                                    our unique travel packages. Our custom journeys encompass flights, hotels, 
                                                    transportation, and on-site activities, ensuring every aspect of your trip is 
                                                    tailored to create lasting memories. Some of our specialised services include:
                                                </p>
                                                <ul class="list_ul">
                                                    <li>Sports and Adventure Trips</li>
                                                    <li>Corporate Account Management</li>
                                                    <li>Wellness and Life Coaching Retreats</li>
                                                    <li>Accessible Tours for Travelers with Disabilities</li>
                                                    <li>Kid Training Camps</li>
                                                    <li>Culinary Road Trips</li>
                                                    <li>Meetup and Single-Friendly Holidays</li>
                                                </ul>
                                                <p>
                                                    At MICE Le Voyage, we are dedicated to creating exceptional travel experiences that 
                                                    exceed your expectations. Let us take care of your travel needs, ensuring your 
                                                    journeys are unforgettable and filled with joy.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="expand_in">
                                            <div class="img_wrap">
                                                <img src="./images/ceremonies.jpg">
                                                <h4>
                                                    Ceremonies
                                                </h4>
                                            </div>
                                            <div class="expand_cont scrollbar" id="style-3">
                                                <img src="./images/ceremonies_large.jpg">
                                                <h4>Ceremonies</h4>
                                                <p>
                                                    Storytelling takes centre stage and creativity knows no boundaries. At MICE International we 
                                                    take pride in crafting awe-inspiring opening and closing ceremonies that transcend the 
                                                    ordinary, leaving audiences spellbound and immersed in unforgettable experience. Our 
                                                    expertise lies in weaving captivating thematics into each event, painting a vivid 
                                                    narrative that resonates with hearts and minds alike. From the brilliance of light 
                                                    design to the intricacy of costume, the symphony of music to the spectacle of mesmerizing 
                                                    show concepts. Every element harmoniously combines to create an enchanting spectacle. Our 
                                                    comprehensive services cover everything from concept creation and theme design to event 
                                                    production and management. We handle stage setup, branding, workshop and tour organisation, 
                                                    entertainment, and opening and closing ceremonies. Our portfolio includes cultural festivals, 
                                                    sports events, gala dinners, entertainment shows, marketing gatherings, and product launches.
                                                </p>
                                                <p>
                                                    As leading event management experts, we infuse innovation and artistry into each 
                                                    production, ensuring your event becomes an indelible memory etched in time. It is 
                                                    during these ceremonies that  dreams come to life, and possibilities to reflect the 
                                                    extraordinary are boundless.
                                                </p>
                                                <p>
                                                    storytelling takes center stage and creativity knows no bounds. At MICE International we 
                                                    take pride in crafting awe-inspiring opening and closing ceremonies that transcend the 
                                                    ordinary, leaving audiences spellbound and immersed in unforgettable experiences. Our 
                                                    expertise lies in weaving captivating thematics into each event, painting a vivid 
                                                    narrative that resonates with hearts and minds alike. From the brilliance of light 
                                                    design to the intricacy of costume, the symphony of music to the spectacle of 
                                                    mesmerizing show concepts – every element harmoniously combines to create an enchanting 
                                                    spectacle. As leading event management experts, we infuse innovation and artistry 
                                                    into each production, ensuring your event becomes an indelible memory etched in time.
                                                    it is during these ceremonies that  dreams come to life, and possibilities to reflect 
                                                    the extraordinary are boundless.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mob_services">
                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/Contentcreation2_Mobile.jpg">
                                            <h4>
                                                Content Creation
                                            </h4>
                                        </button>
                                    
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/Contentcreation_large.jpg">
                                                    <h4>Content Creation</h4>
                                                    <p>
                                                        At MICE International, we thoroughly explore your brand and identity, delving deep 
                                                        into the needs of your customer base, in order to craft compelling content that 
                                                        resonates with your target audience. Our team of experienced creators and 
                                                        strategists works tirelessly to ensure the production of an impactful and 
                                                        unforgettable experience that is bound to bring you tremendous success.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/Eventsolutions2 1_Mobile.jpg">
                                            <h4>
                                                Event Management
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/Eventsolutions_large.jpg">
                                                    <h4>Event Management</h4>
                                                    <p>
                                                        Our comprehensive event management services encompass a wide range of essential 
                                                        elements to ensure every aspect of your event is meticulously planned and 
                                                        flawlessly executed. These services include:
                                                    </p>
                                                    <ul class="list_ul">
                                                        <li>Event planning</li>
                                                        <li>Project management</li>
                                                        <li>Operational management</li>
                                                        <li>Strategy</li>
                                                        <li>Production</li>
                                                        <li>Project Design</li>
                                                        <li>Concept creation</li>
                                                        <li>Content Creation</li>
                                                        <li>Guest management</li>
                                                        <li>Programming</li>
                                                        <li>Branding</li>
                                                        <li>Marketing</li>
                                                        <li>Event ideation</li>
                                                        <li>Event consultancy</li>
                                                        <li>Set design</li>
                                                        <li>Sound and lighting design</li>
                                                        <li>Experiential design</li>
                                                        <li>Technology</li>
                                                        <li>Product launch</li>
                                                        <li>Gala dinners</li>
                                                        <li>Opening and closing ceremonies</li>
                                                        <li>Retail experiences</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/Eventtechnology_Mobile.jpg">
                                            <h4>
                                                Retail Experiences
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/Eventtechnology_large.jpg">
                                                    <h4>Retail Experiences</h4>
                                                    <p>
                                                        MICE International is the premier destination for crafting exceptional and unforgettable 
                                                        retail events. Our portfolio boasts successful collaborations with luxury boutiques, 
                                                        high-end jewellery, clothing and footwear brands, and renowned sports labels. 
                                                        From dazzling product launches to enticing promotions, joyous celebrations and 
                                                        captivating window-themed designs, we ensure that your brand’s vision comes 
                                                        to life with an unparalleled flair. When you choose Mice International, you 
                                                        gain access to a comprehensive suite of services meticulously designed to 
                                                        exceed your expectations:
                                                    </p>
                                                    <ul class="list_ul">
                                                        <li>Ribbon-cutting and opening ceremonies</li>
                                                        <li>Design of the setup venue, stage, and branding elements</li>
                                                        <li>Projection shows, setup design, decoration, sound and lighting</li>
                                                        <li>Video animations</li>
                                                        <li>Branding</li>
                                                        <li>Full event management</li>
                                                        <li>Pop-up booths</li>
                                                        <li>Entertainment and workshop activities for adults and kids</li>
                                                        <li>Cocktail setup</li>
                                                        <li>Guest/crowd management</li>
                                                        <li>Interactive , technology advanced experiences</li>
                                                    </ul>
                                                    <p>
                                                        We are a leading company in organising top international sporting events, with 
                                                        a unique focus on hosting events within local settings. Notable examples include 
                                                        the Saudi Tour and Dubai Tour, which were adapted to showcase the region’s cultural 
                                                        richness while meeting global standards. Our team has extensive experience in 
                                                        handling players, athletes and sport production. We are dedicated to creating 
                                                        unforgettable experiences that blend international excellence with the essence 
                                                        of host locations. Our proven track record and our passion make us the ideal 
                                                        partner for bringing sporting events to life in captivating destinations.
                                                    </p>
                                                    <p>Our portfolio includes major events such as: </p>
                                                    <ul class="list_ul">
                                                        <li>Dubai Sports Conference ( editions 6,7,8,9,10 & 11)</li>
                                                        <li>Globe Soccer International Awards</li>
                                                        <li>Sport Accord</li>
                                                        <li>UAE Tour 2016 Routes and Jerseys unveiling</li>
                                                        <li>Saudi Tour ( 1st and 3rd edition)</li>
                                                        <li>The 12th Dubai International Symposium for Sports Creativity</li>
                                                        <li>Dubai Tour</li>
                                                        <li>AbuDhabi tour</li>
                                                        <li>UAE tour</li>
                                                        <li>FUTSAL UAE sport championship</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/Biddvlpmt1_Mobile.jpg">
                                            <h4>
                                                Bid Development
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/Biddvlpmt2.jpg">
                                                    <h4>Bid Development</h4>
                                                    <p>
                                                        We understand the significance of a successful bidding process, and we are 
                                                        here to assist you every step of the way. With our wealth of experience in 
                                                        designing, developing and submitting bids for both private and public sectors, 
                                                        we bring a comprehensive and efficient methodology to ensure your bid stands 
                                                        out. Our expertise spans from the initial conception to the delivery of a 
                                                        final ballot process, encompassing the following key components:
                                                    </p>
                                                    <ul class="list_ul">
                                                        <li>Business Plan</li>
                                                        <li>Feasibility study</li>
                                                        <li>Compliance with legal requirements</li>
                                                        <li>Implementation strategy</li>
                                                        <li>Development plans</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/project-management_Mobile.jpg">
                                            <h4>
                                                Project Management
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/project-management_large.jpg">
                                                    <h4>Project Management</h4>
                                                    <p>
                                                        At MICE International, we pride ourselves in offering comprehensive project management 
                                                        services that encompass every stage of your event's lifecycle, from conception to 
                                                        immaculate execution. With our extensive experience, we navigate the complexities 
                                                        of event management, ensuring every detail aligns flawlessly and delivering 
                                                        exceptional experiences to both new and returning clients. From coordinating 
                                                        multiple stakeholders to orchestrating seamless logistics, our team is 
                                                        well-versed in handling unforeseen circumstances, employing a proactive 
                                                        approach to troubleshoot any potential issues before they arise. We meticulously 
                                                        prioritise every aspect, considering timelines, budgets, resources, and dependencies 
                                                        to ensure project success.
                                                    </p>
                                                    <p>
                                                        We collaborate closely with you, we grasp your vision, objectives, and unique 
                                                        requirements. Through effective project management methodologies, we mitigate 
                                                        risks, streamline processes, and optimise efficiency, driving your project 
                                                        seamlessly forward.
                                                    </p>
                                                    <p>
                                                        We navigate the complexities of event management, ensuring every detail aligns 
                                                        flawlessly. From coordinating multiple stakeholders to orchestrating seamless 
                                                        logistics. Our team is well-versed in handling unforeseen circumstances, 
                                                        employing a proactive approach to troubleshoot any potential issues before 
                                                        they arise. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/Forum1_Mobile.jpg">
                                            <h4>
                                                Forum & Conference Management
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/Forum1_large.jpg">
                                                    <h4>Forum & Conference Management</h4>
                                                    <p>
                                                        We take immense pride in our expertise as global conference planners, offering 
                                                        unparalleled forum and conference management services. Our comprehensive services 
                                                        include opening and closing ceremonies, programming, speaker management, content 
                                                        creation and event space design. We strive to infuse creativity and innovation in 
                                                        your events. We ensure that every element aligns with your vision and objectives 
                                                        and helps build an environment fostering network opportunities, while optimising 
                                                        costs and enhancing attendee satisfaction.
                                                    </p>
                                                    <p>Our range of services includes:</p>
                                                    <ul class="list_ul">
                                                        <li>Program development</li>
                                                        <li>Financial analysis/Budget services</li>
                                                        <li>Operation management</li>
                                                        <li>Execution of targeted marketing activities</li>
                                                        <li>VIP guest management</li>
                                                        <li>On-site support</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/event-technology_Mobile.jpg">
                                            <h4>
                                                Event Technology
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/event-technology_large.jpg">
                                                    <h4>Event Technology</h4>
                                                    <p>
                                                        We are industry leaders in utilising cutting-edge technology tools to create 
                                                        transformative and engaging event experiences. Our primary goal is to enhance 
                                                        audience engagement, facilitate communication, provide real-time updates, and 
                                                        unlock potentials. Through experiential design, we integrate technology into events, 
                                                        offering interactive presentations, augmented reality experiences, and various 
                                                        immersive elements. By combining technology and experiential design, we set new 
                                                        standards for events that transcend traditional boundaries and exceed expectations 
                                                        through a fusion of advanced technologies, artistic forms as well as a variety of 
                                                        sound, visual and digital mediums, installations, and performances.
                                                    </p>
                                                    <p>Some of the key technologies we incorporate into our event experiences include:</p> 
                                                    <ul class="list_ul">
                                                        <li>
                                                            Event Applications: We develop customised event applications that serve as 
                                                            a central hub for attendees and as an interactive platform for communication 
                                                            and real-time updates.
                                                        </li>
                                                        <li>
                                                            Augmented and Virtual Reality: We harness the power of augmented reality (AR) 
                                                            and virtual reality (VR) technologies to create immersive and interactive 
                                                            experiences. These technologies can be utilised for virtual tours, product 
                                                            demonstrations, interactive games and immersive storytelling, enhancing the 
                                                            overall event experience.
                                                        </li>
                                                        <li>
                                                            Live streaming: Live streaming allows you to increase event visibility and  
                                                            engage with a global audience,  irrespective of geographical limitations.
                                                        </li>
                                                    </ul> 
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/travel-service_Mobile.jpg">
                                            <h4>
                                                Travel Services
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/travel-service_large.jpg">
                                                    <h4>Travel Services</h4>
                                                    <p>
                                                        Since 2016, MICE Le Voyage has been dedicated to providing exceptional travel 
                                                        services to over 15,000 individuals, ensuring easy, seamless, and stress-free 
                                                        journeys. Our experienced team at Le Voyage inspires and tailors trips to meet 
                                                        your precise needs, resulting in a perfect getaway. Whether for business or 
                                                        pleasure, we serve as your dedicated travel advocate, nurturing your travel 
                                                        curiosity and enriching your life through transformative journeys, no matter
                                                         where your adventures take you.
                                                    </p>
                                                    <p>
                                                        We offer an exceptional range of comprehensive services for your business trips, 
                                                        ensuring a seamless and high-quality experience:
                                                    </p>
                                                    <ul class="list_ul">           
                                                        <li>24/7 Travel Counselling</li>
                                                        <li>365 Emergency Travel Service</li>
                                                        <li>Detailed Itinerary Planning</li>
                                                        <li>High-Quality Service</li>
                                                        <li>Budget-Friendly Flight and Hotel Options</li>
                                                        <li>Flight Check-In Assistance</li>
                                                        <li>Data-Saving Tools</li>
                                                    </ul>
                                                    <p>
                                                        For Travel for Fun, we specialise in designing unforgettable experiences through 
                                                        our unique travel packages. Our custom journeys encompass flights, hotels, 
                                                        transportation, and on-site activities, ensuring every aspect of your trip is 
                                                        tailored to create lasting memories. Some of our specialised services include:
                                                    </p>
                                                    <ul class="list_ul">
                                                        <li>Sports and Adventure Trips</li>
                                                        <li>Corporate Account Management</li>
                                                        <li>Wellness and Life Coaching Retreats</li>
                                                        <li>Accessible Tours for Travelers with Disabilities</li>
                                                        <li>Kid Training Camps</li>
                                                        <li>Culinary Road Trips</li>
                                                        <li>Meetup and Single-Friendly Holidays</li>
                                                    </ul>
                                                    <p>
                                                        At MICE Le Voyage, we are dedicated to creating exceptional travel experiences that 
                                                        exceed your expectations. Let us take care of your travel needs, ensuring your 
                                                        journeys are unforgettable and filled with joy.
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>

                                        <button class="button img_wrap_serv services_button" aria-expanded="false">
                                            <img src="./images/ceremonies_Mobile.jpg">
                                            <h4>
                                                Ceremonies
                                            </h4>
                                        </button>
                                        <div class="content" hidden>
                                            <div class="content__container">
                                                <div class="expand_cont_mob">
                                                    <img src="./images/ceremonies_large.jpg">
                                                    <h4>Ceremonies</h4>
                                                    <p>
                                                        Storytelling takes centre stage and creativity knows no boundaries. At MICE International we 
                                                        take pride in crafting awe-inspiring opening and closing ceremonies that transcend the 
                                                        ordinary, leaving audiences spellbound and immersed in unforgettable experience. Our 
                                                        expertise lies in weaving captivating thematics into each event, painting a vivid 
                                                        narrative that resonates with hearts and minds alike. From the brilliance of light 
                                                        design to the intricacy of costume, the symphony of music to the spectacle of mesmerizing 
                                                        show concepts. Every element harmoniously combines to create an enchanting spectacle. Our 
                                                        comprehensive services cover everything from concept creation and theme design to event 
                                                        production and management. We handle stage setup, branding, workshop and tour organisation, 
                                                        entertainment, and opening and closing ceremonies. Our portfolio includes cultural festivals, 
                                                        sports events, gala dinners, entertainment shows, marketing gatherings, and product launches.
                                                    </p>
                                                    <p>
                                                        As leading event management experts, we infuse innovation and artistry into each 
                                                        production, ensuring your event becomes an indelible memory etched in time. It is 
                                                        during these ceremonies that  dreams come to life, and possibilities to reflect the 
                                                        extraordinary are boundless.
                                                    </p>
                                                    <p>
                                                        storytelling takes center stage and creativity knows no bounds. At MICE International we 
                                                        take pride in crafting awe-inspiring opening and closing ceremonies that transcend the 
                                                        ordinary, leaving audiences spellbound and immersed in unforgettable experiences. Our 
                                                        expertise lies in weaving captivating thematics into each event, painting a vivid 
                                                        narrative that resonates with hearts and minds alike. From the brilliance of light 
                                                        design to the intricacy of costume, the symphony of music to the spectacle of 
                                                        mesmerizing show concepts – every element harmoniously combines to create an enchanting 
                                                        spectacle. As leading event management experts, we infuse innovation and artistry 
                                                        into each production, ensuring your event becomes an indelible memory etched in time.
                                                        it is during these ceremonies that  dreams come to life, and possibilities to reflect 
                                                        the extraordinary are boundless.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="text_anm intro slide--0 panel  panel8 desk_trns" id="slide-2">
                                <div class="intro__content">
                                    <h2 class="intro__title m_l_1 intro__title_3">
                                        <line class="line18"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Ready to</line>
                                        <!--<line class="line2">Ready to</line>-->
                                        <line class="line18">elevate your</line>
                                        <line class="line19">event? </line>
                                        <span class="line15 m_l_2">
                                            Reach out<br>
                                            and let's make magic happen.
                                        </span>
                                    </h2>
                                </div>
                            </section>

                            <section class="text_anm intro slide--0 panel  panel8 mob_trns" id="slide-2">
                                <div class="intro__content ipsGrid_span7 ipsType_right">
                                    <h2 class="intro__title gs_reveal m_l_1">
                                        <line class="line18"  data-speed="5.5" data-position="top" data-module="SplittedText" data-delay="0.05">Ready to</line>
                                        <!--<line class="line2">Ready to</line>-->
                                        <line class="line18">elevate your</line>
                                        <line class="line19">event? </line>
                                        <span class="line15 m_l_2">
                                            Reach out<br>
                                            and let's make magic happen.
                                        </span>
                                    </h2>
                                </div>
                            </section>

                            <section id="contact" class=" artwork_area panel  panel8">
                                <div class="service_head art_work an_text">
                                    <h2 class="c-brand_name c-brand marquee" id="text4">
                                        <span class="span4 marquee__inner">CONTACT</span>
                                    </h2>
                                </div>
                                <div class="artwork_main artwork_main2 contact_main scrollbar" id="style-3">
                                    <h3>Have Questions? Get in Touch!</h3>
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="form_outer">
                                                <form>
                                                    <div class="mb-3">
                                                        <input type="name" class="form-control cnt_fm" placeholder="Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="email" class="form-control cnt_fm" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="phone" class="form-control cnt_fm" placeholder="Phone">
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea class="form-control cnt_txt_fm" placeholder="Message"
                                                            rows="3"></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary btn_cnt">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row adds_wrap">
                                        <div class="col-xxl-7 col-md-7 adds">
                                            <img src="./images/Visit_Us.svg">
                                            <h4>Visit Us</h4>
                                            <div class="adds_in">
                                                <h5>Dubai</h5>
                                                <p>
                                                    Business Tower - ALSAQR - Sheikh Zayed Rd - <br>
                                                    Dubai - United Arab Emirates
                                                </p>
                                            </div>
                                            <div class="adds_in">
                                                <h5>Abu Dhabi</h5>
                                                <p>
                                                    Mazdar City - Abu Dhabi - Abu Dhabi <br>
                                                    54115 - United Arab Emirates
                                                </p>
                                            </div>
                                            <div class="adds_in">
                                                <h5>KSA</h5>
                                                <p>
                                                    3136 <span>شارع أبي جعفر المنصور،</span> Ghirnatah, <br>
                                                    7377, Riyadh 13241
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-md-5 text-center adds">
                                            <div class="cnt_lk">
                                                <img src="./images/Phone3.svg">
                                                <h4>Call us at</h4>
                                                <a href="#">+971 4 354 6118</a>
                                            </div>
                                            <div class="cnt_lk cnt_lk_bt">
                                                <img src="./images/Email4.svg">
                                                <h4>Email us</h4>
                                                <a href="#">info@miceintl.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section panel  panel10">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <h1>
                                            <img style="height: 80vh;" src="./images/Logo.gif">
                                        </h1>
                                    </div>
                                </div>
                            </section>
                        </main>



                    </div>
                    <!--<section class="spacer">
                    </section>-->



                </div>
            </div>
        </div>
    </div>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <script src="./bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--gsap script important-->
    <script src="js/gsap-latest-beta.min.js_r=5426"></script>
    <script src="js/ScrollTrigger_v3.8.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script>



        jQuery(document).ready(function () {
            const schars = JSON.stringify(jQuery('.rotating-text').text());
            const chars = jQuery('.rotating-text').text();
            const count = chars.length;
            const angle = 360 / count;
            console.log(angle);
            for (let i = 0; i < count; i++) {

                const rotation = angle * i;
                // chars[i].style.transform = `rotate(${rotation}deg)`;
                jQuery('.rotating-animation').append('<span class="char-letter cl" style="transform: rotate(' + rotation + 'deg)">' + chars[i] + '</span>');
                // console.log(chars[i]);
            }

            //jQuery('.nav-link').click(function () {
            //var section = jQuery(this).attr('data-nav');
            //console.log(section);
            // document.getElementById(section).scrollIntoView({ behavior: 'smooth' });
            //});

            // setTimeout(function(){
                // alert("Using setTimeout in jQuery");
                // $(".main").focus();
                // jQuery('.pin-spacer:first-child').css('height','0px');
                // $("#").delay(2000).fadeOut("slow");
                
                // $(".pin-spacer:first-child").delay(2000).fadeOut("slow");
                
                
                // $(".loader").delay(2000).fadeOut("slow");
                // $("#overlayer").delay(2000).fadeOut("slow");
            // }, 3000);

        });
    </script>

    <script>
        $(function () {
            $('.list-heading').on('click', function (e) {
                e.preventDefault();
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $(this).next()
                        .stop()
                        .slideUp(300);
                } else {
                    $(this).addClass('active');
                    $(this).next()
                        .stop()
                        .slideDown(300);
                }
            });
        });
    </script>
    <script src="./js/script_accordian.js"></script>
    <script>
        // mobile functions
        const buttons = document.querySelectorAll('button.services_button');
        buttons.forEach((button, index) => {
            const content = button.nextElementSibling;

            button.addEventListener('click', () => {
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', !isExpanded);
                content.hidden = isExpanded;
            });
        });
    </script>

    <!--gsap script important-->
    <script>

        //Help 
        //1.https://greensock.com/docs/v3/Plugins/ScrollTrigger
        //2.https://codepen.io/zenu/pen/bGQZeov
        //3.https://codepen.io/DeCodeUI/pen/xxdLVaY
        //4.https://codepen.io/akapowl/pen/GRvpxPR/480c18e83b89b5f810796e405201b24e showing all section
        //4.https://codepen.io/akapowl/pen/RwKxwjw/b9daa75b85b6e77a57bcabde4195a076 //Nav click



        //Horizontal "containerAnimation" - ScrollTrigger

        gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);
        


        //Desktop
        ScrollTrigger.matchMedia({
            "(min-width: 991px)": () => {

                let sections = gsap.utils.toArray(".panel");
                let maxWidth = 0;
              
               
                const getMaxWidth = () => {
                    maxWidth = 0;
                    sections.forEach((section) => {
                        maxWidth += section.offsetWidth;
                        maxWidth += gsap.getProperty(section, 'marginLeft');
                    });
                    maxWidth += 20 * 2;
                    return maxWidth;
                };

                getMaxWidth();



                let scrollTween = gsap.to(sections, {
                    //xPercent: -100 * (sections.length - 1),
                    
                    x: () => `-${maxWidth - window.innerWidth}`,
                    ease: "none", // <-- IMPORTANT!
                    scrollTrigger: {
                        trigger: "#hscroll",
                        smooth: true,
                        pin: true,
                        scrub: 1.8,
                        snap: 0,
                        end: () => `+=${maxWidth}`

                    }
                    
                });

                



                /* Main navigation */
                let panelsSection = document.querySelector("#content"),
                    panelsContainer = document.querySelector("#hscroll");
                //scrollTween;
                document.querySelectorAll(".nav-item").forEach(link => {
                    link.addEventListener("click", function (e) {
                        var menu_toggle = document.querySelectorAll('.nav-link');
                        for (i = 0; i < menu_toggle.length; i++){
                            menu_toggle[i].classList.remove('active');
                            // querySelectorAll return an array of dom elements, u can access them directly.
                        }
                        link.querySelector('a').classList.add("active");
                        e.preventDefault();
                        let targetElem = document.querySelector(e.target.getAttribute("href")),
                            y = targetElem;
                        console.log(e.target.getAttribute("href"));
                        if (targetElem && panelsContainer.isSameNode(targetElem.parentElement)) {
                            let totalScroll = scrollTween.scrollTrigger.end - scrollTween.scrollTrigger.start,
                                totalMovement = (sections.length - 1) * targetElem.offsetWidth;
                            y = Math.round(scrollTween.scrollTrigger.start + (targetElem.offsetLeft / totalMovement) * totalScroll);
                        }
                        gsap.to(window, {
                            scrollTo: {
                                y: y,
                                autoKill: false,
                                scrub: 1,
                            },
                            duration:   0
                        });
                    });
                });


                gsap.set(".line1", { x: 100 });
                gsap.set(".line2", { x: 100 });
                gsap.set(".line3", { x: 100 });
                gsap.set(".line4", { x: 100 });
                gsap.to(".line1", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line1",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 90%",
                        scrub: 1.5,
                        id: "ln1",
                        snap: {
                            snapTo: "labels", // snap to the closest label in the timeline
                            duration: {min: 0.2, max: 8}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                            delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                            // ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                            ease: "power1.inOut" // the ease of the snap animation ("power3" by default) //power1.inOut
                        }
                    }
                });
                gsap.to(".line2", {
                    x: -100,

                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line2",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 90%",
                        scrub: 1.5,
                        id: "ln2",
                        snap: {
                            snapTo: "labels", // snap to the closest label in the timeline
                            duration: {min: 0.2, max: 8}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                            delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                            // ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                            ease: "power1.inOut" // the ease of the snap animation ("power3" by default) //power1.inOut
                        }
                    }
                });
                gsap.to(".line3", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line3",
                        containerAnimation: scrollTween,
                        start: "left 80%",
                        end: "right 20%",

                        scrub: .40,

                        id: "ln3",
                    }
                });
                gsap.to(".line4", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line4",
                        containerAnimation: scrollTween,
                        start: "left 80%",
                        end: "right 20%",
                        scrub: .50,
                        id: "ln4",
                    }
                });

                
                // gsap.set(".line12", { x: 200 });
                // gsap.set(".line13", { x: 100 });
                // gsap.set(".line14", { x: 400 });

                gsap.to(".line12", {
                    x: -150,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line12",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 100%",
                        scrub: 2.50,
                        id: "ln4",
                        snap: {
                        // snapTo: "labels", // snap to the closest label in the timeline
                        duration: {min: 0.2, max: 3}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                    }
                    }
                });

                gsap.to(".line13", {
                    x: -200,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line13",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 80%",
                        scrub: 2,
                        id: "ln4",
                    }
                });

                gsap.to(".line14", {
                    x: -200,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line14",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 80%",
                        scrub: 2.5,
                        id: "ln4",
                    }
                });

                gsap.to(".line15", {
                    x: -200,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line15",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 90%",
                        scrub: 2.5,
                        id: "ln4",
                        snap: {
                        // snapTo: "labels", // snap to the closest label in the timeline
                        duration: {min: 0.2, max: 3}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                        }
                    }
                });

                gsap.to(".line16", {
                    x: -200,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line16",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 80%",
                        scrub: 2,
                        id: "ln4",
                    }
                });

                gsap.to(".line17", {
                    x: -200,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line17",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 80%",
                        scrub: 2.5,
                        id: "ln4",
                    }
                });

                gsap.to(".line18", {
                    x: -300,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".line18",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 90%",
                        scrub: 2.5,
                        id: "ln4",
                        snap: {
                        // snapTo: "labels", // snap to the closest label in the timeline
                        duration: {min: 0.2, max: 3}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                        delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                        ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                        }
                    }
                });

                gsap.to(".line19", {
                    x: 100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line19",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 80%",
                        scrub: 2.5,
                        id: "ln4",
                    }
                });

                gsap.to(".line20", {
                    x: 300,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line20",
                        containerAnimation: scrollTween,
                        start: "left 20%",
                        end: "right 80%",
                        scrub: 2.5,
                        id: "ln4",
                    }
                });

                gsap.to(".span1", {
                    yPercent: 100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .span1",
                        containerAnimation: scrollTween,
                        start: "center 80%",
                        //end: "center 20%",
                        scrub: 2,
                        id: "1"
                    }
                });
                gsap.to(".span2", {
                    yPercent: 100,

                    ease: "none",
                    scrollTrigger: {
                        trigger: " .span2",
                        containerAnimation: scrollTween,
                        start: "center 80%",
                        //end: "center 20%",
                        scrub: 2,
                        id: "2"
                    }
                });
                gsap.to(".span3", {
                    yPercent: 100,

                    ease: "none",
                    scrollTrigger: {
                        trigger: " .span3",
                        containerAnimation: scrollTween,
                        start: "center 80%",
                        //end: "center 20%",
                        scrub: 2,
                        id: "3"
                    }
                });
                gsap.to(".span4", {
                    yPercent: 100,

                    ease: "none",
                    scrollTrigger: {
                        trigger: " .span4",
                        containerAnimation: scrollTween,
                        start: "center 80%",
                        //end: "center 20%",
                        scrub: 2.5,
                        id: "3"
                    }
                });
                
                ScrollTrigger.create({
                    trigger: ".panel2",
                    containerAnimation: scrollTween,
                    start: "center 65%",
                    end: "center 51%",
                    onEnterBack: () => console.log("enterBack"),
                    onLeaveBack: () => console.log("leaveBack"),
                    onToggle: self => console.log("active", self.isActive),
                    id: "66"
                });

                

                ScrollTrigger.create({
                    trigger: ".panel7",
                    containerAnimation: scrollTween,
                    start: "center 65%",
                    end: "center 51%",
                    onEnter: () => console.log("enter"),
                    onLeave: () => console.log("leave"),
                    onEnterBack: () => console.log("enterBack"),
                    onLeaveBack: () => console.log("leaveBack"),
                    onToggle: self => console.log("active", self.isActive),
                    id: "66"
                });
                

                


                ScrollTrigger.create({
                    yPercent: -100,
                    ease: ":Power4.easeOut",
                    trigger: "#home",
                    start: "top top ",
                    scrub: 2,
                  
                    //opacity: 0,
                    pinSpacing: false,
                    //onEnter: () => console.log("enter"),
                    pin: true,

                })
                

                ScrollTrigger.defaults({ markers: { startColor: "black", endColor: "black" } });
                // only show the relevant section's markers at any given time
                gsap.set(".gsap-marker-start, .gsap-marker-end, .gsap-marker-scroller-start, .gsap-marker-scroller-end", { autoAlpha: 0 });

                ["panel2", "panel3", "panel4", "panel5", "panel6", "panel7", "panel8", "panel9", "panel10"].forEach((triggerClass, i) => {

                    ScrollTrigger.create({
                        trigger: '.' + triggerClass,
                        containerAnimation: scrollTween,
                        start: "left 30%",
                        end: i === 7 ? "right right" : "right 30%",
                        markers: false,
                        //onToggle: self => gsap.to(".marker-" + (i + 1), { duration: 0.25, autoAlpha: self.isActive ? 1 : 0 })
                    });
                });
                


            }
        })

        

       /* ScrollTrigger.matchMedia({
            
            "(min-width: 990px)": () => {
                
                
                let sections = gsap.utils.toArray(".panel");
                let maxWidth = 0;

                const getMaxWidth = () => {
                    maxWidth = 0;
                    sections.forEach((section) => {
                        maxWidth += section.offsetWidth;
                        maxWidth += gsap.getProperty(section, 'marginLeft');
                    });
                    maxWidth += 20 * 2;
                    return maxWidth;
                };

                getMaxWidth();



                let scrollTween = gsap.to(sections, {
                    //xPercent: -100 * (sections.length - 1),
                    x: () => `-${maxWidth - window.innerWidth}`,
                    ease: "none", // <-- IMPORTANT!
                    scrollTrigger: {
                        trigger: "#hscroll",
                        pin: true,
                        scrub: 0.8,
                        snap: 0,
                        end: () => `+=${maxWidth}`

                    }
                });

                
                gsap.set(".line1", { x: 100 });
                gsap.set(".line2", { x: 300 });
                gsap.set(".line3", { x: 200 });
                gsap.set(".line4", { x: 400 });
                gsap.to(".line1", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line1",
                        containerAnimation: scrollTween,
                        start: "left 10%",
                        end: "right 90%",
                        scrub: 1.5,
                        id: "ln1",
                        snap: {
                            snapTo: "labels", // snap to the closest label in the timeline
                            duration: {min: 0.2, max: 5}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
                            delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
                            // ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
                            ease: "power1.inOut" // the ease of the snap animation ("power3" by default) //power1.inOut
                        }
                    }
                });
                gsap.to(".line2", {
                    x: -100,

                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line2",
                        containerAnimation: scrollTween,
                        start: "left 80%",
                        end: "right 20%",
                        scrub: .30,
                        id: "ln2",
                    }
                });
                gsap.to(".line3", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line3",
                        containerAnimation: scrollTween,
                        start: "left 80%",
                        end: "right 20%",

                        scrub: .40,

                        id: "ln3",
                    }
                });
                gsap.to(".line4", {
                    x: -100,
                    //backgroundColor: "#1e90ff",
                    ease: "none",
                    scrollTrigger: {
                        trigger: " .line4",
                        containerAnimation: scrollTween,
                        start: "left 80%",
                        end: "right 20%",
                        scrub: .50,
                        id: "ln4",
                    }
                });

            }
            
        })
    */

        //Mobile
         //Help 
        //1.https://codepen.io/GreenSock/pen/KKpLdWW
        /* ScrollTrigger.matchMedia({
            "(max-width: 991px)": () => {


                let panels = gsap.utils.toArray(".panel");
                let tops = panels.map(panel => ScrollTrigger.create({ trigger: panel, start: "top top" }));

                panels.forEach((panel, i) => {
                    ScrollTrigger.create({
                        trigger: panel,
                        start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom", 
                        pin: true,
                        pinSpacing: false,
                        markers: false,
                    });
                });

                ScrollTrigger.create({
                    snap: {
                        snapTo: (progress, self) => {
                            let panelStarts = tops.map(st => st.start), 
                                snapScroll = gsap.utils.snap(panelStarts, self.scroll()); 
                            return gsap.utils.normalize(0, ScrollTrigger.maxScroll(window), snapScroll); 
                        },
                        duration: 0.5
                    }
                });

            }
        }) */


    </script>
    <script>
        function animateFrom(elem, direction) {
            direction = direction || 1;
            var x = 0,
                y = direction * 100;
            if(elem.classList.contains("gs_reveal_fromLeft")) {
                x = -100;
                y = 0;
            } else if (elem.classList.contains("gs_reveal_fromRight")) {
                x = 100;
                y = 0;
            }
            elem.style.transform = "translate(" + x + "px, " + y + "px)";
            elem.style.opacity = "0";
            gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
                duration: 3.25, 
                x: 0,
                y: 0, 
                autoAlpha: 3, 
                ease: "expo", 
                overwrite: "auto"
            });
            }

            function hide(elem) {
            gsap.set(elem, {autoAlpha: 0});
            }

            document.addEventListener("DOMContentLoaded", function() {
            gsap.registerPlugin(ScrollTrigger);
            
            gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
                hide(elem); // assure that the element is hidden when scrolled into view
                
                ScrollTrigger.create({
                trigger: elem,
                markers: false,
                onEnter: function() { animateFrom(elem) }, 
                onEnterBack: function() { animateFrom(elem, -1) },
                onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
                });
            });
        });
    </script>
    <script>
        // CURSOR
        var cursor = $(".cursor"),
        follower = $(".cursor-follower");

        var posX = 0,
            posY = 0;

        var mouseX = 0,
            mouseY = 0;

        TweenMax.to({}, 0.016, {
        repeat: -1,
        onRepeat: function() {
            posX += (mouseX - posX) / 9;
            posY += (mouseY - posY) / 9;

            TweenMax.set(follower, {
                css: {
                left: posX - 12,
                top: posY - 12
                }
            });

            TweenMax.set(cursor, {
                css: {
                left: mouseX,
                top: mouseY
                }
            });
        }
        });

        $(document).on("mousemove", function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });
        // yellow circle
        $(".link").on("mouseenter", function() {
            cursor.addClass("active");
            follower.addClass("active");
        });
        $(".link").on("mouseleave", function() {
            cursor.removeClass("active");
            follower.removeClass("active");
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $('[data-fancybox="gallery"]').fancybox({
    buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "share",
        "close"
    ],
    loop: false,
    protect: true
    });
</script>    

</body>



</html>