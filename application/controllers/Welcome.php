<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('geolocalisation');
	}

	public function link_detail(){
		$this->load->view('product-detail');
	}

	public function link_about(){
		$this->load->view('about');
	}

	public function link_login(){
		$this->load->view('login');
	}
	
	public function link_restau(){
		$this->load->view('restaurant-page');
	}
	
	public function chat(){
		$this->load->view('chat');
	}
}
