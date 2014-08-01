<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Avatar
 */
class Avatar extends CI_Controller
{
    
    /**
     * The Contructor!
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('text_avatar/text_avatar');
    }
    public function index() {
        if( $this->input->get('t') ){
            $this->text_avatar->avatar( $this->input->get('t'), $this->input->get('h'), $this->input->get('h'));
        } 
    }
}
 // End of the Avatar

/* End of file avatar.php */

/* Location application/controllers/avatar.php */
