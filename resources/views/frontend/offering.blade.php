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
                                <span>Our Offerings</span>
                                <h1>What We Offer</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active">Offering</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->
        {{-- Offer section starts --}}
        <section class="about-area">
            <div class="container">
                <div class="row">
                    @foreach ($data as $offers)
                        <div class="col-xl-5 col-lg-5">
                            <div class="about-image-box">
                                <div class="inner-box">
                                    <img src="{{ env('APP_URL2') . '/offering/' . $offers->images  }}" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="icon wow zoomIn animated" data-wow-delay="300ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;">
                                                <img src="images/icon/home.png" alt="Home Icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="p-3 mt-2">
                                <div class="sec-title pb-3">
                                    {{-- <p>About Company</p> --}}
                                    <div class="title"><?= $offers->name ?></span>
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="text text-justify">
                                        <p  > <?= $offers->massage ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        {{-- offer section ends --}}


        {{-- Offering content start --}}
        <section id="blog-area" class="blog-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <div class="single-blog-post">
                                <div class="title pb-3">Offers You will Love</div>



                                <div class="blog-single-bottom-content-box">
                                    <h2>Ideas for Study Room Design </h2>
                                    <p>Steer companies away from risky outcomes denounce with righteous indignation who are
                                        so beguiled demoralized pleasure of the moment perfectly repudiated and annoyances
                                        are so beguiled and demoralized by the charms pleasure
                                        of the moment, so blinded by desire, that they cannot foresee the rouble.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>Righteous indignation dislike demoralized.</li>
                                                <li>Nothing prevents able to do we like best ever.</li>
                                                <li>Equal blame those who fail theirduty.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>Except to obtain some advantage from it?.</li>
                                                <li>One who avoids pain that produce resultant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- offering content end --}}


        {{-- What we Offer start --}}
        <section class="why-choose-area"
            style="background-image:url({{ url('frontend/images/parallax-background/why-choose-bg.jpg') }});">
            <div class="container sp-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="why-choose-title float-left">
                            <div class="sec-title">
                                <div class="icon"><img src="{{ url('frontend/images/icon/home -2.png') }}"
                                        alt="Awesome Logo"></div>
                                <div class="title">Why People <br>Choose <span>Togo Team</span></div>
                            </div>
                            <ul>
                                <li>Well Considered Design</li>
                                <li>We Create For You</li>
                                <li>Leave The Details To Us</li>
                            </ul>
                            <div class="button">
                                <a class="btn-one" href="{{ url('/contact') }}">Make Appointment<span
                                        class="flaticon-next"></span></a>
                            </div>
                        </div>
                        <div class="why-choose-content float-right">
                            <!--Start Single Box-->
                            <div class="single-box redbg">
                                <div class="icon-holder">
                                    <span class="icon-scheme"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Experienced Team</h3>
                                    <p>Righteous indignations working beguileds all demoralized that blinded our works.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box whitebg">
                                <div class="icon-holder">
                                    <span class="icon-guarantee-certificate1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Guaranteed Works</h3>
                                    <p>Have to be repudiated annoyances accepted The wise man therefore always holds.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box whitebg">
                                <div class="icon-holder">
                                    <span class="icon-hr1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Free Consultation</h3>
                                    <p>Rejects pleasures to secure other pleasures, endures pains to avoid worse.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box blackbg">
                                <div class="icon-holder">
                                    <span class="icon-wallet1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Reasonable price</h3>
                                    <p>Our power of choice is untrammelled &amp; when nothing prevents our being able.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- What we offer end --}}

        <!-- owork process -->
        <section class="project-description-area">
            <?php //include "work-process.blade.php"
            ?>
            @include('include.workprocess')
        </section>
        <!-- //work process -->
    @endslot
</x-layout>
