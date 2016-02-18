<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once('includes/class-query.php');
$old_news = $query->all_news();
?>
<head>
    <meta charset="UTF-8">
    <title>Valgeranna puhkekeskus</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Valgeranna</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="uudised.php">Uudised</a></li>
                <li><a href="#">Galerii</a></li>
                <li><a href="#">Toad</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin/post-new.php">Admin(ajutine)</a></li>
            </ul>
        </div>
    </nav>

    <?php foreach (array_reverse($old_news) as $article): ?>
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo htmlspecialchars($article->pealkiri);?>
                </div>
                <div class="panel-body">
                    <?php echo htmlspecialchars($article->sisu);?>
                </div>
                <div class="panel-footer">Kuupäev: <?php echo htmlspecialchars($article->kuupaev);?></div>
            </div>
        </div>

    <?php endforeach; ?>
    <div class="col-sm-3 col-xs-12">
        yo
    </div>
</div>
</body>
</html>