<?php
	
	class Data_ps extends CI_Controller{
		public function index(){
			
			$data['ps'] = $this->db->query("SELECT * FROM ps mb, type tp WHERE mb.kode_type=tp.kode_type")->result();

			$data['rental'] = $this->db->query("SELECT nama_rental FROM customer WHERE nama_rental != ''")->result();
			$data['type'] = $this->rental_model->get_data('type')->result();
			$data['ps'] = $this->rental_model->get_data('ps')->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/data_ps', $data);
			$this->load->view('templates_customer/footer');
		}

		public function detail_ps($id){

			$data['detail'] = $this->rental_model->ambil_id_ps($id);
			$data['rental'] = $this->db->query("SELECT * FROM customer cs, ps mb WHERE mb.nama_rental = cs.nama_rental AND mb.id_ps = '$id'")->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/detail_ps', $data);
			$this->load->view('templates_customer/footer');
		}
	}
?>