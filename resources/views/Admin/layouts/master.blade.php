<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
    @include('admin.layouts.style')
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-94034622-3');
</script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        {{-- sidebar --}}
        @include('admin.layouts.sidebar')
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        {{-- footer --}}
        @include('admin.layouts.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  @include('admin.layouts.script')
</body>
</html>
