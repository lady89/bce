<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Fungsi untuk menyimpan data kontak ke dalam database
    public function save_contact($data) {
        return $this->db->insert('contacts', $data);
    }
}
