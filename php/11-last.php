<?php
session_start();
if(!isset($_SESSION['sesija']));

$_SESSION['sesija'] = $_POST;

header('location: paskutine-php-php-Kursai.php');