<!DOCTYPE html>
<html lang="en">
	<head>   
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->   
		<meta charset="utf-8">    
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Searchb4kharch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/fonts/linecons/css/linecons.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-core.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-forms.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-components.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-skins.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/custom.css">	 
		<script src="<?=base_url();?>frontend/js/jquery-1.11.1.min.js"></script>	
		<style type="text/css">
			.loading-indicator { 				
				position: fixed; 				
				left: 0; 				
				top: 0; 				
				z-index: 999; 				
				width: 100%; 				
				height: 100%; 				
				overflow: visible; 					
				background: url('<?=base_url();?>frontend/images/loader1.gif') no-repeat center center;	
			}   				
			.left_col {overflow:inherit !important; cursor:auto !important;}				
			.sidebar-footer {display:none !important;}	
		</style>
		<link rel="shortcut icon" href="<?=base_url();?>frontend/images/sb4k.png">
	</head>
	<body style="background:"> 	
		<div class="page-container">		
			<div class="sidebar-menu toggle-others fixed" style="background-color:#670099;">
				<div class="sidebar-menu-inner">
					<header class="logo-env">					
					<!-- logo -->					
						<div class="logo">					
							<a style="color:white;" class="site_title" href="<?=base_url();?>Login/Admindashboard" class="logo-expanded">						
								searchb4kharch.com
							</a>
						</div>					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->				
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->				 	
				</header>			
					<ul id="main-menu" class="main-menu">                              
						<li><a style="color:white;"><i class="fa fa-th"></i>Landingpage Setting<span class="fa fa-chevron-down"></span></a>                                
							<ul class="nav child_menu" style="display: none">                                 
								<li><a style="color:white;padding-left: 0px;" href="<?=base_url();?>Landingpagesetting.html">Landingpage product</a></li>
							</ul>                              
						</li>
						
						<li><a style="color:white;"><i class="fa fa-list"></i>Manage Coupon<span class="fa fa-chevron-down"></span></a>                                
							<ul class="nav child_menu" style="display: none">
								<li><a style="color:white;padding-left: 0px;" href="<?=base_url();?>Coupon?status=Requested">Recharge & Gift</a></li>
							</ul>                              
						</li>  
						
					</ul>			
				</div>
			</div>	
			<div class="main-content">
				<!-- User Info, Notifications and Menu Bar -->
				<nav class="navbar user-info-navbar" role="navigation">
					<!-- Left links for user info navbar -->
					<ul class="user-info-menu left-links list-inline list-unstyled">				
						<li class="hidden-sm hidden-xs">					
							<a href="#" data-toggle="sidebar">						
								<i class="fa-bars"></i>					
							</a>					
						</li>			
					</ul>
				<!-- Right links for user info navbar -->				
					<ul class="user-info-menu right-links list-inline list-unstyled">
						<li class="dropdown user-profile">						
							<a href="#" data-toggle="dropdown">						
								<img src="<?=base_url();?>/frontend/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
								<span>Hello Searchb4kharch						
									<i class="fa-angle-down"></i>						
								</span>						
							</a>
							<ul class="dropdown-menu user-profile-menu list-unstyled">	
								<li class="last">							
									<a href="<?=base_url();?>Login/AdminLogout.html">								
										<i class="fa-lock"></i>								
										Logout								
									</a>							
								</li>						
							</ul>					
						</li>						
					</ul>
				</nav>
				
				
				