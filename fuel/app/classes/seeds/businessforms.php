<?php

namespace Seeds;

class Businessforms
{

    public static function seed()
    {
        \DBUtil::truncate_table('businessforms');
        \DB::insert(
                'businessforms'
        )->columns(array(
            'name'
                )
        )->values(array(
            '株式会社'
                ), array(
            '有限会社'
                ), array(
            '合同会社'
                ), array(
            '合資会社'
                ), array(
            '合名会社'
                ), array(
            '社団法人'
                ), array(
            '財団法人'
                ), array(
            'NPO法人'
                ), array(
            '個人事業'
                )
        )->execute();
    }

}
