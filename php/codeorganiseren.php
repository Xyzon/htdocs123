<?php

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>PHP Opdrachten</title>
    <style></style>
</head>
<body>

<ul>
    <?php
    $dieren = array("aap","beer","konijn","vis");
    $sporten = array("handbal","korfbal","hockey","schaatsen");
    shuffle($sporten);
    count($sporten);
    echo "<li>Er zijn ".count($sporten)." sporten in de array </li>";
    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);



    function geefArrayWeerAlsLijst($arr) {

        foreach($arr as $arr_element) {
            echo "<li>".$arr_element."</li>";

        }
    }





    ?>




</ul>



</body>
</html>

