<header class="box-container pt30 p20">
	<nav>
		<ul class="list-inline  hidden-xs">
			<li class="pull-left color-white bold fz13" >Call +022-89923</li>
			<li class="pull-right fz12">
				<ul class="list-inline pull-right">
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li style="border:1px solid white; padding:3px 15px;margin-top:-3px;border-radius:5px;" class=""><a class="color-white bold" href="{{URL::to('login')}}">Login</a></li>
				</ul>
				<ul class="list-inline pull-right">
					<li><a class="color-white bold" href="{{URL::to('/')}}">Home</a></li>
					<li><a class="color-white bold"  href="{{URL::to('/pricing')}}">Pricing</a></li>
					<li><a class="color-white bold"  href="{{URL::to('/study-case/linda-jensen')}}">Our Customers</a></li>
					<li><a class="color-white bold"  href="{{URL::to('/contact')}}">Contact Us</a></li>
					<li><a class="color-white bold"  href="{{URL::to('/help')}}">Help</a></li>
				</ul>
			</li>
			
		</ul>
		<ul class="list-inline visible-xs">
			<li class="pull-left fz12 pointer" id="landing-menu" style="border:1px solid white; padding:3px 15px;margin-top:-3px;border-radius:5px;">
				<i class="fa fa-chevron-down color-white" aria-hidden="true"></i>		
			</li>
			<li class="pull-right color-white bold fz13" >Call +022-89923</li>
		</ul>
		<div class="main-menu-container pull-right" id="container-menu" style="top:0px">
			<ul class="list-inline">
				<li><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="{{URL::to('/')}}">
						Home
					</a>	
				</li>
				<li><i class="fa fa-tags"></i>&nbsp;&nbsp;&nbsp;
					<a href="{{URL::to('/pricing')}}">
						Pricing
					</a>	
				</li>
				<li><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="{{URL::to('contact')}}">
						Contact Us
					</a>
				</li>
				<li><i class="fa fa-question"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="{{URL::to('/help')}}">
						Help
					</a>	
				</li>
				<li><i class="fa fa-sign-in"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="{{{URL::to('login')}}}">
						Log in
					</a>	
				</li>
			</ul>
		</div>
	</nav>
</header>