<div class="page-loading-overlay">			
	<div class="loader-2"><img src="<?=base_url();?>frontend/images/search-animated-icon.gif" style="width:200px;height:200px"></div>		
</div>

<div class="col-sm-9 col-md-9 col-xs-12 form_content ">
	<!-- Alert section For Message-->	
	<?php  if($this->session->flashdata('message_type')=='success') {  ?>	
	<div class="alert alert-success alert-dismissible fade in" role="alert">       
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>x</button>       
		<strong><?=$this->session->flashdata('message')?></strong>  </div>	
	<?php } if($this->session->flashdata('message_type')=='error') { ?>		
	<div class="alert alert-danger alert-dismissible fade in" role="alert">        
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>x</button>           
		<strong><?=$this->session->flashdata('message')?></strong>  </div>		
	<?php } if($this->session->flashdata('category_error_login')) { ?>
	<div class="row" >
		<div class="alert alert-danger" >
			<strong><?=$this->session->flashdata('category_error_login')?></strong> <?php echo"<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";?>
		</div>
	</div>
	<?php }?>		
	<!-- Alert section End-->
	<div class="col-md-12 col-sm-12 col-xs-12 form_content">
		<div class="" role="main"> 
			<div class="row">                     
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p>My Coupon</p>
					<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">								
						<table cellspacing="0" class="table table-small-font table-bordered table-striped">			
							<thead>				
								<tr class="headings">					
									<th>Go To Redeem</th>					
									<th>Status</th>					
									<th>Validity</th>									 								 
								</tr>		
							</thead>			
							<tbody>
								<tr>
									<td>Link :- Coupon</td>
									<td>Status</td>
									<td>Created On / Expire On</td> 									 
								</tr>								
							</tbody>
						</table>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>









</div>
</div>
</div>