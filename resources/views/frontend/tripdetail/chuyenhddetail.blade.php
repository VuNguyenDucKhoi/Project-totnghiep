<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<!-- Mirrored from max-themes.net/demos/traveltour/demo1/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 16:25:13 GMT -->
<head>
    @include('frontend.modules.header')
</head>

<body class="tour-template-default single single-tour postid-4643 gdlr-core-body tourmaster-body woocommerce-no-js traveltour-body traveltour-body-front traveltour-full  traveltour-with-sticky-navigation gdlr-core-link-to-lightbox">
    @include('frontend.modules.hdmobile')
    <div class="traveltour-body-outer-wrapper ">
        <div class="traveltour-body-wrapper clearfix  traveltour-with-transparent-header traveltour-with-frame">
            <div class="traveltour-header-background-transparent">
                <div class="traveltour-top-bar">
                    <div class="traveltour-top-bar-background"></div>
                    <div class="traveltour-top-bar-container clearfix traveltour-container ">

                    <div class="traveltour-top-bar-left traveltour-item-pdlr">
                        <i class="fa fa-phone" id="i_493c_2"></i> Mr.Hưng - 0913266252 | Mr.Đạo - 0395366715
                        <i class="fa fa-envelope-o" id="i_493c_3"></i> thanhhung2510@gmail.com
                    </div>
                    <div class="traveltour-top-bar-right traveltour-item-pdlr">
                        <div class="traveltour-top-bar-right-social">
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="facebook">
                                <i class="fa fa-facebook" ></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="flickr">
                                <i class="fa fa-flickr" ></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="google-plus">
                                <i class="fa fa-google-plus" ></i>
                            </a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="twitter">
                                <i class="fa fa-twitter" ></i>
                            </a>
                        </div>

                        </div>
                    </div>
                </div>
                <header class="traveltour-header-wrap traveltour-header-style-plain  traveltour-style-menu-right traveltour-sticky-navigation traveltour-style-slide">
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
                                        <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item current-menu-item traveltour-normal-menu menu-item-has-children"><a class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                    </ul>
                                    <div class="traveltour-navigation-slide-bar" id="traveltour-navigation-slide-bar"></div>
                                </div>
                                <div class="traveltour-main-menu-right-wrap clearfix ">
                                    <div class="traveltour-main-menu-search" id="traveltour-top-search"><i class="fa fa-search"></i></div>
                                    <div class="traveltour-top-search-wrap">
                                        <div class="traveltour-top-search-close"></div>
                                        <div class="traveltour-top-search-row">
                                            <div class="traveltour-top-search-cell">
                                                <form role="search" method="get" class="search-form" action="#">
                                                    <input type="text" class="search-field traveltour-title-font" placeholder="Tìm kiếm..." value="" name="s">
                                                    <div class="traveltour-top-search-submit"><i class="fa fa-search"></i></div>
                                                    <input type="submit" class="search-submit" value="Search">
                                                    <div class="traveltour-top-search-close"><i class="icon_close"></i></div>
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
                <div class="tourmaster-page-wrapper tourmaster-tour-style-1 tourmaster-with-sidebar" id="tourmaster-page-wrapper">
                    <div class="tourmaster-single-header" style="background-image: url({{asset('template/upload/slide1.png')}});">
                        <div class="tourmaster-single-header-background-overlay"></div>
                        <div class="tourmaster-single-header-top-overlay"></div>
                        <div class="tourmaster-single-header-overlay"></div>
                        <div class="tourmaster-single-header-container tourmaster-container">
                            <div class="tourmaster-single-header-container-inner">
                                <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                                    <h1 class="tourmaster-single-header-title">{{$chuyen->tenchuyen}}</h1>
                                    <div class="tourmaster-tour-rating">
                                        <span class="tourmaster-tour-rating-text">({{$count}} Đánh giá)</span></div>
                                </div>
                                <div class="tourmaster-header-price tourmaster-item-mglr">
                                    <div class="tourmaster-header-price-ribbon">Giá Chuyến</div>
                                    <div class="tourmaster-header-price-wrap">
                                        <div class="tourmaster-header-price-overlay"></div>
                                        <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head"></span><span style="font-size: x-large" class="tourmaster-tail">{{number_format($chuyen->gia,0,'','.')}} VNĐ</span></span><span class="fa fa-info-circle tourmaster-tour-price-info" data-rel="tipsy" title="Giá trên đã bao gdồm thuế GTGT, bảo hiểm hành khách."></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tourmaster-template-wrapper">
                        <div class="tourmaster-tour-booking-bar-container tourmaster-container">
                            <div class="tourmaster-tour-booking-bar-container-inner">
                                <div class="tourmaster-tour-booking-bar-anchor tourmaster-item-mglr"></div>
                                <div class="tourmaster-tour-booking-bar-wrap tourmaster-item-mglr" id="tourmaster-tour-booking-bar-wrap">
                                    <div class="tourmaster-tour-booking-bar-outer">
                                        <div class="tourmaster-header-price tourmaster-item-mglr">
                                            <div class="tourmaster-header-price-ribbon">Giá</div>
                                            <div class="tourmaster-header-price-wrap">
                                                <div class="tourmaster-header-price-overlay"></div>
                                                <div class="tourmaster-tour-price-wrap ">
                                                    <span class="tourmaster-tour-price">
                                                        <span class="tourmaster-head">
                                                        </span>
                                                        <span class="tourmaster-tail">
                                                            {{number_format($chuyen->gia,0,'','.')}} VNĐ
                                                        </span>
                                                    </span>
                                                    <span class="fa fa-info-circle tourmaster-tour-price-info" data-rel="tipsy" title="The initial price based on 1 adult with the lowest price in low season">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tourmaster-tour-booking-bar-inner">
                                            <div class="tourmaster-booking-tab-title clearfix" id="tourmaster-booking-tab-title">
                                                <div class="tourmaster-booking-tab-title-item tourmaster-active" data-tourmaster-tab="booking">Đặt Chuyến</div>
                                            </div>
                                            <div class="tourmaster-booking-tab-content tourmaster-active" data-tourmaster-tab="enquiry">
                                                <div class="tourmaster-tour-booking-enquiry-wrap">
                                                    @include('backend.modules.alert')
                                                    <form method="post" action="/dat-ve-hd" class="tourmaster-enquiry-form tourmaster-form-field tourmaster-with-border clearfix"  data-validate-error="Please fill all required fields.">
                                                        <div class="tourmaster-enquiry-field tourmaster-enquiry-field-travel-date tourmaster-type-datepicker clearfix">
                                                            <div class="tourmaster-head">Ngày<span class="tourmaster-req">*</span></div>
                                                            <div class="tourmaster-tail clearfix">
                                                                <input type="text" class="tourmaster-datepicker" name="date" value="" />
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="tourmaster-enquiry-field tourmaster-enquiry-field-person tourmaster-type-combobox clearfix">
                                                            <div class="tourmaster-head">Số lượng tàu<span class="tourmaster-req">*</span></div>
                                                            <div class="tourmaster-tail clearfix">
                                                                <div class="tourmaster-combobox-wrap">
                                                                    <select name="person" data-required>
                                                                        <option value="Person">Số lượng</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tourmaster-enquiry-form-message"></div>
                                                        <input type="submit" class="tourmaster-button" value="Đặt Ngay" />
                                                        <input type="hidden" name="chuyen_id" value="{{$chuyen->id}}"/>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area">
                                        <div id="text-11" class="widget widget_text traveltour-widget">
                                            <div class="textwidget"><span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                                <div class="gdlr-core-widget-list-shortcode" id="gdlr-core-widget-list-0">
                                                    <h3 class="gdlr-core-widget-list-shortcode-title">CÔNG TY THHH THÀNH HƯNG</h3>
                                                    <ul>
                                                        <li><i class="fa fa-dollar" style="font-size: 15px ;color: #ffa127 ;margin-right: 13px ;"></i>Bảo đảm giá rẻ nhất </li>
                                                        <li><i class="fa fa-headphones" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Chăm sóc khách hàng 24/7 </li>
                                                        <li><i class="fa fa-star" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Nhanh chóng - an toàn</li>
                                                        <li><i class="fa fa-support" style="font-size: 15px ;color: #ffa127 ;margin-right: 10px ;"></i>Nhân viên lịch sự chu đáo</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="text-10" class="widget widget_text traveltour-widget">
                                        <div class="textwidget">
                                            <div class="gdlr-core-widget-box-shortcode " id="div_aeb3_14">
                                                <h3 class="gdlr-core-widget-box-shortcode-title" id="h3_aeb3_7">Bạn cần tư vấn?</h3>
                                                <div class="gdlr-core-widget-box-shortcode-content">
                                                    <p>Đừng ngại gọi cho chúng tôi. Chúng tôi sẽ tư vấn và giải đáp thắc mắc của bạn.</p>
                                                    <p><i class="fa fa-phone" id="i_aeb3_4"></i> <span id="span_aeb3_1">Mr.Hưng - 0913266252 <br/><i class="fa fa-phone" id="i_aeb3_4"></i>  Mr.Đạo - 0395366715 </span></p>
                                                    <p><span id="span_aeb3_2">Thanhhung2510@gmail.com</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-tour-info-outer">
                            <div class="tourmaster-tour-info-outer-container tourmaster-container">
                                <div class="tourmaster-tour-info-wrap clearfix">
                                    <div class="tourmaster-tour-info tourmaster-tour-info-availability tourmaster-item-pdlr"><i class="fa fa-calendar"></i>Các ngày trong tuần </div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-duration-text tourmaster-item-pdlr"><i class="icon_clock_alt"></i>Chúng tôi sẽ liên hệ để chốt giờ chạy theo yêu cầu của hành khách.</div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-departure-location tourmaster-item-pdlr"><i class="flaticon-takeoff-the-plane"></i>Bắt đầu: {{$chuyen->tuyens->start}}</div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-return-location tourmaster-item-pdlr"><i class="flaticon-plane-landing"></i>Đi đến: {{$chuyen->tuyens->stop}}</div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-maximum-people tourmaster-item-pdlr"><i class="fa fa-align-left"></i>Loại: {{$chuyen->loai}}</div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-maximum-people tourmaster-item-pdlr"><i class="fa fa-users"></i>Số lượng ghế : {{$chuyen->taus->soghe}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-page-builder-body">
                            <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="tourmaster-content-navigation-item-wrap clearfix" style="padding-bottom: 0px;">
                                                <div class="tourmaster-content-navigation-item-outer" id="tourmaster-content-navigation-item-outer">
                                                    <div class="tourmaster-content-navigation-item-container tourmaster-container">
                                                        <div class="tourmaster-content-navigation-item tourmaster-item-pdlr">
                                                            <a class="tourmaster-content-navigation-tab tourmaster-active" href="#detail">Thông tin</a>
                                                            <a class="tourmaster-content-navigation-tab " href="#photos">Ảnh</a>
                                                            <a class="tourmaster-content-navigation-tab " href="#tourmaster-single-review">Đánh giá</a>
                                                            <div class="tourmaster-content-navigation-slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 30px 0px;" data-skin="Blue Icon" id="detail">
                                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                                        <span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"  >
                                                            <i class="fa fa-file-text-o"  ></i>
                                                        </span>
                                                        Thông Tin Chuyến
                                                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                {!! $chuyen->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="photos">
                                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"  ><i class="icon_images"  ></i></span>Ảnh<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h6></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr ">
                                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="bullet">
                                                    <ul class="slides">
                                                        @foreach($sliders as $slider)
                                                        <li>
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="{{$slider->thumb}}" data-ilightbox-group="gdlr-core-img-group-1">
                                                                    <img src="{{$slider->thumb}}" alt="" width="1500" height="1000" />
                                                                    <span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-single-related-tour tourmaster-tour-item tourmaster-style-grid">
                            <div class="tourmaster-single-related-tour-container tourmaster-container">
                                <h3 class="tourmaster-single-related-tour-title tourmaster-item-pdlr">Chuyến Khác</h3>
                                <div class="tourmaster-tour-item-holder clearfix ">
                                    @foreach($chuyens as $chuyenk)
                                    <div class="gdlr-core-item-list  tourmaster-column-30 tourmaster-item-pdlr">
                                        <div class="tourmaster-tour-grid  tourmaster-price-right-title">
                                            <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                <a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyenk->id }}-{{ Str::slug($chuyenk->tenchuyen, '-') }}.html"><img src="{{ $chuyenk->thumb }}" alt="" style="width: 350px; height: 200px;"  /></a>
                                            </div>
                                            <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background">
                                                <h3 id="h3_chuyen" class="tourmaster-tour-title gdlr-core-skin-title"><a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyenk->id }}-{{ Str::slug($chuyenk->tenchuyen, '-') }}.html" >{{$chuyenk->tenchuyen}}</a></h3>
                                                <p>
                                                    Loại: {{$chuyenk->loai}}
                                                    <br/>Tàu: {{$chuyenk->taus->tentau}}
                                                </p>
                                                <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">Giá</span><span style="font-size: large" class="tourmaster-tail">{{number_format($chuyenk->gia,0,'','.')}} VNĐ</span></span>
                                                </div>
                                                <div class="tourmaster-tour-rating">
                                                    <span class="tourmaster-tour-rating-text"><hr></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-single-review-container tourmaster-container">
                        <div class="tourmaster-single-review-item tourmaster-item-pdlr">
                            <div class="tourmaster-single-review" id="tourmaster-single-review">
                                <div class="tourmaster-single-review-head clearfix">
                                    <div class="tourmaster-single-review-head-info clearfix">
                                        <div class="tourmaster-tour-rating"><span class="tourmaster-tour-rating-text">{{$count}} Đánh giá</span></div>
                                        <div class="tourmaster-single-review-filter"
                                             id="tourmaster-single-review-filter">
                                            <div class="tourmaster-single-review-sort-by"><span class="tourmaster-head">Sắp xếp:</span><span
                                                    class="tourmaster-sort-by-field tourmaster-active"
                                                    data-sort-by="date">Thời gian</span></div>
                                            <div
                                                class="tourmaster-single-review-filter-by tourmaster-form-field tourmaster-with-border">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tourmaster-single-review-content" id="tourmaster-single-review-content"
                                     data-tour-id="4642"
                                     data-ajax-url="https://max-themes.net/demos/wp-admin/admin-ajax.html">
                                    @foreach($comments as $comment)
                                    <div class="tourmaster-single-review-content-item clearfix">
                                        <div class="tourmaster-single-review-user clearfix">
                                            <div class="tourmaster-single-review-avatar tourmaster-media-image"><img
                                                    alt=''
                                                    src='https://secure.gravatar.com/avatar/3fd67cef7cae9956b8831c16a70dba11?s=85&amp;d=mm&amp;r=g'
                                                    srcset="https://secure.gravatar.com/avatar/3fd67cef7cae9956b8831c16a70dba11?s=170&#038;d=mm&#038;r=g 2x"
                                                    class='avatar avatar-85 photo' height='85' width='85'/></div>
                                            <h4 class="tourmaster-single-review-user-name">{{$comment->name}}</h4>
                                        </div>
                                        <div class="tourmaster-single-review-detail">
                                            <div class="tourmaster-single-review-detail-description">
                                                <p>{{$comment->comment}}</p>
                                            </div>
                                            <div class="tourmaster-single-review-detail-rating">

                                            </div>
                                            <div class="tourmaster-single-review-detail-date">{{$comment->created_at}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>


                            <div class="tourmaster-single-review" id="tourmaster-single-review">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <h4 id="reply-title" class="comment-reply-title traveltour-content-font">Đánh giá <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel Reply</a></small></h4>

                                            @include('backend.modules.alert')
                                            <form action="/tau-cao-toc/chuyen-hop-dong/binh-luan" method="post" id="commentform" class="comment-form" novalidate>
                                                @csrf
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                            <br>
                                                            <input id="name" type="text" name="name"
                                                                                   size="40"
                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                   aria-required="true"
                                                                                   aria-invalid="false"
                                                                                   placeholder="Tên của bạn (required)">
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <textarea id="comment" name="comment"
                                                                                      cols="40" rows="10"
                                                                                      class="wpcf7-form-control wpcf7-textarea"
                                                                                      aria-invalid="false"
                                                                                      placeholder="Đánh giá"></textarea>
                                                    </div>
                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit">
                                                        <div class="quform-submit-inner">
                                                            <hr>
                                                            <input name="chuyen_id" type="hidden" value="{{$chuyen->id}}" />
                                                            <button type="submit" class="submit-button"><span>Gửi</span>
                                                            </button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span
                                                                class="quform-loading"></span></div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>

            @include('frontend.modules.ft')
        </div>
    </div><a href="#traveltour-top-anchor" class="traveltour-footer-back-to-top-button" id="traveltour-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>

@include('frontend.modules.footer')
</body>



<!-- Mirrored from max-themes.net/demos/traveltour/demo1/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 16:25:17 GMT -->
</html>
