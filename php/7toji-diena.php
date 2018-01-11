<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body><?php

$o= ['labas', 'rytas', 'as','tau','sakau'];
function diena ($m){
    $nm=[];
    for ($i=0; $i<count($m); $i++){
        $nm[]=$m[$i] .' - '. (strlen($m[$i]) + 1);
    };

return $nm;
};
echo json_encode (diena($o)).'<br>';
$k=['bmw', 'audi', 'honda'];
$tekstas ='aaa';
$kk=['bmw'=>"raud{$tekstas}ona", 'audi'=> "bal\tta", 'honda'=>['juoda', 'melyna', 'zalia']];

echo $k[0].'<br>';
echo $kk['honda'][1].'<br>';
echo implode (' ', $kk ['honda']).'<br>';
$kk['lada'] = 'geltona';
echo json_encode ($kk).'<br>';
$a= ['a', 'x', 'z'];
$b= ['c','m'];
$c=array_merge($a,$b);
print_r($c);
sort ($c);
print_r ($c);
$aa=['bmw'=>"raud{$tekstas}ona", 'audi'=> "bal\tta", 'honda'=>['juoda', 'melyna', 'zalia']];
$bb= ['toyota'=>'zalia','lada'=>'melyna'];
$cc=array_merge ($aa, $bb);
echo '<br>'. json_encode($cc);
ksort($cc);
echo '<br>'. json_encode ($cc);
function test ($ma, $key){
    if (isset($ma[$key])) echo '<br>yra';
    else echo '<br>nera<br>';
};
test ($cc, 'honda');
test ($cc, 'hyundai');
$s="labas %s %s. Sveiki atvyke";//sablonai -<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
echo sprintf ($s, 'jonas', 'jonaitis').'<br>';

function darbuotojas($a, $b, $c){
    return [
        "vardas" => ucfirst(strtolower($a)),
        "pavarde"=>ucfirst(strtolower($b)),
        "profesija"=>ucfirst(strtolower($c)),
    ];
};
$petras= darbuotojas ('Petras', 'Petraitis', 'kulinaras');
function isvedimas ($d){
    $sablonas = "Darbuotojas %s %s yra puikus %s";
    $vardas=$d["vardas"];
    $pavarde=$d["pavarde"];
    $profesija=$d["profesija"];
    $tekstas=sprintf($sablonas, $vardas, $pavarde, $profesija);
    return $tekstas;
};
$kolegos =[];
$kolegos[]= darbuotojas("Petras", 'Petraitis', 'mokinys');
$kolegos[]= darbuotojas("Petras", 'Petraitis', 'mokinys');
$kolegos[]= darbuotojas("Petras", 'Petraitis', 'mokinys');
 echo isvedimas ($kolegos[2]).'<br>';
 echo isvedimas ($kolegos[1]).'<br>';
 echo isvedimas ($kolegos[0]).'<br>';

 function html ($k){
     $sablonas = "
     <table>
     <tr>
     <td>%s</td><td>%s</td><td>%s</td>
</tr>
<tr>
     <td>%s</td><td>%s</td><td>%s</td>
</tr>
<tr>
     <td>%s</td><td>%s</td><td>%s</td>
</tr></table>";
     $d1=$k[0];
     $d2=$k[1];
     $d3=$k[2];

     $html = sprintf($sablonas,
         $d1 ['vardas'], $d1['pavarde'], $d1 ['profesija'],
         $d2 ['vardas'], $d2['pavarde'], $d2 ['profesija'],
         $d3 ['vardas'], $d3['pavarde'], $d3 ['profesija']

     );
     return $html;

 }
 echo html ($kolegos);

 $auto = [];

function masyvas ($a,$b,$c){
    return [
        "gamintojas"=>strtolower($a),
        "modelis"=>strtolower($b),
        "metai"=>strtolower($c)
    ];
};
$auto[] =masyvas('audi', 'a3', '1996');
$auto[] =masyvas('bmw', 'kregzde', '1995');
$auto[] =masyvas('honda', 'accord', '2015');

function htmleilute ($masina){
    $sablonas =
        '<tr>' .
        '<td>%s</td><td>%s</td><td>%s</td>' .
        '</tr>';
     return sprintf($sablonas, $masina['gamintojas'],$masina['modelis'], $masina['metai']);
}
echo '<table>';
    for ($i=0; $i<count($auto); $i++){
       echo htmleilute($auto[$i]);
    }

echo '</table>';
    $svecias=[];
function svecias ($vardas, $pavarde, $maistas){
    return [
            'vardas'=>$vardas,
            'pavarde'=>$pavarde,
            'maistas'=>$maistas,
    ];
};
$svecias = svecias('Jamal', 'Trumpas', 'Anciuviai');
$svecias = svecias('Ovuvuevuevue enyetuenwuevue ugbemugbem', 'Osas', 'nera');
//var_export($svecias);
$uu=[];
//$u=['vardas'=>'Jamal', 'pavarde'=>'Trumpas','maistas'=>'Anciuviai'];
//$u=['vardas'=>'Ovuvuevuevue', 'pavarde'=>'Osas','maistas'=>'nera'];



$u= darbuotojas('Jamal','Trumpas','Aciuviai');
$u= darbuotojas ('Ovuvuevuevue enyetuenwuevue ugbemugbem','Osas', 'nera');

$raktas= ucfirst(strtolower($u['vardas'])).' '.ucfirst(strtolower($u['pavarde']));
$uu[$raktas]=$u;
$x=$uu[$raktas];
var_dump: $u;

function eilute ($u){
    return "<tr><td>" .$u['vardas'].' '.$u['pavarde'].' '.$u['profesija']."</td></td>";
}
echo eilute($u);
?>
<table>
    <?php
    foreach ($uu as $ggg => $ggf){
        echo eilute($ggf);
    //print_r($ggf);
    };
    ?>
</table>
</body>
</html>
