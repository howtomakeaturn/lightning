<?php
class test_register_model extends CodeIgniterUnitTestCase
{

	public function __construct()
	{
		parent::__construct('Register Model');
    $this->load->model('Register_model');
	}


	public function test_included()
	{
      $this->assertTrue(class_exists('Register_model'));
	}
  
  public function test_create(){
      $data = array(
          'email' => 'test@test.com',
          'password'  => 'test',
          'subdomain' => 'test',
          'name' => 'test company',
          'intro' => 'just another test',
          'contact_phone' => '0989test',
          'contact_email' => 'test@test.tt',
          'contact_address' => 'test_address'
      );
      
      $site_id = $this->Register_model->create($data);
      $this->assertTrue($site_id);      
  }


}
