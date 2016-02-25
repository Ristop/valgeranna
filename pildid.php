<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'?>
</head>
<body>
<div class="container">
    <?php include 'header.php'?>

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