<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Controller principal.
	Carrega a view land_page
*/
class Principal extends CI_Controller {

	public function index(){
		$this->load->view('land_page');
	}
}
