{{-- <div class="preloader"></div> --}}
@php
$contact=DB::table('site_infos')->first();
@endphp
<!-- Start Top Bar style3 -->
<section class="topbar-style3-area">
    <div class="container clearfix">
        <div class="topbar-style3-content">
            <div class="topbar-style3-left">
                <ul class="clearfix wow slideInDown">
                    <li class="text-white" > <i class="fas fa-envelope" aria-hidden="true"></i>  <a class="text-white" href="mailto:{{ $contact->email }} ">{{ $contact->email }} </a>  </li>
                    <li> <i class="fas fa-phone    "></i>  <a class="text-white" href="tel:{{ $contact->phone }} ">{{ $contact->phone }} </a> ,  <a class="text-white" href="tel:{{ $contact->phone2 }} ">{{ $contact->phone2 }} </a>  </li>

                </ul>
            </div>
            <div class="top-style2-right">
         
                <ul class="topbar-social-links wow slideInUp">
                
                    @if ($contact->facebook ?? ''!='')
                    <li><a href="{{$contact->facebook}}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>

                    @endif

                    @if ($contact->whatsapp ?? ''!='')
                    <li><a href="{{$contact->whatsapp}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>

                    @endif

                    @if ($contact->twitter ?? '' !='')
                    <li><a href="{{$contact->twitter}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

                    @endif

                    @if ($contact->instagram ?? ''!='')
                    <li><a href="{{$contact->instagram}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>

                    @endif

                    @if ($contact->youtube ?? ''!='')
                    <li><a href="{{$contact->youtube}}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    @endif

             
           
                </ul>
                <!-- <div class="language-switcher">
                            <div id="polyglotLanguageSwitcher">
                                <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                                </form>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</section>
<!--End Top Bar style3 -->

<!--Start Mainmenu Style3 Area-->
<header class="mainmenu-style3-area stricky">
    <div class="container">
        <div class="main-menu-box clearfix">
            <nav class="main-menu style3 clearfix float-left">
                <div class="navbar-header clearfix">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="{{ route('index') }}"> <img src="{{ url('frontend/images/logo.jpg') }}" class="web-logo" alt="Awesome Logo">
                </a>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="dropdown current"><a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="dropdown"><a href="{{ route('about') }}">How it works</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Company</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="{{ route('services') }}">Services</a>
                            <ul>
                                @php
                                    $categories = DB::table('categories')->get();
                                @endphp
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('services.category', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>

                        <li><a href="{{ route('offering') }}">Offering</a></li>

                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        @auth

                            <li class="dropdown"><a class="rounded-circle border p-3 mt-3 " href="#"> <i class="fas fa-user-check"></i> </a>
                                <ul>
                                    <li><a href="{{ route('profile') }}"> Profile </a></li>
                                    <li> <a href="#">
                                            <form action="{{ route('logout') }}" method="POST" >
                                                @csrf
                                                <button type="submit">Logout</button>
                                            </form>
                                        </a> </li>

                                    <!-- <li><a href="faq.php">FAQ’s</a></li> -->
                                </ul>
                            </li>
                        @else
                            <li><a href="#loginModal3" data-toggle="modal">Login / Signup</a></li>
                        @endauth



                    </ul>
                </div>
            </nav>
            <!-- <div class="mainmenu-right style3 float-right">
                <div class="button">
                    <a class="btn-one" href="#">Request for Quote<span class="flaticon-next"></span></a>
                </div>
            </div> -->
        </div>
    </div>
</header>
<!--End Mainmenu Style3 Area-->


@include('include.login')
