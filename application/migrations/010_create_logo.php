<?php

class Migration_Create_logo extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'site_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
            ),
            'file_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('logos');
    }

    public function down(){
        $this->dbforge->drop_table('logos');
    }
}
