if(window.location.hostname=="localhost"){
	var base_url = 'http://localhost/sbknew/'; 
}

if(window.location.hostname=="searchb4kharch.com"){
	var base_url = 'http://searchb4kharch.com/'; 
}
if(window.location.hostname=="www.searchb4kharch.com"){
	var base_url = 'http://www.searchb4kharch.com/'; 
}
if(window.location.hostname=="192.168.1.151"){
	var base_url = 'http://192.168.1.151/sbknew/'; 
}

function Filter_product(value){ 
			var categoriesID = document.getElementById("categoriesID").value;
				
					var data=[];								
					$(".count").each(function() {
					if($(this).prop('checked') == true){
					if(this.value !=''){			
					data.push(this.value);
				}				
			}			
        });
		
		//filter.push(data);
	$.ajax({
				type: "POST",
				data: {data:data,categories:categoriesID },			
				url : base_url+'Landingpage/Filter_product',				
			})	
				 .done(function(msg){
//alert(msg);					 
					$('#mySelect').html(msg);					
					return false;	
				}); 
		
		return false;
}

function get_Opraters(value){ 
			var type = document.getElementById("type").value;		
		
	$.ajax({
				type: "POST",
				data: {data:type},	
				async: false,
				url : base_url+'Landingpage/get_Opraters',				
			})	
				 .done(function(msg){					 
					$('#opraters').html(msg);					
					return false;	
				}); 
		
		return false;
}


