<?php

namespace Fuel\Migrations;

class Create_businesstypes
{

    public function up()
    {
        \DBUtil::create_table('businesstypes', array(
            'id' => array(
                'constraint' => 11,
                'type' => 'int',
                'auto_increment' => true,
                'unsigned' => true
            ),
            'name' => array(
                'constraint' => 10,
                'type' => 'varchar'
            ),
                ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('businesstypes');
    }

}
