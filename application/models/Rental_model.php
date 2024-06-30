<?php

	class Rental_model extends CI_Model{
		public function get_data($table){
			return $this->db->get($table);
		}
		
		function get_all_data($tabel){
			return $this->db->get($tabel)->result_array();
		}
		public function get_where($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function insert_data($data, $table){
			$this->db->insert($table, $data);
		}

		public function update_data($table, $data, $where){
			$this->db->update($table, $data, $where);
		}		

		public function delete_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function ambil_id_ps($id){
			$hasil = $this->db->where('id_ps',$id)->get('ps');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return false;
			}
		}

		public function cek_login(){
			$username = set_value('username');
			$password = set_value('password');

			$result = $this->db
							->where('username',$username)
							->where('password',md5($password))
							->limit(1)
							->get('customer');

			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return FALSE;
			}
		}

		public function update_password($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		
		}

		public function downloadPembayaran($id){
			$query = $this->db->get_where('transaksi',array('id_rental' => $id));
			return $query->row_array();
		}

		public function total_data_rental(){
			$nama_rental 		= $this->session->userdata('nama_rental');

			$menunggu_konfirmasi= $this->db->query("SELECT * FROM transaksi WHERE bukti_pembayaran != '' AND status_pembayaran = '0' AND nama_rental = '$nama_rental'")->num_rows();
			$transaksi			= $this->db->get_where('transaksi', array('nama_rental' => $nama_rental))->num_rows();
			$transaksi_selesai	= $this->db->query("SELECT * FROM transaksi WHERE status_rental = 'Selesai' AND nama_rental = '$nama_rental'")->num_rows();
			$ps 				= $this->db->get_where('ps', array('nama_rental' => $nama_rental))->num_rows();

			$data = array(

				'total_menunggu_konfirmasi' => $menunggu_konfirmasi,
				'total_transaksi'	=> $transaksi,
				'total_transaksi_selesai' => $transaksi_selesai,
				'total_ps'	=> $ps
			);	

			return $data;
		}


		public function total_data_admin(){
			$customer			= $this->db->get_where('customer', array('role_id' => '2'))->num_rows();
			$transaksi			= $this->db->count_all_results('transaksi');
			$transaksi_selesai	= $this->db->get_where('transaksi', array('status_rental' => 'Selesai'))->num_rows();
			$ps 				= $this->db->count_all_results('ps');

			$data = array(

				'total_customer' => $customer,
				'total_transaksi'	=> $transaksi,
				'total_transaksi_selesai' => $transaksi_selesai,
				'total_ps'	=> $ps
			);	

			return $data;
		}

		public function rental_login(){
			if (!empty($this->session->userdata('role_id'))) {
				if ($this->session->userdata('role_id') == '3') {
					return;
				}elseif($this->session->userdata('role_id') == '2'){
					redirect('customer/dashboard');
				}else{
					redirect('admin/dashboard');
				}
			}else{
				redirect('customer/dashboard');
			}
		}

		public function admin_login(){
			if (!empty($this->session->userdata('role_id'))) {
				if ($this->session->userdata('role_id') == '1') {
					return;
				}elseif($this->session->userdata('role_id') == '2'){
					redirect('customer/dashboard');
				}else{
					redirect('rental/dashboard');
				}
			}else{
				redirect('customer/dashboard');
			}
		}

		public function customer_login(){
			if (!empty($this->session->userdata('role_id'))) {
				if ($this->session->userdata('role_id') == '2') {
					return;
				}elseif($this->session->userdata('role_id') == '1'){
					redirect('admin/dashboard');
				}else{
					redirect('rental/dashboard');
				}
			}else{
				redirect('customer/dashboard');
			}
		}

		function simpan_berita($jdl,$berita,$gambar,$tgl){
			$hsl=$this->db->query("INSERT INTO artikel (Title,Deskripsi,foto,tgl) VALUES ('$jdl','$berita','$gambar','$tgl')");
			return $hsl;
		}
		
		function get_all_berita(){
			$hsl=$this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC");
			return $hsl;
		}
	
		function get_by_id($tabel,$col,$id){
			$this->db->where($col,$id);
			$data = $this->db->get($tabel);
			return $data;
		}

		function update($tabel,$col,$id,$data)
		{
			$this->db->where($col,$id);
			$action = $this->db->update($tabel,$data);
			return $action;
		}
	}

?>