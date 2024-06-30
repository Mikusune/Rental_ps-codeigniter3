<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $data['hasil'] = $this->rental_model->get_all_data('message');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/contact',$data);
        $this->load->view('templates_admin/footer');
    }

    public function simpan_post(){
        $data = array(
            'Nama' => $this->input->post('txtName'),
            'Email' => $this->input->post('txtEmail'),
            'Telp' => $this->input->post('txtPhone'),
            'Pesan' => $this->input->post('txtMsg'),
		);
        $data = $this->db->insert('message', $data);
        redirect('customer/contact');
    }

    function delete($id){
        $this->db->where('id_mess',$id);
        $query = $this->db->get('message');
        $row = $query->row();
        $this->db->delete('message', array('id_mess' => $id));
        redirect('Admin/Contact');
    }
}