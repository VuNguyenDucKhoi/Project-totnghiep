<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    @include('frontend.modules.header')
</head>

<body
    class="home page-template-default page page-id-2039 theme-traveltour gdlr-core-body tourmaster-template-payment tourmaster-body woocommerce-js traveltour-body traveltour-body-front traveltour-full  traveltour-with-sticky-navigation gdlr-core-link-to-lightbox">
@include('frontend.modules.hdmobile')

<div class="traveltour-body-outer-wrapper mm-page mm-slideout" id="mm-0">
    <div class="traveltour-body-wrapper clearfix  traveltour-with-transparent-header traveltour-with-frame">
        <div class="traveltour-header-background-transparent">
            <div class="traveltour-top-bar ">
                <div class="traveltour-top-bar-background"></div>
                <div class="traveltour-top-bar-container clearfix traveltour-container ">

                    <div class="traveltour-top-bar-left traveltour-item-pdlr">
                        <i class="fa fa-phone" id="i_493c_2"></i> Mr.Hưng - 0913266252 | Mr.Đạo - 0395366715
                        <i class="fa fa-envelope-o" id="i_493c_3"></i> thanhhung2510@gmail.com
                    </div>
                    <div class="traveltour-top-bar-right traveltour-item-pdlr">
                        <div class="traveltour-top-bar-right-social">
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="flickr">
                                <i class="fa fa-flickr"></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="google-plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <header
                class="traveltour-header-wrap traveltour-header-style-plain  traveltour-style-menu-right traveltour-sticky-navigation traveltour-style-slide">
                <div class="traveltour-header-background"></div>
                <div class="traveltour-header-container  traveltour-container">
                    <div class="traveltour-header-container-inner clearfix">
                        <div class="traveltour-logo  traveltour-item-pdlr">
                            <div class="traveltour-logo-inner">
                                <a href="/" style="font-size: large; color: white">THÀNH HƯNG TRAVEL</a>
                            </div>
                        </div>
                        <div class="traveltour-navigation traveltour-item-pdlr clearfix ">
                            <div class="traveltour-main-menu" id="traveltour-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/"
                                                                                                   class="sf-with-ul-pre">Trang
                                            chủ</a></li>
                                    <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}"
                                                                                    class="sf-with-ul-pre">Giới
                                            thiệu</a></li>
                                    <li class="menu-item current-menu-item traveltour-normal-menu menu-item-has-children">
                                        <a class="sf-with-ul-pre">Tàu cao tốc</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a
                                                    href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố
                                                    định</a></li>
                                            <li class="menu-item" data-size="60"><a
                                                    href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp
                                                    đồng</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên
                                            hệ</a></li>
                                    <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}"
                                                                                    class="sf-with-ul-pre">Tin tức</a>
                                    </li>
                                </ul>
                                <div class="traveltour-navigation-slide-bar" id="traveltour-navigation-slide-bar"></div>
                            </div>
                            <div class="traveltour-main-menu-right-wrap clearfix ">
                                <div class="traveltour-main-menu-search" id="traveltour-top-search"><i
                                        class="fa fa-search"></i></div>
                                <div class="traveltour-top-search-wrap">
                                    <div class="traveltour-top-search-close"></div>
                                    <div class="traveltour-top-search-row">
                                        <div class="traveltour-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field traveltour-title-font"
                                                       placeholder="Tìm kiếm..." value="" name="s">
                                                <div class="traveltour-top-search-submit"><i class="fa fa-search"></i>
                                                </div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="traveltour-top-search-close"><i class="icon_close"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
            <div class="tourmaster-page-wrapper" id="tourmaster-page-wrapper">

                <div class="tourmaster-payment-head tourmaster-with-background"
                     style="background-image: url({{asset('template/upload/slide1.png')}});">
                    <div class="traveltour-header-transparent-substitute" style="height: 147.8px;"></div>
                    <div class="tourmaster-payment-head-overlay-opacity"></div>
                    <div class="tourmaster-payment-head-overlay"></div>
                    <div class="tourmaster-payment-head-top-overlay"></div>
                    <div class="tourmaster-payment-title-container tourmaster-container"><h1 id="h3_chuyen"
                                                                                             class="tourmaster-payment-title tourmaster-item-pdlr"></h1>
                    </div>
                    <div class="tourmaster-payment-step-wrap" id="tourmaster-payment-step-wrap">

                        <div class="tourmaster-payment-step-overlay"></div>
                        <div class="tourmaster-payment-step-container tourmaster-container">
                            <div class="tourmaster-payment-step-inner tourmaster-item-pdlr clearfix">
                                <div class="tourmaster-payment-step-item tourmaster-checked " data-step="1"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">1</span></span><span
                                        class="tourmaster-payment-step-item-title">Chọn chuyến</span></div>
                                <div class="tourmaster-payment-step-item tourmaster-checked " data-step="2"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">2</span></span><span
                                        class="tourmaster-payment-step-item-title">Thông tin</span></div>
                                <div class="tourmaster-payment-step-item tourmaster-checked " data-step="3"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">3</span></span><span
                                        class="tourmaster-payment-step-item-title">Thanh toán</span></div>
                                <div class="tourmaster-payment-step-item tourmaster-checked" data-step="4"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">4</span></span><span
                                        class="tourmaster-payment-step-item-title">Hoàn thành</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tourmaster-template-wrapper" id="tourmaster-payment-template-wrapper"
                     data-ajax-url="https://demo.goodlayers.com/traveltour/wp-admin/admin-ajax.php"
                     data-booking-detail="&quot;&quot;">
                    <div class="tourmaster-container">
                        <div class="tourmaster-page-content tourmaster-item-pdlr clearfix">
                            <div class="tourmaster-tour-booking-bar-wrap" id="tourmaster-tour-booking-bar-wrap">
                                <div class="tourmaster-tour-booking-bar-outer">
                                    @foreach($chuyens as $chuyen)
                                    <div class="tourmaster-tour-booking-bar-inner"
                                         id="tourmaster-tour-booking-bar-inner">
                                        <div class="tourmaster-tour-booking-bar-summary"><h3
                                                class="tourmaster-tour-booking-bar-summary-title">{{$chuyen->tenchuyen}}</h3>
                                            <div
                                                class="tourmaster-tour-booking-bar-summary-info tourmaster-summary-travel-date">
                                                 <span class="tourmaster-head">Vé hiệu lực ngày: {{$ngays[$chuyen->id]}}
                                                <input type="hidden" name="date[{{$chuyen->id}}]" value="{{$ngays[$chuyen->id]}}"></span>
                                                <span class="tourmaster-tail"> </span>
                                            </div>
                                            <div class="tourmaster-tour-booking-bar-summary-people-wrap">
                                                <div
                                                    class="tourmaster-tour-booking-bar-summary-people tourmaster-variable clearfix">
                                                    <div
                                                        class="tourmaster-tour-booking-bar-summary-people-amount tourmaster-adult">
                                                        <span class="tourmaster-head">Số vé : </span><span
                                                            class="tourmaster-tail">
                                                            {{$pays[$chuyen->id]}}
                                                            <input type="hidden" name="person[{{$chuyen->id}}]" value="{{$pays[$chuyen->id]}}"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tourmaster-tour-booking-bar-price-breakdown-wrap"><span
                                                    class="tourmaster-tour-booking-bar-price-breakdown-link"
                                                    id="tourmaster-tour-booking-bar-price-breakdown-link">Xem chi tiết giá</span>
                                                <div class="tourmaster-price-breakdown">
                                                    <div class="tourmaster-price-breakdown-base-price-wrap">
                                                        <div class="tourmaster-price-breakdown-base-price"><span
                                                                class="tourmaster-head">Giá vé</span><span
                                                                class="tourmaster-tail"><span
                                                                    class="tourmaster-price-detail">{{$pays[$chuyen->id]}} x {{number_format($chuyen->gia,0,'','.')}}</span><span
                                                                    class="tourmaster-price">{{number_format($pays[$chuyen->id]* $chuyen->gia,0,'','.')}}</span></span></div>
                                                    </div>
                                                    <div class="tourmaster-price-breakdown-summary">
                                                        <div class="tourmaster-price-breakdown-sub-total ">
                                                            <span class="tourmaster-head">Tổng cộng</span>
                                                            <span class="tourmaster-tail tourmaster-right">{{number_format($pays[$chuyen->id] * $chuyen->gia,0,'','.')}}

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourmaster-tour-booking-bar-total-price-wrap ">
                                            <i class="icon_tag_alt"></i><span
                                                class="tourmaster-tour-booking-bar-total-price-title">Tổng cộng</span><span
                                                class="tourmaster-tour-booking-bar-total-price">{{number_format($pays[$chuyen->id] *  $chuyen->gia,0,'','.')}} VNĐ</span></div>
                                        <script>window.tourmaster_total_price = ""</script>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area">
                                    <div id="text-14" class="widget widget_text traveltour-widget">
                                        <div class="textwidget"><span class="gdlr-core-space-shortcode"
                                                                      style="margin-top: -20px ;"></span>
                                            <div class="gdlr-core-widget-list-shortcode" id="gdlr-core-widget-list-0">
                                                <h3 class="gdlr-core-widget-list-shortcode-title">CÔNG TY THHH THÀNH
                                                    HƯNG</h3>
                                                <ul>
                                                    <li><i class="fa fa-dollar"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 13px ;"></i>Bảo
                                                        đảm giá rẻ nhất
                                                    </li>
                                                    <li><i class="fa fa-headphones"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Chăm
                                                        sóc khách hàng 24/7
                                                    </li>
                                                    <li><i class="fa fa-star"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Nhanh
                                                        chóng - an toàn &amp; Activities
                                                    </li>
                                                    <li><i class="fa fa-support"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Nhân
                                                        viên lịch sự chu đáo
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="text-13" class="widget widget_text traveltour-widget">
                                        <div class="textwidget"><span class="gdlr-core-space-shortcode"
                                                                      style="margin-top: -10px ;"></span>
                                            <div class="gdlr-core-widget-box-shortcode "
                                                 style="background-color: #373737 ;"><h3
                                                    class="gdlr-core-widget-box-shortcode-title"
                                                    style="color: #ffffff ;">An toàn với chúng tôi </h3><i
                                                    class="gdlr-core-widget-box-shortcode-icon icon_lock_alt"></i>
                                                <div class="gdlr-core-widget-box-shortcode-content"><p><span
                                                            style="font-size: 13px; color: #ffffff; ">Thanh toán được mã hóa và<br> Truyền một cách an toàn với <strong>SSL<br> Giao thức.</strong></span>
                                                    </p> <span class="gdlr-core-space-shortcode"
                                                               style="margin-top: 25px ;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tourmaster-tour-payment-content" id="tourmaster-tour-payment-content"
                                 style="opacity: 1; height: auto;">
                                <div class="tourmaster-payment-complete-wrap">
                                    <div class="tourmaster-payment-complete-head">Đặt Vé Hoàn Tất!</div>
                                    <div class="tourmaster-payment-complete-content-wrap"><i
                                            class=" icon_check_alt2 tourmaster-payment-complete-icon"></i>
                                        <div class="tourmaster-payment-complete-thank-you">Cảm ơn Quý khách!</div>
                                        <div class="tourmaster-payment-complete-content">Chi tiết đặt vé của bạn đã được gửi đến email của bạn.
                                        </div>
                                        <a class="tourmaster-payment-complete-button tourmaster-button"
                                           href="/">Quay lại trang chủ</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.modules.ft')
    </div>
</div>

<a href="#traveltour-top-anchor" class="traveltour-footer-back-to-top-button traveltour-scrolled"
   id="traveltour-footer-back-to-top-button"><i class="fa fa-angle-up"></i></a>


@include('frontend.modules.footer')

</body>


</html>


