<?php

class Mahasiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mmahasiswa");
    }

    function index() {
        $data['mhs'] = $this->mmahasiswa->tampil();
        $this->load->view("view_mahasiswa",$data);
    }

}
?>
