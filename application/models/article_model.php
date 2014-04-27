<?php
    /*
     * @author howtomakeaturn
     */
class Article_model extends MY_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();        
    }
}
