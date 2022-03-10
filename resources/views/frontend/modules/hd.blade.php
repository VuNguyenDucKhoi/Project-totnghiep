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

                                        @if(request()->is('/'))
                                        <li class="menu-item menu-item-home current-menu-item traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item traveltour-normal-menu menu-item-has-children"><a class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                        @endif

                                        @if(request()->is('gioithieu'))
                                        <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item current-menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item traveltour-normal-menu menu-item-has-children"><a href="#" class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                        @endif

                                        @if(request()->is('tau-cao-toc/chuyen-co-dinh', 'tau-cao-toc/chuyen-hop-dong'))
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
                                        @endif

                                        @if(request()->is('lienhe'))
                                        <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item traveltour-normal-menu menu-item-has-children"><a class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item current-menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                        @endif
                                        @if(request()->is('tintuc'))
                                        <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item traveltour-normal-menu menu-item-has-children"><a class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item current-menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                        @endif
                                        @if(request()->is('tim-kiem', 'tim-kiem-theo-tuyen'))
                                        <li class="menu-item menu-item-home traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Trang chủ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('gioithieu')}}" class="sf-with-ul-pre">Giới thiệu</a></li>
                                        <li class="menu-item traveltour-normal-menu menu-item-has-children"><a class="sf-with-ul-pre">Tàu cao tốc</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-co-dinh')}}">Lịch chuyến cố định</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{asset('tau-cao-toc/chuyen-hop-dong')}}">Chuyến theo hợp đồng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('lienhe')}}">Liên hệ</a></li>
                                        <li class="menu-item traveltour-normal-menu"><a href="{{asset('tintuc')}}" class="sf-with-ul-pre">Tin tức</a></li>
                                        @endif

                                    </ul>
                                    <div class="traveltour-navigation-slide-bar" id="traveltour-navigation-slide-bar"></div>
                                </div>
                                <div class="traveltour-main-menu-right-wrap clearfix ">
                                    <div class="traveltour-main-menu-search" id="traveltour-top-search"><i class="fa fa-search"></i></div>
                                    <div class="traveltour-top-search-wrap">
                                        <div class="traveltour-top-search-close"></div>
                                        <div class="traveltour-top-search-row">
                                            <div class="traveltour-top-search-cell">
                                                <form role="search" method="get" class="search-form" action="/tim-kiem">
                                                    @csrf
                                                    <input type="text" class="search-field traveltour-title-font" placeholder="Tìm kiếm..." value="" name="tukhoa">
                                                    <div class="traveltour-top-search-submit"><i class="fa fa-search"></i></div>
                                                    <input type="submit" class="search-submit">
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
