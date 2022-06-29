<?php // include "header.php";   ?>
@extends('frontend.main')
@section('main-container')

<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{url('frontend/images/resources/breadcrumb-bg-2.jpg')}});">
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
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Offering</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

{{-- Offering content start --}}
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                    <div class="title pb-3">Offers You will Love</div>
                        <div class="main-image-box">
                            <img src="{{url('frontend/images/blog/blog-single.jpg')}}" alt="Awesome Image">
                        </div>
                        <div class="top-text-box">
                            <h3>“Innovative solutions to move your business forward.”</h3>
                        </div>
                        <div class="quote-bottom-text">
                            <p>Righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal
                                blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                        </div>
                        <div class="blog-single-image-with-text-box">
                            <ul class="image-box clearfix">
                                <li>
                                    <img src="{{url('frontend/images/blog/blog-single-1.jpg')}}" alt="Awesome Image">
                                </li>
                                <li>
                                    <img src="{{url('frontend/images/blog/blog-single-2.jpg')}}" alt="Awesome Image">
                                </li>
                            </ul>
                            <div class="text-box">
                                <p>Their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                    and when nothing being able to do what we like best, every pleasure is to be welcomed and every pain avoided in certain circumstances owing the claims of duty or the obligations of business it will frequently
                                    occur that repudiated.</p>
                            </div>
                        </div>

                        <div class="blog-single-bottom-content-box">
                            <h2>Ideas for Study Room Design </h2>
                            <p>Steer companies away from risky outcomes denounce with righteous indignation who are so beguiled demoralized pleasure of the moment perfectly repudiated and annoyances are so beguiled and demoralized by the charms pleasure
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
<section class="why-choose-area" style="background-image:url({{url('frontend/images/parallax-background/why-choose-bg.jpg')}});">
    <div class="container sp-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="why-choose-title float-left">
                    <div class="sec-title">
                        <div class="icon"><img src="{{url('frontend/images/icon/home -2.png')}}" alt="Awesome Logo"></div>
                        <div class="title">Why People <br>Choose <span>Togo Team</span></div>
                    </div>
                    <ul>
                        <li>Well Considered Design</li>
                        <li>We Create For You</li>
                        <li>Leave The Details To Us</li>
                    </ul>
                    <div class="button">
                        <a class="btn-one" href="{{url('/contact')}}">Make Appointment<span class="flaticon-next"></span></a>
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
    <?php //include "work-process.blade.php"?>
    @include('frontend.workprocess')
    </section>
<!-- //work process -->


<?php// include "footer.php"; ?>
@endsection

</body>


<!-- services 06:47:24 GMT -->
</html>

