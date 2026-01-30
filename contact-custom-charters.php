<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- GTM and other top level stuff -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php' ?>
    <meta charset="utf-8">


    <title>Custom Charters for Film Crews, Professionals, Media - Hawaii Adventure Diving</title>
    <meta name="robots" content="index,follow">
    <meta name="description" content="Connect with our world-class team of shark diving experts and multimedia professionals to charter your film project. We leverage our rich experience and industry know-how to help you capture the footage you envision.">
    <link rel="canonical" href="https://hawaiiadventurediving.com/contact-custom-charters/">

    <!-- Generic Open Graph Data -->
    <meta property="og:title" content="Custom Charters for Film Crews, Professionals, Media - Hawaii Adventure Diving">
    <meta property="og:description" content="Connect with our world-class team of shark diving experts and multimedia professionals to charter your film project. We leverage our rich experience and industry know-how to help you capture the footage you envision.">
    <meta property="og:url" content="https://hawaiiadventurediving.com/contact-custom-charters/">
    <meta property="og:image" content="">

    <!-- Twitter Open Graph Data -->
    <meta property="twitter:title" content="Custom Charters for Film Crews, Professionals, Media - Hawaii Adventure Diving">
    <meta property="twitter:description" content="Connect with our world-class team of shark diving experts and multimedia professionals to charter your film project. We leverage our rich experience and industry know-how to help you capture the footage you envision.">
    <meta property="twitter:url" content="https://hawaiiadventurediving.com/contact-custom-charters/">
    <meta property="twitter:image" content="">



    <!-- head.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>


</head>

<body class="contact-page has-topbar">
    <!-- nav.php include -->
    {% include "nav.njk" %}



    <!-- Main Content-->
    <div class="content-wrap main-content inner-page bg-lightrays pb-80">


        <div class="container">

            <div class="row page-head-logo desktop-only">
                <a href="/"><img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving"></a>
            </div>

            <div class="row pb-40 text-center">
                <div class="col" data-show="startbox" data-show-delay="100">
                    <a href="/"><img src="/images/page-title-custom-charters.png" alt="Contact Custom Charters" class="page-title-img"></a>
                </div>
                <div class="col-lg-8 offset-lg-2" data-show="startbox" data-show-delay="200">
                    <p>Connect with our world-class team of shark diving experts and multimedia professionals to charter your film project. We leverage our rich experience and industry know-how to help you capture the footage you envision.</p>
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