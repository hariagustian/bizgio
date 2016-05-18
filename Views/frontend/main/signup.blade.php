@include('frontend/partial/header', array('metaData'=>$metaData))
<!--faq top-->
<div class="box-middle box-bg-white" id="signup-page">
	<div class="box-container mt20 p20 mb40">
		<div class="col-md-6 m-center" style="float:none;">
		  <div class="form-group ">
			<h4 class="fz22 pt70 bold">
				Create a Biznet Gio Account
			</h4>	
		  </div>
		  <div class="form-group ">
			<h4 class="fz17">
				<label for="name">Name</label>
			</h4>	
			<input type="text" class="form-control" id="name" placeholder="Name">
		  </div>
		  <div class="form-group ">
			<h4 class="fz17">
				<label for="mobile">Mobile Number</label>
			</h4>	
			<input type="text" class="form-control" id="mobile" placeholder="mobile">
		  </div>
		  <div class="form-group ">
			<h4 class="fz17">
				<label for="email">Email Address</label>
			</h4>	
			<input type="email" class="form-control mb0" id="email" placeholder="my@emailaddress.com">
			<span class="text-muted" id="alert-email"></span>
		  </div>
		  <div class="form-group">
			<h4 class="fz17">
				<label for="password">Password</label>
			</h4>	
			<input type="password" class="form-control" id="password" placeholder="e.q., ........">
		  </div>
		  <div class="form-group">
			<h4 class="fz17">
				<label for="repassword">Retype Password</label>
			</h4>	
			<input type="password" class="form-control" id="repassword" placeholder="e.q., ........">
		  </div>
		  <div class="form-group fz17 pt20">
			<div class="fz13 ">
				@include('frontend/partial/inc-error-messages')
				@include('frontend/partial/inc-success-messages')
			</div>
			<button type="submit" class="btn btn-primary btn-lg active bold">Submit</button>
		  </div>
		  <div class="form-group fz17 mt40 bold">
			<span>Do you have a Google Account?</span>
		  </div>
		  <div class="form-group fz17">
			<button type="submit" class="btn btn-primary btn-lg active bold">Sign Up With Google</button>
		  </div>
		  <div class="form-group fz13 pt20">
			<span class="quiet">Already have an account? <a class="a-hover-blue" href="{{URL::to('login')}}">Log in</a></span>
		  </div>
		</div>
	</div>
</div>
<!--
	body faq
-->

@include('frontend/partial/footer')