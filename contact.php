<!DOCTYPE html>
<html class="no-js" lang="en">
<!--Last reviewed by MK Feb 29, 2024-->

<head>
    <!-- head-top.php includes Google Tag Manager -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php' ?>
    <meta charset="utf-8">


    <title>Contact Hawaii Adventure Diving</title>
    <meta name="robots" content="index,follow">
    <meta name="description" content="Questions? Need support? Contact us using any of the methods here and we'll get back to you as soon as possible.">
    <link rel="canonical" href="https://hawaiiadventurediving.com/contact/">

    <!-- Generic Open Graph Data -->
    <meta property="og:title" content="Contact Hawaii Adventure Diving">
    <meta property="og:description" content="Questions? Need support? Contact us using any of the methods here and we'll get back to you as soon as possible.">
    <meta property="og:url" content="https://hawaiiadventurediving.com/contact/">
    <meta property="og:image" content="">

    <!-- Twitter Open Graph Data -->
    <meta property="twitter:title" content="Contact Hawaii Adventure Diving">
    <meta property="twitter:description" content="Questions? Need support? Contact us using any of the methods here and we'll get back to you as soon as possible.">
    <meta property="twitter:url" content="https://hawaiiadventurediving.com/contact/">
    <meta property="twitter:image" content="">


    <!-- Schema Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "TouristAttraction",
            "name": "Hawaii Adventure Diving",
            "description": "Contact information and message form for Hawaii Adventure Diving regarding customer questions and support.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "66-105 Haleiwa Rd",
                "addressLocality": "Haleiwa",
                "addressRegion": "Hawaii",
                "postalCode": "96712",
                "addressCountry": "US"
            },
            "telephone": "+1-808-829-2203",
            "url": "https://hawaiiadventurediving.com",
            "image": "https://hawaiiadventurediving.com/logo.jpg",
            "priceRange": "$100 - $150",
            "paymentAccepted": "Cash, Credit Card",
            "currenciesAccepted": "USD",
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "07:00",
                "closes": "18:00"
            }],
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 21.5930475,
                "longitude": -158.1053566
            },
            "sameAs": [
                "https://www.instagram.com/hawaiiadventurediving/"
            ]
        }
    </script>
    <!--// Schema Structured Data -->



    <!-- head.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>

</head>

<body class="contact-page has-topbar">
    <!-- nav.php include -->
    {% include "nav.njk" %}



    <!-- Main Content-->
    <div class="content-wrap main-content inner-page bg-lightrays">


        <div class="container">

            <div class="row page-head-logo desktop-only">
                <a href="/"><img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving"></a>
            </div>

            <div class="row pb-40 text-center">
                <div class="col" data-show="startbox" data-show-delay="100">
                    <a href="/"><img src="/images/page-title-contact.png" alt="Meet The Crew" class="page-title-img"></a>
                </div>
                <div class="col-lg-8 offset-lg-2" data-show="startbox" data-show-delay="200">
                    <p>Questions? Need support? Contact us using any of the methods below and we'll get back to you as soon as possible.</p>
                </div>
            </div>


            {% include "contact-info.njk" %}

        </div>
        <!--// container -->

        <section id="contact-form">
            <div class="container contact-form pb-100">
                <!--
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.812346526423!2d-158.10576279999998!3d21.5932468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c0058d23f97b437%3A0x771f2a333158621e!2s66-105%20Haleiwa%20Rd%2C%20Haleiwa%2C%20HI%2096712!5e0!3m2!1sen!2sus!4v1660300602259!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                Google Map Embed -->

                <div class="row mt-60">
                    <div class="col-lg-8 offset-lg-2">
                        <h2 class="white-text mb-40 text-center" data-show="startbox">Send a Message</h2>
                        <!-- Form-->
                        <form id="contactForm" name="contactForm" action="/send/" method="POST" data-show="startbox">
                            <div class="row gy-40 white-text">
                                <div class="col-12 col-md-4 requiredContact"><input class="form-control" type="text" id="requiredContact" name="requiredContact" placeholder="Required Contact *"></div>
                                <div class="col-12 col-md-4"><input class="form-control" type="text" id="yourName" name="yourName" placeholder="Your Name *"></div>

                                <div id="last-name" class="col-12 col-md-4"><input class="form-control" type="text" name="lastName" id="lastName" placeholder="Your Last Name *"></div>

                                <div class="col-12 col-md-4"><input class="form-control" type="email" id="yourEmail" name="yourEmail" placeholder="Your Email *"></div>
                                <div class="col-12 col-md-4"><input class="form-control" type="tel" id="yourPhone" name="yourPhone" placeholder="Your Phone *"></div>
                                <div class="col-12 mb-10"><textarea class="form-control" rows="1" id="yourMessage" name="yourMessage" placeholder="Message *"></textarea></div>
                            </div>
                        </form>
                        <div class="row gy-40 white-text" data-show="startbox">
                            <div class="col-12 text-center pt-20">
                                <div class="p-3 hide" id="status"></div>
                                <button class="btn big-button btn-accent-1 inline-block" onclick="validateForm()">Send</button>
                            </div>
                        </div>

                        <script type="text/javascript">
                            function validateForm() {
                                //alert("Validating form...");

                                document.getElementById('status').setAttribute("class", "hide");

                                var lastName = document.getElementById('lastName').value;
                                if (lastName != "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*Your last name cannot be empty";
                                    return false;
                                }

                                var requiredContact = document.getElementById('requiredContact').value;
                                if (requiredContact != "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*error";
                                    return false;
                                }
                                var yourName = document.getElementById('yourName').value;
                                if (yourName == "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*Your name cannot be empty";
                                    return false;
                                }
                                var yourEmail = document.getElementById('yourEmail').value;
                                if (yourEmail == "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*Your email cannot be empty";
                                    return false;
                                } else {
                                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                    if (!re.test(yourEmail)) {
                                        document.getElementById('status').setAttribute("class", "p-3 show");
                                        document.getElementById('status').innerHTML = "Invalid email address";
                                        return false;
                                    }
                                }
                                var yourPhone = document.getElementById('yourPhone').value;
                                if (yourPhone == "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*Your phone cannot be empty";
                                    return false;
                                }
                                var yourMessage = document.getElementById('yourMessage').value;
                                if (yourMessage == "") {
                                    document.getElementById('status').setAttribute("class", "p-3 show");
                                    document.getElementById('status').innerHTML = "*Your message cannot be empty";
                                    return false;
                                }

                                document.getElementById('status').setAttribute("class", "p-3 show green-bgd");
                                document.getElementById('status').innerHTML = "Sending... <img src='/images/preloader-circle-segment.gif' class='form-preloader' />";
                                //alert("Sending form");
                                document.getElementById('contactForm').submit();
                            }
                        </script>


                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- // content-wrap -->



    <!-- footer.php include -->
    {% include "footer.njk" %}
</body>

</html>