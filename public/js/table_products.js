$('body').on('click', '.active_catalog_status'  function(){
console.log('a')

	$.ajax ({
		type: 'post',
		url: $('#base').val()+"product/active_catalog",
		data:{id:$(this).data('id')},
		dataType:'json',
		success:r=>{ 
		}
	})
})

	$('.deactive_catalog_status').on('click', function(){
		$.ajax ({
			type: 'post',
			url: $('#base').val()+"product/deactive_catalog",
			data:{id:$(this).data('id')},
			dataType:'json',
			success:r=>{ }
			})
	})