    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('.add_catalog').on('click', function(){
	// console.log($('#catalogName').val())

	$.ajax ({
		url: "/catalog",
		data:{name:$('#catalogName').val()},
		dataType:'json',
		type: 'post',
		success:r=>{}
	})
})


$('.active_catalog_status').on('click', function(){
	console.log('a')

	$.ajax ({
		type: 'post',
		url: "/active_catalog",
		data:{id:$(this).data('id')},
		dataType:'json',
		success:r=>{ }
	})
})


$('.deactive_catalog_status').on('click', function(){

	$.ajax ({
		type: 'post',
		url: "/deactive_catalog",
		data:{id:$(this).data('id')},
		dataType:'json',
		success:r=>{ }
	})
})


$('.new_product').on('click', function(e){
	e.preventDefault()
		// console.log($('#description').val())
		var obj = new FormData(document.querySelector('#products_insert'))
		// obj.append('#.')
		$.ajax ({
			type: 'post',
			url: "/new_product",
			data:obj,
			contentType :false,
			processData :false,
			success:r=>{}
		})
	})


function show_products( url2,catalog_id = 0,){

	$.ajax ({
		type: 'post',
		url: url2,
		data:{id:catalog_id},
		dataType:'json',
		success:r=>{ 
			$('#products_table').empty()
			console.log(r)
			if(r[0]){
				r.forEach(function(item){
					var col = $('<div class="col-md-3 col-lg-3 product_box" data-id="'+item.id+'">')
					$('<img  class="product_photo"" src="'+$('#base').val()+'uploads/products/'+item.photo+'" alt="'+item.name+'">	').appendTo(col)
					$('<h5  class="product_name">'+item.name+'</h5></div></div>').appendTo(col)
					$('<p class="product_description">'+item.description+'</p>	').appendTo(col)
					$('<p  class="product_price">'+item.price+' руб.</p>').appendTo(col)
					$('<button class=" col-md-12 btn show_product" data-id="'+item.id+'" data-toggle="modal" data-target="#editProductModal"> Edit </button>').appendTo(col)
					col.appendTo('#products_table')

					if(item.status==0){
							// console.log('1')
							col.css("border-color", "#f5b8b8")
							$('.product_photo').css("border-color", "#f5b8b8")
											 

						}else if(item.status==1) {
							console.log($(this).parents().find('.product_box'))
							col.css("border-color", "#7fcec6")
							$('.product_photo').css("border-color", "#7fcec6")
						}
				
					})
			}
		}

	})
}

show_products('/show_admin_products')


$('body').on('click', '.show_product', function(){
	console.log($(this).data('id'))
	$.ajax ({
		type: 'post',
		url: "/show_modal_product",
		data:{id:$(this).data('id')},
		dataType:'json',
		success:r=>{ 

			if (r[0]) {

				r.forEach(function(item){
					$('#productName').val(item.name)
					$('#productPrice').val(item.price)
					$('#productWeight').val(item.weight)
					$('#productDescription').html(item.description)
					$('#data_id').html(item.id)
					$('#id').val(item.id)
					if(item.status==1){
						
						$('#product_status').prop('checked',true)

					}else{

						$('#product_status').prop('checked',false)
					}

					if(item.recomend==1){
						
						$('#recomend').prop('checked',true)

					}else{

						$('#recomend').prop('checked',false)
					}

					if(item.popular==1){
						
						$('#popular').prop('checked',true)

					}else{

						$('#popular').prop('checked',false)
					}
					


				})
			}
		}


	})

})



$('body').on('click', '.edit_product', function(e){
	console.log($('#product_status').val())
	e.preventDefault()
	var obj = new FormData(document.querySelector('#products_editing_form'))
	$.ajax ({
		type: 'post',
		url: "/edit_product",
		data:obj,
		contentType :false,
		processData :false,
		success:r=>{ }
	})

})


$('.btn_refresh').on('click', function(){
		$('.catalog_names').each(function(){
			console.log('a')

		if($(this).hasClass('active')){
			show_products('/show_catalog_products',$(this).data('id'))
		}
	})

})


$('.catalog_names').on('click', function (){

	$(this).parents().find('.catalog_names').removeClass('active')
	$(this).toggleClass('active')

	show_products('products/show_catalog_products', $(this).data('id'))

})