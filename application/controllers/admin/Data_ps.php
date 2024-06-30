<?php


class Data_ps extends CI_Controller{
	public function index(){
		$this->rental_model->admin_login();
		$data['ps'] = $this->rental_model->get_data('ps')->result();
		$data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/Data_ps',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_ps(){ 
		$this->rental_model->admin_login();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$data['nama_rental'] = $this->db->query("SELECT nama_rental FROM customer WHERE role_id='3'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_ps',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_ps_aksi(){
		
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_ps();
		}else{
			$nama_rental			= $this->input->post('nama_rental');
			$kode_type				= $this->input->post('kode_type');
			$merk					= $this->input->post('merk');
			$ukuran_disk			= $this->input->post('ukuran_disk');
			$warna					= $this->input->post('warna');
			$tahun					= $this->input->post('tahun');
			$status					= $this->input->post('status');
			$harga					= $this->input->post('harga');
			$denda					= $this->input->post('denda');
			$kabel_hdmi				= $this->input->post('kabel_hdmi');
			$kabel_power			= $this->input->post('kabel_power');
			$controller				= $this->input->post('controller');
			$game					= $this->input->post('game');
			$gambar					= $_FILES['gambar']['name'];


			if($gambar='0'){}else{
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar ps Gagal diupload!";
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_rental'		=> $nama_rental,
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'ukuran_disk'		=> $ukuran_disk,
				'tahun'				=> $tahun,
				'warna'				=> $warna,
				'status'			=> $status,
				'harga'				=> $harga,
				'denda'				=> $denda,
				'kabel_hdmi'		=> $kabel_hdmi,
				'kabel_power'		=> $kabel_power,
				'controller'		=> $controller,
				'game'				=> $game,
				'gambar'			=> $gambar,
			);

			$this->rental_model->insert_data($data, 'ps');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data ps Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_ps');
		}
	}


	public function update_ps($id){
		$this->rental_model->admin_login();
		$where = array('id_ps' => $id);
		$data['ps'] = $this->db->query("SELECT * FROM ps mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_ps='$id'")->result();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$data['nama_rental'] = $this->db->query("SELECT nama_rental FROM customer WHERE role_id='3'")->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_ps',$data);
		$this->load->view('templates_admin/footer');

	}

	public function update_ps_aksi(){
		$this->rental_model->admin_login();
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->update_ps($this->input->post('id_ps'));
		}else{
			$id 					= $this->input->post('id_ps');
			$nama_rental			= $this->input->post('nama_rental');
			$kode_type				= $this->input->post('kode_type');
			$merk					= $this->input->post('merk');
			$ukuran_disk			= $this->input->post('ukuran_disk');
			$warna					= $this->input->post('warna');
			$tahun					= $this->input->post('tahun');
			$status					= $this->input->post('status');
			$harga					= $this->input->post('harga');
			$denda					= $this->input->post('denda');
			$kabel_hdmi				= $this->input->post('kabel_hdmi');
			$kabel_power			= $this->input->post('kabel_power');
			$controller				= $this->input->post('controller');
			$game					= $this->input->post('game');
			$gambar					= $_FILES['gambar']['name'];
			
			if($gambar){
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'nama_rental'		=> $nama_rental,
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'ukuran_disk'		=> $ukuran_disk,
				'tahun'				=> $tahun,
				'warna'				=> $warna,
				'status'			=> $status,
				'harga'				=> $harga,
				'denda'				=> $denda,
				'kabel_hdmi'		=> $kabel_hdmi,
				'kabel_power'		=> $kabel_power,
				'controller'		=> $controller,
				'game'				=> $game,
			);

			$where = array(
				'id_ps' => $id
			);

			$this->rental_model->update_data('ps', $data, $where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data ps Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_ps');
		}
	}

	public function _rules(){

		
		$this->form_validation->set_rules('nama_rental','Pemilik Rental','required');
		$this->form_validation->set_rules('kode_type','Type ps','required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('ukuran_disk','Ukuran Disk','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		$this->form_validation->set_rules('warna','Warna','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('denda','Denda','required');
	}


	public function detail_ps($id){
		$this->rental_model->admin_login();

		$data['detail'] = $this->rental_model->ambil_id_ps($id);
		$data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_ps',$data);
		$this->load->view('templates_admin/footer');

	}

	public function delete_ps($id){
		$this->rental_model->admin_login();

		$where = array('id_ps' => $id);
		$this->rental_model->delete_data($where,'ps');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data ps Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/data_ps');
	}
}
?>