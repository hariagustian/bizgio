		</div>	
		<footer>
			<div class="box-middle box-bg-white">
				<ul class="pt70 list-inline fz13 center">
					<li><a class="a-hover-blue" href="{{URL::to('/')}}">Home</a></li>
					<li><a class="a-hover-blue" href="{{URL::to('/pricing')}}">Pricing</a></li>
					<li><a class="a-hover-blue" href="{{URL::to('/study-case/linda-jensen')}}">Our Customers</a></li>
					<li><a class="a-hover-blue" href="{{URL::to('/contact')}}">Contact Us</a></li>
					<li><a class="a-hover-blue" href="{{URL::to('/help')}}">Help</a></li>
				</ul>
				<ul class="pb20 list-inline center">
					<li>Biznet Gio Cloud, All Rights Reserved.</li>
				</ul>
			</div>
		</footer>
	</div>

</body>


<!-- partial html -->

<!--
	signup with google need modal require param mobile for new user
-->

<div class="modal fade" id="socialSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
			<div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
			<div class="box-container mt20 mb40">
				<div class="col-md-8 m-center" style="float:none;">
				  <div class="form-group ">
					<h4 class="fz22 pt40 bold">
						Create My Account
					</h4>	
				  </div>
				  <div class="form-group ">
					<h4 class="fz17">
						<label for="fullNameMobile">Full Name</label>
					</h4>	
					<input type="text" class="form-control" id="fullNameMobile" placeholder="Full Name">
				  </div>
				  <div class="form-group ">
					<h4 class="fz17">
						<label for="text">Mobile Number</label>
					</h4>	
					<input type="text" class="form-control" id="text" placeholder="Mobile Number">
				  </div>
				   <div class="form-group ">
					<h4 class="fz17">
						<label for="email">Email Address</label>
					</h4>	
					<input type="email" class="form-control" id="email" placeholder="my@emailaddress.com">
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
				</div>
			</div>
      </div>
      <div class="modal-footer center">
		@include('frontend/partial/inc-error-messages-extra')
		@include('frontend/partial/inc-success-messages-extra')
        <button type="button" class="btn btn-primary btn-lg active">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- wating response -->
<div id="long-splash" style="display:none">
	<div class="onload-fail centered">
		<img src="{{asset('assets/images/loading-cylon-red.svg')}}" width="200px" height="40px"  title="Still loading" alt="Still loading"><br>
		<strong>Still Loading </strong> <abbr><abbr></label>
	</div>
</div>
<script>
	var VidLib = VidLib || (function(){
    var _args = {}; // private

    return {
		init : function(Args) {
			_args = Args;
			// some other initialising
		},
		token : function() {
			return _args[0];
		},
		marker : function() {
			return _args[1];
		},
		base : function() {
			return _args[2];
		},
		baseJson : function() {
			return _args[3];
		}
	};
}());

	VidLib.init(["{{csrf_token()}}", '',"{{URL::to('/')}}","{{URL::to('/json')}}"]);
</script>
<script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/md5.min.js')}}"></script>
<script src="{{asset('assets/js/apptlabs.js')}}"></script>
<script src="{{asset('assets/js/frontend.js')}}"></script>
</html>