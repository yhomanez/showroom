<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_merk extends CI_Model
{
	function __construct(){
		parent::__construct();		
	}
	function getAllmerk(){
		return $this->db->get('merk_mobil');
	}
	function getmerkById($id){
		$query = $this->db->where('id_merk',$id)->get('merk_mobil');
		return $query;
	}
	function save_merk($data){
		$this->db->insert('merk_mobil',$data);
	}
	function update($data,$id_merk){
		$this->db->where('id_merk',$id_merk);
		$this->db->update('merk_mobil',$data);
	}	
	function delete($id){
		$this->db->where('id_merk',$id);
		$this->db->delete('merk_mobil');
	}
}