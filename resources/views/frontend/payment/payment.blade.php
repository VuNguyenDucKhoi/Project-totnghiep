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
            <div class="tourmaster-page-wrapper" id="tourmaster-page-wrapper">
                <div class="tourmaster-payment-head tourmaster-with-background"
                    style="background-image: url({{asset('template/upload/slide1.png')}});">
                    <div class="traveltour-header-transparent-substitute" style="height: 147.8px;"></div>
                    <div class="tourmaster-payment-head-overlay-opacity"></div>
                    <div class="tourmaster-payment-head-overlay"></div>
                    <div class="tourmaster-payment-head-top-overlay"></div>
                    <div class="tourmaster-payment-title-container tourmaster-container"><h1 id="h3_chuyen"
                        @foreach($chuyens as $chuyen)
                            class="tourmaster-payment-title tourmaster-item-pdlr">{{$chuyen->tenchuyen}}</h1>
                        @endforeach
                    </div>
                    <div class="tourmaster-payment-step-wrap" id="tourmaster-payment-step-wrap">
                        <div class="tourmaster-payment-step-overlay"></div>
                        <div class="tourmaster-payment-step-container tourmaster-container">
                            <div class="tourmaster-payment-step-inner tourmaster-item-pdlr clearfix">
                                <div class="tourmaster-payment-step-item tourmaster-checked " data-step="1"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">1</span></span><span
                                        class="tourmaster-payment-step-item-title">Chọn chuyến</span></div>
                                <div class="tourmaster-payment-step-item tourmaster-current " data-step="2"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">2</span></span><span
                                        class="tourmaster-payment-step-item-title">Thông tin</span></div>
                                <div class="tourmaster-payment-step-item " data-step="3"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">3</span></span><span
                                        class="tourmaster-payment-step-item-title">Thanh toán</span></div>
                                <div class="tourmaster-payment-step-item " data-step="4"><span
                                        class="tourmaster-payment-step-item-icon"><i class="fa fa-check"></i><span
                                            class="tourmaster-text">4</span></span><span
                                        class="tourmaster-payment-step-item-title">Hoàn thành</span></div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="tourmaster-template-wrapper" id="tourmaster-payment-template-wrapper">
                    <form method="post">
                        @csrf
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
                                                <span class="tourmaster-tail">

                                                    <a href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html">
                                                        ( <span class="tourmaster-tour-booking-bar-date-edit">chỉnh sửa</span> )
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="tourmaster-tour-booking-bar-summary-people-wrap">
                                                <div
                                                    class="tourmaster-tour-booking-bar-summary-people tourmaster-variable clearfix">
                                                    <div
                                                        class="tourmaster-tour-booking-bar-summary-people-amount tourmaster-adult">
                                                        <span class="tourmaster-head">
                                                            Số vé :
                                                        </span>
                                                        <span class="tourmaster-tail">
                                                            {{$pays[$chuyen->id]}}
                                                            <input type="hidden" name="person[{{$chuyen->id}}]" value="{{$pays[$chuyen->id]}}">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tourmaster-tour-booking-bar-coupon-wrap"><input type="text"
                                                                                                        class="tourmaster-tour-booking-bar-coupon"
                                                                                                        name="coupon-code"
                                                                                                        placeholder="Mã giảm giá"
                                                                                                        value=""><a
                                                    class="tourmaster-tour-booking-bar-coupon-validate"
                                                    data-tour-id="4642" data-tid="">Apply</a>
                                                <div class="tourmaster-tour-booking-coupon-message"></div>
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
                                                                    class="tourmaster-price">{{number_format( $chuyen->gia,0,'','.')}}</span></span></div>
                                                    </div>
                                                    <div class="tourmaster-price-breakdown-summary">
                                                        <div class="tourmaster-price-breakdown-sub-total "><span
                                                                class="tourmaster-head">Tổng cộng</span><span
                                                                class="tourmaster-tail tourmaster-right">{{number_format($pays[$chuyen->id] * $chuyen->gia,0,'','.')}}</span>
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

                                        <script>window.tourmaster_total_price = "{{$pays[$chuyen->id] *  $chuyen->gia}}"</script>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area">
                                    <div id="text-14" class="widget widget_text traveltour-widget">
                                        <div class="textwidget"><span class="gdlr-core-space-shortcode"
                                                                      style="margin-top: -20px ;"></span>
                                            <div class="gdlr-core-widget-list-shortcode" id="gdlr-core-widget-list-0">
                                                <h3 class="gdlr-core-widget-list-shortcode-title">CÔNG TY THHH THÀNH HƯNG</h3>
                                                <ul>
                                                    <li><i class="fa fa-dollar"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 13px ;"></i>Bảo đảm giá rẻ nhất
                                                    </li>
                                                    <li><i class="fa fa-headphones"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Chăm sóc khách hàng 24/7
                                                    </li>
                                                    <li><i class="fa fa-star"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Nhanh chóng - an toàn &amp; Activities
                                                    </li>
                                                    <li><i class="fa fa-support"
                                                           style="font-size: 15px ;color: #4674e7 ;margin-right: 10px ;"></i>Nhân viên lịch sự chu đáo
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


                            <div class="tourmaster-tour-payment-content" id="tourmaster-tour-payment-content">
                                <div
                                    class="tourmaster-payment-contact-wrap tourmaster-form-field tourmaster-with-border">
                                    <h3 class="tourmaster-payment-contact-title"><i class="fa fa-file-text-o"></i>Thông Tin Cá Nhân</h3>
                                    <div
                                        class="tourmaster-contact-field tourmaster-contact-field-first_name tourmaster-type-text clearfix">
                                        <div class="tourmaster-head">Họ tên<span class="tourmaster-req">*</span>
                                        </div>
                                        <div class="tourmaster-tail clearfix"><input type="text" name="name"
                                                                                     value="" data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-contact-field tourmaster-contact-field-email tourmaster-type-email clearfix">
                                        <div class="tourmaster-head">Email<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><input type="email" name="email" value=""
                                                                                     data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-contact-field tourmaster-contact-field-phone tourmaster-type-text clearfix">
                                        <div class="tourmaster-head">Điện thoại<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><input type="text" name="phone" value=""
                                                                                     data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-contact-field tourmaster-contact-field-country tourmaster-type-combobox clearfix">
                                        <div class="tourmaster-head">Quốc gia<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix">
                                            <div class="tourmaster-combobox-wrap"><select name="country"
                                                                                          data-required="">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cabo Verde">Cabo Verde</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Central African Republic (CAR)">Central African
                                                        Republic (CAR)
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Democratic Republic of the Congo">Democratic Republic
                                                        of the Congo
                                                    </option>
                                                    <option value="Republic of the Congo">Republic of the Congo</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-Leste">Timor-Leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates (UAE)">United Arab Emirates
                                                        (UAE)
                                                    </option>
                                                    <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                                    <option value="United States of America (USA)">United
                                                        States of America (USA)
                                                    </option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City (Holy See)">Vatican City (Holy See)
                                                    </option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Việt Nam" selected="">Việt Nam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div
                                        class="tourmaster-contact-field tourmaster-contact-field-contact_address tourmaster-type-textarea clearfix">
                                        <div class="tourmaster-head">Địa chỉ<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><textarea
                                                name="address" data-required=""></textarea></div>
                                    </div>
                                </div>
                                <div
                                    class="tourmaster-payment-billing-wrap tourmaster-form-field tourmaster-with-border">
                                    <h3 class="tourmaster-payment-billing-title"><i class="fa fa-file-text-o"></i>Chi Tiết Hóa Đơn</h3>
                                    <div class="tourmaster-payment-billing-copy-wrap"><label><input type="checkbox"
                                                                                                    class="tourmaster-payment-billing-copy"
                                                                                                    id="tourmaster-payment-billing-copy"><span
                                                class="tourmaster-payment-billing-copy-text">Tự động điền </span></label>
                                    </div>
                                    <div
                                        class="tourmaster-billing-field tourmaster-billing-field-billing_first_name tourmaster-type-text clearfix">
                                        <div class="tourmaster-head">Họ tên<span class="tourmaster-req">*</span>
                                        </div>
                                        <div class="tourmaster-tail clearfix"><input type="text"
                                                                                     name="billing_name" value=""
                                                                                     data-contact-detail="name"
                                                                                     data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-billing-field tourmaster-billing-field-billing_email tourmaster-type-email clearfix">
                                        <div class="tourmaster-head">Email<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><input type="email" name="billing_email"
                                                                                     value=""
                                                                                     data-contact-detail="email"
                                                                                     data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-billing-field tourmaster-billing-field-billing_phone tourmaster-type-text clearfix">
                                        <div class="tourmaster-head">Điện thoại<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><input type="text" name="billing_phone"
                                                                                     value=""
                                                                                     data-contact-detail="phone"
                                                                                     data-required=""></div>
                                    </div>
                                    <div
                                        class="tourmaster-billing-field tourmaster-billing-field-billing_country tourmaster-type-combobox clearfix">
                                        <div class="tourmaster-head">Quốc gia<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix">
                                            <div class="tourmaster-combobox-wrap"><select name="billing_country"
                                                                                          data-contact-detail="country"
                                                                                          data-required="">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cabo Verde">Cabo Verde</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Central African Republic (CAR)">Central African
                                                        Republic (CAR)
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Democratic Republic of the Congo">Democratic Republic
                                                        of the Congo
                                                    </option>
                                                    <option value="Republic of the Congo">Republic of the Congo</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-Leste">Timor-Leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates (UAE)">United Arab Emirates
                                                        (UAE)
                                                    </option>
                                                    <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                                    <option value="United States of America (USA)">United
                                                        States of America (USA)
                                                    </option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City (Holy See)">Vatican City (Holy See)
                                                    </option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Việt Nam" selected="">Việt Nam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div
                                        class="tourmaster-billing-field tourmaster-billing-field-billing_contact_address tourmaster-type-textarea clearfix">
                                        <div class="tourmaster-head">Địa chỉ<span class="tourmaster-req">*</span></div>
                                        <div class="tourmaster-tail clearfix"><textarea name="billing_address"
                                                                                        data-contact-detail="address" data-required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tourmaster-payment-additional-note-wrap tourmaster-form-field tourmaster-with-border">
                                    <h3 class="tourmaster-payment-additional-note-title"><i
                                            class="fa fa-file-text-o"></i>Ghi chú</h3>
                                    <div class="tourmaster-additional-note-field clearfix"><span
                                            class="tourmaster-head">Nội dung</span><span
                                            class="tourmaster-tail clearfix"><textarea
                                                name="notes"></textarea></span></div>
                                </div>
                                <div
                                    class="tourmaster-tour-booking-required-error tourmaster-notification-box tourmaster-failure"
                                    data-default="Please fill all required fields."
                                    data-email="Invalid E-Mail, please try again."
                                    data-phone="Invalid phone number, please try again."></div>
                                <button style="height: 50px; background-color: #4CAF50;color: white;border: none;" type="submit" class="tourmaster-tour-booking-continue" >
                                    Bước tiếp theo
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        @include('frontend.modules.ft')
    </div>
</div>


@include('frontend.modules.footer')
</body>
</html>
