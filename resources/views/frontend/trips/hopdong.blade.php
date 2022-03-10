@extends('frontend.main')

@section('content')
@include('frontend.modules.slider')
    <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 40px 0px;">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 id="h3_chuyen" class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none ;">Chuyến Hợp Đồng<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align">
                                        <div class="gdlr-core-divider-container" style="max-width: 40px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #303030 ;border-bottom-width: 2px ;"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left">
                                <div class="gdlr-core-pbf-background-wrap" id="div_aeb3_3"></div>
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-medium">
                                            @include('frontend.modules.listchuyenhd')
                                            {!! $chuyenhds->links('vendor.pagination.semantic-ui') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  traveltour-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" id="div_aeb3_8">
                                <div class="gdlr-core-pbf-background-wrap" id="div_aeb3_9"></div>
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="tourmaster-tour-widget-5" class="widget widget_tourmaster-tour-widget traveltour-widget">
                                        <h3 class="traveltour-widget-title">
                                            <span class="traveltour-widget-head-text left">Chuyến cố định</span>
                                            <a class="gdlr-core-title-item-link" target="_self"  href="{{asset('tau-cao-toc/chuyen-co-dinh')}}" >
                                                <span class="gdlr-core-separator" >/</span>
                                                <span class="gdlr-core-content" >
                                                    Xem tất cả
                                                </span>
                                                <i class="gdlr-core-pos-left fa fa-arrow-circle-right"  ></i>
                                            </a>
                                        </h3><span class="clear"></span>

                                        <div class="tourmaster-recent-tour-widget tourmaster-tour-item">
                                            @foreach($chuyens as $chuyen)
                                            <div class="tourmaster-item-list tourmaster-tour-widget tourmaster-item-pdlr">
                                                <div class="tourmaster-tour-widget-inner clearfix">
                                                    <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                        <a href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html"><img src="{{$chuyen->thumb}}" alt="" width="150" height="150" /></a>
                                                    </div>
                                                    <div class="tourmaster-tour-content-wrap">
                                                        <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html" >{{$chuyen->tenchuyen}}</a></h3>
                                                        <div class="tourmaster-tour-content-info clearfix ">
                                                            <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">Giá vé:</span><span class="tourmaster-tail">{{number_format($chuyen->gia,0,'','.')}} VNĐ</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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

                                    <div id="gdlr-core-recent-post-widget-4" class="widget widget_gdlr-core-recent-post-widget traveltour-widget">
                                        <h3 class="traveltour-widget-title">
                                            <span class="traveltour-widget-head-text">
                                                Tin tức
                                            </span>
                                            <a class="gdlr-core-title-item-link" target="_self"  href="{{asset('tintuc')}}" >
                                                <span class="gdlr-core-separator" >/</span>
                                                <span class="gdlr-core-content" >
                                                    Xem tất cả
                                                </span>
                                                <i class="gdlr-core-pos-left fa fa-arrow-circle-right"  ></i>
                                            </a>
                                        </h3>
                                        <span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                           @foreach($blogs as $blog)
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img style="width: 70px; height: 70px" src="{{$blog->thumb}}" alt="" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="/tintuc/{{ $blog->id }}-{{ Str::slug($blog->title, '-') }}.html">{{$blog->title}}</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info">
                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                            <span class="gdlr-core-head" ><i class="icon_clock_alt" ></i>
                                                            </span><a >{{date_format($blog->created_at, "d/m/Y")}}</a>
                                                        </span>
                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                            <span class="gdlr-core-head" ><i class="icon_documents_alt" ></i>
                                                            </span><a rel="author">{{$blog->author}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection



