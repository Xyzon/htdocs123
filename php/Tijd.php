<?php
// PHP Opdracht door:
// Joey Clazing


$nu = date ('H'); // Hoelaat is het nu (in uren)
if ($nu >=12) {
  echo "Het is middag";
} else if ($nu > 6) {
  echo "Het is ochtend";
} else {
  echo "Het is nacht";
}


?>