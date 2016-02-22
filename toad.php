<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Valgeranna puhkekeskus</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
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
    <div class="rooms">
        <div class="row">
            <div class="col-xs-4 col-md-3">
                <img src="\pic\4.jpg" alt="Kahekohaline">
            </div>
            <div class="col-xs-9 col-md-7">
                <h2>Deluxe Double Room with Sea View</h2>
                <p>Our spacious deluxe sea view rooms are available with either twin or double beds, offering stunning views over Brighton seafront. Doubles have king-sized beds and all offer crisp Egyptian cotton linen, luxury toiletries, bathrobes and tea and coffee making facilities.</p>
            </div>
            <div class="col-xs-3 col-md-2">
                <h3>Hind: 45 eur</h3>
                <button>Broneeri tuba</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-md-3">
                <img src="\pic\8.jpg" alt="Neljakohaline">
            </div>
            <div class="col-xs-9 col-md-7">
                <h2>Duplex Quadruple Room</h2>
                <p>4-kohaline tuba. Seletus. Our spacious deluxe sea view rooms are available with either twin or double beds, offering stunning views over Brighton seafront. Doubles have king-sized beds and all offer crisp Egyptian cotton linen, luxury toiletries, bathrobes and tea and coffee making facilities. </p>
            </div>
            <div class="col-xs-3 col-md-2">
                <h3>Hind: 45 eur</h3>
                <button>Broneeri tuba</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>