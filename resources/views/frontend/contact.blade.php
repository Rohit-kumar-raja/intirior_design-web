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
                                    <li><a href="{{ route('index') }}">Home</a></li>
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
                            <div class="row">
                                <form action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input required type="text" name="name" placeholder="Your Name *">
                                            <div class="icon-holder">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input required type="text" name="email" placeholder="Enter Mail id *">
                                            <div class="icon-holder">
                                                <i class="fas fa-envelope" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input required type="number" name="phone" placeholder="Enter Phone No">
                                            <div class="icon-holder">
                                                <i class="fas fa-mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input required type="text" name="subject" placeholder="Enter Subject ">
                                            <div class="icon-holder">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <textarea required id="w3review" placeholder="Enter Message" name="massage" rows="4" cols="50"></textarea>

                                        </div>
                                    </div>
                                    <input  type="hidden" name="status" value="1">
                                    <input  type="hidden" name="created_at" value="{{ date('Y-m-d h:m:s') }}">
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
