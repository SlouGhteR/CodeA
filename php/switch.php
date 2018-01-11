<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lol</title>
</head>
<body>
<p>Lorem ipsum <span style="color:<?php echo spalvosKodas('raudona') ?>">dolor sit amet,</span> consectetur <span style="font-size: <?php echo sriftas ('didelis')?>">adipisicing elit.</span> Adipisci
    <span style="font-size: <?php echo sriftas ('extra')?>">earum ex harum</span> illo libero quisquam! A adipisci aliquam
    cum dolores,  facilis <span style="font-size:<?php echo sriftas ('mazas')?>">impedit,</span> officia porro <span style="font-size: <?php echo sriftas ('normalus')?>">quaerat similique</span> sint veritatis vero
    voluptatem!</p>;


<?php
function automatas ($pinigai, $pavadinimas) {
    $prekes =[
        'cola'=>1,
        'mineralinis'=>0.5,
        'traškučiai'=>0.75,
        'sprite'=>1.2,
    ];
    if(isset($prekes[$pavadinimas])){
        $preke = $prekes[$pavadinimas];
        if($pinigai>=$preke){
            //preke iskrenta
            if($pinigai=$preke){
                echo 'Paimkite Prekę';

            }
            else {
                echo 'Pasiimkite prekę ir gražą';
                return $preke;
            }

        }
        else{
            echo 'Per mažai pinigų';
            return $pinigai;
        }
    }

    else {
        echo 'Nėra tokios prekes';
        return $pinigai;
    }
    return $pinigai;
}

function pitagoro ($a, $b){
    $d= ($a**2) + ($b**2);
    $c= sqrt($d);
    return $c;

};
echo pitagoro(5, 2).'<br>';

function ati ($a, $b){
    return $c=$a-$b;
}
echo ati(5, 2) .'<br>';

function pab ($x, $y, $z){
    return $d=$x**2 + sqrt ($y) + $x *$y +$z;
};
echo pab (5,2,1). '<br>';


$t = date("H");{
    if ($t < 5){
        echo 'Have a good day!' .'<br>';

    }
    else echo 'Have a good evening!';
}
$a =5;
if ($a ==  5) echo 'Lygu'.'<br>';
elseif ($a>5) echo 'daugiau'.'<br>';
else  echo 'maziau' .'<br>';


$t = date("time");
echo $t. '<br>';

function sulyginti ($a, $b){
    if ($a>$b) return 1;
    elseif ($a==$b) return 2;
    else return -1;
}
echo sulyginti (3,2). '<br>';

function ilgis ($a, $b){
    if (strlen($a)==0) echo 'tuscias';
    elseif (strlen($a)>$b) echo 'daugiau'; //string -eilutės ilgis
    elseif (strlen($a==$b)) echo 'maziau';
    else echo 'maziau';
}
echo ilgis ('Kaunas', 10). '<br>';

function ede ($d){
    $a = 'Petras';
    $b= 'Jonas';
    $c = 'Kazyssss';
    if (strlen($a)==$d) return $a;
    elseif (strlen($b)==$d) return $b;
    elseif (strlen($c)==$d)return $c;
    else return 'nerasta';

};
echo ede (5);
function spalvosKodas ($spalva){
    $kodas= 'black';
    switch ($spalva){
        case 'raudona':$kodas='red';
            break;
        case 'zalia': $kodas ='green';
            break;
        case 'geltona': $kodas ='yellow';
            break;
        // default: $kodas = 'black';
    }
    return $kodas;
};
function sriftas ($dydis){
    $dydiss = '18px';
    switch ($dydis){
        case 'mazas':$dydiss='12px';
            break;
        case 'normalus':$dydiss='18px;';
            break;
        case 'didelis':$dydiss='25px';
            break;
        case 'extra': $dydiss='32px';
            break;
    }
    return $dydiss;

};
echo '<p style="color:' .spalvosKodas('raudona').'">Labas</p>';
//echo '<script>alert("!");</script>';
$masyvas =['bmw', 'audi', 'honda','jaguar'];
for ($i = 0; $i<count($masyvas); $i++){
    echo $i . '.' . $masyvas[$i]. '<br>';
};

$i = 1 ;

foreach ($masyvas as $masina){
    echo ($i++) .'.'.$masina.'<br>';
};
$auto =[
    [
        'gamintojas' =>'bmw',
        'modelis'=>'320',
        'variklis'=>'2.0',
        'durys'=>4,
        'metai'=>2010,
    ],
    [
        'gamintojas' =>'audi',
        'modelis'=>'100',
        'variklis'=>'2.4',
        'durys'=>4,
        'metai'=>1990,
    ],
    [
        'gamintojas' =>'honda',
        'modelis'=>'civic',
        'variklis'=>'1.4',
        'durys'=>3,
        'metai'=>1996,
    ]
];
function getInfo ($masina){
    $s ='';
    $s .= '<td>' .$masina ['gamintojas'].'</td>';
    $s .= '<td>' .$masina ['modelis'].'</td>';
    $s .= '<td>' .$masina ['variklis'].'</td>';
    $s .= '<td>' .$masina ['durys'].'</td>';
    $s .= '<td>' .$masina ['metai'].'</td>';
    return $s;
};
$asmuo =[
    [
        'vardas'=>'Petras',
        'pavarde'=>'Petraitis',
        'maistas'=>'Vistiena',
        'lytis'=>'vyras',
    ],
    [
        'vardas'=>'Jonas',
        'pavarde'=>'Jonaitis',
        'maistas'=>'Jautiena',
        'lytis'=>'vyras',
    ],
    [
        'vardas'=>'Ona',
        'pavarde'=>'Oniene',
        'maistas'=>'Kiauliena',
        'lytis'=>'motris',
    ],
];
function get ($asmenys){
    $i='';
    $i .='<td>' .$asmenys ['vardas'].'</td>';
    $i .='<td>' .$asmenys ['pavarde'].'</td>';
    $i .='<td>' .$asmenys ['maistas'].'</td>';
    $i .='<td>' .$asmenys ['lytis'].'</td>';
    return $i;
};

?>
<table>
    <tr>
        <th>Nr.</th>
        <th>Gamintojas</th>
        <th>Modelis</th>
        <th>Variklis</th>
        <th>Durys</th>
        <th>Metai</th>
    </tr>

    <?php
    $nr = 1;
    foreach ($auto as $masina) {

        echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($masina);
        echo '</tr>';
    };
    ?>
</table>
<table>
    <tr>
        <th>Nr.</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>
    <?php
    $nd = 1;
    foreach ($asmuo as $asmenys){
        echo '<tr>';
        echo '<td>'.$nd++.'</td>';
        echo get ($asmenys);
        echo '</tr>';
    };
    $z=['bmw', 'honda', 'audi'];
    $o = 1;
    while ($o<=count($z)){
        echo $o . '.'.$z[$o-1].'<br>';
        $o++;
    }
    do {
        echo $o . '.' . $z[$o - 1] . '<br>';
        $o++;
    }while ($o <=count($z));

    ?>
</table>
</body>
</html>