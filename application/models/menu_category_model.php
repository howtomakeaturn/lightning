<?php
    /*
     * @author howtomakeaturn
     */
class Menu_category_model extends MY_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();        
    }
}
