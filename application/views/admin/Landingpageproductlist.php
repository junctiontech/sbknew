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
<!-- Alert section End-->	
<div class="col-md-12 col-sm-12 col-xs-12">      
	<div class="x_panel">           
		<div class="x_title">               
			
			<h2>Landingpage Product</h2>					
			
		<!--<div align="right">	
				<button type="button" href="<?=base_Url();?>Landingpagesetting/landingpageproduct" type="button" class="btn btn-success taright" data-toggle="modal" data-target=".bs-example-modal-lg">Add Landingpage Product </button>
				<div class="clearfix"></div> 
			
			</div>-->		
			
			<div class="x_content">
								
									
				
				<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">	
				
					<table id="example" class="table table-striped responsive-utilities jambo_table">									
				
						<thead>                                  
						
							<tr class="headings">                                  
							
								<!--  <th><input type="checkbox" class=""  /></th>-->										
							
								<th>Inventory Hedding </th>										
							
								<th>Category Name</th>
							
								<th>Quantity</th>                                           
							<th>Status</th>										
							<th class=" "><span class="nobr">Action</span></th>									
						</tr>                                   
					</thead>									
					<tbody>									
					 									
						<?php foreach($Landingpageproduct as $data) { ?>                                      
						<tr class="even pointer">						
							<td class="a-right a-right "><?php echo $data->inventoryHedding ;?></td>                                          
							<td class=" "><?php echo $data->categoryName ; ?></td>										
							<td class=" "><?php echo $data->quantity ;?></td>                                         
							<td class=" "><?php echo $data->Status ; ?></td>										
							<td class=" "><a data-toggle="modal" data-target=".bs-example-modal-lg" href="<?=base_Url();?>Landingpagesetting/landingpageproduct/<?php echo $data->inventoryID; ?>">Edit</a>
								<!--/ <a href="<?=base_url();?>Landingpagesetting/landingpageproductdelete/<?php echo $data->inventoryID ; ?>">Delete</a>-->
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
</div></div>
<div class="clearfix"></div> 
	<!-- Modal 2 (Custom Width)-->
	
<!--<div class="modal fade custom-width" id="modal-2">	
	<div class="modal-dialog" style="width: 60%;">		
		<div class="modal-content">	
			<div class="modal-header">			
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			
				<h4 class="modal-title">Landingpage Product</h4>			
			</div>
			<div class="modal-body">				
				<form role="form" class="validate form-horizontal form-label-left"  method="post" action="<?=base_url();?>Categories/Landingpage_product">					<?php// print_r($product);//die;?>
					<div class="row">						
						<div class="col-md-12">	
							<div class="form-group">
								<label class=" col-md-4 control-label">Inventory Hedding</label>
								<div class="col-md-7">
									<input type="text" style="margin-bottom: 10px;" name="inventoryHedding" class="form-control" placeholder="Inventory Hedding">						
								</div>					
							</div>					
						</div>					
					</div>
					<div class="row">						
						<div class="col-md-12">					
							<div class="form-group">
								<label class=" col-md-4 control-label">Category Name</label>						
								<div class="col-md-7">						
									<input type="text" style="margin-bottom: 10px;" name="categoryName" class="form-control"  placeholder="Category Name">						
								</div>					
							</div>					
						</div>					
					</div>
					<div class="row">
						<div class="col-md-12">					
							<div class="form-group">
								<label for="field-1" class=" col-md-4 control-label">Quantity</label>						
								<div class="col-md-7">						
									<input type="text" style="margin-bottom: 10px;" name="quantity" class="form-control" placeholder="Quantity">						
								</div>					
							</div>					
						</div>					
					</div>
					<div class="row">
						<div class="col-md-12">					
							<div class="form-group">
								<label class=" col-md-4 control-label">Status</label>						
								<div class="col-md-7">	
									<select style="margin-bottom: 10px;" name="status" class="form-control">
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>
										<option value="Delete">Delete</option>
									</select>
								</div>					
							</div>					
						</div>					
					</div>				
					<div class="modal-footer">					
						<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>					
						<button type="submit" class="btn btn-info">Save changes</button>				
					</div>					
				</form>						
			</div>			
		</div>		
	</div>	
</div>-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">	 
	<div class="modal-dialog modal-lg">                
		<div class="modal-content ">  
		</div>             
	</div>          
</div>
<script>
	$(document).on('hidden.bs.modal', function (e) {	
		var target = $(e.target);       
		target.removeData('bs.modal')			
			.find(".modal-content").html('');   
	});	
</script>
	