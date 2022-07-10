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
                                                <img width="150px" class=" rounded-circle "
                                                    src="{{ asset('upload/profile') . '/' . $users->images }}" alt="user dp">
                                                <h3>{{ $users->name }}</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="text-center">
                                                    <a href="{{ route('profile') }}"
                                                        class="rounded-pill btn btn-primary mt-2 mb-2"> <i
                                                            class="fas fa-id-badge"></i> Profile</a> <br>
                                                    <a href="{{ route('profile') }}"
                                                        class=" rounded-pill btn btn-danger"><i
                                                            class="fas fa-unlock-alt"></i> Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 clr mt-3">
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
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="fas fa-info-circle"></i> General Information
                                                </h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <form action="{{ route('profile.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label for="">Name</label>
                                                            <input disabled type="text" class="rounded-pill form-control"
                                                                value="{{ $users->name }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Email</label>
                                                            <input type="text" disabled class="rounded-pill form-control"
                                                                value="{{ $users->email }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">phone</label>
                                                            <input disabled type="text" disabled name="phone"
                                                                class="rounded-pill form-control"
                                                                value="{{ $users->phone }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">city</label>
                                                            <input type="text" name="city"
                                                                class="rounded-pill form-control"
                                                                value="{{ $users->city }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">state</label>
                                                            <input type="text" name="state"
                                                                class="rounded-pill form-control"
                                                                value="{{ $users->state }}">
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label for="">Profile Image</label>
                                                            <input type="file" accept="image/*" name="images"
                                                                class="rounded-pill form-control">
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <label for=""> Address </label>
                                                            <textarea class="rounded-pill form-control" placeholder="Write your address" name="address" id=""
                                                                cols="10" rows="2">{{ $users->address }}</textarea>
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary mt-3"> update </button>
                                                </form>
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
            label {
                margin-top: 10px;
            }
        </style>
    @endslot
</x-layout>
