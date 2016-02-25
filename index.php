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
                <a href="index.php" class="navbar-brand">Valgeranna</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><img src="./pic/logo.jpg" alt="Logo" style="width:60px;height:60px;"></a></li>
                    <li><a href="toad.php">Toad</a></li>
                    <li><a href="pildid.php">Galerii</a></li>
                    <li><a href="broneeri.php">Broneeri</a></li>
                    <li><a href="uudised.php">Uudised</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/post-new.php">Admin(ajutine)</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Here is main page images carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src=".\pic\main\2.jpg" alt="Active">
                <div class="carousel-caption">
                    <h1>Valgeranna puhkekeskus</h1>

                </div>
            </div>

            <div class="item">
                <img src=".\pic\main\10.jpg" alt="First">
                <div class="carousel-caption">
                    <h3>Teine pilt</h3>
                    <p>Kiri teisel slaidil?</p>
                </div>
            </div>

            <div class="item">
                <img src=".\pic\main\1.jpg" alt="Third">
                <div class="carousel-caption">
                    <h3>Kolmas pilt</h3>
                    <p>Kiri kolmandal slaidil?</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-sm-4">
                <h3>Tutvustus</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Muljed</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Uudised</h3>
                <?php foreach (array_reverse($old_news) as $article): ?>
                    <div class="col-sm-9 col-xs-12">
                        <div class="newsPanel">
                            <div class="newsPanel-heading">
                                <?php echo htmlspecialchars($article->pealkiri);?>
                            </div>
                            <div class="newsPanel-body">
                                <?php echo htmlspecialchars($article->sisu);?>
                            </div>
                            <div class="newsPanel-footer">Kuupäev: <?php echo htmlspecialchars($article->kuupaev);?></div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>