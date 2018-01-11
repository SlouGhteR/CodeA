<?php
$m = ['bmw', 'audi', 'honda', 'lada'];
//json_encode naudojamas duomenų apsikeitimui iš back-end į front-end
echo json_encode ($m). '<br>';
sort ($m); //rūšiavimas pagal reikšmę didėjimo tvarka
echo json_encode ($m). '<br>';
rsort ($m); //rūšiavimas mažėjimo tvarka
echo json_encode ($m) .'<br>';
//JSON.stringify -java-script JSON kodavimo forma
//shuffle ($m); //sumaišyti kaskart perkraunant
//echo json_encode($m). '<br>';
$m2 = array_slice($m, 1,2);//masyvo dalis
echo json_encode ($m2). '<br>';
$m3=array_slice ($m, 1,3);
//unset ($m3[1]);
echo json_encode ($m3).'<br>';
for ($i=0; $i<count($m3); $i++){
    if ($m3[$i]=='bmw'){
        unset ($m3[$i]);
        break;
    }
}
echo json_encode ($m3) .'<br>';
$m4=$m;
if (in_array('hondac', $m4))echo 'honda rasta<br>';//parodo ar yra toks elementas masyve
else echo 'honda nerasta<br>';
$s = 'honda, bmw, audi, lada';
$ms =explode (',', $s);//masyvas iš teksto
echo json_encode ($s) .'<br>';
for ($i=0; $i<count($ms);$i++)$ms[$i]=trim($ms[$i]);
$s2 =implode (':', $ms);
echo json_encode ($s2).'<br>';
list ($auto1, $auto2, $auto3, $auto4)=$ms;//paima mašinas iš $ms ir surašo į atitinkamus $autoX
var_dump($auto1);
$a1 =$ms[0];//tas pats rezultatas kaip ^ tik rankiniu būdu
$a2 =$ms[1];
$a3 =$ms[2];
$a4 =$ms[3];
var_dump($a1);
var_dump($a2);
var_dump($a3);
var_dump($a4);
$z =[1,3,6,2,10,12,44];

function vidurkis ($mas){
    $sum=0;
    for ($i=0; $i<count($mas); $i++) $sum+=$mas{$i};
    return $sum/count ($mas);
}
echo vidurkis ($z). '<br>';

function prideti ($mas, $skaicius){

    for ($i=0; $i<count($mas); $i++) $mas[$i]=$mas[$i]+$skaicius;
    return $mas;
}
echo json_encode (prideti ($z, 1)).'<br>';
$z2 = [15,3,10,20,2,0,5];

function didziausias ($mm){
    $d=0;
    for ($i=0; $i<count($mm);$i++){
        if ($mm{$i}>$d)$d=$mm[$i];
    }
    return $d;
}
echo didziausias($z2).'<br>';

function maziausias0 ($mm){
    for ($i=0; $i<count($mm);$i++){
        if (isset ($d)){
            if ($mm[$i] <$d &&$mm[$i]>0) $d=$mm[$i];
        }else $d=$mm[$i];

}return $d;

}
echo maziausias0 ($z2).'<br>';

$x =['labas', 'rytas','.kaunas#', 'jonas jonAITIS'];
function mazosios ($s){
    $c=strtolower($s);//visos mazosios
    $c=rtrim(ltrim($c, '.'), '#');//nutrina nereikalingus zenklus

    return $c;
}
$p=[];
$nmp=[];
$nmd=[];
$nml=[];
$nmx=[];
$nms=[];
for ($i=0; $i<count($x); $i++){ $p= mazosios($x[$i]);
    $nmd[] = ucwords($p);
    $nmp[] = strtoupper($p);//didziosiomis
    $nml[]=$p.'-'.strlen($p);//parasoma kiek simboliu uzima zodi
    $nmx[]=$p .'-'.strpos($p, 'a');//ieskome kelintoje pozicijoje yra raide 'a'
    $nms[]=str_shuffle($p);
}
echo json_encode($p).'<br>';
echo json_encode($nmp).'<br>';
echo json_encode($nmd).'<br>';
echo json_encode($nml).'<br>';
echo json_encode ($nmx).'<br>';
echo json_encode ($nms).'<br>';

$j =[1,2,3,4,5,6,7,8,9];
$f= 7.5;
 function sudaugink ($m,$s){
     for ($i=0; $i<count($m); $i++) $m[$i] *= $s;
     return $m;
 }
echo json_encode (sudaugink ($j, $f)).'<br>';

 $g= ['petras', 'magnum', 'kalibras','souls'];
function zodziai ($f){
    $d=0;
    for ($i=0; $i<count($f); $i++) $d+=strlen($f[$i]);
    return $d;
}
echo zodziai ($g). '<br>';
$ffg = [1,5,3,5,7];
function pvz ($m){
    $belekas=0;
    for ($i=0; $i<count($m); $i++){
       $belekas += $m[$i];
      ;
    }

    return sqrt($belekas);
};
echo pvz($ffg).'<br>';

$gfgf = ['asdas', 'asdasda', 'gggg', 'rrrr'];
function tekstas ($m){

    for ($i = 0; $i < count($m); $i++) {
        $dd[]=strtolower($m[$i]);
        $dd[]=ucfirst($m[$i]);
    }
    return $dd;
};
echo json_encode (tekstas($gfgf)).'<br>';
$yy= ['ycy', 'bbcb', 'fff'];
function pvz2 ($m)
{
    $r = [];
    for ($i = 0; $i < count($m); $i++) {
        $r[] = str_shuffle($m[$i]);
    };
    $rez=implode(' ',$m);

    return $rez;

};
echo pvz2($yy);