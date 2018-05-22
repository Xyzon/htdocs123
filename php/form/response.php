<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 22-5-2018
 * Time: 11:33
 */

if($_POST['voornaam'] == ""){
    echo "Je moet nog een naam invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a>";
}

 echo "<br>";

if($_POST ['adres'] == "") {
    echo "je moet nog je adres invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a>";
}

echo "<br>";

if($_POST ['email'] == "") {
    echo "je moet nog je email invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a>";
}

echo "<br>";

if($_POST ['wachtwoord'] == "") {
    echo "je moet nog wachtwoord invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a>";
}



