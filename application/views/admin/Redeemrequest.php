<div class="">
	<!-- Alert section For Message-->	
	<?php  if($this->session->flashdata('message_type')=='success') { ?>
	<div class="alert alert-success alert-dismissible fade in" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button> 
		<strong><?=$this->session->flashdata('message')?></strong>  </div>	
	<?php } if($this->session->flashdata('message_type')=='error') { ?>	
	<div class="alert alert-danger alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
		<strong><?=$this->session->flashdata('message')?></strong>  </div>	
	<?php } if($this->session->flashdata('category_error')) { ?>	
	<div class="row" >		
		<div class="alert alert-danger" >			
			<strong><?=$this->session->flashdata('category_error')?></strong> <?php echo"<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;<
			/button>";?>
		</div>
	</div>
	<?php }?>
</div>	
<div class="log"></div>
<!-- Alert section End-->
<div class="row">				
	<div class="col-sm-12">
		<div class="panel panel-default">					
			<div class="panel-heading">					
				<h3 class="panel-title">Recharge</h3>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" method="get" action="<?=base_url();?>Coupon">						
					<div class="row">
						<div class="col-md-12">									
							<div class="form-group">
								<label class="col-sm-2 control-label">Select Status</label>							
								<div class="col-sm-5">									
									<select class="form-control" name="status">
										<option <?php if(!empty($redeemrequestdata)) { if($redeemrequestdata[0]->Status == 'Requested') {echo "Selected" ;} }?> vlaue="Requested">Requested</option>
										<option <?php if(!empty($redeemrequestdata)) { if($redeemrequestdata[0]->Status == 'Pending') {echo "Selected" ;} }?> vlaue="Pending">Pending</option>
										<option <?php if(!empty($redeemrequestdata)) { if($redeemrequestdata[0]->Status == 'Success') {echo "Selected" ;} }?> vlaue="Success">Success</option>
										<option <?php if(!empty($redeemrequestdata)) { if($redeemrequestdata[0]->Status == 'Cancel') {echo "Selected" ;} }?> vlaue="Cancel">Cancel</option>					
									</select>
								</div>
							</div>
							<div class="form-group-separator"></div>
							
							<div class="form-group">
								<div class="col-md-8 col-sm-8 col-xs-12" align="center">
									<button type="submit" value="submit" class="btn btn-success">Get</button>
								</div>	
							</div>
							
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">      
	<div class="x_panel">           
		<div class="x_title">               
			<h2>Recharge & Gift List</h2>						
			<div class="x_content">
				<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">	
				<table class="table table-striped responsive-utilities jambo_table">									
					<thead>                                  
						<tr class="headings">					
							<th>User Name</th>										
							<th>Type</th>
							<th>Number</th>                                           
							<th>Opretor</th>										
							<th>States</th>	
							<th>Status</th>
						</tr>                                   
					</thead>									
					<tbody>
						<?php foreach($redeemrequestdata as $data){?>
						<tr class="even pointer">
							<input type="hidden" value="<?php echo $data->redeemRequestID ;?>" onclick="Changestatus(this.value)" id="redeem">
							<td><?php echo $data->userFirstName ;?></td> 
							<td><?php echo $data->Type ;?></td> 
							<td><?php echo $data->Number ;?></td> 
							<td><?php echo $data->Opretor ;?></td> 
							<td><?php echo $data->States ;?></td> 
							<td>								
								<select id=" " onchange="Changestatus(this.value,'<?=$data->redeemRequestID ;?>')">								
									<option  <?php if($data->Status == 'Requested') {echo "Selected" ;}?> vlaue="Requested">Requested</option>
									<option  <?php if($data->Status == 'Pending') {echo "Selected" ;}?> vlaue="Pending">Pending</option>
									<option  <?php if($data->Status == 'Success') {echo "Selected" ;}?> vlaue="Success">Success</option>
									<option  <?php if($data->Status == 'Cancel') {echo "Selected" ;}?> vlaue="Cancel">Cancel</option>								
								</select>								
							</td>
						</tr>	
						<?php } ?>
					</tbody>                              
				</table>
				</div>
			</div>        
		</div>   
	</div> 
</div>	
<div class="clearfix"></div> 
</div>
</div>
<div class="clearfix"></div> 