<?php
/**
 * Description of MY_Controller
 *
 * @author jareep
 */
class MY_Controller extends CI_Controller  {
    
    function __construct() {
        parent::__construct();
    }
    
    function render_template($data=array(), $template='template/default') {
        $this->load->view($template, $data);
    }

}

?>
