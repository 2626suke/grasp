<?php

namespace Seeds;

class Businesstypes
{

    public static function seed()
    {
        \DBUtil::truncate_table('businesstypes');
        \DB::insert(
                'businesstypes'
        )->columns(array(
            'name',
            'kbn'
                )
        )->values(array(
            '小売業',
            '01'
                ), array(
            '建設業',
            '02'
                ), array(
            '製造業',
            '03'
                ), array(
            '卸売業',
            '04'
                ), array(
            '飲食業',
            '05'
                ), array(
            '理美容業',
            '06'
                ), array(
            'IT業',
            '07'
                ), array(
            'サービス業',
            '08'
                )
        )->execute();
    }

}
