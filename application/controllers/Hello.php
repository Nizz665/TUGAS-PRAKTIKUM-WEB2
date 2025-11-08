<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller 
{

	public function index()
	{
		echo "Hallo, perkenalkan nama saya Muhammad Nizar";
	}

   	public function hello_2310010247()
	{
		$this->load->model('hello_model');
		$data = $this->hello_model->hello_2310010247();
		echo $data;
	}

	public function hello_view()
	{
		$this->load->view('hello_view');
	}

	public function hello_mvc()
	{
		$this->load->model('hello_model');
		$data['mvc'] = $this->hello_model->hello_mvc();
		$this->load->view('hello_view', $data);
	}
}
