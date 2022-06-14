<?php

$a = array(0, 0, 1, 1);
$b = array(0, 1, 0, 1);
for ($i = 0; $i <= count($a)-1; $i++) {
    $not_a[$i] = (int)!$a[$i];
    $a_or_b[$i] = (int)($a[$i] || $b[$i]);
    $a_and_b[$i] = (int)($a[$i] && $b[$i]);
    $a_xor_b[$i] = (int)($a[$i] xor $b[$i]);
}

?>