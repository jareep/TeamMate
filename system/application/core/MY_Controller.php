<?php
/**
 * Description of MY_Controller
 *
 * @author jareep
 */
class MY_Controller extends CI_Controller  {
    public $needs_auth = false;
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
	$this->load->library('tank_auth');
                
    }
    
    function render_template($data=array(), $template='template/default') {
        $this->load->view($template, $data);
    }

    function index() {
        if (!$this->tank_auth->is_logged_in() && $this->needs_auth) redirect('/auth/login/');
    }
}

?>
