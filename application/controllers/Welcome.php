<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
        {
            parent::__construct();

            // $this->load->model('Admin_model');
            // $this->load->model('Seller_model');
            $this->load->helper(array('url', 'form'));
            $this->load->library('form_validation');
            $this->load->helper('download');
        }
	public function index()
	{
		$this->load->view('Admin/index');
	}
	public function login()
	{
		$this->load->view('Admin/login');
	}
	public function users()
	{
		$this->load->view('Admin/users');
	}
}
