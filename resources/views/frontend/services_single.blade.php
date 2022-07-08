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
                                <h1>Bringing Great Design</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class="active"> <a href="{{ route('services') }}">Services</a> </li>

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
                                @if ($data->title1 ?? '' != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn  active">
                                            <span class="hdd">{{ $data->title1 ?? '' }}</span>
                                        </div>
                                        <div class="accord-content collapsed">
                                            <p class="text-justify">{{ $data->description1 }}</p>
                                        </div>
                                    </div>
                                @endif

                                <!--End single accordion box-->
                                <!--Start single accordion box-->
                                @if ($data->title2 ?? '' != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title2 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description2 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title3 ?? '' != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title3 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description3 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title4 ?? '' != '')
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <span class="hdd">{{ $data->title4 }}</span>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $data->description4 }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->title5 ?? '' != '')
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
                                        @auth
                                            <a href="#loginModal2" data-toggle="modal" class="btn-one wow slideInUp animated"
                                                data-wow-delay="0ms" data-wow-duration="1500ms" href="{{ url('/contact') }}"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">Make
                                                Appointment
                                                <span class="flaticon-next"></span>
                                            </a>
                                        @else
                                            <a href="#loginModal3" data-toggle="modal" class="btn-one wow slideInUp animated"
                                                data-wow-delay="0ms" data-wow-duration="1500ms" href="{{ url('/contact') }}"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">Make
                                                Appointment
                                                <span class="flaticon-next"></span>
                                            </a>
                                        @endauth
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    @php
                        $service_image = DB::table('service_images')
                            ->where('service_id', $data->id)
                            ->get();
                    @endphp

                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        {{-- Message --}}
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !</strong> {{ session('success') }}
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Error !</strong> {{ session('error') }}
                            </div>
                        @endif
                        {{-- end Message --}}
                        <div class="single-service-top">
                            <div class="single-service-image-box">
                                <section>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 h-410"
                                                    src="{{ env('APP_URL2') . '/services/' . $service_image[0]->name }} "
                                                    alt="First slide">
                                            </div>
                                            @foreach ($service_image as $img)
                                                <div class="carousel-item">
                                                    <img class="d-block h-410 w-100"
                                                        src="{{ env('APP_URL2') . '/services/' . $img->name }} "
                                                        alt="Second slide">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </section>
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
                    @if (strlen($data->youtube) > 30)
                        <div class="col-xl-6 col-lg-6 col-md-6">


                            <iframe width="100%" height="500px" src="{{ $data->youtube ?? '' }}"
                                frameborder="0"></iframe>
                            {{-- <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/projects/project-single/video-gallery-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms"
                                                data-wow-duration="1500ms" title="crystalo Video Gallery"
                                                href="{{ $data->youtube }}">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- </div> --}}
                        </div>
                    @endif
                    @if (strlen($data->youtube) > 30)
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <iframe width="100%" height="500px" src="{{ $data->view360 ?? '' }}"
                                frameborder="0"></iframe>
                            {{-- <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/projects/project-single/video-gallery-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms"
                                                data-wow-duration="1500ms" title="crystalo Video Gallery"
                                                href="{{$data->view360}}">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    @endif
                </div>

            </div>
            </div>
        </section>
        <!--End Video Image Gallery Area-->

        <!--Start Recently Project Area-->
        <section class="recently-project-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title mb-3 ">

                            <div class="title text-center"> Similer <span> Projects</span></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="project-carousel owl-carousel owl-theme">
                    <!--Start single project style1-->
                    @foreach ($services as $service)
                        <div class="single-project-style1">
                            <div class="img-holder">
                                @php
                                    $service_image = DB::table('service_images')
                                        ->where('service_id', $service->id)
                                        ->first();
                                @endphp
                                <img class="h-230" src="{{ env('APP_URL2') . '/services/' . $service_image->name }}"
                                    alt="Awesome Image">
                                <div class="overlay-content">
                                    <div class="inner-content">
                                        <div class="link-box">
                                            <a class="btn-one"
                                                href="{{ route('services.single', $service->slug) }}">Details<span
                                                    class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-box">
                                    {{-- <span> {{ Str::substr($service->log_description, 0, 20) }}..    </span> --}}
                                    <h3> {{ $service->log_title }} </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--Start single project style1-->

                </div>
            </div>
        </section>
        <!--End Recently Project Area-->




        <!--End Similar projects Area-->
        <style>
            #html5box-html5-lightbox {
                margin-top: 30px | !important;
            }
        </style>
    @endslot
</x-layout>
@include('include.service_request')
