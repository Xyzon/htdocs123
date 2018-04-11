<?php

?>


<!DOCTYPE html>
<html>
<head>
    <title>Php Opdrachten2</title>
</head>
<body>

<style>

    body {
        text-align:center;
    }

    .red {
        border: red solid 5px;
    }
    .green {
        border: green solid 5px;
    }
</style>
<?php


for($i = 1; $i<=9 ;$i++) {
    if($i %2 == 0 ) {
        $class = "class='red'";
    } else {
        $class = "class='green'";
    }
    echo "<img ".$class. "src='img/apen/aap".$i.".png'>";
}






?>
</body>

</html>

