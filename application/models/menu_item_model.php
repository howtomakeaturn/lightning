<?php
    /*
     * @author howtomakeaturn
     */
class Menu_item_model extends MY_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();        
    }
}
