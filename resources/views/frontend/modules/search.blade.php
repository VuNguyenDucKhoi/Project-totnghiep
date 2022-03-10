<div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Search Hp2">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
{{--                                            tìm kiếm--}}
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-tour-search-item clearfix tourmaster-style-full tourmaster-column-count-8 tourmaster-item-pdlr" id="div_0576_27">
                                                    <div class="tourmaster-tour-search-wrap tourmaster-with-frame" id="div_0576_28" style="background-image: url({{asset('template/upload/search-bg-3.jpg')}})">
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
                                                            <input class="tourmaster-tour-search-submit" type="submit" value="Tìm kiếm" />
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
{{--đánh giá--}}
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_0576_29">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" id="h3_0576_5"><span class="gdlr-core-title-item-left-icon" id="span_0576_1"  ><i class="fa fa-commenting-o" id="i_0576_1"  ></i></span>Đánh giá<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                            </div>
{{--nội dung dánh giá--}}
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-tour-review-item tourmaster-item-pdlr clearfix" id="div_0576_30">

                                                    @foreach($comments as $comment)
                                                    <div class="tourmaster-tour-review-item-list">
                                                        <div class="tourmaster-tour-review-item-avatar tourmaster-media-image"><img alt='' src='upload/c4ffc7a48d6a02dac31975c893fa7ddb.jpg'  class='avatar avatar-85 photo' height='85' width='85' /></div>
                                                        <div class="tourmaster-tour-review-item-content">
                                                            <h3 class="tourmaster-tour-review-item-title"><a>{{$comment->comment}}</a></h3>
                                                            <div class="tourmaster-tour-review-item-rating">
                                                                <span class="tourmaster-tour-review-item-user">{{$comment->name}}</span></div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
{{--                                            đăng ký nhận tin--}}
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_0576_31">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" id="h3_0576_6"><span class="gdlr-core-title-item-left-icon" id="span_0576_2"  ><i class="fa fa-envelope-o" id="i_0576_2"  ></i></span>Đăng ký nhận tin<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle-full" id="div_0576_32">

                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="https://demo.goodlayers.com/traveltour/?na=s" onsubmit="return newsletter_check(this)">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit">
                                                                <input class="newsletter-submit" type="submit" value="Đăng ký" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
