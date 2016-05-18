@include('frontend/partial/header', array('metaData'=>$metaData))
<!--faq top-->
<div class="box-middle box-bg-white" id="login-page">
	<div class="box-container mt20 p20 mb40">
		<div class="col-md-6 m-center" style="float:none;">
		  <div class="form-group ">
			<h4 class="fz22 pt70 bold">
				Log in to your account
			</h4>	
		  </div>
		  <div class="form-group ">
			<h4 class="fz17">
				<label for="email">Email Address</label>
			</h4>	
			<input type="email" class="form-control" id="email" placeholder="my@emailaddress.com">
		  </div>
		  <div class="form-group">
			<h4 class="fz17 pt20">
				<label for="email">Password</label>
			</h4>	
			<input type="password" class="form-control" id="password" placeholder="e.q., ........">
		  </div>
		  <div class="form-group fz17 pt20">
			<div class="fz13 ">
			@include('frontend/partial/inc-error-messages')
			@include('frontend/partial/inc-success-messages')
			</div>
			<button type="submit" class="btn btn-primary btn-lg active bold">Log in</button>
		  </div>
		  <div class="form-group fz13 pt20">
			<span class="quiet">Forgot your password? <a class="a-hover-blue" href="{{URL::to('reset')}}">Reset it.</a></span>
		  </div>
		  <br>
		  <div class="form-group fz17 mt40 bold">
			<span>Did you sign up with your Google Account?</span>
		  </div>
		  <div class="form-group fz17">
			<button type="submit" class="btn btn-primary btn-lg active bold">Login With Google</button>
		  </div>
		  <div class="form-group fz13 pt20">
			<span class="quiet">Don’t have an account? <a class="a-hover-blue" href="{{URL::to('signup')}}">Create a Biznet Gio account.</a></span>
		  </div>
		</div>
	</div>
</div>

@include('frontend/partial/footer')