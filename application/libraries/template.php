<?php
class Template {
protected $_ci;
function __construct()
{
	$this->_ci =&get_instance();
}
function display($index,$data=null)
{
	$data['_content']=$this->_ci->load->view($index,$data, true);
		$data['_berita']=$this->_ci->load->view('element/berita',$data, true);
		$data['_galeri']=$this->_ci->load->view('element/galeri',$data, true);
		$data['_hotnews']=$this->_ci->load->view('element/hotnews',$data, true);

		$this->_ci->load->view('index',$data);
}

}


?>