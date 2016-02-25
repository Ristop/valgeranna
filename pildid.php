<!DOCTYPE html>
<html lang="en">

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

    <div class="row">
        <?php
        $dir = './pic/gallery';
        $file_display = array('jpg', 'jpeg', 'png', 'gif');
        if (file_exists($dir) == false) :
            echo 'Directory \'', $dir, '\' not found!';
        else :
            $dir_contents = scandir($dir);
            foreach ($dir_contents as $file):
                $explode = explode('.', $file);
                $end = end($explode);
                $file_type = strtolower($end);
                if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true):?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href=<?php echo "$dir/$file"?>>
                            <img class="img-responsive" src=<?php echo "$dir/$file"?> alt=<?php echo"$file"?>>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <hr>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</body>

</html>