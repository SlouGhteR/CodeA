<?php
include "../class/asmuo.php";
include "../class/svecias.php";
$mas=[];
$mas[]=new servisas('honda', 'accord','2017','4');
$mas[]=new servisas('audi', 'a3','1997','4');
$mas[]=new servisas('bmw', 'i3','1995','3');
foreach ($mas as $dy){
    echo $dy->info() .'<br>';
};

//var_dump ($mas);
//echo $mas->info($mas);

