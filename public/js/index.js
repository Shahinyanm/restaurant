$(function(){

$('#info').on('click', function(){
	$('.arrow_box').slideToggle(500)

})

$('#wich_products').children().on('click', function(){
	
	$(this).parent().find('li').removeClass('active').addClass('recomended')
	$(this).addClass('active')

})

$('.about').on('click',function(){

	var _this = $(this)

	$('.about').each(function(i,element){
		
		if($(this).hasClass('active_bar')){
		
			$(this).removeClass('active_bar')
			$(this).children().removeClass('active_bar')

		}
	})
		_this.addClass('active_bar')
		_this.children().addClass('active_bar')

 		if($('#delivery').hasClass('active_bar')){
 			$('#delivery_section').removeClass('hidden').addClass('active_bar')
 			$('#contact_section').removeClass('active_bar').addClass('hidden')
 			$('#company_section').removeClass('active_bar').addClass('hidden')
 			$('#payment_section').removeClass('active_bar').addClass('hidden')

 		}else if($('#aboutCompany').hasClass('active_bar')){
			$('#company_section').removeClass('hidden').addClass('active_bar')
 			$('#contact_section').removeClass('active_bar').addClass('hidden')
 			$('#delivery_section').removeClass('active_bar').addClass('hidden')
 			$('#payment_section').removeClass('active_bar').addClass('hidden') 	
 		}else if($('#contact').hasClass('active_bar')){
 			$('#contact_section').removeClass('hidden').addClass('active_bar')
 			$('#delivery_section').removeClass('active_bar').addClass('hidden')
 			$('#company_section').removeClass('active_bar').addClass('hidden')
 			$('#payment_section').removeClass('active_bar').addClass('hidden')
 		}else if($('#payment').hasClass('active_bar')){
 			$('#payment_section').removeClass('hidden').addClass('active_bar')
 			$('#contact_section').removeClass('active_bar').addClass('hidden')
 			$('#company_section').removeClass('active_bar').addClass('hidden')
 			$('#delivery_section').removeClass('active_bar').addClass('hidden')
 		}
	})


})

function show(url2){

$.ajax ({
		type: 'post',
		url: $('#base').val()+url2,
		data:{},
		dataType:'json',
		success:r=>{ 
			$('#products_line').empty()
			console.log(r)
			if(r[0]){
				r.forEach(function(item){
            	var col = $('<div class="col-md-3"> </div')
             	var card = $('<div class="card " > </div>')
					$('	<img class="card-img-top product_img" src="'+$('#base').val()+'uploads/products/'+item.photo+'" alt="Card image cap">').appendTo(card)
					 var card_block = $('<div class="card-block"></div>')
							$('<h5 class="card-title product">'+item.name+'</h5>').appendTo(card_block)
							$('<div class="product_description_block">').appendTo(card_block)
							$('<p class="card-text product product_description">'+item.description+'</p> </div>').appendTo(card_block)
							$('<p class="card-text product"><span class="product_price">'+item.price+'</span><span> р. </span> <span  class="product_weight">  '+item.weight+' </span>     </p>').appendTo(card_block)
					 		$('<button class=" product cash_btn btn" data-id= "'+item.id+'"> В карзину </button>').appendTo(card_block)
							card_block.appendTo(card)
							card.appendTo(col)
							
				col.appendTo('#products_line')
						})
			}
			
		}
	

	})

}


$('#recomended').on('click', function(){
	show('index/show_recomend')

// }


})

$('#popular').on('click', function(){
	// console.log('a')
	show('index/show_popular')

// }


})

	


