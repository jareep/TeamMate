<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{
        public $needs_auth;
        
	function __construct() {
		parent::__construct();
	}

	function index() {
                //$this->needs_auth = ($this->uri->segment(1) == 'welcome2') ? 1 : 0;
                
                parent::index();

		$data['user_id']            = $this->tank_auth->get_user_id();
		$data['username']           = $this->tank_auth->get_username();
		$data['main_content_view']  = $this->load->view('welcome', $data, true);
                $this->render_template($data);
	}
}