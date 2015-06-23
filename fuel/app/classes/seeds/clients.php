<?php

namespace Seeds;

class Clients
{

    public static function seed()
    {
        \DBUtil::truncate_table('clients');
        \DB::insert(
                'clients'
        )->columns(array(
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
            'created_at'
                )
        )->values(array(
            '東芝',
            1,
            3,
            '1058001',
            '東京都港区芝浦1-1-1',
            '0334574511',
            '0334574512',
            'toshiba@example.com',
            'http://www.toshiba.co.jp/',
            '200260',
            '1875-07-12',
            '10000000',
            '0000-07-15',
            date('Ymd')
                ), array(
            'ダイサンホーム',
            2,
            8,
            '2210015',
            '横浜市神奈川区神之木町2-45',
            '0454303883',
            '0454303882',
            'daisan@example.com',
            'http://daisanhome.co.jp/',
            '60',
            '1990-12-18',
            '5000000',
            '0000-12-31',
            date('Ymd')
                ), array(
            'トヨタ財団',
            7,
            4,
            '1630437',
            '東京都新宿区西新宿2-1-1',
            '0333441701',
            '0333426911',
            'toyotafound@example.com',
            'http://www.toyotafound.or.jp',
            '5000',
            '1974-10-15',
            '100',
            '0000-03-01',
            date('Ymd')
                )
        )->execute();
    }

}
