@include('frontend/partial/header', array('metaData'=>$metaData))
<!--Contact top-->
<div class="box-top box-bg-blue">
	<div class="background-home-blue">
		@include('frontend/partial/navigation')
		
		<div class="box-container" style="position:relative; height:100%">
			<div class="absolute-center-home">
				<p class="fz22 color-white bold">
					Just ask, Get answers.
				</p>
				<p class="fz13 pt10 pb10 color-white">
					Your questions and comments are important to us.
					Select a topic below, or reach us by phone or email.
					We’ve got everything covered for your needs.
				</p>
				<div class="btn btn-primary btn-lg active bold">
					<a class="color-white" href="{{URL::to('contact#we-listen')}}"> We listen </a>
				</div>
			</div>
		</div>
	</div>	
</div>
<!--
	body Contact
-->
<div class="box-middle box-bg-white top-gradient" id="contact-page">
	<h2 class="pt70 p20 fz22 center color-blue bold top-gradient" id="we-listen"> 
		Get in touch with us
	</h2>
	<div class="box-container mt20 p20 ">
		<div class="box-container-spesific">
			<dl class="dl-horizontal fz17">
			  <dt>
				Call Us
			  </dt>
			  <dd>
					+6222-89923<br>
					<span class="quiet fz13">M-F 4am-8pm // Sa,Su 6am-5pm </span>
			  </dd>
			</dl>
			<hr>
			<dl class="dl-horizontal fz17">
			  <dt>
				Email Us
			  </dt>
			  <dd>
					<a class="a-hover-blue" href="mailto:help@biznetgiocloud.com">help@biznetgiocloud.com</a><br>
					<span class="quiet fz13">Estimated reply time: 2 days</span>
			  </dd>
			</dl>
			<hr>
			<dl class="dl-horizontal fz17">
			  <dt>
				Social Media<br>Support
			  </dt>
			  <dd>
					<a class="a-hover-blue" href="#">
						<i class="fa fa-facebook fa2x" aria-hidden="true"></i> facebook
					</a>,
					<a class="a-hover-blue" href="#">
						<i class="fa fa-twitter fa2x" aria-hidden="true"></i> twitter
					</a>
					<br>
					<span class="quiet fz13">Estimated reply time: 5 Hours</span>
			  </dd>
			</dl>
			<hr>
			<dl class="dl-horizontal fz17">
			  <dt>
				a Message
			  </dt>
			  <dd>
			   <div>
				  <div class="form-group ">
					<h4 class="fz13 pt5 bold">
						If you're able to, please log in to your account first. That will add some additional information to your request, and will help us respond to it more quickly.<br>
						<span class="quiet fz13">Estimated reply time: 2 days</span>
					</h4>	
				  </div>
				  <div class="form-group ">
					<h4 class="fz17">
						<label for="name">Your Name</label>
					</h4>	
					<input type="text" class="form-control" id="name" placeholder="name">
				  </div>
				  <div class="form-group ">
					<h4 class="fz17">
						<label for="email">Your Email</label>
					</h4>	
					<input type="email" class="form-control" id="email" placeholder="my@emailaddress.com">
				  </div>
				  <div class="form-group ">
					<h4 class="fz17">
						<label for="subject">Subject</label>
					</h4>	
					<input type="text" class="form-control" id="subject" placeholder="e,q. i need help using giocloud">
				  </div>
				  <div class="form-group ">
					<textarea style="min-height:200px" class="form-control" placeholder="how can we help you"></textarea>
				  </div>
				  <div class="form-group fz17 pt20">
					<div class="fz13 " style="max-width:400px">
					@include('frontend/partial/inc-error-messages')
					@include('frontend/partial/inc-success-messages')
					</div>
					<button type="submit" class="btn btn-primary btn-lg active bold">Submit</button>
				  </div>
				</div>

			  </dd>
			</dl>
		</div>
	</div>
</div>
@include('frontend/partial/footer')