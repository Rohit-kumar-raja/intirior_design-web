<x-layout>
    @slot('title', 'Contact us')
    @slot('body')
        <section class="breadcrumb-area style2"
            style="background-image: url({{ url('frontend/images/resources/breadcrumb-bg-2.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Contact Us</span>
                                <h1>Feel Free to connect to us.</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start login register area-->
        <section class="login-register-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 pd-0">
                        <div class="form">
                            <div class="shop-page-title-1" style="text-align:center;">
                                <div class="title">Get In <span>Touch</span></div>
                            </div>
                            <div class="row">
                                <form action="#">
                                    <div class="col-xl-12" style="text-align:center;">
                                        {{-- <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> --}}
                                        <img src="{{ url('frontend/images/icon/location.png') }}" style="width: 50px;">
                                        <h6>Location</h6>
                                        <p style="margin-bottom:0px;">{{ $contact->address }}</p>
                                    </div><br>
                                    <div class="col-xl-12" style="text-align:center;">
                                        {{-- <span><i class="fa fa-phone" aria-hidden="true"></i></span> --}}
                                        <img src="{{ url('frontend/images/icon/calll.png') }}" style="width: 50px;">
                                        <h6>Call Us</h6>
                                        <p style="margin-bottom:0px;">{{ $contact->phone }}</p>
                                        <p>{{ $contact->phone2 }}</p>
                                    </div><br>
                                    <div class="col-xl-12" style="text-align:center;">
                                        {{-- <span><i class="fa fa-envelope" aria-hidden="true"></i></span> --}}
                                        <img src="{{ url('frontend/images/icon/mail.png') }}" style="width: 50px;">
                                        <h6>Email Us</h6>
                                        <p>{{ $contact->email }}</p>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-sm-12">

                                                <div class="remember-text">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="form register">
                            <div class="shop-page-title">
                                <div class="title">Send Your Message Here</div>
                            </div>
                            <div class="row">
                                <form action="#">
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input type="text" name="name" placeholder="Your Name *">
                                            <div class="icon-holder">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input type="text" name="email" placeholder="Enter Mail id *">
                                            <div class="icon-holder">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input type="number" name="phone" placeholder="Enter Phone No">
                                            <div class="icon-holder">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <textarea id="w3review" name="message" rows="4" cols="50">Enter Message
                                                 {{-- <i class="fa-regular fa-message" aria-hidden="true"></i> --}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <button class="btn-one" type="submit">Submit</button>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="right">
                                                    {{-- <h6><span>*</span>You must be a free registered user to submit content. </h6> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End login register area-->

    @endslot
</x-layout>
