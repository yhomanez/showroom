<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_model extends CI_Model
{
	function __construct(){
		parent::__construct();		
	}
	function getAllModel(){
		return $this->db->get('model_mobil');
	}
	function getModelById($id){
		$query = $this->db->where('id_model',$id)->get('model_mobil');
		return $query;
	}
	function save($data){
		$this->db->insert('model_mobil',$data);
	}
	function update($data,$id_model){
		$this->db->where('id_model',$id_model);
		$this->db->update('model_mobil',$data);
	}	
	function delete($id){
		$this->db->where('id_model',$id);
		$this->db->delete('model_mobil');
	}

	function cekSpekModel($id){
		$query = $this->db->where('model_id',$id)->get('spesifikasi_mobil');
		return $query;
	}
}