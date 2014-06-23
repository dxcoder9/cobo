
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->library('template','session');
	

		$this->load->helper('url','form');
	}
	public function index(){
		$this->load->view('admin/index');
	}
	public function formartikel(){
		$data['kategori'] = $this->mcnc->ambilkat('kategori','id_kategori','asc');
				
		$this->load->view('admin/form',$data);
	}

public function tambahartikel(){
		$data['kategori'] = $this->mcnc->ambilkat('kategori','id_kategori','asc');
		
		$this->template->view('admin/form',$data);
	}


	public function lihat()
	{
		$data['cnc'] = $this->mcnc->ambilkat('cnc','id_cnc','asc');
		$this->load->view('home',$data);
	}
	public function postingartikel(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('isi','judul','required');
		$this->form_validation->set_rules('gambar','gambar','required');
		$this->form_validation->set_rules('kategori','kategori','required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$data['kategori'] = $this->mcnc->ambilkat('kategori','id_kategori','asc');

	
		if ($this->form_validation->run() == FALSE){
		$this->load->view('admin/form',$data);
		}else{




		

		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$kategori = $this->input->post('kategori');
		$date = date("Y-m-d H:i:s");
	
		$gambar= $this->input->post('gambar');

		 			
                                    

		$data_baru=array(
			'judul_berita' => $judul,
			'isi_berita' =>$isi,
			'kategori' => $kategori,
			'waktu_posting' => $date,
			'gambar' => $gambar
			);
			$data['kategori'] = $this->mcnc->ambilkat('kategori','id_kategori','asc');

		$this->mcnc->insertArtikel('tabel_berita',$data_baru);
		$notif = "<div class='alert alert-success'>Data berhasil ditambahkan</div>";
		$this->session->set_flashdata('pesan',$notif);
		redirect('admin');
		}
	}
	public function dataartikel(){
		$data['artikel'] = $this->mcnc->semua_berita();
		$this->load->view('admin/dataartikel',$data);
	}
	public function delete($id){
		$this->mcnc->deleteData('tabel_berita','id_berita',$id);
		redirect('admin/dataartikel');
	}
	public function edit($id){

	
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('isi','judul','required');
		$this->form_validation->set_rules('gambar','gambar','required');
		$this->form_validation->set_rules('kategori','kategori','required');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$data['kategori'] = $this->mcnc->ambilkat('kategori','id_kategori','asc');
		if ($this->form_validation->run() == FALSE){
				$data['admin'] = $this->mcnc->getDatarow('tabel_berita','id_berita',$id);
				$this->load->view('admin/form_edit',$data);
		}else{



		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$kategori = $this->input->post('kategori');
		$date = date("Y-m-d H:i:s");
	
		$gambar= $this->input->post('gambar');

		 		
		
		$data_baru=array(
			'judul_berita' => $judul,
			'isi_berita' =>$isi,
			'kategori' => $kategori,
			'waktu_posting' => $date,
			'gambar' => $gambar
			);
			
		$this->mcnc->updateData('tabel_berita','id_berita',$id,$data_baru);
			
		redirect('admin');
	}
}
}