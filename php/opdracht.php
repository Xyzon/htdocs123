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

doorelkaar();

function doorelkaar(){
    $zin = "joey houd van groot";
    $shuffle = str_shuffle($zin);

    echo $shuffle;
}

?>



</ul>



</body>
</html>
