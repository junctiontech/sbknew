<div class="page-container center">
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
		<center>	
			<div class="page-loading-overlay">			
				<div class="loader-2"><img src="<?=base_url();?>frontend/images/search-animated-icon.gif" style="width:200px;height:200px"></div>
			</div>			
		</center>		
		<div class="compare_product comp_btn_fixed" id="compare">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel-default comepare_bgc">
						<div class="panel-body">
							<form role="form" class="form-horizontal" onsubmit="return submit_compare()" method="post" action="<?=base_url();?>Landingpage/compare">              
								<div class="compeyarhidden">  
									<div class="col-md-2 col-sm-2 col-xs-0"></div>
									<div class="col-sm-2"  id="productName" >
									</div>
								</div>					
								<div class="col-md-2">
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-single" style="margin-top: 170px;">Compare</button>						
									</div>								
								</div>	
								<div class="form-group-separator"></div>
							</form>	
						</div>
					</div>		
				</div>		
			</div>	
		</div>
		<div class="row">	
			<!-- FlexSlider -->
			<div class="col-md-6 col-sm-6 col-xs-12  hidden-xs">
				<section class="slider leftmargin">				
					<div class="flexslider">
						<ul class="slides">	
							<?php //if(!empty($deals)){ foreach($deals as $deal){ 				
							$i=''; for($start=0;$start<=15;$start++){ ?>					
							<li id="vcm1950NUgewd<?=$i?>">
								<script src="http://tracking.vcommission.com/aff_ad?campaign_id=1950&aff_id=48478&format=javascript&format=js&divid=vcm1950NUgewd<?=$i?>" type="text/javascript"></script>						
								<noscript><iframe src="http://tracking.vcommission.com/aff_ad?campaign_id=1950&aff_id=48478&format=javascript&format=iframe" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" width="300" height="250"></iframe></noscript>						
							</li>					
							<?php // } } 					
								$i++; } ?>						
						</ul>				 
					</div>	     
				</section> 
				<!-- FlexSlider -->		
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12  hidden-xs">
				<div style="" class="hotel_panal white">     
					<div class="" role="tabpanel" data-example-id="togglable-tabs">       
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">		 
							<li role="presentation" class="active"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab"  aria-expanded="true">Flights</a> </li>        
							<li role="presentation" class=""><a href="<?=base_url();?>Hotel.html" id="home-tab" role="tab"  aria-expanded="false">Hotel</a> </li>        
						</ul>       
						<div id="myTabContent" class="tab-content">        
							<div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
								
								<form method="get" action="<?=base_url();?>Landingpage/Flights.html" class="validate form-horizontal form-label-left">
								
									<div class="white">
										<strong>Search Flights</strong>	
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">									
										<div class="form-group white">										
											<div class="col-md-12">												
												<input type="radio" onclick="myFunction()" checked id="oneway" class="flat" name="radio"/>											
												One Way 										
											</div>									
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="form-group white">
											<div class="col-md-12">	
												<input type="radio" onclick="myFunction()" id="Returntrip"class="flat" name="radio"/>
												Return Trip		
											</div>
										</div>								
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">									
										<div class="form-group">										
											<input type="text" id="from" autocomplete="off" onchange="checkfrom()" list="fromdata" class="form-control" name="from" placeholder="From City or Airport" data-validate="required" data-message-required="please enter City or Airport" >
											<span class="validate-has-error" id="fromrequired" style="color:red;display: inline;"></span> 									
											<datalist id="fromdata"></datalist>									
										</div>							
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="text" id="to" list="todata" onchange="checkto()" autocomplete="off" class="form-control" name="to" placeholder="To City or Airport" data-validate="required" data-message-required="Please enter City or Airport" >
											<span id="torequired" style="color:red" ></span>										
											<datalist id="todata"></datalist>									
										</div>								
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<div class="input-group">
												<input type="text" name="departure" class="form-control datepicker" data-format="yyyy-mm-dd" placeholder="Departure Date" data-validate="required" data-message-required=" ">
												<div class="input-group-addon">											
													<a href="#"><i class="linecons-calendar"></i></a>											
												</div>										
											</div>								
										</div>								
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">									
										<div class="form-group">										
											<div class="input-group">
												<input type="text" name="return" disabled id="return"class="form-control datepicker" data-message-required=" " data-validate="required" data-format="yyyy-mm-dd" placeholder="Return Date">
												<div class="input-group-addon">											
													<a href="#"><i class="linecons-calendar"></i></a>											
												</div>										
											</div>									
										</div>								
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">									
										<div class="form-group">										
											<select data-validate="required" data-message-required="Please Select Class"  class="form-control" name="class">										
												<option value="">Select Class</option>										
												<option value="Economy">Economy</option>										
												<option value="premiumEconomy">Premium Economy</option>										
												<option value="Business">Business</option>										
												<option value="First">First</option>										
											</select> 
										</div>
									</div>								
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<select data-validate="required" data-message-required="Please Select Adults" class="form-control" name="adults">											
												<option value="">Select Adults</option>										
												<option value="1">1</option>										
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>    
										</div>	
									</div>
									<button type="submit" style="width:100%;" class="btn btn-success">Search</button> 
								
								</form>    
								
							</div> 							
							<div role="tabpanel" class="tab-pane fade " id="tab_content1" aria-labelledby="home-tab">				
								<!-- <script src="https://www.hotelscombined.com/SearchBox/343862"></script>-->         
							</div>        
						</div>      
					</div>  
				</div> 
				<div class="clear"></div>
			</div>		
		</div>		
		<div class="col-xs-12 hidden-md" id="display">
			<div class="center">
				<div class="col-xs-6">			
					<a href="#" data-toggle="mobile-menu-horizontal">					
						<div class="landing">	
							<img style="height: 80px; float:right" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product" src="<?=base_url();?>/frontend/images/productblack.png"/><br>											
						</div>
					</a>
				</div>
				<div class="col-xs-6">
					<a href="<?=base_url();?>Landingpage/Flights.html">
						<div class="landing">						
							<img style="height: 80px; float:left" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flight" src="<?=base_url();?>/frontend/images/flightnew.png"/><br>					
						</div>
					</a>
				</div>			
				<div class="col-xs-6">
					<a href="<?=base_url();?>Hotel.html">
						<div class="landing">						
							<img style="height: 80px; float:right" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hotel" src="<?=base_url();?>/frontend/images/hotelnew.png"/><br>											
						</div>
					</a>
				</div>			
				<div class="col-xs-6">
					<a href="<?=base_url();?>Landingpage/Deals.html">
						<div class="landing">							
							<img style="height: 80px; float:left" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deal" src="<?=base_url();?>/frontend/images/deal5.png"/><br>											
						</div>
					</a>
				</div>
				
			</div>
			<div class="col-xs-6">
				<div class="landing ">
					<div onclick="foodbook()">
						<img style="height: 80px;float:right" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Foodbook" src="<?=base_url();?>/frontend/images/foodbook4.png"/><br>						
					</div>
				</div>			
			</div>
			
			<div class="col-xs-6">					
				<a href="<?=base_url();?>Landingpage/BuyingGuide.html">					
					<div class="landing">
						<img style="height: 80px; float:left" class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="Buying Guide" data-original-title="Buying Guide" src="<?=base_url();?>/frontend/images/buying.png"/><br>
					</div>
				</a>
			</div>
		</div>
		<div class="clear"></div>
		<div class="col-md-12 col-sm-12 col-xs-12 hidden-xs" align="center">
			<div class="aboutuslogo">
				<a target="_blank" href="http://www.amazon.in/b/?ie=UTF8&node=5331319031&rw_useCurrentProtocol=1&tag=seab4kha-21">				
					<img src="<?=base_url();?>frontend/images/amazon.jpg"/>	
				</a>
			</div>					
			<div class="aboutuslogo">
				<a target="_blank" href="https://dl.flipkart.com/dl/womens-clothing/ethnic-wear/pr?q=apparel&affid=searchkha&sid=2oq,c1r,3pj">				
					<img src="<?=base_url();?>frontend/images/cb2852.jpg"/>	
				</a>
			</div>				
			<div class="aboutuslogo" >	
				<a target="_blank" href="https://www.snapdeal.com/products/men-apparel-shirts?sort=plrty&utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=101593">		
					<img src="<?=base_url();?>frontend/images/rsz_snapdeal_new.jpg"/>
				</a>
			</div>			 
			<div class="aboutuslogo" >	
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=http%3A//www.ebay.in/">
					<img src="<?=base_url();?>frontend/images/eway-logo-1.png"/>
				</a>
			</div> 
			<div class="aboutuslogo" >
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=http%3A//www.shopclues.com/">
				
					<img src="<?=base_url();?>frontend/images/shopclues_store.png"/>
				</a>
			</div>
			<div class="aboutuslogo" >
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=https%3A//paytm.com/shop">
				<!--<img src="<?=base_url();?>frontend/images/Zomato.png"/>-->				
					<img src="<?=base_url();?>frontend/images/Paytm.png"/>
				</a>
			</div>
			<div class="aboutuslogo">
				<a target="_blank" href="http://www.infibeam.com/Mobiles?trackId=searc">				
					<img src="<?=base_url();?>frontend/images/infibeam.png"/>
				</a>
			</div>
			<div class="aboutuslogo">
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=http%3A//www.limeroad.com">
				
					<img src="<?=base_url();?>frontend/images/limeroad.resized.png"/>
				</a>
			</div>
			<div class="aboutuslogo">
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=http%3A//www.homeshop18.com/">
					<img src="<?=base_url();?>frontend/images/home-shop-18.png"/>
				</a>
			</div>
			<div class="aboutuslogo">
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=http%3A//www.jabong.com/">
					<img src="<?=base_url();?>frontend/images/jabong1.png"/>
				</a>
			</div>
			<div class="aboutuslogo">
				<a target="_blank" href="https://linksredirect.com/?pub_id=13404CL12128&url=https%3A//www.coolwinks.com/">

					<img src="<?=base_url();?>frontend/images/coolwinks_fpezt4.png"/>
				</a>
			</div>
			
			
			
		</div>			
		<div class="clear"></div>
		<div class="hidden-md yourform hidden-xs" style="text-align: left;">
		
			<a href="javascript:;" title="Go to home page">					
							
				<i onclick="backhome()" class="fa fa-home"></i>	
						
			</a>
		</div>
		<div class="content_top hidden-xs yourform">    		
			<div class="heading">    		
				<h3>Search restaurant</h3>    		
			</div> 
			<div class="clear"></div>   	
		</div>		
		<div class="section group hidden-xs yourform">
			<div class="widget_wrap" style="width:100%;height:400px;display:inline-block;">
				<iframe src="https://www.zomato.com/widgets/res_search_widget.php?city_id=26&theme=red&widgetType=custom&sort=popularity" style="position:relative;width:100%;height:100%;" border="0" frameborder="0"></iframe>
			</div>
		<div class="clear"></div>
		</div>		
		<div class="clear"></div>
		<div class="content_top hidden-xs">    	
			<div class="heading">    	
				<h3><?php if(!empty($lsh_data)){ echo isset($lsh_data['lsheading'])?$lsh_data['lsheading']:'';}?></h3>    	
			</div>    	
    		<div class="clear"></div>
		</div>
		<div class="section group hidden-xs">
		   <?php if(!empty($lshproduct)){ $ls=0;foreach($lshproduct as $product){ $ls++;?>
 
				<div class="grid_1_of_4 images_1_of_4 images_1_of4W">
 
			 
				 <a target="_blank" href="<?=base_url();?>Landingpage/Product/p/<?=$product['product_sub_cate']?>/<?=$product['product_id']?>/<?=str_replace(' ', '_',$product['product_title'])?>.html">
 
				<div class="imageheightfix">
					<img src="<?=$product['product_image']?>"  alt=""  />
				</div>

					 <h2><?=$product['product_title']?></h2>
					
					 <p><span class="price"><?php if(!empty($product['product_lowest_price']) && $product['product_lowest_price'] !=0){?>Rs. <?=number_format($product['product_lowest_price'],2)?><?php }else{ echo"coming soon"; }?></span></p></a>
			<div class="checkbox">
            <?php if($product['can_compare']){?><label>
              <input type="checkbox" value="<?=$product['product_id']?>" class="chkcount" name="productid" onchange="compare_product(this.value)">
			Compare </label><?php } ?>
				<label class="wishlist"> 
					<?php if(!empty($userinfos)){ if(in_array($product['product_id'],$whislistproduct)==false){ ?>
					  <a href="<?=base_url();?>User/AddToWishList/<?=$product['product_id']?>.html" class="fa fa-shopping-cart"></a>
					  <?php } }else{ ?>
					  <a href="<?=base_url();?>Login.html?return=true" class="fa fa-shopping-cart"></a>
					  <?php }?> </label>
					</div>
			</div>
				
		  <?php if($ls==$lsh_data['ls']){break;} } }else{ echo"No product Found!!";}?>
		</div>
		<div class="clear"></div>
		<div class="content_top hidden-xs">    		
			<div class="heading">    		
				<h3><?php if(!empty($feature_data)){ echo isset($feature_data['fsheading'])?$feature_data['fsheading']:'';}?></h3>    	
			</div>
			<div class="clear"></div>    	
		</div>	     
		<div class="section group hidden-xs">		  
			<?php if(!empty($featureproduct)){ $fs=0; foreach($featureproduct as $product){ $fs++;?>
 
				<div class="grid_1_of_4 images_1_of_4 images_1_of4W">
 
				<a target="_blank" href="<?=base_url();?>Landingpage/Product/p/<?=$product['product_sub_cate']?>/<?=$product['product_id']?>/<?=str_replace(' ', '_',$product['product_title'])?>.html">
  
					<div class="imageheightfix">
					 <img src="<?=$product['product_image']?>"  alt=""  />
					</div>

					 <h2><?=$product['product_title']?></h2>
					
		   <p><span class="price"><?php if(!empty($product['product_lowest_price']) && $product['product_lowest_price'] !=0){?>Rs. <?=number_format($product['product_lowest_price'],2)?><?php }else{ echo"coming soon"; }?></span></p></a>
				<div class="checkbox">
            <?php if($product['can_compare']){?><label>
              <input type="checkbox" value="<?=$product['product_id']?>" class="chkcount" name="productid" onchange="compare_product(this.value)">
			Compare </label><?php } ?>
								  <label class="wishlist"> 
					<?php if(!empty($userinfos)){ if(in_array($product['product_id'],$whislistproduct)==false){ ?>
					  <a href="<?=base_url();?>User/AddToWishList/<?=$product['product_id']?>.html" class="fa fa-shopping-cart"></a>
					  <?php } }else{ ?>
					  <a href="<?=base_url();?>Login.html?return=true" class="fa fa-shopping-cart"></a>
					  <?php }?></label>
          </div>
			  </div>
				
		  <?php if($fs==$feature_data['fs']){break;} } }else{ echo"No product Found!!";}?>	
		</div>		
		
		<!---------------------------------- ads start---------------------------- 
		
		<div class="hidden-xs">	
			<div class="col-md-6">
			
				<div data-WRID="WRID-147331145382894405" data-widgetType="staticBanner" data-responsive="yes" data-class="affiliateAdsByFlipkart" height="90" width="700px">
				</div>
				
				<script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
			</div>
		
			<div class="col-md-6">
			
				<div data-SDID="1380368916"  data-identifier="SnapdealAffiliateAds" data-height="90"  data-width="600" ></div>
				<script async id="snap_zxcvbnhg" src="https://affiliate-ads.snapdeal.com/affiliate/js/snapdealAffiliate.js"></script>
			
			</div>
		</div>		
		<!--------------------------------- ads end------------------------------>
		<div class="clear"></div>
		<div class="content_top hidden-xs">
			<div class="heading">
				<h3><?php if(!empty($new_data)){ echo isset($new_data['nsheading'])?$new_data['nsheading']:'';}?></h3>
			</div>
			<div class="clear"></div>    	
		</div>		
		<div class="section group hidden-xs">		 
			<?php if(!empty($newproduct)){ $ns=0; foreach($newproduct as $product){ $ns++;?>
 
				<div class="grid_1_of_4 images_1_of_4 images_1_of4W">
				<a target="_blank" href="<?=base_url();?>Landingpage/Product/p/<?=$product['product_sub_cate']?>/<?=$product['product_id']?>/<?=str_replace(' ', '_',$product['product_title'])?>.html">
 
						<div class="imageheightfix">
					 <img src="<?=$product['product_image']?>"  alt="" />
					</div>
					 <h2><?=$product['product_title']?></h2>
					
					 <p><span class="price"><?php if(!empty($product['product_lowest_price']) && $product['product_lowest_price'] !=0){?>Rs. <?=number_format($product['product_lowest_price'],2)?><?php }else{ echo"coming soon"; }?></span></p></a>
				<div class="checkbox">
            <?php if($product['can_compare']){?><label>
              <input type="checkbox" value="<?=$product['product_id']?>" class="chkcount" name="productid" onchange="compare_product(this.value)">
              Compare</label>
			<?php } ?>
				<label class="wishlist"> 					
					<?php if(!empty($userinfos)){ if(in_array($product['product_id'],$whislistproduct)==false){ ?>
					  <a href="<?=base_url();?>User/AddToWishList/<?=$product['product_id']?>.html" class="fa fa-shopping-cart"></a>
					  <?php } }else{ ?>
					  <a href="<?=base_url();?>Login.html?return=true" class="fa fa-shopping-cart"></a>
					  <?php }?>
					</label>
				    </div>
				</div>
				
		  <?php if($ns==$new_data['ns']){break;} } }else{ echo"No product Found!!";}?>			
		</div>	
		<!-------------------------------------ads start --------------------------- 
		<div class="hidden-xs">		
			<div class="col-md-6">
			
				<script type="text/javascript" language="javascript"> var aax_size='728x90'; var aax_pubname = 'seab4kha-21'; var aax_src='302'; </script>
				<script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>	
			</div>
			
			<div class="col-md-6">

				<iframe frameborder=0 src="http://www.infibeam.com/Widget_loadTabWidget.action?site=searc&subTrackId=&parWidth=728&parHeight=90&widgetId=21" align="center" height="90px" width="100%" style="border:none"></iframe>
			
			</div>
		
		</div>
		
		<!------------------------------------- ads end ------------------------------------------>
	</div>
</div>
<div class="clear"></div>
<script>           
	$(document).ready(function () {             
		$(".select2_single").select2({            
			placeholder: "Select a state",            
			allowClear: true
                });
                $(".select3_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
<script>
function getplaceID(placekey)
{ 
	var placekey =placekey;
	if(placekey !=='')
	{
		$.ajax({
		type: "POST",
		url: base_url+"Hotel/getplaceID",
		data:{placekey:placekey},
		cache: false,
		success: function(html)
		{ 
		$("#placeID").empty().append(html);
		
		}
		});
	}
	return false;  	  
}		
		$(document).ready(function(){
	  
				$(document).on('keyup', '.select2-input', function() {
					
				getplaceID(this.value);
				});
		});
    </script>	
<script>
function fromID(placekey)
		{ 
			var placekey =placekey;
			if(placekey !=='')
			{
				$.ajax({
				type: "POST",
				url: base_url+"Flights/getplaceID",
				data:{placekey:placekey},
				cache: false,
				success: function(html)
				{ 
					 $("#fromdata").html(html);
					
				}
				});
			}
			return false;  	  
		}

		function toID(placekey)
		{ 
			var placekey =placekey;
			if(placekey !=='')
			{
				$.ajax({
				type: "POST",
				url: base_url+"Flights/getplaceID",
				data:{placekey:placekey},
				cache: false,
				success: function(html)
				{ 
				$("#todata").html(html);
				}
				});
			}
			return false;  	  
		}
		
		$(document).ready(function(){
	  
				$(document).on('keyup', '#from', function() {
				fromID(this.value);
				});
				
				$(document).on('keyup', '#to', function() {
				toID(this.value);
				});
		 })
		function myFunction() {		
			if(document.getElementById('Returntrip').checked) {    
				document.getElementById("return").disabled = false;  
			}else if(document.getElementById('oneway').checked) {   
				document.getElementById("return").disabled = true;   
			}		
		}
		
		
		function checkfrom(){
			var val=$("#from").val();

			var obj=$("#fromdata").find("option[value='"+val+"']")

			if(obj !=null && obj.length>0){
				$("#fromrequired").html('');
			return true; 
			}else{
			$("#from").val('');
			  document.getElementById('fromrequired').setAttribute('class',' required') ;
			  alert('Please select a valid code from list');
			   //$("#fromrequired").html('Please select a valid code from list');
			return false;
			}
			}
			
			function checkto(){
			var val=$("#to").val();

			var obj=$("#todata").find("option[value='"+val+"']")

			if(obj !=null && obj.length>0){
				$("#torequired").html('');
			return true;
			}else{
			$("#to").val('');
			document.getElementById('torequired').setAttribute('class',' required') ;
			alert('Please select a valid code from list');
			//$("#torequired").html('Please select a valid code from list');
			return false;
			}
			}
  </script>
<script>
	function foodbook(){		
		 $("#display").addClass("hidden-xs");		
		 $(".yourform").removeClass("hidden-xs");		
		
	}
	function backhome(){
		
		 $("#display").removeClass("hidden-xs");		
		 $(".yourform").addClass("hidden-xs");
		
		
	}
</script>