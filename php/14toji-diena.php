<?php
$x = ('LaBas rytas PetrAI');
$kk= explode(" ",$x);
for ($i=0; $i<count($kk);$i++){
        $z[$i]=ucfirst(strtolower($kk[$i]));
        };

$g=implode('|', $z);
echo $g. '<br>';

class CodeAcademy {
    public $data;
    public $skaicius;
    public $auditorija;
    function __construct($d, $s, $a){
        $this->data=$d;
        $this->skaicius=$s;
        $this->auditorija=$a;
    }
    function kursas(){
        $z= $this->data . "," . $this->skaicius. ",". $this->auditorija;
        echo $z;
    }
}
class BackEnd extends CodeAcademy
{
    function kursas()
    {
        $z = $this->data . "," . $this->skaicius . "," . $this->auditorija . "(backend kursas)";
        echo $z;
    }
}
class FrontEnd extends CodeAcademy{
    function kursas()
    {
        $z = $this->data . "," . $this->skaicius . "," . $this->auditorija . "(frontend kursas)";
        echo $z;
    }
}
$zmogus = new CodeAcademy('2017-12-11', '11', '3');
echo $zmogus->kursas(). '<br>';
$zmogus = new BackEnd('2017-12-11', '11', '3');
echo $zmogus->kursas(). '<br>';
$zmogus = new FrontEnd('2017-12-11', '11', '3');
echo $zmogus->kursas(). '<br>';

class rndList {
    public $numbers=[];
    function generate(){
        $gg=rand(0, 10);
        $this->numbers[]=$gg;

    }
    function list1(){
        sort($this->numbers);
        for ($i=0; $i<count($this->numbers); $i++){
            echo $this->numbers[$i]. ' ';
        }
    }
}
$hh= new rndList();
echo $hh->generate();
echo $hh->generate();
echo $hh->generate();
echo $hh->generate();
echo $hh->generate();
echo $hh->list1();
/*Sukurkite HTML dokumentą 11.1-frontend.html su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Vardas, Pavardė, 1x radio pasirinkimas: Valgis:‐ mėsiškas, žuvies, vegetariškas. Forma turėtu būti nusiųsta į 11.1-backend.php failą metodu GET. 11.1-backend.php faile pridėkite įrašą į sesiją, įrašykite į tekstinį failą (papildydami jį) 11.1-file.txt (failo atidarymo tipas a)  ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="pasibandymas1.php">
    <label>Vardas</label><input type="text" name="Vardas">
    <labet>Pavarde</labet><input type="text" name="Pavarde">
    <label>Maistas</label><input type="radio" name="Valgis" value="mesiskas">Mesiskas
    <input type="radio" name="Valgis" value="zuvies">Zuvies
    <input type="radio" name="Valgis" value="vegetariskas">Vegetariskas
    <input type="submit" name="eiti">

</form>
</body>
</html>

