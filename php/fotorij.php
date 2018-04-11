<?php

?>


<!DOCTYPE html>
<html>
<head>
    <title>Php Opdrachten</title>
</head>
<body>
<?php
//    for($i = 1; $i<=9 ;$i++) {
//    echo "<img src='img/apen/aap".$i.".png'>";
//}


$bomen = array ("boom.png", "forest.png", "tree.png", "wood.png");

foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}





?>
</body>

</html>

