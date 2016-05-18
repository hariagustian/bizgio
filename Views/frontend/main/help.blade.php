@include('frontend/partial/header', array('metaData'=>$metaData))
<!--faq top-->
<div class="box-top box-bg-blue" id="help-page">
	<div class="background-home-blue">
		@include('frontend/partial/navigation')
		
		<div class="box-container" style="position:relative; height:100%">
			<div class="absolute-center-home">
				<p class="fz22 color-white bold">
					Common Questions &amp; Resources
				</p>
				<p class="fz13 pt10 pb10 color-white">
					We want you to have the best and most productive our cloud experience possible.
					For detail our helping page will provide you a complete overview of resources 
					or see some highlights below.
.
				</p>
				<div class="btn btn-primary btn-lg active bold">
					<a class="faq color-white" href="{{URL::to('help#faq')}}">Frequently asked Questions</a>
				</div>
			</div>
		</div>
	</div>	
</div>
<!--
	body faq
-->
<div class="box-middle box-bg-white top-gradient">
	<h2 class="pt70 p20 fz22 center color-blue bold top-gradient" id="faq"> 
		Find out most common frequently asked Questions &amp; Resources
	</h2>
	<div class="box-container mt20 p20">
	  <div class="row">
		<nav class="col-sm-3 fz13 hidden-xs" id="myScrollspy">
		  <ul class="nav nav-stacked bold faq-point">
			<li class="fz22 pl15">FAQ</li>
			<li class="active"><a class="a-hover-blue" href="#getting-started">Getting Started</a></li>
			<li><a class="a-hover-blue" href="#bill">Billing & Invoicing</a></li>
			<li><a class="a-hover-blue" href="#legal">Legal</a></li>
			<li><a class="a-hover-blue" href="#security">Security & Privacy</a></li>
		  </ul>
		</nav>
		<div class="col-sm-9">
		  <div id="getting-started"> 
			<h3 class="fz22 bold">Getting Started</h3>
			  <p class="fz13"> 
				Launching your most secure and elastic cloud service.<br>
				Our easy-to-read guides help your team find better, easer, how to manage your cloud system.
			  </p>
			  <div class="box-bg-white">
				<div class="mt5" role="tab">
				  <h4 class="fz17 pl0 p10">
						Here’s a set of detailed <a class="color-blue a-hover-blue" href="#">guides for User</a> to help you get the most out of our services.
				  </h4>
				</div>
			  </div>
			  <div class="box-bg-white">
				<div class="mt5" role="tab" id="headingOne">
				  <h4 class="fz17 pl0 p10" >
						Check out our <a class="color-blue a-hover-blue" href="#">blog</a>, where we offer plenty of tips and tricks or go straight to <a class="color-blue a-hover-blue" href="#">8 tips to get the most out of biznet GIO</a>
				</h4>
				</div>
			  </div>
			  <div class="box-bg-white">
				<div class="mt5" role="tab" id="headingOne">
				  <h4 class="fz17 lapse-title pl0 p10">
						See how <a class="color-blue a-hover-blue" href="#">our customers</a> are using our cloud service and read what they think about us
				  </h4>
				</div>
			  </div>
			  <div class="box-bg-white">
				<div class="mt5" role="tab" id="headingOne">
				  <h4 class="fz17 pl0 p10">
						Follow us on <a class="color-blue a-hover-blue" href="#">Twitter</a> and <a class="color-blue a-hover-blue" href="#">Facebook</a> to stay in the loop about new features, service updates, and more </h4>
				</div>
			  </div>
			  <div class="box-bg-white">
				<div class="mt5" role="tab" id="headingOne">
				  <h4 class="fz17 pl0 p10">
						Last but not least, we’re always here to help. Our account managers don’t work on commission. 
						Their sole purpose is to help you succeed using cloud. so if you have questions, 
						contact us at +022-89923 or Mail to <a class="color-blue a-hover-blue" href="mailto:help@biznetgiocloud.com">help@biznetgiocloud.com</a>
				</div>
			  </div>
		  </div> 
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
	</div>
</div>
@include('frontend/partial/footer')