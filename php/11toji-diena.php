<?php
/*try {
catch (PDOException $err){
    $err->getMessage();


    }
$cnn = new PDO ('mysql:host=eder.lt; dbname=test', 'test', 'test');
$kaina = 3000;
//taikynys nulaužimui istatant specialu teksta vietoje $kaina
$res = $cnn->querry("select aut_gamintojas  from auto where aut_kaina>($kaina)");
while ($a = $res->fetch()) {
    echo $a['aut_gamintojas'] . '<br>';
};
//su apsauga nuo nulauzimo
$res = $cnn->prepare("select aut_gamintojas  from auto where aut_kaina>:kaina)");
$x = $res->execute([':kaina' => $kaina]);
while ($a = $res->fetch()) {
    echo $a['aut_gamintojas'] . '<br>';
};
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
};*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<form method="post" action="11diena-2.php">
    <label> Gamintojas:</label><input type="text" name="gamintojas"><br>
    <label> Modelis:</label><input type="text" name="modelis"><br>
    <label> Metai:</label><input type="text" name="metai"><br>
    <label> Kaina:</label><input type="text" name="kaina"><br>
    <input type="submit" value="Pateikti">
</form>
</body>
</html>