<?php


session_start();

if(!isset($_SESSION['sesija']));

$_SESSION['sesija'] = $_GET;

header('location: 14toji-diena.php');


$a = fopen('txt.txt', 'a');

$s = '';
foreach ($_GET as $key => $value){
    $s .= ' '.$key.'=>'.$value;
}
fwrite($a, $s);
fclose($a);