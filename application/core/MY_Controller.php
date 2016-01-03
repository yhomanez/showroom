<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	protected $data = array();

	function __construct(){
		parent::__construct();
		$this->data['page_title'] = 'CarShop';
	}

	protected function render($the_view = NULL){
		$this->data['content_page'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
		$this->load->view('admin/template', $this->data);
	}

}