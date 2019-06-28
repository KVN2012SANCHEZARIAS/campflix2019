<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	// constructor
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('crud_model');
	}
	
	public function index()
	{
	}
	
	function faq()
	{
		$page_data['page_name']		=	'faq';
		$page_data['page_title']	=	'Preguntas Frecuentes';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function refundpolicy()
	{
		$page_data['page_name']		=	'refundpolicy';
		$page_data['page_title']	=	'Políticas';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function privacypolicy()
	{
		$page_data['page_name']		=	'privacypolicy';
		$page_data['page_title']	=	'Acerca de Nosotros';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	


}
