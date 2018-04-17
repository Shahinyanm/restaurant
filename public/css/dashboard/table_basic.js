$(function () {
	 

	 $('#refresh_slide').on('click', function(){
	 	console.log('a')
	 	slide_refresh()
	
	})

slide_refresh()
function slide_refresh(){

	$.ajax ({
		type: 'post',
		url: $('#base').val()+"dashboard/slide_images",
		data:{},
		dataType:'json',
		success:r=>{
	
			$('#slide_tab').empty()
			var table = $('<table class="table"> </table>')
			var thead = $('<thead> </thead>')
			if(r[0]){
	
				var tr 		=$('<tr > </tr>')
				var th 		= $('<th > </th>')
				var th1 	= $('<th > </th>')
				var th2 	= $('<th > </th>')
				var td 		= $('<td > </td>')
				var keys 	=  Object.keys(r[0])
	
				keys.forEach(function(item) {
	
					var th = $('<th> </th>')
	
					th.html(item) 
					th.appendTo(tr)
				})
	
				th.html('Active')
				th.appendTo(tr)
				th1.html('Deactive')
				th1.appendTo(tr)
				th2.html('Delete')
				th2.appendTo(tr)
				tr.appendTo(thead)
				thead.appendTo(table)
				table.appendTo('#slide_tab')
	
	
	
				for (i=0; i<r.length; i++){
					var trt  = $('<tr> </tr>')
	
					$.each(r[i],function(index,value){
	
						if(index == "photo"){
	
							var tdd= $('<td ></td>')
							tdd.html('<img src ="../uploads/'+value+'" style="width:400px; height:150px"> ')
	
							tdd.appendTo(trt)
							trt.appendTo(table)
	
						}else{
	
							var tdd= $('<td> </td>')
							tdd.html(value)
	
							tdd.appendTo(trt)
							trt.appendTo(table)
						}
	
					});
					tdd= $('<td> </td>')
					tdd1= $('<td> </td>')
					tdd2= $('<td> </td>')
	
					tdd.html('<button class="btn activate" data-id="'+r[i].id+'"> Active </button>')
					tdd.appendTo(trt)
					tdd1.html('<button class="btn deactivate" data-id="'+r[i].id+'"> Deactive </button>')
					tdd1.appendTo(trt)
					tdd2.html('<button class="btn btn-danger delete_image" data-id="'+r[i].id+'"> Delete </button>')
					tdd2.appendTo(trt)
						// $('<button class="btn" data-id="'+r[i].id+'"> decline </button>').appendTo(trt)
						trt.appendTo(table)
	
						table.appendTo('#slide_tab')
					}
				}
			}
		})
	
	
	
	
	}	 	


	$('body').on('click', '.activate', function(){


	$.ajax ({
		type: 'post',
		url: $('#base').val()+"dashboard/active_image",
		data:{id:$(this).data('id')},
		dataType:'json',
		success:r=>{ 




		}

	})

})


	$('body').on('click', '.deactivate', function(){


		$.ajax ({
			type: 'post',
			url: $('#base').val()+"dashboard/deactive_image",
			data:{id:$(this).data('id')},
			dataType:'json',
			success:r=>{ }
	
		})

	})


	$('body').on('click', '.delete_image', function(){


		$.ajax ({
			type: 'post',
			url: $('#base').val()+"dashboard/delete_image",
			data:{id:$(this).data('id')},
			dataType:'json',
			success:r=>{ }
	
		})

	})
		
})