<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lost_found extends CI_Controller {

	public function index()
	{
		//print_r($this->session->all_userdata());
		$this->load->model("lostfound_model", "model");
		$numLostItems = $this->model->getTotNumOfLostItems();
		$numFoundItems = $this->model->getTotNumOfFoundItems();
		$data = array();
		$data['numLostItems'] = $numLostItems;
		$data['numFoundItems'] = $numFoundItems;
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
			$this->load->view('home', $data);
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('home', $data);
		}
	}

	public function register()
	{
		
		$this->session->sess_destroy();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'Frist Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[Credential.username]xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|xss_clean');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phoneNumber', 'Phone Number', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[Address.email]|xss_clean');
		
		if ($this->form_validation->run() === FALSE){
			//echo "try";
			$this->load->view('register');
		}else{
			$data = array();
			$this->load->model("lostfound_model", "model");


			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			/* $config['max_size']  = '100';
			$config['max_width'] = '1024';
			$config['max_height'] = '768'; */
			$new_name = $this->input->post('username').uniqid(rand());
			$config['file_name'] = $new_name;

			$this->load->library('upload', $config);
			$this->upload->do_upload('fileToUpload');//upload the file to the above mentioned path
			$file_data = $this->upload->data();
			$image_path = $file_data['file_name'];
			$result = $this->model->registerUser($image_path);
			if($result === true){
				$data['success'] = true;
			}else{
				$data['success'] = false;
			}
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('registSuccessful', $data);
		}

	}

	public function login($repMsg='')
	{
		if(!$this->session->userdata('user_name')){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('loginusername', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('loginpassword', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() === FALSE){
				$data = array();
				$data['login_error'] = '';
				$data['repMsg'] = $repMsg;
				$this->load->view('login', $data);
			}else{
				//print_r($this->session->all_userdata());
				$this->load->model("lostfound_model", "model");
				$numLostItems = $this->model->getTotNumOfLostItems();
				$numFoundItems = $this->model->getTotNumOfFoundItems();
				$loginResult = $this->model->checkLogin();
					
				$data = array();
				$data['numLostItems'] = $numLostItems;
				$data['numFoundItems'] = $numFoundItems;
					
				if(!$loginResult){
					$data['login_error'] = 'Incorrect Username or Password';
					$data['welcome_msg'] = false;
					$data['repMsg'] = $repMsg;
					$this->load->view('login', $data);
				}else{
					$data['welcome_msg'] = true;
					$data['username'] = $this->session->userdata('user_name');
					$data['loginLabel'] = 'Logout';
					redirect('lost_found/', $data);
				}
			}
		}else{
			$this->session->sess_destroy();
			$data = array();
			$data['login_error'] = '';
			$data['repMsg'] = $repMsg;
			$this->load->view('login', $data);
		}

	}

	public function help()
	{
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
			$this->load->view('help', $data);
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('help', $data);
		}

	}
	
	public function detail($id, $itemName)
	{
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
		}
		$this->load->model("lostfound_model", "model");
		
		$searchType = $this->session->userdata('search_type');
		
		$item =  $this->model->getItemById($id);
		$user =  $this->model->getReporter($id, $searchType);
		
		if($user != null){
			$userAddress =  $this->model->getUserAddress($user->addressId);
		}

		$data['item'] = $item;
		$data['user'] = $user;
		$data['userAddress'] = $userAddress;
		if($searchType === 'found'){
			$data['searchType'] = 'Found Item';
			$data['reporter'] = 'Found by:';
		}else{
			$data['searchType'] = 'Lost Item';
			$data['reporter'] = 'Owner';
		}
		$this->load->view('detail', $data);
	
	}

	public function contact()
	{
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
			$this->load->view('contact', $data);
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('contact', $data);
		}

	}

	public function about()
	{
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
			$this->load->view('about', $data);
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('about', $data);
		}
	}

	public function advanced()
	{
		$data = array();
		$this->load->model("lostfound_model", "model");
		$data['categories'] = $this->model->getAllCategories();

		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
			$this->load->view('advanced', $data);
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
			$this->load->view('advanced', $data);
		}
	}

	public function advancedSearchRes(){
		$result = null;
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
		}
		
		if($this->input->post('reportType') === "found"){
			$data['searchType'] = 'Found Items';
			$this->session->set_userdata('search_type', 'found');
			$data['firstOption'] = 'Found Item';
			$data['secondOption'] = 'Lost Item';
			$data['firstOptionValue'] = 'found';
			$data['secondOptionValue'] = 'lost';
		}else{
			$data['searchType'] = 'Lost Items';
			$this->session->set_userdata('search_type', 'lost');
			$data['firstOption'] = 'Lost Item';
			$data['secondOption'] = 'Found Item';
			$data['firstOptionValue'] = 'lost';
			$data['secondOptionValue'] = 'found';
		}
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemname', 'Item Name', 'trim|required|xss_clean');

		if ($this->form_validation->run() === FALSE){
			$data['result'] = $result;
			$this->load->view('advanced', $data);
		}else{
			$this->load->model("lostfound_model", "model");
			$result = $this->model->getItemForAdvanced();

			$data['result'] = $result;
			$this->load->view('advancedSearchRes', $data);
		}
	}

	public function report()
	{
		if(!$this->session->userdata('user_name')){
			$this->login('To make report, you need to login first.');
		}else{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('itemname', 'Item Name', 'trim|required|xss_clean');

			if ($this->form_validation->run() === FALSE){
				$data = array();
				$this->load->model("lostfound_model", "model");
				$data['categories'] = $this->model->getAllCategories();

				$data['welcome_msg'] = true;
				$data['username'] = $this->session->userdata('user_name');
				$data['loginLabel'] = 'Logout';
				$this->load->view('report', $data);
			}else{
				$data = array();
				$this->load->model("lostfound_model", "model");
				
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				/* $config['max_size']  = '100';
				 $config['max_width'] = '1024';
				$config['max_height'] = '768'; */
				$new_name = $this->input->post('itemname').uniqid(rand());
				$config['file_name'] = $new_name;
				
				$this->load->library('upload', $config);
				$this->upload->do_upload('reItemImage');//upload the file to the above mentioned path
				$file_data = $this->upload->data();
				$image_path = $file_data['file_name'];
				$result = $this->model->reportItem($image_path);
				
				if($result === true){
					$data['success'] = true;
				}else{
					$data['success'] = false;
				}
				$data['welcome_msg'] = true;
				$data['username'] = $this->session->userdata('user_name');
				$data['loginLabel'] = 'Logout';
				$this->load->view('reportUploaded', $data);
			}
		}
	}

	public function searchResults(){
		$result = null;
		$data = array();
		if(!$this->session->userdata('user_name')){
			$data['welcome_msg'] = false;
			$data['username'] = '';
			$data['loginLabel'] = 'Login';
		}else{
			$data['welcome_msg'] = true;
			$data['username'] = $this->session->userdata('user_name');
			$data['loginLabel'] = 'Logout';
		}
		
		if($this->input->post('reportType') === "found"){
			$data['searchType'] = 'Found Items';
			$this->session->set_userdata('search_type', 'found');
			$data['firstOption'] = 'Found Item';
			$data['secondOption'] = 'Lost Item';
			$data['firstOptionValue'] = 'found';
			$data['secondOptionValue'] = 'lost';
		}else{
			$data['searchType'] = 'Lost Items';
			$this->session->set_userdata('search_type', 'lost');
			$data['firstOption'] = 'Lost Item';
			$data['secondOption'] = 'Found Item';
			$data['firstOptionValue'] = 'lost';
			$data['secondOptionValue'] = 'found';
		}
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemName', 'Item Name', 'trim|required|xss_clean');

		if ($this->form_validation->run() === FALSE){
			$data['result'] = $result;
			$this->load->view('searchResults', $data);
		}else{
			$this->load->model("lostfound_model", "model");
			$result = $this->model->getItemsByName();
			
			$data['result'] = $result;
			$this->load->view('searchResults', $data);
		}

	}

	public function subCategory($categoryId){
		$this->load->model("lostfound_model", "model");
		$result = $this->model->getAllSubCategories($categoryId);
		print json_encode($result);
	}
	
	public function passwordRecovery(){
		$repMsg = '';
		$data = array();
		
		$this->load->model("lostfound_model", "model");
		$result = $this->model->passwordRecovery();
		
		$data['login_error'] = '';
		$data['repMsg'] = $repMsg;
		$this->load->view('login', $data);
	}
	
	public function itemImage($id){
		$this->load->model("lostfound_model", "model");
		$result = $this->model->getItemImage($id);
		
// 		header("Content-type: image/jpeg");
// 		echo $result->itemPic;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */