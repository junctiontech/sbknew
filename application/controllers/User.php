<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Controller for User Functionality */
class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		if($this->input->get('app')!=true){
		if (!$this->session->userdata('searchb4kharch')){ $this->session->set_flashdata('category_error_login', " Your Session Is Expired!! Please Login Again. "); redirect("Landingpage");}}
		$this->userinfos=$this->data['userinfos']=$this->session->userdata('searchb4kharch');
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/User_model');
		$this->load->model('frontend/Landingpage_model');
		$this->load->library('form_validation');
		$this->data['base_url']=base_url();
		$wishlist=$this->User_model->get_wishlistcount('s4k_user_wishlist',array('userID'=>$this->userinfos['userID'],'Status'=>'Active'));
		$this->data['whislist']=count($wishlist);
		foreach($wishlist as $wishlists){
		$this->data['whislistproduct'][]=$wishlists->productID;
		}
	}
	
	public function display($template_file){
		$this->parser->parse('frontend/Header',$this->data);
		$this->load->view($template_file, $this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function dashboard()
	{	
		$userID='';
		if(!empty($this->userinfos['userID'])){
		$userID=$this->userinfos['userID'];
		}
		$this->data['searchdata']=$this->User_model->getdata('s4k_share_products',array('userID'=>$userID));
		$coupondata=$this->User_model->getdata('s4k_coupon',array('userID'=>$userID));
		$this->data['coupondata']=count($coupondata);
		$this->parser->parse('frontend/Header',$this->data);
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/Dashboard',$this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	public function personal_info($id=false)
	{	
		$data=$this->data['userdata']=$this->Login_model->fetch($id);
		$this->parser->parse('frontend/Header',$this->data);
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/info',$this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function AddToWishList($productID=false)
	{			//	print_r(json_encode($_POST['user_id'])); echo "<br>";
	 			//	print_r(json_encode($_GET)); die;
		$app=$this->input->get('app');
		$user_id=$this->input->post('user_id');
		if(!empty($user_id)){
			$userID=$user_id;	
		}else{
			$userID=$this->userinfos['userID'];	
		}	
		if((!empty($productID) && !empty($userID)) || ($app==true && !empty($userID))){
			$data=array('userID'=>$userID,'productID'=>$productID,'Status'=>'Active');
			$this->User_model->addwishlist('s4k_user_wishlist',$data);
			$message='success';
		}else{
			$message='error';
		}
		if($app ==true){
			echo json_encode(array('message'=>$message));exit;
		}else{
			header('Location: ' . $_SERVER['HTTP_REFERER']);
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
	
	public function Mywishlist ()
	{
		$user_id=$this->input->post('user_id');
		if(!empty($user_id)){
			$userID=$user_id;	
		}else{
			$userID=$this->userinfos['userID'];	
		}		
			$productsdata=$this->User_model->getuserwishlist($userID);
			if(!empty($productsdata)){
				foreach($productsdata as $productdata){
					$apiproductdetails='';
					$product=$productdata->productID;$userWishListID=$productdata->userWishListID;
					$apiproductdetails=$this->call_api('product',"product=$product");
					if(!empty($apiproductdetails)){
							if(!empty($apiproductdetails['data'])){
								$productprice=number_format(min(array_column($apiproductdetails['data'] , 'product_price_after')),2);
								$shopkey=array_search(min(array_column($apiproductdetails['data'] , 'product_price_after')),array_column($apiproductdetails['data'] , 'product_price_after'));
								$shopname=$apiproductdetails['data'][$shopkey]['product_store'];
								$shopurl=$apiproductdetails['data'][$shopkey]['product_store_url'];
								}else{
									$productprice="out of stock";
									$shopurl=$shopname='';
									}
							$productwishlist[]=array('productID'=>$product,
													 'userWishListID'=>$userWishListID,
													 'imageName'=>isset($apiproductdetails['productDetails'][0]['product_images_single'][0]['product_image_single'])?$apiproductdetails['productDetails'][0]['product_images_single'][0]['product_image_single']:'',
													 'productName'=>isset($apiproductdetails['productDetails'][0]['product_name'])?$apiproductdetails['productDetails'][0]['product_name']:'',
													 'productPrice'=>$productprice,
													 'productShopUrl'=>$shopurl,
													 'shopName'=>$shopname);
					}else{
							$productwishlist=array();
					}
				}
			}else{
				$productwishlist=array();
			}
			
			$this->data['userwishlist'] =$userwishlist= $productwishlist;
			
				if(!empty($user_id)){
						echo json_encode($userwishlist);
					}else
					{
						if($this->input->get('app')!=true){
						$this->parser->parse('frontend/Header',$this->data);		
						$this->parser->parse('frontend/Leftheader',$this->data);
						$this->parser->parse('frontend/Mywishlist', $this->data);
						$this->parser->parse('frontend/Footer',$this->data);
						}
					}
	}
	
	public function delete_wishlist($userWishListID=false)
	{
		$app=$this->input->get('app');
		$table = 's4k_user_wishlist';
		$this->User_model->delete($table,array('userWishListID' =>$userWishListID));
		if($app==true){
			echo json_encode(array('message'=>'success'));
		}else{
		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message', $this->config->item("User") . "You've successfully deleted product from your wishlist.");
		redirect ('User/Mywishlist');
		}
	}	
	public function PersonalInformation()
	{
		$user_id=$this->input->post('user_id');
		if(!empty($user_id)){
			$userID=$user_id;	
		}else{
			$userID=$this->userinfos['userID'];	
		}
			
				$this->data['personal']=$personal=$this->User_model->PersonalInformation($userID);
			if(!empty($user_id)){
				echo json_encode($personal);
			}else{
				if($this->input->get('app')!=true){
				$this->parser->parse('frontend/Header',$this->data);		
				$this->parser->parse('frontend/Leftheader',$this->data);
				$this->parser->parse('frontend/PersonalInformation', $this->data);
				$this->parser->parse('frontend/Footer',$this->data);
				}
			}
	}
	public function userprofileupdate ()
	{		
		$userID = $this->input->post('userID');
		$oldvalue = $this->input->post('oldvalue');	
			if($_FILES['userProfileImage']['name']!='')
					{
						$data['image_z1']= $_FILES['userProfileImage']['name'];   
						$userProfileImage=sha1($_FILES['userProfileImage']['name']).time().rand(0, 9);
						if(!empty($_FILES['userProfileImage']['name']))
							{
								$config =  array(
												'upload_path'	  => './uploads/images/userProfileImage/',
												'file_name'       => $userProfileImage,
												'allowed_types'   => "gif|jpg|png|jpeg|JPG|JPEG|PNG|JPG",
												'overwrite'       => true,
												);
								
								$this->upload->initialize($config);
								$this->load->library('upload');
   
									if($this->upload->do_upload("userProfileImage"))
										{
											$upload_data = $this->upload->data();
											$userProfileImage=$upload_data['file_name'];
   				
										}
									else
										{
											$this->upload->display_errors()."file upload failed";
											$image    ="";
										}
						}
					}
		
		$data = array(
						'userFirstName' => $this->input->post('userFirstName'),
						'userLastName' => $this->input->post('userLastName'),
						'userEmail' => $this->input->post('userEmail'),
						'userGender' => $this->input->post('userGender'),
						'userDOB' => $this->input->post('userDOB'),
						'userMobileNo' => $this->input->post('userMobileNo'),
						'userAddress' => $this->input->post('userAddress'),
					 );
		$table = 's4k_user';
		if (!empty($userID))
			{
				if (!empty($userProfileImage))								
							{ 
								($data['userProfileImage'] = $userProfileImage);
									 $originalPath='uploads/images/userProfileImage/'.$oldvalue;							
										{ 
											unlink($originalPath);				
										}	
							}
				
				$this->User_model->userprofileupdate($table,$data, $userID);
				$this->session->set_flashdata('message_type', 'success');
				$this->session->set_flashdata('message', $this->config->item("User") . "Successfully Update Profile Details!!");
				redirect ('User/PersonalInformation');
			}
	}
	public function Changepassword()
	{
		$this->parser->parse('frontend/Header',$this->data);		
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/Changepassword', $this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	public function updatepssword ()
	{
		$userID=$this->userinfos['userID'];
		$pass = $this->input->post('pass');
		$password = $this->input->post('password');
		$pass2 = md5($pass);

		$pass3 = $this->User_model->getpassword($userID);
		if (!empty($pass3[0]->userPassword)){

			if($pass3[0]->userPassword == $pass2)
				{
					$data=array('userPassword'=>md5($password));
					$table='s4k_user';
					$this->User_model->updatepssword($table,$data,$userID);
					$this->session->set_flashdata('message_type', 'success');
					$this->session->set_flashdata('message', $this->config->item("User") . "Congratulations!! Your password is changed successfully.");
					redirect ('User/Changepassword');
				}
				else
				{
					$this->session->set_flashdata('message_type', 'error');
					$this->session->set_flashdata('message', $this->config->item("User") . "You've enter an invalid password, please try again.");
					redirect ('User/Changepassword');
				}
		}
	}
	public function DeactiveteAccount ()
	{
		$userID=$this->userinfos['userID'];		 
		$this->User_model->delete('s4k_user',array ('userID' => $userID));
		$this->User_model->delete('s4k_notify',array ('userID' => $userID));
		$this->session->unset_userdata('searchb4kharch');
        $this->session->sess_destroy();
		$this->session->set_flashdata('message_type', 'error');
		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message', $this->config->item("index") . "Logout Successfully!! Thank You..");
		redirect("Login");

	}	
	public function Notify()
	{
		$userID=$this->userinfos['userID'];
		//print_r($userID);die;
		$notify=$this->data['usernotify']=$this->User_model->get_notify($userID);
		//	print_r($notify);die;
		$this->parser->parse('frontend/Header',$this->data);		
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/Notify', $this->data);
		$this->parser->parse('frontend/Footer',$this->data);		
	}
	public function Delect_usernotify($notifyID=false)
	{
		$this->User_model->delete('s4k_notify', array ('notifyID' =>$notifyID));	
		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message', $this->config->item("User") . "You've successfully deleted Notify from your Notify.");
		redirect ('User/Mywishlist');
	}
	
	public function Search ()
	{	
		$userID='';
		if(!empty($this->userinfos['userID'])){
		$userID=$this->userinfos['userID'];
		}
		$this->data['searchdata']=$this->User_model->getdata('s4k_share_products',array('userID'=>$userID));
		$this->parser->parse('frontend/Header',$this->data);		
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/Search', $this->data);
		$this->parser->parse('frontend/Footer',$this->data);			
	}
	
	public function Coupon ()
	{
		$userID='';
		if(!empty($this->userinfos['userID'])){
		$userID=$this->userinfos['userID'];
		}
		$this->data['coupondata']=$this->User_model->getdata('s4k_coupon',array('userID'=>$userID));
		$this->parser->parse('frontend/Header',$this->data);		
		$this->parser->parse('frontend/Leftheader',$this->data);
		$this->parser->parse('frontend/Coupon', $this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function Shareproduct()
	{
		if($this->input->get('app')==true){
			$userID=$this->input->post('userID');
			if($userID){
				$sharedatas=$this->User_model->getsharedata('s4k_share_products',array('userID'=>$userID));
				if(!empty($sharedatas)){
					if(strtotime(date('Y-m-d'))>strtotime($sharedatas[0]->currentDate)){
						$updatedata=array('todaysCount'=>1,'totalCount'=>$sharedatas[0]->totalCount+1,'currentDate'=>date('Y-m-d'));
						$filter=array('userID'=>$userID);
						$this->User_model->insert('s4k_share_products',$updatedata,$filter);
						echo json_encode(array('code'=>200,'message'=>'share successfully','todaysCount'=>1,'totalCount'=>$sharedatas[0]->totalCount+1));exit;
					}elseif(strtotime(date('Y-m-d'))==strtotime($sharedatas[0]->currentDate)){
						if($sharedatas[0]->todaysCount<10){
						$updatedata=array('todaysCount'=>$sharedatas[0]->todaysCount+1,'totalCount'=>$sharedatas[0]->totalCount+1);
						}elseif($sharedatas[0]->todaysCount+1>=10){
							$updatedata=array('totalCount'=>$sharedatas[0]->totalCount+1);
						}
						$filter=array('userID'=>$userID);
						$this->User_model->insert('s4k_share_products',$updatedata,$filter);
						if(10==$sharedatas[0]->todaysCount+1){
							$userData=$this->User_model->get_user_email($userID);
							if(!empty($userData)){
								$token=md5(uniqid(rand(), true));
								$expiryDate= date('Y-m-d', strtotime("+7 days"));
								$userTokenData=array('userID'=>$userID,'Token'=>$token,'Status'=>'Active','ExpireOn'=>$expiryDate);
								$this->User_model->insert('s4k_coupon',$userTokenData);
												
									$userFirstName=	$userData[0]->userFirstName;
									$userEmail=$userData[0]->userEmail;
								$base=base_url ();				
								$subject="searchb4kharch:- COUPON";				
						$message= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
		<head><META http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
		<body>
<div style="background:#f6f8fa">	
	<table cellpadding="0" cellspacing="0" style="background:#fff;max-width:600px;width:100%;margin:0px auto;font-family:&#39;Open Sans&#39;,sans-serif;color:#333">
		<tr>
			<td style="background:#670099;height:20px"></td>
		</tr>
		<tr>
			<td align="center" style="padding:10px">
				<table cellpadding="10">
					<tr>
						<td><img src="http://www.searchb4kharch.com/frontend/images/pngtransparent%20(2).png" width="200px"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td align="center">
							<h3 style="margin:10px 0;color:#404040;font-weight:400"><b>“Winners never quits, coupners never loose”</b></h3>
						</td>
					</tr>
					<tr>
						<td  align="center" style="padding:0 10px;margin:0;font-size:15px;color:#333">
							<p>
								Hello '.$userFirstName.',
							</p>
							<p>
								Great news!!
							</p>
							<p>
								You got the reward for doing nothing, really,
							</p>
							<p>
								it was as simple & easy as doing nothing.
							</p>
							<p>
								On a serious note, we really appreciate you for
							</p>
							<p>
							spending your valuable time
							</p>
							<p>for this free coupon.</p>
							<p>To redeem, login to your account or goto your app.</p>
							<p>Or</p>
							<p>click this link:- '.$base.'Landingpage/coupon/'.$token.'/redeem.html</p>
							<p>Valid till: '.$expiryDate.'</p>
							<p>
								Search through android app to earn Rupoints..
							</p>
							<p>
								<b>Don’t be Kharcheela, be Searcheela..</b>
							</p>

						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" style="height:10px"></td>
		</tr>
		<tr>
			<td align="center">
				<table cellpadding="10">
					<tr>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/Landingpage/Flights.html" target="_blank"><img src="https://s4.postimg.org/6xfi8ldal/white_flight_1.png" width="70%" style="padding-top:20px"></a>
							</div>
						</td>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/Hotel.html" target="_blank"><img src="https://s4.postimg.org/78wylctql/sleepicon8.png" width="70%" style="padding-top:20px"></a>
							</div>
						</td>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/" target="_blank"><img src="https://s4.postimg.org/pzyvviob1/products.png" width="70%" style="padding-top:20px"></a>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center">
				<table cellpadding="10" style="border-bottom:1px solid #ccc">
					<tr>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/" target="_blank"><img src="https://s4.postimg.org/gblfsdthp/foodbook.png" width="50%" style="padding-top:30px"></a>
							</div>
						</td>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/Landingpage/Deals" target="_blank"><img src="https://s4.postimg.org/95p3c6v0t/deals_2.pngDEALS" width="60%" style="padding-top:25px"></a>
							</div>
						</td>
						<td>
							<div style="background:#670099;border-radius:100%;width:120px;height:120px;text-align:center;line-height:120px;border:5px solid #eee;color:#fff">
								<a href="http://www.searchb4kharch.com/Landingpage/Product/Accessories.html" target="_blank"><img src="https://s4.postimg.org/iipogayrx/others.pngOTHERS" width="70%" style="padding-top:20px"></a>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" style="color:#333;font-size:13px">
				
											<p>
								Thanks & Regards,
							</p>
							<p>
								Team SBK
							</p>
							
							<p style="padding:10px;margin:10px">
								For any support: <a style="font-style:italic;color:#333;text-decoration:none" href="mailto:info@searchb4kharch.com" target="_blank">info@searchb4kharch.com</a>
							</p>
							
			</td>
		</tr>
		<tr>
			<td align="center" style="height:10px"></td>
		</tr>
		<tr>
			<td>
				<table s{$base}Login/forgetpassword/$link/$link1.html/tyle="width:100%;background:#670099;padding:5px 10px">
					<tr>
						<td align="left" style="color:#fff">
							<a style="color:#fff;text-decoration:none" href="'.$base.'Landingpage/Aboutus.html">About us</a> |
							<a style="color:#fff;text-decoration:none" href="'.$base.'Landingpage/Contactus.html">Contact us</a>
						</td>
						<td align="left">
							
						</td>
						<td align="right">
							<a style="display:inline-block;vertical-align:middle">
								<img style="width:30px;vertical-align:middle" src="https://s4.postimg.org/a6pc1bc0d/andriodico.png">
							</a>
							<a style="display:inline-block;vertical-align:middle" href="https://www.facebook.com/SEARCHB4KHARCH/" target="_blank">
								<img style="width:30px;vertical-align:middle" src="https://s4.postimg.org/fxfif1k0d/fbico.png">
							</a>
							<a style="display:inline-block;vertical-align:middle" href="https://plus.google.com/+Searchb4kharch" target="_blank">
								<img style="width:30px;vertical-align:middle" src="https://s4.postimg.org/3lh7faljh/gmailico.png">
							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div></body></html>';				
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
						$mail->setFrom('searchkharch@gmail.com','Searcheela');			
						//Set an alternative reply-to address			
						$mail->addReplyTo('searchkharch@gmail.com','Searcheela');			
						//Set who the message is to be sent to			
						$mail->addAddress($userEmail);			
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
						
							}
							echo json_encode(array('code'=>200,'message'=>'congratulation you have eligible to redeem your recharge','todaysCount'=>$sharedatas[0]->todaysCount+1,'totalCount'=>$sharedatas[0]->totalCount+1));
							exit;
						}else{
							if($sharedatas[0]->todaysCount==10){
								echo json_encode(array('code'=>200,'message'=>'share successfully','todaysCount'=>$sharedatas[0]->todaysCount,'totalCount'=>$sharedatas[0]->totalCount+1));exit;
							}else{
							echo json_encode(array('code'=>200,'message'=>'share successfully','todaysCount'=>$sharedatas[0]->todaysCount+1,'totalCount'=>$sharedatas[0]->totalCount+1));exit;
							}
						}
					}else{
						echo json_encode(array('code'=>500,'message'=>'Invalid request'));exit;
					}
				}else{
					$data=array('userID'=>$userID,'todaysCount'=>1,'totalCount'=>1,'currentDate'=>date('Y-m-d'));
					$this->User_model->insert('s4k_share_products',$data);
					echo json_encode(array('code'=>200,'message'=>'share successfully','todaysCount'=>1,'totalCount'=>1));exit;
				}
			}else{
				echo json_encode(array('code'=>500,'message'=>'Invalid user not found'));exit;
			}
		}else{
			redirect(base_url());
		}
		
	}
	
}