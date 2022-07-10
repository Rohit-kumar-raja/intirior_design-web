<x-layout>
    @slot('title', 'Home')
    @slot('body')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area"
            style="background-image: url({{ url('frontend/images/resources/breadcrumb-bg.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Talented Interior<br> Designer.</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class="active">About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Company Overview Area-->
        <section class="company-overview-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-box clearfix">
                            <div class="sec-title">
                                <p>Company Overview</p>
                                <div class="title">Modern & Luxury<br> <span>Interior Designers in Jamshedpur</span></div>
                            </div>
                            <div class="text">
                                <p>With Togo Team, it possible for anyone to renovate and design a home – from homeowners to
                                    professionals. It provides valuable insights to people who have no experience in design.
                                    We feel that interior design is one of the most important investments you will ever
                                    make. Whether your needs are Residential or Commercial Interior Design or Model Home
                                    Merchandising, our commitment to your project.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="history-content-box clearfix">
                            <div class="history-carousel owl-carousel owl-theme">
                                <!--Start Single History Content-->
                                @foreach ($about as $abt)
                                    <div class="single-history-content">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ url('frontend/images/resources/history-1.jpg') }}"
                                                    alt="Awesome Image">
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <div class="inner">
                                                <div class="date">
                                                    <h3>{{ $abt->Year }}</h3>
                                                </div>
                                                <div class="title">
                                                    <h3>{{ $abt->name }}</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Indignation and dislike men who are so beguiled and demoralized by
                                                        the charms pleasure of the moment, so blinded by desire, that they
                                                        cannot foresee shrinking from toil and pain.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--End Single History Content-->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row fact-counter">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="5" data-speed="5000"
                                        data-refresh-interval="50">5</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Years of<br> Experience</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="200" data-speed="5000"
                                        data-refresh-interval="50">200</span>

                                </h1>
                            </div>
                            <div class="title">
                                <h3>Projects<br> Completed</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="2000" data-speed="5000"
                                        data-refresh-interval="50">2000</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Design <br> Available</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="47" data-speed="5000"
                                        data-refresh-interval="50">47</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Awards<br> Holds in Hand</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>

            </div>
        </section>
        <!--End Company Overview Area-->
        {{-- client section starts here --}}
        @include('include.clients')
        {{-- client section ends here --}}
    @endslot
</x-layout>
