@php
    $clients = DB::table('clients')->get();
@endphp
{{-- <link ref="{{url('frontend/css/work-process.css')}}"> --}}
<!--Start Latest Projects Area-->
<section class="latest-projects-area-new p-4">
    <div class="container">
        <div class="sec-title">
            {{-- <p>Clients</p> --}}
            <div class="title clr-white">Our Clients</div>
        </div>
    </div>
    <div class="container-fluid latest-projects-v3">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-carousel-v3 owl-carousel owl-theme">
                    <!--Start Single excellent project-->
                    @foreach ($clients as $client)
                    
                    <div class="single-project-style3">
                        <div class="img-holder chng">
                            <img src="{{env('APP_URL2').'/clients/'.$client->images}}" alt="Awesome Image">                            
                        </div>
                    </div>

                    @endforeach
                    <!--End Single excellent project-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Latest Projects Area-->
