<?php
    /*
     * @author howtomakeaturn
     */
class Register_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    /*
     * @params Array [$email, $pw, $site_name]
     */
    
    function create($data){
        $this->load->library('SimpleLoginSecure');
        $this->SimpleLoginSecure->create($data['email'], $data['password'], false);
        
        #$this->db->insert(array(), 'sites');
    }
}
