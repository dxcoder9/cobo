<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cnc extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url','form');
	}
	public function admin(){
		$this->load->view('admin/index');
	}
	public function index()

	{
		$data['query'] = $this->mcnc->berita_baru();
		$this->load->view('index',$data);

	}

	public function hotnews()
	{
		$this->load->view('hotnews');
	}
		
	/*
	public function tambah()
	{
		$this->load->view('form_tambah');
	}
	public function input()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_hp','No hp','required');
		$this->form_validation->set_rules('twitter','Twitter','required');

		$this->form_validation->set_error_delimiters('<div style="padding:10 20;border:#f00 solid thin;color:black;width:200;border-radius:9px;">','</div>');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('form_tambah');
		}else{



		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('no_hp');
		$twitter = $this->input->post('twitter');
		
		$data_baru=array(
			'email' => $email,
			'nama' => $nama,
			'no_hp' => $nohp,
			'twitter' => $twitter
			);
		$this->mcnc->inputData('cnc',$data_baru);
		$notif = "<div class='alert alert-success'>Data berhasil ditambahkan</div>";
		$this->session->set_flashdata('pesan',$notif);
		redirect('cnc');
	}
	}
	public function edit($id){

			$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('no_hp','No hp','required');
		$this->form_validation->set_rules('twitter','Twitter','required');

		$this->form_validation->set_error_delimiters('<div style="padding:10 20;border:#f00 solid thin;color:black;width:200;border-radius:9px;">','</div>');
			if ($this->form_validation->run() == FALSE){
				$data['cnc'] = $this->mcnc->getDatarow('cnc','id_cnc',$id);
				$this->load->view('form_edit',$data);
		}else{



		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('no_hp');
		$twitter = $this->input->post('twitter');
		
		$data_baru=array(
			'email' => $email,
			'nama' => $nama,
			'no_hp' => $nohp,
			'twitter' => $twitter
			);
		$this->mcnc->updateData('cnc','id_cnc',$id,$data_baru);
			$notif = "<div class='alert alert-success'>Data berhasil diperbarui</div>";
		$this->session->set_flashdata('pesan',$notif);
		redirect('cnc');
	}

	
	}
	public function delete($id){
		$this->mcnc->deleteData('cnc','id_cnc',$id);
			$notif = "<div class='alert alert-success'>Data berhasil dihapus</div>";
		$this->session->set_flashdata('pesan',$notif);
		redirect('cnc');
	}*/
}

/* End of file cnc.php */
/* Location: ./application/controllers/cnc.php */