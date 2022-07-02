<?php //include "header.php" ?>
@extends('frontend.main')
@section('main-container')
@include('include.slider')       

        <!--Start Featured Area-->
        <section class="featured-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Featured Box-->
                    @foreach ($cat as $category)
                        
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-featured-box">
                            <div class="inner clearfix">
                                <div class="img-holder">
                                    <img src="{{env('APP_URL2').'/category/'.$category->images}}" alt="Awesome Image">
                                </div>
                                <div class="static-content">
                                    <div class="icon">
                                        <span class="icon-architecture-and-city"></span>
                                    </div>
                                    <div class="title">
                                        <h3>{{$category->name}}</h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="overlay-image">
                                        <img src="{{url('frontend/images/resources/featured-1-overlay.png')}}" alt="Awesome Image">
                                    </div>
                                    <div class="icon">
                                        <span class="icon-architecture-and-city"></span>
                                    </div>
                                    <div class="title">
                                        <h3>{{$category->name}}</h3>
                                    </div>
                                    <div class="text">
                                        <p>{{$category->massage}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End Single Featured Box-->
                    
                </div>
            </div>
            <div class="container about-style3-content">
                <div class="about-style3-bg banner-animate" style="background-image: url({{url('frontend/images/pattern/about-style3-bg.jpg')}});"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title text-center">
                            <div class="icon">
                                <img src="{{url('frontend/images/icon/home-1.png')}}" alt="Icon">
                            </div>
                            <p>About Our Company</p>
                            <div class="title">Creating lasting impressions through <br><span>interior design.</span>
                            </div>
                        </div>
                        <div class="button text-center" style="width: 100%;">
                            <a class="btn-one" href="{{url('/about')}}">About Our Company<span class="flaticon-next"></span></a>
                            <a class="btn-one black" href="{{url('/services')}}">See Our Services<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Area-->
        <section class="recently-project-style2-area">
            <div class="container">
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
                                            <p>Have to accepted That is wise man of therefore always we indignation.</p>
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
                                            <p>Have to accepted That is wise man of therefore always we indignation.</p>
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
                                            <p>Have to accepted That is wise man of therefore always we indignation.</p>
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
                                            <p>Have to accepted That is wise man of therefore always we indignation.</p>
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
        </section>
        <!--Start services style2 area-->
        
        <!--End services style2 area-->

        <!--Start Latest Projects Area-->
        <section class="latest-projects-area">
            <div class="container">
                <div class="sec-title">
                    <p>Projects</p>
                    <div class="title clr-white">Our Latest Projects</div>
                </div>
            </div>
            <div class="container-fluid latest-projects-v3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-carousel-v3 owl-carousel owl-theme">
                            <!--Start Single excellent project-->
                            <div class="single-project-style3">
                                <div class="img-holder">
                                    <img src="{{url('frontend/images/projects/lat-pro-v3-1.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="inner-content">
                                            <div class="links-icons">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder text-center">
                                    <span>Modern Design</span>
                                    <h3>Art Family Residence</h3>
                                </div>
                            </div>
                            <!--End Single excellent project-->
                            <!--Start Single excellent project-->
                            <div class="single-project-style3">
                                <div class="img-holder">
                                    <img src="{{url('frontend/images/projects/lat-pro-v3-2.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="inner-content">
                                            <div class="links-icons">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder text-center">
                                    <span>Traditional</span>
                                    <h3>Office Partition Walls</h3>
                                </div>
                            </div>
                            <!--End Single excellent project-->
                            <!--Start Single excellent project-->
                            <div class="single-project-style3">
                                <div class="img-holder">
                                    <img src="{{url('frontend/images/projects/lat-pro-v3-3.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="inner-content">
                                            <div class="links-icons">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder text-center">
                                    <span>Contemporary</span>
                                    <h3>Metropolitan Museum</h3>
                                </div>
                            </div>
                            <!--End Single excellent project-->
                            <!--Start Single excellent project-->
                            <div class="single-project-style3">
                                <div class="img-holder">
                                    <img src="{{url('frontend/images/projects/lat-pro-v3-4.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="inner-content">
                                            <div class="links-icons">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder text-center">
                                    <span>Modern Design</span>
                                    <h3>Glass Office Screen</h3>
                                </div>
                            </div>
                            <!--End Single excellent project-->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Latest Projects Area-->

        <!-- table -->
        @include('include.index_table')
        <!-- //table -->

{{-- Slogan area start --}}
<section class="slogan-style2-area" style="background-image:url({{url('frontend/images/parallax-background/slogan-bg.jpg')}});">
    <div class="icon-holder">
        <span class="flaticon-car"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title">
                        <h1>Creating lasting impressions through<br> <span>interior design.</span></h1>
                    </div>
                    <div class="button">
                        <a class="btn-one call-us" href="#"><i class="icon-music"></i>+91 {{$contact->phone}}</a>
                        <a class="btn-one" href="{{url('/offering')}}">Offers Guide<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- slogan area end --}}

{{-- @include('frontend.latest_projects') --}}

{{-- Workprocess start here --}}
@include('frontend.workprocess')
{{-- Workprocess ends here --}}


{{-- Workprocess start here --}}
@include('include.clients')
{{-- Workprocess ends here --}}

        <!--Start Testimonial Style3 Area-->
        <section class="testimonial-style3-area">
            <div class="container">
                <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms"
                    data-wow-duration="1200ms">
                    <p>testimonials</p>
                    <div class="title">Our Customer Words</div>
                    <p class="bottom-text">We are an Interior Designer, Who believe in excellence, quality and honesty,
                        yes we design beautiful home interiors.</p>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonial-carousel-2 owl-carousel owl-theme">
                            <!--Start Single Testimonial style2-->
                            @foreach ($testi as $testimonial)
                                
                            <div class="single-testimonial-style3">
                                <div class="inner-content">
                                    <div class="client-info">
                                        <div class="image">
                                            <img src="{{env('APP_URL2').'/testimonial/'.$testimonial->images}}" alt="Awesome Image">
                                        </div>
                                        <div class="title">
                                            <h3>{{$testimonial->name}}</h3>
                                            <span>{{$testimonial->designation}}</span>
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <p>"{{$testimonial->massage}}”</p>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--End Single Testimonial style2 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Style3 Area-->



      
@endsection
        <?php //include "footer.php"; ?>


</body>


<!-- index-3 06:46:13 GMT -->

</html>