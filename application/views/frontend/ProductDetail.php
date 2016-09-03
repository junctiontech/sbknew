<div class="page-container">	
	<div class="main-content">	
		<div class="col-sm-12 col-md-12 col-xs-12 form_content ">
			<!-- Alert section For Message-->		
			<?php  if($this->session->flashdata('message_type')=='success') {  ?>		 
			<div class="alert alert-success alert-dismissible fade in" role="alert">            
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">�</span> </button>                
				<strong><?=$this->session->flashdata('message')?></strong>  </div>		
			<?php } if($this->session->flashdata('message_type')=='error') { ?>		
			<div class="alert alert-danger alert-dismissible fade in" role="alert">        
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">�</span> </button>           
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
		<div class="row" >				 
			<div class="col-md-10">
				<div class="content_top" style="background-color:white;"> 
					<div class="back-links">
						<p><a href="<?=base_url();?>">Home</a> >> <a href="<?=isset($backurl)?$backurl:''?>"><?=isset($categorykey)?$categorykey:''?> </a></p> 					
					</div>	
					<div class="clear"></div>	
					<h2  style="font-size:18px;color:red"><?=isset($products['productDetails'][0]['product_name'])?$products['productDetails'][0]['product_name']:''?></h2> 
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div  class="col-md-4 grid images_3_of_2 pro_img">	
						<img itemprop="image" src="<?=isset($products['productDetails'][0]['product_images_single'][0]['product_image_single'])?$products['productDetails'][0]['product_images_single'][0]['product_image_single']:''?>" alt="<?=isset($products['productDetails'][0]['product_name'])?$products['productDetails'][0]['product_name']:''?>"  />				
					</div>
					<div class="desc span_3_of_2">	
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if(!empty($products['data'])){ 
							usort($products['data'], function($a, $b) {return $a['product_price_after'] - $b['product_price_after'];});?>
							<?php foreach($products['data'] as $shopData){ ?>	
							<div class="col-md-4 col-sm-4 col-xs-4">
								<img src="<?=isset($shopData['product_store_logo'])?$shopData['product_store_logo']:''?>">							
								<p>Price: <br><span><?php if($shopData['product_price_after'] !=0){?>Rs. <?=number_format($shopData['product_price_after'],2)?><?php }else{ echo"coming soon"; }?></span></p>
								<a target="_blank" style="color:white;" href="<?=isset($shopData['product_store_url'])?$shopData['product_store_url']:''?>"><div class="btn btn-black">									
									<span >Buy now</span>								
									</div>							
								</a>
								<p class="vertical-top">
								<span class="popover-purple" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Offers: <?=isset($shopData['product_offers'])?$shopData['product_offers']:''?> ;
								Color: <?=isset($shopData['product_color'])?$shopData['product_color']:''?> ;
								Delivery: <?=isset($shopData['product_delivery'])?$shopData['product_delivery']:''?> ;
								Delivery cost: <?=isset($shopData['product_delivery_cost'])?$shopData['product_delivery_cost']:''?> ;
								EMI: <?php if(!empty($shopData['product_isemi'])){echo"Yes";}else{echo"No";}?> ;
								COD: <?php if(!empty($shopData['product_iscod'])){echo"Yes";}else{echo"No";}?> ;
								Return time: <?=isset($shopData['product_return_time'])?$shopData['product_return_time']:''?>;" data-original-title="More details">view detail</span>
								</p> 
							</div>							
									<?php }  } ?>			
						</div>					
											
						<div class="clear"></div>
						<div class="share">						
							<p>To earn RuPoints on your shopping, BUY NOW</p>
						</div>
						<div class="share">
							<p>Share Product :</p>						
							<ul>							
								 <li><a href="javascript:;" onclick="share(); return false;"><img  src="<?=base_url();?>frontend/images/facebook.png" alt="" id="shareBtn"></a></li>						
								<li> <a href="javascript:;" class="g-plusone"   ></a></li>						
							</ul>					 
						</div>					
						<div class="add-cart">						
							<div class="rating">						
								<p>Rating: <span> <?=isset($products['productDetails'][0]['product_ratings'])?$products['productDetails'][0]['product_ratings']:''?> of 5 </span>  Availability: <span><?php if($products['productDetails'][0]['isavailable']===true){echo"Available";}else{echo"Out of stock";}?></span>  Colors: <span><?php if(!empty($products['productDetails'][0]['available_colors'])){echo implode(" ",$products['productDetails'][0]['available_colors']);}else{echo"";}?></span></p>						
							</div>						
							<div class="clear"></div>					
						</div>
						
						<div style="padding-top:45px" class="button"><span><?php if(!empty($userinfos)) { if(in_array(isset($products[0]->productsID)?$products[0]->productsID:'',$whislistproduct)==false){?>					
							<a href="<?=base_url();?>User/AddToWishList/<?=isset($products[0]->productsID)?$products[0]->productsID:''?>.html" class="cart-button">Add to wishlists</a>					
							<?php } }else{ ?>						
							<a href="<?=base_url();?>Login.html?return=true" class="cart-button">Add to wishlists</a>						
							<?php } ?></span>					
						</div>				
					</div>				
					<div class="product-desc">					
						<h2>Product Features</h2>					
						<div class="row">					
				<?php  if(!empty($products['specs_alt']))$attributegroups = array_unique(array_map(function ($i) { return $i['product_spec_category']; }, $products['specs_alt'])); 
						if(!empty($attributegroups)){
						foreach($attributegroups as $attributegroup){	
				?> 						
							<div class="row">						
								<div class="col-md-12">							
									<div class="panel panel-default">								
										<div class="panel-body">									
											<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">										
												<table cellspacing="0" class="table table-small-font table-bordered table-striped">											
													<tbody>												
														<tr style="background-color: rgba(142, 142, 142, 0.24);">												
															<td><?=$attributegroup?></td>												
														</tr>												
													</tbody>											
												</table>										
											</div>										
										</div>								
									</div>							
								</div>						
							</div>						
							<div class="row">							
								<div class="col-md-12">								
									<div class="panel panel-default">								
										<div class="panel-body">									
											<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">										
												<table cellspacing="0" class="table table-small-font table-bordered table-striped">												
													<tbody>										
										<?php $keys = array_keys(array_column($products['specs_alt'], 'product_spec_category'), $attributegroup);
												if(!empty($keys)){
											foreach($keys as $key){?>													
														<tr>														
															<th scope="row"><?=isset($products['specs_alt'][$key]['product_spec_name'])?$products['specs_alt'][$key]['product_spec_name']:''?></th>														 
															<td><?=isset($products['specs_alt'][$key]['product_spec_value'])?$products['specs_alt'][$key]['product_spec_value']:''?></td>													
														</tr>													
										<?php } }?>												
													</tbody>											
												</table>										
											</div>										
										</div>								
									</div>							
								</div>						
							</div>						
							<?php } }?>					
						</div>				
					</div>	
					<div class="product-desc">
						<h2>Recommended  Product</h2>						
					</div>						
					<div class="row">						
						<div class="col-md-12">							
							<div class="panel panel-default">								
								<div class="panel-body">								
									<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">									
										<table cellspacing="0" class="table table-small-font  ">										
											<tbody>
												<tr>											
													<?php if(!empty($similarproduct)){ foreach($similarproduct as $similarproducted){?>												
													<td>  <div class="section group">								
														<a target="_blank" href="<?=base_url();?>Landingpage/Product/p/<?=$similarproducted['product_sub_cate']?>/<?=$similarproducted['product_id']?>/<?=str_replace(' ', '_',$similarproducted['product_title'])?>.html">								
															<div class="grid_1_of_4 images_1_of_4 imageswidth">									
																<img src="<?=$similarproducted['product_image']?>" alt="" />	
																<h2><?=$similarproducted['product_title']?> </h2>										
																<p>										
																	<span class="price">			
						<?php if($similarproducted['product_lowest_price'] && $similarproducted['product_lowest_price'] !=0){?>Rs.            
						<?=number_format($similarproducted['product_lowest_price'],2)?><?php }else{ echo"coming soon"; }?>           
						</span><br>									
																</p>								
															</div>								
														</a>							
														</div> </td><?php } }else{ ?> 													
													<td>No product Found!!</td>												
													<?php }?>												
												</tr>
											</tbody>											
										</table>										
									</div>										
								</div>								
							</div>							
						</div>						 
					</div>
								
				</div>		
			</div>			 
			<div class="col-md-2 col-sm-2 col-xs-0">				 
				<div class="fixedright" style="margin-top:-1%;">				
					<a href="http://tracking.vcommission.com/aff_c?offer_id=480&aff_id=48478&file_id=88882&file_id=79365" target="_blank"><img src="http://media.vcommission.com/brand/files/vcm/480/Zovi_CPS_Tees_160x600.jpg" width="160" height="600" border="0" /></a><img src="http://tracking.vcommission.com/aff_i?offer_id=480&file_id=79365&aff_id=48478&file_id=88882" width="1" height="1" />			
				</div>			
				<div class="clear"></div>			
			</div>	
		</div>		
	</div>
</div>
<div class="clear"></div>
<h1 style="display:none" itemprop="name"  >Hi, I have just found my <?=isset($products['productDetails'][0]['product_name'])?$products['productDetails'][0]['product_name']:''?> <?php if(!empty($products['data'][0]['product_price_after']) && $products['data'][0]['product_price_after'] !=0){?>at lowest price Rs <?=isset($products['data'][0]['product_price_after'])?$products['data'][0]['product_price_after']:''?><?php }else{ echo"coming soon"; }?> on www.searchb4kharch.com</h1>
<p style="display:none" itemprop="description"  >Hi, I have just found my <?=isset($products['productDetails'][0]['product_name'])?$products['productDetails'][0]['product_name']:''?> <?php if(!empty($products['data'][0]['product_price_after']) && $products['data'][0]['product_price_after'] !=0){?>at lowest price Rs <?=isset($products['data'][0]['product_price_after'])?$products['data'][0]['product_price_after']:''?><?php }else{ echo"coming soon"; }?> on www.searchb4kharch.com</p>
<script src="https://apis.google.com/js/client:platform.js" async defer></script>	
<script src="https://connect.facebook.net/en_US/all.js" async defer></script>
<script type="text/javascript">        
	var button;       
	var userInfo;
	window.fbAsyncInit = function() {         
		FB.init({ appId: '987149988019793',            
				status: true,            
				cookie: true,           
				xfbml: true,         
				oauth: true});		
	};         
	function share(){ 
		FB.ui(			
			{					
				redirect_uri:'http://<?=$_SERVER['HTTP_HOST']?><?=$_SERVER['REQUEST_URI']?>',					
				//display: 'popup',						
				method: 'stream.share',						
				u: 'http://<?=$_SERVER['HTTP_HOST']?><?=$_SERVER['REQUEST_URI']?>',					
				picture     : '<?=isset($products['productDetails'][0]['product_images_thumbnail'][0]['product_image_single'])?$products['productDetails'][0]['product_images_thumbnail'][0]['product_image_single']:''?>',				
				description : 'Hi, I have just found my <?=isset($products['productDetails'][0]['product_name'])?$products['productDetails'][0]['product_name']:''?> <?php if(!empty($products['data'][0]['product_price_after']) && $products['data'][0]['product_price_after'] !=0){?>at lowest price Rs <?=isset($products['data'][0]['product_price_after'])?$products['data'][0]['product_price_after']:''?><?php }else{ echo"coming soon"; }?> on www.searchb4kharch.com'				
			},function(response) {				
				if (response && !response.error_message) {				
					console.log(response);	
				} else {				
					console.log(response);	
				}				
			}			
		);	
	}	
</script>