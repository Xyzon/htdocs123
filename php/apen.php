<?php
// PHP Opdracht door:
// Joey Clazing

$apen = array("chimp", "makaak", "");


$apen = array(
    array("naam" => "Harry","leeftijd" => 14),
    array("naam" => "joost","leeftijd" => 16),

 );

// $aap["naam"] = "Harry";
// $aap["Leeftijd"] = 12;

// $nogeenaap["naam"] = "Joost";
// $nogeenaap["leeftijd"] = 13;

// $apen = array ($aap, $nogeenaap);






foreach($apen as $aap) {
    echo $aap["naam"];
    echo $aap ["leeftijd"];
    echo "<br>";
    
}





?>