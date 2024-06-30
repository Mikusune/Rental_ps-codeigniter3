<?php
	
	class artikel extends CI_Controller{
		public function index(){
            $data['hasil'] = $this->rental_model->get_all_data('artikel');
			$this->load->view('templates_customer/header');
			$this->load->view('customer/show_artikel',$data);
			$this->load->view('templates_customer/footer');
		}
    }
?>