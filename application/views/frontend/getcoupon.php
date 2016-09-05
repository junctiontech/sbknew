<div class="page-container">
	<div class="main-content">		
		<div class="page-loading-overlay">		
			<div class="loader-2"><img src="<?=base_url();?>frontend/images/search-animated-icon.gif" style="width:200px;height:200px"></div>		
		</div>
		<div class="row">	
			<div class="col-sm-2"></div>		
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<p class="panel-title" style="text-align:center;" >Recharge now<p>	
						<form role="form" class="validate form-horizontal form-label-left sign_up" method="post" action="<?=base_url();?>Landingpage/insertredeemrequet">		
							<div class="form-group">								
								<div class="col-sm-12">	
									<p style="text-align:center;">
										<label class="radio-inline">											
											<input type="radio" id="type" onclick="get_Opraters(this.value)" name="type" value="mobile">										
											Mobile	
										</label>
										<label class="radio-inline">											
											<input type="radio" id="type" onclick="get_Opraters(this.value)" name="type" value="dth">
											DTH	
										</label>
										<label class="radio-inline">											
											<input type="radio" id="type" onclick="get_Opraters(this.value)" name="type" value="datacard">
											Data Card
										</label>
									</p>
								</div>
							</div>
							<div class="form-group-separator"></div>
							<div class="form-group">
								<div class="col-sm-11">
									<input type="text" data-validate="required" data-message-required="Please Enter Your Number" class="form-control"  name="number" placeholder="Enter Number">
								</div>
							</div>
							<div class="form-group-separator"></div>
								
							<div class="col-md-6">									
								<div class="form-group">									
									<div class="col-sm-10">										
										<select class="form-control" data-validate="required" data-message-required="Please Select Opraters" id="opraters" name="oprater">
											<option value="">Select Opraters</option>											
										</select>										
									</div>									
								</div>								
							</div>							
							<div class="col-md-6">									
								<div class="form-group">									
									<div class="col-sm-10">										
										<select data-validate="required" data-message-required="Please Select states" class="form-control" name="state">
											<option value="">Select states</option>												
											<?php if(!empty($Status)) { foreach($Status as $data){?>											
											<option value="<?=$data->stateName;?>"><?= $data->stateName;?></option>	
											<?php } } ?>
										</select>										
									</div>										
								</div>								
							</div>							
							<div class="form-group" style="text-align: center;">
								<button type="submit" onclick="return confirm('Are you sure')" class="btn btn-success">Confirm & Redeem</button>								
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>	
		</div>
	</div>
</div>
<div class="clear"></div>