@extends('frontend.main')

@section('content')
    @include('frontend.modules.slider')

    <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-sidebar-wrapper ">
                <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right">

                        <div class="gdlr-core-pbf-element">
                            <div class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-medium">
                                <h3 class="tourmaster-tour-search-content-head tourmaster-item-mglr">Tìm kiếm từ khóa: {{$tukhoa}} </h3>
                                <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    @php $sum = 0; @endphp
                                    @foreach($chuyens as $key => $chuyen)
                                        @php
                                            $sum = $sum + 1;
                                        @endphp
                                        @if($chuyen->time != null)
                                        <div class="tourmaster-item-list tourmaster-tour-medium tourmaster-item-mglr clearfix tourmaster-tour-frame gdlr-core-skin-e-background">
                                            <div class="tourmaster-tour-medium-inner">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                    <a href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html"><img src="{{ $chuyen->thumb }}" alt="" width="600" height="700" /></a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap clearfix">
                                                    <div class="tourmaster-content-left">
                                                        <h3 id="h3_chuyen" class="tourmaster-tour-title gdlr-core-skin-title"><a href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html" >{{ $chuyen->tenchuyen }}</a></h3>
                                                        <div class="tourmaster-tour-info-wrap clearfix">
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><i class="icon_clock_alt"></i>Thời gian: {{ $chuyen->time }}</div>

                                                            <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Ngày : Các ngày trong tuần </div>
                                                        </div>
                                                        <div class="tourmaster-tour-content">{{ $chuyen->content }}</div>
                                                    </div>
                                                    <div class="tourmaster-content-right tourmaster-center-tour-content">
                                                        <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">Giá vé: </span><span style="font-size: x-large" class="tourmaster-tail">{{number_format($chuyen->gia,0,'','.')}} VNĐ</span></span>
                                                        </div>
                                                        <div class="tourmaster-tour-rating tourmaster-tour-rating-empty">0</div><a class="tourmaster-tour-view-more" href="/tau-cao-toc/chuyen-co-dinh/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html">Xem chi tiết</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if($chuyen->time == null)
                                        <div class="tourmaster-item-list tourmaster-tour-medium tourmaster-item-mglr clearfix tourmaster-tour-frame gdlr-core-skin-e-background">
                                            <div class="tourmaster-tour-medium-inner">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                    <a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html"><img src="{{ $chuyen->thumb }}" alt="" width="600" height="700" /></a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap clearfix">
                                                    <div class="tourmaster-content-left">
                                                        <h3 id="h3_chuyen" class="tourmaster-tour-title gdlr-core-skin-title"><a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html" >{{ $chuyen->tenchuyen }}</a></h3>
                                                        <div class="tourmaster-tour-info-wrap clearfix">
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><strong>Loại:</strong> {{ $chuyen->loai }}</div>
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><strong>Loại tàu:</strong> {{ $chuyen->taus->tentau }}</div>
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Ngày : Các ngày trong tuần </div>
                                                        </div>
                                                        <div class="tourmaster-tour-content"></div>
                                                    </div>
                                                    <div class="tourmaster-content-right tourmaster-center-tour-content">
                                                        <div class="tourmaster-tour-price-wrap ">
                                                            <span class="tourmaster-tour-price">
                                                                <span class="tourmaster-head">Giá chuyến: </span>
                                                                <span style="font-size: large" class="tourmaster-tail">{{number_format($chuyen->gia,0,'','.')}} VNĐ</span>
                                                            </span>
                                                        </div>
                                                        <div class="tourmaster-tour-rating tourmaster-tour-rating-empty">
                                                            0
                                                        </div>
                                                        <a class="tourmaster-tour-view-more" href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyen->id }}-{{ Str::slug($chuyen->tenchuyen, '-') }}.html">Xem chi tiết
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    @if($sum == 0)
                                        <h3 style="font-size: x-large" class="tourmaster-tour-search-content-head tourmaster-item-mglr">Không tìm thấy kết quả !</h3>
                                    @endif
                                </div>
                                {!! $chuyens->links('vendor.pagination.semantic-ui') !!}
                            </div>
                        </div>

                    </div>



                    <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  traveltour-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" id="div_7f69_5">
                        <div class="gdlr-core-sidebar-item">
                            <div class="tourmaster-tour-search-item clearfix tourmaster-style-full tourmaster-column-count-8 tourmaster-item-pdlr" id="div_0576_27">
                                <div class="tourmaster-tour-search-wrap tourmaster-with-frame" id="div_0576_28" style="background-image: url(http://project_totnghiep.local/template/upload/search-bg-3.jpg)">
                                    <h3 class="tourmaster-tour-search-title">Tìm Kiếm Chuyến Tàu</h3>
                                    <form class="tourmaster-form-field tourmaster-with-border" action="/tim-kiem-theo-tuyen" method="GET">

                                        <div class="tourmaster-tour-search-field tourmaster-tour-search-field-tax">
                                            <label>Tuyến</label>
                                            <div class="tourmaster-combobox-wrap">
                                                <select name="idtuyen">
                                                    <option value="0">Tuyến</option>
                                                    @foreach($tuyens as $tuyen)
                                                        <option value="{{$tuyen->id}}">{{$tuyen->start}} - {{$tuyen->stop}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input class="tourmaster-tour-search-submit" type="submit" value="Tìm kiếm">
                                    </form>
                                </div>
                                <div id="gdlr-core-recent-post-widget-4" class="widget widget_gdlr-core-recent-post-widget traveltour-widget"></div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_0576_45">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" id="h3_0576_14"><span class="gdlr-core-title-item-left-icon" id="span_0576_6"  ><i class="fa fa-sliders" id="i_0576_6"  ></i></span>Loại hình dịch vụ<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                        <p>Nhằm đáp ứng nhu cầu của các đoàn lớn, nhỏ khác nhau, Chúng tôi có các loại tàu: tàu lớn (58 chỗ), tàu nhỏ (30 chỗ) để phục vụ quý khách đi từ cảng Hòn Gai hoặc cảng Vân Đồn ra các tuyến đảo.</p>
                                        <ul>
                                            <li class=" gdlr-core-skin-divider" id="li_0576_0">
                                                <a href="{{asset('/tau-cao-toc/chuyen-co-dinh')}}">
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" id="span_0576_7">Các chuyến cố định</span>
                                                    </div></a>
                                            </li>
                                            <li class=" gdlr-core-skin-divider" id="li_0576_1">
                                                <a href="{{asset('/tau-cao-toc/chuyen-hop-dong')}}">
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" id="span_0576_8">Chuyến theo hợp đồng</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
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
            </div>
        </div>
    </div>






@endsection


