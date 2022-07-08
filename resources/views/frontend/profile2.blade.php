<x-layout>


    @slot('title', 'Home')
    @slot('body')
        <section>
            <div class="rt-container ">
                <div class="col-rt-12 clr br-10">
                    <div class="Scriptcontent">
                        <!-- Student Profile -->
                        <div class="student-profile py-4 bg-primary">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-lg-4 clr mt-3">
                                        <div class="card shadow-sm shd">
                                            <div class="card-header bg-transparent text-center">
                                                <img class="profile_img"
                                                    src="{{ url('frontend/images/testimonial/user.png') }}"
                                                    alt="student dp">
                                                <h3>{{ $users->name }}</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="text-center">
                                                    <a href="{{ route('profile.edit') }}" class="rounded-pill btn btn-primary mt-2 mb-2"> <i
                                                            class="fas fa-id-badge"></i> Edit Profile</a> <br>
                                                    <a href="" class=" rounded-pill btn btn-danger"><i
                                                            class="fas fa-unlock-alt"></i> Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 clr mt-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="fas fa-info-circle"></i> General Information
                                                </h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Phone No</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->phone }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Email Id</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Address</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->address }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Address</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">City</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->city }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">State</th>
                                                                <td width="2%">:</td>
                                                                <td>{{ $users->state }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="fab fa-servicestack"></i> Services Taken</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                {{-- slider start here --}}
                                                <div class="row">
                                                    @foreach ($takens as $taken)
                                                        @php
                                                            $taken_service = DB::table('services')->find($taken->design_id);
                                                            $service_image = DB::table('service_images')
                                                                ->where('service_id', $taken_service->id ?? '')
                                                                ->first();
                                                        @endphp
                                                        <div class="col-sm-3 single-project-style3 ">
                                                            <a href="{{ route('services.single', $taken_service->slug) }}">
                                                                <img src="{{ env('APP_URL2') . '/services/' . $service_image->name }}"
                                                                    alt="Smiling person"
                                                                    class="img-fluid  border-2 h-150" />
                                                                <p class=" text-center border text-white bg-primary">
                                                                    {{ $taken_service->log_title }}
                                                                </p>
                                                            </a>
                                                        </div>
                                                    @endforeach
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
        <style>
            th,td{
                font-size: 13px;
            }
        </style>
    @endslot
</x-layout>
