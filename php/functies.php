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

    $celcius = 12;

    //fah($celcius);

    function fah($celcius){
        $fahrenheit = $celcius * 1.8 + 32 ;

        echo $fahrenheit;

    }

    echo " het is " .$celcius, " graden in celcius";
    echo '<br>';
    echo '<br>';
    echo " het is " .fah($celcius), " in Fahrenheit";






    ?>




</ul>



</body>
</html>

