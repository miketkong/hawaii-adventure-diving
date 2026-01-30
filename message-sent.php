<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- GTM and other top level stuff -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-top.php' ?>
    <meta charset="utf-8">


    <title>Confirmation: Your Message Has Been Sent</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="Thank you for reaching out! We can confirm that your message has been sent successfully. Our team is currently reviewing your submission and we'll respond to you as soon as possible.">


    <!-- head.php include -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head.php' ?>

    <!-- permission test #2 -->

</head>

<body class="contact-page has-topbar">
    <!-- nav.php include -->
    {% include "nav.njk" %}



    <!-- Main Content-->
    <div class="content-wrap main-content inner-page bg-lightrays">


        <div class="container pb-40">

            <div class="row page-head-logo desktop-only">
                <a href="/"><img src="/images/header-logo-400px.png" alt="Hawaii Adventure Diving"></a>
            </div>

            <div class="row pb-40 text-center">
                <div class="col" data-show="startbox" data-show-delay="100">
                    <a href="/"><img src="/images/page-title-message-sent.png" alt="Message Sent" class="page-title-img"></a>
                </div>
                <div class="col-lg-8 offset-lg-2" data-show="startbox" data-show-delay="200">
                    <p>Thank you for reaching out! We can confirm that your message has been sent successfully. Our team is currently reviewing your submission and we'll respond to you as soon as possible.</p>
                </div>
            </div>


            {% include "contact-info.njk" %}

        </div>
        <!--// container -->

    </div>
    <!-- // content-wrap -->



    <!-- footer.php include -->
    {% include "footer.njk" %}
</body>

</html>