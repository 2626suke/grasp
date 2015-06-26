<div class="container main-contents">
    <div class="page-header">
        <h1><?php echo $page_name; ?></h1>
    </div>
    <div class="table-upper">
        <a href="/client/edit/<?php echo $client->id; ?>/" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Del</a>
    </div>
    <table class="table table-bordered detail-table">
        <tr>
            <th class="col-xs-4 col-sm-3">顧客名</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->name; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">事業形態</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->businessform->name; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">業種</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->businesstype->name; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">郵便番号</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->zip; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">住所</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->address; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">電話番号</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->tel; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">FAX番号</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->fax; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">メールアドレス</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->mail; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">ホームページ</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->url; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">従業員数</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->employee_num; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">設立年月日</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->establish_date; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">資本金</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->capital; ?></td>
        </tr>
        <tr>
            <th class="col-xs-4 col-sm-3">決算日</th>
            <td class="col-xs-8 col-sm-9"><?php echo $client->account_date; ?></td>
        </tr>
    </table>
</div>