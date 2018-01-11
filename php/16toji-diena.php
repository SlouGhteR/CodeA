<?php
/*Sukurkite PHP skriptą, kuriame būtų aprašyti du kintamieji. Sudėkite juos, sumą padauginkite iš PI reikšmės. Išveskite rezultatą ekrane*/
$a = 2;
$b = 1;
$d = 3.14;
$c = ($a+$b)*$d;
echo $c.'<br>';

/*Sukurkite PHP skriptą, kuriame būtų aprašytas taksi automobilio asociatyvinis masyvas, kurio raktai yra: gamintojas, modelis, metai, vairuotojai. Vairuotojai taip pat turi būti asociatyvinis masyvas, kurio raktai: vardas, pavarde, stazas.*/
$taksi_automobilis = ['Gamintojas', 'Modelis' , 'Metai' , 'Vairuotojai'=>['Vardas' , 'Pavarde' , 'Stazas']];
var_dump ($taksi_automobilis);
/*Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 para
metrais: minimalus skaicius, maksimalus skaicius, kiek atsitiktinių skaiciu sugeneruoti. Funkcija gražinti atsitiktinių skaičių masyvą. Pademonstruoti funkcijos veikimą.*/

function pirma ($a, $b, $c){
    $x=[];
    for ($i=0; $i<$c; $i++){
        $x[] = rand($a,$b);
    }
    return $x;
}
var_dump (pirma(1,9,3));

/*Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis skaičių masyvas. Masyvo kas antro elemento reikšmę cikle programiškai pakeiskite į 0.*/

$xx = ['Labas' , 'Rytas' , 'As' , 'Tau' , 'Sakau'];

function antra ($a){
        for ($i=0; $i<count($a); $i++){
            if ($i % 2 == 0){
                $a[$i] = 0;
        }
}
    return $a;
}
var_dump (antra($xx));

function trecia ($a){
    for ($i=0; $i<count($a);$i+=2){
        $a[$i]=0;
    }
    return $a;
}
var_dump(trecia($xx));
/*Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes ‐ pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus du parametrus ‐ pavadinimas, kaina ‐ perduotus parametrus padėtų į savo savybes. Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriskas, kurios paveldi dviratis klasę. dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, kaina”. moteriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: moteriskas”. moteriskas ‐ tiesiog paprastas žodis. vyriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: vyriskas”. vyriskas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.*/

class dviratis {
    public $pavadinimas;
    public $kaina;


    function __construct($a, $b){
        $this->pavadinimas=$a;
        $this->kaina = $b;
    }
    function info(){
        return $this->pavadinimas.' '. $this->kaina;
    }

}
class moteriskas extends dviratis{
    function info(){
        return $this->pavadinimas.' '.$this->kaina.' '. ('moteriskas');
    }
}
class vyriskas extends dviratis{
    function info(){
        return $this->pavadinimas.' '.$this->kaina. ' '.('vyriskas');
    }
}
$zzz = new dviratis('kregzde' , '5eur' );
echo $zzz->info().'<br>';
$zzz = new moteriskas('kregzdute' , '515eur' );
echo $zzz->info().'<br>';
$zzz = new vyriskas('rambynas' , '50eur' );
echo $zzz->info().'<br>';

/*Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių. sukurkite funkciją getInfo(), kuris išveda skaičius esančius savybėje.*/

class numberList{
    public $numbers = [];
    function add(){
        for ($i=0; $i<5; $i++) {
            $x = rand(1, 10);
            $this->numbers[] = $x;
        }
    }
    function delMin (){
        $x = min($this->numbers);
        array_splice($this->numbers, $x);
    }
    function getInfo(){
        return $this->numbers;
    }
}
$zzp = new numberList();
echo $zzp->add();
echo $zzp->delMin();
var_dump ($zzp->getInfo());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row">
    <div class="col-sm-4 .container-fluid" ><button type="button" class="btn btn-outline-info"><span class="border-0"></span>Info</button></div>
    <div class="col-sm-4 .container-fluid"><button type="button" class="btn btn-outline-success">Success</button></div>
    <div class="col-sm-4 .container-fluid"><button type="button" class="btn btn-outline-danger">Danger</button></div>
</div>
</body>
</html>