<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Core_Controller
{
	public function index()
	{
		$data['title'] = 'Welcome to CodeIgniter!';
		$this->template->load('template', 'welcome_message', $data);
	}
}
