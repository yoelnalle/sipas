<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class all_C extends CI_Controller {
	
	public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('url');
			$this->ceklogin();
			$this->load->model('model');
		}
	private function ceklogin(){
		$id_user=$this->session->has_userdata('userid');
		$status=$this->session->userdata('status');
		$level=$this->session->set_userdata('level','umum');
		if($id_user == null or $status !='ok'){
			redirect("auth");
		}
	}

	public function index(){
		$data = array(
			'title'			=>'SURAT MASUK',
			'title_level1'	=>'surat masuk',
			'title_level2'	=>'',
			'surat'		=>$this->model->test()->result(),
			'konten'	=>'direktori/umum/surat',
			);
		$this->load->view('direktori/template',$data);
	 }
	public function srt_keluar()
	{
		$data = array(
			'title'=>'SURAT KELUAR',
			'title_level1'=>'surat keluar',
			'title_level2'=>'',
			'surat'=>$this->model->getsrt_klr()->result(),
			'konten'=>'direktori/umum/surat_klr',
			);
		$this->load->view('direktori/template',$data);
	}
	
	public function print_srt($id){
		$data['disposisi'] 	= $this->model->fetch_disposisi();
		$data['kasubag'] 	= $this->model->get_where_ksb($id)->row();
		$data['surat'] 		= $this->model->get_where($id)->row();
		$this->load->view('direktori/umum/surat_print',$data);
	}
	
}
