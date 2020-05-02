@extends("layouts.html")

@section("title","HOMEPAGE")

@section("home")

<div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/6.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="images/7.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/5.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>

@endsection


@section("about")
@include("html.includes.about")
@endsection

@section("portfolio")
@include("html.includes.portfolio")
@endsection


@section("features")
<section id="features">
		<div class="container">
			<div class="row">
				<div class="center">
					<div class="col-md-6 col-md-offset-3">
						<h2>Features</h2>
						<hr>					
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				
				<div class="col-md-4 wow fadeInLeft">
					<h3>Responsive</h3>
					<img src="images/portfolio/recent/item4.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInUp">
					<h3>Web Design</h3>
					<img src="images/portfolio/recent/item5.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Easy Customize</h3>
					<img src="images/portfolio/recent/item6.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
			</div>
		</div>		
	</section>
@endsection