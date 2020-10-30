@extends('master')
@section('content')
<!-- <for home page> -->
	<div class="container container-carousel">
		<div class="carousel slide" id="headerCarousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#headerCarousel" data-slide-to="1" class=""></li>
				<li data-target="#headerCarousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/1.jpg" class="d-block w-100">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1 style="text-align: left;">Buy 1 Get 1 Promotion</h1>
						<h3>Moonsoon Promotion</h3>
						<p>Tario Chicken</p>
					</div>
				</div>

				<div class="carousel-item">
					<img src="images/2.jpg" class="d-block w-100">
					<div class="img-overlay"></div>
					<div class="carousel-caption">
						<h1 style="text-align: left;">Buy 1 Get 1 Promotion</h1>
						<h3>Happy June</h3>
						<p>Hwaiian Pizza with Happy</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/3.jpg" class="d-block w-100">
					<div class="img-overlay"></div>
					<div class="carousels-caption">
						<h1 style="text-align: left;">Buy 1 Get 1 Promotion</h1>
						<h3>Winter is Coming</h3>
						<p>Seafood Deluxe is Waiting</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container my-5 pt-5">
			<h2 class="text-center"> Avaliable Combo Set </h2>
			<hr class="divider my-2"/>
		</div>
		<div class="container my-2">
			<div class="row">
				<div class="col-md-6">
					<img src="images/4.jpg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<img src="images/7.jpg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<img src="images/6.jpg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<img src="images/5.jpg" class="img-fluid">
				</div>
			</div>
		</div>
@endsection 