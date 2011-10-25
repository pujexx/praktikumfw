<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content'] = "ini adalah content";
        $data['menu']="menu";
        $this->load->view("contoh",$data);
    }

    function coba($a,$n) {
        $data['jumlah']=$a+$n;
        $data['halo']="nsbadhjas";
       
        $this->load->view("contoh",$data);
    }

   

}
?>
