@include('frontend/partial/header', array('metaData'=>$metaData))
<!--study case top-->
<div class="box-top box-bg-blue" id="help-page">
	<div class="background-home-blue">
		@include('frontend/partial/navigation')
		
		<div class="box-container" style="position:relative; height:100%">
			<div class="absolute-center-home">
				<p class="fz22 color-white bold">
				   Our team always strives <br>to provide first-class service.
				</p>
				<p class="fz13 pt10 pb10 color-white">
					Ultimately, the people we service and insure matter most.
					From those who simply call for information to those we're able to help with complex requesting needs,
					we treat each customer with the utmost care, diligence, and respect.
					We're not satisfied until our customers are..
				</p>
				<div class="btn btn-primary btn-lg active bold">
					<a class="color-white" href="{{URL::to('/signup')}}"> Join Now </a>
				</div>
			</div>
		</div>
	</div>	
</div>
<!--
	body study case
-->
<div class="box-middle box-bg-white top-gradient">
	<h2 class="pt70 p20 fz22 center color-blue bold top-gradient"> 
		Read What Our Customers Have to Say
	</h2>
</div>	
<div class="box-container m-center mt20">
	<div class="box-container-spesific">
		<div class="row">
		  <div class="col-md-4">
				<img class="mt20 md-img right-img" src="{{asset('assets/images/jennaStitcher.png')}}">
		  </div>
		  <div class="col-md-7">
				<p class="pt35 p20 fz13">
					<span class="color-blue fz22">Linda Jensen</span><br>
					<span class="color-blue ">IT & Software Development Manager</span>, <a class="a-hover-blue" href="#">Oraclepro</a><br>
					"With the scalable nature of Biznet GIO Cloud we don’t need to invest 
					in future proof equipment or worry about forecasting our resource needs prior to a purchase. 
					As we grow, and demands increase, extra resources are a click or phone call away. 
					We only need to increase and pay for resources when we actually need them! 
					Biznet GIO Cloud is helping us grow – the scalability has been priceless.”
				</p>
		  </div>
		</div>
	</div>	
</div>
<div class="box-middle box-bg-gray top-gradient mt70">
	<div class="box-container-spesific">
		<div class="row box-container p20">
		  <div class="col-md-6">
				<h3 class="fz22 color-blue">The Challenges</h3>
				<p class="pt35 fz13">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
					laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<ul class="fz12">
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</li>
					<li>Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</li>
				</ul>
		  </div>
		  <div class="col-md-6">
				<h3 class="fz22 color-blue">The Solution</h3>
				<p class="pt35 fz13">
					At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium 
					voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati <br> <br>
					cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, 
					id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. <br> <br>
					Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus 
					id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. <br> <br>
					Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe 
					eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic 
					tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis 
					doloribus asperiores repellat.
				</p>
		  </div>
		</div>
	</div>
</div>
<div class="box-container center mt20">
	<ul class="list-inline">
		<li>
			<nav>
			  <ul class="pager">
				<li><a class="a-hover-blue fz13" href="{{URL::to('study-case/jennifer-williams')}}">Previous Case Study</a></li>
				<li><a class="a-hover-blue fz13" href="{{URL::to('study-case/denise-chen')}}">Next Case Study</a></li>
			  </ul>
			</nav>
		</li>
	</ul>
</div>

@include('frontend/partial/footer')