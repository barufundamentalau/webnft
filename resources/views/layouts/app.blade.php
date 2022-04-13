<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    @include('includes.meta')

    <!-- Meta tags for Social Media(Better SEO) -->
    <!-- <meta property="og:title" content=""> -->
    <!-- <meta property="og:type" content=""> -->
    <!-- <meta property="og:url" content=""> -->
    <!-- <meta property="og:image" content=""> -->

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="capadesu/assets/images/favicon.png">

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

    <!-- site title -->
    <title>Pogogutat NFT</title>
</head>

<body class="home-4">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- ===============// header section start here \\================= -->
    @include('includes.header')
    <!-- ===============//header section end here \\================= -->

    {{-- isi content --}}
    @yield('content')
    {{-- end isi content --}}

    <!-- ===============//footer section start here \\================= -->
    @include('includes.footer')
    <!-- ===============//footer section end here \\================= -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-stylish-up"></i></a>
    <!-- scrollToTop ending here -->

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>
