

// class User extends CI_Controller {
// 	public function index()
// 	{
// 		$this-> load-> model('user_acc');
// 		$data= $this->user_acc-> display();
// 		$this-> load-> view('user_view');

// 	}
// }

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 public function __construct() {

   parent::__construct();

   // load base_url
   $this->load->helper('url');
 }

 public function index(){

   // Check form submit or not
   if($this->input->post('submit') != NULL ){
 
     // POST data
     $postData = $this->input->post();

     // Read POST data
    $firstName = $postData['First_Name'];
    $lastName = $postData['Last_Name'];
     
   }

  
   $this->load->view('user_view






















   	', $firstName , $lastName);
 
 }

}
?>