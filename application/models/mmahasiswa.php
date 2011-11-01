<?php

class Mmahasiswa extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function tampil() {
        $result = $this->db->get("mahasiswa");
        //SELECT * from mahasiswa
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function simpan($data) {
        $this->db->insert("mahasiswa",$data);
    }

}
?>
