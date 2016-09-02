<div class="page-container">	
	<div class="main-content">	
		<div class="col-sm-12 col-md-12 col-xs-12 form_content ">		
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
		<div class="page-loading-overlay">
			<div class="loader-2"><img src="<?=base_url();?>frontend/images/search-animated-icon.gif" style="width:200px;height:200px"></div>		
		</div> 
		<div class="content_top" style="background-color:white;">
			<div class="back-links">
				<p><a href="<?=base_url();?>">Home</a> >><a href="<?=$_SERVER['HTTP_REFERER']?>"> Back</a> </p> 
			</div>   
			<div class="heading">
				<h3> Compare </h3>
			</div> 
			<div class="clear"></div>
		</div>	
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">					
				<div style="top: 20px;" class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">					
					<table cellspacing="0" class="table-bordered table-striped table-small-font">					
						<thead>						
							<tr>						
								<td>
									<div style="width:265px;text-align:center;">
										<h3>Features</h3>									
									</div>
								</td> 
								<?php if(!empty($compareproduct)){ foreach($compareproduct as $keyproduct=>$product){ ?>	
								<td>		
									<div style="width:265px;text-align:center; margin-top: 10px;">
										<div class="imageheightfix" style="height:150px!important;">
											<img style="height:150px" src="<?=isset($product['productDetails'][0]['product_images_single'][0]['product_image_single'])?$product['productDetails'][0]['product_images_single'][0]['product_image_single']:''?>" alt="" />
										</div>	
										<div class="compare_product_name">
											<p><?=isset($product['productDetails'][0]['product_name'])?$product['productDetails'][0]['product_name']:''?></p>	
										</div>
										<div class="compare_product_price">	
											<p>
												<span class="price"><?php if(!empty($product['data'])){?>Rs. <?=number_format(min(array_column($product['data'] , 'product_price_after')),2)?><?php }else{echo"out of stock";}?></span><br>
											</p>
										</div>	
										<a style="color:white" href="<?=base_url();?>Landingpage/Product/p/<?=isset($product['productDetails'][0]['product_sub_category'])?$product['productDetails'][0]['product_sub_category']:''?>/<?=isset($productID[$keyproduct])?$productID[$keyproduct]:''?>/<?=str_replace(' ', '_',$product['productDetails'][0]['product_name'])?>.html">
											<div  class="btn btn-black">
												<span>Buy Now</span>
											</div>
										</a>	
									</div>											
								</td>												
								<?php 
								$labelarray=$keyvaluearray='';
								foreach($product['specs_alt'] as $specs_alt){
									$labelarray[]=$specs_alt['product_spec_name'];
									//$keyvaluearray[]=$specs_alt['product_spec_value'];
								}
								} } ?>										
							</tr>										
						</thead>										
						<tbody>										
							<tr>			
								<td>			
									<?php if(!empty($labelarray)){ array_unique($labelarray);  ?>
									<table class="table"> 
										<tbody>			
											<?php foreach($labelarray as $label){?>
											<tr>				
												<td style="background-color:#ededed"><P  class="heddine1" >
													<?php if(!empty($label))
															{
																echo isset($label)?$label:'';	
															}
															else
															{
																echo "Other";
															}?>		
													</P>		
												</td>	
											</tr>		
											<?php } ?>
										</tbody>	
									</table>
									<?php  }?>
								</td>	
								<?php if(!empty($compareproduct)){ foreach($compareproduct as $productkeyvalue) { ?>
								<td>		
									<table class="table">
										<tbody> 	
											<?php foreach($labelarray as $labelkeyvalue){ ?>
											<tr>		
											<?php $keys=(array_keys(array_column($productkeyvalue['specs_alt'], 'product_spec_name'), $labelkeyvalue));	
											if($keys || $keys==0 ){  $keys = array_search($labelkeyvalue, array_column($productkeyvalue['specs_alt'], 'product_spec_name')); ?>													
												<td>															
													<p class="heddine"><?= strip_tags(isset($productkeyvalue['specs_alt'][$keys]['product_spec_value'])?$productkeyvalue['specs_alt'][$keys]['product_spec_value']:'');?></p>															
												</td>		
												<?php }else{ ?>
												<td style="background-color:white"><p class="heddine1">NO</p></td>
												<?php } ?>
											</tr>		
											<?php } ?>	
										</tbody>	
									</table>
								</td>	
								<?php }}?>
							</tr>	
						</tbody>	
					</table>	
				</div>
			</div>	
		</div> 
	</div>
</div>
<div class="clear"></div>