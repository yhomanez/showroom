<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jenis extends CI_Model
{
	function __construct(){
		parent::__construct();		
	}
	function getAllJenis(){
		return $this->db->get('jenis_mobil');
	}
	function getJenisById($id){
		$query = $this->db->where('id_jenis',$id)->get('jenis_mobil');
		return $query;
	}
	function save_jenis($data){
		$this->db->insert('jenis_mobil',$data);
	}
	function update($data,$id_jenis){
		$this->db->where('id_jenis',$id_jenis);
		$this->db->update('jenis_mobil',$data);
	}	
	function delete($id){
		$this->db->where('id_jenis',$id);
		$this->db->delete('jenis_mobil');
	}
}