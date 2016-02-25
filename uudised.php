<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once('includes/class-query.php');
$old_news = $query->all_news();
?>
<head>
    <?php include 'head.php'?>
</head>
<body>
<div class="container">
    <?php include 'header.php'?>

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