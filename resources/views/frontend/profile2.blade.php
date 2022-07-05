@extends('frontend.main')
@section('main-container')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    {{-- <link rel="stylesheet" href="{{url('frontend/css/demop.css')}}" /> --}}

    <link rel="stylesheet" href="{{ url('frontend/css/stylep.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/proslide.css') }}">

    <section class="company-overview-area">
        {{-- <header class="ScriptHeader">
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="rt-heading">
                        <h1>Student Profile Page Design Example</h1>
                        <p>A responsive student profile page design.</p>
                    </div>
                </div>
            </div>
        </header> --}}
        <div class="sec-title text-center pb-2">
            <div class="title">User <span>Categories</span></div>
        </div>

        <section>
            <div class="rt-container pd-50">
                <div class="col-rt-12 clr br-10">
                    <div class="Scriptcontent">

                        <!-- Student Profile -->
                        <div class="student-profile py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 clr mt-1">
                                        <div class="card shadow-sm shd">
                                            <div class="card-header bg-transparent text-center">
                                                <img class="profile_img"
                                                    src="{{ url('frontend/images/testimonial/user.png') }}"
                                                    alt="student dp">
                                                <h3>{{$users[0]->name}}</h3>
                                            </div>
                                            <div class="card-body">
                                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p> --}}
                                                <div class="text-center">
                                                    {{-- <button type="button" class="btn-pro">Edit Profile</button> --}}
                                                    <a href="" class="btn btn-pro mt-2">Edit Profile</a>
                                                    <a href="" class="btn btn-pro mt-4">Change Password</a>
                                                </div>
                                                {{-- <p class="mb-0"><strong class="pr-1">User ID:</strong>3210</p>
                    <p class="mb-0"><strong class="pr-1">Phone:</strong>8781243524</p>
                    <p class="mb-0"><strong class="pr-1">Email:</strong>user@gmail.com</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 clr mt-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Phone No</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Email Id</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Address</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->address}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Address</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->address}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">City</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->city}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">State</th>
                                                                <td width="2%">:</td>
                                                                <td>{{$users[0]->state}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Services Taken</h3>
                                            </div>
                                            <div class="card-body pt-0">

                                                {{-- slider start here --}}
                                                <div class="container">

                                                    <div class="row">
                                                        <div class="entry col-sm-3">
                                                            <p class="name">John Doe</p>
                                                            <img src="{{ url('frontend/images/projects/lat-pro-5.jpg') }}"
                                                                alt="Smiling person" class="imgg" />

                                                        </div>
                                                        <div class="entry col-sm-3">
                                                            <p class="name">John Doe</p>
                                                            <img src="{{ url('frontend/images/projects/lat-pro-5.jpg') }}"
                                                                alt="Smiling person" class="imgg" />

                                                        </div>
                                                        <div class="entry col-sm-3">
                                                            <p class="name">John Doe</p>
                                                            <img src="{{ url('frontend/images/projects/lat-pro-5.jpg') }}"
                                                                alt="Smiling person" class="imgg" />

                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- slider end here --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->

                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
