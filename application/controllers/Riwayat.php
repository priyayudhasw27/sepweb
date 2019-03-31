<?php
class Riwayat extends CI_Controller{

	public function __construct(){
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');
   $this->load->model('cetakModel');
            /* $this->load->helper(array('form', 'url'));
            $config['upload_path']          = 'file/';
            $config['allowed_types']        = 'doc|docx|pdf';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);*/
          }
          public function index(){
           if ($this->session->has_userdata('nama_pengguna')) {
            $this->login = 1;
          }else{
            $this->login = 0;
          }
          $id_pengguna = $this->session->userdata('id_pengguna');
          $this->data['cetak'] = $this->cetakModel->detailCetak2($id_pengguna);
          $this->load->model('profilModel');
          $this->data['dataPengguna'] = $this->profilModel->dataPengguna($id_pengguna);
          $this->load->view('riwayatView', $this->data, $this->login);
        }

      }
      ?>