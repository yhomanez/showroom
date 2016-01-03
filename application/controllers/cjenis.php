<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cjenis extends MY_Controller {
	var $datas;
	function __construct(){
		parent::__construct();		
		$this->load->model(array('m_jenis'));
	}

	public function index(){
		$this->data['data_jenis'] = $this->m_jenis->getAllJenis();
		$this->render('admin/jenis/index',$this->data);
	}

	function create(){
		$this->render('admin/jenis/create');
	}	

	function save(){
		if($this->input->is_ajax_request()){			
			$this->form_validation->set_rules('namajenis','Nama Jenis','required');		
			if($this->form_validation->run() == false){
				echo json_encode(array('status'=>false,'msg'=>'Data Belum Lengkap'));
			}else{
				$nama_jenis = $this->input->post('namajenis');
				$data = array('nama_jenis'=>$nama_jenis);
				$save = $this->m_jenis->save_jenis($data);		
				echo json_encode(array('status'=>true,'msg'=>'Berhasil Menympan data'));
				return;
			}
		}

		// redirect('cjenis/index');
	}
	function edit(){
		$id = $this->uri->segment(3);
		$q_jenis = $this->m_jenis->getJenisById($id);
		$this->data['page_title'] = 'Edit Jenis Mobil';
		$this->data['data_jenis'] = $q_jenis;
		$this->render('admin/jenis/edit',$this->data);
	}
	function update(){
		$data = array();
		$id = $this->input->post('idjenis');
		$data['nama_jenis'] = $this->input->post('namajenis');
		$this->form_validation->set_rules('namajenis','Nama Jenis','required');
		$this->form_validation->set_rules('idjenis','Id Jenis','required');
		if($this->form_validation->run() == FALSE){
			return $this->index();
		}else{
			$this->m_jenis->update($data,$id);
		}
		redirect('cjenis');

	}
	function delete(){
		$id = $this->uri->segment(3);
		$this->m_jenis->delete($id);
		redirect('cjenis');
	}
}