<?php
class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();

      #  $user_id = $this->session->userdata('user_id');
        #$this->data['user'] = $this->user_lib->get($user_id);
    }
    function is_post(){
        if ( $this->input->server('REQUEST_METHOD') == 'POST' ){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}

function fuck($var){
    show_error(var_export($var));
}
