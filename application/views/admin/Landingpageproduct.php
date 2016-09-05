<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>
	<h4 class="modal-title" id="myModalLabel">Landingpage Product</h4>
</div><div class="panel-body">
<form role="form" class="validate form-horizontal form-label-left"  method="post" action="<?=base_url();?>Landingpagesetting/Landingpage_product">	
	<?php if(!empty($product)) {  ?>
	<input type="hidden" name="inventoryID" value="<?=isset($product[0]->inventoryID)?$product[0]->inventoryID:'';?>"/>
	<?php } ?>					
	<div class="row">
		<div class="col-md-12">							
			<div class="form-group">						
				<label class=" col-md-4 control-label">Inventory Hedding</label>							
				<div class="col-md-7">							
					<input type="text" name="inventoryHedding" value="<?=isset($product[0]->inventoryHedding)?$product[0]->inventoryHedding:'';?>" class="form-control" data-validate="required" data-message-required="Please Enter Your Mobile Number" placeholder="Inventory Hedding">
				</div>	
			</div>		
		</div>	
	</div>	
	<div class="row">
		<div class="col-md-12">	
			<div class="form-group">
				<label class=" col-md-4 control-label">Category Name</label>
				<div class="col-md-7">
					<input type="text" value="<?=isset($product[0]->categoryName)?$product[0]->categoryName:'';?>" name="categoryName" class="form-control" data-validate="required" data-message-required="Please Enter Your Mobile Number" placeholder="Category Name">
				</div>	
			</div>	
		</div>	
	</div>		
	<div class="row">	
		<div class="col-md-12">	
			<div class="form-group">
				<label for="field-1" class=" col-md-4 control-label">Quantity</label>	
				<div class="col-md-7">	
					<input type="number" data-validate="required" data-message-required="Please Enter Your Mobile Number" value="<?=isset($product[0]->quantity)?$product[0]->quantity:'';?>" name="quantity" class="form-control" placeholder="Quantity">	
				</div>	
			</div>		
		</div>		
	</div>		
	<div class="row">	
		<div class="col-md-12">	
			<div class="form-group">
				<label class=" col-md-4 control-label">Status</label>
				<div class="col-md-7">	
					<select name="status" class="form-control">								
						<option <?php if(!empty($product)) { if($product[0]->Status=='Active'){echo 'selected';}}?> value="Active">Active</option>				
						<option <?php if(!empty($product)) { if($product[0]->Status=='Inactive'){echo 'selected';}}?> value="Inactive">Inactive</option>
						<option <?php if(!empty($product)) { if($product[0]->Status=='Delete'){echo 'selected';}}?> value="Delete">Delete</option>
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

<script>
$(document).on('hidden.bs.modal', function (e) {
		var target = $(e.target);
        target.removeData('bs.modal')
              .find(".modal-content").html('');
    });
</script>

					
		