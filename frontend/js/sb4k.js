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


function compare_product(productid)
{	
var count=0;
	var productid=[];
	$(".chkcount").each(function() {				
           if($(this).prop('checked') == true){				
                count=count+1;			   		
					productid.push(this.value);			   			 
            }
 });	 
	var pro_id=productid;	
	if ( pro_id !=='')
	{ 
    $.ajax({
    type: "POST",
	data:{ productid : pro_id },	
    url: base_url+'Landingpage/fetchdata_compare_product',  
    cache: false,
    success: function(s)
    {
		
	if(count>=1)
	{
		document.getElementById("compare").style.display = "block";	
		$("#productName").html(s);
	}
	else
	{
		document.getElementById("compare").style.display = "none";		 
	}
    }
    });
	}return false; 	

}
function bodyload (){
	$("#body").attr("style", ""); 
}


function submit_compare(productid)
{	
var count=0;
	$(".chkcount").each(function() {				
           if($(this).prop('checked') == true){				
                count=count+1;				  
            }
 });
	if(count>=5){
		alert('checked product should not more than 4');
		return false;
	}
	else if(count>=2)
	{	
		return true;	 
	}
	else if(count==1){
				alert('please checked atleast two product');
				return false;		
	}	
}


function Match_email(){ 
			var email = document.getElementById("Email").value; 
			var big=false;			 
	$.ajax({
				type: "POST",
				data: {data:email },
				async: false,
			 	url : base_url+'Landingpage/Match_emails',				
			})	
				 .done(function(msg){
		//alert(msg);
					if(msg !=null && msg.length>0){	
						$("#Username").html(msg);
						$("#lekhpal").html('');
						big = true;
					}else{	
						$("#lekhpal").html('Please Enter Valid Email');			 		 			
					big= false;
					}
	}); 
	return big;
}
function match_otp(){ 
			var otp = document.getElementById("otp").value; 
			var big=false;			 
	$.ajax({
				type: "POST",
				data: {data:otp },
				async: false,
			 	url : base_url+'Landingpage/match_otp',				
			})	
				 .done(function(msg){
		//alert(msg);
					if(msg !=null && msg.length>0){							 
						$("#otperror").html('');
						big = true;
					}else{	
						$("#otperror").html('Please Enter Valid Otp');			 		 			
					big= false;
					}
	}); 
	return big;
}

function Changestatus(value,id){ 			
						var status = value;	
						var id = id;	
						
						var big=false;			 
	$.ajax({
				type: "POST",
				data: {data:status,id:id },
				async: false,
			 	url : base_url+'Coupon/changestatus',				
			})	
				 .done(function(msg){
		var mass ="Status change to "+status;
	//	alert(mass);
		 $( ".log" ).text(mass);
		$('.log').fadeIn().delay(3000).fadeOut();			
	});  
	return big;
}

function Checked_login1(value){

	var useremail = document.getElementById("inputSuccess2").value;
	var password = document.getElementById("inputSuccess3").value;
	var submit = document.getElementById("submit").value;
		
				
		
		
	$.ajax({
				type: "POST",
				data: {useremail:useremail,password:password,submit:submit },
				async: false,
				url : base_url+'Login/Checked_login',				
			})	
				 .done(function(msg){
	 
		if(msg == 'true'){					
		//	var mass='You ve Logged in successfully.';
		//	 $( ".log" ).text(mass);
			window.location = (base_url+'User/Dashboard');
			
					return true;	
		}else{
			var mass=msg;
		
				 $( ".error" ).text(mass);
				$('.error').fadeIn().delay(3000).fadeOut();	
		return false;	
		}
				}); 
		
		return false;
	
}