<div class="pb-3">
    <section class="slogan-area">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12 p-1">
                    <div class="inner-content flex-box-two fix">
                        <div class="title float-left">
                            <h3>Your dream kitchen is just a click away</h3>
                        </div>
                        <div class="button float-right">
                            <a class="btn-one" href="{{ route('services') }}">Get started<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Start footer area Style2-->
@php
$contact = DB::table('site_infos')->first();
@endphp
<footer class="footer-area style3">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s3">
                    <div class="our-info-box style2">
                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="{{ url('frontend/images/logo.jpg') }}" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="text">
                            <p class="text-justify" >{{ Str::substr($contact->about_desc, 0, 210) ?? ''}}
                                <!-- On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure the blinded desire movement certain and owing to the claims of duty.</p> -->
                                <a class="btn-two more-info-about-company" href="about.php">More About Company<span
                                        class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s3">
                    <div class="title-style2">
                        <h3 class="cen">Usefull Links</h3>
                    </div>
                    <div class="usefull-links">
                        <ul class="cen">
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/offering') }}">Offering</a></li>
                            <!-- <li><a href="gallery.php">Gallery</a></li> -->
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            {{-- <li><a href="privacy_policy.php">Privacy Policy</a></li> --}}
                        </ul>

                    </div>
                </div>
            </div>
            <!--End single footer widget-->

            <!--Start single footer widget-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget pdtop50-s3">
                    <div class="title-style2">
                        <h3 class="cen">Reach Us</h3>
                    </div>
                    <!--Start home google map area-->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.933962336675!2d86.20075871443822!3d22.804910730151565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e30efc7ad679%3A0xaace7ddf46236d11!2sSakchi%20Gol%20Chakkar%2C%20SNP%20Area%2C%20Ambagan%2C%20Sakchi%2C%20Jamshedpur%2C%20Jharkhand%20831001!5e0!3m2!1sen!2sin!4v1655568015880!5m2!1sen!2sin"
                        width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--End home google map area-->

                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area Style2-->

<!--Start footer bottom area-->
<section class="footer-bottom-area style2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="footer-bottom-content flex-box-two">
                    <div class="copyright-text">
                        <p><a href="#" target="_blank">Togo Team Interior Creator</a></p>
                    </div>
                    <div class="footer-social-links clr-white float-right">
                        <span>We are On:</span>
                        <ul class="sociallinks-style-one">


                            @if ($contact->facebook ?? '' != '')
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms"><a
                                        href="{{ $contact->facebook }}"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a></li>
                            @endif

                            @if ($contact->whatsapp ?? '' != '')
                                <li  class="wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms" ><a href="{{ $contact->whatsapp }}"><i class="fab fa-whatsapp"
                                            aria-hidden="true"></i></a></li>
                            @endif

                            @if ($contact->twitter ?? '' != '')
                                <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms" ><a href="{{ $contact->twitter }}"><i class="fab fa-twitter"
                                            aria-hidden="true"></i></a></li>
                            @endif

                            @if ($contact->instagram ?? '' != '')
                                <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms" ><a href="{{ $contact->instagram }}"><i class="fab fa-instagram"
                                            aria-hidden="true"></i></a></li>
                            @endif

                            @if ($contact->youtube ?? '' != '')
                                <li class="wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms" ><a href="{{ $contact->youtube }}"><i class="fab fa-youtube"
                                            aria-hidden="true"></i></a></li>
                            @endif


                            
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->
