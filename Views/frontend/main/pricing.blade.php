@include('frontend/partial/header')
<!--pricing top-->
<div class="box-top box-bg-blue" id="pricing-page">
	<div class="background-home-blue">
		@include('frontend/partial/navigation')
		
		<div class="box-container" style="position:relative; height:100%">
			<div class="absolute-center-home">
				<p class="fz22 color-white bold">
					Biznet Gio Cloud Calculator
				</p>
				<p class="fz13 pt10 pb10 color-white">
					<span class="bold">Quickly Estimate The Cost of Cloud Services</span> 
					We help you get set up, and we're there whenever you need us.
					Pricing is a total of raw infrastructure + the Managed Infrastructure rate,
					with a minimum service charge of 100k/mo across all Cloud Servers 
.
				</p>
				<div class="btn btn-primary btn-lg active bold">
					<a class="color-white" href="#customize-your-bill">Customize Your Bill</a>
				</div>
				<p class="fz13 pt10 pb10">
					<a class="color-white bold" href="{{URL::to('/help')}}">Find more about our service</a>
				</p>
			</div>
		</div>
	</div>	
</div>

<div class="box-middle box-bg-white top-gradient p0">
	<!--
		custom bill
	-->
	<h2 class="pt70 p20 fz22 center color-blue bold top-gradient" id="customize-your-bill"> 
		Customize Your Bill
	</h2>
	<div class="box-container m-center mt20 p20">
		<div class="box-container-spesific"  id="label-container">
			<div class="row">
			  <div class="col-md-8 fz13">
				 <p>
					<span class="color-blue fz22">Main Infrastructure</span>
				 </p>
				 <div class="color-purple box-bg-white p10">
					<span class="fz17 bold">Cpu</span>
					<ul class="list-inline" id="cpu">
						<li class="mr10">
							<div class="radio">
							  <label atr-value="1vCPU" pricing-value="550000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 1vCPU
							  </label>
							</div>
						</li>	
						<li class="mr10">
							<div class="radio">
							  <label atr-value="2vCPU" pricing-value="650000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 2vCPU
							  </label>
							</div>
						</li>	
						<li class="mr10">
							<div class="radio">
							  <label atr-value="3vCPU" pricing-value="750000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 3vCPU
							  </label>
							</div>
						</li>
						<li class="mr10">
							<div class="radio">
							  <label atr-value="4vCPU" pricing-value="850000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 4vCPU
							  </label>
							</div>
						</li>
					</ul>		
				 </div>
				 <div class="color-purple box-bg-white p10">
					<span class="fz17 bold">Speed</span>
					<ul class="list-inline" id="speed">
						<li class="mr10">
							<div class="radio">
							  <label atr-value="0.50GHz" pricing-value="250000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 0.50GHz
							  </label>
							</div>
						</li>	
						<li class="mr10">
							<div class="radio">
							  <label atr-value="1.05GHz" pricing-value="260000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 1.05GHz
							  </label>
							</div>
						</li>	
						<li class="mr10">
							<div class="radio">
							  <label atr-value="2.10GHz" pricing-value="270000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 2.10GHz
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="4.10GHz" pricing-value="280000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 4.10GHz
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="8.40GHz" pricing-value="290000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 8.40GHz
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="16.8GHz" pricing-value="30000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 16.8GHz
							  </label>
							</div>
						</li>
					</ul>		
				 </div>
				 <div class="color-purple box-bg-white p10">
					<span class="fz17 bold">Memory</span>
					<ul class="list-inline" id="memory">
						<li class="mr10">
							<div class="radio">
							  <label atr-value="0.5Gb" pricing-value="150000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 0.5Gb
							  </label>
							</div>
						</li>	
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="1Gb" pricing-value="160000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 1Gb
							  </label>
							</div>
						</li>	
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="2Gb" pricing-value="170000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 2Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="4Gb" pricing-value="180000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 4Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="8Gb" pricing-value="190000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 8Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="12Gb" pricing-value="200000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 12Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="16Gb" pricing-value="210000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 16Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="24Gb" pricing-value="220000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 24Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="32Gb" pricing-value="230000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 32Gb
							  </label>
							</div>
						</li>
						<li class="mr10 hidden">
							<div class="radio">
							  <label atr-value="36Gb" pricing-value="230000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 36Gb
							  </label>
							</div>
						</li>
					</ul>		
				 </div>
				  <div class="color-purple box-bg-white p10">
					<span class="fz17 bold">Storage</span>
					<ul class="list-inline" id="storage">
						<li class="mr10">
							<div class="radio">
							  <label atr-value="40GB" pricing-value="155000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 40GB
							  </label>
							</div>
						</li>
						<li class="mr10">
							<div class="radio">
							  <label atr-value="100GB" pricing-value="265000">
								<i class="fa fa-circle-o" aria-hidden="true"></i> 100GB
							  </label>
							</div>
						</li>
					</ul>		
				 </div>
				  <!-- start additional -->
				 <div class="pt20">
					 <p >
						<span class="color-blue fz22">Additional Infrastructure</span>
					 </p>
					 <div class="color-purple box-bg-white p10">
						<span class="fz17 bold">Operating System</span>
						<ul class="list-unstyled" id="oes">
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Windows Server 2012 R2 Base (64-bit)" pricing-value="140000">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Windows Server 2012 R2 Base (64-bit)
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Windows Server 2008 (64-bit)" pricing-value="140000">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Windows Server 2008 (64-bit)
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="CentOS (64-bit)" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> CentOS (64-bit)
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Ubuntu Server LTS (64-bit)" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Ubuntu Server LTS (64-bit)
								  </label>
								</div>
							</li>
						</ul>		
					 </div>
					 <div class="color-purple box-bg-white p10">
						<span class="fz17 bold">Network</span>
						<ul class="list-unstyled" id="network">
							<li class="mr10 end-point">
								<div class="radio">
								  <label atr-value="Data In" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Data In
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Data Out" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Data Out
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Every Public IP Address" pricing-value="140000">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Every Public IP Address
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Load Balancer" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Load Balancer
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Network Address Translation" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Network Address Translation
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Port Forwarding" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Port Forwarding
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Virtual Private Network" pricing-value="0">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Virtual Private Network
								  </label>
								</div>
							</li>
						</ul>		
					 </div>
					 <div class="color-purple box-bg-white p10">
						<span class="fz17 bold">Data Store</span>
						<ul class="list-unstyled" id="dstorage">
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Data Volume" pricing-value="1400">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Data Volume
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Snapshot Storage" pricing-value="700">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Snapshot Storage
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="Template Storage" pricing-value="700">
									<i class="fa fa-circle-o" aria-hidden="true"></i> Template Storage
								  </label>
								</div>
							</li>
							<li class="mr10">
								<div class="radio">
								  <label atr-value="ISO Storage" pricing-value="700">
									<i class="fa fa-circle-o" aria-hidden="true"></i> ISO Storage
								</div>
							</li>
						</ul>	
					 </div>
				 </div> 
			  </div>
			  <div class="col-md-4 fz13 fixed-point">
				<div class="price-top">
					<p class="fz13 text-center">
						<span class="color-blue fz22 ">Infrastructure Selected</span><br>
					</p>
				</div>
				<div class="price-body color-blue box-bg-blue p20" id="price-container">
					<ul class="list-unstyled mt20 fz13 color-white bold text-shadow">
					  <li>
						<ul class="list-unstyled" id="cpu-infra"></ul>
					  </li>
					  <li>
						<ul class="list-unstyled" id="speed-infra"></ul>
					  </li>
					  <li>
						<ul class="list-unstyled" id="memo-infra"></ul>
					  </li>
					  <li>
						<ul class="list-unstyled" id="strage-infra"></ul>
					  </li>
					</ul>
					<ul class="list-unstyled mt20 fz13 color-white bold text-shadow">
					  <li>
						<ul class="list-unstyled" id="os-infra"></ul>
					  </li>
					  <li>
						<ul class="list-unstyled" id="network-infra"></ul>
					  </li>
					  <li >
						<ul class="list-unstyled" id="storage-infra"></ul>
					  </li>
					</ul>
				</div>
				<div class="price-top box-bg-s-black  color-white">
					<p class="p20 text-center m0 fz17 text-shadow">
						Rp <span id="tot-pricing" tot-pricing="0">0</span> / Mo
					</p>
				</div>
				
			  </div>
			</div>
		</div>
	</div>
	
	<!--
		need help ? call us 
	-->
	<div class="box-middle box-bg-blue mt70">
		<h2 class="pt70 fz17 center color-white bold"> 
			Not Sure How To Customize <br>
			Your Plan
		</h2>
		<div class="box-container center mt20">
			<div class="btn btn-primary btn-lg active">
				Contact Us? +022-89923
			</div>
		</div>
	</div>
	<!--
		body faq
	-->
	<div class="box-middle box-bg-white top-gradient">
		<h2 class="pt70 p20 fz22 center color-blue bold top-gradient"> 
			Common Questions &amp; Resources
		</h2>
		<div class="box-container mt20 p20">
		  <div class="box-container-spesific">
		  <div class="row">
			<nav class="col-sm-3 fz13 hidden-xs" id="myScrollspy">
			  <ul class="nav nav-stacked bold faq-point">
				<li class="fz22 pl15">FAQ</li>
				<li class="active"><a class="a-hover-blue" href="#bill">Billing & Invoicing</a></li>
				<li><a class="a-hover-blue" href="#legal">Legal</a></li>
				<li><a class="a-hover-blue" href="#security">Security & Privacy</a></li>
			  </ul>
			</nav>
			<div class="col-sm-9">
			  <div id="bill">    
				  <h3 class="fz22 bold">Billing & Invoicing</h3>
				  <p class="fz13"> 
					You can find the full list of Billing related questions here. 
					Below, are some of the most common questions we get about billing and invoicing.
				  </p>
				  <div class="box-bg-white">
					<div class="mt5" role="tab">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq1-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="false" aria-controls="collapseOne">
							Can I use BiznetGioCloud for free?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq1" class="panel-collapse collapse out" role="tabpanel" >
						<p class="fz13"> 
							Yes, you can use BiznetGioCloud for free. <br><br>
							all this mistaken idea of denouncing pleasure and praising pain was born 
							and I will give you a complete account of the system, and expound the actual 
							teachings of the great explorer of the truth, the master-builder of human happiness. 
							No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, <br><br>
							but because those who do not know how to pursue pleasure rationally encounter 
							consequences that are extremely painful. Nor again is there anyone who loves <br><br>
							or pursues or desires to obtain pain of itself, because it is pain, but because 
							occasionally circumstances occur in which toil and pain can procure him some 
							great pleasure. To take a trivial example, which of us ever undertakes laborious
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10"  id="faq2-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false" aria-controls="collapseOne">
							Our team has several accounts which are not being actively used, 
							but which we don’t want to disable. Do we still have to pay for them?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq2" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							Every day we check to see if everyone on your team is active. 
							If they have been inactive for a period of time, we stop charging you for 
							that person and add a pro-rated credit to your account for 
							the time you’ve already paid. You’ll always and 
							only be billed for what you use — fair and square!
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10"  id="faq3-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false" aria-controls="collapseOne">
							My team has credits. How do we use them?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq3" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui 
							in ea voluptate velit esse quam nihil molestiae consequatur, 
							vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq4-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false" aria-controls="collapseOne">
							We need to add new users to our team. How will that be billed?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq4" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							We’ll make a one-time, prorated charge to your credit card to cover your new 
							team member’s account for the remainder of the current billing period.
							<br><br>
							As an example, suppose your team is on the “Standard plan,” which costs $8 per active user 
							per month when billed monthly. You add a new team member 10 days into your billing period 
							and there are 20 remaining days in the month. The per-day cost for each user is $8 / 30, 
							so we will make a one-time charge of $5.33 ($8 / 30 days * 20 days) to your team’s 
							credit card on file.
						</p>
					</div>
				   </div>
				   <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq5-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq5" aria-expanded="false" aria-controls="collapseOne">
							My team wants to cancel its subscription. 
							How do we do that? Can we get a refund?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq5" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum 
							
							deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate 
							non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum<br><br>
							et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, 
							cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere 
							possimus, omnis voluptas assumenda est, omnis dolor repellendus. <br><br>
							Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
							saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
						</p>
					</div>
				   </div>
			  </div>
			  <div id="legal"> 
				<h3 class="fz22 bold">Legal</h3>
				  <div class="box-bg-white">
					<div class="mt5" role="tab">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq6-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq6" aria-expanded="false" aria-controls="collapseOne">
							Where can I find your Terms of Service (TOS)?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq6" class="panel-collapse collapse out" role="tabpanel" >
						<p class="fz13"> 
							You can find them at ...
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq7-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq7" aria-expanded="false" aria-controls="collapseOne">
							Will you modify certain parts of your 
							TOS (e.g. Limitation of Liability, Indemnification) 
							to meet our internal legal standards?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq7" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							We designed our TOS to be industry-standard so that it meets the needs of all types of companies. 
							Our TOS are happily being used by a wide range of our customers, both big and small. 
							So we prefer to keep it standardized to be fair to all types of customers who use Slack. 
							If our TOS don’t meet your needs, please contact us and we’d be happy to help.
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq8-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq8" aria-expanded="false" aria-controls="collapseOne">
							What type of Service Level Agreements (SLA) do you offer?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq8" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
							praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
							excepturi sint occaecati cupiditate non provident, 
							similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga
						</p>
					</div>
				  </div>
			  </div>        
			  <div id="security">         
				<h3 class="fz22 bold">Security & Privacy</h3>
				  <div class="box-bg-white">
					<div class="mt5" role="tab">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq9-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq9" aria-expanded="false" aria-controls="collapseOne">
							Where can I get more details about your security practices?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq9" class="panel-collapse collapse out" role="tabpanel" >
						<p class="fz13"> 
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							Excepteur sint occaecat cupidatat non proident, 
							sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq10-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq10" aria-expanded="false" aria-controls="collapseOne">
							Can you describe your storage architecture?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq10" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam 
							aliquam quaerat voluptatem. Ut enim ad minima veniam
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq11-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq11" aria-expanded="false" aria-controls="collapseOne">
							How is data protected within BiznetGioCloud?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq11" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
							dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
							sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
						</p>
					</div>
				  </div>
				  <div class="box-bg-white">
					<div class="mt5" role="tab" id="headingOne">
					  <h4 class="fz17 collapse-title pl0 p10" id="faq12-i">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq12" aria-expanded="false" aria-controls="collapseOne">
							What type of security testing have you conducted within the last 12 months?
							<i class="fa fa-plus-square-o icon-i-right mt5 color-blue" aria-hidden="true"></i>
						</a>
					  </h4>
					</div>
					<div id="faq12" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
						<p class="fz13"> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam
						</p>
					</div>
				  </div>
			  </div>
			  
			</div>
		  </div>
		  
		  </div><!-- box - box-container-spesific <-->
		</div><!-- box - box-container<-->
	</div>
@include('frontend/partial/footer')