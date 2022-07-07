<x-layout>
    @slot('title', 'Home')
    @slot('body')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2"
            style="background-image: url({{ url('frontend/images/resources/breadcrumb-bg-2.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Our Services</span>
                                <h1>{{ $data->log_title }}</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class=""  ><a href="{{route('services')}}">Services</a></li>
                                    <li class="active">{{ $data->log_title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <section class="single-service-area faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                        <div class=" single-service-sidebar">
                            <!--Start Single sidebar-->
                            <div class="single-sidebar accordion-box">
                                <!--Start single accordion box-->
                                @if ($data->title1 != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn  active">
                                            <span class="hdd">{{ $data->title1 }}</span>
                                        </div>
                                        <div class="accord-content collapsed">
                                            <p class="text-justify">{{ $data->description1 }}</p>
                                        </div>
                                    </div>
                                @endif

                                <!--End single accordion box-->
                                <!--Start single accordion box-->
                                @if ($data->title2 != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title2 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description2 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title3 != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title3 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description3 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title4 != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title4 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description4 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title5 != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title5 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description5 }}</p>
                                        </div>
                                    </div>
                                @endif
                                <!--End single accordion box-->
                                <!--Start single accordion box-->

                            </div>
                            <!--End Single sidebar-->
                            <div class="sidebar-contact-box text-center">
                                <div class="inner-content">
                                    <div class="icon-holder">
                                        <span class="icon-support1"></span>
                                    </div>
                                    <h3>Consult with expert &amp;<br> Start today</h3>
                                    <div class="bottom-box">
                                        <h2>+91 <a class="text-white"
                                                href="tel:{{ $info->phone }}">{{ $info->phone }}</a> </h2>
                                        <span>Email: <a href="mailto:{{ $info->email }}"> {{ $info->email }} </a>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <a class="btn-one wow slideInUp animated" data-wow-delay="0ms"
                                            data-wow-duration="1500ms" href="{{ url('/contact') }}"
                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">Make
                                            Appointment
                                            <span class="flaticon-next"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="single-service-top">
                            <div class="single-service-image-box">
                                <img src="{{ url('frontend/images/services/service-single/single-service-1.jpg') }}"
                                    alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h2>{{ $data->log_title }}</h2>
                                <div class="inner">
                                    <p class="text-justify">{{ $data->log_description }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="advantages-content">
                            <div class="row">
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-success"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Interior<br> Expertise</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Have to accepted That is wise man of therefore always we
                                                            indignation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-guarantee-certificate"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Guranteed<br> Work</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Have to accepted That is wise man of therefore always we
                                                            indignation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-hr"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Free<br> Consultation</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Have to accepted That is wise man of therefore always we
                                                            indignation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-wallet"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Reasonable<br> Price</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Have to accepted That is wise man of therefore always we
                                                            indignation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Start Video Image Holder Area-->
        <section class="video-image-holder-area">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        {{-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/phWNqyfCgzI"
                            frameborder="0"></iframe> --}}
                        <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/projects/project-single/video-gallery-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms"
                                                data-wow-duration="1500ms" title="crystalo Video Gallery"
                                                href="https://www.google.com/maps/embed?pb=!4v1657094513323!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f5.756259200548051!4f-2.567866406612154!5f0.4208950252574051">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/projects/project-single/video-gallery-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms"
                                                data-wow-duration="1500ms" title="crystalo Video Gallery"
                                                href="https://www.google.com/maps/embed?pb=!4v1657094513323!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f5.756259200548051!4f-2.567866406612154!5f0.4208950252574051">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>
        <!--End Video Image Gallery Area-->

        <!--Start Similar projects Area-->
        {{-- <section class="recently-project-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>Projects</p>
                            <div class="title">Recently Completed <span>Works</span></div>
                        </div>
                        <div class="more-project-button float-right">
                            <a class="btn-two" href="#">More Projects<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="project-carousel owl-carousel owl-theme owl-loaded owl-drag">


                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2950px, 0px, 0px); transition: all 0.7s ease 0s; width: 8315px;">
                          
                        @foreach ($services as $item)
                            
                 
                            <div class="owl-item cloned" style="width: 258.2px; margin-right: 10px;">
                                <div class="single-project-style1">
                                    <div class="img-holder">
                                        <img src="{{ 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png '}}" alt="Awesome Image">
                                        <div class="overlay-content">
                                            <div class="inner-content">
                                                <div class="link-box">
                                                    <a class="btn-one" href="#">Case Study<span
                                                            class="flaticon-next"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-box">
                                            <span>Modern Design</span>
                                            <h3>Office Partition Walls</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                         
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>
            </div>
        </section> --}}




        <!--End Similar projects Area-->
        <style>
            #html5box-html5-lightbox {
                margin-top: 30px | !important;
            }
        </style>
    @endslot
</x-layout>
