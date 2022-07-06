

        {{-- <div class="preloader"></div> --}}

        <!-- Start Top Bar style3 -->
        <section class="topbar-style3-area">
            <div class="container clearfix">
                <div class="topbar-style3-content">
                    <div class="topbar-style3-left">
                        <ul class="clearfix">
                            <li>Togo Team Inspiring Interiors </li>
                        </ul>
                    </div>
                    <div class="top-style2-right">
                        <ul class="topbar-social-links">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                <img src="{{url('frontend/images/logo.jpg')}}" class="web-logo" alt="Awesome Logo">
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">

                  
                        <li class="dropdown current"><a href="{{url('/')}}">Home</a>
                            
                        </li>
                        <li class="dropdown"><a href="{{url('/about')}}">How it works</a>
                            <ul>
                                <li><a href="{{url('/about')}}">About Company</a></li>
                                <!-- <li><a href="faq.php">FAQ’s</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown"><a href="{{url('/services')}}">Services</a>
                        <ul>
                            @php
                                $categories=DB::table('categories')->get();
                            @endphp
                            @foreach ($categories as $category )
                            <li><a href="{{ route('services.category',$category->id) }}">{{ $category->name}}</a></li>
                            @endforeach
                             
                            </ul>
                    </li>

                        <li><a href="{{url('/offering')}}">Offering</a></li>

                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="#loginModal3" data-toggle="modal">Login / Signup</a></li>
                        


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

