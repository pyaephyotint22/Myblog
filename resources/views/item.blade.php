@extends('master')
@section('content')
<div class="container my-5 pt-5">
	<h2 class="text-center"> Avaliable  Item </h2>
	<hr class="divider my-2"/>
</div>
<!-- <item> -->
	<div class="container my-5">
		<div class="row">
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/SeafoodCocktail.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Seafood Cocktail</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">14000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Tropical.jpg')}}" class="image card-img-top border"alt="..." height="237">
						<div class="add_button" data-target="#detailModal" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Tropical Seafood</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">12000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/seafoodD.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Seafood Deluxe</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">13000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/BBQ-Chicken-6.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">BBQ Chicken</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">15000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Hawaiian.jpg')}}" class="image card-img-top border" alt="..." height="240">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Hawaiian</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">12000 MMk</p>
						<!-- <button class="btn btn-outline-secondary btn-block">Add to Card</button> -->
						<button class="addtocart btn btn-outline-secondary btn-block"
						data-photo="Hawaiian.jpg" data-name="Hawaiian" data-price="12000" data-id="1">Add to cart</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Super Deluxe.jpg')}}" class="image card-img-top border" alt="..." height="240">
						<div class="add_button" data-target="#detailModal" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Super Deluxe</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">15000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Aloha.jpg')}}" class="image card-img-top border" alt="..." height="240">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Aloha</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">13000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Chicken Caldo.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Chicken Caldo</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">15000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Double Pepperoni.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Double Pepperoni</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">14000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Extreme Crust.jpg')}}" class="image card-img-top border" alt="..."  height="250">
						<div class="add_button" data-target="#detailModal" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Extreme Crust</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">12000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Extreme cheesy Suasage Bite Crust.jpg')}}" class="image card-img-top border" alt="..."height="220">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Extreme cheesy Suasage Bite Crust</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">20000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Pan Crust.jpg')}}" class="image card-img-top border" alt="..." height="250">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Pan Crust</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">15500 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/BBQ Pork Deluxe.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">BBQ Pork Deluxe</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">14000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Ham & Crab Stick.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Ham & Crab Stick</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">10000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Chicke Tario.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Chicke Tario</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">15000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Italian Sausage.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Italian Sausage</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">20000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Shrimp Cocktail.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Shrimp Cocktail</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">14000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Gralic Bread.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Gralic Bread</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">4000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Cheesy Potato.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Cheesy Potato</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">4000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-3 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/Spicy Chicken.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Spicy Chicken</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">5000 MMk</p>
						<button class="btn btn-outline-secondary btn-block">Add to Card</button>

					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection 