<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Listian</title>
    @include('Frontend.layouts.style')
</head>

<body>

    <!--==========================
        TOPBAR PART START
    ===========================-->
    @include('Frontend.layouts.topbar')
    <!--==========================
        TOPBAR PART END
    ===========================-->
    <!--==========================
        MENU PART START
    ===========================-->
    @include('Frontend.layouts.navbar')
    <!--==========================
        MENU PART END
    ===========================-->


    <!--==========================
        BANNER PART START
    ===========================-->
    @include('Frontend.layouts.banner')
    <!--==========================
        BANNER PART END
    ===========================-->


    <!--==========================
        CATEGORY SLIDER START
    ===========================-->
    @include('Frontend.layouts.category')
    <!--==========================
        CATEGORY SLIDER END
    ===========================-->


    <!--==========================
        FEATURES PART START
    ===========================-->
    @include('Frontend.layouts.feature')
    <!--==========================
        FEATURES PART END
    ===========================-->


    <!--==========================
        COUNTER PART START
    ===========================-->
    @include('Frontend.layouts.counter')
    <!--==========================
        COUNTER PART END
    ===========================-->


    <!--==========================
        OUR CATEGORY START
    ===========================-->
    @include('Frontend.layouts.our-category')
    <!--==========================
        OUR CATEGORY END
    ===========================-->


    <!--==========================
        OUR LOCATION START
    ===========================-->
   @include('Frontend.layouts.our-location')
    <!--==========================
        OUR LOCATION END
    ===========================-->


    <!--==========================
        FEATURED LISTING START
    ===========================-->
    @include('Frontend.layouts.feature-listing')
    <!--==========================
        FEATURED LISTING END
    ===========================-->


    <!--==========================
        OUR PACKAGE START
    ===========================-->
    @include('Frontend.layouts.our-package')
    <!--==========================
        OUR PACKAGE END
    ===========================-->


    <!--============================
        TESTIMONIAL PART START
    ==============================-->
   @include('Frontend.layouts.testimonial')
    <!--============================
        TESTIMONIAL PART END
    ==============================-->


    <!--==========================
        BLOG PART START
    ===========================-->
    @include('Frontend.layouts.blog-part')
    <!--==========================
        BLOG PART END
    ===========================-->
    <!--==========================
        FOOTER PART START
    ===========================-->
   @include('Frontend.layouts.footer')
    <!--==========================
        FOOTER PART END
    ===========================-->

    <!--=============SCROLL BTN==============-->
    <div class="scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--=============SCROLL BTN==============-->
    @include('Frontend.layouts.script')

</body>

</html>
