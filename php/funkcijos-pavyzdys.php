<?php
$sveciai =[
  ['vardas'=>'Jonas', 'pavarde'=>'Jonaitis','patiekalas'=>'mesa', 'issilavinimas'=>'dr.'], ['vardas'=>'Petras', 'pavarde'=>'Petraitis','patiekalas'=>'zole', 'issilavinimas'=>'profke'],  ['vardas'=>'Tadas', 'pavarde'=>'Tadonis','patiekalas'=>'kebabas']
];
function info($e){
    $s = $e['vardas']. ' '.$e['pavarde']. ' '.$e['patiekalas'];
    if (isset($e['issilavinimas']))$s.=' '. $e['issilavinimas'];
return $s;
}
echo 'Sveciu sarasas<br>';
for ($i=0; $i<count($sveciai); $i++){
    $line = ($i + 1).'.'.info($sveciai[$i]). '<br>';
echo $line;

}
echo 'Is viso sveciu:'.count($sveciai). '<BR>';
$r = 5;
$g = 10;
function daugyba($r ,$g){
    return $f=$r*$g;

}
echo daugyba($r, $g);

?>