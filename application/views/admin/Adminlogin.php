<!DOCTYPE html>
<html lang="en">
	<head>	
		<title>Searchb4kharch!| </title>
    <!-- Bootstrap core CSS -->		
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
		<link rel="shortcut icon" href="<?=base_url();?>frontend/images/sb4k.png">
		<script src="<?=base_url();?>frontend/js/jquery-1.11.1.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body style="background:#F7F7F7;"> 
		<div class="row">							
			<div class="col-md-3"></div>							
			<div class="col-md-6" style="text-align: center;">							
				<form class="form-horizontal form-label-left input_mask" action="<?=base_url()?>Login/adminlogin" method="post">								
					<div class="col-md-12 col-sm-12 col-xs-12 first_label ">									
						<h3>LOGIN</h3>							
						<!-- Alert section For Message-->							
						<?php  if($this->session->flashdata('message_type')=='success') {  ?>							
						<div class="alert alert-success alert-dismissible fade in" role="alert">							
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>				
							<strong><?=$this->session->flashdata('message')?></strong>  </div>							
						<?php } if($this->session->flashdata('message_type')=='error') { ?>							
						<div class="alert alert-danger alert-dismissible fade in" role="alert">							
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>					
							<strong><?=$this->session->flashdata('message')?></strong>  </div>							
						<?php } if($this->session->flashdata('category_error_login')) { ?>						
						<div class="row" >							
							<div class="alert alert-danger" >	
								<strong><?=$this->session->flashdata('category_error_login')?></strong> <?php echo"<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";?>							
							</div>						
						</div>						
						<?php }?>							
						<!-- Alert section End-->								
					</div>	
					<div class="col-md-12 col-sm-12 col-xs-12  ">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 form-input ">	
								<input type="text" class="form-log " id="inputSuccess2" style="width: 50%; margin: 0px auto;" placeholder="Enter email" name="username">
							</div>		
						</div>			
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 form-input">										
								<input type="password" class="form-log" id="inputSuccess3" style="width: 50%; margin: 0px auto;" placeholder="Enter Password" name="password">
							</div>		
						</div>		
						<div class="form-group">	
							<div class="col-md-6 col-sm-6 col-xs-12" style="left:35px;">
								<button type="submit" name="submit" value="submit" class="btn btn-success">LOGIN</button>
							</div>	
							<div class="col-md-6 col-sm-6 col-xs-12" style="left:-60px;">
								<a href="javascript:;" onclick="jQuery('#modal-2').modal('show');"><p>Forgot Password?</p></a>
							</div>	
						</div>
					</div>		
				</form>	
			</div>	
			<div class="col-md-3"></div>
		</div>                 
		<!-- form --> 
		<!-- content --> 
	</body>
</html>