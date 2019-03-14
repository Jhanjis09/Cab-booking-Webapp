<?php
class User extends CI_Model {
   
    public function __construct() {
        parent::__construct();
		$this->load->database();
		  $this->load->library('form_validation');
		$this->load->library('session');
        
		$this->load->library('email');
        date_default_timezone_set('Asia/Kolkata'); 
    } 
	
	public function register_user($data) {
		
		$store = array(
		'name'   => $data['name'],
			'email'      => $data['email'],
			'number'      => $data['number'],
			'password'   =>  $data['password'],
			'created_at' => date('Y-m-j H:i:s'),
		
		);
		
		
		return $this->db->insert('users', $store);
	
	
	}
	
	public function sendpassword($data)
{
    $email = $data['email'];
	
    $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] =$this->hash_password($passwordplain);
		$new_pass_enc = $this->hash_password($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('users', $newpass);
       
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

		$this->email->from('info@melbourne13cab.com', 'melbourne13cab');
$this->email->to($email); 


$this->email->subject('Email Test');
 $mail_message='Dear '.$row[0]['name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';
$this->email->message($mail_message);  

$this->email->send();
        if (!$this->email->send()) {

            echo "<script>alert('Failed to send password, please try again!')</script>";
        } else {

            echo "<script>alert(,'Password sent to your email!')</script>";
        }
        redirect(base_url().'welcome/index','refresh');
    }
    else
    {

        echo "<script>alert('Email not found try again!')</script>";
        redirect(base_url().'welcome/login','refresh');
    }
}
	
	
		 public function ForgotPassword($email)
{
    $this->db->select('email');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query=$this->db->get();
    return $query->row_array();
}
	
	
	public function check_user($data){
		//print_r()
		$array = array('email'=> $data['email'] );
		$this->db->select("*");
        $this->db->from('users');
		$this->db->where('email', $data['email']);
		$this->db->where('number', $data['number']);
        $query = $this->db->get();
			
	if($query->num_rows()>0){
		return 0;
	}
	else{
		return 1;
	}
		
	}
	public function resolve_user_login($email, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('email', $email);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}
	
	public function get_user_id_from_username($email) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('email', $email);
		return $this->db->get()->row('id');
		
	}
	
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
	public function save_booking($data){
		return $this->db->insert('booking', $data);
	}
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	public function save_booking_booking($data){
		return $this->db->insert('booking_full', $data);
	}
	
	public function contact_saved($data){
		return $this->db->insert('contact-lead', $data);
	}
	
	public function get_testimonial($id){

		$this->db->select('*');
		$this->db->from('testimonial');
		$this->db->where('user_id', $id);
		return $this->db->get()->result();
		
	}
	
	public function testimonial_saved($file_name,$path,$post){
		//var_dump($post); die;
		$data = array(
		'name'=>$post['name'],
		'email'=>$post['email'],
		'comments'=>$post['comments'],
		'path'=>$path,
		'user_id'=>$post['user_id'],
		'image'=>$file_name
		);
		
		return $this->db->insert('testimonial', $data);
	}
}
