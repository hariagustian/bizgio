@include('frontend/partial/header', array('metaData'=>$metaData))
<!--faq top-->
<div class="box-middle box-bg-white">
	<div class="box-container mt20 p20 mb40">
		<form class="col-md-6 m-center" style="float:none;">
		  <div class="form-group ">
			<h4 class="fz22 pt70 bold">
				Reset Your Biznet Gio Account
			</h4>	
			<p class="fz13">
				Submit your email address and we’ll send you a link to reset your password.
			</p>
		  </div>
		  <div class="form-group ">
			<h4 class="fz17">
				<label for="email">Email Address</label>
			</h4>	
			<input type="email" class="form-control" id="email" placeholder="my@emailaddress.com">
		  </div>
		  <div class="form-group fz17">
			<button type="submit" class="btn btn-primary btn-lg active bold">Submit</button>
		  </div>
		</form>
	</div>
</div>

@include('frontend/partial/footer')