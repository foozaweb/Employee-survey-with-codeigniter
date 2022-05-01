<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(E_ERROR | E_PARSE);


class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SurveyModel');
	}

	public function index()
	{ 
		$data['title'] = "Employee Engagement Survey Template";
		$data['unit'] = $this->SurveyModel->getUnit();
		$this->load->view('survey', $data);
	}

	function submitSurvey()
	{
		if ($data = $this->SurveyModel->submitSurvey()) {
			echo json_encode($data);
		}
	}
}
