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
                                            <h3 id="h3_chuyen" class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none ;">Tin Tức<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
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

                    <div class="gdlr-core-pbf-wrapper ">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1870_0"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame" id="div_1870_1">
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                                            @foreach($blogs as $blog)
                                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                                <div class="gdlr-core-blog-grid gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background " data-sync-height="blog-item-1">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="/tintuc/{{ $blog->id }}-{{ Str::slug($blog->title, '-') }}.html"><img  src="{{$blog->thumb}}" alt="" width="700" height="430" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-grid-frame">
                                                        <div class="gdlr-core-blog-grid-date"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><a>{{date_format($blog->created_at, "d/m/Y - H:i:s")}}</a></span>
                                                        </div>
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1870_0"><a href="/tintuc/{{ $blog->id }}-{{ Str::slug($blog->title, '-') }}.html" >{{Str::limit($blog->title, 34, $end='...')}}</a></h3>
                                                        <div class="gdlr-core-blog-content">{{Str::limit($blog->introtext, 150, $end='...')}}

                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="/tintuc/{{ $blog->id }}-{{ Str::slug($blog->title, '-') }}.html">Đọc tiếp</a></div>
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider" data-sync-height-offset>
                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                <span class="gdlr-core-head" >
                                                                    <i class="icon_documents_alt" ></i>
                                                                </span>
                                                                <a rel="author">{{$blog->author}}</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        {!! $blogs->links('vendor.pagination.semantic-ui') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection


