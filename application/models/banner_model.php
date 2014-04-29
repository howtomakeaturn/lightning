<?php
    /*
     * @author howtomakeaturn
     */
class Banner_model extends MY_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();        
    }
}
