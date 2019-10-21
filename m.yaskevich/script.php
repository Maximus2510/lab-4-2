<?php
$n=isset($_GET['n']) ? $_GET['n'] : n;
$s=0;

$i=1;
while ($i) {
        $s=$s+((1)/pow(($i+1),$i));
    if ($i==$n) break; 
$i++;
}
echo "<br> $s ";


?>