<?php
$a = '6' == 6; // php nuskaito, kad '6' yra lygus 6
var_dump ($a);
$a = '6' ===6; //turi sutapti identiškai kai yra ===
var_dump ($a);
$a = 6 ===6;
var_dump ($a);
$a = 1;
echo ++$a . "<br>";
$x = 5;
$y =10;
$a = $x == 5 && $y < 10;
var_dump  ($a);
$a = $x == 5 || $y < 10;
var_dump  ($a);
$a = ($x == 5  xor $y == 10);
var_dump  ($a);
?>