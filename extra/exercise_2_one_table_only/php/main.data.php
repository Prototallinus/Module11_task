<?php

$a = array(true, false, 1, 0, -1, "1", null, "php");

for ($i = 0; $i <= count($a)-1; $i++) {
    for ($k = 0; $k <= count($a)-1; $k++){
        $result[$i][$k+$k] = (bool)($a[$i] == $a[$k]);
        $result[$i][$k+$k+1] = (bool)($a[$i] === $a[$k]);
    }
}

?>