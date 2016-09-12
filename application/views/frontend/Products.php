<div class="page-container">
	<div class="sidebar-menu toggle-others fixed">
		<div class="sidebar-menu-inner">  			
			<div class="leftmargin col-xs-0">
				<ul id="main-menu" class="main-menu refinesearch"></ul>			
			</div>		
		</div>	
	</div>	
	<div class="main-content"> 		
		<div class="page-loading-overlay">			
			<div class="loader-2"><img src="<?=base_url();?>frontend/images/search-animated-icon.gif" style="width:200px;height:200px"></div>		
		</div>		
		<div class="row">			
			<div class="col-md-10 col-sm-10 col-xs-12 pageno-fixed">			
				<p><a href="<?=base_url();?>">Home</a> >> <?=isset($categorykey)?$categorykey:''?> </p>				
				<div class="page-no">
					<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">
						<?php if(!empty($previous)){ ?>
						<li>
							<a href="<?=$_SERVER['REDIRECT_URL'];?><?=$previous?>">Previous</a>
						</li>
						<?php } ?> 
						<li>
							<a href="<?=$_SERVER['REDIRECT_URL'];?><?=$next?>">Next</a>
						</li>
					</ul>					    		
				</div> 		
			</div>			
		</div>		
		<div class="clear"></div>		
		<div class="row">				
			<div class="col-md-10 col-sm-10 col-xs-12" style="margin-top: 2%;" id="mySelect"> 		
				<?php if(!empty($products)){foreach($products as $product){ ?>		        
				<div class="grid_1_of_4 images_1_of_4">
					<a target="_blank" href="<?=base_url();?>Landingpage/Product/p/<?=$product['product_sub_cate']?>/<?=$product['product_id']?>/<?=str_replace(' ', '_',$product['product_title'])?>.html">
						<div class="imageheightfix">
							<img src="<?=$product['product_image']?>" alt="" />
						</div>					
						<h2><?=$product['product_title']?></h2>   
						<p><span class="price">
							<?php if($product['product_lowest_price'] && $product['product_lowest_price'] !=0){?>Rs. 
							<?=number_format($product['product_lowest_price'],2)?><?php }else{ echo"coming soon"; }?>  
							</span><br>
						</p> 
					</a>
					<div class="checkbox">
						<?php if($product['can_compare']){?><label> 
						<input type="checkbox" value="<?=$product['product_id']?>" class="chkcount" name="productid" onchange="compare_product(this.value)">    
				Compare </label><?php } ?>
						<label class="wishlist"> 
							<?php if(!empty($userinfos)){ if(in_array($product['product_id'],$whislistproduct)==false){ ?>
							<a href="<?=base_url();?>User/AddToWishList/<?=$product['product_id']?>.html" class="fa fa-shopping-cart"></a>							
							<?php } }else{ ?>					
							<a href="<?=base_url();?>Login.html?return=true" data-toggle="modal" data-target=".bs-example-modal-lg" class="taright fa fa-shopping-cart"></a>					
							<?php }?>						
						</label> 					
					</div>  			
				</div>	       
				<?php } }else{ echo"No product Found!!";}?>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-0">			
				<div class="fixedright">				
					<div id="adverti" class="">				
						<div class="adverti">				
							<script type="text/javascript" language="javascript"> var aax_size='160x600'; var aax_pubname = 'seab4kha-21'; var aax_src='302'; </script><script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>				
							<div class="clear"></div>					
						</div>
					</div>		
				</div>	
			</div>			
		</div>	
		<div class="compare_product comp_btn_fixed" id="compare">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel-default comepare_bgc">
						<div class="panel-body">						
							<form role="form" class="form-horizontal" onsubmit="return submit_compare()" method="post" action="<?=base_url();?>Landingpage/compare">	
								<div class="compeyarhidden">
									<div class="col-md-2 col-sm-2 col-xs-2"></div>
									<div class="col-sm-2" id="productName"></div>
								</div>
								<div class="col-md-2">
									<div class="form-group">										
										<button type="submit" class="btn btn-success btn-single fixedright" style=" ">Compare</button>								
									</div>									
								</div>								
								<div class="form-group-separator"></div>								
							</form>							
						</div>						
					</div>			
				</div>		
			</div>	
		</div>
	</div>
</div>
<div class="clear"></div>
<?php if(!empty($categorykey) && !empty($action) && ($action =='p')) { ?>		
<script>				
	$(document).ready(function () {	
		var parent = $('.'+'<?=$categorykey ; ?>').parent().parent().parent().attr('id');	   					
		if(parent == null){						
			var parent = $('.'+'<?=$categorykey ; ?>').parent().attr('id');		 					
		}						
		var theHtml = $('#'+parent).eq(0).html();						
		$(".refinesearch").html(theHtml);		 
	});			
</script> 
<?php } else { ?>
<script>				
	$(document).ready(function () {				
		var parent = $('.adverti').parent().attr('id');			   					
		if(parent == null){						
			var parent = $('.'+'<?=$categorykey ; ?>').parent().attr('id');			 					
		}						
		var theHtml = $('#'+parent).eq(0).html();						
		$(".refinesearch").html(theHtml);		 
	});			
</script>  
<?php } ?>