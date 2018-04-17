@extends(layouts.master)
@secction('content')

<div class="content devis">
	<div class="col-12 col-sm-12 devis ">
		@if (isset($name))

			<h4 style="margin-top:10px;"> <?php  echo $name[0]->name?>	</h4>					
		@endif
		
		<div class="col-12 col-sm-12 ">
			
			<div id="products" class="row devis" >
				<h3>
				<div class="col-12 col-sm-12 products_box">
					<div class="row" id="products_line">
						@if (isset($products))
							@foreach ($products as $value)
									<div class="col-md-3">
										<div class="card " >
											<img class="card-img-top product_img" src="{{URL::asset("uploads/products/$value->photo")}}" alt="Card image cap">
											<div class="card-block">
												<h5 class="card-title product">{{$value->name}}</h5>
												<div class="product_description_block">
													<p class="card-text product product_description">{{ $value->description )}}</p> </div>
													<p class="card-text product"><span class="product_price">{{$value->price}} </span><span> р.</span> <span  class="product_weight">  {{$value->weight}}</span>     </p>
													<button class=" product cash_btn btn" data-id= "{{$value->id}}"> В карзину </button>
												</div>
											</div>
										</div>
								@endforeach
							@endif    
						</div>
					</div>
				</div>
			</div>
	</div>

	 @endsection