<div class="page-container">
	<div class="main-content"> 
 		<div class="col-md-12 col-sm-12 col-xs-12">				
			<div class="col-md-3 col-sm-3 col-xs-12 form_content">				
				<div class="fixed1">
		<!--	<div class="breadcrumb-env">					
				<ol class="breadcrumb " >
					<li><a href="<?=base_url();?>"><i class="fa-home"></i>Home</a></li>
					<li class=""><a href="<?=base_url();?>User/Dashboard.html">My Account</a></li>
				</ol>								
			</div>	-->
					<div id="main">
					<span style="font-size:20px;cursor:pointer;position: fixed;
left: 0px;
z-index: 101;" class="hidden-md" onclick="openNav()">&#9776;</span>
					</div>
					<div id="mySidenav" class="sidenav">
					
						<a href="<?=base_url();?>User/Dashboard.html"><img src="<?=base_url();?>frontend/images/button_my_account (1).png" style="margin-bottom:10px;"></a>		
					
						<ul>Wishlist</ul>					
					
						<li class="marker_none"><a href="<?=base_url();?>User/Mywishlist.html">My Wishlist</a></li>					
					
						<hr>				
					
						<ul>Settings</ul>
					
						<li class="marker_none"><a href="<?=base_url();?>User/PersonalInformation.html">Personal Information</a></li>							
					
						<li class="marker_none"><a href="<?=base_url();?>User/Coupon.html">My Coupon</a></li>
					
						<li class="marker_none"><a href="<?=base_url();?>User/Notify.html">My Notify</a></li>	
					
						<li class="marker_none"><a href="<?=base_url();?>User/Search.html">My Search & Share</a></li>	
					
						<li class="marker_none"><a href="<?=base_url();?>User/Changepassword.html">Change Password</a></li>				
					
						<li class="marker_none"><a onclick="return confirm('Are you sure you want to Deactivete Account?')" href="<?=base_url();?>User/DeactiveteAccount.html">Deactivate Account</a></li>				
					
						<hr>
					

 
						<a href="javascript:void(0)" class="closebtn hidden-md" onclick="closeNav()">&times;</a>
 

					</div>

 
				
				</div>	
			
			</div>
			
			

 

 
     
 
<style>
 



#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
 

 



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
 


