<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmerk extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('m_jenis','m_merk'));
		// $this->data['pesan'] = "";
	}

	public function index(){
		$q_jenis = $this->m_jenis->getAllJenis();		
		if ($q_jenis->num_rows() < 1){
			// $this->session->set_flashdata('pesan_error','Data jenis belum ada. Isi data jenis terlebih dahulu.');
			$this->render('admin/jenis/create',$this->data);
		}else{
			$this->data['data_jenis'] = $q_jenis;
			$this->data['data_merk'] = $this->m_merk->getAllmerk();
			$this->render('admin/merk/index',$this->data);
		}
	}

	function create(){
		$q_jenis = $this->m_jenis->getAllJenis();
		if ($q_jenis->num_rows() < 1){			
			$this->session->set_flashdata('pesan_error','Data jenis belum ada. Isi data jenis terlebih dahulu.');
			$this->render('admin/merk/index');
		}else{
			$this->data['data_jenis'] = $q_jenis;
			$this->render('admin/merk/create',$this->data);
		}
		
	}	

	function save(){
		$this->form_validation->set_rules('idjenis','Id Jenis','required');		
		$this->form_validation->set_rules('namamerk','Nama merk','required');		
		if($this->form_validation->run() == false){
			$pesan_error = "Pesan ajax";
			echo json_encode($pesan_error);
		}else{
			$id_jenis = $this->input->post('idjenis');
			$nama_merk = $this->input->post('namamerk');			
			$data = array(
				'jenis_id'=>$id_jenis,
				'nama_merk'=>$nama_merk
			);
			$this->m_merk->save_merk($data);
			redirect('cmerk');			
		}
		
	}
	function edit(){
		$id = $this->uri->segment(3);
		$q_merk = $this->m_merk->getMerkById($id);
		$this->data['page_title'] = 'Edit Merk Mobil';
		$this->data['data_jenis'] = $this->m_merk->getAllJenis();	
		$this->data['data_merk'] = $q_merk;
		$this->render('admin/merk/edit',$this->data);
	}
	function update(){
		$data = array();
		$id = $this->input->post('idmerk');
		$id_jenis = $this->input->post('idjenis');
		$data['nama_merk'] = $this->input->post('namamerk');
		$this->form_validation->set_rules('idjenis','Id Jenis','required');
		$this->form_validation->set_rules('namamerk','Nama Merk','required');
		$this->form_validation->set_rules('idmerk','Id Merk','required');
		if($this->form_validation->run() == FALSE){
			return $this->index();
		}else{
			$this->m_merk->update($data,$id);
		}
		redirect('cmerk');

	}
	function delete(){
		$id = $this->uri->segment(3);
		$this->m_merk->delete($id);
		redirect('cmerk');
	}
}