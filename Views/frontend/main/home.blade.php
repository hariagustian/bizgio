@include('frontend/partial/header', array('metaData'=>$metaData))
			<!--main services-->
			<div class="box-top box-bg-blue" id="home-page">
				<div class="background-home-blue">
					@include('frontend/partial/navigation')
					
					<div class="box-container" style="position:relative; height:100%">
						<div class="absolute-center-home">
							<p class="fz22 color-white bold">
								Fastest, Safest, and Free 
								Just One Click Away
							</p>
							<p class="fz13 pt10 pb10 color-white">
								<span class="bold">Biznet Gio Cloud</span> is a service where we can store 
								and access data securely over the Internet instead of your computer's hard drive.
							</p>
							<div class="btn btn-primary btn-lg active bold">
								<a class="color-white" href="{{URL::to('/signup')}}"> Join Now </a>
							</div>
							<p class="fz13 pt10 pb10">
								<a class="color-white bold" href="{{URL::to('/help')}}">Find more about our service</a>
							</p>
						</div>
					</div>
				</div>	
			</div>
			<div class="pb0 box-middle box-bg-white">
			
				<!--corporation-->
				<div class="box-bg-gray top-gradient">
					<ul class="list-inline p20 center home-logo box-container top-gradient ">
						<li ><img src="{{asset('assets/images/fitbit.png')}}" ></li>
						<li ><img src="{{asset('assets/images/lyft.png')}}" style="height:10%"></li>
						<li ><img src="{{asset('assets/images/logoShopify.png')}}" style="height:10%"></li>
						<li ><img src="{{asset('assets/images/FreshBooks.png')}}" style="height:10%"></li>
						<li ><img src="{{asset('assets/images/Unbounce.png')}}" style="height:10%"></li>
						<li ><img src="{{asset('assets/images/Stance.png')}}" style="height:10%"></li>
					</ul>
				</div>
				<!--
					Knowing why should join us ?
				-->
			
				<h2 class="pt70 p20 fz22 center color-blue bold" style="max-width:400px"> 
					Find out why cloud service from <span class="bold">Gio Cloud</span>
					is your best solution ever!
				</h2>
				<div class="box-container-spesific">
					<div class="box-container m-center mt20">
						<div class="row">
						   <div class="col-md-4">
								<img class="p20 md-img right-img" src="{{asset('assets/images/Inventory.png')}}">
						  </div>
						  <div class="col-md-7">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Highly Reliable</span><br>
									In order to minimize interruption access to our Cloud service, 
									we have built our product with robust hardware and multiple redundencies in place. 
									As for the software, we use Citrix Cloud Platform based on CloudStack technology.
								</p>
						  </div>
					</div>
					<div class="box-container m-center mt20">
						<div class="row">
						  <div class="col-md-4">
								<img class="p20 md-img right-img" src="{{asset('assets/images/designs.png')}}">
						  </div>
						  <div class="col-md-7">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Elastic</span><br>
									Our platform allows you to use only the resources that you absolutely need. 
									Increase and decrease the virtual machines spec anytime you want and you will only be 
									charged on your actual hourly usage.
								</p>
						  </div>
						</div>
					</div>
					<div class="box-container m-center mt20">
						<div class="row">
						  <div class="col-md-4">
								<img class="p20 md-img right-img" src="{{asset('assets/images/brief.png')}}">
						  </div>
						  <div class="col-md-7">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Free Network</span><br>
									You can use your inbound/outbound network according to a fair usage policy. 
									You can use up to 1 terabyte of network traffic every month which is more than 
									enough for normal usage.
								</p>
						  </div>
						</div>
					</div>
					<div class="box-container m-center mt20">
						<div class="row">
						  <div class="col-md-4">
								<img class="p20 md-img right-img" src="{{asset('assets/images/Inventory.png')}}">
						  </div>
						  <div class="col-md-7">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Faster</span><br>
									Being located in Indonesia gives a lot of benefits to Indonesian users especially in 
									network connectivity. Now companies can confidently run their online stores or web 
									applications in GIO Cloud without worrying about acceess speed.
								</p>
						  </div>
						</div>
					</div>
					<div class="box-container m-center mt20">
						<div class="row">
						  <div class="col-md-4">
								<img class="p20 md-img right-img" src="{{asset('assets/images/tracking.png')}}">
						  </div>
						  <div class="col-md-7">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Free Network Security</span><br>
									Being connected directly to the Internet poses a lot of dangers to your virtual machines. 
									Network security features like Firewall is included in our package. 
									By default it blocks all access from the Internet and it can only be opened by the user. 
									Load Balancer, Port Forwarding and VPN are also included.
								</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		    <!--
					corporate feedback ?
			-->
			<div class="box-footer top-gradient box-bg-gray mt70">
				<h2 class="p50 p20 fz22 center color-blue top-gradient bold"> 
					Meet our customers
				</h2>
				<div class="container-home-body-feedback top-overlay">
					
					<ul class="list-inline" id="content-feedback">
						<li>
							<div class="list-inline container-feedback col-xs-10 col-md-4 col-sm-6">
								<div>	
									<h1>Linda Jensen</h1>
								</div>
								<div>
									<p>
										With the scalable nature of Biznet GIO Cloud we don’t need to invest in future proof equipment or worry about forecasting our resource needs prior to a purchase. As we grow, and demands increase, extra resources are a click or phone call away. We only need to increase and pay for resources when we actually need them! Biznet GIO Cloud is helping us grow – the scalability has been priceless.
									</p>
								</div>
								<div>
									<div class="btn btn-primary btn-lg active">
										<a class="color-white" href="{{URL::to('study-case/linda-jensen')}}">View Case Study</a>
									</div>
								</div>
							</div>
						</li>
						<li style="display:none">
							<div class="list-inline container-feedback col-xs-10 col-md-4 col-sm-6">
								<div>	
									<h1>Denise Chen</h1>
								</div>
								<div>
									<p>
										Biznet Gio Cloud is our most trusted and most reliable relationship that continues to meet and exceed our expectation year after year. We wouldn’t be where we are today without Biznet Gio Cloud.
									</p>
								</div>
								<div>
									<div class="btn btn-primary btn-lg active">
										<a class="color-white" href="{{URL::to('study-case/denise-chen')}}">View Case Study</a>
									</div>
								</div>
							</div>
						</li>
						<li style="display:none">
							<div class="list-inline container-feedback col-xs-10 col-md-4 col-sm-6">
								<div>	
									<h1>Jennifer Williams</h1>
								</div>
								<div>
									<p>
										As Alphalabs continues to expand its network, we need a partner who can offer more tailored solutions to the needs of each market. We chose Biznet Gio Clould because the company has a solid reputation for providing their clients the support to both optimize resources and exceed business objectives.
									</p>
								</div>
								<div>
									<div class="btn btn-primary btn-lg active">
										<a class="color-white" href="{{URL::to('study-case/jennifer-williams')}}">View Case Study</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="list-inline" id="list-feedback">
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
			<!--main services-->
			<div class="box-middle box-bg-white top-gradient pb70 ">
				<h2 class="pt70 p20 fz22 center color-blue bold"> 
					Find out why our<br>
					Pricing more competitive
				</h2>
				<div class="box-container m-center mt20">
					<div class="box-bg-drk-gray box-home-price">
						<div class="absolute-center">
							<p class="fz17 color-blue">
								Not Sure How To Customize<br> Your Plan ?<br>
							</p>
							<div class="btn btn-primary btn-md active bold">
								<a class="color-white" href="{{URL::to('/pricing')}}"> Go To Our Pricing Page</a>
							</div>
						</div>
					</div>
					<div class="box-container-spesific">
						<div class="row">
						  <div class="col-md-4 box-bg-drk-gray">
								<p class="pt35 p20 fz13">
								<span class="color-blue fz22">Smart Billing</span><br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
								sed do eiusmod tempor incididunt <span class="color-blue bold">ut labore et dolore magna</span>. 
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
								</p>
						  </div>
						  <div class="col-md-4">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Enterprise Pricing the Right Way</span><br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-4">
								<p class="pt35 p20 fz13">
								<span class="color-blue fz22">Pro Business Class</span><br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
								sed do eiusmod tempor.
								</p>
						  </div>
						  <div class="col-md-4 box-bg-drk-gray">
								<p class="pt35 p20 fz13">
									<span class="color-blue fz22">Enterprise-level Features</span><br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor <span class="color-blue bold">incididunt ut labore et dolore 48.8%</span> magna aliqua,
									Ut enim ad minim veniam.
								</p>
						  </div>
						</div>
					</div>	
				</div>
			</div>
			<div class="box-middle box-bg-blue top-gradient pb70">
				<h2 class="pt70 fz17 center color-white bold top-gradient"> 
					Now start your own custom cloud<br>
					Our services is more than your imagine
				</h2>
				<div class="box-container center mt20 ">
					<div class="btn btn-primary btn-lg active">
						<a class="color-white" href="{{URL::to('/signup')}}">JOIN NOW</a>
					</div>
				</div>
			</div>
			
			@include('frontend/partial/footer')