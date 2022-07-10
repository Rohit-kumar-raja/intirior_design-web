@php
    $clients = DB::table('clients')->get();
@endphp
<!--Start Team Area-->
<section class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title float-left">
                    <p>Behind Our Company</p>
                    <div class="title">Expert & Experinced <span>Team</span></div>
                </div>
                <div class="view-all-member style2 float-right">
                    <!-- <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start Single Team Member-->
            @foreach ($clients as $client)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{env('APP_URL2').'/clients/'.$client->images}}" alt="Awesome Image">
                        <div class="overlay1">
                            <div class="box">
                                <div class="link">
                                    <!-- <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name text-center">
                        <p><span>CEO & Founder</span></p>
                        <h3>Dinesh Singh</h3>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End Single Team Member-->
            <!--Start Single Team Member-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team-member">
                    <div class="img-holder">
                    <img src="{{url('frontend/images/team/member1.png')}}" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="link">
                                    <!-- <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name text-center">
                        <p><span>Designer</span></p>
                        <h3>Jitendra Sahu</h3>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
            <!--Start Single Team Member-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team-member">    
                    <div class="img-holder">
                    <img src="{{url('frontend/images/team/member3.jpg')}}" alt="Awesome Image" style="width:80%">
                        <div class="overlay1">
                            <div class="box">
                                <div class="link">
                                    <!-- <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name text-center">
                        <p><span>Marketing Head</span></p>
                        <h3>Manisha Verma</h3>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
            <!--Start Single Team Member-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team-member">
                    <div class="img-holder">
                    <img src="{{url('frontend/images/team/member1.png')}}" alt="Awesome Image">
                        <div class="overlay1">
                            <div class="box">
                                <div class="link">
                                    <!-- <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name text-center">
                        <p><span>Manager</span></p>
                        <h3>Hari Narayan</h3>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
        </div>
    </div>
</section>
<!--End Team Area-->
