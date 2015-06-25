<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page_name; ?> - Grasp</title>
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('common.css'); ?>
        <?php echo Asset::js('jquery.min.js'); ?>
        <?php echo Asset::js('bootstrap.min.js'); ?>
        <?php echo Asset::js('common.js'); ?>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Grasp</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">メニューA</a></li>
                        <li><a href="#">メニューB</a></li>
                        <li><a href="#">メニューC</a></li>
                        <li><a href="#">メニューD</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> ユーザーネーム <span class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">プロフィール</a></li>
                                <li><a href="#">設定</a></li>
                                <li class="divider"></li>
                                <li><a href="#">ログアウト</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $content; ?>
    </body>
</html>