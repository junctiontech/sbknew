<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {
	
	function __construct() {
		parent::__construct();		
		$this->data[]="";
		$this->data['url'] = base_url();
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		$this->userinfos=$this->data['userinfos']=$this->session->userdata('searchb4kharch');
		$this->load->model('frontend/Landingpage_model');
		if($this->userinfos){
		$this->load->model('frontend/User_model');
		$wishlist=$this->User_model->get_wishlistcount('s4k_user_wishlist',array('userID'=>$this->userinfos['userID'],'Status'=>'Active'));
		$this->data['whislist']=count($wishlist);
		$this->data['whislistproduct']=array();
		$this->whislistproduct[]='';
		foreach($wishlist as $wishlists){
		$this->whislistproduct[]=$this->data['whislistproduct'][]=$wishlists->productID;
		}
		}
	}
	
	public function display($template_file){
		$this->parser->parse('frontend/Header',$this->data);
		$this->load->view($template_file, $this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}

	public function index(){
		$this->data['lsh_data']=array('ls'=>8,'lsheading'=>"Top Mobiles");
		$this->data['feature_data']=array('fs'=>8,'fsheading'=>"Top laptops");
		$this->data['new_data']=array('ns'=>8,'nsheading'=>"Top Tvs");
		$lshproduct=$this->call_api('categorysearch',"category=mobiles");
		$this->data['lshproduct']=$lshproduct['data'];
		$featureproduct=$this->call_api('categorysearch',"category=laptops");
		$this->data['featureproduct']=$featureproduct['data'];
		$newproduct=$this->call_api('categorysearch',"category=tv");
		$this->data['newproduct']=$newproduct['data'];
		$this->display ('frontend/Landingpage');
	}
	
	public function Product($action=false,$category=false,$product=false){
		$this->data['searchq']=$searchq=$this->input->Get('q');
		$this->data['searchc']=$searchc=$this->input->Get('c');
		$this->data['categorykey']=$category;
		if($action){
			$iscomparablefalse=Array('socks-men','belts-accessories-men','ties-cufflinks-accessories-men','watches-men','sunglasses-accessories-men','sunglasses-accessories-women','sunglasses-kids','baby-gym-kids','blocks-kids','dolls-baby-kids','pull-along-toys-kids','frocks-kids','blankets-kids','wallets-bags-men','handbag-bags-women','wallets-women','tshirts-boys-clothing-kids','jeans-trousers-boys-clothing-kids','ethnicwear-boys-clothing-kids','casual-shoes-boys-kids','sandals-boys-kids','casual-shirts-clothing-men','tshirts-clothing-men','formal-shirts-clothing-men','jeans-bottoms-clothing-men','trousers-bottoms-clothing-men','shorts-3-4th-bottoms-clothing-men','ethnic-clothing-men','tops-clothing-women','dress-clothing-women','jeans-bottoms-clothing-women','trousers-bottoms-clothing-women','leggings-women','skirts-bottoms-clothing-women','shrugs-and-jackets-clothing-women','maternity-clothing-women','sportswear-women','clocks-decor','religion-and-spirituality-decor-home-decor','potty-training-kids','kurta-ethnic-women','sarees-ethnic-women','suits-ethnic-women','salwars-churidars-women','dressmaterial-ethnic-women','eyeglasses-men','earrings-jewellery-women','necklace-jewellery-women','bean-seatings-furniture-home','rockers-kids','strollers-kids','high-chairs-kids','ride-ons-kids','dresses-frocks-girls-clothing-kids','tops-tunics-girls-clothing-kids','ethnicwear-girls-clothing-kids','floaters-girls-kids','lighting','bedsheets-bed-linen-bed-bath-home-decor','curtains-cushions-decor','carpets-rugs-decor','towels-bath-essentials-bed-bath-home-decor','quilts-blankets','briefs-men','boxers-men','nightsuits-men','chains-men','trains-kids','construction-blocks-kids','puzzles-kids','action-games-kids','board-games-kids','dining-serving','bottles-storage-kitchen-home','containers-storage-kitchen-home','tools-cutlery-kitchen-home','lunch-boxes-storage-kitchen-home','bras-lingerie-clothing-women','sterlisation-kids','blankets-quilts-kids','art-craft-kids','party-supplies-kids','casual-shoes-men','sports-shoes-men','formal-shoes-men','sandals-shoes-men','slippers-shoes-men','sandals-casual-shoes-women','heels-shoes-women','flats-shoes-women','sneakers-women','slippers-shoes-women','sweatshirts-winterwear-clothing-men','coats-winterwear-clothing-men','jackets-winterwear-clothing-women');
					if(!empty($category) && in_array($category,$iscomparablefalse)){
						$iscomparable="&comparable=false";
					}else{
						$iscomparable='';
					}
			if($action==='p'){
				if($category && $product){
					$productdetails=$this->data['products']=$this->call_api('product',"product=$product");
					$products=$this->call_api('categorysearch',"category=$category$iscomparable");
					$this->data['similarproduct']=$products['data'];
					$this->display ('frontend/ProductDetail');
				}elseif($category){
					$products=$this->call_api('categorysearch',"category=$category$iscomparable");
					$this->data['products']=$products['data'];
					$this->display ('frontend/Products');
				}else{
					$this->display ('frontend/Products');
				}
			}elseif($action==='Search'){
				if($searchc && $searchq && $searchc !='all'){
					$products=$this->call_api('categorysearch',"category=$searchc&product=$searchq");
					$this->data['products']=$products['data'];
					$this->display ('frontend/Products');
				}elseif($searchq){
					$products=$this->call_api('search',"product=$searchq");
					$this->data['products']=$products['data'];
					$this->display ('frontend/Products');
				}else{
					$this->display ('frontend/Products');
				}
			}else{
				$this->display ('frontend/Products');
			}
		}else{
			$this->display ('frontend/Products');
		}
	}
	
	public function call_api($action=false,$param=false){
		if($action & $param){
		$url = "http://api.datayuge.in/v9/compare/".$action.".php"."?".$param."&apikey=a8AA61ykbr5aSRmHQd1FMzg8kP9DmfNY";
		$response = file_get_contents($url);
		$array = json_decode($response,true);
		}else{
		$array='';
		}
		return $array;
	}
	
	public function getautosuggestproduct(){
		if($this->input->post())
		{
			$productkey=$this->input->post('placekey');
			$productName=$this->call_api('search',"product=$productkey");
			if(!empty($productName['data'])){
				foreach($productName['data'] as $place)
				{
					$placeID='';$placeName='';
					$placeID=$place['product_title'];$placeName=$place['product_title'];
					echo "<option  value=\"$placeID\">$placeName</option> ";
				}
	
			}
		}
	}
	
	public function fetchdata_compare_product($productid=false){
	 
		$productid=$this->input->post('productid');
		foreach($productid as $productID )
		{
			if(!empty($productID))
			{
				$pro_id=($productID);
				$pro_name=($productID);
				echo "<input class=\"form-control\" name=\"$pro_id\" value=\"$pro_name\">";
			}
		}
	}
	
	public function compare(){
		$product=$this->input->post();
		foreach($product as $key=>$products)
		{
			$compareproductinfo[]=$this->data['compareproduct'][]=$this->call_api('product',"product=$key");
			$this->data['productID'][]=$key;
		}
		if(!empty($compareproductinfo))
		{
			$this->parser->parse('frontend/Header',$this->data);
			$this->parser->parse('frontend/Compare',$this->data);
			$this->parser->parse('frontend/Footer',$this->data);
		}
		else{
			 redirect($_SERVER['HTTP_REFERER']);
		}
	} 
	
	public function Deals($category=false)
	{	
		$app=$this->input->get('app');
		$this->data['categories']=$categories=$this->Landingpage_model->get_categories();
		$this->data['topbrands']=$topbrand=$this->Landingpage_model->get_topbrand();
		$this->data['dealsgategorys']=$dealsgategorys=$this->Landingpage_model->get_dealsgategory();
		$this->data['deals']=$deals=$this->Landingpage_model->get_deals();
		$this->data['feature_deal']=$this->Landingpage_model->get_invetory_deal_data("feature_deal");
		$this->data['new_deal']=$this->Landingpage_model->get_invetory_deal_data("New_deal");
		if($category){
		$category=str_replace('_',' ',$category);
		
		$get_data=$this->input->get();
		$filters='';$page=$this->input->get('page');
		if($page){
			$filters="";
		}
		/* if(!empty($get_data)){
			foreach($get_data as $key=>$value){
				if($key !='page'){
				$filters.="$key=$value";
				$filters.="&";
				}
			}
		} */
		
			$limit = 50;
			$config['per_page'] = $limit;
			$config['page_query_string'] = TRUE;
			$config['query_string_segment'] = 'page';
			$config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
			$config['full_tag_close'] = '</ul>';
			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li ><a class="active" >';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['base_url'] = base_url() . "Landingpage/Deals/".$category.'.html';
			
			$total=$this->Landingpage_model->get_deals_counttotal($category);
			$this->data['totalresult']=$total[0]->total;
			$config['total_rows'] =$total[0]->total;
			$this->pagination->initialize($config);
			$this->data['pagination']=$this->pagination->create_links();
			
		$data=$this->data['dealsdata']=$this->Landingpage_model->get_deals_by_category($category,$limit,$page);
		if($app=='true'){
			echo json_encode($data);
		}		 
		}
		$this->parser->parse('frontend/Header',$this->data);
		$this->parser->parse('frontend/Deals',$this->data);
		$this->parser->parse('frontend/Footer',$this->data);
		//$this->display('frontend/Deals', $this->data);
	}
	
	public function Filter_product ()
	{	
		$str =$this->input->post('data');
		$id = $this->input->post('categories');
		$query='';$where='';$searchqry='';$where1='';		
		if(!empty($str))
		{
			foreach($str as $data)
			{
				$arr = explode('-', $data);
				if(!empty($arr[0] == 'productPrice'))
				{
					$a = $arr[1];									
				}
				elseif(!empty($arr[0]))
				{
					$b=$arr[1];	
					$c[]=$b;
				}				
			}				
		if(!empty($c))
		{
			$d = implode("','", $c);
		}
		if(!empty($a))
		{
			if (!empty($d))
			{ 		
				$where1 =("productPrice BETWEEN {$a} AND productAttributeValue IN ('$d') AND t8.categoriesID IN('$id')");					
			} 
			else 
			{
				$where1 =("productPrice BETWEEN {$a} AND t8.categoriesID IN('$id')");
			}						
		}
		elseif(!empty($d))
		{
			//$d= implode(' ',$c);
			$where =("(`productAttributeValue`) IN ('{$d}') AND t8.categoriesID IN('$id')");		 
		} 
		//print_r($where); die;
		$filterprodect = $this->Landingpage_model->get_products($query, $searchqry, $where, $where1);
		}	 
		//print_r($filterprodect); die;
		if (!empty($filterprodect))
		{
			$baseurl=base_url();
			foreach ($filterprodect as $filter)
			{		//	print_r($this->whislistproduct); die;
				echo"<div class=\"grid_1_of_4 images_1_of_4\">
				<div class=\"imageheightfix\">
					 <a href=\"".$filter->categoriesUrlKey."/".$filter->sb4kProductID."/".$filter->productsUrlKey.".html\"><img src=".$filter->imageName." alt=\"\" /></a>
					</div>
					<h2>".$filter->productName."</h2>
					 <p><span class=\"price\">Rs. ".$filter->productPrice."</span><br><img style=\"height:30px\" src=\"$baseurl/frontend/images/$filter->shop_image\"></p>					 
					 <div class=\"checkbox\">
					<label>
						<input type=\"checkbox\" value=\"$filter->productsID\" class=\"chkcount\" name=\"productid\" onchange=\"compare_product(this.value)\">Compare
					</label>
					<lable class=\"wishlist\">"; 
				 if(!empty($this->userinfos)){ if(in_array($filter->productsID,$this->whislistproduct)==false){ 
					 echo" <a href=\"$baseurl/User/AddToWishList/$filter->productsID.html\" class=\"fa fa-shopping-cart\"></a>";
					   } }else{ 
					  echo"<a href=\"$baseurl/Login.html?return=true\" class=\"fa fa-shopping-cart\"></a>";
					   }
				echo"</lable>					
					</div>					
				</div>"; 				
			}
		} 
		else{
			echo "NO Product Found ";
		}
	}
	
	function Flights()
	{	
		$flightFinalArray=array();
		$app=$this->input->get('app');
		if($this->input->get())
		{
			$from=$this->data['from']=$this->input->get('from');
			$to=$this->data['to']=$this->input->get('to');
			$departure=$this->data['departure']=$this->input->get('departure');
			$return=$this->data['return']=$this->input->get('return');
			$class=$this->data['class']=$this->input->get('class');
			$adults=$this->data['adult']=$this->input->get('adults');
			
			$url = 'http://partners.api.skyscanner.net/apiservices/pricing/v1.0?apiKey=se768816655086949164281628418167';
			$data = array('country'=>'IN', 'currency'=>'INR', 'locale'=>'en-GB','originplace'=>$from,'destinationplace'=>$to,'outbounddate'=>$departure,'adults'=>$adults,'inbounddate'=>$return,'cabinclass'=>$class,'groupPricing'=>true );
			
			$options = array(
				'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded",
					'method'  => 'POST',
					'accept'=>'application/json',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$result = file_get_contents($url, false, $context); 
			
			if(!empty($http_response_header[4])){
				$location=explode(' ',$http_response_header[4]);
				if(!empty($location[1])){
					$flightsDetailUrl=$location[1];
				}
			}
			
			if(!empty($flightsDetailUrl)){
				
				$getFlightsDetail = json_decode(file_get_contents("$flightsDetailUrl?apiKey=se388177191712562214854946236057"),true);
				//print_r($getFlightsDetail);die;
				if(!empty($getFlightsDetail['Legs'])){
					foreach($getFlightsDetail['Legs'] as $leg){
						
						$flight=$OriginStation=$DestinationStation=$Departure=$Arrival=$Duration=$Stops=$Directionality=$FlightNumbers=$Segments=$priceAndAgent='';
						
						foreach($leg['Carriers'] as $flights){
							
							$flightkeys = array_search($flights, array_column($getFlightsDetail['Carriers'], 'Id'));
							
											

							$flight[]=array('Name'=>$getFlightsDetail['Carriers'][$flightkeys]['Name'],
											'ImageUrl'=>$getFlightsDetail['Carriers'][$flightkeys]['ImageUrl'],
											'Code'=>$getFlightsDetail['Carriers'][$flightkeys]['Code'],
											'DisplayCode'=>$getFlightsDetail['Carriers'][$flightkeys]['DisplayCode']);
						}
						
						if(!empty($leg['OriginStation'])){
							
							$originstationkeys = array_search($leg['OriginStation'], array_column($getFlightsDetail['Places'], 'Id'));
							$OriginStation=array('Name'=>$getFlightsDetail['Places'][$originstationkeys]['Name'],'Code'=>$getFlightsDetail['Places'][$originstationkeys]['Code']);
						}
						
						if(!empty($leg['DestinationStation'])){
							
							$destinationkeys = array_search($leg['DestinationStation'], array_column($getFlightsDetail['Places'], 'Id'));
							$DestinationStation=array('Name'=>$getFlightsDetail['Places'][$destinationkeys]['Name'],'Code'=>$getFlightsDetail['Places'][$destinationkeys]['Code']);
						}
						
						if(!empty($leg['Departure']) && !empty($leg['Arrival'])){
							
							$depar=explode('T',$leg['Departure']);
							
							$arrive=explode('T',$leg['Arrival']);
							
							$Departure=$depar[0]." ".$depar[1];$Arrival=$arrive[0]." ".$arrive[1];
							
							$datetime1 = date_create($arrive[1]);
							$datetime2 = date_create($depar[1]);
							$interval = date_diff($datetime1, $datetime2);
							$Duration=$interval->format('%h H %i M %s S');
							
						}
						
						if(!empty($leg['Stops'])){
							$stopName='';
							foreach($leg['Stops'] as $Stop){
								
								$stopkeys = array_search($Stop, array_column($getFlightsDetail['Places'], 'Id'));
								$stopName[]=array('Name'=>$getFlightsDetail['Places'][$stopkeys]['Name'],'Code'=>$getFlightsDetail['Places'][$stopkeys]['Code']);
								
							}
							$Stops=array('stopNo'=>count($leg['Stops']),'stopName'=>$stopName);
						}else{
							$Stops=0;
						}
						
						if(!empty($leg['Directionality'])){
							$Directionality=$leg['Directionality'];
						}
						
						if(!empty($leg['FlightNumbers'])){
							
							foreach($leg['FlightNumbers'] as $FlightNumber){
								
									$FlightNumbers[]=array('FlightNumber'=>$FlightNumber['FlightNumber'],'CarrierId'=>$FlightNumber['CarrierId']);
							}
						}
						
						if(!empty($leg['SegmentIds'])){
							
							foreach($leg['SegmentIds'] as $SegmentId){
								
								$segmentkeys = array_search($SegmentId, array_column($getFlightsDetail['Segments'], 'Id'));
								
								$flightkeys = array_search($getFlightsDetail['Segments'][$segmentkeys]['Carrier'], array_column($getFlightsDetail['Carriers'], 'Id'));
							
								$Carrier=array('Name'=>$getFlightsDetail['Carriers'][$flightkeys]['Name'],
											'ImageUrl'=>$getFlightsDetail['Carriers'][$flightkeys]['ImageUrl'],
											'Code'=>$getFlightsDetail['Carriers'][$flightkeys]['Code'],
											'DisplayCode'=>$getFlightsDetail['Carriers'][$flightkeys]['DisplayCode']);
											
								$deparsegment=explode('T',$getFlightsDetail['Segments'][$segmentkeys]['DepartureDateTime']);
								
								$arrivesegment=explode('T',$getFlightsDetail['Segments'][$segmentkeys]['ArrivalDateTime']);
								
								$Departuresegment=$deparsegment[0]." ".$deparsegment[1];$Arrivalsegment=$arrivesegment[0]." ".$arrivesegment[1];
								
								$datetime1 = date_create($arrivesegment[1]);
								$datetime2 = date_create($deparsegment[1]);
								$interval = date_diff($datetime1, $datetime2);
								$Durationsegment=$interval->format('%h Hours %i Minute %s Seconds');
								
								$segmentoriginstationkeys = array_search($getFlightsDetail['Segments'][$segmentkeys]['OriginStation'], array_column($getFlightsDetail['Places'], 'Id'));
								$segmentOriginStation=array('Name'=>$getFlightsDetail['Places'][$segmentoriginstationkeys]['Name'],'Code'=>$getFlightsDetail['Places'][$segmentoriginstationkeys]['Code']);
								
								$segmentdestinationstationkeys = array_search($getFlightsDetail['Segments'][$segmentkeys]['DestinationStation'], array_column($getFlightsDetail['Places'], 'Id'));
								$segmentdestinationStation=array('Name'=>$getFlightsDetail['Places'][$segmentdestinationstationkeys]['Name'],'Code'=>$getFlightsDetail['Places'][$segmentdestinationstationkeys]['Code']);
							
								$Segments[]=array('OriginStation'=>$segmentOriginStation,
												  'DestinationStation'=>$segmentdestinationStation,
												  'Departure'=>$Departuresegment,
												  'Arrival'=>$Arrivalsegment,
												  'Carrier'=>$Carrier,
												  'Duration'=>$Durationsegment,
												  'FlightNumber'=>$getFlightsDetail['Segments'][$segmentkeys]['FlightNumber'],
												  'Directionality'=>$getFlightsDetail['Segments'][$segmentkeys]['Directionality']);
							}
							
						}
						
						if(!empty($leg['Id'])){
							
							$itinerarieskeys = array_search($leg['Id'], array_column($getFlightsDetail['Itineraries'], 'OutboundLegId'));
							
							foreach($getFlightsDetail['Itineraries'][$itinerarieskeys]['PricingOptions'] as $PricingOption){
								
								$agentkeys = array_search($PricingOption['Agents'][0], array_column($getFlightsDetail['Agents'], 'Id'));
								
								$priceAndAgent[]=array('AgentsName'=>$getFlightsDetail['Agents'][$agentkeys]['Name'],'AgentsImage'=>$getFlightsDetail['Agents'][$agentkeys]['ImageUrl'],'Price'=>$PricingOption['Price'],'DeeplinkUrl'=>$PricingOption['DeeplinkUrl']);
							}
							
						}
						
						
						
						
						$flightFinalArray[]=array('flight'=>$flight,'OriginStation'=>$OriginStation,'DestinationStation'=>$DestinationStation,'Departure'=>$Departure,
												  'Arrival'=>$Arrival,'Duration'=>$Duration,'Stops'=>$Stops,'Directionality'=>$Directionality,
												  'FlightNumbers'=>$FlightNumbers,'Segments'=>$Segments,'priceAndAgent'=>$priceAndAgent);
					}
				}
			}
			
		}
			if($app==true){
				echo json_encode($flightFinalArray);exit;
			}else{
			$this->data['flightFinalArray']=$flightFinalArray;
			}
			$this->data['categories']=$categories=$this->Landingpage_model->get_categories();
			$this->parser->parse('frontend/Header',$this->data);
			$this->parser->parse('frontend/Flights',$this->data);
			$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function notify()
	{
		if(!empty($_POST))
		{	
			$category=$this->input->post('category');		
			$story=$this->input->post('store');		
			$percent=$this->input->post('percent');		
			//$email=$this->input->post('email');
			if(!empty($this->userinfos))
			{
				$userID=$this->userinfos['userID'];		
				$query = $this->Landingpage_model->get_email(array('userID'=>$userID));		
				$email=$query[0]->userEmail;		
			}		
			if(!empty($category)){	
				$categorys = implode(",", $category);			
				($data['categoryName']=$categorys);
			}
			else{$data['categoryName']=' ';}		
			if(!empty($story)){		
				$storys=implode(",", $story);			
				($data['store']=$storys);
			}
			else{$data['store']='';}
			if(!empty($percent)){
				$percents=implode(",",$percent);			
				($data['percent']=$percents);
			}
			else{ $data['percent']='';}
			$table='s4k_notify';		
			if(!empty($email)){		
				$notify=$this->Landingpage_model->match_emailid($email);			
				if(!empty($notify)){			
					$notifyID=$notify[0]->notifyID;				
					$data['userID']=$userID;				
					$this->Landingpage_model->update_notify($table, $data, $notifyID);
					$this->session->set_flashdata('message_type', 'success');
					$this->session->set_flashdata('message', $this->config->item("Landingpage") . "You Have Subscribe Successfully!!");
					redirect($_SERVER['HTTP_REFERER']);	
				}
				else{
					$data['email']=$email;
					$data['userID']=$userID;
					$this->Landingpage_model->notify_insert($table,$data);
					$this->session->set_flashdata('message_type', 'success');
					$this->session->set_flashdata('message', $this->config->item("Landingpage") . "You Have Subscribe Successfully!!");
					redirect($_SERVER['HTTP_REFERER']);
				}
			}	
		}
		else{ 
			$this->session->set_flashdata('message_type', 'error');		
			$this->session->set_flashdata('message', $this->config->item("Landingpage") . "please checked atleast one checkbox");		
			redirect($_SERVER['HTTP_REFERER']);	
		}		
	}
	
	public function Match_emails()
	{
		$email = $this->input->post('data');
		if(!empty($email))
		{
			$query=$this->Landingpage_model->get_email(array('userEmail'=>$email));			
			if(!empty($query)){ foreach ($query as $data){
				echo "<input type=\"hidden\" class=\"form-control\" name=\"username\" value=\"$data->userFirstName\"/>"; //die;
			}			 }
			}			
	}
	
	public function match_otp()
	{
		$otp = $this->input->post('data');
		if(!empty($otp))
		{
			$query=$this->Landingpage_model->get_email(array('userPassword'=>$otp));			
			if(!empty($query)){ foreach ($query as $data){
				echo "<input type=\"hidden\" class=\"form-control\" name=\"username\" value=\"$data->userFirstName\"/>"; //die;
			}			 }
			}			
	}
	
	public function forgetpassword()
	{
		//print_r($_POST); die;
		$base=base_url ();
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$link = md5($email);
		$link1=	md5($username);
		$tempCode=substr(md5(microtime()),rand(0,26),5);
		$data=array('userPassword'=>$tempCode);	 
		$this->Landingpage_model->forgetpassword($data,$email);
		$subject="searchb4kharch:- Rest Password ";
		$message= "<html><body><h3>Hello: $username </h3><p>Please click in below link and reset your password....<br> Your OTP Code is:- <b>$tempCode</b> <br> Your reset password link is {$base}Login/forgetpassword/$link/$link1.html/ <br><br> if any query so please contact to info@searchb4kharch.com!!  </h3></p><br> </p></body></html>";
		$name='Searchb4kharch.com';
		date_default_timezone_set('Etc/UTC');
		require 'PHPMailer/PHPMailerAutoload.php';
		//Create a new PHPMailer instance
			$mail = new PHPMailer;			
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();			
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;			
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			
			//Set the hostname of the mail server
			$mail->Host = 'smtp.gmail.com';
			
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
			
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			
			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = 'searchkharch@gmail.com';
			
			//Password to use for SMTP authentication
			$mail->Password = 'navrang99';
			
			//Set who the message is to be sent from
			$mail->setFrom($email,$name);
			
			//Set an alternative reply-to address
			$mail->addReplyTo('searchkharch@gmail.com', $name);
			
			//Set who the message is to be sent to
			$mail->addAddress($email);
			
			//Set the subject line
			$mail->Subject = $subject;
			
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($message);
			
			//Replace the plain text body with one created manually
			$mail->AltBody = 'This is a plain-text message body';
			
			//Attach an image file
			//$mail->addAttachment($uploadfile,$filename);
			
			//send the message, check for errors
			
			
			if (!$mail->send())
			{
				print "We encountered an error sending your mail";
					
			}
			else
			{
					?><script> alert('Kindly check your email for your OTP code !!!!');</script><?php
					redirect($_SERVER['HTTP_REFERER'],"refresh");
			}	
	}
	
	public function Aboutus()
	{
		$this->data['categories']=$categories=$this->Landingpage_model->get_categories();
		$this->parser->parse('frontend/Header',$this->data);
		$this->parser->parse('frontend/Aboutus',$this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function Contactus()
	{
		$this->data['categories']=$categories=$this->Landingpage_model->get_categories();
		$this->parser->parse('frontend/Header',$this->data);
		$this->parser->parse('frontend/Contactus',$this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function contactus_mail()
	{	
		$name1=$this->input->post('name');
		$email=$this->input->post('email');
		$sharetext=$this->input->post('sharetaxt');
		$subject="searchb4kharch:-Contact us";
		$message= "<html><body><h3>Name:- $name1 </h3><p>Email:- $email<br> Share massages:- $sharetext  <br> </p></body></html>";
		$name='Searchb4kharch.com';
		date_default_timezone_set('Etc/UTC');
		require 'PHPMailer/PHPMailerAutoload.php';
		//Create a new PHPMailer instance
			$mail = new PHPMailer;			
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();			
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;			
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			
			//Set the hostname of the mail server
			$mail->Host = 'smtp.gmail.com';
			
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
			
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			
			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = 'searchkharch@gmail.com';
			
			//Password to use for SMTP authentication
			$mail->Password = 'navrang99';
			
			//Set who the message is to be sent from
			$mail->setFrom('searchkharch@gmail.com',$name);
			
			//Set an alternative reply-to address
			$mail->addReplyTo('searchkharch@gmail.com', $name);
			
			//Set who the message is to be sent to
			$mail->addAddress('searchkharch@gmail.com');
			
			//Set the subject line
			$mail->Subject = $subject;
			
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($message);
			
			//Replace the plain text body with one created manually
			$mail->AltBody = 'This is a plain-text message body';
			
			//Attach an image file
			//$mail->addAttachment($uploadfile,$filename);
			
			//send the message, check for errors
			
			
			if (!$mail->send())
			{
				print "We encountered an error sending your mail";
					
			}
			else
			{
				$this->session->set_flashdata('message_type', 'success');		
				$this->session->set_flashdata('message', $this->config->item("Landingpage") . "Your mail sent successfully!!!!");		
				redirect($_SERVER['HTTP_REFERER']);					 
			}	
	}
}