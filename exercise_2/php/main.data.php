<?php

$a = array(true, false, 1, 0, -1, "1", null, "php");
// Array construction is done by performing a double for cicle that stores in the even indexes the weak comparision values, and the strong ones in the odd numbered indexes.
for ($i = 0; $i <= count($a)-1; $i++) {
    for ($k = 0; $k <= count($a)-1; $k++){
        $result[$i][$k+$k] = (bool)($a[$i] == $a[$k]);
        $result[$i][$k+$k+1] = (bool)($a[$i] === $a[$k]);
    }
}

?>