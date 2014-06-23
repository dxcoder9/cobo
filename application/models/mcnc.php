<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcnc extends CI_Model {

	public function berita_baru(){
		$this->db->select('*');
		$this->db->from('tabel_berita');
		$this->db->join('kategori','kategori.id_kategori=tabel_berita.kategori');
		$this->db->order_by('id_berita','desc');
		$this->db->limit(6);
		$query=$this->db->get();
		return $query; 
	}
	public function insertArtikel($table,$data){
		$this->db->insert($table,$data);
	}

	public function ambilkat($table,$parameter,$nilai_parameter){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($parameter,$nilai_parameter);
		return $this->db->get()->result();
	}
	public function semua_berita(){
		$this->db->select('*');
		$this->db->from('tabel_berita');
		$this->db->join('kategori','kategori.id_kategori=tabel_berita.kategori');
		$this->db->order_by('id_berita','desc');
		$artikel=$this->db->get();
		return $artikel; 
	}
	public function deleteData($table,$field,$value){
		$this->db->where($field,$value);
		$this->db->delete($table);
	}
	public function getDatarow($table,$field,$value){
		$this->db->where($field,$value);
		return $this->db->get($table)->row();

	}
	public function updateData($table,$field,$value,$data){
		$this->db->where($field,$value);
		$this->db->update($table,$data);
	}
	/*public function ambil_beberapa($table,$order,$order_value)
	{
		$this->db->order_by($order,$order_value);
		$this->db->limit('3');
		return $this->db->get($table)->result();

	}
	public function inputData($table,$data)
	{
		$this->db->insert($table,$data);
	}

	
	public function getDatarow($table,$field,$value){
		$this->db->where($field,$value);
		return $this->db->get($table)->row();

	}
	public function updateData($table,$field,$value,$data){
		$this->db->where($field,$value);
		$this->db->update($table,$data);
	}
	public function deleteData($table,$field,$value){
		$this->db->where($field,$value);
		$this->db->delete($table);
	}/*/

}?>