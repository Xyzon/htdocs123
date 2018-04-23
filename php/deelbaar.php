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

$i = 15;

if ($i % 3 == 0 ) {
    echo "True";
} else echo "False";

echo "   $i";

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
