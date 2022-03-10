<div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
    @foreach($chuyenhds as $key => $chuyenhd)
        <div class="tourmaster-item-list tourmaster-tour-medium tourmaster-item-mglr clearfix tourmaster-tour-frame gdlr-core-skin-e-background">
            <div class="tourmaster-tour-medium-inner">
                <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                    <a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyenhd->id }}-{{ Str::slug($chuyenhd->tenchuyen, '-') }}.html"><img src="{{ $chuyenhd->thumb }}" alt="" width="600" height="700" /></a>
                </div>
                <div class="tourmaster-tour-content-wrap clearfix">
                    <div class="tourmaster-content-left">
                        <h3 id="h3_chuyen" class="tourmaster-tour-title gdlr-core-skin-title"><a href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyenhd->id }}-{{ Str::slug($chuyenhd->tenchuyen, '-') }}.html" >{{ $chuyenhd->tenchuyen }}</a></h3>
                        <div class="tourmaster-tour-info-wrap clearfix">
                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><strong>Loại:</strong> {{ $chuyenhd->loai }}</div>
                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><strong>Loại tàu:</strong> {{ $chuyenhd->taus->tentau }}</div>
                            <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Ngày : Các ngày trong tuần </div>
                        </div>
                        <div class="tourmaster-tour-content"></div>
                    </div>
                    <div class="tourmaster-content-right tourmaster-center-tour-content">
                        <div class="tourmaster-tour-price-wrap ">
                            <span class="tourmaster-tour-price">
                                <span class="tourmaster-head">Giá chuyến: </span>
                                <span style="font-size: large" class="tourmaster-tail">{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</span>
                            </span>
                        </div>
                        <div class="tourmaster-tour-rating tourmaster-tour-rating-empty">
                            0
                        </div>
                        <a class="tourmaster-tour-view-more" href="/tau-cao-toc/chuyen-hop-dong/{{ $chuyenhd->id }}-{{ Str::slug($chuyenhd->tenchuyen, '-') }}.html">Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

