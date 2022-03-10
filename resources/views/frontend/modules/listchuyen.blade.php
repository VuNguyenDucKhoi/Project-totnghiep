<div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
    @foreach($chuyens as $key => $chuyen)
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
    @endforeach
</div>
