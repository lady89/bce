<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->model('Kontak_model'); // Load model di sini
    }
    

	public function index()
	{ 
		$this->load->view('layout/header');
		$this->load->view('user/kontak');
		$this->load->view('layout/footer');
	}

    public function submit() {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subjek', 'required');
        $this->form_validation->set_rules('message', 'Pesan', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/kontak');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
    
            // Simpan ke database
            $this->load->model('Kontak_model');
            $contact_data = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            );
    
            if ($this->Kontak_model->save_contact($contact_data)) {
                $this->session->set_flashdata('success', 'Pesan Anda telah berhasil dikirim.');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat mengirim pesan.');
            }
    
            redirect('user/kontak');
        }
    }

    public function get_all_contacts() {
        $query = $this->db->get('contacts');
        return $query->result();
    }
    
}