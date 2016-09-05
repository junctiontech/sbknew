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
						<a href="#" data-toggle="mobile-menu-horizontal">					
							<i class="fa-bars"></i>				
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
						<a href="<?=base_url();?>Login.html" class="fa fa-bell-o"></a>						
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
							<i class="android"></i>				
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
							<span class="white">Hi <?=isset($userinfos['userFirstName'])?$userinfos['userFirstName']:''?></span>					
							<i class="fa-link-ext"></i>				
						</a>				
						<?php }else{ ?>					
						<a href="<?=base_url();?>Login.html" title="Login to your account">					
							<span class="white">Login</span>					
							<i class="fa-link-ext"></i>					
						</a>					
						<?php } ?>				
					</li> 				
					<?php if(!empty($userinfos)){ ?>				
					<li>					
						<a href="<?=base_url();?>Login/Logout.html" title="Logout">					
							<span class="white">Logout</span>					
							<i class="fa-link-ext"></i>					
						</a>				
					</li>				
					<?php } ?> 		
				</ul>			
				<div class="clear"></div>			
				<div class="row">				
					<div class="col-md-3 col-sm-4 col-xs-12">				
						<div class=" ">					
							<a href="<?=base_url();?>"><img class="logo1" src="<?=base_url();?>frontend/images/pngtransparent (2).png" alt="" /></a>				
						</div>				
					</div>				
					<?php 
					$cat='
{"Socks":"socks-men","Belts":"belts-accessories-men","Ties & Cufflinks":"ties-cufflinks-accessories-men","Watches":"watches-men","Sunglasses":"sunglasses-kids","Mouse":"computer-mouse","Speakers":"computer-speaker","Keyboards":"computer-keyboard","Webcams":"computer-webcam","Laptop Batteries":"computer-laptop-battery","Laptop Chargers & Adapters":"computer-laptop-chargers","Cooling Pads":"computer-cooling-pads-and-stands","Monitors":"computer-monitor","Laptop Docking Stations":"laptop-docking-stations","Laser Pointers":"laser-pointers","Microphones":"microphones","Laptop Screen Protectors":"portable-computer-screen-filters","Presentation Remotes":"presentation-remotes","Touch Pads":"touch-pads","Infant Play Gyms":"baby-gym-kids","Blocks & Stacking Games":"blocks-kids","Dolls & Dollhouses":"dolls-baby-kids","Pull Along Toys":"pull-along-toys-kids","Frocks":"frocks-kids","Blankets, Quilts & Wraps":"blankets-quilts-kids","Grips":"grips","Raquets":"raquets","Shuttles":"shuttles","Strings":"strings","Wallets":"wallets-women","Handbags":"handbag-bags-women","Basketball Boards":"basketball-boards","Basketballs":"basketballs","Lotions, Oils & Powders":"lotions-oils-and-powders","Soaps, Shampoo & Body Wash":"soaps-shampoo-and-body-wash","T-Shirts":"tshirts-clothing-men","Jeans & Trousers":"jeans-trousers-boys-clothing-kids","Ethnic Wear":"ethnicwear-girls-clothing-kids","Casual Shoes":"casual-shoes-men","Sandals":"sandals-casual-shoes-women","Camera Flashes":"flashes","Camera Remote Controls":"camera-remote-controls","Rechargeable Batteries":"rechargeable-batteries","Battery Chargers":"battery-chargers","Viewfinder Extenders":"viewfinder-extenders","Camera and Camcorder batteries":"camera-and-camcorder-batteries","Camera Screen Protectors":"camera-screen-protectors","Tripods":"tripod","Digital Cameras":"digital-camera","Digital SLR Cameras":"digital-slr-camera","Camcorders":"camcorder","Digital Photo Frames":"digital-photo-frames","Binoculars":"binoculars","Surveillance Cameras":"surveillance-cameras","Car Chargers":"car-chargers","Car Kits":"car-kits","Car Cradles & Mounts":"car-cradles","GPS Navigation Devices":"gps-navigation-devices","Casual Shirts":"casual-shirts-clothing-men","Formal Shirts":"formal-shirts-clothing-men","Jeans":"jeans-bottoms-clothing-women","Pants & Trousers":"trousers-bottoms-clothing-men","Shorts & 3\/4ths":"shorts-3-4th-bottoms-clothing-men","Shirts,Tops & Tees":"tops-clothing-women","Dresses":"dress-clothing-women","Trousers":"trousers-bottoms-clothing-women","Leggings":"leggings-women","Skirts":"skirts-bottoms-clothing-women","Shrugs & Jackets":"shrugs-and-jackets-clothing-women","Maternity":"maternity-clothing-women","Sportswear":"sportswear-women","Cricket Balls":"cricket-balls","Cricket Bats":"cricket-bats","Cricket Gloves":"cricket-gloves","Cricket Guards":"cricket-guards","Cricket Helmets":"cricket-helmets","Cricket Kit Bags":"cricket-kit-bags","Cricket Sets":"cricket-sets","Bicycle Accessories":"bicycle-accessories","Bicycles":"bicycles","Clocks":"clocks-decor","Religion & Spirituality":"religion-and-spirituality-decor-home-decor","Desktop":"desktop","Graphic Cards":"graphic-cards","Internal Hard Drives":"internal-hard-disk","Motherboards":"motherboards","Power Supply Unit":"smps-power-supplies","Processor Fans & Cooling":"processor-fans","Processors":"processors","RAM":"ram","Sound Cards":"sound-cards","TV Tuners":"tv-tuners","Computer Cabinets":"computer-cabinets","Cloth Diapers":"cloth-diapers","Disposable Diapers":"disposable-diapers","Diaper Creams":"diaper-creams","Wipes":"wipes","Potty Training & Step Stools":"potty-training-kids","Kurtas & Kurtis":"kurta-ethnic-women","Sarees":"sarees-ethnic-women","Suit Sets":"suits-ethnic-women","Salwars & Churidars":"salwars-churidars-women","Dress Materials":"dressmaterial-ethnic-women","Cross & Elliptical trainers":"cross-and-elliptical-trainers","Dumbbells":"dumbbells","Weighing Scales":"weighing-scales","Eyeglasses":"eyeglasses-men","Eye Liner":"eye-liner","Eye Shadow":"eye-shadows","Kajal":"kajal","BB & CC Creams":"bb-and-cc-cream","Blush":"blush-and-bronzer","Bronzer":"bronzer","Compact Powder ":"compact","Makeup Remover":"eye-make-up-remover","Concealer":"face-concealer","Foundation ":"foundation-and-compacts","Primer":"primer","Earrings":"earrings-jewellery-women","Necklace & Sets":"necklace-jewellery-women","Adapter Rings":"adapter-rings","Shoe Mounts":"shoe-mounts","Diffusers & Modifiers":"diffusers-and-modifiers","Football Accessories":"football-accessories","Football Gloves":"football-gloves","Football Guards":"football-guards","Footballs":"footballs","Body Mist":"body-mist","Men Deos":"men-deos","Men Perfumes":"men-perfumes","Women Deos":"women-deos","Women Perfumes":"women-perfumes","Bean Bags":"bean-seatings-furniture-home","Gaming Console":"gaming-console","Bouncers, Rockers & Swings":"rockers-kids","Strollers, Prams & Car Seats":"strollers-kids","High Chairs & Booster Seats":"high-chairs-kids","Bikes & Ride Ons":"ride-ons-kids","Dresses & Frocks":"dresses-frocks-girls-clothing-kids","Tops & T-Shirts":"tops-tunics-girls-clothing-kids","Floaters & Flip Flops":"floaters-girls-kids","Power Tools":"power-tools","Hand Tools":"hand-tools","Measuring Tools":"measuring-tools","Tool Accessories":"tool-accessories","Headphones":"headphones","Wired Headsets":"headsets","Bluetooth Headsets":"bluetooth-headsets","MicroSD Memory Cards":"memory-cards","SD Memory Cards":"sd-memory-cards","BP Monitor":"bp-monitors","Digital Thermometer":"digital-thermometers","Nebulizer":"nebulizers","Massager":"massagers","Pulse Oximeter":"pulse-oximeters","Heating Pad":"heat-therapy","Glucometer":"blood-glucose-monitors","Body Fat Analyzer":"body-fat-monitors","Pedometer":"pedometer-step-counters","Air Coolers":"air-coolers","Fans":"fans","Geysers":"geysers","Immersion Rods":"immersion-rods","Room Heaters":"room-heaters","Lighting & Lamps":"lighting","Irons":"irons","Washing Machines":"washing-machines","Refrigerators":"refrigerators","Emergency Lights":"emergency-light","Air Conditioners":"air-conditioner","Vacuum Cleaners":"vacuum-cleaners","Inverters & Batteries":"inverters-batteries","Dishwashers":"dishwashers","Spike Surge Protectors":"spike-surge-protectors","UPS":"power-supplies","Voltage Stabilizers":"voltage-stabilizers","Bedsheets & Sets":"bedsheets-bed-linen-bed-bath-home-decor","Curtains & Cushions":"curtains-cushions-decor","Carpets, Rugs & Mats":"carpets-rugs-decor","Towels":"towels-bath-essentials-bed-bath-home-decor","Quilts & Blankets":"quilts-blankets","Briefs":"briefs-men","Boxers":"boxers-men","Night Suits":"nightsuits-men","MP3 Players":"ipod-mp3","Home Theaters":"home-theaters","Video & DVD Players":"video-players","Projectors":"projectors","Smart TV Boxes":"smart-tv","Voice Recorders":"voice-recorders","AV Receivers":"av-receivers","Sound Amplifiers":"sound-amplifiers","Boom Boxes":"boom-boxes","FM Radio":"fm-radio","Chains":"chains-men","Trains, Cars and Models":"trains-kids","Construction & Blocks":"construction-blocks-kids","Puzzles":"puzzles-kids","Action games & figures":"action-games-kids","Board Games":"board-games-kids","Dining & Serving":"dining-serving","Bottles & Sippers":"bottles-storage-kitchen-home","Containers & Jars":"containers-storage-kitchen-home","Kitchen Tools":"tools-cutlery-kitchen-home","Lunch Boxes":"lunch-boxes-storage-kitchen-home","Mixer Grinder Juicers":"mixers","Electric Kettles":"electric-kettles","Induction Cook Tops":"induction-cooktops","Choppers & Blenders":"choppers-blenders","Electric (Rice) Cookers":"electric-cookers","Pop Up Toasters":"pop-up-toasters","Coffee Makers":"coffee-makers","Microwave Ovens":"microwave-oven","Oven Toaster Grill (OTG)":"otg","Sandwich Makers":"sandwich-makers","Water Purifiers":"water-purifiers","Food Processors":"food-processors","Air Fryers":"air-fryers","Laptops":"laptops","Lawn Tennis Balls":"lawn-tennis-balls","Lawn Tennis Grips":"lawn-tennis-grips","Lawn Tennis Kit Bags":"lawn-tennis-kit-bags","Lawn Tennis Raquets":"lawn-tennis-raquets","Lawn Tennis Strings":"lawn-tennis-strings","Lens Filters":"filters","Lens Cleaners":"lens-cleaner","Lens Caps":"lens-cap","Camera Lenses":"lenses","Lens Hoods":"lens-hoods","Adapters & Converters":"adapters-and-converters","Extension Tubes":"extension-tubes","LED Lights":"led-lights","Bras":"bras-lingerie-clothing-women","Lip Balms ":"lip-balms","Lip Gloss":"lip-gloss","Lip Liners":"lip-liners","Lipstick":"lipstick","Baby Food":"formula-and-food-supplements","Bottle Cleaning & Sterilisation":"sterlisation-kids","After Shaves":"after-shaves","Cartridges & Blades":"cartridges-and-blades","Razors":"razors","Shaving Brushes":"shaving-brushes","Shaving Foam, Cream & Gels":"shaving-foam-cream-and-gel","Mobile Battery":"batteries","Mobile Chargers":"chargers","Cables":"cables","Power Banks":"power-banks","Smart Watches":"smart-watches","Smart Bands":"fitness-tracker","Wireless Speakers":"wireless-speakers","Mobile Phones":"mobile","Tablets":"tablet","Landline Phones":"landline-phones","Nail Effects":"nail-effects","Nail Polish":"nail-polish","Nail Polish Remover":"nail-polish-remover","WiFi Routers":"computer-router","Access Points":"computer-access-points","Switches":"computer-switches","Data Cards":"computer-data-cards","Wireless USB Adapters":"computer-wireless-usb-adapters","Network Interface Cards":"computer-network-interface-cards","Antennas & Amplifiers":"antennas-and-amplifiers","Bluetooth Adapters":"bluetooth-adapters","Modems":"modems","Power LAN Adapters":"power-lan-adapters","Print Servers":"print-servers","Repeaters & Extenders":"repeaters-and-extenders","USB Hubs":"usb-hubs","Billiards":"billiards","Boxing":"boxing","Hockey":"hockey","Roller Skates":"roller-skates","Scooters":"scooters","Skateboards":"skateboards","Squash":"squash","Volleyball":"volleyball","Electric Shaver":"shavers","Trimmer":"trimmers","Epilator":"epilators","Hair Dryer":"hair-dryers","Hair Straightener":"hair-straighteners","Hair Curler":"hair-curlers","Electric Toothbrush":"electric-toothbrushes","Hair Styler":"hair-stylers","Single Function Printers":"computer-printer","Scanners":"computer-scanner","Laser Toners":"computer-toners","Inkjet Inks":"computer-inks","Multifunction Printers":"computer-multi-function","Art & Craft":"art-craft-kids","Party Supplies":"party-supplies-kids","Sports Shoes":"sports-shoes-men","Formal Shoes":"formal-shoes-men","Sandals & Floaters":"sandals-shoes-men","Slippers & Flip Flops":"slippers-shoes-women","Heels":"heels-shoes-women","Flats":"flats-shoes-women","Casual Shoes & Sneakers":"sneakers-women","Antivirus and Security Software":"computer-software","Microsoft Office":"computer-office-tools","Microsoft Windows":"computer-operating-system","Pen Drives Price":"computer-pendrive","External Hard Disks Price":"computer-external-hard-disks","External DVD Writers":"computer-external-dvd-writer","Card Readers":"card-reader","External SSD":"external-ssd","Network Attached Storage":"network-attached-storage","Table Tennis Kits":"table-tennis-kits","Tables & Accessories":"tables-and-accessories","Monopods":"monopods","Tripod Ball Heads":"tripod-ball-heads","Camera Mounts & Clamps":"camera-mounts-and-clamps","LED & LCD TVs":"tv","Remote Controls":"remote-controls","Sweatshirts":"sweatshirts-winterwear-clothing-men","Coats & Blazers":"coats-winterwear-clothing-men","Winter Jackets":"jackets-winterwear-clothing-women"}';
					$cat=json_decode($cat,true);
					
					?>
					
					<div class="col-md-9 col-sm-8 col-xs-12">						
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
							<a href="<?=base_url();?>Landingpage/Deals"> <img style="width:12%;margin-top: 10px;" src="<?=base_url();?>frontend/images/best-deals-.png"/> 
						</a></div>	
						<div class="clear"></div>
					</div>	
					
					<div class="clear"></div>
				</div>			
				<ul class="navbar-nav">					
					<li><a href="javascript:;">Mobile</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="mobile">Mobile, Tablets & Accessories</a>
								<ul class="sub1">
									<li><a href="<?=base_url();?>Landingpage/Product/p/mobile.html">Mobile Phones</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tablet.html">Tablets</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/landline-phones.html">Landline Phones</a><li>
								</ul>
							</li>							
							<li><a href="mobile-accessories">Mobile Accessories</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/batteries.html">Mobile Battery</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/chargers.html">Mobile Chargers</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cables.html">Cables</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/power-banks.html">Power Banks</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/smart-watches.html">Smart Watches</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/fitness-tracker.html">Smart Bands</a>
									<li><a href="<?=base_url();?>Landingpage/Product/p/wireless-speakers.html">Wireless Speakers</a>
								</ul>
							
							</li>
							<li><a href="car-mobile-accessories">Car Mobile Accessories</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/car-chargers.html">Car Chargers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/car-kits.html">Car Kits</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/car-cradles.html">Car Cradles & Mounts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/gps-navigation-devices.html">GPS Navigation Devices</a></li>
								
								</ul>
							</li>	
							<li><a href="headphones-headsets">Headphones & Headsets</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/headphones.html">Headphones</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/headsets.html">Wired Headsets</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bluetooth-headsets.html">Bluetooth Headsets</a><li>
								</ul>
							</li>							
							<li><a href="headphones-memory-cards">Headphones & Memory Cards</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/memory-cards.html">MicroSD Memory Cards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sd-memory-cards.html">SD Memory Cards</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Laptops</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/laptops.html">Laptpos</a></li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/accessories-and-peripherals.html">Accessories</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-laptop-battery.html">Laptop Batteries</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-laptop-chargers.html">Laptop Chargers & Adapters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/laptop-docking-stations.html">Laptop Docking Stations</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/portable-computer-screen-filters.html">Laptop Screen Protectors</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/presentation-remotes.html">Presentation Remotes</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/touch-pads.html">Touch Pads</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-keyboard.html">Keyboards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-mouse.html">Mouse</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-speaker.html">Speakers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-webcam.html">Webcams</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-cooling-pads-and-stands.html">Cooling Pads</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-monitor.html">Monitors</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/microphones.html">Microphones</a></li>									
								</ul>
							</li>						
						</ul>
					</li>
					<li><a href="javascript:;">Desktop & Computer</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/desktop-components.html">Desktop & Components</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/desktop.html">Desktop</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/graphic-cards.html">Graphic Cards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/internal-hard-disk.html">Internal Hard Drives</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/motherboards.html">Motherboards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/smps-power-supplies.html">Power Supply Unit</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/processor-fans.html">Processor Fans & Cooling</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/processors.html">Processors</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ram.html">RAM</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sound-cards.html">Sound Cards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tv-tuners.html">TV Tuners</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-cabinets.html">Computer Cabinets</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/networking.html">Networking</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-access-points.html">Access Points</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-switches.html">Switches</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-data-cards.html">Data Cards</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-wireless-usb-adapters.html">Wireless USB Adapters</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-network-interface-cards.html">Network Interface Cards</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/antennas-and-amplifiers.html">Antennas & Amplifiers</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bluetooth-adapters.html">Bluetooth Adapters</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/modems.html">Modems</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/power-lan-adapters.html">Power LAN Adapters</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/print-servers.html">Print Servers</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/repeaters-and-extenders.html">Repeaters & Extenders</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/usb-hubs.html">USB Hubs</a><li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/printers-and-inks.html">Printers and Inks</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/laser-pointers.html">Laser Pointers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-printer.html">Single Function Printers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-scanner.html">Scanners</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-toners.html">Laser Toners</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-inks.html">Inkjet Inks</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-multi-function.html">Multifunction Printers</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/software.html">Software</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-software.html">Antivirus and Security Software</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-office-tools.html">Microsoft Office</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-operating-system.html">Microsoft Windows</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/storage-and-memory.html">Storage and Memory</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-pendrive.html">Pen Drives Price</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-external-hard-disks.html">External Hard Disks Price</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/computer-external-dvd-writer.html">External DVD Writers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/card-reader.html">Card Readers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/external-ssd.html">External SSD</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/network-attached-storage.html">Network Attached Storage</a></li>
								</ul>
							</li>													
						</ul>							
					</li>
					<li><a href="javascript:;">TVs</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/tv.html">LED & LCD TVs</a></li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/tv-video-accessories.html">TV & Video Accessories</a> 
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/remote-controls.html">Remote Controls</a></li>
								</ul>							
							</li>							
						</ul>
					</li>
					<li><a href="javascript:;">Apparels</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="javascript:;">men</a>
								<ul>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/casual-shirts-clothing-men.html">Casual Shirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tshirts-clothing-men.html">T-Shirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/formal-shirts-clothing-men.html">Formal Shirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/jeans-bottoms-clothing-men.html">Jeans</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/trousers-bottoms-clothing-men.html">Pants & Trousers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shorts-3-4th-bottoms-clothing-men.html">Shorts & 3/4ths</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ethnic-clothing-men.html">Ethnic Wear</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sweatshirts-winterwear-clothing-men.html">Sweatshirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/coats-winterwear-clothing-men.html">Coats & Blazers</a></li>
									
								</ul>								
							</li>
							<li><a href="javascript:;">women</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tops-clothing-women.html">Shirts,Tops & Tees</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/dress-clothing-women.html">Dresses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/jeans-bottoms-clothing-women.html">Jeans</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/trousers-bottoms-clothing-women.html">Trousers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/leggings-women.html">Leggings</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/skirts-bottoms-clothing-women.html">Skirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shrugs-and-jackets-clothing-women.html">Shrugs & Jackets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/maternity-clothing-women.html">Maternity</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sportswear-women.html">Sportswear</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/kurta-ethnic-women.html">Kurtas & Kurtis</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/sarees-ethnic-women.html">Sarees</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/suits-ethnic-women.html">Suit Sets</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/salwars-churidars-women.html">Salwars & Churidars</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/dressmaterial-ethnic-women.html">Dress Materials</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/bras-lingerie-clothing-women.html">Bras</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/jackets-winterwear-clothing-women.html">Winter Jackets</a></li>									
								</ul>						
							</li>							
							<li><a href="javascript:;">kids</a>							
								<ul>	
									<li><a href="<?=base_url();?>Landingpage/Product/p/tshirts-boys-clothing-kids.html">T-Shirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/jeans-trousers-boys-clothing-kids.html">Jeans & Trousers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ethnicwear-boys-clothing-kids.html">Ethnic Wear</a></li>									
								</ul>							
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Home & Furniture</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/appliance.html">Home & Kitchen Appliances</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lighting.html">Lighting & Lamps</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/led-lights.html">LED Lights</a><li>
								</ul> 
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/nursery-kids.html">Nurserys</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/blankets-quilts-kids.html">Blankets, Quilts & Wraps</a><li>				 
								</ul> 
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/personal-care-products">Personal Care Products</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shavers.html">Electric Shaver</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/trimmers.html">Trimmer</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/epilators.html">Epilator</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hair-dryers.html">Hair Dryer</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hair-straighteners.html">Hair Straightener</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hair-curlers.html">Hair Curler</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/electric-toothbrushes.html">Electric Toothbrush</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hair-stylers.html">Hair Styler</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/decor.html">Decor</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/clocks-decor.html">Clocks</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/religion-and-spirituality-decor-home-decor.html">Religion & Spirituality</a></li>			
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/home-appliances.html">Home Appliances</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/irons.html">Irons</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/washing-machines.html">Washing Machines</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/refrigerators.html">Refrigerators</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/emergency-light.html">Emergency Lights</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/vacuum-cleaners.html">Vacuum Cleaners</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/inverters-batteries.html">Inverters & Batteries</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/dishwashers.html">Dishwashers</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/spike-surge-protectors.html">Spike Surge Protectors</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/spower-supplies.html">UPS</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/voltage-stabilizers.html">Voltage Stabilizers</a><li>
								</ul> 
							</li>								
							<li><a href="<?=base_url();?>Landingpage/Product/p/kitchen-dining.html">Kitchen & Dining</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/dining-serving.html">Dining & Serving</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bottles-storage-kitchen-home.html">Bottles & Sippers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/containers-storage-kitchen-home.html">Containers & Jars</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tools-cutlery-kitchen-home.html">Kitchen Tools</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lunch-boxes-storage-kitchen-home.html">Lunch Boxes</a></li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/kitchen-appliances.html">Kitchen Appliances</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/mixers.html">Mixer Grinder Juicers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/electric-kettles.html">Electric Kettles</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/induction-cooktops.html">Induction Cook Tops</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/choppers-blenders.html">Choppers & Blenders</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/electric-cookers.html">Electric (Rice) Cookers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/pop-up-toasters.html">Pop Up Toasters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/coffee-makers.html">Coffee Makers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/microwave-oven.html">Microwave Ovens</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/otg.html">Oven Toaster Grill (OTG)</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sandwich-makers.html">Sandwich Makers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/water-purifiers.html">Water Purifiers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/food-processors.html">Food Processors</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/air-fryers.html">Air Fryers</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/ipods-home-theaters-dvd-players.html">iPods, Home Theaters & DVD Players</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ipod-mp3.html">MP3 Players</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/home-theaters.html">Home Theaters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/video-players.html">Video & DVD Players</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/projectors.html">Projectors</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/smart-tv.html">Smart TV Boxes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/voice-recorders.html">Voice Recorders</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/av-receivers.html">AV Receivers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sound-amplifiers.html">Sound Amplifiers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/boom-boxes.html">Boom Boxes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/fm-radio.html">FM Radio</a></li>									
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/air-conditioner.html">Air Conditioners</a></li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/home-linen-home-decor.html">Home Linen</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bedsheets-bed-linen-bed-bath-home-decor.html">Bedsheets & Sets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/curtains-cushions-decor.html">Curtains & Cushions</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/carpets-rugs-decor.html">Carpets, Rugs & Mats</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/towels-bath-essentials-bed-bath-home-decor.html">Towels</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/quilts-blankets.html">Quilts & Blankets</a></li>
								</ul>
							</li>										
							<li><a href="<?=base_url();?>Landingpage/Product/p/furniture.html">Furniture</a> 							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bean-seatings-furniture-home.html">Bean Bags</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/hardware-tools.html">Hardware Tools</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/power-tools.html">Power Tools</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hand-tools.html">Hand Tools</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/measuring-tools.html">Measuring Tools</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tool-accessories.html">Tool Accessories</a></li>
								</ul>
							</li>							
						</ul>
					</li>
					<li><a href="javascript:;">Health & Fitness</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/exercise-sports.html">Exercise & Fitness</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cross-and-elliptical-trainers.html">Cross & Elliptical trainers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/dumbbells.html">Dumbbells</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/weighing-scales.html">Weighing Scales</a></li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/health-care-products.html">Health Care Products</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bp-monitors.html">BP Monitor</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/digital-thermometers.html">Digital Thermometer</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/nebulizers.html">Nebulizer</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/massagers.html">Massager</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/pulse-oximeters.html">Pulse Oximeter</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/heat-therapy.html">Heating Pad</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/blood-glucose-monitors.html">Glucometer</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/body-fat-monitors.html">Body Fat Analyzer</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/pedometer-step-counters.html">Pedometer</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/air-coolers.html">Air Coolers</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/fans.html">Fans</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/geysers.html">Geysers</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/immersion-rods.html">Immersion Rods</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/room-heaters.html">Room Heaters</a><li>
								</ul>
							</li>
						</ul>
					</li>					
					<li><a href="javascript:;">Beauty & Jewellery</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/eyes-beauty.html">Eyes</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/eye-liner.html">Eye Liner</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/eye-shadows.html">Eye Shadow</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/kajal.html">Kajal</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/face-beauty.html">Face</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bb-and-cc-cream.html">BB & CC Creams</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/blush-and-bronzer.html">Blush</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bronzer.html">Bronzer</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/compact.html">Compact Powder</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/eye-make-up-remover.html">Makeup Remover</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/face-concealer.html">Concealer</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/foundation-and-compacts.html">Foundation</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/primer.html">Primer</a></li>
								</ul>							
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/jewellery-women.html">Fancy Jewellery</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/earrings-jewellery-women.html">Earrings</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/necklace-jewellery-women.html">Necklace & Sets</a><li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/fragrance-beauty.html">Fragrance</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/body-mist.html">Body Mist</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/women-deos.html">Women Deos</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/women-perfumes.html">Women Perfumes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/kajal.html">Kajal</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/lips-beauty.html">Lips</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lip-balms.html">Lip Balms</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lip-gloss.html">Lip Gloss</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lip-liners.html">Lip Liners</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lipstick.html">Lipstick</a></li>
									
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/men-shaving-grooming-beauty.html">Men Shaving & Grooming</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/after-shaves.html">After Shaves</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cartridges-and-blades.html">Cartridges & Blades</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/razors.html">Razors</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shaving-brushes.html">Shaving Brushes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shaving-foam-cream-and-gel.html">Shaving Foam, Cream & Gels</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/nails-beauty.html">Nails</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/nail-effects.html">Nail Effects</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/nail-polish.html">Nail Polish</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/nail-polish-remover.html">Nail Polish Remover</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Baby Care</a>
						<ul style="height: 290px; overflow-y: scroll;">
							<li><a href="<?=base_url();?>Landingpage/Product/p/toddler-toys-kids.html">Baby & Toddler Toys</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/baby-gym-kids.html">Infant Play Gyms</a></li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/blocks-kids.html">Blocks & Stacking Games</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/dolls-baby-kids.html">Dolls & Dollhouses</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/pull-along-toys-kids.html">Pull Along Toys</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/frocks-kids.html">Frocks</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/blankets-kids.html">Blankets, Quilts & Wraps</a> </li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/bath-skin-care-kids.html">Bath & Skin Care</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lotions-oils-and-powders.html">Lotions, Oils & Powders</a></li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/soaps-shampoo-and-body-wash.html">Soaps, Shampoo & Body Wash</a> </li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/gear-kids.html">Gear</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/rockers-kids.html">Bouncers, Rockers & Swing</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/strollers-kids.html">Strollers, Prams & Car Seats</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/high-chairs-kids.html">High Chairs & Booster Seats</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ride-ons-kids.html">Bikes & Ride Ons</a></li>					
								</ul>							
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/toys-kids.html">Kids Toys</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/trains-kids.html">Trains, Cars and Models</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/construction-blocks-kids.html">Construction & Blocks</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/puzzles-kids.html">Puzzles</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/action-games-kids.html">Action games & figures</a><li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/board-games-kids.html">Board Games</a><li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/maternity-feeding-kids.html">Maternity, Feeding & Nursing</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/formula-and-food-supplements.html">Baby Food</a><li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/school-kids.html">School & Stationery</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/art-craft-kids.html">Art & Craft</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/party-supplies-kids.html">Party Supplies</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="javascript:;">Accessories</a>
						<ul style="height: 290px; overflow-y: scroll;right:0px">
							<li><a href="javascript:;">Man</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/socks-men.html">Socks</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ties-cufflinks-accessories-men.html">Ties & Cufflinks</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/wallets-bags-men.html">Wallets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/casual-shoes-boys-kids.html">Casual Shoes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sandals-boys-kids.html">Sandals</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/belts-accessories-men.html">Belts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/watches-men.html">Watches</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-accessories-men.html">Sunglasses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/eyeglasses-men.html">Eyeglasses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/men-deos.html">Men Deos</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/men-perfumes.html">Men Perfumes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/briefs-men.html">Briefs</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/boxers-men.html">Boxers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/nightsuits-men.html">Night Suits</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/chains-men.html">Chains</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/casual-shoes-men.html">Casual Shoes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sports-shoes-men.html">Sports Shoes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/formal-shoes-men.html">Formal Shoes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sandals-shoes-men.html">Sandals & Floaters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/slippers-shoes-men.html">Slippers & Flip Flops</a></li>
								
								</ul>							
							</li>							
							<li><a href="javascript:;">Women</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/handbag-bags-women.html">Handbags</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/wallets-women.html">Wallets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-accessories-women.html">Sunglasses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sandals-casual-shoes-women.html">Sandals</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/heels-shoes-women.html">Heels</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/flats-shoes-women.html">Flats</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sneakers-women.html">Casual Shoes & Sneakers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/slippers-shoes-women.html">Slippers & Flip Flops</a></li>
								
								</ul>							
							</li>							
							<li><a href="javascript:;">Kids</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/wallets-bags-men.html">Wallets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/sunglasses-kids.html">Sunglasses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cloth-diapers.html">Cloth Diapers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/disposable-diapers.html">Disposable Diapers</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/diaper-creams.html">Diaper Creams</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/wipes.html">Wipes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/potty-training-kids.html">Potty Training & Step Stools</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/dresses-frocks-girls-clothing-kids.html">Dresses & Frocks</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tops-tunics-girls-clothing-kids.html">Tops & T-Shirts</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/ethnicwear-girls-clothing-kids.html">Ethnic Wear</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/floaters-girls-kids.html">Floaters & Flip Flops</a></li>
								
								</ul>							
							</li>						
						</ul>
					</li>
					<li><a href="javascript">Sports</a>
						<ul style="height: 290px; overflow-y: scroll;right:0px">
							<li><a href="<?=base_url();?>Landingpage/Product/p/badminton-sports.html">Badminton</a>
								<ul>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/grips.html">Grips</a></li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/raquets.html">Raquets</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/shuttles.html">Shuttles</a> </li>							
									<li><a href="<?=base_url();?>Landingpage/Product/p/strings.html">Strings</a> </li>
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/basketball-sports.html">Basketball</a>
							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/basketball-boards.html">Basketball Boards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/basketballs.html">Basketballs</a></li>												
								</ul>							
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-sports.html">Cricket</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-balls.html">Cricket Balls</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-bats.html">Cricket Bats</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-gloves.html">Cricket Gloves</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-guards.html">Cricket Guards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-helmets.html">Cricket Helmets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-kit-bags.html">Cricket Kit Bags</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/cricket-sets.html">Cricket Sets</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/cycling-sports.html">Cycling</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bicycle-accessories.html">Bicycle Accessories</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/bicycles.html">Bicycles</a></li>									
								</ul>							
							</li>							
							<li ><a href="<?=base_url();?>Landingpage/Product/p/football-sports.html">Football</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/football-accessories.html">Football Accessories</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/football-gloves.html">Football Gloves</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/football-guards.html">Football Guards</a></li>									
									<li><a href="<?=base_url();?>Landingpage/Product/p/footballs.html">Footballs</a></li>									
																		
								</ul>							
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-sports.html">Lawn Tennis</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-balls.html">Lawn Tennis Balls</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-grips.html">Lawn Tennis Grips</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-kit-bags.html">Lawn Tennis Kit Bags</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-raquets.html">Lawn Tennis Raquets</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lawn-tennis-strings.html">Lawn Tennis Strings</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/fitness-outdoor-sports.html">Other sports-fitness & Outdoors</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/billiards.html">Billiards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/boxing.html">Boxing</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/hockey.html">Hockey</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/roller-skates.html">Roller Skates</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/scooters.html">Scooters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/skateboards.html">Skateboards</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/squash.html">Squash</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/volleyball.html">Volleyball</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/table-tennis-sports.html">Table Tennis</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tables-and-accessories.html">Tables & Accessories</a></li>
								</ul>
							</li>							
						</ul>
					</li>
					
					<li><a href="javascript:;">Camera</a>
						<ul style="height: 290px; overflow-y: scroll;right:0px">
							<li><a href="<?=base_url();?>Landingpage/Product/p/badminton-sports.html">Camera</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/digital-camera.html">Digital Cameras</a></li>									
							
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/camera-accessories.html">Camera Accessories</a>							
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/flashes.html">Camera Flashes</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/camera-remote-controls.html">Camera Remote Controls</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/rechargeable-batteries.html">Rechargeable Batteries</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/battery-chargers.html">Battery Chargers</a></li>					
									<li><a href="<?=base_url();?>Landingpage/Product/p/viewfinder-extenders.html">Viewfinder Extenders</a></li>					
									<li><a href="<?=base_url();?>Landingpage/Product/p/camera-and-camcorder-batteries.html">Camera and Camcorder batteries</a></li>					
									<li><a href="<?=base_url();?>Landingpage/Product/p/camera-screen-protectors.html">Camera Screen Protectors</a></li>				
									<li><a href="<?=base_url();?>Landingpage/Product/p/tripods.html">Tripods</a></li>					
														
								</ul>							
							</li>
							<li><a href="javascript:;">Cameras, DSLRs & More</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/digital-slr-camera.html">Digital SLR Cameras</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/camcorder.html">Camcorders</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/digital-photo-frames.html">Digital Photo Frames</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/binoculars.html">Binoculars</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/surveillance-cameras.html">Surveillance Cameras</a></li>									
								</ul>
							</li>
							<li><a href="<?=base_url();?>Landingpage/Product/p/flash-accessories.html">Flash & Accessories</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/adapter-rings.html">Adapter Rings</a> </li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/shoe-mounts.html">Shoe Mounts</a> </li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/diffusers-and-modifiers.html">Diffusers & Modifiers</a> </li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/lenses-lens-accessories.html">Lenses & Lens Accessories</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/filters.html">Lens Filters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lens-cleaner.html">Lens Cleaners</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lens-cap.html">Lens Caps</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lenses.html">Camera Lenses</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/lens-hoods.html">Lens Hoods</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/adapters-and-converters.html">Adapters & Converters</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/extension-tubes.html">Extension Tubes</a></li>
								</ul>
							</li>							
							<li><a href="<?=base_url();?>Landingpage/Product/p/tripods.html">Tripods</a>
								<ul>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tripod.html">Tripods</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/monopods.html">Monopods</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/tripod-ball-heads.html">Tripod Ball Heads</a></li>
									<li><a href="<?=base_url();?>Landingpage/Product/p/camera-mounts-and-clamps.html">Camera Mounts & Clamps</a></li>
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
		