{{-- Pop up modal start --}}

<!--modal style 3 start -->


<!-- register modal 3 -->
<div id="feedbackModal4" class="modal-style-3 modal mt-5 pt-5">
    <div class="modal-dialog modal-login">
        <div class="modal-content pt-3">
            <div class="modal-header p-0">
                <!-- add your own logo here  -->
                <h4 class="modal-title"><u>FEEDBACK FORM</u></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body pt-0">
                <p class="text-center ml-3">Give Your Valuable Feedback here!</p>
                <!-- dont forget to add action and action method  -->
                <form action="{{ route('feedback.send') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="status" value="0">
                    <input type="hidden" name="created_at" value="{{ date('Y-m-d h:m:s') }}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter your name"
                            required="" value="">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input accept="image/*" type="file" class="form-control pt-2" name="images" placeholder="Select your image"
                            required="">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="designation"
                            placeholder="Enter your designation" required="" value="">
                        <i class="fa fa-id-badge"></i>
                    </div>
                    @php
                        $design_category = DB::table('categories')->get();
                    @endphp
                    <div class="form-group">
                        <select required class="form-control" name="design_name">
                            <option selected disabled>Select Design Category</option>
                            @foreach ($design_category as $d_data)
                                <option value="{{ $d_data->name }}">{{ $d_data->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa fa-filter"></i>
                    </div>
                    <div class="form-group">
                        <textarea required name="massage" class="form-control pt-2" cols="3" rows="6" placeholder="Enter your message here"></textarea>
                        <i class="fa fa-commenting"></i>
                    </div>
                    <div class="form-group text-center mt-3">
                        <button id="signup-button" type="submit" class="text-white btn btn-signin">Submit</button>

                    </div>
                </form>
                <div class="text-center mb-3">Thank You for your feedback !!! </div>
            </div>
        </div>
    </div>
</div>

<!--modal style 3 end -->
{{-- Pop up modal start --}}
