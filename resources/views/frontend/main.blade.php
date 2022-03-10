<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">


<!-- Mirrored from max-themes.net/demos/traveltour/demo1/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 16:25:13 GMT -->
<head>
    @include('frontend.modules.header')
</head>

<body class="home page-template-default page page-id-2039 gdlr-core-body tourmaster-body woocommerce-no-js traveltour-body traveltour-body-front traveltour-full  traveltour-with-sticky-navigation gdlr-core-link-to-lightbox">
    @include('frontend.modules.hdmobile')
    <div class="traveltour-body-outer-wrapper ">
        <div class="traveltour-body-wrapper clearfix  traveltour-with-transparent-header traveltour-with-frame">
            @include('frontend.modules.hd')

            <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">

                @yield('content')
            </div>


            @include('frontend.modules.ft')
        </div>
    </div><a href="#traveltour-top-anchor" class="traveltour-footer-back-to-top-button" id="traveltour-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>

@include('frontend.modules.footer')

</body>

<!-- Mirrored from max-themes.net/demos/traveltour/demo1/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 16:25:17 GMT -->
</html>
