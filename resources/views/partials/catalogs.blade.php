<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/index.css');?>">
</head>
<body>
	@include('partials.header')
	<div class="container">

	@include('partials.products')

	
	

		<?php $this->load->view('center'); ?>
			
		</div>
				<input type="hidden" value="<?=base_url()?>" id="base" name="">

	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src=" <?=base_url('assets/index.js');?> "></script>
	<script src=" <?=base_url('assets/cart.js');?> "></script>


	</html>