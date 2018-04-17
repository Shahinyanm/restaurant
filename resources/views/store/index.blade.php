<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">
</head>
<body>
@include('partials.header')

<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-12 col-sm-12">
                @include('partials.slide')
			</div>
			<div class="col-12 col-sm-12 ">

				<div id="products" class="row devis" >
					<div class="col-12 col-sm-12">
						<ul id="wich_products">
							<li class="active" id="recomended"><span>Рекомендуем</span></li>
							<li class="recomended" id="popular" ><span>Популярные</span></li>
						</ul>
					</div>
					<div class="col-12 col-sm-12">
						<div class="row" id="products_line">
                            <?php if (isset($products)): ?>
                            <?php foreach ($products as $value): ?>
                            <?php if($value->recomend == 1): ?>
							<div class="col-md-3">
								<div class="card " >
									<img class="card-img-top product_img" src="<?= base_url("uploads/products/$value->photo") ?>" alt="Card image cap">
									<div class="card-block">
										<h5 class="card-title product"><?= $value->name ?></h5>
										<div class="product_description_block">
											<p class="card-text product product_description"><?= $value->description ?></p> </div>
										<p class="card-text product"><span class="product_price"><?= $value->price?> </span> <span>р. </span> <span  class="product_weight">  <?= $value->weight?> </span>     </p>
										<button class=" product cash_btn btn" data-id= "<?= $value->id ?>"> В карзину </button>
									</div>
								</div>
							</div>
                            <?php endif ?>
                            <?php endforeach ?>
                            <?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    {{--@yield('center')--}}
</div>







<input type="hidden" value="" id="base" name="">

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src=" {{URL::asset('js/cufon-yui.js')}}"></script>
<script src=" {{URL::asset('js/ChunkFive_400.font.js')}} "></script>
<script src=" {{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
<script src=" {{URL::asset('js/index.js')}} "></script>
<script src=" {{URL::asset('js/cart.js')}} "></script>


<script type="text/javascript">
    Cufon.replace('h1',{ textShadow: '1px 1px #000'});
    Cufon.replace('h2',{ textShadow: '1px 1px #000'});
    Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
    Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
</script>
</html>