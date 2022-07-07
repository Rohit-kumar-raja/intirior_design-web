{{-- Pop up modal start --}}

<!--modal style 3 start -->
	<!-- login modal 3 -->
	<div id="loginModal3" class="modal-style-3 dark modal mt-5 pt-5">
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

					<p class="ml-3">Welcome back!</p>
					<!-- dont forget to add action and action method  -->			
					<form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email address" required="" value="" name="email">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required="" value="">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right">
                                <a href="" class="text-danger">Forgot Password ?</a>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                        	<!-- submit button -->
							<button id="signup-button" type="submit" class="text-white btn btn-signin">Login</button>
							
						</div>
                    </form>
                </div>
                <div class="text-center mb-3">Don't have an account? <a class="register" href="#registerModal3" data-dismiss="modal" data-toggle="modal">Register</a></div>
            </div>
        </div>
    </div>

    <!-- register modal 3 -->
	<div id="registerModal3" class="modal-style-3 dark modal mt-5 pt-5">
		<div class="modal-dialog modal-login">
			<div class="modal-content pt-3">
				<div class="modal-header p-0">	
					<!-- add your own logo here  -->			
					<h4 class="modal-title"><u>{{env('APP_NAME')}}</u></h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p class="ml-3">Create your account!</p>
					<!-- dont forget to add action and action method  -->
					<form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required="" value="">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" placeholder="Enter your phone" required="">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email address" required="" value="">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required="" value="">
                            <i class="fa fa-lock"></i>
                        </div>
						<div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">
                            <i class="fa fa-eye-slash"></i>
                        </div>
                        <div class="form-group text-center mt-3">
							<button id="signup-button" type="submit" class="text-white btn btn-signin">Register</button>
							
						</div>
                    </form>
					<div class="text-center mb-3">Already have an account? <a class="login" href="#loginModal3" data-dismiss="modal" data-toggle="modal">Login</a></div>
				</div>
			</div>
		</div>
	</div>

<!--modal style 3 end -->
{{-- Pop up modal start --}}