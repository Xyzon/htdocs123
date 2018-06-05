<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 22-5-2018
 * Time: 13:17
 */


//print_r($_POST);

//print_r($_POST['apen']);

foreach ($_POST['apen'] as $aap) {
    echo "<img src=apen/".$aap.".png>";
}

