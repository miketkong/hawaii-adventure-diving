<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- GTM and other top level stuff -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php';

    $lastModifiedTime = filemtime(__FILE__);
    $formattedTime = date("c", $lastModifiedTime); // Format it to the ISO 8601 date
    $pageTitle = "Shark Diving Articles | Hawaii Adventure Diving";
    $ogTitle = "Shark Diving Oahu A Collection by Hawaii Adventure Diving";
    $pageDescription = "Articles, photos, videos, helpful resources and more from Hawaii Adventure Diving.";
    $pageURL = "https://hawaiiadventurediving.com/articles/";
    $ogImage = "https://hawaiiadventurediving.com/articles/images/2023/october/hawaii-adventure-diving-two-free-divers-with-large-tiger-shark-filming-incredible.jpg";
    ?>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <title><? echo $pageTitle ?></title>

    <meta name="description" content="<? echo $pageDescription ?>">
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

    </script>

    <!-- head.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>


</head>

<body class="has-topbar scrolling-black-fade">
    <!-- nav.php include -->
    {% include "nav.njk" %}



    <!-- Main Content-->
    <div class="content-wrap main-content inner-page bg-lightrays dark-background">
        <div id="scrollingBlackFade"></div>
        <div class="container">

            <div class="row page-head-logo desktop-only">
                <a href="/"><img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving"></a>
            </div>

            <div class="row pb-40 text-center">
                <div class="col-lg-8 offset-lg-2" data-show="startbox" data-show-delay="200">
                    <h1 class="h1-page-subtitle">Shark Diving Articles</h1>
                </div>
                <div class="col-lg-10 offset-lg-1" data-show="startbox" data-show-delay="200">
                    <p>Discover the captivating world of sharks and the vibrant marine life of Hawaii in our articles section. Dive into engaging stories from recent expeditions and immerse yourself in breathtaking visuals of the ocean's apex predators. Whether you're a shark enthusiast, an avid diver, or someone curious about Hawaii's marine ecosystem, our collection promises to <span class="no-break">educate and inspire.</span></p>
                </div>
            </div>


            <!-- ARTICLE ENTRY -->
            <div class="row listable-content-card gx-0" data-show="startbox" data-show-delay="300">
                <div class="col-lg-5">
                    <div class="img-wrapper">
                        <a href="/articles/shark-diving-hawaii/shark-diving-oahu-what-its-like/"><img src="/articles/images/2024/article-feature-img-shark-diver-holding-safety-rope.jpg" alt="A Hawaii shark diving tour free diver holds onto a safety rope while a shark swims by." loading="lazy"></a>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-30">
                    <h2><a href="/articles/shark-diving-hawaii/shark-diving-oahu-what-its-like/">
                            Shark Diving Oahu's North Shore: What <span class="no-break">It's Like</span></a></h2>
                    <h3>January 24, 2023</h3>
                    <p>Explore the essentials of shark diving in Oahu, including safety tips, what sharks to expect, cage diving vs. cage-free, and the unique experiences offered by this highly <span class="no-break">rated tour.</span></p>
                    <div><a class="btn btn-accent-1 big-button" href="/articles/shark-diving-hawaii/shark-diving-oahu-what-its-like/">Read more</a></div>
                </div>
            </div>
            <!--// ARTICLE ENTRY -->

            <!-- ARTICLE ENTRY -->
            <div class="row listable-content-card gx-0" data-show="startbox" data-show-delay="300">
                <div class="col-lg-5">
                    <div class="img-wrapper">
                        <a href="/articles/shark-diving-hawaii/hawaii-north-shore-oahu-what-its-like/"><img src="/articles/images/2024/haleiwa-drone-shot-bridges-iStock-1205393332-square.jpg" alt="A drone shot of the Haleiwa bridge and harbor from above." loading="lazy"></a>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-30">
                    <h2><a href="/articles/shark-diving-hawaii/hawaii-north-shore-oahu-what-its-like/">
                            Hawaii's North Shore of Oahu: What <span class="no-break">It's Like</span></a></h2>
                    <h3>January 11, 2023</h3>
                    <p>Learn what to expect and how to get the most out of visiting Hawaii's most popular island of Oahu and its famed <span class="no-break">North Shore.</span></p>
                    <div><a class="btn btn-accent-1 big-button" href="/articles/shark-diving-hawaii/hawaii-north-shore-oahu-what-its-like/">Read more</a></div>
                </div>
            </div>
            <!--// ARTICLE ENTRY -->

            <!-- ARTICLE ENTRY -->
            <div class="row listable-content-card gx-0" data-show="startbox" data-show-delay="300">
                <div class="col-lg-5">
                    <div class="img-wrapper">
                        <a href="/articles/shark-diving-hawaii/sammy-swimming-with-a-giant-tiger-shark-november-2023/"><img src="/articles/images/2023/november/feature-img-sammy-falgiani-swimming-with-tiger-shark-2023.jpg" alt="Photo of Hawaii Adventure Diving Sammy Falgiani swimming next to a huge tiger shark." loading="lazy"></a>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-30">
                    <h2><a href="/articles/shark-diving-hawaii/sammy-swimming-with-a-giant-tiger-shark-november-2023/">Shark Diving Weekly Top Moments: Sammy Falgiani's Giant <span class="no-break">Tiger</span></a></h2>
                    <h3>November 15, 2023</h3>
                    <p>Hawaii Adventure Diving photographer and safety diver Sammy Falgiani hangin' out with a huge tiger shark.</p>
                    <div><a class="btn btn-accent-1 big-button" href="/articles/shark-diving-hawaii/sammy-swimming-with-a-giant-tiger-shark-november-2023/">Read more</a></div>
                </div>
            </div>
            <!--// ARTICLE ENTRY -->

            <!-- ARTICLE ENTRY -->
            <div class="row listable-content-card gx-0" data-show="startbox" data-show-delay="300">
                <div class="col-lg-5">
                    <div class="img-wrapper">
                        <a href="/articles/shark-diving-hawaii/savas-tiger-shark-diving-photos-from-2023/"><img src="/articles/images/2023/october/article-feature-savas-tiger-shark-season-photos-2023.jpg" alt="Photo of Hawaii Adventure Diving boat captain, Stacy Lieser snorkeling next to a large tiger shark." loading="lazy"></a>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-30">
                    <h2><a href="/articles/shark-diving-hawaii/savas-tiger-shark-diving-photos-from-2023/">Sava's Tiger Shark Diving Photos <span class="no-break">from 2023</span></a></h2>
                    <h3>October 25, 2023</h3>
                    <p>Hawaii Adventure Diving captain and safety diver, <a href="/about-us.php#sava">Sava Mankovskiy</a> captured some incredible photos of his 2023 shark diving season. Taken off the coast of Oahu's north shore, they include some epic moments with some of Hawaii's Tiger sharks.</p>
                    <div><a class="btn btn-accent-1 big-button" href="/articles/shark-diving-hawaii/savas-tiger-shark-diving-photos-from-2023/">Read more</a></div>
                </div>
            </div>
            <!--// ARTICLE ENTRY -->

            {% include "prefooter-CTA.njk" %}

        </div>
        <!--// Container -->

    </div>



    <!-- footer.php include -->
    {% include "footer.njk" %}
</body>

</html>