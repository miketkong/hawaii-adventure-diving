<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php // GTM and other top level stuff
    include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php';

    $lastModifiedTime = filemtime(__FILE__);
    $formattedTime = date("c", $lastModifiedTime); // Format it to the ISO 8601 date
    $pageTitle = "Cage Free Shark Diving (Oahu, Hi) | Info and Booking";
    $ogTitle = "Cage Free Shark Diving (Oahu, Hi) | Info and Booking";
    $pageDesrcription = "Ready to Book Your Tour? View tour details, schedules, and make reservations for your ultimate Hawaii cage free shark diving experience today.";
    $pageURL = "https://hawaiiadventurediving.com/shark-diving-tours/hawaii/oahu/north-shore-haleiwa/cage-free-shark-diving-tour/";
    $ogImage = "https://hawaiiadventurediving.com/images/hawaii-adventure-diving-danny-shark-dive-oahu-1200x637.jpg";
    ?>

    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <title><? echo $pageTitle ?></title>

    <meta name="description" content="<? echo $pageDesrcription ?>">
    <link rel="canonical" href="<? echo $pageURL ?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $ogTitle ?>">
    <meta property="og:description" content="<? echo $pageDescription ?>">
    <meta property="og:url" content="<? echo $pageURL ?>">
    <meta property="og:site_name" content="Hawaii Adventure Diving" />
    <meta property="article:modified_time" content="<?php echo $formattedTime; ?>" />
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="twitter:title" content="<?php echo $ogTitle ?>">
    <meta property="twitter:description" content="<? echo $pageDescription ?>">
    <meta property="twitter:url" content="<? echo $pageURL ?>">
    <meta property="twitter:image" content="<?php echo $ogImage; ?>">

    <!-- Schema Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Shark Diving Tour",
            "offers": [{
                    "@type": "Offer",
                    "description": "Cage-free Shark Diving Tour. High-quality snorkel gear provided for the duration of the tour. Professional underwater photography available upon request and for an aditional cost.",
                    "price": "150",
                    "priceCurrency": "USD",
                    "availability": "https://schema.org/InStock",
                    "validFrom": "2023-11-01T07:00:00-10:00"
                },
                {
                    "@type": "Offer",
                    "description": "KAMA'AINA & MILITARY Discounted Shark Tour. High-quality snorkel gear provided for the duration of the tour. Professional underwater photography available upon request and for an aditional cost.",
                    "price": "125",
                    "priceCurrency": "USD",
                    "availability": "https://schema.org/InStock",
                    "eligibleRegion": [{
                            "@type": "Country",
                            "name": "US"
                        },
                        {
                            "@type": "AdministrativeArea",
                            "name": "HI"
                        }
                    ],
                    "validFor": {
                        "@type": "QuantitativeValue",
                        "value": "Local residents and active military personnel"
                    },
                    "validFrom": "2023-11-01T07:00:00-10:00"
                },
                {
                    "@type": "Offer",
                    "description": "Non-diver Ride Along Tour",
                    "price": "100",
                    "priceCurrency": "USD",
                    "availability": "https://schema.org/InStock",
                    "validFrom": "2023-11-01T07:00:00-10:00"
                },
                {
                    "@type": "Offer",
                    "description": "Shark Diving Photos Package",
                    "price": "75",
                    "priceCurrency": "USD",
                    "availability": "https://schema.org/InStock",
                    "validFrom": "2023-11-01T07:00:00-10:00"
                }
            ],
            "description": "Experience the thrill of cage-free shark diving on our Shark Diving Tour. Encounter these magnificent creatures in their natural habitat. We also offer a KAMA'AINA & MILITARY discount, a non-diver Ride Along experience, and a photography package to capture your adventure. Transportation to and from hotels is not included.",
            "url": "<?php echo $pageURL; ?>",
            "image": "https://hawaiiadventurediving.com/wp-content/uploads/path-to-your-shark-tour-image.jpg",
            "brand": "Hawaii Adventure Diving",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "<?php echo $results['averageRating']; ?>",
                "reviewCount": "<?php echo $results['totalReviews']; ?>"
            },
            "availabilityStarts": "2023-11-01T07:00:00-10:00",
            "availabilityEnds": "2023-11-01T17:00:00-10:00",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Shark Tour Packages",
                "itemListElement": [{
                        "@type": "OfferCatalog",
                        "name": "Shark Diving Tour",
                        "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Shark Diving Tour"
                            }
                        }]
                    },
                    {
                        "@type": "OfferCatalog",
                        "name": "KAMA'AINA & MILITARY Discount",
                        "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "KAMA'AINA & MILITARY Shark Tour"
                            }
                        }]
                    },
                    {
                        "@type": "OfferCatalog",
                        "name": "Ride Along",
                        "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Ride Along Tour"
                            }
                        }]
                    },
                    {
                        "@type": "OfferCatalog",
                        "name": "Shark Diving Photos",
                        "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Shark Diving Photography Package"
                            }
                        }]
                    }
                ]
            }
        }
    </script>
    <!--// Schema Structured Data -->


    <!-- Head Includes (CSS Styles, Fonts, Generic Meta Data, etc.) -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>

</head>

<body class="has-topbar shark-tour-page tour-page bg-white">
    <!-- nav.php include -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/nav.php';
    $thisPage = "sharks";
    ?>

    <div class="content-wrap">
        <section id="page-banner" class="hero-video-banner hero-banner">
            <div class="container-fluid gx-0">
                <div id="banner-video-overlay" class="video-overlay-image"></div>
                <div class="video-overlay-color"></div>

                <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/video-banner-shark.php' ?>

                <div class="banner-contents">
                    <div class="row page-head-logo desktop">
                        <a href="/"><img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving"></a>
                    </div>

                    <div class="page-title-img-wrapper">
                        <h1>Oahu Shark Diving</h1>
                        <img src="/images/page-title-shark-tour.png" alt="Cage Free Shark Diving">
                    </div>

                    <div class="price-CTA-block text-white">
                        <!--<p class="price-leader-text">Only</p>
                        <p class="price mb-10">$150 per person</p>-->
                        <a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/">Book Now</a>
                        <p class="disclaimer">Pricing subject to change. Click to view updated rates and to schedule your next tour.</p>
                    </div>
                </div>

            </div>
        </section>

        {% include "as-seen-on.njk" %}


        <section id="no-limits" class="pano-section white-text text-left">
            <div class="container-fluid gx-0">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/no-limits-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>

                    <div class="text-box">
                        <h1 class="h1-small-leader-text">Hawaii Shark Diving <br class="mobile">Unleashed</h1>
                        <h2>No Cage. <br class="mobile">No Limits.</h2>
                        <p>You'll be amazed at how quickly and naturally you become absorbed by the calm, quiet deep blue water—hypnotized by the stunning beauty of these amazing creatures and how they move in their natural environment.</p>
                        <p class="credit">Photo: © Sammy Falgiani</p>
                    </div>
                </div>
            </div>
        </section>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/team-section.php' ?>

        <section id="be-inspired" class="pano-section white-text text-left">
            <div class="container-fluid gx-0">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/be-inspired-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>
                    <div class="text-box">
                        <h1 class="h1-small-leader-text">Swim With Sharks <span class="no-break">In Hawaii</span></h1>
                        <h2>Be inspired.</h2>
                        <p>You'll feel what it's like to be with sharks—<em>up close and personal.</em> You'll instantly understand how magnificent these creatures are and how there's nothing like swiming next to them without a cage.</p>
                        <p class="credit">Photo: © Sammy Falgiani</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="tour-duration" class="pano-section text-left">
            <div class="container-fluid gx-0 bg-white">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <div class="text-box">
                        <h1 class="h1-small-leader-text" style="color: #000;">Hawaii Shark <span class="no-break">Tour Duration</span></h1>
                        <h2 class="blue-text">2 Hours <span class="no-break">Round Trip</span></h2>
                        <p>With 2 hours from dock to dock, you'll have plenty of time to see stunning views of the North Shore, spot native ocean wild life like dolphins and sea turtles, and get up close and personal with a variety of open ocean shark species.</p>
                    </div>
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/tour-duration-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>
                </div>
            </div>
        </section>

        <section id="private-tours" class="pano-section text-left white-text">
            <div class="container-fluid gx-0">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <div class="text-box">
                        <h1 class="h1-small-leader-text">Haleiwa <span class="no-break">Shark Tours</span></h1>
                        <h2>An Exclusive Tour Experience</h2>
                        <p>Our tour groups are small with a minimum of 4 to a maximum of 6 divers per tour. This ensures everyone is safe and has the best experience possible.</p>
                    </div>
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/private-tours-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>
                </div>
            </div>
        </section>

        <section id="snorkel-gear" class="pano-section text-left">
            <div class="container-fluid gx-0 bg-white">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <div class="text-box">
                        <h1 class="h1-small-leader-text" style="color: #000;">Shark Dive The North <span class="no-break">Shore, Oahu</span></h1>
                        <h2 class="blue-text">Snorkel Gear Rentals Included</h2>
                        <p>No need to stop by the dive shop before your tour. We've got you covered with snorkels, masks, and fins so you can feel comfortable and free in the water.</p>
                        <p class="disclaimer mobile">*Gear shown below for illustration purposes only.</p>
                        <p class="disclaimer desktop">* Snorkel gear photo is for illustration purposes only. Actual snorkel gear may be different than what is shown here.</p>
                    </div>
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/snorkel-gear-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>
                </div>
            </div>
        </section>

        <section id="get-the-shot" class="pano-section white-text text-left">
            <div class="container-fluid gx-0">
                <div class="pano-bgd"></div>
                <div class="section-content">
                    <picture>
                        <source media="(max-width: 1023px)" srcset="/images/get-the-shot-img-mobile.jpeg" />
                        <source media="(min-width: 1024px)" srcset="/images/blank.gif" />
                        <img class="hero-img mobile" src="/images/blank.gif">
                    </picture>
                    <div class="text-box">
                        <h1 class="h1-small-leader-text">Hawaii Shark <span class="no-break">Dive Photos</span></h1>
                        <h2>Get The Shot!</h2>
                        <p>Bring your camera or leave it to one of our professional photographers to capture your once in a lifetime experience in stunning quality <span class="no-break">and detail.</span></p>
                        <p class="credit">Photo: © Sammy Falgiani</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="tour-quick-guide bg-white" class="desktop">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-duration-placeholder.jpg">
                        <h2>Duration</h2>
                        <p>2 hrs</p>
                    </div>
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-time-placeholder.jpg">
                        <h2>Start & End Time</h2>
                        <p>Varies</p>
                    </div>
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-pickup-placeholder.jpg">
                        <h2>Pick-up & Drop-Off</h2>
                        <p>Not Included</p>
                    </div>
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-age-placeholder.jpg">
                        <h2>Minimum Age</h2>
                        <p>5 with adult</p>
                    </div>
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-fitness-placeholder.jpg">
                        <h2>Fitness Level</h2>
                        <p>Low</p>
                    </div>
                    <div class="col-4 col-md-2">
                        <img class="icon" src="/images/icon-start-end-location-placeholder.jpg">
                        <h2>Start & End Location</h2>
                        <p>Haleiwa</p>
                    </div>
                </div>
                <!--// row -->
            </div>
            <!--// container -->
        </section>
        <!--// Tour Quick Guide -->

        {% include "business-info.njk" %}


        <!-- TOUR DATES AND TIMES SECTION -->
        <section id="tour-days-and-times">
            <div class="container pt-60 pb-40">
                <div class="row">
                    <div class="col-12 text-center-md">
                        <h1 class="h1-small-leader-text md-text-center" style="color: #000; margin-bottom: -20px !important;">Shark <span class="no-break">Diving Schedule</span></h1>
                        <h2 class="blue-text mb-20">Tour Days & Times</h2>
                    </div>
                    <div class="col-12 text-center-md">
                        <ul class="tour-times"><strong>Tour Days:</strong>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">Our Shark Diving Tours run <u>every day of the week</u>, Monday through Sunday.</a></li>
                        </ul>
                        <ul class="tour-times"><strong>Daily Tour Times:</strong>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">7:00am - 9:00am</a></li>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">9:00am - 11:00am</a></li>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">11:00am - 1:00pm</a></li>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">1:00pm - 3:00pm</a></li>
                            <li><a href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">3:00pm - 5:00pm</a></li>
                        </ul>
                    </div>
                    <div class="col-12 text-center-md"><a class="btn btn-accent-1 big-button btn-max-width" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">Book Now</a></div>
                </div>
            </div>
        </section>
        <!--// TOUR DATES AND TIMES SECTION -->


        <!-- PRICE SECTION -->
        <section id="price-section" class="price-section bg-white py-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center-md">
                        <h1 class="h1-small mb-0">Shark Dive Oahu</h1>
                        <h2 class="h2-big blue-text">Rates & Details</h2>
                        <p>Embark on an adventure with our team of world-class shark handlers, whose expertise is unmatched. Discover our affordable rates and unparalleled service, where respect and friendliness shape every encounter and experiences that consistently outperform <span class="no-break">our competitors.</span></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-6 col-xl-4">
                        <div class="product-card">
                            <img src="/images/product-card-img-shark-tour.jpg" alt="">
                            <div class="text">
                                <h2>Shark Diving Tour</h2>
                                <h3 class="price">$150 person<br><span class="sub-text">(Plus taxes & fees)</span></h3>
                                <a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="product-card">
                            <img src="/images/product-card-img-kama-aina.jpeg" alt="">
                            <div class="text">
                                <h2>Kama'aina & Military</h2>
                                <h3 class="price">$125 person with ID<br><span class="sub-text">(Plus taxes & fees)</span></h3>
                                <a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 col-xl-4 offset-xl-0">
                        <div class="product-card">
                            <img src="/images/product-card-img-ride-along.jpeg" alt="">
                            <div class="text">
                                <h2>Ride Along <span>(Non Diver)</span></h2>
                                <h3 class="price">$100 person<br><span class="sub-text">(Plus taxes & fees)</span></h3>
                                <a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" target="_self">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center text-box">
                        <p class="disclaimer">Prices subject to change. Click the Book Now buttons to see the latest rates.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--// PRICE SECTION -->


        <!-- SHARK DIVING PHOTO PACKAGES SECTION -->
        <section id="shark-diving-photography-packages" class="price-section">
            <div class="container">
                <div class="row pt-60">
                    <div class="col-lg-10 offset-lg-1 text-center-md">
                        <h1 class="h1-small mb-0">Shark Dive Hawaii</h1>
                        <h2 class="h2-big blue-text">Photography Packages</h2>
                        <p>Shark diving tour photography packages are available to all guests and include high-end, edited underwater photographs of both the guests and the sharks. We do try to have a photographer on board for all tour but to guarantee one, please call to add it to your reservation. Payment for photography packages can be made at the tour location via credit card, cash, or Venmo.</p>
                    </div>
                </div>
                <div class="row text-center" style="justify-content: center;">
                    <div class="col-sm-6 col-xl-4">
                        <div class="product-card">
                            <img src="/images/product-card-img-shark-tour-photo-packages-4.jpg" alt="An underwater photo of a group of Hawaii shark diving tour guests holding on to a safety rope while swimming in the open ocean without a cage above a large shark. They're wearing swim fins and snorkel gear and watching the shark as it swims by. One of the divers is pointing a hand held camera at the shark. Another shark and the shark tour boat can be seen in the distance.">
                            <div class="text">
                                <h2>Shark Diving Photos</h2>
                                <h3 class="price">$75 person<br><span class="sub-text">(Plus taxes & fees)</span></h3>
                                <a class="btn btn-accent-1 big-button" href="/contact/">Call To Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// SHARK DIVING PHOTO PACKAGES SECTION -->


        <!-- SHARK TOUR GALLERY -->
        <div id="shark-tour-gallery"></div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/shark-tour-gallery-section.php' ?>


        <section id="faq" class="bg-white pt-40 pb-30">
            <div class="container w-700">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h1-small-leader-text md-text-center" style="color: #000;">Hawaii <span class="no-break">Shark Diving</span></h1>
                        <h2 class="blue-text text-center-md">Shark Diving Tour Details</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion accordion-flush dark-text" id="faq">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        About your shark diving tour with Hawai'i Adventure Diving
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                    <div class="accordion-body">
                                        <p>Hawaii has long been a favorite destination for Scuba Diving, with its tropical climate, year round diving in warm, clear water and with the abundance of marine life that dwell in the colorful coral reefs, diving here is appealing to everyone.</p>
                                        <figure>
                                            <img src="/images/shark-divers-rope.jpeg" alt="A photo of snorkelers holding on to a safety rope as a shark passes underneath them.">
                                            <figcaption>Snorkelers hold on to the safety line as a curious galapagos shark swims by for a closer look. Oahu, Hawaii.</figcaption>
                                        </figure>
                                        <p>Pelagic shark dives are different in that all you need is snorkel equipment and you will be snorkeling at the surface of ocean water of deeper depths, where the pelagic sea life dwell.</p>
                                        <p>On a shark snorkeling dive you are likely to encounter sharks, whales during the whale season, dolphin, barracuda, mahi mahi, tuna or any other type of marine life typically known to be “pelagic”. This is an underwater photographer's dream and an item on any adventure seeker's bucket list!</p>
                                        <figure>
                                            <img src="/images/male-shark-diver-with-shark.jpeg" alt="A photo of a male snorkeler swimming underwater along a shark.">
                                            <figcaption>Hawaii Adventure Diving safety diver, Nick Lowenstine exploring on his off-time. Oahu, Hawaii.</figcaption>
                                        </figure>
                                        <p>Education is an extremely important part of our dive, that's why you will be accompanied by a professionally trained safety diver and shark behaviorist. These highly trained and seasoned professionals are experts in marine life identification and behavior, they will teach you how to safely and comfortably interact with the pelagic sea life, and will also explain conservation efforts in effect and legislation passed to help protect endangered species.</p>
                                        <figure>
                                            <img src="/images/professional-shark-diver-nick-lowenstine.jpeg" alt="A photo of a male snorkeler swimming underwater along a shark.">
                                            <figcaption>Hawaii Adventure Diving safety diver, Nick Lowenstine exploring on his off-time. Oahu, Hawaii.</figcaption>
                                        </figure>
                                        <p>You will come away with so much more than just bragging rights to say “I dove with the sharks or whales”! You will gain knowledge and some great photos and videos too!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        On the boat trip out to the dive site
                                    </button>
                                </h2>
                                <div id="faq-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo">
                                    <div class="accordion-body">
                                        <p>Starting at the dock when you board the dive boat and during the 3-mile trip out to dive site, you will be briefed on what to expect from your dive beginning with a safety briefing from your Captain.</p>
                                        <p>Your Divemaster will give you a demonstration of the equipment and will further explain with visual aides, photos and graphics about the nature and identification of the sea life and answer any questions that you may have.</p>
                                        <p>Once at the dive site, the Divemaster will enter the water first, then call the divers in after an evaluation of the site. This is where the real fun begins!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Bringing your waterproof cameras in the water with you
                                    </button>
                                </h2>
                                <div id="faq-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
                                    <div class="accordion-body">
                                        <p>Whether you're using a handheld GoPro, a $150,000 professional underwater setups like our friend, Emmy Award-winning Andy Brandy Casagrande who Hawaii Adventure Diving had the honor of working with on Discovery Channel Shark Week 2014, or even a $20 disposal underwater camera, you may just get the shot of your lifetime!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Cancellations
                                    </button>
                                </h2>
                                <div id="faq-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour">
                                    <div class="accordion-body">
                                        <p>You'll have 48 hours to cancel prior to the date of your tour. Any cancellations or No Shows within the 48 hours cancellation policy will result in your credit card being charged for the full amount of the tour you have reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--// accordions -->
                    </div><!--// col -->
                </div><!--// row -->
            </div>
            <!--// container -->
        </section>
        <!--// FAQ -->

        <!--
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>
        -->

    </div>
    <!--// Content Wrap -->


    <?php
    $btn = '<a class="btn btn-accent-1 big-button" href="https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/" >Book Now</a>';
    include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/big-CTA-pre-footer.php';
    ?>

    <!-- footer.php include -->
    {% include "footer.njk" %}

</body>

</html>