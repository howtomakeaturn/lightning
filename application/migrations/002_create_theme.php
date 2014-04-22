<?php

class Migration_Create_theme extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'MEDIUMINT',
              'constraint' => '8',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '32',
            ),
            'created_at' => array(
              'type' => 'DATETIME'
            ),
            'modified_at' => array(
              'type' => 'DATETIME'
            )          
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('themes');
    }

    public function down(){
        $this->dbforge->drop_table('themes');
    }
}
