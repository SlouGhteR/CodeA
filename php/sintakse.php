<!DOCTYPE html>
<html lang="en">
<head>
    <!--Komentaras html-->
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<script>
    //javascript komentaras
</script>
<?php
echo 'labas' .'<br>'; //komentaras
/* komentaras
komentaras */
// kintamieji
$a = 5; //skaičius\
$af = 5.6; //float
$af = 3.1e-3;  //float
$b = true; //boolean, loginis
$c = "abc"; //string
$d = ['bmw', 'honda']; //masyvas
$e = new stdClass(); //objektas
$f = NULL;
//kintamieji gali būti 3 rūšių: local(visi surašyti viršuje), static, global //
function pvz_static(){
    static $a = 0; //sukūrimas su pradine reikšme
    $a++; //+1
    echo $a .'<br>'; // parodymas
}
pvz_static (); // sukuriamas $a pridedamas +1, parodoma
pvz_static (); // +1 parodoma
pvz_static (); // +1 parodomas
$g = 'labas';
function pvz_local(){
    $g ='rytas';
    echo $g . '<br>';
}
pvz_local ();
global $h;
$h = 'labas';
function pvz_global (){
    global $h;
    echo $h . '<br>';
}
pvz_global();
echo $GLOBALS ['h'] . '<br>';
echo $_SERVER ['PHP_SELF'] . '<br>';
eval ('$n ="aaa";'); // EVAL -<<<<<<<<<<<<<<<<<<<<<<<<<
echo $n . '<br>';
define ('konst', 'labas');
echo konst . '<br>';
?>
</body>
</html>

