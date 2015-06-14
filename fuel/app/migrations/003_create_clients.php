<?php

namespace Fuel\Migrations;

class Create_clients
{

    public function up()
    {
        \DBUtil::create_table('clients', array(
            'id' => array(
                'constraint' => 11,
                'type' => 'int',
                'auto_increment' => true,
                'unsigned' => true
            ),
            'name' => array(
                'constraint' => 50,
                'type' => 'varchar'
            ),
            'business_form_id' => array(
                'constraint' => 11,
                'type' => 'int'
            ),
            'business_type_id' => array(
                'constraint' => 11,
                'type' => 'int'
            ),
            'zip' => array(
                'constraint' => 7,
                'type' => 'char',
                'null' => true
            ),
            'address' => array(
                'constraint' => 100,
                'type' => 'varchar',
                'null' => true
            ),
            'tel' => array(
                'constraint' => 15,
                'type' => 'varchar',
                'null' => true
            ),
            'fax' => array(
                'constraint' => 15,
                'type' => 'varchar',
                'null' => true
            ),
            'mail' => array(
                'constraint' => 100,
                'type' => 'varchar',
                'null' => true
            ),
            'url' => array(
                'constraint' => 100,
                'type' => 'varchar',
                'null' => true
            ),
            'employee_num' => array(
                'constraint' => 7,
                'type' => 'varchar',
                'null' => true
            ),
            'establish_date' => array(
                'type' => 'date',
                'null' => true
            ),
            'capital' => array(
                'constraint' => 11,
                'type' => 'varchar',
                'null' => true
            ),
            'account_date' => array(
                'type' => 'date',
                'null' => true
            ),
            'created_at' => array(
                'constraint' => 11,
                'type' => 'int',
                'null' => true
            ),
            'updated_at' => array(
                'constraint' => 11,
                'type' => 'int',
                'null' => true
            ),
            'deleted_at' => array(
                'constraint' => 11,
                'type' => 'int',
                'null' => true
            )
                ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('clients');
    }

}
