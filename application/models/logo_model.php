<?php
    /*
     * @author howtomakeaturn
     */
class Logo_model extends MY_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();        
    }
}
