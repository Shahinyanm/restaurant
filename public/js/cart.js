	$(function(){
	if(localStorage.getItem('sum')){
		sum = JSON.parse(localStorage.getItem('sum'))
		$('#sum').html(sum)
	}
	
})


$('body').on('click', '.cash_btn', function(){

	var price = $(this).parent().find('.product_price').html()
	if(localStorage.getItem('sum')){
		sum = Number(JSON.parse(localStorage.getItem('sum')))
	}else {
		var sum=0;
	}
	
	sum += Number(price)
	$('#sum').html(sum)
	localStorage.setItem('sum', JSON.stringify(sum))

	if(localStorage.getItem('products_cart')){
		products_cart = JSON.parse(localStorage.getItem('products_cart'))

		if(products_cart[$(this).data('id')]){
			products_cart[$(this).data('id')]++
			products_cart[$(this).data('id')+'sum'] = (products_cart[$(this).data('id')] * price) 
		}else {
			products_cart[$(this).data('id')] = 1
			products_cart[$(this).data('id')+'sum'] += (products_cart[$(this).data('id')] * price) 
		}
	}else{
		var products_cart = {};

		products_cart[$(this).data('id')] = 1
		products_cart[$(this).data('id')+'sum'] = (products_cart[$(this).data('id')] * price)
	}
	$('#ids').val(JSON.stringify(products_cart))
	localStorage.setItem('products_cart', JSON.stringify(products_cart))
	// $('#cart_box').hide(500)
	// show_cart()


})
function show_cart(){
	products=JSON.parse(localStorage.getItem('products_cart'))
	sum=JSON.parse(localStorage.getItem('sum'))
	// console.log(products)
	var data = {}
	$.each(products, function(key, value){
		if(Number(key)){
			console.log(key)
			data[key] =value
		}
	})
	console.log(data)

	$.ajax ({
		type: 'post',
		url: $('#base').val()+'products/shop_card',
		data:data,
		dataType:'json',
		success:r=>{ 
			
				$('#cart_box').empty()
				var table = $('<table class="table"> </table>')
				r.forEach(function(item){

						$('<tr  class="product_row"><td><img class="basket_product_img" src="'+$('#base').val()+'uploads/products/'+item[0].photo+'" alt="Card image cap"> </td><td>'+item[0].name+'</td><td class="price">'+item[0].price+'</td><td><button class="btn btn-small minus" data-id="'+item[0].id+'">-</button> <span class="qty"> '+products[item[0].id]+'</span> <button class="plus btn btn-small circle"  data-id="'+item[0].id+'">+</button></td><td class="total">'+products[item[0].id]*item[0].price+'</td> <td> <button class="btn delete_product_row btn-danger btn-smal" data-id="'+item[0].id+'">x</button></tr>').appendTo(table)
			
				})
			table.appendTo('#cart_box')
			}
		})

}
	
$(".sum_li").on('click', function(){
	$('#cart_box').slideToggle(500)
show_cart()
})


$('body').on('click', '.minus', function(){
	
	var products = JSON.parse(localStorage.getItem('products_cart'))
	products[$(this).data('id')]--
	products[$(this).data('id')+'sum']-=Number($(this).parents('.product_row').find('.price').html())
	var t = Number($(this).parent().find('.qty').html())
	t--

	$(this).parent().find('.qty').html(t)
	$(this).parents('.product_row').find('.total').html(t * Number($(this).parents('.product_row').find('.price').html()))
	localStorage.setItem('products_cart', JSON.stringify(products))
	
	$('#sum').html(Number($('#sum').html())-Number($(this).parents('.product_row').find('.price').html()))
	localStorage.setItem('sum',JSON.stringify($('#sum').html()))

})

$('body').on('click', '.plus', function(){

	
	var products = JSON.parse(localStorage.getItem('products_cart'))
	products[$(this).data('id')]++
	products[$(this).data('id')+'sum']+=Number($(this).parents('.product_row').find('.price').html())

	var t = Number($(this).parent().find('.qty').html())
	t++

	$(this).parent().find('.qty').html(t)
	$(this).parents('.product_row').find('.total').html(t * Number($(this).parents('.product_row').find('.price').html()))
	localStorage.setItem('products_cart', JSON.stringify(products))

	$('#sum').html(Number($('#sum').html())+Number($(this).parents('.product_row').find('.price').html()))
	localStorage.setItem('sum',JSON.stringify($('#sum').html()))


})

$('body').on('click', '.delete_product_row', function(){
	var products = JSON.parse(localStorage.getItem('products_cart'))
	$('#sum').html($('#sum').html()-products[$(this).data('id')+'sum'])

	delete products[$(this).data('id')]
	delete products[$(this).data('id')+'sum']

	localStorage.setItem('products_cart', JSON.stringify(products))
	localStorage.setItem('sum',JSON.stringify($('#sum').html()))
		
	show_cart()
})