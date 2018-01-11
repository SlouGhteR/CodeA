<?php
$m=[
['bmw', '320i', '2000'],
['audi', '100', '1990'],
['honda', 'civic', '2005']
];
$x=3;
$y=3;

echo '<table>';
for ($i=0; $i<$x; $i++){
    echo '<tr>';
    for ($j=0; $j<$y; $j++){
        echo '<td>'.$m[$i][$j].'</td>';
    }
    echo '</tr>';
};
$myfile= fopen("failas.txt",'w' );
$txt = 'Labas Rytas';
fwrite($myfile, $txt);
fclose($myfile);
echo 'irasyta<br>';

$myfile= fopen("failas.txt",'a' );
$txt = '2017';
fwrite($myfile, $txt);
fclose($myfile);
echo 'papildyta<br>';
if (!file_exists('failai2'))mkdir ('failai2');
rmdir('failai2');

copy ('failas.txt', 'failai/failas.txt');

$dbh = new PDO ('mysql:host=eder.lt; dbname=test', 'root');
$sql = "select count (*) as cnt from auto";
$res = $cnn->querry ($sql);
while ($row=$res->fetch()){
    echo $row ['cnt']. '<br>';
};

$res -> closeCursor();
$sql = "select (*) where aut_kaina>3000; from auto";
$res = $cnn ->querry ($sql);
echo '<table>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>'. $row['aut_gamintojas'];
    echo '<td>'. $row['aut_metai'];
    echo '<td>'. $row['aut_kaina'];
    echo '<td>';
    echo '</tr>';
};
echo '</table>';
$res -> closeCursor();
