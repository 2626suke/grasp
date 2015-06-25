<div class="container main-contents">
    <div class="page-header">
        <h1><?php echo $page_name; ?></h1>
    </div>
    <form action="/client/create" method="post" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-3 control-label">顧客名 <span class="label label-danger">必須</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">事業形態 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option>選択して下さい</option>
                    <?php foreach ($businessforms as $businessform): ?>
                        <option><?php echo $businessform->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">業種 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option>選択して下さい</option>
                    <?php foreach ($businesstypes as $businesstype): ?>
                        <option><?php echo $businesstype->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">郵便番号 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">住所 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">電話番号 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">FAX番号 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">メールアドレス <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">ホームページ <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">従業員数 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">設立年月日 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">資本金 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">決算日 <span class="label label-default">任意</span></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="入力してください">
            </div>
        </div>
        <div class="row">
            <div class="divid-form col-xs-offset-1 col-xs-10"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4 col-xs-offset-1 col-xs-10 text-center">
                <button type="submit" class="btn btn-primary btn-block">送信</button>
            </div>
        </div>
    </form>
</div>