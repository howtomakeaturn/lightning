<?php

class Migration_Create_users_sites extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'user_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE
            ),
            'site_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE
            ),
            'created_at' => array(
              'type' => 'DATETIME'
            )
        ));
        $this->dbforge->create_table('users_sites');
    }

    public function down(){
        $this->dbforge->drop_table('users_sites');
    }
}
