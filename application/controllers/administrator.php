<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrator extends CI_Controller {
	
	public function __construct(){
			parent::__construct();
			$this->load->helper('url','download');
			$this->ceklogin();
	}

	private function ceklogin(){
		$id_user=$this->session->userdata('userid');
		$nama=$this->session->userdata('namefull');
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
			'surat'			=>$this->model->test()->result(),
			'konten'		=>'direktori/surat/srt',
			);
		$this->load->view('direktori/template',$data);
	}

	public function tambah(){
		$data = array(
			'title'=>'SURAT MASUK',
			'title_level1'=>'surat masuk',
			'title_level2'=>'tambah data',
			'surat'=>$this->model->getsrt(),
			'kasubag'	=>$this->model->fetch_dis(),
			'disposisi' =>$this->model->fetch_disposisi(),
			'konten'=>'direktori/surat/add_srt',
			);
		$this->load->view('direktori/template',$data);
 	}
	
	public function simpan(){ 		
		$config['upload_path']          = '.\assets\uploads';
		$config['allowed_types']        = 'png|jpg|pdf';
		$config['max_size']             = 10000;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				$this->index($error);
		}
		else{
			$upload_data 	= $this->upload->data();
			$filename 		= $upload_data['file_name'];
			$filesize 		= $upload_data['file_size'];
			$Nmr_Agenda		=$this->input->post('Nmr_Agenda');
			$asal_srt		=$this->input->post('asal_srt');
			$tgl			=$this->input->post('tgl');
			$pukul			=$this->input->post('pukul');
			$nmr_srt		=$this->input->post('nmr_srt');
			$kasubag		=$this->input->post('kasubag');
			$perihal		=$this->input->post('perihal');
			$Catatan		=$this->input->post('Catatan');
			$foto			=$this->input->post('foto');
			$d1				=$this->input->post('d1');
			$d2				=$this->input->post('d2');
			$d3				=$this->input->post('d3');
			$d4				=$this->input->post('d4');
			$d5				=$this->input->post('d5');
			$d6				=$this->input->post('d6');
			$d7				=$this->input->post('d7');
			$d8				=$this->input->post('d8');
			$d9				=$this->input->post('d9');
			$d10			=$this->input->post('d10');
			$d11			=$this->input->post('d11');
			$d12			=$this->input->post('d12');
			$data=array(
				'Nmr_Agenda'=>$Nmr_Agenda,
				'asal_srt'=>$asal_srt,
				'tgl'=>$tgl,
				'pukul'=>$pukul,
				'nmr_srt'=>$nmr_srt,
				'id_ksb'=>$kasubag,
				'catatan'=>$Catatan,
				'perihal'=>$perihal,
				'foto'=>$filename,
				'ukuran'=>$filesize,
				'd1'=>$d1,
				'd2'=>$d2,
				'd3'=>$d3,
				'd4'=>$d4,
				'd5'=>$d5,
				'd6'=>$d6,
				'd7'=>$d7,
				'd8'=>$d8,
				'd9'=>$d9,
				'd10'=>$d10,
				'd11'=>$d11,
				'd12'=>$d12,
			);
			$result=$this->model->save('surat',$data);
			if ($result==1) {
				$this->session->set_flashdata('pesan','Data Berhasil Ditambah!');
				redirect('administrator');
			}else{
				echo "<script>alert('data gagal disimpan') </script>";
				$this->tambah();
			}
		}
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
			'konten'	=>'direktori/surat/edit_srt',
			);
		$this->load->view('direktori/template',$data);
 	}

	public function update_srt($id){

		if (!empty($_FILES['foto']['name'])):	
		$config['upload_path']		='.\assets\uploads';
		$config['allowed_types']    = 'jpg|png|pdf';
	
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')){
			echo "<script>alert('gagal') </script>";
		}
		else{
				$thumbnail=$this->input->post('foto_now');
				$path=APPPATH.'../assets/uploads/'.$thumbnail;
				unlink($path);
				$data 			=$this->upload->data();
				$filename		=$data['file_name'];
				$filesize 		= $data['file_size'];
			}
		endif;	
		if (!empty($_FILES['foto']['name'])) :
			$tgl			=$this->input->post('tgl');
			$data = array(
				'Nmr_Agenda'	=>$this->input->post('Nmr_Agenda'),
				'asal_srt'		=>$this->input->post('asal_srt'),
				'tgl'			=>$tgl,
				'foto'			=>$filename,
				'ukuran'		=>$filesize,
				'pukul' 		=>$this->input->post('pukul'),
				'nmr_srt'		=>$this->input->post('nmr_srt'),
				'id_ksb'		=>$this->input->post('kasubag'),
				'catatan'		=>$this->input->post('Catatan'),
				'd1'			=>$this->input->post('d1'),
				'd2'			=>$this->input->post('d2'),
				'd3'			=>$this->input->post('d3'),
				'd4'			=>$this->input->post('d4'),
				'd5'			=>$this->input->post('d5'),
				'd6'			=>$this->input->post('d6'),
				'd7'			=>$this->input->post('d7'),
				'd8'			=>$this->input->post('d8'),
				'd9'			=>$this->input->post('d9'),
				'd10'			=>$this->input->post('d10'),
				'd11'			=>$this->input->post('d11'),
				'd12'			=>$this->input->post('d12'),
			);
		else:
			$tgl			=$this->input->post('tgl');
			$data = array(
				'Nmr_Agenda'	=>$this->input->post('Nmr_Agenda'),
				'asal_srt'		=>$this->input->post('asal_srt'),
				'tgl'			=>$tgl,
				'pukul' 		=>$this->input->post('pukul'),
				'nmr_srt'		=>$this->input->post('nmr_srt'),
				'id_ksb'		=>$this->input->post('kasubag'),
				'catatan'		=>$this->input->post('Catatan'),
				'd1'			=>$this->input->post('d1'),
				'd2'			=>$this->input->post('d2'),
				'd3'			=>$this->input->post('d3'),
				'd4'			=>$this->input->post('d4'),
				'd5'			=>$this->input->post('d5'),
				'd6'			=>$this->input->post('d6'),
				'd7'			=>$this->input->post('d7'),
				'd8'			=>$this->input->post('d8'),
				'd9'			=>$this->input->post('d9'),
				'd10'			=>$this->input->post('d10'),
				'd11'			=>$this->input->post('d11'),
				'd12'			=>$this->input->post('d12'),
				);
		endif;
		$edit=$this->model->updateFile($id,$data);
		if ($edit) {
			$this->session->set_flashdata('pesan','Data Berhasil Diubah!');
			redirect('administrator');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal Diubah!');
			redirect('administrator/edit');
		}
	}

	public function hapus_srt($id){
		$data = $this->model->getDataByID($id)->row();
		$nama = 'assets/uploads/'.$data->foto;

		if(is_readable($nama) && unlink($nama)){
			$delete = $this->model->hapusFile($id);
			$this->session->set_flashdata('pesan','Data Berhasil dihapus!');
			redirect('administrator');
		}else{
			echo "Gagal";
		}
	}
	
	public function detail($id){	
		$data = array(
			'title'=>'',
			'title_level1'=>'data surat',
			'title_level2'=>'detail',
			'artikel'	  =>$this->model->detail($id)->row(),
			'konten'	  =>'direktori/surat/detail',
			);
			$this->load->view('direktori/template',$data);
	 }
	 
	public function srt_keluar(){
		$data = array(
			'title'=>'SURAT KELUAR',
			'title_level1'=>'surat keluar',
			'title_level2'=>'',
			'surat'=>$this->model->getsrt_klr()->result(),
			'konten'=>'direktori/surat_keluar/surat',
			);
		$this->load->view('direktori/template',$data);
	 }
	
	public function add(){
		$data = array(
			'title'=>'SURAT KELUAR',
			'title_level1'=>'surat keluar',
			'title_level2'=>'tambah data',
			'surat'=>$this->model->getsrt_klr()->result(),
			'konten'=>'direktori/surat_keluar/tambah_surat',
			);
		$this->load->view('direktori/template',$data);
	}
	 
 	public function finish(){ 		
		$config['upload_path']          = '.\assets\ekspor';
		$config['allowed_types']        = 'png|jpg|pdf';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->index($error);
		}
		else{

			$upload_data 	= $this->upload->data();
			$filename 		= $upload_data['file_name'];
			$filesize 		= $upload_data['file_size'];
			$tanggal		=$this->input->post('tanggal');
			$no_surat		=$this->input->post('no_surat');
			$alamat			=$this->input->post('alamat');
			$perihal		=$this->input->post('perihal');
			$keterangan		=$this->input->post('keterangan');
			$file			=$this->input->post('file');
			$size			=$this->input->post('size');
			$data=array(
				'tanggal'=>$tanggal,
				'no_surat'=>$no_surat,
				'alamat'=>$alamat,
				'perihal'=>$perihal,
				'keterangan'=>$keterangan,
				'file'=>$filename,
				'size'=>$filesize,

			);
			$result=$this->model->save('surat_klr',$data);
			if ($result==1) {
				$this->session->set_flashdata('pesan','Data Berhasil Disimpan!');
				redirect('administrator/srt_klr');
			}else{
				$this->session->set_flashdata('pesan','Data Gagal Ditambah!');
				$this->tambah();
			}
		}
	}

	public function edit_surat($id){
 	if ($this->uri->segment(3)==null) {
		echo "<script>alert('Anda belum memilih data yang diedit')</script>";
		$this->index();
	}
	$data = array(
		'title'=>'surat',
		'title_level1'=>'data surat',
		'title_level2'=>'edit surat',
		'surat'		=>$this->model->get_where_srt($id)->row(),
		'konten'	=>'direktori/surat_keluar/edit_srt',
		);
		$this->load->view('direktori/template',$data);
	}

	public function update($id){

		if (!empty($_FILES['file']['name'])):	
		$config['upload_path']		='.\assets\ekspor';
		$config['allowed_types']    = 'jpg|png|pdf';
		$config['max_size']         = 10000;
	
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')){
			echo "<script>alert('gagal') </script>";
		}else{
				$thumbnail=$this->input->post('file_now');
				$path=APPPATH.'../assets/ekspor/'.$thumbnail;
				unlink($path);
				$data 			=$this->upload->data();
				$filename		=$data['file_name'];
				$filesize 		= $data['file_size'];
				
		}
		endif;	

		if (!empty($_FILES['file']['name'])) :
			$data = array(
				'tanggal'		=>$this->input->post('tanggal'),
				'no_surat'		=>$this->input->post('no_surat'),
				'alamat'		=>$this->input->post('alamat'),
				'perihal'		=>$this->input->post('perihal'),
				'keterangan'	=>$this->input->post('keterangan'),
				'file'			=>$filename,
				'size'			=>$filesize,
			
			);
		else:
			$data = array(
				'tanggal'		=>$this->input->post('tanggal'),
				'no_surat'		=>$this->input->post('no_surat'),
				'alamat'		=>$this->input->post('alamat'),
				'perihal'		=>$this->input->post('perihal'),
				'keterangan'	=>$this->input->post('keterangan'),	
			);
		endif;

		$edit=$this->model->updateSurat($id,$data);
		if ($edit==1) {
			$this->session->set_flashdata('pesan','Data Berhasil Diubah!');
			redirect('administrator/srt_keluar');
		}else{
			$this->session->set_flashdata('pesan','Data Gagal Diubah!');
			redirect('administrator/edit_surat');
		}
	}

	public function hapus_surat($id){
		$data = $this->model->get_where_srt($id)->row();
		$nama = 'assets/ekspor/'.$data->file;

		if(is_readable($nama) && unlink($nama)){
			$delete = $this->model->hapusData($id);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus!');
			redirect('administrator/srt_keluar');
		}else{
			echo "Gagal";
		}
	}
	public function user($id){
	$data = array(
		'title'=>'user',
		'title_level1'=>'data user',
		'title_level2'=>'kelola user',	
		// 'id_user'	=>$this->session->userdata("userid"),
		// 'nama'		=>$this->session->userdata("namefull"),
		// 'username'	=>$this->session->userdata("username"),
		// 'password'	=>$this->session->userdata("password"),
		// 'level'		=>$this->session->userdata("level"),
		'user'		=>$this->model->get_user($id)->row(),
		'konten'	=>'direktori/user',
	);
	$this->load->view('direktori/template',$data);
	}
	
	public function update_user($id){
		$data = array(
			'nama'		=>$this->input->post('nama'),
			'username'	=>$this->input->post('username'),
			'password'	=>sha1($this->input->post('password')),
			);
			$edit = $this->model->edit_user($id,$data);
		if ($edit){
			$this->session->set_flashdata('pesan','Data Berhasil Diubah! Silahkan Login Ulang.');
			redirect('auth');
		}else{
			echo "<script>alert('Data Gagal Diubah')</script>";
		}
	}
	public function print_srt($id){
		$data['disposisi'] 	= $this->model->fetch_disposisi();
		$data['kasubag'] 	= $this->model->kasubag()->result();
		$data['surat'] 		= $this->model->get_where($id)->row();
		$this->load->view('direktori/surat/surat_print',$data);
	}
}
