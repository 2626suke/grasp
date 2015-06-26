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
            'name'
                )
        )->values(array(
            '小売業'
                ), array(
            '建設業'
                ), array(
            '製造業'
                ), array(
            '卸売業'
                ), array(
            '飲食業'
                ), array(
            '理美容業'
                ), array(
            'IT業'
                ), array(
            'サービス業'
                )
        )->execute();
    }

}
