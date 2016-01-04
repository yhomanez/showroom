<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmodel extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('m_merk','m_model'));
	}

	public function index(){
		$q_merk = $this->m_merk->getAllMerk();		
		if ($q_merk->num_rows() < 1){			
			// $this->render('admin/merk/create',$this->data);
			redirect('cmerk/create');
		}else{
			$this->data['data_merk'] = $this->m_merk->getAllMerk();
			$this->data['data_model'] = $this->m_model->getAllModel();
			$this->render('admin/model/index',$this->data);
		}
	}

	function create(){
		$q_jenis = $this->m_merk->getAllMerk();
		if ($q_jenis->num_rows() < 1){
			$this->load->model(array('m_jenis','m_merk'));
			$this->session->set_flashdata('pesan_error','Data merk belum ada. Isi data merk terlebih dahulu.');
			$this->data['data_jenis'] = $this->m_jenis->getAllJenis();
			$this->render('admin/merk/create',$this->data);
		}else{
			$this->data['data_merk'] = $this->m_merk->getAllMerk();			
			$this->render('admin/model/create',$this->data);
		}
		
	}	

	function save(){
		if($this->input->is_ajax_request()){			
			$this->form_validation->set_rules('idmerk','Id Merk','required');		
			$this->form_validation->set_rules('namamodel','Nama model','required');			
			if($this->form_validation->run() == false){
				echo json_encode(array('status'=>false,'msg'=>'Data Belum Lengkap'));
			}else{
				$id_merk = $this->input->post('idmerk');
				$nama_model = $this->input->post('namamodel');			
				$data = array(
					'merk_id'=>$id_merk,
					'nama_model'=>$nama_model
				);
				$this->m_model->save($data);	
				echo json_encode(array('status'=>true,'msg'=>'Berhasil Menympan data'));
				return;
			}
		}

		// $this->form_validation->set_rules('idmerk','Id Merk','required');		
		// $this->form_validation->set_rules('namamodel','Nama model','required');		
		// if($this->form_validation->run() == false){
		// 	$pesan_error = "Pesan ajax";
		// 	echo json_encode($pesan_error);
		// }else{
		// 	$id_merk = $this->input->post('idmerk');
		// 	$nama_model = $this->input->post('namamodel');			
		// 	$data = array(
		// 		'merk_id'=>$id_merk,
		// 		'nama_model'=>$nama_model
		// 	);
		// 	$this->m_model->save($data);
		// 	redirect('cmodel');			
		// }
		
	}

	function edit(){
		$id = $this->uri->segment(3);
		$q_model = $this->m_model->getModelById($id);
		$this->data['page_title'] = 'Edit Model Mobil';
		$this->data['data_merk'] = $this->m_merk->getAllMerk();	
		$this->data['data_model'] = $q_model;
		$this->data['data_spesifikasi'] = $this->m_model->cekSpekModel($id);
		$this->render('admin/model/edit',$this->data);
	}
	function update(){
		$data = array();
		$id = $this->input->post('idmodel');
		$id_merk = $this->input->post('idmerk');
		$data['nama_model'] = $this->input->post('namamodel');
		$this->form_validation->set_rules('idmerk','Id Merk','required');
		$this->form_validation->set_rules('namamodel','Nama Model','required');
		$this->form_validation->set_rules('idmodel','Id Model','required');
		if($this->form_validation->run() == FALSE){
			return $this->index();
		}else{
			$this->m_model->update($data,$id);
		}
		redirect('cmodel');

	}
	function delete(){
		$id = $this->uri->segment(3);
		$this->m_model->delete($id);
		redirect('cmodel');
	}
}