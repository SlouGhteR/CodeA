<?php
$a = true; //logine reiksme -teisingai
$b = false; //logine reiksme -neteisingai
$c =  6 >5 ; //gauname true
$d = 5 > 6 ; //gauname false
$z = 6;
echo $a . '<br>';
echo $b . '<br>';
echo $c . '<br>';
echo $d . '<br>';
var_dump($d);
print_r($c);
$f = (bool)1; //tipo cast
var_dump($f);
$int_a = 0x10; //hex dec integer
echo $int_a .'<br>';
$float_a = 1.15e1; //float
echo $float_a . '<br>';
echo $z;
var_dump ($z);
//eilute string
$eil = '***';
$eil_a='labas $eil_a rytas';
echo $eil_a . '<br>';
$eil_a="labas $eil rytas";
echo $eil_a . '<br>';
echo "labas \x31 rytas". '<br>';
$aaa =<<<EOT
labas rytas 
aš atėjau
EOT;
echo $aaa . '<br>';
echo strlen("ancdef"). '<br>';
$bbb ="labas rytas";
$ccc = substr($bbb,6,3);
echo $ccc ."<br>";
echo strtoupper ($ccc) . "<br>";
$o_1 =new stdClass (); //objekto sukūrimas
$o_3 =(object)[];
$o_4 = json_decode("{}");
$o_1->tipas='automobilis';
$o_1->pavdežė='automatinė';
$o_1->durys=4;
echo $o_1->{'tipas'};
var_dump($o_1);
echo $o_1->tipas. ' '. $o_1->pavdežė . '<br>';
$o_1->{'labas rytas'} = 'aaa';
echo $o_1->{'labas rytas'} .'<br>';
$o_7 = new stdClass ();
$o_7->{'vienas'}='dvejetas';
echo $o_7->{'vienas'} . '<br>';
