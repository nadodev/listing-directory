@extends('frontend.layouts.master')

@section('content')
 <!--==========================
        BANNER PART START
    ===========================-->
    @include('Frontend.home.sections.banner')
    <!--==========================
        BANNER PART END
    ===========================-->
    <!--==========================
        CATEGORY SLIDER START
    ===========================-->
    @include('Frontend.home.sections.category')
    <!--==========================
        CATEGORY SLIDER END
    ===========================-->


    <!--==========================
        FEATURES PART START
    ===========================-->
    @include('Frontend.home.sections.feature')
    <!--==========================
        FEATURES PART END
    ===========================-->


    <!--==========================
        COUNTER PART START
    ===========================-->
    @include('Frontend.home.sections.counter')
    <!--==========================
        COUNTER PART END
    ===========================-->


    <!--==========================
        OUR CATEGORY START
    ===========================-->
    @include('Frontend.home.sections.our-category')
    <!--==========================
        OUR CATEGORY END
    ===========================-->


    <!--==========================
        OUR LOCATION START
    ===========================-->
   @include('Frontend.home.sections.our-location')
    <!--==========================
        OUR LOCATION END
    ===========================-->


    <!--==========================
        FEATURED LISTING START
    ===========================-->
    @include('Frontend.home.sections.feature-listing')
    <!--==========================
        FEATURED LISTING END
    ===========================-->


    <!--==========================
        OUR PACKAGE START
    ===========================-->
    @include('Frontend.home.sections.our-package')
    <!--==========================
        OUR PACKAGE END
    ===========================-->


    <!--============================
        TESTIMONIAL PART START
    ==============================-->
   @include('Frontend.home.sections.testimonial')
    <!--============================
        TESTIMONIAL PART END
    ==============================-->


    <!--==========================
        BLOG PART START
    ===========================-->
    @include('Frontend.home.sections.blog-part')
    <!--==========================
        BLOG PART END
    ===========================-->


    @endsection
