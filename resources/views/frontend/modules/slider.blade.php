<div class="gdlr-core-pbf-wrapper " id="div_493c_0">
                        <div class="gdlr-core-pbf-background-wrap" id="div_493c_1"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_493c_2">
                                        <link href="https://fonts.googleapis.com/css?family=Roboto:900%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" >
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>

                                                    @foreach($sliders as $slider)
                                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{$slider->thumb}}" alt="" title="slider-1" width="1800" height="844" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="89" data-y="center" data-voffset="10" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2000,"to":"o:1;","delay":450,"ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 81px;  font-weight: 600; color: rgba(255,255,255,1);font-family:Poppins;">{{$slider->name}}</div>
                                                        <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="90" data-y="center" data-voffset="92" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":690,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 45px;  font-weight: 600; color: rgba(255, 166, 0, 1);font-family:Poppins;">DU LỊCH THÀNH HƯNG</div>
                                                        <div href="{{$slider->url}}" class="tp-caption rev-btn  tp-resizeme" id="slide-1-layer-4" data-x="94" data-y="center" data-voffset="200" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":1060,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(70,123,231,1);"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[20,20,20,20]" data-paddingright="[32,32,32,32]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[32,32,32,32]" style="z-index: 8; white-space: nowrap; font-size: 13px; line-height: 12px; font-weight: 900; color: rgba(255,255,255,1);font-family:Roboto;text-transform:uppercase;background-color:rgba(70,146,231,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Xem Ngay</div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
