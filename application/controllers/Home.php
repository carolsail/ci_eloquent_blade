<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('programming_language');

		$list = Programming_language::all();

		$this->load->view('home/index', ['list' => $list]);
	}

	public function blade(){
		return view('home/test', ['name'=>'sail','age'=>18]);
	}
}
