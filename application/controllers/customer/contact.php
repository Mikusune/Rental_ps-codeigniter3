<?php
	
	class contact extends CI_Controller{
		public function index(){
;
			$this->load->view('templates_customer/header');
			$this->load->view('customer/contact');
			$this->load->view('templates_customer/footer');
		}
    }
?>