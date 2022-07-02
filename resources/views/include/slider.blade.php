@php
    $slider = DB::table('slider_tbl')->get();
@endphp

 <!--Main Slider-->
 <section class="main-slider style3">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_three" data-version="5.4.1">
            <ul>
                @foreach ($slider as $sl)
                
                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689"
                    data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-rotate="0" data-saveperformance="off" data-slotamount="default"
                    data-thumb="{{env('APP_URL2').'/slider/'.$sl->image_name}}" data-title="Slide Title"
                    data-transition="parallaxvertical">

                    
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="{{env('APP_URL2').'/slider/'.$sl->image_name}}">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['800','800','500','400']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-145','-100','-100','-90']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            <div class="big-title">
                                {{$sl->title}}
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['800','800','500','400']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-15','15','-5','0']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            <div class="text">
                                {{$sl->description}}    
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['800','800','500','400']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['85','115','90','90']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            <div class="btn-box">
                                <a class="btn-one" href="{{$sl->virtual_image_name}}">{{$sl->sub_title}}<span
                                        class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>

                </li>
                @endforeach

                  
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->