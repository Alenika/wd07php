<?php
$i = 1;
while($i <= 100) {
    if ($i % 2 === 0 && $i % 3 !== 0) {
        echo $i;
        echo " ";
    }
    $i++;
}