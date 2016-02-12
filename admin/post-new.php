<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lisa uudis</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin menu</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="post-new.php">Uudised <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Pildid</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <?php
        //error_reporting(E_ALL);
        //ini_set('display_errors','1');
        if(!empty($_POST)){
            require_once('../includes/class-insert.php');
            if($insert->uudis($_POST)){
                //print_r('<pre>');
                //print_r($_POST);
                //print_r('</pre>');
                print_r('<div class="alert alert-success" role="alert">Uudis edukalt lisatud!</div>');
            }
        }
        ?>
        <h3>Lisa postitus</h3>
        <form method="post" action="post-new.php">
            <div class="form-group">
                <label for="title">Pealkiri</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label for="content">Sisu</label>
                <textarea id="content" class="form-control" rows="5" name="content" ></textarea>
            </div>
            <button type="submit" class="btn btn-default" value="Submit"> Lisa </button>
        </form>
        <h3>Varasemad postitused</h3>

    </div>

</body>
</html>