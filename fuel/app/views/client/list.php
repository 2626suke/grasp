<div class="container main-contents">
    <div class="page-header">
        <h1><?php echo $page_name; ?></h1>
    </div>
    <div class="table-upper">
        <p>
            <a href="/client/create/" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> New</a>
            <a href="#search-form" class="btn btn-default" data-toggle="collapse"><span class="glyphicon glyphicon-search"></span> Search</a>
        </p>
        <div class="collapse" id="search-form">
            <form action="#" method="get">
                <div class="row">
                    <p class="col-sm-4">
                        <span>ラベル</span>
                        <select>
                            <option>選択して下さい</option>
                            <option>選択肢A</option>
                            <option>選択肢B</option>
                            <option>選択肢C</option>
                        </select>
                    </p>
                    <p class="col-sm-4">
                        <span>ラベル</span>
                        <select>
                            <option>選択して下さい</option>
                            <option>選択肢A</option>
                            <option>選択肢B</option>
                            <option>選択肢C</option>
                        </select>
                    </p>
                    <p class="col-sm-4">
                        <span>ラベル</span>
                        <select>
                            <option>選択して下さい</option>
                            <option>選択肢A</option>
                            <option>選択肢B</option>
                            <option>選択肢C</option>
                        </select>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><a href="#">顧客名</a> <span class="glyphicon glyphicon-arrow-up"></span></th>
                    <th><a href="#">郵便番号</a> <span class="glyphicon glyphicon-arrow-down"></span></th>
                    <th><a href="#">住所</a> <span class="glyphicon glyphicon-arrow-down"></span></th>
                    <th><a href="#">電話番号</a> <span class="glyphicon glyphicon-arrow-down"></span></th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr data-href="<?php echo '/client/detail/' . $client->id . '/'; ?>">
                        <td><?php echo $client->name; ?></td>
                        <td><?php echo $client->zip; ?></td>
                        <td><?php echo $client->address; ?></td>
                        <td><?php echo $client->tel; ?></td>
                        <td>
                            <a class="btn btn-default btn-xs" href="#"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                            <a class="btn btn-default btn-xs" href="#"><span class="glyphicon glyphicon-trash"></span> Del</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="clearfix">
        <ul class="pagination pull-right">
            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
    </div>
</div>