<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 18-6-2018
 * Time: 12:31
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!--/////////Navbar/////////-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Joey Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="../index.html">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Sport <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Maandag.php">Maandag</a></li>
                    <li><a href="Dinsdag.php">Dinsdag</a></li>
                    <li><a href="Donderdag.php">Donderdag</a></li>
                    <li><a href="Vrijdag.php">Vrijdag</a></li>
                </ul>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Pull ups</h3>
            <img src="img/pullup.png" class="img-fluid" alt="Responsive image">
            <h4>3 x max</h4>
            <p>Gewicht: </p>
        </div>
        <div class="col-sm-4">
            <h3>Reverse grip pulldown</h3>
            <img src="img/reverse.png" class="img-fluid" alt="responsive image">
            <h4>4 x 8-15</h4>
            <p>Gewicht : </p>
        </div>
        <div class="col-sm-4">
            <h3>Cable row(breed)</h3>
            <img src="img/row.png" class="img-fluid" alt="responsive image">
            <h4>4 x 8-12</h4>
            <p>Gewicht : </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h3>Dumbbell row</h3>
            <img src="img/dumbrow.png" class="img-fluid" alt="responsive image">
            <h4>4 x 8-12</h4>
            <p>Gewicht : </p>
        </div>
        <div class="col-sm-4">
            <h3>T-bar row</h3>
            <img src="img/tbar.png" class="img-fluid" alt="responsive image">
            <h4>4 x 8breed</h4>
            <h4>4 x 8smal</h4>
            <p>Gewicht : </p>
        </div>
        <div class="col-sm-4">
            <h3>Dumbbell row</h3>
            <img src="img/bicep.png" class="img-fluid" alt="responsive image">
            <h4>4 x 10-15</h4>
            <p>Gewicht : </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h3>Hammer curl</h3>
            <img src="img/hammer.png" class="img-fluid" alt="responsive image">
            <h4>4 x 8-12</h4>
            <p>Gewicht : </p>
        </div>
    </div>
</div>
</body>
</html>
