<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Listian</title>
    @include('Frontend.partials.style')
</head>

<body>
    <!--==========================
        TOPBAR PART START
    ===========================-->
    @include('Frontend.partials.topbar')
    <!--==========================
        TOPBAR PART END
    ===========================-->
    <!--==========================
        MENU PART START
    ===========================-->
    @include('Frontend.partials.navbar')
    <!--==========================
        MENU PART END
    ===========================-->

    @yield('content')

    <!--====j======================
        FOOTER PART START
    ===========================-->
   @include('Frontend.partials.footer')
    <!--==========================
        FOOTER PART END
    ===========================-->

    <!--=============SCROLL BTN==============-->
    <div class="scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--=============SCROLL BTN==============-->
    @include('Frontend.partials.script')
</body>
</html>
