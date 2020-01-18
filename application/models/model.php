<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_model
{
    
    public function save ($tabel,$data){ 
        return $this->db->insert($tabel,$data);
    }
    
    public function delete($tabel,$where){
        return $this->db->delete($tabel, $where);
    }
    
    public function update($tabel,$data,$where){
        return $this->db->update($tabel, $data, $where);
    }
    
    public function getsrt($where =''){
        return $this->db->query("SELECT * FROM surat ".$where);
    }
    public function getDataByID($id){
        return $this->db->get_where('surat', array('id_srt'=>$id));
    }
    public function hapusFile($id){
        $this->db->where('id_srt', $id);
        return $this->db->delete('surat');
    }
    public function updateFile($id,$data){
		$this->db->where('id_srt',$id);
		return $this->db->update('surat',$data);
	}

    public function updateSurat($id,$data){
        $this->db->where('id_surat',$id);
        return $this->db->update('surat_klr',$data);
    }

    public function hapusData($id){
        $this->db->where('id_surat', $id);
        return $this->db->delete('surat_klr');
    }
    
    public function getlogin($username,$password){
        $data = array(
            'username' => $username,
            'password' => sha1($password), 
        );
        return $this->db->get_where('user',$data);
    }
    
    public function get_where($id){  
        return $this->db->get_where('surat',array('id_srt'=>$id));
    }
    public function get_where_ksb($id){  
        return $this->db->get_where('kasubag',array('id_ksb'=>$id));
    }
   
    public function getsrt_klr($where =''){
        $this->db->order_by('id_surat','DESC');
        return $this->db->query("SELECT * FROM surat_klr order by id_surat DESC ".$where);
    }
    
    public function get_where_srt($id){  
        return $this->db->get_where('surat_klr',array('id_surat'=>$id));
    }

    public function get_user($id){  
        return $this->db->get_where('user',array('id_user'=>$id));
    }

    public function edit_user($id,$data){
        $this->db->where('id_user',$id);
        return $this->db->update('user',$data);
    }
    public function fetch_dis(){  
        $this->db->order_by('id_ksb,nama,nama_lengkap','DESC');
        $query=$this->db->get('kasubag');
        return $query->result();
    }

    public function fetch_disposisi(){  
        $this->db->order_by('id_disposisi,disposisi,kode');
        $query=$this->db->get('disposisi');
        return $query->result();
    }

    public function get_srt_by_ksb($kasubag){
        $this->db->select('id_srt,Nmr_Agenda,asal_srt,tgl,pukul,nmr_srt,perihal,nama,catatan,catatan1,foto,ukuran,
        d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,dis1,dis2,dis3,dis4,dis5,dis6,dis7,dis8,dis9,dis10,dis11,dis12');
        $this->db->from('surat');
        $this->db->join('kasubag','surat.id_ksb = kasubag.id_ksb');
        $this->db->where('kasubag.nama',$kasubag);
        $query = $this->db->get();
        return $query;
    }

    public function kasubag(){
        $this->db->order_by('id_ksb','DESC');
        return $this->db->get('kasubag');
    }

    public function test(){
        $this->db->select('id_srt,Nmr_Agenda,asal_srt,tgl,pukul,nmr_srt,perihal,nama,catatan,catatan1,foto,ukuran,
        d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,dis1,dis2,dis3,dis4,dis5,dis6,dis7,dis8,dis9,dis10,dis11,dis12');
        $this->db->order_by('id_srt','DESC');
        $this->db->from('surat');
        $this->db->join('kasubag','surat.id_ksb = kasubag.id_ksb');
        $query= $this->db->get();  
        return $query;
    }
     
}
?>