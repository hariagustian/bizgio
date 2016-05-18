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
				<img class="mt20 md-img right-img" src="{{asset('assets/images/home99designsThumbnail.jpg')}}">
		  </div>
		  <div class="col-md-7">
				<p class="pt35 p20 fz13">
					<span class="color-blue fz22">Denise Chen</span><br>
					<span class="color-blue ">President/CEO</span>, <a class="a-hover-blue" href="#">Saasmatrix</a><br>
					Biznet Gio Cloud is our most trusted and most reliable relationship that continues to
					meet and exceed our expectation year after year. 
					We wouldn’t be where we are today without Biznet Gio Cloud.”
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
					labore et dolore magna aliqua.
				</p>
				<ul class="fz12">
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
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
				<li><a class="a-hover-blue fz13" href="{{URL::to('study-case/linda-jensen')}}">Previous Case Study</a></li>
			  </ul>
			</nav>
		</li>
	</ul>
</div>

@include('frontend/partial/footer')