<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php // GTM and other top level stuff
    include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php';

    $lastModifiedTime = filemtime(__FILE__);
    $formattedTime = date("c", $lastModifiedTime); // Format it to the ISO 8601 date
    $pageTitle = "Cage Free Shark Diving and Whale Watching Tours - Oahu";
    $ogTitle = "Hawaii Adventure Diving - Cage Free Shark Diving and Whale Watching Tours";
    $pageDesrcription = "Specializing in open water shark and wildlife tours on Oahu, Hawaii. Providing guest with up close and personal wildlife encounters since 2014!";
    $ogImage = "https://hawaiiadventurediving.com/images/hawaii-adventure-diving-danny-shark-dive-oahu-1200x637.jpg";
    ?>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <title><? echo $pageTitle ?></title>

    <meta name="description" content="<? echo $pageTitle ?>">
    <link rel="canonical" href="https://hawaiiadventurediving.com/">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $ogTitle ?>">
    <meta property="og:description" content="<? echo $pageDescription ?>">
    <meta property="og:url" content="https://hawaiiadventurediving.com">
    <meta property="og:site_name" content="Hawaii Adventure Diving" />
    <meta property="article:modified_time" content="<?php echo $formattedTime; ?>" />
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="twitter:title" content="<?php echo $ogTitle ?>">
    <meta property="twitter:description" content="<? echo $pageDescription ?>">
    <meta property="twitter:url" content="https://hawaiiadventurediving.com">
    <meta property="twitter:image" content="<?php echo $ogImage; ?>">


    <!-- Homepage Edited -->
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://hawaiiadventurediving.com/",
                "url": "https://hawaiiadventurediving.com/",
                "name": "Hawaii Adventure Diving - Cage Free Shark Diving Tours",
                "isPartOf": {
                    "@id": "https://hawaiiadventurediving.com/#website"
                },
                "about": {
                    "@id": "https://hawaiiadventurediving.com/#organization"
                },
                "primaryImageOfPage": {
                    "@id": "https://hawaiiadventurediving.com/#primaryimage"
                },
                "image": {
                    "@id": "https://hawaiiadventurediving.com/#primaryimage"
                },
                "thumbnailUrl": "https://hawaiiadventurediving.com/images/hawaii-adventure-diving-danny-shark-dive-oahu.jpg",
                "datePublished": "2023-11-01T07:46:10+00:00",
                "dateModified": "2023-11-01T07:46:10+00:00",
                "description": "Shark Dive Oahu - Looking for the Best Hawaii Shark Tour? We offer the top Hawaii Shark Tour throughout the Hawaiian Islands!",
                "breadcrumb": {
                    "@id": "https://hawaiiadventurediving.com/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://hawaiiadventurediving.com/"]
                }]
            }, {
                "@type": "ImageObject",
                "inLanguage": "en-US",
                "@id": "https://hawaiiadventurediving.com/#primaryimage",
                "url": "https://hawaiiadventurediving.com/images/hawaii-adventure-diving-danny-shark-dive-oahu.jpg",
                "contentUrl": "https://hawaiiadventurediving.com/images/hawaii-adventure-diving-danny-shark-dive-oahu.jpg",
                "width": 600,
                "height": 400,
                "caption": "Hawaii Adventure Diving"
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://hawaiiadventurediving.com/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home"
                }]
            }, {
                "@type": "WebSite",
                "@id": "https://hawaiiadventurediving.com/#website",
                "url": "https://hawaiiadventurediving.com/",
                "name": "Hawaii Adventure Diving",
                "description": "Discover the Best Shark Tours Oahu, HI has to offer!",
                "publisher": {
                    "@id": "https://hawaiiadventurediving.com/#organization"
                },
                "inLanguage": "en-US"
            }, {
                "@type": "Organization",
                "@id": "https://hawaiiadventurediving.com/#organization",
                "name": "Hawaii Adventure Diving",
                "url": "https://hawaiiadventurediving.com",
                "logo": {
                    "@type": "ImageObject",
                    "inLanguage": "en-US",
                    "@id": "https://hawaiiadventurediving.com/#/schema/logo/image/",
                    "url": "https://hawaiiadventurediving.com/logo.jpg",
                    "contentUrl": "https://hawaiiadventurediving.com/logo.jpg",
                    "width": 600,
                    "height": 600,
                    "caption": "Hawaii Adventure Diving"
                },
                "image": {
                    "@id": "https://hawaiiadventurediving.com/#/schema/logo/image/"
                }
            }]
        }
    </script>

    <!-- head.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>


</head>

<body class="has-topbar homepage">

    <!-- nav.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/nav.php' ?>

    <?php //include $_SERVER['DOCUMENT_ROOT'].'/assets/includes/fixed-booking-btn.php' 
    ?>

    <!-- Main Content-->
    <div class="content-wrap bg-dark-blue main-content-home">

        <!-- Main Hero Video Banner -->
        <section class="hero-video-banner hero-banner">
            <div class="container-fluid gx-0">
                <div id="banner-video-overlay" class="video-overlay-image"></div>
                <div class="video-overlay-color"></div>


                <!-- VIDEO BANNER BACKGROUND - Taken from /assets/includes/video-banner-shark.php -->
                <div id="banner-video-bgd" class="video-container">
                    <div id="player"></div>
                </div>
                <!--// VIDEO BANNER BACKGROUND -->


                <div class="banner-contents" data-show="startbox">

                    <div class="row banner-CTA">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="banner-logo desktop-only">
                                <img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving">
                            </div>
                            <h1 class="px-lg-30">Oahu Shark Diving & Whale<span class="no-break">Watching Tours</span></h1>
                            <h2>Experience Ultimate Freedom and Immersion With Our World Class Team.</h2>
                        </div>
                        <div class="col-lg-8 offset-lg-2 cta-buttons-pair">
                            <a class="btn btn-md btn-secondary" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"><span>Learn More</span></a>
                            <a class="btn btn-md btn-accent-1" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/"><span>Book Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Main Hero Video Banner -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/as-seen-on.php' ?>

        <!-- PRODUCT CARDS & REVIEWS -->
        <section id="product-cards" class="dark-background">

            <div class="content-wrap py-40 jarallax" data-jarallax data-speed="0.8">
                <div class="container">
                    <div class="row text-center" data-show="startbox">
                        <div class="col-lg-10 offset-lg-1">
                            <h1 class="h1-small section-lead animated" data-show="startbox" data-show-delay="0" style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">Shark Dive Oahu</h1>
                            <p class="section-heading-text mb-20">A Dive Beyond the Ordinary: Swim with Sharks, Guided by the Best!</span></p>
                        </div>
                    </div>
                    <div class="row two-products-row">
                        <!-- PRODUCT CARD - SHARK DIVING -->
                        <div class="product-card col-12 col-sm-6 mb-20" id="cage-free-shark-diving" data-show="startbox">
                            <img src="/images/product-card-divers-rope-sharks.webp" alt="Cage Free Shark Diving">
                            <a class="link-hit-area" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                            <div class="card-buttons">
                                <a class="btn btn-md btn-secondary" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"><span>Learn More</span></a>
                                <a class="btn btn-md btn-accent-1" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/"><span>Book Now</span></a>
                            </div>
                        </div>
                        <!--// PRODUCT CARD - SHARK DIVING -->

                        <!-- PRODUCT CARD - WHALE WATCHING -->
                        <div class="product-card col-12 col-sm-6 mb-20" id="whale-watching" data-show="startbox">
                            <img src="/images/product-card-whale-watching.jpg" alt="Cage Free Shark Diving">
                            <a class="link-hit-area" href="/whale-watching-tour/hawaii/oahu/north-shore-haleiwa/whale-watching-tour.php"></a>
                            <div class="card-buttons">
                                <a class="btn btn-md btn-secondary" href="/whale-watching-tour/hawaii/oahu/north-shore-haleiwa/whale-watching-tour.php"><span>Learn More</span></a>
                                <a class="btn btn-md btn-accent-1" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3486/calendar/"><span>Book Now</span></a>
                            </div>
                        </div>
                        <!--// PRODUCT CARD - WHALE WATCHING -->
                    </div>


                    <div class="row text-center" data-show="startbox">
                        <div class="col-lg-10 offset-lg-1">
                            <p>Hawaii Aventure Diving have some of the <a href="/about-us.php">top shark handlers in Hawaii and even the world</a>. They possess an exceptionally high understanding of how to safely handle and redirect sharks as well as understanding there behavior, body language and how to appropriately behave around them in all scenarios. This high level of experience and understanding allows us to provide our guests with a <a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php">maximum level of freedom</a> to <a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php">swim and dive with sharks,</a> facilitating immersive and interactive experiences that extend beyond mere observation. <a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php">Dive with us,</a> and witness the remarkable difference as compared to standard tours.</p>
                        </div>
                    </div>

                    <!-- CUSTOM CHARTERS MINI SECTION -->
                    <div class="row mini-section text-center" data-show="startbox">
                        <div class="col-lg-8 offset-lg-2">
                            <a href="/contact-custom-charters.php" target="_blank"><img src="/images/custom-charters-film-crew-feature-img-small-v2.png" alt=""></a>
                            <h2>For Film Crews: Custom Charters</h2>
                            <p class="mb-10">Connect with our world-class team of <a href="/about-us.php">shark diving experts and multimedia professionals</a> to charter your next film project. You can count on our rich experience and industry know-how to help you capture the footage <span class="no-break">you envision.</span></p>
                            <a class="btn btn-accent-1 btn-md" href="/contact-custom-charters.php">Learn More</a>
                        </div>
                    </div>

                    <div id="customer-reviews" class="row">
                        <!-- CUSTOMER REVIEWS -->
                        <div class="col-lg-8 offset-lg-2 text-center mb-30">
                            <img class="pt-40 pb-10" style="max-width: 150px" src="/images/five-stars-wreath.png" alt="" data-show="startbox">
                            <h1 data-show="startbox">Our Customers Love Us</h1>
                            <p data-show="startbox">Read real reviews by our customers telling why they love Hawaii Adventure Diving and why you should choose use for your next <a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php">cage free shark <span class="no-break">diving experience.</span></a></p>
                        </div>
                        <div class="col">
                            <div class="swiper mt-0 pb-20" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-loop="true" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="100" data-swiper-autoplay="4000" data-show="startbox">
                                <div class="swiper-container" data-show="startbox">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide review-card">
                                            <a href="https://www.tripadvisor.com/Attraction_Review-g60647-d7625529-Reviews-Hawaii_Adventure_Diving-Haleiwa_Oahu_Hawaii.html" target="_blank"><img class="brand-logo" src="/images/icon-reviews-trip-advisor.png"></a>
                                            <img class="review-count" src="/images/5-stars.png" alt="5 star review">
                                            <h2>This is THE best dive in Oahu!</h2>
                                            <p class="reviews-text">“This is by far THE best shark diving experience on the island. Small locally owned operation, small groups for a more intimate dive experience. I've went out with these guys a few times now and The crew is one of the best, and extremely knowledgeable. Tons of sharks, and not once did I ever feel unsafe in the water. If you're looking to swim with sharks, do it and do it with Hawaiian adventure, not a commercial over crowded operation. Shop local!”</p>
                                            <p class="reviews-signature">— Jeff</p>
                                        </div>

                                        <div class="swiper-slide review-card">
                                            <a href="https://bit.ly/3OSCaCX" target="_blank"><img class="brand-logo" src="/images/icon-reviews-google.png"></a>
                                            <img class="review-count" src="/images/5-stars.png" alt="5 star review">
                                            <h2>Absolutely Epic!</h2>
                                            <p class="reviews-text">“I've done free dives with one of the more famous companies, but Nick and his crew are amazing and make it a once in a lifetime incredible experience! Groups are limited to 6, so sharks will be able to come closer with amazing photo opportunities. Safety divers redirect the sharks for you to get a thrill of a lifetime. Hands down best crew and best experience!”</p>
                                            <p class="reviews-signature">— germanfoodiehawaii</p>
                                        </div>

                                        <div class="swiper-slide review-card">
                                            <a href="https://www.yelp.com/biz/hawaii-adventure-diving-haleiwa-2" target="_blank"><img class="brand-logo" src="/images/icon-reviews-yelp.png"></a>
                                            <img class="review-count" src="/images/5-stars.png" alt="5 star review">
                                            <h2>We Saw 4 Tiger Sharks</h2>
                                            <p class="reviews-text">“The crew were super nice and genuinely wanted us to have a great time. I was nervous and they were patient and encouraging of me! My 16 year old was also there and they took care of us all! We ended up seeing 4 Tiger sharks and 2 other kinds. They were totally in control the whole time and I totally recommend them! They are fantastic and a must for anyone who loves nature and the ocean!”</p>
                                            <p class="reviews-signature">— Alexis R.</p>
                                        </div>

                                        <div class="swiper-slide review-card">
                                            <a href="https://www.tripadvisor.com/Attraction_Review-g60647-d7625529-Reviews-Hawaii_Adventure_Diving-Haleiwa_Oahu_Hawaii.html" target="_blank"><img class="brand-logo" src="/images/icon-reviews-trip-advisor.png"></a>
                                            <img class="review-count" src="/images/5-stars.png" alt="5 star review">
                                            <h2>Wow!</h2>
                                            <p class="reviews-text">“AMAZING experience! Swimming with sharks was on my bucket list and I could check it off! The crew was chill, funny, and most importantly made me feel safe the entire time. Highly recommended!”</p>
                                            <p class="reviews-signature">— Daisy R.</p>
                                        </div>

                                        <div class="swiper-slide review-card">
                                            <a href="https://www.facebook.com/HawaiiAdventureDiving/reviews/?ref=page_internal" target="_blank"><img class="brand-logo" src="/images/icon-reviews-facebook.png"></a>
                                            <img class="review-count" src="/images/5-stars.png" alt="5 star review">
                                            <h2>We Had An Amazing Time</h2>
                                            <p class="reviews-text">“The instructor was patient with us since it was our first time doing this. We were able the see 3 sharks pretty close up. It was such an exciting experience. We will definitely be doing this again when we go back to Oahu."</p>
                                            <p class="reviews-signature">— Dria Rene</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex mt-20 justify-content-center" data-show="startbox">
                                    <div class="swiper-button-prev swiper-button-position-2 swiper-button-dark shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                                        </svg></div>
                                    <div class="swiper-button-next swiper-button-position-2 swiper-button-dark shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                                        </svg></div>
                                </div>
                            </div>

                        </div>
                        <!--// CUSTOMER REVIEWS -->

                        <!-- AROUND THE WEB -->
                        <div id="around-the-web" class="container text-center pb-20">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2" data-show="startbox" data-show-delay="100">
                                    <h2>Over 2,000 x 5 Star Reviews!</h2>
                                    <p>We've been wowing customers since 2015 with superior customer service, professionalism, and safety consistently delivering experiences you simply can't get anywhere else.</p>
                                </div>
                            </div>
                            <div class="row ratings-group">
                                <div class="review-block col-6 col-sm-3 col-md-2 offset-md-1" data-show="startbox" data-show-delay="200">
                                    <h4>Google</h4>
                                    <h1>5<span>/5</span></h1>
                                    <img class="five-stars" src="/images/5-stars.png" alt="5 star review">
                                    <p><a href="https://bit.ly/3OSCaCX" target="_blank">845 reviews</a></p>
                                </div>
                                <div class="review-block col-6 col-sm-3 col-md-2" data-show="startbox" data-show-delay="300">
                                    <h4>Trip Advisor</h4>
                                    <h1>5<span>/5</span></h1>
                                    <img class="five-stars" src="/images/5-stars.png" alt="5 star review">
                                    <p><a href="https://www.tripadvisor.com/Attraction_Review-g60647-d7625529-Reviews-Hawaii_Adventure_Diving-Haleiwa_Oahu_Hawaii.html" target="_blank">499 reviews</a></p>
                                </div>
                                <div class="review-block col-6 col-sm-3 col-md-2" data-show="startbox" data-show-delay="400">
                                    <h4>Groupon</h4>
                                    <h1>4.9<span>/5</span></h1>
                                    <img class="five-stars" src="/images/5-stars.png" alt="5 star review">
                                    <p><a href="https://www.groupon.com/deals/hawaii-adventure-diving-3" target="_blank">1,022 reviews</a></p>
                                </div>
                                <div class="review-block col-6 col-sm-3 col-md-2" data-show="startbox" data-show-delay="500">
                                    <h4>Yelp</h4>
                                    <h1>5<span>/5</span></h1>
                                    <img class="five-stars" src="/images/5-stars.png" alt="5 star review">
                                    <p><a href="https://www.yelp.com/biz/hawaii-adventure-diving-haleiwa-2" target="_blank">155 reviews</a></p>
                                </div>
                                <div class="review-block col-6 offset-3 col-sm-12 offset-sm-0 col-md-2" data-show="startbox" data-show-delay="600">
                                    <h4>Facebook</h4>
                                    <h1>4.9<span>/5</span></h1>
                                    <img class="five-stars" src="/images/5-stars.png" alt="5 star review">
                                    <p><a href="https://www.facebook.com/HawaiiAdventureDiving/reviews/?ref=page_internal" target="_blank">146 reviews</a></p>
                                </div>

                            </div>
                        </div>
                        <!--// AROUND THE WEB -->

                    </div>
                    <!--// Row -->


                </div>

            </div>
        </section>
        <!--// PRODUCT CARDS & REVIEWS -->

        <!-- SHARK TOUR GALLERY -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/shark-tour-gallery-section.php' ?>


        <!-- Tour Features -->
        <section id="tour-features">
            <div class="bg-lt-gray footerPrev pb-60">
                <div class="container-fluid bg-shark-topper-lt"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center pt-100">
                            <!-- <img src="/images/logo-onWhite-600w.png" alt="Hawaii Adventure Diving" class="logo-section-head" data-show="startbox">-->
                            <h1 class="h1-small" data-show="startbox" data-show-delay="0">Oahu Shark Diving</h1>
                            <h2 class="h2-big blue-text" data-show="startbox" data-show-delay="100">Shark Diving Tour Overview</h2>
                            <p data-show="startbox" data-show-delay="200">Each tour includes a divemaster and instructor, clean and sanitized snorkel gear, and GoPro rentals. Photography packages are avaialble to all guests. Scuba diving experience is NOT required.</p>
                        </div>

                    </div>


                    <!-- TOUR FEATURES WITH ICONS -->
                    <div class="isotope mb-50">
                        <div class="row isotope-grid g-30">
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="0">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-clock.png" alt="Duration icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">2 Hours</h4>
                                    <p class="service-box-text font-size-15 mb-0">Total tour time is about 2 hours round trip from the harbor and back.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="100">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-no-cage.png" alt="No cage icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Cage Free</h4>
                                    <p class="service-box-text font-size-15 mb-0">Freediving / snorkeling, swim with the sharks in the open water, no cage.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="200">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-safety.png" alt="Shield icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Safe</h4>
                                    <p class="service-box-text font-size-15 mb-0">Expert safety provided by licensed Captains & Dive Masters.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="300">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-swimmer.png" alt="Swimmer icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Beginner Friendly</h4>
                                    <p class="service-box-text font-size-15 mb-0">All you need is an adventurous spirit. We'll handle the rest!</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>

                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="400">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-group.png" alt="Group icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Small Groups</h4>
                                    <p class="service-box-text font-size-15 mb-0">Our tours have a minimum group size of 4 and a maximum of 6 patrons.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>

                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="500">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-sea-turtle.png" alt="Sea turtle icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Wildlife</h4>
                                    <p class="service-box-text font-size-15 mb-0">Encounter sharks, dolphins, sea turtles and other pelagic creatures.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="600">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-dolphin.png" alt="Dolphin icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Natural Beauty</h4>
                                    <p class="service-box-text font-size-15 mb-0">Experience stunning views. Bring your own camera gear or rent a GoPro from us!</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>
                            <div class="isotope-item col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="700">
                                <!-- Service box-->
                                <div class="service-box lift position-relative rounded-4 bg-white text-center service-box-sm">
                                    <!-- Circle icon-->
                                    <div class="circle-icon text-white bg-accent-1 mb-30">
                                        <img src="/images/icon-lightbulb.png" alt="Lightbulb icon">
                                    </div>
                                    <h4 class="service-box-title mb-15">Be Inspired</h4>
                                    <p class="service-box-text font-size-15 mb-0">Discover a deeper understanding of the ocean and its inhabitants.</p><a class="stretched-link" href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php"></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--// TOUR FEATURES WITH ICONS -->

                    <!-- Shark Tour Overview Smaller List items -->
                    <div class="row gy-30">
                        <!-- Items-->
                        <div class="col-12 col-md-6 col-lg-3" data-show="startbox">
                            <ul class="list m-0 fw-medium font-size-15">
                                <li class="active"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Tours provided in English</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">5 years old minimum age</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Shark dives available year round</a></li>
                            </ul>
                        </div><!-- Items-->
                        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="100">
                            <ul class="list m-0 fw-medium font-size-15">
                                <li class="active"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">No diving experience necessary</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Free parking at dock</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Kama'aina & military discounts available</a></li>
                            </ul>
                        </div><!-- Items-->
                        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="200">
                            <ul class="list m-0 fw-medium font-size-15">
                                <li class="active"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Includes cleaned & sanatized snorkel gear</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">No SCUBA, snorkeling only</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Learn freediving basics</a></li>
                            </ul>
                        </div><!-- Items-->
                        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="300">
                            <ul class="list m-0 fw-medium font-size-15">
                                <li class="active"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Personal photography encouraged</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">GoPro rentals available</a></li>
                                <li class="active mt-30"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Learn about sharks, Hawaii, Ecology & Conservation</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Shark Tour Overview Smaller List items -->
                </div>
            </div>
        </section>
        <!--// Tour Features -->


        <!-- Call to action-->
        <section class="CTA-section">
            <div class="position-relative">
                <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
                    <div class="shape-parent">
                        <div class="pt-120 pb-130 px-30 position-relative rounded-4 overflow-hidden z-index-1">
                            <div class="background">
                                <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="assets/img/root/call-to-action-1920x1080.jpg" alt=""></div>
                                <div class="background-color" style="--background-color: #064175; opacity: .9;"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 text-center">
                                    <img class="mb-50 logo w-sm-100" src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving">
                                    <h2 class="mb-25 text-white"><a href="/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour.php" class="link-plain">Book <span class="hand-underline-yellow">Your</span> Adventure Today.</a></h2>
                                    <p class="mb-50 text-white" data-show-delay="100">Embrace the thrill of open ocean, cage-free shark diving with Hawaii Adventure Diving, the top-rated adventure outfit on the island with a perfect 5-star Google rating. With a passion that extends beyond business, our highly-skilled crew delivers transformative experiences, offering unparalleled service where safety, education, and an unforgettable journey are our hallmarks.</p>
                                    <div>
                                        <!-- Button--><a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Call to action -->

    </div>

    <!-- footer.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php' ?>

    <script>
        let youtubeVideoID;
        let bannerVideoOverlay = document.getElementById("banner-video-overlay");
        let doneLoading = false;
        let player;

        // Start the video loading process after the page has finished loading
        // Hopefully this speeds up the page loading
        document.addEventListener('DOMContentLoaded', function() {
            youtubeVideoID = getYoutubeVideoID();
            startYouTubeEmbedAPI();
        });

        // Get YouTube Video ID based on window width
        function getYoutubeVideoID() {
            if (window.innerWidth > 576) {
                mobile = false;
                youtubeVideoID = "asEnYgaGBV8";
                return youtubeVideoID;
            } else {
                mobile = true;
                youtubeVideoID = "cg5OSCuulWE";
                return youtubeVideoID;
            }
        }

        function startYouTubeEmbedAPI() {
            console.log("Inside startYouTubeEmbedAPI()");

            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";

            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }

        // Hawaii Adventure Diving 
        function onYouTubeIframeAPIReady() {
            console.log("Inside onYouTubeIframeAPIReady()");
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: youtubeVideoID,
                playerVars: {
                    'loop': 1,
                    'playlist': youtubeVideoID,
                    'playsinline': 1,
                    'autoplay': 1,
                    'controls': 0,
                    'mute': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            event.target.playVideo();
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !doneLoading) {
                doneLoading = true;
                fadeOutVideoOverlay();
            }
        }

        function fadeOutVideoOverlay() {
            bannerVideoOverlay.classList.add("fade-out");
        }
    </script>

</body>

</html>