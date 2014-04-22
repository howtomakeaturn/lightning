<?php

class Migration_Create_site extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'MEDIUMINT',
              'constraint' => '8',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'subdomain' => array(
              'type' => 'VARCHAR',
              'constraint' => '32',
            ),
            'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '32',
            ),
            'intro' => array(
              'type' => 'TEXT'
            ),
            'contact_phone' => array(
              'type' => 'VARCHAR',
              'constraint' => '32'
            ),
            'contact_email' => array(
              'type' => 'VARCHAR',
              'constraint' => '32'
            ),
            'contact_address' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
            ),
            'show_phone' => array(
              'type' => 'BOOLEAN'
            ),
            'show_email' => array(
              'type' => 'BOOLEAN'
            ),
            'show_address' => array(
              'type' => 'BOOLEAN'
            ),
            'show_menu' => array(
              'type' => 'BOOLEAN'
            ),
            'show_blog' => array(
              'type' => 'BOOLEAN'
            ),
            'created_at' => array(
              'type' => 'DATETIME'
            ),
            'modified_at' => array(
              'type' => 'DATETIME'
            )          
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('sites');
    }

    public function down(){
        $this->dbforge->drop_table('sites');
    }
}
