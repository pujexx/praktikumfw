<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mmahasiswa");
    }

    function index() {
        $this->load->view("view_form");
    }

    function terima() {

        $simpan['nim'] = $this->input->post("nim", true);
        $simpan['nama'] = $this->input->post("nama", true);
        $simpan['alamat'] = $this->input->post("alamat", true);
        $this->mmahasiswa->simpan($simpan);
        redirect("home/tampil");
    }

    function tampil() {
        $data['mhs'] = $this->mmahasiswa->tampil();
        $this->load->view("view_mahasiswa", $data);
    }

}