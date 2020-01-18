<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index()
	{
		$this->load->view('direktori/auth/login');
	}
	
	public function login_action(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_login_r=$this->model->getlogin($username,$password)->num_rows();
 		if ($check_login_r > 0){
 			$datauser=$this->model->getlogin($username,$password)->row_array();
 			$level=$datauser['level'];
 			$sessions=array(
 				'userid'=>$datauser['id_user'],
 				'nameuser'=>$datauser['username'],
 				'namefull'=>$datauser['nama'],
 				'level'=>$datauser['level'],
 				'status'=>'ok',	
 			);
 			$this->session->set_userdata($sessions);
 			if ($level==='admin') {
 				redirect('admin_C/surat');
 			}elseif ($level==='kabag') {
 				redirect('administrator');
 			}elseif ($level==='umum') {
 				redirect('all_C');
 			}elseif ($level==='lalin') {
 				redirect('lalin_C');
 			}elseif ($level==='sarpras') {
 				redirect('sarpras_C');
 			}elseif ($level==='TJ') {
 				redirect('TJ_C');
 			}elseif ($level==='TU') {
 				redirect('TU_C');
 			}		
		}else{
			 echo "<script>alert('login gagal') </script>";
			$this->index();
			}
	}
	public function logout_action(){
		$this->session->sess_destroy();
		redirect('auth');
	}
				
}

?>




