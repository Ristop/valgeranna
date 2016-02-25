<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

$add_message = "";
$delete_message = "";
if(!empty($_POST)){
    if(isset($_POST['title']) and isset($_POST['content']) and isset($_POST['date'])){
        print_r($_POST);
        require_once('../includes/class-insert.php');
        if($insert->uudis(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']), htmlspecialchars($_POST['date']))){
            $add_message = '<div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>';
        }
    }
    if (isset($_POST['old_id'])){
        require_once('../includes/class-delete.php');
        if($delete->uudis(htmlspecialchars($_POST['old_id']))){
            $delete_message = '<div class="alert alert-success" role="alert">Postitus kustutatud!</div>';
        }
    }
}

require_once('../includes/class-query.php');
$old_news = $query->all_news();
?>

<head>
    <?php include '../admin-head.php'?>
</head>
<body>
    <div class="container">
        <?php include '../admin-header.php'?>

        <?php echo $add_message ?>

        <h3>Lisa postitus</h3>
        <form method="post" action="post-new.php">
            <div class="form-group">
                <label for="title">Pealkiri</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label for="content">Sisu</label>
                <textarea id="content" class="form-control" rows="5" name="content" ></textarea>
                <input type="hidden" id= "date" name="date" value="">
            </div>
            <button type="submit" class="btn btn-default" value="Submit"> Lisa </button>
        </form>

        <br>

        <?php echo $delete_message ?>
        <h3><?php if(!empty($old_news)){echo "Varasemad postitused";} ?></h3>
        <div class="row">
            <?php foreach (array_reverse($old_news) as $article): ?>
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo htmlspecialchars($article->pealkiri);?>
                            <form method="post" action="post-new.php" class="news-delete">
                                <button class="btn-danger news-delete-button" type="submit" name="old_id" value="<?php echo $article->id;?>">Kustuta</button>
                            </form>
                        </div>
                        <div class="panel-body">
                            <?php echo htmlspecialchars($article->sisu);?>
                        </div>
                        <div class="panel-footer">Kuupäev: <?php echo htmlspecialchars($article->kuupaev);?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
