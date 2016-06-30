<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lostfound_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getTotNumOfLostItems(){
		$query = $this->db->get_where("Report", array("reportType"=>"lost"));

		return $query->num_rows();
	}

	public function getTotNumOfFoundItems(){
		$query = $this->db->get_where("Report", array("reportType"=>"found"));

		return $query->num_rows();
	}

	public function getItemsByName(){
		$reportType = $this->input->post('reportType');
		$itemName = $this->input->post('itemName');
		$nameLength = strlen($itemName); 

		$query = $this->db->query("SELECT * FROM `Item` AS I INNER JOIN `Report` AS R ON I.idItem = R.itemId WHERE R.reportType = '$reportType'");

		if($query->num_rows() >0){
			$result = array();
			$ret = $query->result();
			foreach($ret as $row){
				$iName = $row->itemName;
				$length = similar_text($itemName,$iName);
				
				if($length >= ($nameLength/2)){
					array_push($result, $row);
				}
			}
			return $result;
		}else{
			return NULL;
		}
	}
	
	public function getReporter($itemId, $searchType){
		$query = $this->db->query("SELECT * FROM `User` AS U INNER JOIN `Report` AS R ON U.idUser = R.userId WHERE R.itemId = '$itemId' AND R.reportType = '$searchType'");
		
		if($query->num_rows() >0){
			$ret = $query->result();
			return $ret[0];
		}else{
			return NULL;
		}
	}
	
	public function getItemById($id){
		$query = $this->db->get_where("Item", array("idItem"=>$id));
		
		if($query->num_rows() >0){
			$ret = $query->result();
			return $ret[0];
		}else{
			return NULL;
		}
	}
	
	public function getUserAddress($addressId){
		$query = $this->db->get_where("Address", array("idAddress"=>$addressId));
	
		if($query->num_rows() >0){
			$ret = $query->result();
			return $ret[0];
		}else{
			return NULL;
		}
	}

	public function getItemForAdvanced(){
		$reportType = $this->input->post('reportType');
		$categories = $this->input->post('categories');
		$subcategories = $this->input->post('subcategories');
		$itemname = $this->input->post('itemname');
		$modelnum = $this->input->post('modelnum');
		$serialNum = $this->input->post('serialNum');
		$itemcolor = $this->input->post('itemcolor');
		$streetname = $this->input->post('streetname');
		$housenumber = $this->input->post('houseNumber');
		$city = $this->input->post('city');
		
// 		$this->db->select('idSubCategory')->from('subcategory')->where('subCategoryName', $subcategories);
// 		$query = $this->db->get();
		
// 		if ($query->num_rows() === 1){
// 			foreach ($query->result() as $row){
// 				$subcategoriesId = $row->userId;
// 			}
// 		}

		$query = $this->db->query("SELECT * FROM `Item` AS I INNER JOIN `Report` AS R ON I.idItem = R.itemId
				WHERE I.itemSubCategory = '$subcategories' AND
				I.itemName = '$itemname' AND
				I.itemModel = '$modelnum' AND
				I.itemSerialNumber = '$serialNum' AND
				I.ItemColor = '$itemcolor' AND
				R.reportType = '$reportType'");

		if($query->num_rows() >0){
			return $query->result();
		}else{
			return NULL;
		}

	}

	public function registerUser($imgdata){
		//$fileToUpload = file_get_contents($imgdata['full_path']);//get the content of the image using its path
// 		if(($imgdata = file_get_contents($imgdata['full_path'])) === false){//get the content of the image using its path
// 			$imgdata = null;
// 		}
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$birthdate = $this->input->post('birthdate');
		$genderType = $this->input->post('genderType');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$streetName = $this->input->post('streetName');
		$houseNumber = $this->input->post('houseNumber');
		$postalCode = $this->input->post('postalCode');
		$city = $this->input->post('city');
		$phoneNumber = $this->input->post('phoneNumber');
		$email = $this->input->post('email');

		$sql = "INSERT INTO Address (streetName, houseNumber, postalCode, city, phoneNumber, email)
		VALUES (".$this->db->escape($streetName).",
		".$this->db->escape($houseNumber).",
		".$this->db->escape($postalCode).",
		".$this->db->escape($city).",
		'".$phoneNumber."','".$email."')";

		$result = $this->db->query($sql);

		if($this->db->affected_rows() === 1){
			$addressId = $this->db->insert_id();

			$data = array(
					'firstName' => $firstname,
					'lastName' => $lastname,
					'birthDate' => $birthdate,
					'gender' => $genderType,
					'userPic' => $imgdata,
					'addressId' => $addressId,
			);

			$result = $this->db->insert('User', $data);
			if($this->db->affected_rows() === 1){
				$userId = $this->db->insert_id();
					
				$sql = "INSERT INTO Credential (username, password, userId)
				VALUES (".$this->db->escape($username).",
				".$this->db->escape($password).",
				'".$userId."')";
					
				$result = $this->db->query($sql);
				if($this->db->affected_rows() === 1){
					$this->session->set_userdata('user_name', $username);
					$this->session->set_userdata('user_id', $userId);
					return true;
				}else{
					return false;
				}
			}else {
				return false;
			}
		}else{
			return false;
		}

	}

	public function reportItem($imgdata){
		$itemId = null;
		$addressId = null;
		$userId = $this->session->userdata('user_id');
		//$subcategoriesId = null;

		//$fileToUpload = file_get_contents($imgdata['full_path']);//get the content of the image using its path
		/* if(($imgdata = file_get_contents($imgdata['full_path'])) === false){//get the content of the image using its path
			$imgdata = null;
		} */

		$reportType = $this->input->post('reportType');
		$categories = $this->input->post('categories');
		$subcategories = $this->input->post('subcategories');
		$itemname = $this->input->post('itemname');
		$modelnum = $this->input->post('modelnum');
		$serialNum = $this->input->post('serialNum');
		$itemcolor = $this->input->post('itemcolor');
		$description = $this->input->post('description');
		$streetname = $this->input->post('streetname');
		$housenumber = $this->input->post('houseNumber');
		$city = $this->input->post('city');

// 		$this->db->select('idSubCategory')->from('subcategory')->where('subCategoryName', $subcategories);
// 		$query = $this->db->get();
		
// 		if ($query->num_rows() === 1){
// 			foreach ($query->result() as $row){
// 				$subcategoriesId = $row->userId;
// 			}
// 		}


		$data = array(
				'itemSubCategory' => $subcategories,
				'itemName' => $itemname,
				'itemModel' => $modelnum,
				'itemSerialNumber' => $serialNum,
				'ItemColor' => $itemcolor,
				'itemPic' => $imgdata,
				'itemDescription' => $description,
		);

		$result = $this->db->insert('Item', $data);

		if($this->db->affected_rows() === 1){
				
			$itemId = $this->db->insert_id();
				
			$data = array(
					'streetName' => $streetname,
					'houseNumber' => $housenumber,
					'city' => $city,
			);
				
			$result = $this->db->insert('Address', $data);
				
			if($this->db->affected_rows() === 1){
				$addressId = $this->db->insert_id();
				$today = date('Y-m-d');
				$repStatus = 'open';

				$data = array(
						'reportType' => $reportType,
						'reportDate' => $today,
						'itemId' => $itemId,
						'foundOrLostAddress' => $addressId,
						'userId' => $userId,
						'reportStatus' => $repStatus,
				);

				$result = $this->db->insert('Report', $data);
				if($this->db->affected_rows() === 1){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getAllCategories(){
		$query = $this->db->get('category');

		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return null;
		}
	}

	public function getAllSubCategories($catergoryId){
		$query = $this->db->get_where("subcategory", array("categoryId"=>$catergoryId));

		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return null;
		}
	}

	public function checkLogin(){
		$loginusername = $this->input->post('loginusername');
		$loginpassword = $this->input->post('loginpassword');

		$query = $this->db->get_where("Credential", array("username"=>$loginusername, "password"=>$loginpassword));

		if ($query->num_rows() === 1){
			$userId = '';
			foreach ($query->result() as $row){
				$userId = $row->userId;
			}
				
			$this->session->set_userdata('user_name', $loginusername);
			$this->session->set_userdata('user_id', $userId);
			return true;
		}else{
			return false;
		}
	}
	
	public function getItemImage($id){
		$query = $this->db->get_where("Item", array("idItem"=>$id));
		$result = $query->result();
		
		header("Content-type: image/jpeg");
		echo $result->itemPic;
	}
	
	public function passwordRecovery(){
		$email = $this->input->post('email');
		
		$query = $this->db->get_where("Address", array("email"=>$email));
		
		if($query->num_rows() >0){
			$ret = $query->result();
			$idAddress = $ret[0]->idAddress;
			
			$query = $this->db->get_where("User", array("addressId"=>$idAddress));
			
			if($query->num_rows() >0){
				$ret = $query->result();
				$idUser = $ret[0]->idUser;
				
				$query = $this->db->get_where("Credential", array("userId"=>$idUser));
				
				if($query->num_rows() >0){
					$ret = $query->result();
					$username = $ret[0]->username;
					$password = $ret[0]->password;
					
					$message = 'your credential for LostAndFound Service\r\n'.'Username = '.$username.'\r\n'.'Password = '.$password;
					$config = Array(
							'protocol' => 'smtp',
							'smtp_host' => 'ssl://smtp.googlemail.com',
							'smtp_port' => 465,
							'smtp_user' => 'mhretlostfound@gmail.com',
							'smtp_pass' => 'mhretlostfound1?',
							'mailtype'  => 'html',
							'charset'   => 'iso-8859-1'
					);
					
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					
					$this->email->from('mhretlostfound@gmail.com', 'LostAndFound Service');
					$this->email->to($email);		
					$this->email->subject('LostAndFound Service Password Recovery');
					$this->email->message($message);
					
					/* if($this->email->send()){
						echo 'sent';
						return 1;
					}else{
						echo 'not sent';
						return 0;
					} */
					return 0;
				}else{
					return 0;
				}
			}else{
				return 0;
			}
		}else{
			return 0;
		}
		
	}
}