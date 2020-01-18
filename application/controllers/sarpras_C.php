<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sarpras_C extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->ceklogin();
			$this->load->model('model');
		}
	private function ceklogin(){
		$id_user=$this->session->userdata('userid');
		$status=$this->session->userdata('status');
		$level=$this->session->userdata('level');
		if($id_user == null or $status !='ok'){
			redirect("auth");
		}
	}
	public function index(){
		$data = array(
			'title'			=>'SURAT MASUK',
			'title_level1'	=>'surat masuk',
			'title_level2'	=>'',
			'surat'		=>$this->model->get_srt_by_ksb('sarpras')->result(),
			'konten'	=>'direktori/sarpras/surat',
			);
		$this->load->view('direktori/template',$data);
	 }

	public function edit($id){
 		if ($this->uri->segment(3)==null) {
 			echo "<script>alert('Anda belum memilih data yang diedit')</script>";
 			$this->index();
 		}
		$data = array(
			'title'=>'SURAT MASUK',
			'title_level1'=>'surat masuk',
			'title_level2'=>'edit surat',
			'kasubag'	=>$this->model->kasubag()->result(),
			'surat'		=>$this->model->get_where($id)->row(),
			'disposisi' =>$this->model->fetch_disposisi(),
			'konten'	=>'direktori/sarpras/edit_srt',
		);
		$this->load->view('direktori/template',$data);
 	}
 	public function update_srt($id){
		$data = array(
			'catatan1'		=>$this->input->post('Catatan1'),
			'dis1'			=>$this->input->post('d1'),
			'dis2'			=>$this->input->post('d2'),
			'dis3'			=>$this->input->post('d3'),
			'dis4'			=>$this->input->post('d4'),
			'dis5'			=>$this->input->post('d5'),
			'dis6'			=>$this->input->post('d6'),
			'dis7'			=>$this->input->post('d7'),
			'dis8'			=>$this->input->post('d8'),
			'dis9'			=>$this->input->post('d9'),
			'dis10'			=>$this->input->post('d10'),
			'dis11'			=>$this->input->post('d11'),
			'dis12'			=>$this->input->post('d12'),
		);

			$edit=$this->model->updateFile($id,$data);
			if ($edit) {
				$this->session->set_flashdata('pesan','Data Berhasil Diubah!');
				redirect('sarpras_C');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Diubah!');
				redirect('sarpras_C/edit');
			}
	}

	public function print_srt($id){
		$data['disposisi'] 	= $this->model->fetch_disposisi();
		$data['kasubag'] 	= $this->model->fetch_disposisi();
		$data['surat'] 		= $this->model->get_where($id)->row();
		$this->load->view('direktori/sarpras/surat_print',$data);
	}
}
