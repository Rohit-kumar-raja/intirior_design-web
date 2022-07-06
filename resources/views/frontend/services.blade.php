<x-layout>
    @slot('title', 'Home')
    @slot('body')
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
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        {{-- category1 section starts here --}}
        <!--Start Recently Project style2 Area-->
        <section class="recently-project-style2-area">
            <div class="container">
                <div class="sec-title text-center">
                    <p>Categories</p>
                    <div class="title">Services <span>Categories</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-carousel-v2 owl-carousel owl-theme">
                            <!--Start single project style1-->
                            @foreach ($cat as $category)
                                <div class="single-project-style2">
                                    <div class="img-holder">
                                        <img src="{{ env('APP_URL2') . '/category/' . $category->images }}"
                                            alt="Awesome Image">
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                        <div class="title-box">
                                            {{-- <span>Modern Design</span> --}}
                                            <h3>{{ $category->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--End single project style1-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Recently Project style2 Area-->
        {{-- category1 section ends here --}}

        <!--Start services style2 Service Page-->
        <section class="services-style2-service-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="sec-title">
                            <p>Services</p>
                            <div class="title">Working <span>Sectors</span></div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    @foreach ($services as $data)
                        <!--Start single service style2-->
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 ">
                            <div class="single-service-style2 wow fadeInUp border" data-wow-delay="0ms"
                                data-wow-duration="1200ms">
                                <div class="img-holder">
                                    <img src="{{ url('frontend/images/services/v2-1.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                </div>
                                <div class="text-holder p-2">

                                    <h4>{{ $data->log_title }}</h4>
                                    <div class="text">
                                        <p> {{ substr($data->log_description, 0, 100) }} <a href="">more</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single service style2-->
                    @endforeach
                </div>
            </div>
        </section>
        <!--End services style2 Service Page-->

        <!--Start special services section here -->
        <section class="services-style1-service-page">
            <div class="container">
                <div class="sec-title text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <p>Interior Elements</p>
                    <div class="title">Our Special <span>Services</span></div>
                </div>
                <div class="row">
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/services/1.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder bg-white">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="count">
                                            <h1>01</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Lighting</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/services/2.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder bg-white">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-paint"></span>
                                        </div>
                                        <div class="count">
                                            <h1>02</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Coloring</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/services/3.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder bg-white">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-floor"></span>
                                        </div>
                                        <div class="count">
                                            <h1>03</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Patterns</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ url('frontend/images/services/4.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder bg-white">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-window"></span>
                                        </div>
                                        <div class="count">
                                            <h1>04</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Textures</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                </div>
            </div>
        </section>
        {{-- end special service section here --}}
        <!--End services style1 service page-->
        <section class="working-process-area">
            <div class="container">
                <div class="sec-title text-center">
                    <p>To Do good design</p>
                    <div class="title">Why Choose <span>Us</span></div>
                </div>
                <div class="row">
                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>01</span></div>
                            <div class="inner">
                                <h3>DuraBuild &amp; Cabinets</h3>
                                <p>with soft-closing hinges and sturdy build.</p>
                                <div class="icon-holder">
                                    <span class="icon-productive"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>02</span></div>
                            <div class="inner">
                                <h3>AquaBloc Technology</h3>
                                <p>repels moisture from entering the core.</p>
                                <div class="icon-holder">
                                    <span class="icon-document"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="500ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>03</span></div>
                            <div class="inner">
                                <h3>AntiBubble Technology</h3>
                                <p>for a smooth and seamless finish.</p>
                                <div class="icon-holder">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->

                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="500ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>04</span></div>
                            <div class="inner">
                                <h3>Engineered Manufacturing</h3>
                                <p>with an automated process for error-free.</p>
                                <div class="icon-holder">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->

                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="500ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>05</span></div>
                            <div class="inner">
                                <h3>Up to 10-year Warranty*</h3>
                                <p>on all kitchens.</p>
                                <div class="icon-holder">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->

                    <!--Start Single Working Process-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="500ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="single-working-process text-center">
                            <div class="top-box"><span>06</span></div>
                            <div class="inner">
                                <h3>45-day Delivery**</h3>
                                <p>with Livspace Move-in Guarantee.</p>
                                <div class="icon-holder">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Working Process-->
                </div>
            </div>
        </section>
    @endslot
</x-layout>
