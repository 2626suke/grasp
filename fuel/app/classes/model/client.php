<?php

class Model_Client extends \Orm\Model_Soft
{

    protected static $_properties = array(
        'id',
        'name',
        'business_form_id',
        'business_type_id',
        'zip',
        'address',
        'tel',
        'fax',
        'mail',
        'url',
        'employee_num',
        'establish_date',
        'capital',
        'account_date',
        'created_at',
        'updated_at',
        'deleted_at'
    );
    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_update'),
            'mysql_timestamp' => false
        ),
    );
    protected static $_belongs_to = array(
        'businessform' => array(
            'key_from' => 'business_form_id',
            'model_to' => 'Model_Businessform',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false
        ),
        'businesstype' => array(
            'key_from' => 'business_type_id',
            'model_to' => 'Model_Businesstype',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false
        )
    );

}
