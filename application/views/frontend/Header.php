<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Searchb4kharch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/fonts/linecons/css/linecons.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-core.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-forms.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-components.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/xenon-skins.css">
		<link rel="stylesheet" href="<?=base_url();?>frontend/css/custom.css">
		<link rel="shortcut icon" href="<?=base_url();?>frontend/images/SEARCHB4KHARCH(2).png">	
		<script src="<?=base_url();?>frontend/js/jquery-1.11.1.min.js"></script>
	</head>
	<body id="body" onload="bodyload(this.id);" class="page-body" itemscope itemtype="http://schema.org/Offers">	
		<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->			
			<div class="navbar-inner">			
				<div class="nav navbar-mobile">				
					<div class="mobile-menu-toggle">					
						<a href="#"class="login" data-toggle="user-info-menu-horizontal">						
							<img src="<?=base_url();?>frontend/images/login1.png">						 					
						</a>						
						<a href="#" class="login"  data-toggle="mobile-menu-horizontal">					
							<img src="<?=base_url();?>frontend/images/categories.png">				
						</a>				
					</div>	
				</div>
				<div class="navbar-mobile-clear"></div>	
				<!-- main menu -->	
				<ul class="navbar-nav nav nav-userinfo  hidden-xs">
					<li>					
						<a href="<?=base_url();?>" title="Go to home page">					
							<i  class="fa fa-home"></i>	
						</a>
					</li>
					<li class="middle-align">
						<?php if(!empty($userinfos)) { ?>
						<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="fa fa-bell-o"></a>
						<?php } else { ?>
						<a href="<?=base_url();?>Login.html" class="fa fa-bell-o taright" data-toggle="modal" data-target=".bs-example-modal-lg"></a>						
						<?php } ?>
					</li>				
					<li>					
						<a href="javascript:;" title="You are searcheela no">					
							<span class="title">You are Searcheela# <div class="counter"><script type="text/javascript" src="http://widget.supercounters.com/hit.js"></script><script type="text/javascript">sc_hit(1297026,8,6);</script><br><noscript><a href="http://www.searchb4kharch.com">searchb4kharch</a></noscript></div>
<!-- <span><img style="max-width: 37%;line-height: 20px;vertical-align: middle;"border="0" src="http://cc.amazingcounters.com/counter.php?i=3204024&c=9612385" alt="searchb4kharch.com"></span>--></span>					
						</a>
					</li>
					<li>
						<?php if(!empty($userinfos)){ ?>				
						<a class="notification-icon notification-icon-messages" href="<?=base_url();?>User/Mywishlist.html" title="View my shopping cart" rel="nofollow">					
							<i class="fa-shopping-cart"></i>					
							<span class="badge badge-purple"><?=isset($whislist)?$whislist:'0'?></span>	
						</a>				
						<?php }else{ ?>					
						<a href="<?=base_url();?>Login.html" title="View my shopping cart" rel="nofollow">					
							<span class="fa fa-shopping-cart white"></span>	
						</a>
						<?php } ?>
					</li>	
				</ul>	
				<ul class="nav nav-userinfo white navbar-right">				
					<li>				
						<a href="javascript:;" title="Download our android app">					
							<i class="android"><img src="<?=base_url();?>frontend/images/sprite2.png"></i>				
							<!--	<span class="badge badge-green">15</span>-->				
						</a>
					</li>
					<?php if(!empty($userinfos)) { ?>	
					<li class=" user-profile">					
						<a href="javascript:;" title="Your profile image">					
							<?php if (!empty($userinfos)) { $result=$this->Landingpage_model->userinfo($userinfos['userID']);
						if (!empty($result[0]->userProfileImage)) { ?>
							<img src="<?=base_url();?>./uploads/images/userProfileImage/<?=isset($result[0]->userProfileImage)?$result[0]->userProfileImage:''?>" alt=" " class="img-circle img-inline userpic-32" width="28" />						
							<?php  } else { ?>						
							<img src="<?=base_url();?>frontend/images/user-1.png" alt=" " class="img-circle img-inline userpic-32" width="28" />						
							<?php } } ?>					
						</a>				
						<?php } ?>				
					<li>					
						<?php if(!empty($userinfos)){ ?>					
						<a href="<?=base_url();?>User/Dashboard.html" title="Go to dashboard">						
							<span class="">Hi <?=isset($userinfos['userFirstName'])?$userinfos['userFirstName']:''?></span>					
							<i class="fa-link-ext"></i>				
						</a>				
						<?php }else{ ?>					
						<a href="<?=base_url();?>Login.html" class="taright" data-toggle="modal" data-target=".bs-example-modal-lg" title="Login to your account">					
							<span class="">Login</span>					
							<i class="fa-link-ext"></i>					
						</a>					
						<?php } ?>				
					</li> 				
					<?php if(!empty($userinfos)){ ?>				
					<li>					
						<a href="<?=base_url();?>Login/Logout.html" title="Logout">					
							<span class="">Logout</span>					
							<i class="fa-link-ext"></i>					
						</a>				
					</li>				
					<?php } ?> 		
				</ul>			
				<div class="clear"></div>			
				<div class="row">				
					<div class="col-md-3 col-sm-4 col-xs-3">				
						<div class=" ">					
							<a href="<?=base_url();?>"><img class="logo1" src="<?=base_url();?>frontend/images/pngtransparent (1).png" alt="" /></a>				
						</div>				
					</div>				
					<?php 
					$cat='
{"Socks":"socks-men","Belts":"belts-accessories-men","Ties & Cufflinks":"ties-cufflinks-accessories-men","Watches":"watches-men","Sunglasses":"sunglasses-kids","Mouse":"computer-mouse","Speakers":"computer-speaker","Keyboards":"computer-keyboard","Webcams":"computer-webcam","Laptop Batteries":"computer-laptop-battery","Laptop Chargers & Adapters":"computer-laptop-chargers","Cooling Pads":"computer-cooling-pads-and-stands","Monitors":"computer-monitor","Laptop Docking Stations":"laptop-docking-stations","Laser Pointers":"laser-pointers","Microphones":"microphones","Laptop Screen Protectors":"portable-computer-screen-filters","Presentation Remotes":"presentation-remotes","Touch Pads":"touch-pads","Infant Play Gyms":"baby-gym-kids","Blocks & Stacking Games":"blocks-kids","Dolls & Dollhouses":"dolls-baby-kids","Pull Along Toys":"pull-along-toys-kids","Frocks":"frocks-kids","Blankets, Quilts & Wraps":"blankets-quilts-kids","Grips":"grips","Raquets":"raquets","Shuttles":"shuttles","Strings":"strings","Wallets":"wallets-women","Handbags":"handbag-bags-women","Basketball Boards":"basketball-boards","Basketballs":"basketballs","Lotions, Oils & Powders":"lotions-oils-and-powders","Soaps, Shampoo & Body Wash":"soaps-shampoo-and-body-wash","T-Shirts":"tshirts-clothing-men","Jeans & Trousers":"jeans-trousers-boys-clothing-kids","Ethnic Wear":"ethnicwear-girls-clothing-kids","Casual Shoes":"casual-shoes-men","Sandals":"sandals-casual-shoes-women","Camera Flashes":"flashes","Camera Remote Controls":"camera-remote-controls","Rechargeable Batteries":"rechargeable-batteries","Battery Chargers":"battery-chargers","Viewfinder Extenders":"viewfinder-extenders","Camera and Camcorder batteries":"camera-and-camcorder-batteries","Camera Screen Protectors":"camera-screen-protectors","Tripods":"tripod","Digital Cameras":"digital-camera","Digital SLR Cameras":"digital-slr-camera","Camcorders":"camcorder","Digital Photo Frames":"digital-photo-frames","Binoculars":"binoculars","Surveillance Cameras":"surveillance-cameras","Car Chargers":"car-chargers","Car Kits":"car-kits","Car Cradles & Mounts":"car-cradles","GPS Navigation Devices":"gps-navigation-devices","Casual Shirts":"casual-shirts-clothing-men","Formal Shirts":"formal-shirts-clothing-men","Jeans":"jeans-bottoms-clothing-women","Pants & Trousers":"trousers-bottoms-clothing-men","Shorts & 3\/4ths":"shorts-3-4th-bottoms-clothing-men","Shirts,Tops & Tees":"tops-clothing-women","Dresses":"dress-clothing-women","Trousers":"trousers-bottoms-clothing-women","Leggings":"leggings-women","Skirts":"skirts-bottoms-clothing-women","Shrugs & Jackets":"shrugs-and-jackets-clothing-women","Maternity":"maternity-clothing-women","Sportswear":"sportswear-women","Cricket Balls":"cricket-balls","Cricket Bats":"cricket-bats","Cricket Gloves":"cricket-gloves","Cricket Guards":"cricket-guards","Cricket Helmets":"cricket-helmets","Cricket Kit Bags":"cricket-kit-bags","Cricket Sets":"cricket-sets","Bicycle Accessories":"bicycle-accessories","Bicycles":"bicycles","Clocks":"clocks-decor","Religion & Spirituality":"religion-and-spirituality-decor-home-decor","Desktop":"desktop","Graphic Cards":"graphic-cards","Internal Hard Drives":"internal-hard-disk","Motherboards":"motherboards","Power Supply Unit":"smps-power-supplies","Processor Fans & Cooling":"processor-fans","Processors":"processors","RAM":"ram","Sound Cards":"sound-cards","TV Tuners":"tv-tuners","Computer Cabinets":"computer-cabinets","Cloth Diapers":"cloth-diapers","Disposable Diapers":"disposable-diapers","Diaper Creams":"diaper-creams","Wipes":"wipes","Potty Training & Step Stools":"potty-training-kids","Kurtas & Kurtis":"kurta-ethnic-women","Sarees":"sarees-ethnic-women","Suit Sets":"suits-ethnic-women","Salwars & Churidars":"salwars-churidars-women","Dress Materials":"dressmaterial-ethnic-women","Cross & Elliptical trainers":"cross-and-elliptical-trainers","Dumbbells":"dumbbells","Weighing Scales":"weighing-scales","Eyeglasses":"eyeglasses-men","Eye Liner":"eye-liner","Eye Shadow":"eye-shadows","Kajal":"kajal","BB & CC Creams":"bb-and-cc-cream","Blush":"blush-and-bronzer","Bronzer":"bronzer","Compact Powder ":"compact","Makeup Remover":"eye-make-up-remover","Concealer":"face-concealer","Foundation ":"foundation-and-compacts","Primer":"primer","Earrings":"earrings-jewellery-women","Necklace & Sets":"necklace-jewellery-women","Adapter Rings":"adapter-rings","Shoe Mounts":"shoe-mounts","Diffusers & Modifiers":"diffusers-and-modifiers","Football Accessories":"football-accessories","Football Gloves":"football-gloves","Football Guards":"football-guards","Footballs":"footballs","Body Mist":"body-mist","Men Deos":"men-deos","Men Perfumes":"men-perfumes","Women Deos":"women-deos","Women Perfumes":"women-perfumes","Bean Bags":"bean-seatings-furniture-home","Gaming Console":"gaming-console","Bouncers, Rockers & Swings":"rockers-kids","Strollers, Prams & Car Seats":"strollers-kids","High Chairs & Booster Seats":"high-chairs-kids","Bikes & Ride Ons":"ride-ons-kids","Dresses & Frocks":"dresses-frocks-girls-clothing-kids","Tops & T-Shirts":"tops-tunics-girls-clothing-kids","Floaters & Flip Flops":"floaters-girls-kids","Power Tools":"power-tools","Hand Tools":"hand-tools","Measuring Tools":"measuring-tools","Tool Accessories":"tool-accessories","Headphones":"headphones","Wired Headsets":"headsets","Bluetooth Headsets":"bluetooth-headsets","MicroSD Memory Cards":"memory-cards","SD Memory Cards":"sd-memory-cards","BP Monitor":"bp-monitors","Digital Thermometer":"digital-thermometers","Nebulizer":"nebulizers","Massager":"massagers","Pulse Oximeter":"pulse-oximeters","Heating Pad":"heat-therapy","Glucometer":"blood-glucose-monitors","Body Fat Analyzer":"body-fat-monitors","Pedometer":"pedometer-step-counters","Air Coolers":"air-coolers","Fans":"fans","Geysers":"geysers","Immersion Rods":"immersion-rods","Room Heaters":"room-heaters","Lighting & Lamps":"lighting","Irons":"irons","Washing Machines":"washing-machines","Refrigerators":"refrigerators","Emergency Lights":"emergency-light","Air Conditioners":"air-conditioner","Vacuum Cleaners":"vacuum-cleaners","Inverters & Batteries":"inverters-batteries","Dishwashers":"dishwashers","Spike Surge Protectors":"spike-surge-protectors","UPS":"power-supplies","Voltage Stabilizers":"voltage-stabilizers","Bedsheets & Sets":"bedsheets-bed-linen-bed-bath-home-decor","Curtains & Cushions":"curtains-cushions-decor","Carpets, Rugs & Mats":"carpets-rugs-decor","Towels":"towels-bath-essentials-bed-bath-home-decor","Quilts & Blankets":"quilts-blankets","Briefs":"briefs-men","Boxers":"boxers-men","Night Suits":"nightsuits-men","MP3 Players":"ipod-mp3","Home Theaters":"home-theaters","Video & DVD Players":"video-players","Projectors":"projectors","Smart TV Boxes":"smart-tv","Voice Recorders":"voice-recorders","AV Receivers":"av-receivers","Sound Amplifiers":"sound-amplifiers","Boom Boxes":"boom-boxes","FM Radio":"fm-radio","Chains":"chains-men","Trains, Cars and Models":"trains-kids","Construction & Blocks":"construction-blocks-kids","Puzzles":"puzzles-kids","Action games & figures":"action-games-kids","Board Games":"board-games-kids","Dining & Serving":"dining-serving","Bottles & Sippers":"bottles-storage-kitchen-home","Containers & Jars":"containers-storage-kitchen-home","Kitchen Tools":"tools-cutlery-kitchen-home","Lunch Boxes":"lunch-boxes-storage-kitchen-home","Mixer Grinder Juicers":"mixers","Electric Kettles":"electric-kettles","Induction Cook Tops":"induction-cooktops","Choppers & Blenders":"choppers-blenders","Electric (Rice) Cookers":"electric-cookers","Pop Up Toasters":"pop-up-toasters","Coffee Makers":"coffee-makers","Microwave Ovens":"microwave-oven","Oven Toaster Grill (OTG)":"otg","Sandwich Makers":"sandwich-makers","Water Purifiers":"water-purifiers","Food Processors":"food-processors","Air Fryers":"air-fryers","Laptops":"laptops","Lawn Tennis Balls":"lawn-tennis-balls","Lawn Tennis Grips":"lawn-tennis-grips","Lawn Tennis Kit Bags":"lawn-tennis-kit-bags","Lawn Tennis Raquets":"lawn-tennis-raquets","Lawn Tennis Strings":"lawn-tennis-strings","Lens Filters":"filters","Lens Cleaners":"lens-cleaner","Lens Caps":"lens-cap","Camera Lenses":"lenses","Lens Hoods":"lens-hoods","Adapters & Converters":"adapters-and-converters","Extension Tubes":"extension-tubes","LED Lights":"led-lights","Bras":"bras-lingerie-clothing-women","Lip Balms ":"lip-balms","Lip Gloss":"lip-gloss","Lip Liners":"lip-liners","Lipstick":"lipstick","Baby Food":"formula-and-food-supplements","Bottle Cleaning & Sterilisation":"sterlisation-kids","After Shaves":"after-shaves","Cartridges & Blades":"cartridges-and-blades","Razors":"razors","Shaving Brushes":"shaving-brushes","Shaving Foam, Cream & Gels":"shaving-foam-cream-and-gel","Mobile Battery":"batteries","Mobile Chargers":"chargers","Cables":"cables","Power Banks":"power-banks","Smart Watches":"smart-watches","Smart Bands":"fitness-tracker","Wireless Speakers":"wireless-speakers","Mobile Phones":"mobile","Tablets":"tablet","Landline Phones":"landline-phones","Nail Effects":"nail-effects","Nail Polish":"nail-polish","Nail Polish Remover":"nail-polish-remover","WiFi Routers":"computer-router","Access Points":"computer-access-points","Switches":"computer-switches","Data Cards":"computer-data-cards","Wireless USB Adapters":"computer-wireless-usb-adapters","Network Interface Cards":"computer-network-interface-cards","Antennas & Amplifiers":"antennas-and-amplifiers","Bluetooth Adapters":"bluetooth-adapters","Modems":"modems","Power LAN Adapters":"power-lan-adapters","Print Servers":"print-servers","Repeaters & Extenders":"repeaters-and-extenders","USB Hubs":"usb-hubs","Billiards":"billiards","Boxing":"boxing","Hockey":"hockey","Roller Skates":"roller-skates","Scooters":"scooters","Skateboards":"skateboards","Squash":"squash","Volleyball":"volleyball","Electric Shaver":"shavers","Trimmer":"trimmers","Epilator":"epilators","Hair Dryer":"hair-dryers","Hair Straightener":"hair-straighteners","Hair Curler":"hair-curlers","Electric Toothbrush":"electric-toothbrushes","Hair Styler":"hair-stylers","Single Function Printers":"computer-printer","Scanners":"computer-scanner","Laser Toners":"computer-toners","Inkjet Inks":"computer-inks","Multifunction Printers":"computer-multi-function","Art & Craft":"art-craft-kids","Party Supplies":"party-supplies-kids","Sports Shoes":"sports-shoes-men","Formal Shoes":"formal-shoes-men","Sandals & Floaters":"sandals-shoes-men","Slippers & Flip Flops":"slippers-shoes-women","Heels":"heels-shoes-women","Flats":"flats-shoes-women","Casual Shoes & Sneakers":"sneakers-women","Antivirus and Security Software":"computer-software","Microsoft Office":"computer-office-tools","Microsoft Windows":"computer-operating-system","Pen Drives Price":"computer-pendrive","External Hard Disks Price":"computer-external-hard-disks","External DVD Writers":"computer-external-dvd-writer","Card Readers":"card-reader","External SSD":"external-ssd","Network Attached Storage":"network-attached-storage","Table Tennis Kits":"table-tennis-kits","Tables & Accessories":"tables-and-accessories","Monopods":"monopods","Tripod Ball Heads":"tripod-ball-heads","Camera Mounts & Clamps":"camera-mounts-and-clamps","LED & LCD TVs":"tv","Remote Controls":"remote-controls","Sweatshirts":"sweatshirts-winterwear-clothing-men","Coats & Blazers":"coats-winterwear-clothing-men","Winter Jackets":"jackets-winterwear-clothing-women"}';
					$cat=json_decode($cat,true);
					
					?>
					
					<div class="col-md-9 col-sm-8 col-xs-9">						
						<div class="header_top_right">	
							<div class="search_box tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="Hello, search through searchb4kharch android app to earn Rs.10 daily">	
								<form action="<?=base_url();?>Landingpage/Product/Search.html" method="get">
									<!--onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"  -->
									<select class="hederselect" style="" name="c" >	
										<option value="all">All</option>
										<?php  foreach($cat as $key=>$cats){ ?>	
										<option value="<?=$cats?>" <?php if(!empty($searchc)){ if($searchc==$cats){echo"selected";}}?>><?=ucwords($key)?></option>
										<?php } ?>
									</select>
									<input type="text" placeholder="Search.. Shop.. Earn" id="search" list="searchdata" data-validate="required" data-message-required="Please enter more than two characters" autocomplete="off" Value="<?=isset($searchq)?$searchq:''?>" name="q" />	
									<datalist id="searchdata"></datalist>
									<input type="submit" value="SEARCH" />
									
								</form>									
							</div>
							<a class="hidden-xs" href="<?=base_url();?>Landingpage/Deals.html"> <img style="width:12%;margin-top: 10px;" src="<?=base_url();?>frontend/images/best-deals-.png"/> 
						</a></div>	
						<div class="clear"></div>
					</div>	
					
					<div class="clear"></div>
				</div>			
				<ul class="navbar-nav">					
					<li id="ss"><a href="javascript:;">Mobile</a>
						<ul id="mobile" class="fiexdheght">
							<li><a href="javascript:;">Mobile, Tablets & Accessories</a>
								<ul class="sub1">
									<li class="mobile"><a href="<?=base_url();?>Landingpage/Product/p/mobile.html">Mobile Phones</a><li>
									<li class="tablet"><a href="<?=base_url();?>Landingpage/Product/p/tablet.html">Tablets</a><li>
									<li class="landline-phones"><a href="<?=base_url();?>Landingpage/Product/p/landline-phones.html">Landline Phones</a><li>
								</ul>
							</li>							
							<li><a href="javascript:;">Mobile Accessories</a>
								<ul class="sub1">
									<li class="batteries"><a href="<?=base_url();?>Landingpage/Product/p/batteries.html">Mobile Battery</a>
									<li class="chargers"><a href="<?=base_url();?>Landingpage/Product/p/chargers.html">Mobile Chargers</a>
									<li class="cables"><a href="<?=base_url();?>Landingpage/Product/p/cables.html">Cables</a>
									<li class="power-banks"><a href="<?=base_url();?>Landingpage/Product/p/power-banks.html">Power Banks</a>
									<li class="smart-watches"><a href="<?=base_url();?>Landingpage/Product/p/smart-watches.html">Smart Watches</a>
									<li class="fitness-tracker"><a href="<?=base_url();?>Landingpage/Product/p/fitness-tracker.html">Smart Bands</a>
									<li class="wireless-speakers"><a href="<?=base_url();?>Landingpage/Product/p/wireless-speakers.html">Wireless Speakers</a>
								</ul>							
							</li>
							<li><a href="javascript:;">Car Mobile Accessories</a>
								<ul class="sub1">
									<li class="car-chargers"><a href="<?=base_url();?>Landingpage/Product/p/car-chargers.html">Car Chargers</a></li>
									<li class="car-kits"><a href="<?=base_url();?>Landingpage/Product/p/car-kits.html">Car Kits</a></li>
									<li class="car-cradles"><a href="<?=base_url();?>Landingpage/Product/p/car-cradles.html">Car Cradles & Mounts</a></li>
									<li class="gps-navigation-devices"><a href="<?=base_url();?>Landingpage/Product/p/gps-navigation-devices.html">GPS Navigation Devices</a></li>
								
								</ul>
							</li>	
							<li><a href="javascript:;">Headphones & Headsets</a>
								<ul class="sub1">
									<li class="headphones"><a href="<?=base_url();?>Landingpage/Product/p/headphones.html">Headphones</a><li>
									<li class="headsets"><a href="<?=base_url();?>Landingpage/Product/p/headsets.html">Wired Headsets</a><li>
									<li class="bluetooth-headsets"><a href="<?=base_url();?>Landingpage/Product/p/bluetooth-headsets.html">Bluetooth Headsets</a><li>
								</ul>
							</li>							
							<li><a href="javascript:;">Headphones & Memory Cards</a>
								<ul class="sub1">
									<li class="memory-cards"><a href="<?=base_url();?>Landingpage/Product/p/memory-cards.html">MicroSD Memory Cards</a></li>
									<li class="sd-memory-cards"><a href="<?=base_url();?>Landingpage/Product/p/sd-memory-cards.html">SD Memory Cards</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Laptops</a>
						<ul id="laptops" class="fiexdheght">
							<li class="laptops"><a href="<?=base_url();?>Landingpage/Product/p/laptops.html">Laptpos</a></li>
							<li><a href="javascript:;">Accessories</a>							
								<ul class="sub1">
									<li class="computer-laptop-battery"><a href="<?=base_url();?>Landingpage/Product/p/computer-laptop-battery.html">Laptop Batteries</a></li>
									<li class="computer-laptop-battery"><a href="<?=base_url();?>Landingpage/Product/p/computer-laptop-chargers.html">Laptop Chargers & Adapters</a></li>
									<li class="computer-laptop-chargers"><a href="<?=base_url();?>Landingpage/Product/p/laptop-docking-stations.html">Laptop Docking Stations</a></li>
									<li class="laptop-docking-stations"><a href="<?=base_url();?>Landingpage/Product/p/portable-computer-screen-filters.html">Laptop Screen Protectors</a></li>				
									<li class="portable-computer-screen-filters"><a href="<?=base_url();?>Landingpage/Product/p/presentation-remotes.html">Presentation Remotes</a></li>									
									<li class="touch-pads"><a href="<?=base_url();?>Landingpage/Product/p/touch-pads.html">Touch Pads</a></li>
									<li class="computer-keyboard"><a href="<?=base_url();?>Landingpage/Product/p/computer-keyboard.html">Keyboards</a></li>
									<li class="computer-mouse"><a href="<?=base_url();?>Landingpage/Product/p/computer-mouse.html">Mouse</a></li>
									<li class="computer-speaker"><a href="<?=base_url();?>Landingpage/Product/p/computer-speaker.html">Speakers</a></li>
									<li class="computer-webcam"><a href="<?=base_url();?>Landingpage/Product/p/computer-webcam.html">Webcams</a></li>									
									<li class="computer-cooling-pads-and-stands"><a href="<?=base_url();?>Landingpage/Product/p/computer-cooling-pads-and-stands.html">Cooling Pads</a></li>								
									<li class="computer-monitor"><a href="<?=base_url();?>Landingpage/Product/p/computer-monitor.html">Monitors</a></li>									
									<li class="microphones"><a href="<?=base_url();?>Landingpage/Product/p/microphones.html">Microphones</a></li>									
								</ul>
							</li>						
						</ul>
					</li>
					<li><a href="javascript:;">Desktop & Computer</a>
						<ul id="Desktop" class="fiexdheght">
							<li><a href="javascript:;">Desktop & Components</a>							
								<ul>
									<li class="desktop"><a href="<?=base_url();?>Landingpage/Product/p/desktop.html">Desktop</a></li>
									<li class="graphic-cards"><a href="<?=base_url();?>Landingpage/Product/p/graphic-cards.html">Graphic Cards</a></li>
									<li class="internal-hard-disk"><a href="<?=base_url();?>Landingpage/Product/p/internal-hard-disk.html">Internal Hard Drives</a></li>
									<li class="motherboards"><a href="<?=base_url();?>Landingpage/Product/p/motherboards.html">Motherboards</a></li>
									<li class="smps-power-supplies"><a href="<?=base_url();?>Landingpage/Product/p/smps-power-supplies.html">Power Supply Unit</a></li>
									<li class="processor-fans"><a href="<?=base_url();?>Landingpage/Product/p/processor-fans.html">Processor Fans & Cooling</a></li>
									<li class="processors"><a href="<?=base_url();?>Landingpage/Product/p/processors.html">Processors</a></li>
									<li class="ram"><a href="<?=base_url();?>Landingpage/Product/p/ram.html">RAM</a></li>
									<li class="sound-cards"><a href="<?=base_url();?>Landingpage/Product/p/sound-cards.html">Sound Cards</a></li>
									<li class="tv-tuners"><a href="<?=base_url();?>Landingpage/Product/p/tv-tuners.html">TV Tuners</a></li>
									<li class="computer-cabinets"><a href="<?=base_url();?>Landingpage/Product/p/computer-cabinets.html">Computer Cabinets</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Networking</a>
								<ul>
									<li class="computer-access-points"><a href="<?=base_url();?>Landingpage/Product/p/computer-access-points.html">Access Points</a><li>
									<li class="computer-switches"><a href="<?=base_url();?>Landingpage/Product/p/computer-switches.html">Switches</a><li>
									<li class="computer-data-cards"><a href="<?=base_url();?>Landingpage/Product/p/computer-data-cards.html">Data Cards</a><li>
									<li class="computer-wireless-usb-adapters"><a href="<?=base_url();?>Landingpage/Product/p/computer-wireless-usb-adapters.html">Wireless USB Adapters</a><li>
									<li class="computer-network-interface-cards"><a href="<?=base_url();?>Landingpage/Product/p/computer-network-interface-cards.html">Network Interface Cards</a><li>
									<li class="antennas-and-amplifiers"><a href="<?=base_url();?>Landingpage/Product/p/antennas-and-amplifiers.html">Antennas & Amplifiers</a><li>
									<li class="bluetooth-adapters"><a href="<?=base_url();?>Landingpage/Product/p/bluetooth-adapters.html">Bluetooth Adapters</a><li>
									<li class="modems"><a href="<?=base_url();?>Landingpage/Product/p/modems.html">Modems</a><li>
									<li class="power-lan-adapters"><a href="<?=base_url();?>Landingpage/Product/p/power-lan-adapters.html">Power LAN Adapters</a><li>
									<li class="print-servers"><a href="<?=base_url();?>Landingpage/Product/p/print-servers.html">Print Servers</a><li>
									<li class="repeaters-and-extenders"><a href="<?=base_url();?>Landingpage/Product/p/repeaters-and-extenders.html">Repeaters & Extenders</a><li>
									<li class="usb-hubs"><a href="<?=base_url();?>Landingpage/Product/p/usb-hubs.html">USB Hubs</a><li>
								</ul>
							</li>							
							<li><a href="javascript:;">Printers and Inks</a>
								<ul>
									<li class="laser-pointers"><a href="<?=base_url();?>Landingpage/Product/p/laser-pointers.html">Laser Pointers</a></li>
									<li class="computer-printer"><a href="<?=base_url();?>Landingpage/Product/p/computer-printer.html">Single Function Printers</a></li>
									<li class="computer-scanner"><a href="<?=base_url();?>Landingpage/Product/p/computer-scanner.html">Scanners</a></li>
									<li class="computer-toners"><a href="<?=base_url();?>Landingpage/Product/p/computer-toners.html">Laser Toners</a></li>
									<li class="computer-inks"><a href="<?=base_url();?>Landingpage/Product/p/computer-inks.html">Inkjet Inks</a></li>
									<li class="computer-multi-function"><a href="<?=base_url();?>Landingpage/Product/p/computer-multi-function.html">Multifunction Printers</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Software</a>
								<ul>
									<li class="computer-software"><a href="<?=base_url();?>Landingpage/Product/p/computer-software.html">Antivirus and Security Software</a></li>
									<li class="computer-office-tools"><a href="<?=base_url();?>Landingpage/Product/p/computer-office-tools.html">Microsoft Office</a></li>
									<li class="computer-operating-system"><a href="<?=base_url();?>Landingpage/Product/p/computer-operating-system.html">Microsoft Windows</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Storage and Memory</a>
								<ul>
									<li class="computer-pendrive"><a href="<?=base_url();?>Landingpage/Product/p/computer-pendrive.html">Pen Drives Price</a></li>
									<li class="computer-external-hard-disks"><a href="<?=base_url();?>Landingpage/Product/p/computer-external-hard-disks.html">External Hard Disks Price</a></li>
									<li class="computer-external-dvd-writer"><a href="<?=base_url();?>Landingpage/Product/p/computer-external-dvd-writer.html">External DVD Writers</a></li>
									<li class="card-reader"><a href="<?=base_url();?>Landingpage/Product/p/card-reader.html">Card Readers</a></li>
									<li class="external-ssd"><a href="<?=base_url();?>Landingpage/Product/p/external-ssd.html">External SSD</a></li>
									<li class="network-attached-storage"><a href="<?=base_url();?>Landingpage/Product/p/network-attached-storage.html">Network Attached Storage</a></li>
								</ul>
							</li>													
						</ul>							
					</li>
					<li><a href="javascript:;">TVs</a>
						<ul id="TVs" class="fiexdheght">
							<li class="tv"><a href="<?=base_url();?>Landingpage/Product/p/tv.html">LED & LCD TVs</a></li>							
							<li><a href="javascript:;">TV & Video Accessories</a> 
								<ul>
									<li class="remote-controls"><a href="<?=base_url();?>Landingpage/Product/p/remote-controls.html">Remote Controls</a></li>
								</ul>							
							</li>							
						</ul>
					</li>
					<li><a href="javascript:;">Apparels</a>
						<ul id="Apparels" class="fiexdheght">
							<li><a href="javascript:;">men</a>
								<ul>									
									<li class="casual-shirts-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/casual-shirts-clothing-men.html">Casual Shirts</a></li>
									<li class="tshirts-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/tshirts-clothing-men.html">T-Shirts</a></li>
									<li class="formal-shirts-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/formal-shirts-clothing-men.html">Formal Shirts</a></li>
									<li class="jeans-bottoms-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/jeans-bottoms-clothing-men.html">Jeans</a></li>
									<li class="trousers-bottoms-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/trousers-bottoms-clothing-men.html">Pants & Trousers</a></li>
									<li class="shorts-3-4th-bottoms-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/shorts-3-4th-bottoms-clothing-men.html">Shorts & 3/4ths</a></li>
									<li class="ethnic-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/ethnic-clothing-men.html">Ethnic Wear</a></li>
									<li class="sweatshirts-winterwear-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/sweatshirts-winterwear-clothing-men.html">Sweatshirts</a></li>
									<li class="coats-winterwear-clothing-men"><a href="<?=base_url();?>Landingpage/Product/p/coats-winterwear-clothing-men.html">Coats & Blazers</a></li>
									
								</ul>								
							</li>
							<li><a href="javascript:;">women</a>							
								<ul>
									<li class="tops-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/tops-clothing-women.html">Shirts,Tops & Tees</a></li>
									<li class="dress-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/dress-clothing-women.html">Dresses</a></li>
									<li class="jeans-bottoms-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/jeans-bottoms-clothing-women.html">Jeans</a></li>
									<li class="trousers-bottoms-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/trousers-bottoms-clothing-women.html">Trousers</a></li>
									<li class="leggings-women"><a href="<?=base_url();?>Landingpage/Product/p/leggings-women.html">Leggings</a></li>
									<li class="skirts-bottoms-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/skirts-bottoms-clothing-women.html">Skirts</a></li>
									<li class="shrugs-and-jackets-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/shrugs-and-jackets-clothing-women.html">Shrugs & Jackets</a></li>
									<li class="maternity-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/maternity-clothing-women.html">Maternity</a></li>
									<li class="sportswear-women"><a href="<?=base_url();?>Landingpage/Product/p/sportswear-women.html">Sportswear</a></li>									
									<li class="kurta-ethnic-women"><a href="<?=base_url();?>Landingpage/Product/p/kurta-ethnic-women.html">Kurtas & Kurtis</a></li>						
									<li class="sarees-ethnic-women"><a href="<?=base_url();?>Landingpage/Product/p/sarees-ethnic-women.html">Sarees</a></li>									
									<li class="suits-ethnic-women"><a href="<?=base_url();?>Landingpage/Product/p/suits-ethnic-women.html">Suit Sets</a></li>									
									<li class="salwars-churidars-women"><a href="<?=base_url();?>Landingpage/Product/p/salwars-churidars-women.html">Salwars & Churidars</a></li>				
									<li class="dressmaterial-ethnic-women"><a href="<?=base_url();?>Landingpage/Product/p/dressmaterial-ethnic-women.html">Dress Materials</a></li>					
									<li class="bras-lingerie-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/bras-lingerie-clothing-women.html">Bras</a></li>							
									<li class="jackets-winterwear-clothing-women"><a href="<?=base_url();?>Landingpage/Product/p/jackets-winterwear-clothing-women.html">Winter Jackets</a></li>				
								</ul>						
							</li>							
							<li><a href="javascript:;">kids</a>							
								<ul>	
									<li class="tshirts-boys-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/tshirts-boys-clothing-kids.html">T-Shirts</a></li>
									<li class="jeans-trousers-boys-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/jeans-trousers-boys-clothing-kids.html">Jeans & Trousers</a></li>
									<li class="ethnicwear-boys-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/ethnicwear-boys-clothing-kids.html">Ethnic Wear</a></li>									
								</ul>							
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Home & Furniture</a>
						<ul id="Homefurniture" class="fiexdheght">
							<li><a href="javascript:;">Home & Kitchen Appliances</a>							
								<ul>
									<li class="lighting"><a href="<?=base_url();?>Landingpage/Product/p/lighting.html">Lighting & Lamps</a><li>
									<li class="led-lights"><a href="<?=base_url();?>Landingpage/Product/p/led-lights.html">LED Lights</a><li>
								</ul> 
							</li>							
							<li><a href="javascript:;">Nurserys</a>							
								<ul>
									<li class="blankets-quilts-kids"><a href="<?=base_url();?>Landingpage/Product/p/blankets-quilts-kids.html">Blankets, Quilts & Wraps</a><li>				 
								</ul> 
							</li>							
							<li><a href="javascript:;">Personal Care Products</a>
								<ul>
									<li class="shavers"><a href="<?=base_url();?>Landingpage/Product/p/shavers.html">Electric Shaver</a></li>
									<li class="trimmers"><a href="<?=base_url();?>Landingpage/Product/p/trimmers.html">Trimmer</a></li>
									<li class="epilators"><a href="<?=base_url();?>Landingpage/Product/p/epilators.html">Epilator</a></li>
									<li class="hair-dryers"><a href="<?=base_url();?>Landingpage/Product/p/hair-dryers.html">Hair Dryer</a></li>
									<li class="hair-straighteners"><a href="<?=base_url();?>Landingpage/Product/p/hair-straighteners.html">Hair Straightener</a></li>
									<li class="hair-curlers"><a href="<?=base_url();?>Landingpage/Product/p/hair-curlers.html">Hair Curler</a></li>
									<li class="electric-toothbrushes"><a href="<?=base_url();?>Landingpage/Product/p/electric-toothbrushes.html">Electric Toothbrush</a></li>
									<li class="hair-stylers"><a href="<?=base_url();?>Landingpage/Product/p/hair-stylers.html">Hair Styler</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Decor</a>
								<ul>
									<li class="clocks-decor"><a href="<?=base_url();?>Landingpage/Product/p/clocks-decor.html">Clocks</a></li>
									<li class="religion-and-spirituality-decor-home-decor"><a href="<?=base_url();?>Landingpage/Product/p/religion-and-spirituality-decor-home-decor.html">Religion & Spirituality</a></li>			
								</ul>
							</li>							
							<li><a href="javascript:;">Home Appliances</a>							
								<ul>
									<li class="irons"><a href="<?=base_url();?>Landingpage/Product/p/irons.html">Irons</a><li>
									<li class="washing-machines"><a href="<?=base_url();?>Landingpage/Product/p/washing-machines.html">Washing Machines</a><li>
									<li class="refrigerators"><a href="<?=base_url();?>Landingpage/Product/p/refrigerators.html">Refrigerators</a><li>
									<li class="emergency-light"><a href="<?=base_url();?>Landingpage/Product/p/emergency-light.html">Emergency Lights</a><li>
									<li class="vacuum-cleaners"><a href="<?=base_url();?>Landingpage/Product/p/vacuum-cleaners.html">Vacuum Cleaners</a><li>
									<li class="inverters-batteries"><a href="<?=base_url();?>Landingpage/Product/p/inverters-batteries.html">Inverters & Batteries</a><li>
									<li class="dishwashers"><a href="<?=base_url();?>Landingpage/Product/p/dishwashers.html">Dishwashers</a><li>
									<li class="spike-surge-protectors"><a href="<?=base_url();?>Landingpage/Product/p/spike-surge-protectors.html">Spike Surge Protectors</a><li>
									<li class="spower-supplies"><a href="<?=base_url();?>Landingpage/Product/p/spower-supplies.html">UPS</a><li>
									<li class="voltage-stabilizers"><a href="<?=base_url();?>Landingpage/Product/p/voltage-stabilizers.html">Voltage Stabilizers</a><li>
								</ul> 
							</li>								
							<li><a href="javascript:;">Kitchen & Dining</a>
								<ul>
									<li class="dining-serving"><a href="<?=base_url();?>Landingpage/Product/p/dining-serving.html">Dining & Serving</a></li>
									<li class="bottles-storage-kitchen-home"><a href="<?=base_url();?>Landingpage/Product/p/bottles-storage-kitchen-home.html">Bottles & Sippers</a></li>
									<li class="containers-storage-kitchen-home"><a href="<?=base_url();?>Landingpage/Product/p/containers-storage-kitchen-home.html">Containers & Jars</a></li>
									<li class="tools-cutlery-kitchen-home"><a href="<?=base_url();?>Landingpage/Product/p/tools-cutlery-kitchen-home.html">Kitchen Tools</a></li>
									<li class="lunch-boxes-storage-kitchen-home"><a href="<?=base_url();?>Landingpage/Product/p/lunch-boxes-storage-kitchen-home.html">Lunch Boxes</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Kitchen Appliances</a>
								<ul>
									<li class="mixers"><a href="<?=base_url();?>Landingpage/Product/p/mixers.html">Mixer Grinder Juicers</a></li>
									<li class="electric-kettles"><a href="<?=base_url();?>Landingpage/Product/p/electric-kettles.html">Electric Kettles</a></li>
									<li class="induction-cooktops"><a href="<?=base_url();?>Landingpage/Product/p/induction-cooktops.html">Induction Cook Tops</a></li>
									<li class="choppers-blenders"><a href="<?=base_url();?>Landingpage/Product/p/choppers-blenders.html">Choppers & Blenders</a></li>
									<li class="electric-cookers"><a href="<?=base_url();?>Landingpage/Product/p/electric-cookers.html">Electric (Rice) Cookers</a></li>
									<li class="pop-up-toasters"><a href="<?=base_url();?>Landingpage/Product/p/pop-up-toasters.html">Pop Up Toasters</a></li>
									<li class="coffee-makers"><a href="<?=base_url();?>Landingpage/Product/p/coffee-makers.html">Coffee Makers</a></li>
									<li class="microwave-oven"><a href="<?=base_url();?>Landingpage/Product/p/microwave-oven.html">Microwave Ovens</a></li>
									<li class="otg"><a href="<?=base_url();?>Landingpage/Product/p/otg.html">Oven Toaster Grill (OTG)</a></li>
									<li class="sandwich-makers"><a href="<?=base_url();?>Landingpage/Product/p/sandwich-makers.html">Sandwich Makers</a></li>
									<li class="water-purifiers"><a href="<?=base_url();?>Landingpage/Product/p/water-purifiers.html">Water Purifiers</a></li>
									<li class="food-processors"><a href="<?=base_url();?>Landingpage/Product/p/food-processors.html">Food Processors</a></li>
									<li class="air-fryers"><a href="<?=base_url();?>Landingpage/Product/p/air-fryers.html">Air Fryers</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">iPods, Home Theaters & DVD Players</a>
								<ul>
									<li class="ipod-mp3"><a href="<?=base_url();?>Landingpage/Product/p/ipod-mp3.html">MP3 Players</a></li>
									<li class="home-theaters"><a href="<?=base_url();?>Landingpage/Product/p/home-theaters.html">Home Theaters</a></li>
									<li class="video-players"><a href="<?=base_url();?>Landingpage/Product/p/video-players.html">Video & DVD Players</a></li>
									<li class="projectors"><a href="<?=base_url();?>Landingpage/Product/p/projectors.html">Projectors</a></li>
									<li class="smart-tv"><a href="<?=base_url();?>Landingpage/Product/p/smart-tv.html">Smart TV Boxes</a></li>
									<li class="voice-recorders"><a href="<?=base_url();?>Landingpage/Product/p/voice-recorders.html">Voice Recorders</a></li>
									<li class="av-receivers"><a href="<?=base_url();?>Landingpage/Product/p/av-receivers.html">AV Receivers</a></li>
									<li class="sound-amplifiers"><a href="<?=base_url();?>Landingpage/Product/p/sound-amplifiers.html">Sound Amplifiers</a></li>
									<li class="boom-boxes"><a href="<?=base_url();?>Landingpage/Product/p/boom-boxes.html">Boom Boxes</a></li>
									<li class="fm-radio"><a href="<?=base_url();?>Landingpage/Product/p/fm-radio.html">FM Radio</a></li>									
								</ul>
							</li>							
							<li class="air-conditioner"><a href="<?=base_url();?>Landingpage/Product/p/air-conditioner.html">Air Conditioners</a></li>							
							<li><a href="javascript:;">Home Linen</a>
								<ul>
									<li class="bedsheets-bed-linen-bed-bath-home-decor"><a href="<?=base_url();?>Landingpage/Product/p/bedsheets-bed-linen-bed-bath-home-decor.html">Bedsheets & Sets</a></li>
									<li class="curtains-cushions-decor"><a href="<?=base_url();?>Landingpage/Product/p/curtains-cushions-decor.html">Curtains & Cushions</a></li>
									<li class="carpets-rugs-decor"><a href="<?=base_url();?>Landingpage/Product/p/carpets-rugs-decor.html">Carpets, Rugs & Mats</a></li>
									<li class="towels-bath-essentials-bed-bath-home-decor"><a href="<?=base_url();?>Landingpage/Product/p/towels-bath-essentials-bed-bath-home-decor.html">Towels</a></li>
									<li class="quilts-blankets"><a href="<?=base_url();?>Landingpage/Product/p/quilts-blankets.html">Quilts & Blankets</a></li>
								</ul>
							</li>										
							<li><a href="javascript:;">Furniture</a> 							
								<ul>
									<li class="bean-seatings-furniture-home"><a href="<?=base_url();?>Landingpage/Product/p/bean-seatings-furniture-home.html">Bean Bags</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Hardware Tools</a>
								<ul>
									<li class="power-tools"><a href="<?=base_url();?>Landingpage/Product/p/power-tools.html">Power Tools</a></li>
									<li class="hand-tools"><a href="<?=base_url();?>Landingpage/Product/p/hand-tools.html">Hand Tools</a></li>
									<li class="measuring-tools"><a href="<?=base_url();?>Landingpage/Product/p/measuring-tools.html">Measuring Tools</a></li>
									<li class="tool-accessories"><a href="<?=base_url();?>Landingpage/Product/p/tool-accessories.html">Tool Accessories</a></li>
								</ul>
							</li>							
						</ul>
					</li>
					<li><a href="javascript:;">Health & Fitness</a>
						<ul id="Healthfitness" class="fiexdheght">
							<li><a href="javascript:;">Exercise & Fitness</a>
								<ul>
									<li class="cross-and-elliptical-trainers"><a href="<?=base_url();?>Landingpage/Product/p/cross-and-elliptical-trainers.html">Cross & Elliptical trainers</a></li>
									<li class="dumbbells"><a href="<?=base_url();?>Landingpage/Product/p/dumbbells.html">Dumbbells</a></li>
									<li class="weighing-scales"><a href="<?=base_url();?>Landingpage/Product/p/weighing-scales.html">Weighing Scales</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Health Care Products</a>
								<ul>
									<li class="bp-monitors"><a href="<?=base_url();?>Landingpage/Product/p/bp-monitors.html">BP Monitor</a><li>
									<li class="digital-thermometers"><a href="<?=base_url();?>Landingpage/Product/p/digital-thermometers.html">Digital Thermometer</a><li>
									<li class="nebulizers"><a href="<?=base_url();?>Landingpage/Product/p/nebulizers.html">Nebulizer</a><li>
									<li class="massagers"><a href="<?=base_url();?>Landingpage/Product/p/massagers.html">Massager</a><li>
									<li class="pulse-oximeters"><a href="<?=base_url();?>Landingpage/Product/p/pulse-oximeters.html">Pulse Oximeter</a><li>
									<li class="heat-therapy"><a href="<?=base_url();?>Landingpage/Product/p/heat-therapy.html">Heating Pad</a><li>
									<li class="blood-glucose-monitors"><a href="<?=base_url();?>Landingpage/Product/p/blood-glucose-monitors.html">Glucometer</a><li>
									<li class="body-fat-monitors"><a href="<?=base_url();?>Landingpage/Product/p/body-fat-monitors.html">Body Fat Analyzer</a><li>
									<li class="pedometer-step-counters"><a href="<?=base_url();?>Landingpage/Product/p/pedometer-step-counters.html">Pedometer</a><li>
									<li class="air-coolers"><a href="<?=base_url();?>Landingpage/Product/p/air-coolers.html">Air Coolers</a><li>
									<li class="fans"><a href="<?=base_url();?>Landingpage/Product/p/fans.html">Fans</a><li>
									<li class="geysers"><a href="<?=base_url();?>Landingpage/Product/p/geysers.html">Geysers</a><li>
									<li class="immersion-rods"><a href="<?=base_url();?>Landingpage/Product/p/immersion-rods.html">Immersion Rods</a><li>
									<li class="room-heaters"><a href="<?=base_url();?>Landingpage/Product/p/room-heaters.html">Room Heaters</a><li>
								</ul>
							</li>
						</ul>
					</li>					
					<li><a href="javascript:;">Beauty & Jewellery</a>
						<ul id="Beautyjewellery" class="fiexdheght">
							<li><a href="javascript:;">Eyes</a>							
								<ul>
									<li class="eye-liner"><a href="<?=base_url();?>Landingpage/Product/p/eye-liner.html">Eye Liner</a></li>
									<li class="eye-shadows"><a href="<?=base_url();?>Landingpage/Product/p/eye-shadows.html">Eye Shadow</a></li>
									<li class="kajal"><a href="<?=base_url();?>Landingpage/Product/p/kajal.html">Kajal</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Face</a>							
								<ul>
									<li class="bb-and-cc-cream"><a href="<?=base_url();?>Landingpage/Product/p/bb-and-cc-cream.html">BB & CC Creams</a></li>
									<li class="blush-and-bronzer"><a href="<?=base_url();?>Landingpage/Product/p/blush-and-bronzer.html">Blush</a></li>
									<li class="bronzer"><a href="<?=base_url();?>Landingpage/Product/p/bronzer.html">Bronzer</a></li>
									<li class="compact"><a href="<?=base_url();?>Landingpage/Product/p/compact.html">Compact Powder</a></li>
									<li class="eye-make-up-remover"><a href="<?=base_url();?>Landingpage/Product/p/eye-make-up-remover.html">Makeup Remover</a></li>
									<li class="face-concealer"><a href="<?=base_url();?>Landingpage/Product/p/face-concealer.html">Concealer</a></li>
									<li class="foundation-and-compacts"><a href="<?=base_url();?>Landingpage/Product/p/foundation-and-compacts.html">Foundation</a></li>
									<li class="primer"><a href="<?=base_url();?>Landingpage/Product/p/primer.html">Primer</a></li>
								</ul>							
							</li>							
							<li><a href="javascript:;">Fancy Jewellery</a>
								<ul>
									<li class="earrings-jewellery-women"><a href="<?=base_url();?>Landingpage/Product/p/earrings-jewellery-women.html">Earrings</a><li>
									<li class="necklace-jewellery-women"><a href="<?=base_url();?>Landingpage/Product/p/necklace-jewellery-women.html">Necklace & Sets</a><li>
								</ul>
							</li>							
							<li><a href="javascript:;">Fragrance</a>							
								<ul>
									<li class="body-mist"><a href="<?=base_url();?>Landingpage/Product/p/body-mist.html">Body Mist</a></li>
									<li class="women-deos"><a href="<?=base_url();?>Landingpage/Product/p/women-deos.html">Women Deos</a></li>
									<li class="women-perfumes"><a href="<?=base_url();?>Landingpage/Product/p/women-perfumes.html">Women Perfumes</a></li>
									<li class="kajal"><a href="<?=base_url();?>Landingpage/Product/p/kajal.html">Kajal</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Lips</a>
								<ul>
									<li class="lip-balms"><a href="<?=base_url();?>Landingpage/Product/p/lip-balms.html">Lip Balms</a></li>
									<li class="lip-gloss"><a href="<?=base_url();?>Landingpage/Product/p/lip-gloss.html">Lip Gloss</a></li>
									<li class="lip-liners"><a href="<?=base_url();?>Landingpage/Product/p/lip-liners.html">Lip Liners</a></li>
									<li class="lipstick"><a href="<?=base_url();?>Landingpage/Product/p/lipstick.html">Lipstick</a></li>
									
								</ul>
							</li>							
							<li><a href="javascript:;">Men Shaving & Grooming</a>
								<ul>
									<li class="after-shaves"><a href="<?=base_url();?>Landingpage/Product/p/after-shaves.html">After Shaves</a></li>
									<li class="cartridges-and-blades"><a href="<?=base_url();?>Landingpage/Product/p/cartridges-and-blades.html">Cartridges & Blades</a></li>
									<li class="razors"><a href="<?=base_url();?>Landingpage/Product/p/razors.html">Razors</a></li>
									<li class="shaving-brushes"><a href="<?=base_url();?>Landingpage/Product/p/shaving-brushes.html">Shaving Brushes</a></li>
									<li class="shaving-foam-cream-and-gel"><a href="<?=base_url();?>Landingpage/Product/p/shaving-foam-cream-and-gel.html">Shaving Foam, Cream & Gels</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Nails</a>
								<ul>
									<li class="nail-effects"><a href="<?=base_url();?>Landingpage/Product/p/nail-effects.html">Nail Effects</a></li>
									<li class="nail-polish"><a href="<?=base_url();?>Landingpage/Product/p/nail-polish.html">Nail Polish</a></li>
									<li class="nail-polish-remover"><a href="<?=base_url();?>Landingpage/Product/p/nail-polish-remover.html">Nail Polish Remover</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Baby Care</a>
						<ul id="Babycare" class="fiexdheght">
							<li><a href="javascript:;">Baby & Toddler Toys</a>
								<ul>
									<li class="baby-gym-kids"><a href="<?=base_url();?>Landingpage/Product/p/baby-gym-kids.html">Infant Play Gyms</a></li>							
									<li class="blocks-kids"><a href="<?=base_url();?>Landingpage/Product/p/blocks-kids.html">Blocks & Stacking Games</a> </li>							
									<li class="dolls-baby-kids"><a href="<?=base_url();?>Landingpage/Product/p/dolls-baby-kids.html">Dolls & Dollhouses</a> </li>							
									<li class="pull-along-toys-kids"><a href="<?=base_url();?>Landingpage/Product/p/pull-along-toys-kids.html">Pull Along Toys</a> </li>							
									<li class="frocks-kids"><a href="<?=base_url();?>Landingpage/Product/p/frocks-kids.html">Frocks</a> </li>							
									<li class="blankets-kids"><a href="<?=base_url();?>Landingpage/Product/p/blankets-kids.html">Blankets, Quilts & Wraps</a> </li>
								</ul>
							</li>
							<li><a href="javascript:;">Bath & Skin Care</a>
								<ul>
									<li class="lotions-oils-and-powders"><a href="<?=base_url();?>Landingpage/Product/p/lotions-oils-and-powders.html">Lotions, Oils & Powders</a></li>				
									<li class="soaps-shampoo-and-body-wash"><a href="<?=base_url();?>Landingpage/Product/p/soaps-shampoo-and-body-wash.html">Soaps, Shampoo & Body Wash</a> </li>
								</ul>
							</li>
							<li><a href="javascript:;">Gear</a>
								<ul>
									<li class="rockers-kids"><a href="<?=base_url();?>Landingpage/Product/p/rockers-kids.html">Bouncers, Rockers & Swing</a></li>
									<li class="strollers-kids"><a href="<?=base_url();?>Landingpage/Product/p/strollers-kids.html">Strollers, Prams & Car Seats</a></li>
									<li class="high-chairs-kids"><a href="<?=base_url();?>Landingpage/Product/p/high-chairs-kids.html">High Chairs & Booster Seats</a></li>
									<li class="ride-ons-kids"><a href="<?=base_url();?>Landingpage/Product/p/ride-ons-kids.html">Bikes & Ride Ons</a></li>					
								</ul>							
							</li>
							<li><a href="javascript:;">Kids Toys</a>
								<ul>
									<li class="trains-kids"><a href="<?=base_url();?>Landingpage/Product/p/trains-kids.html">Trains, Cars and Models</a><li>
									<li class="construction-blocks-kids"><a href="<?=base_url();?>Landingpage/Product/p/construction-blocks-kids.html">Construction & Blocks</a><li>
									<li class="puzzles-kids"><a href="<?=base_url();?>Landingpage/Product/p/puzzles-kids.html">Puzzles</a><li>
									<li class="action-games-kids"><a href="<?=base_url();?>Landingpage/Product/p/action-games-kids.html">Action games & figures</a><li>
									<li class="board-games-kids"><a href="<?=base_url();?>Landingpage/Product/p/board-games-kids.html">Board Games</a><li>
								</ul>
							</li>
							<li><a href="javascript:;">Maternity, Feeding & Nursing</a>
								<ul>
									<li class="formula-and-food-supplements"><a href="<?=base_url();?>Landingpage/Product/p/formula-and-food-supplements.html">Baby Food</a><li>
								</ul>
							</li>							
							<li><a href="javascript:;">School & Stationery</a>
								<ul>
									<li class="art-craft-kids"><a href="<?=base_url();?>Landingpage/Product/p/art-craft-kids.html">Art & Craft</a></li>
									<li class="party-supplies-kids"><a href="<?=base_url();?>Landingpage/Product/p/party-supplies-kids.html">Party Supplies</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Accessories</a>
						<ul id="Accessories" class="fiexdheght" style="right:0px">
							<li><a href="javascript:;">Man</a>							
								<ul>
									<li class="socks-men"><a href="<?=base_url();?>Landingpage/Product/p/socks-men.html">Socks</a></li>
									<li class="ties-cufflinks-accessories-men"><a href="<?=base_url();?>Landingpage/Product/p/ties-cufflinks-accessories-men.html">Ties & Cufflinks</a></li>
									<li class="wallets-bags-men"><a href="<?=base_url();?>Landingpage/Product/p/wallets-bags-men.html">Wallets</a></li>
									<li class="casual-shoes-boys-kids"><a href="<?=base_url();?>Landingpage/Product/p/casual-shoes-boys-kids.html">Casual Shoes</a></li>
									<li class="sandals-boys-kids"><a href="<?=base_url();?>Landingpage/Product/p/sandals-boys-kids.html">Sandals</a></li>
									<li class="belts-accessories-men"><a href="<?=base_url();?>Landingpage/Product/p/belts-accessories-men.html">Belts</a></li>
									<li class="watches-men"><a href="<?=base_url();?>Landingpage/Product/p/watches-men.html">Watches</a></li>
									<li class="sunglasses-accessories-men"><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-accessories-men.html">Sunglasses</a></li>
									<li class="eyeglasses-men"><a href="<?=base_url();?>Landingpage/Product/p/eyeglasses-men.html">Eyeglasses</a></li>
									<li class="men-deos"><a href="<?=base_url();?>Landingpage/Product/p/men-deos.html">Men Deos</a></li>
									<li class="men-perfumes"><a href="<?=base_url();?>Landingpage/Product/p/men-perfumes.html">Men Perfumes</a></li>
									<li class="briefs-men"><a href="<?=base_url();?>Landingpage/Product/p/briefs-men.html">Briefs</a></li>
									<li class="boxers-men"><a href="<?=base_url();?>Landingpage/Product/p/boxers-men.html">Boxers</a></li>
									<li class="nightsuits-men"><a href="<?=base_url();?>Landingpage/Product/p/nightsuits-men.html">Night Suits</a></li>
									<li class="chains-men"><a href="<?=base_url();?>Landingpage/Product/p/chains-men.html">Chains</a></li>
									<li class="casual-shoes-men"><a href="<?=base_url();?>Landingpage/Product/p/casual-shoes-men.html">Casual Shoes</a></li>
									<li class="sports-shoes-men"><a href="<?=base_url();?>Landingpage/Product/p/sports-shoes-men.html">Sports Shoes</a></li>
									<li class="formal-shoes-men"><a href="<?=base_url();?>Landingpage/Product/p/formal-shoes-men.html">Formal Shoes</a></li>
									<li class="sandals-shoes-men"><a href="<?=base_url();?>Landingpage/Product/p/sandals-shoes-men.html">Sandals & Floaters</a></li>
									<li class="slippers-shoes-men"><a href="<?=base_url();?>Landingpage/Product/p/slippers-shoes-men.html">Slippers & Flip Flops</a></li>
								
								</ul>							
							</li>							
							<li><a href="javascript:;">Women</a>							
								<ul>
									<li class="handbag-bags-women"><a href="<?=base_url();?>Landingpage/Product/p/handbag-bags-women.html">Handbags</a></li>
									<li class="wallets-women"><a href="<?=base_url();?>Landingpage/Product/p/wallets-women.html">Wallets</a></li>
									<li class="sunglasses-accessories-women"><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-accessories-women.html">Sunglasses</a></li>
									<li class="sandals-casual-shoes-women"><a href="<?=base_url();?>Landingpage/Product/p/sandals-casual-shoes-women.html">Sandals</a></li>
									<li class="heels-shoes-women"><a href="<?=base_url();?>Landingpage/Product/p/heels-shoes-women.html">Heels</a></li>
									<li class="flats-shoes-women"><a href="<?=base_url();?>Landingpage/Product/p/flats-shoes-women.html">Flats</a></li>
									<li class="sneakers-women"><a href="<?=base_url();?>Landingpage/Product/p/sneakers-women.html">Casual Shoes & Sneakers</a></li>
									<li class="slippers-shoes-women"><a href="<?=base_url();?>Landingpage/Product/p/slippers-shoes-women.html">Slippers & Flip Flops</a></li>
								
								</ul>							
							</li>							
							<li><a href="javascript:;">Kids</a>							
								<ul>
									<li class="wallets-bags-men"><a href="<?=base_url();?>Landingpage/Product/p/wallets-bags-men.html">Wallets</a></li>
									<li class="sunglasses-kids"><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-kids.html">Sunglasses</a></li>
									<li class="cloth-diapers"><a href="<?=base_url();?>Landingpage/Product/p/cloth-diapers.html">Cloth Diapers</a></li>
									<li class="disposable-diapers"><a href="<?=base_url();?>Landingpage/Product/p/disposable-diapers.html">Disposable Diapers</a></li>
									<li class="diaper-creams"><a href="<?=base_url();?>Landingpage/Product/p/diaper-creams.html">Diaper Creams</a></li>
									<li class="wipes"><a href="<?=base_url();?>Landingpage/Product/p/wipes.html">Wipes</a></li>
									<li class="potty-training-kids"><a href="<?=base_url();?>Landingpage/Product/p/potty-training-kids.html">Potty Training & Step Stools</a></li>
									<li class="dresses-frocks-girls-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/dresses-frocks-girls-clothing-kids.html">Dresses & Frocks</a></li>
									<li class="tops-tunics-girls-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/tops-tunics-girls-clothing-kids.html">Tops & T-Shirts</a></li>
									<li class="ethnicwear-girls-clothing-kids"><a href="<?=base_url();?>Landingpage/Product/p/ethnicwear-girls-clothing-kids.html">Ethnic Wear</a></li>
									<li class="floaters-girls-kids"><a href="<?=base_url();?>Landingpage/Product/p/floaters-girls-kids.html">Floaters & Flip Flops</a></li>
								
								</ul>							
							</li>						
						</ul>
					</li>
					<li><a href="javascript">Sports</a>
						<ul id="Sports" class="fiexdheght" style="right:0px">
							<li><a href="javascript:;">Badminton</a>
								<ul>							
									<li class="grips"><a href="<?=base_url();?>Landingpage/Product/p/grips.html">Grips</a></li>							
									<li class="raquets"><a href="<?=base_url();?>Landingpage/Product/p/raquets.html">Raquets</a> </li>							
									<li class="shuttles"><a href="<?=base_url();?>Landingpage/Product/p/shuttles.html">Shuttles</a> </li>							
									<li class="strings"><a href="<?=base_url();?>Landingpage/Product/p/strings.html">Strings</a> </li>
								</ul>
							</li>
							<li><a href="javascript:;">Basketball</a>
							
								<ul>
									<li class="basketball-boards"><a href="<?=base_url();?>Landingpage/Product/p/basketball-boards.html">Basketball Boards</a></li>
									<li class="basketballs"><a href="<?=base_url();?>Landingpage/Product/p/basketballs.html">Basketballs</a></li>												
								</ul>							
							</li>							
							<li><a href="javascript:;">Cricket</a>
								<ul>
									<li class="cricket-balls"><a href="<?=base_url();?>Landingpage/Product/p/cricket-balls.html">Cricket Balls</a></li>
									<li class="cricket-bats"><a href="<?=base_url();?>Landingpage/Product/p/cricket-bats.html">Cricket Bats</a></li>
									<li class="cricket-gloves"><a href="<?=base_url();?>Landingpage/Product/p/cricket-gloves.html">Cricket Gloves</a></li>
									<li class="cricket-guards"><a href="<?=base_url();?>Landingpage/Product/p/cricket-guards.html">Cricket Guards</a></li>
									<li class="cricket-helmets"><a href="<?=base_url();?>Landingpage/Product/p/cricket-helmets.html">Cricket Helmets</a></li>
									<li class="cricket-kit-bags"><a href="<?=base_url();?>Landingpage/Product/p/cricket-kit-bags.html">Cricket Kit Bags</a></li>
									<li class="cricket-sets"><a href="<?=base_url();?>Landingpage/Product/p/cricket-sets.html">Cricket Sets</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Cycling</a>
								<ul>
									<li class="bicycle-accessories"><a href="<?=base_url();?>Landingpage/Product/p/bicycle-accessories.html">Bicycle Accessories</a></li>
									<li class="bicycles"><a href="<?=base_url();?>Landingpage/Product/p/bicycles.html">Bicycles</a></li>									
								</ul>							
							</li>							
							<li ><a href="javascript:;">Football</a>
								<ul>
									<li class="football-accessories"><a href="<?=base_url();?>Landingpage/Product/p/football-accessories.html">Football Accessories</a></li>
									<li class="football-gloves"><a href="<?=base_url();?>Landingpage/Product/p/football-gloves.html">Football Gloves</a></li>									
									<li class="football-guards"><a href="<?=base_url();?>Landingpage/Product/p/football-guards.html">Football Guards</a></li>									
									<li class="footballs"><a href="<?=base_url();?>Landingpage/Product/p/footballs.html">Footballs</a></li>									
																		
								</ul>							
							</li>							
							<li><a href="javascript:;">Lawn Tennis</a>
								<ul>
									<li class="lawn-tennis-balls"><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-balls.html">Lawn Tennis Balls</a></li>
									<li class="lawn-tennis-grips"><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-grips.html">Lawn Tennis Grips</a></li>
									<li class="lawn-tennis-kit-bags"><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-kit-bags.html">Lawn Tennis Kit Bags</a></li>
									<li class="lawn-tennis-raquets"><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-raquets.html">Lawn Tennis Raquets</a></li>
									<li class="lawn-tennis-strings"><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-strings.html">Lawn Tennis Strings</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Other sports-fitness & Outdoors</a>
								<ul>
									<li class="billiards"><a href="<?=base_url();?>Landingpage/Product/p/billiards.html">Billiards</a></li>
									<li class="boxing"><a href="<?=base_url();?>Landingpage/Product/p/boxing.html">Boxing</a></li>
									<li class="hockey"><a href="<?=base_url();?>Landingpage/Product/p/hockey.html">Hockey</a></li>
									<li class="roller-skates"><a href="<?=base_url();?>Landingpage/Product/p/roller-skates.html">Roller Skates</a></li>
									<li class="scooters"><a href="<?=base_url();?>Landingpage/Product/p/scooters.html">Scooters</a></li>
									<li class="skateboards"><a href="<?=base_url();?>Landingpage/Product/p/skateboards.html">Skateboards</a></li>
									<li class="squash"><a href="<?=base_url();?>Landingpage/Product/p/squash.html">Squash</a></li>
									<li class="volleyball"><a href="<?=base_url();?>Landingpage/Product/p/volleyball.html">Volleyball</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Table Tennis</a>
								<ul>
									<li class="tables-and-accessories"><a href="<?=base_url();?>Landingpage/Product/p/tables-and-accessories.html">Tables & Accessories</a></li>
								</ul>
							</li>							
						</ul>
					</li>
					
					<li><a href="javascript:;">Camera</a>
						<ul id="Camera" class="fiexdheght"style="right:0px">
							<li><a href="javascript:;">Camera</a>
								<ul>
									<li class="digital-camera"><a href="<?=base_url();?>Landingpage/Product/p/digital-camera.html">Digital Cameras</a></li>		
								</ul>
							</li>							
							<li><a href="javascript:;">Camera Accessories</a>							
								<ul>
									<li class="flashes"><a href="<?=base_url();?>Landingpage/Product/p/flashes.html">Camera Flashes</a></li>
									<li class="camera-remote-controls"><a href="<?=base_url();?>Landingpage/Product/p/camera-remote-controls.html">Camera Remote Controls</a></li>
									<li class="rechargeable-batteries"><a href="<?=base_url();?>Landingpage/Product/p/rechargeable-batteries.html">Rechargeable Batteries</a></li>
									<li class="battery-chargers"><a href="<?=base_url();?>Landingpage/Product/p/battery-chargers.html">Battery Chargers</a></li>					
									<li class="viewfinder-extenders"><a href="<?=base_url();?>Landingpage/Product/p/viewfinder-extenders.html">Viewfinder Extenders</a></li>					
									<li class="camera-and-camcorder-batteries"><a href="<?=base_url();?>Landingpage/Product/p/camera-and-camcorder-batteries.html">Camera and Camcorder batteries</a></li>					
									<li class="camera-screen-protectors"><a href="<?=base_url();?>Landingpage/Product/p/camera-screen-protectors.html">Camera Screen Protectors</a></li>				
									<li class="tripods"><a href="<?=base_url();?>Landingpage/Product/p/tripods.html">Tripods</a></li>					
														
								</ul>							
							</li>
							<li><a href="javascript:;">Cameras, DSLRs & More</a>
								<ul>
									<li class="digital-slr-camera"><a href="<?=base_url();?>Landingpage/Product/p/digital-slr-camera.html">Digital SLR Cameras</a></li>
									<li class="camcorder"><a href="<?=base_url();?>Landingpage/Product/p/camcorder.html">Camcorders</a></li>
									<li class="digital-photo-frames"><a href="<?=base_url();?>Landingpage/Product/p/digital-photo-frames.html">Digital Photo Frames</a></li>
									<li class="binoculars"><a href="<?=base_url();?>Landingpage/Product/p/binoculars.html">Binoculars</a></li>
									<li class="surveillance-cameras"><a href="<?=base_url();?>Landingpage/Product/p/surveillance-cameras.html">Surveillance Cameras</a></li>									
								</ul>
							</li>
							<li><a href="javascript:;">Flash & Accessories</a>
								<ul>
									<li class="adapter-rings"><a href="<?=base_url();?>Landingpage/Product/p/adapter-rings.html">Adapter Rings</a> </li>
									<li class="shoe-mounts"><a href="<?=base_url();?>Landingpage/Product/p/shoe-mounts.html">Shoe Mounts</a> </li>
									<li class="diffusers-and-modifiers"><a href="<?=base_url();?>Landingpage/Product/p/diffusers-and-modifiers.html">Diffusers & Modifiers</a> </li>
								</ul>
							</li>							
							<li><a href="javascript:;">Lenses & Lens Accessories</a>
								<ul>
									<li class="filters"><a href="<?=base_url();?>Landingpage/Product/p/filters.html">Lens Filters</a></li>
									<li class="lens-cleaner"><a href="<?=base_url();?>Landingpage/Product/p/lens-cleaner.html">Lens Cleaners</a></li>
									<li class="lens-cap"><a href="<?=base_url();?>Landingpage/Product/p/lens-cap.html">Lens Caps</a></li>
									<li class="lenses"><a href="<?=base_url();?>Landingpage/Product/p/lenses.html">Camera Lenses</a></li>
									<li class="lens-hoods"><a href="<?=base_url();?>Landingpage/Product/p/lens-hoods.html">Lens Hoods</a></li>
									<li class="adapters-and-converters"><a href="<?=base_url();?>Landingpage/Product/p/adapters-and-converters.html">Adapters & Converters</a></li>
									<li class="extension-tubes"><a href="<?=base_url();?>Landingpage/Product/p/extension-tubes.html">Extension Tubes</a></li>
								</ul>
							</li>							
							<li><a href="javascript:;">Tripods</a>
								<ul>
									<li class="tripod"><a href="<?=base_url();?>Landingpage/Product/p/tripod.html">Tripods</a></li>
									<li class="monopods"><a href="<?=base_url();?>Landingpage/Product/p/monopods.html">Monopods</a></li>
									<li class="tripod-ball-heads"><a href="<?=base_url();?>Landingpage/Product/p/tripod-ball-heads.html">Tripod Ball Heads</a></li>
									<li class="camera-mounts-and-clamps"><a href="<?=base_url();?>Landingpage/Product/p/camera-mounts-and-clamps.html">Camera Mounts & Clamps</a></li>
								</ul>
							</li>							
						</ul>
					</li>
					<!--<?php foreach($categories as $category){?> 				
					<li>			
						<a href="<?=base_url();?>Landingpage/Product/<?=$category->categoriesUrlKey?>.html"><?=ucwords($category->categoryName)?></a> 			
					</li>			
					<?php } ?>				
					<!--<li><a href="<?=base_url();?>Landingpage/Flights.html">Flights</a></li>
					<li><a href="<?=base_url();?>Hotel.html" >Hotels</a></li>-->			
					<div class="clear"></div>		
				</ul>		
			</div>	
		</nav>
	
		
		