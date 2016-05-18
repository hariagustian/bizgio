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
				<img class="mt20 md-img right-img" src="{{asset('assets/images/homeDisqusThumbnail.jpg')}}">
		  </div>
		  <div class="col-md-7">
				<p class="pt35 p20 fz13">
					<span class="color-blue fz22">Jennifer Williams</span><br>
					<span class="color-blue ">Chief Information Officer</span>, <a class="a-hover-blue" href="#">Alphalabs</a><br>
					As Alphalabs continues to expand its network, we need a partner who can offer more 
					tailored solutions to the needs of each market. We chose Biznet Gio Clould because the 
					company has a solid reputation for providing their clients 
					the support to both optimize resources and exceed business objectives.
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
					et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, 
					ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
				</p>
				<ul class="fz12">
					<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
					<li>Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</li>
					<li>Nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</li>
					<li>Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga</li>
				</ul>
		  </div>
		  <div class="col-md-6">
				<h3 class="fz22 color-blue">The Solution</h3>
				<p class="pt35 fz13">
					Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in 
					ea voluptate velit esse quam nihil molestiae consequatur
					<br> <br>
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
				<li><a class="a-hover-blue fz13" href="{{URL::to('study-case/linda-jensen')}}">Next Case Study</a></li>
			  </ul>
			</nav>
		</li>
	</ul>
</div>

@include('frontend/partial/footer')