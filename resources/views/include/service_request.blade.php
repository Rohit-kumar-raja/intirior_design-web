{{-- Pop up modal start --}}

<!--modal style 3 start -->
<!-- login modal 3 -->
<div id="loginModal2" class="modal-style-3 dark modal mt-5 pt-5">
    <div class="modal-dialog modal-login">
        <div class="modal-content pt-3">
            <div class="modal-header p-0">
                <!-- include your company logo here  -->
                <h4 class="modal-title"><u>TOGO TEAMS</u></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <!-- dont forget to add action and action method  -->
                <form action="{{ route('message.send') }}" method="post">
                    @csrf
                    <input type="hidden" name="design_id" value="{{ $data->id }}">
                    <textarea class="form-control" name="massage" placeholder="Write message here " id="" cols="30"
                        rows="10"></textarea>
                    <div class="form-group text-center mt-3">
                        <button id="signup-button" type="submit" class="text-white btn btn-signin">submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--modal style 3 end -->
{{-- Pop up modal start --}}
