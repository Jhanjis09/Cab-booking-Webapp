<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
     
        
         
        // load form_validation library
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->model('user');
		
		
		$this->load->library('email');
		


    }
	public function index()
	{
		$this->load->view('/home/header');
		$this->load->view('/home/index');
		$this->load->view('/home/footer');
	}
	
	
	public function our_services()
	{
		$this->load->view('/home/header');
		$this->load->view('/home/our_services');
		$this->load->view('/home/footer');
	}
	
	public function about_us()
	{
		$this->load->view('/home/header');
		$this->load->view('/home/about_us');
		$this->load->view('/home/footer');
	}
	
	
	public function booking()
	{
		$this->load->view('/home/header');
		$this->load->view('/home/booking');
		$this->load->view('/home/footer');
	}
	
	public function lost_password(){
		$this->load->view('/home/header');
		$this->load->view('/home/login_success');
		$this->load->view('/home/footer');
	}
	
	public function ForgotPassword()
{
    $email = $this->input->post('email');
    $findemail = $this->user->ForgotPassword($email);
    if ($findemail) {
        $this->user->sendpassword($findemail);
    } else {
        echo "<script>alert(' $email not found, please enter correct email id')</script>";
        redirect(base_url() . 'MY_controller/index', 'refresh');
    }
}
	
	public function contact_us()
	{
		$this->load->view('/home/header');
		$this->load->view('/home/contact_us');
		$this->load->view('/home/footer');
	}
	
	public function testimonial()
	{
	$data = array(); $id='false';
	if(isset($this->session->userdata['logged_in']['userid'])){
	$id = $this->session->userdata['logged_in']['userid'];
	$data['testimonials'] = $this->user->get_testimonial($id);
	}
		
		$this->load->view('/home/header');
		//$data['testimonials'] = $this->user->get_testimonial($id);
		
		$this->load->view('/home/testimonial',$data);
		$this->load->view('/home/footer');
	}
	
	public function login(){
		
		$this->load->view('/home/header');
		$this->load->view('/home/login');
		$this->load->view('/home/footer');
		
	}
	public function register(){
		
		$this->load->view('/home/header');
		$this->load->view('/home/register');
		$this->load->view('/home/footer');
		
	}
	
	public function actionregister(){
		$data = array();
		
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['number'] = $_POST['number'];
		$data['password'] = $this->hash_password($_POST['password']);
		$Password = $_POST['password'];
		$C_Password = $_POST['C_Password'];
		
		if($Password ==$C_Password ){
			if($this->user->check_user($data) ==1){
				if($this->user->register_user($data)){
				$this->session->set_flashdata('msg','Registered Succesfully');
				redirect('welcome/login');
				
			}
			else {
				
				// user creation failed, this should never happen
				//$data->error = 'There was a problem creating your new account. Please try again.';
				$this->session->set_flashdata('msg','There was a problem creating your new account. Please try again.');
				// send error to the view
				redirect('welcome/register');
				
			}
			
		
		
			}else{
				$this->session->set_flashdata('msg','User Exist Already.');
				// send error to the view
				redirect('welcome/register');
				
			}
			
		}
		else{
			$this->session->set_flashdata('msg','Password And Confirm Password Do not Match.');
				
				// send error to the view
				redirect('welcome/register');
		}
		
			
		
	}
	public function insert_booking(){
		
		$data = array(
		'name'=>$_POST['name'],
		'num'=>$_POST['num'],
		'pick_address'=>$_POST['p_address'],
		'drop_address'=>$_POST['d_address'],
		'passenger_num'=>$_POST['p_count'],
		'email'=>$_POST['email'],
		'luggage'=>$_POST['l_count'],
		'type'=>$_POST['type'],
		'message'=>$_POST['message']
		);
		if($this->user->save_booking($data)){
			
$email = 'info@melbourne13cab.com';
if($email=='info@melbourne13cab.com'){
	$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'info@melbourne13cab.com',
    'smtp_pass' => 'admin@123',
    'mailtype'  => 'html'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

		$this->email->from('info@melbourne13cab.com', 'info@melbourne13cab.com');
 

$this->email->to($email);
$this->email->subject('New Email From '.$data['email'].'');

$this->email->message('There is a new Email from '.$data['name'].' Please call him on '.$data['num'].' His pick up location is '.$data['pick_address'].' and drop location is '.$data['drop_address'].'');
$this->email->send(); 
}
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'info@melbourne13cab.com',
    'smtp_pass' => 'admin@123',
    'mailtype'  => 'html'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");
$this->email->from('info@melbourne13cab.com', 'info@melbourne13cab.com');
$this->email->to($data['email']);
$this->email->subject('New Mail from melbourne13cab');

$this->email->message('Thankyou For Booking With Us. We will Contact You shortly'); 
 

//echo $data['email']; die;
 

$this->email->send();
//print_r ( $this->email->print_debugger()); die;
//echo $this->email->print_debugger(); die;
			$this->session->set_flashdata('success','success');
				
				// send error to the view
				redirect('welcome/index');
		}
	}
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	public function insert_booking_details(){
		
		$data = array(
		'name'=>$_POST['name'],
		'num'=>$_POST['num'],
		'email'=>$_POST['email'],
		'pick_address'=>$_POST['p_address'],
		'p_date'=>$_POST['p_date'],
		'hours'=>$_POST['hours'],
		'minutes'=>$_POST['minutes'],
		'dur'=>$_POST['dur'],
		
		//'service_cab'=>$_POST['service_cab'],
		'message'=>$_POST['message'],
		'drop_address'=>$_POST['d_address'],
		'passenger_num'=>$_POST['p_count'],
		//'luggage'=>$_POST['l_count'],
		'type'=>$_POST['type'],
		'message'=>$_POST['message']
		);
	
		if($this->user->save_booking_booking($data)){
			
 
$email = 'info@melbourne13cab.com';
if($email=='info@melbourne13cab.com'){
	$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'info@melbourne13cab.com',
    'smtp_pass' => 'admin@123',
    'mailtype'  => 'html'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

		$this->email->from('info@melbourne13cab.com', 'info@melbourne13cab.com');
 

$this->email->to($email);
$this->email->subject('New Email From '.$data['email'].'');

$this->email->message('There is a new Email from '.$data['name'].' Please call him on '.$data['num'].' His pick up location is '.$data['pick_address'].' and drop location is '.$data['drop_address'].'');
$this->email->send(); 

}
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'info@melbourne13cab.com',
    'smtp_pass' => 'admin@123',
    'mailtype'  => 'html'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");
$this->email->from('info@melbourne13cab.com', 'info@melbourne13cab.com');
$this->email->to($data['email']);
$this->email->subject('New Mail from melbourne13cab');

$this->email->message('Thankyou For Booking With Us. We will Contact You shortly'); 
 

//echo $data['email']; die;
 

$this->email->send();


			$this->session->set_flashdata('success','success');	
				// send error to the view
				redirect('welcome/index');
		}
	}
	
	
	public function login_check(){
		$data =  Array();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('/home/header');
			$this->load->view('/home/login');
			$this->load->view('/home/footer');
			
		}
		else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if ($this->user->resolve_user_login($email, $password)) {
				$user_id = $this->user->get_user_id_from_username($email);
				$user    = $this->user->get_user($user_id);
				$session_data = array(
			'userid' => $user->id,
			'email' => $user->email,
			'name' => $user->name,
			'num' => $user->number,
					);
				$this->session->set_userdata('logged_in', $session_data);
				echo "<script>alert('Successfully Logged In')</script>";
				//$this->session->set_flashdata('msg','Welcome');
				redirect('/welcome/index', 'refresh');
				
				
			}
			
			else {
				
				// login failed
			
         //add flash data 
         $this->session->set_flashdata('msg','Wrong Username Or Password');
				redirect('welcome/login');
				
			}
			
		}
		
	}
	
	public function save_contact(){
		
		$data = array(
		'name'=>$_POST['name'],
		'num'=>$_POST['num'],
		'email'=>$_POST['email'],
		'comment'=>$_POST['comment']
		);
		
			if($this->user->contact_saved($data)){
				$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'mail.melbourne13cab.com',
    'smtp_port' => 25,
    'smtp_user' => 'info@melbourne13cab.com',
    'smtp_pass' => 'admin@123',
    'mailtype'  => 'html'
);
$this->email->set_newline("\r\n");

		$this->email->from('info@melbourne13cab.com', 'info@melbourne13cab.com');
 
$email = 'info@melbourne13cab.com';

if($email=='info@melbourne13cab.com'){
$this->email->to($email);
$this->email->subject('New Email From '.$data['email'].'');


$this->email->message('There is a new Querie from '.$data['name'].' Please call him on '.$data['num'].' ');$this->email->send(); 
}

$this->email->to($data['email']);
$this->email->subject('New Mail from melbourne13cab');

$this->email->message('Thankyou For Contact Us. We will Reach to  You shortly'); 
 
$this->email->send();
				$this->session->set_flashdata('success','success_contact');	
				redirect('welcome/contact_us');
				
			}
		
	}
	
	public function testimonial_add(){
			
			$file_name ='';
			 $config['upload_path']          = 'assets/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				 if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        
						$upload_data = $this->upload->data();
                        $file_name = $upload_data['file_name'];
						
                }
				
				if($this->user->testimonial_saved($this->upload->data('file_name'),$this->upload->data('full_path'),$this->input->post())){
					 $this->session->set_flashdata('success','success_test');	
				redirect('welcome/index');
				 }
				
}
				
			
		
	
	
	public function logout() {

	// Removing session data
		$sess_array = array(
	'user_id' => ''
	);
	$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('/home/header');
$this->load->view('/home/login', $data);
}
}
