<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dlemas extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //simpan data
    public function simpan_data($data)
    {
        $this->db->insert('data_mahasiswa',$data);
        return $this->db->insert_id();
    }
}
?>