 <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>
	<h4 class="modal-title visible" id="myModalLabel">LOGIN</h4>
	 <h4 class="modal-title lekhpal hidden">Forgot Password?</h4>
</div>	
<div class="visible">
<div class="panel-body">
		

	<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				 <div class="error"></div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form onsubmit="Checked_login1()" class="form-horizontal form-label-left input_mask" action="javascript:;" method="post">
						
						<div class="col-md-6 col-sm-6 col-xs-12  ">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 form-input ">
									<input type="text" class="form-log " id="inputSuccess2" placeholder="Enter email" name="useremail">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 form-input">
									<input type="password" class="form-log" id="inputSuccess3" placeholder="Enter Password" name="password">
								</div>
							</div>
							 	
								<div class="row">	
									<div class="col-md-3 col-sm-3 col-xs-6">	
																
										<button type="submit" name="submit" value="submit" id="submit" class="btn btn-success">LOGIN</button>					
									</div>								
												
									<div class="col-md-4 col-sm-4 col-xs-6">						
										<a href="<?=base_url();?>Login/signup.html" class="btn btn-success" role="button">SIGN UP</a>								
									</div>							
									<div class="col-md-5 col-sm-5 col-xs-12">								
										<a href="javascript:;" class="btn btn-success" onclick="ForgotPassword()">Forgot Password?</a>		
									</div>							
								</div>
							 
						</div>
					</form>
					<div class="col-md-1 col-sm-1 col-xs-12 center">									
						<p>OR</p>								
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12 ">									  
					<div class="col-md-11 col-sm-11 col-xs-12 social">
						<?php if(!empty($facebookauthUrl))
								{
									echo '<a href="'.$facebookauthUrl.'"><img src="'.base_url().'frontend/images/facebook-login-button.png" alt=""/></a>';
								} 
						?>
					</div>										
					<div class="col-md-11 col-sm-11 col-xs-12 social">
								<?php // print_r($googleauthUrl); die;
										if(!empty($googleauthUrl)) 
										{
											echo '<a href="'.$googleauthUrl.'"><img src="'.base_url().'frontend/images/goo_login.png" alt=""/></a>';
										}
						?>										
					</div>				 			
				</div>
			</div>
			 
		</div>
	</div>
</div>
</div>
<div class="clear"></div>

<div class="hidden lekhpal">
<div class="panel-body">
		

	<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				 <div class="error"></div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form role="form" onsubmit="return Match_email()" class="validate form-horizontal form-label-left input_mask" action="<?=base_url();?>Landingpage/forgetpassword" method="post">			
				
					<div class="form-group">
							<label class="col-md-3 control-label">Enter your email:</label>
							<div class="col-md-4">	
							<input type="text" class="form-control"id ="Email" onchange="Match_email(this.value)" name="email" data-validate="required" data-message-required="Please Enter your email" placeholder="Please Enter your email" />
								<span style="color:red; display:inline-block" id="lekhpal"></span>
						</div>
						</div>
					<div id="Username"></div>
				
					<div class="modal-footer">					
						<button type="button" class="btn btn-white" onclick="back()">Back</button>				
						<button type="submit" class="btn btn-info">Send</button>				
					</div>				
				</form>					
			</div>			 
		</div>
	</div>
</div>
</div>





<script>
	function ForgotPassword(){		
		 $(".visible").addClass("hidden");		
		 $(".lekhpal").removeClass("hidden");		
		
	}
	function back(){
		
		 $(".visible").removeClass("hidden");		
		 $(".lekhpal").addClass("hidden");
		
		
	}
</script>


<script>
$(document).on('hidden.bs.modal', function (e) {
		var target = $(e.target);
        target.removeData('bs.modal')
              .find(".modal-content").html('');
    });
</script>
