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
            'name',
            'kbn'
                )
        )->values(array(
            '株式会社',
            '01'
                ), array(
            '有限会社',
            '02'
                ), array(
            '合同会社',
            '03'
                ), array(
            '合資会社',
            '04'
                ), array(
            '合名会社',
            '05'
                ), array(
            '社団法人',
            '06'
                ), array(
            '財団法人',
            '07'
                ), array(
            'NPO法人',
            '08'
                ), array(
            '個人事業',
            '09'
                )
        )->execute();
    }

}
