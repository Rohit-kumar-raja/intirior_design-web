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
                                                    <a href="" class="rounded-pill btn btn-primary mt-2 mb-2"> <i
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
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $users->name }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Email</label>
                                                            <input type="text" name="email" class="form-control"
                                                                value="{{ $users->email }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">phone</label>
                                                            <input type="text" name="phone" class="form-control"
                                                                value="{{ $users->phone }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">city</label>
                                                            <input type="text" name="city" class="form-control"
                                                                value="{{ $users->city }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">state</label>
                                                            <input type="text" name="state" class="form-control"
                                                                value="{{ $users->state }}">
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label for="">Profile Image</label>
                                                            <input type="file" name="images" class="form-control">
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <label for=""> Address </label>
                                                         <textarea class="form-control" placeholder="Write your address" name="address" id="" cols="10" rows="2"></textarea>
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary mt-3" > update </button>
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
