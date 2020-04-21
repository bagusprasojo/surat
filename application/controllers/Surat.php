<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . "libraries/phpqrcode/qrlib.php";

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION['halaman_terakhir'] = "surat";

        $this->load->model("user_model");
        
        
        $this->load->model("surat_model");
        
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        if (isset($_POST['btn_submit'])) {
			$data['nomor_transaksi'] = $this->input->post('cari');
			$this->session->set_userdata('sess_nomor_transaksi', $data['nomor_transaksi']);
		}
		else {
			$data['nomor_transaksi'] = $this->session->userdata('sess_nomor_transaksi');
		}
        
        $this->load->library('pagination');
        $this->load->helper('date');
		$from                   = $this->uri->segment(3);
        $tgl1                   = $this->uri->segment(4);

        if (empty($tgl1)){
            $tgl1 = mdate();
        }

        $tgl2                   = $this->uri->segment(5);
        if (empty($tgl2)){
            $tgl2 = mdate();
        }

        //echo "from : " . $from . "<br>";
        //echo "tgl1 : " . $tgl1 . "<br>";

        $jumlah_data = $this->surat_model->jumlah_data($tgl1, $tgl2, $data['nomor_transaksi']);

        $config['base_url']     = base_url().'index.php/surat/index/';
		$config['total_rows']   = $jumlah_data;
        $config['per_page']     = 10;

        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_open'] = '</span></li>';

        
        $this->pagination->initialize($config);		
        
        $data['surats'] = $this->surat_model->data($config['per_page'],$from,$tgl1,$tgl2, $data['nomor_transaksi']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_surat_list", $data);

    }

    public function lihat($id){
        $surat = $this->surat_model->getById($id);

        $data['surat'] = $surat;
        $this->load->view("v_surat_lihat", $data);
    }

    public function add($id=null)
    { 
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        $surat = $this->surat_model;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        $post = $this->input->post();

        if ($post){
            $id = $post["surat_id"];
        }



        if ($validation->run()) {
            $surat_id = "";
            if ($surat->save($surat_id)) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                $nama_qrcode = 'photo/' . $surat_id . '.png'; 
                #$nama_qrcode = 'bagus.png'; 
                QRcode::png(site_url("surat/lihat/" . $surat_id),$nama_qrcode,"L",4,4);
        
                redirect('surat/lihat/' . $surat_id);
                // return true;
            }            
        }

        $surat->tanggal = date("Y-m-d");
        
        $data["surat"]        = $surat;
        $this->load->view("v_surat_input", $data);
    }

    
    public function edit($id = null)
    {
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        if (!isset($id)) redirect('surat');
       
        $surat = $this->surat_model;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surat"]        = $surat->getById($id);
        if (!$data["surat"]) show_404();
        
        $this->load->view("v_surat_input", $data);
    }

    public function delete($id=null)
    {
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        if (!isset($id)) show_404();
        
        if ($this->surat_model->delete($id)) {
            redirect(site_url('surat'));
        }
    }
}