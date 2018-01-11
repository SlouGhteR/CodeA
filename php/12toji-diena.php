<?php
class personalas{
    public $darbuotojai;
    function persona ($vardas, $pavarde, $lytis){
        if (!isset ($this->darbuotojai))$this->darbuotojai=[];
            $this->darbuotojai[]=[
            'vardas' =>$vardas,
        'pavarde' =>$pavarde,
        'lytis' =>$lytis,
        ];

    }
    function kiekMoteru (){
        $mot=0;
        for ($i=0; $i<count($this->darbuotojai); $i++){
            if ($this->darbuotojai[$i]['lytis'] == "Moteris") $mot+=1 ;

        }
        return $mot;
    }
    function kiekVyru (){
        $vyr=0;
        for ($i=0; $i<count($this->darbuotojai);$i++){
            if ($this->darbuotojai[$i]['lytis'] == 'Vyras') $vyr+=1;
        }
        return $vyr;
    }
}
$personalas = new personalas ();
$personalas -> persona ('Ona', 'Oniene','Moteris');
$personalas -> persona ('Petras', 'Petraitis', 'Vyras');
$personalas -> persona ('Jurgis', 'Jurgaitis','Vyras');
echo $personalas->kiekMoteru().'<br>';
echo $personalas->kiekVyru().'<br>';

class automobiliai {
    public $sarasas;
    function automobilis($gamintojas, $modelis, $kuras, $sanaudos){
        if (!isset ($this->sarasas)) $this->sarasas=[];
        $this->sarasas[]=[
            'gamintojas'=>$gamintojas,
            'modelis'=>$modelis,
            'kuras'=>$kuras,
            'kuro sanaudos'=>$sanaudos,
        ];
    }
    function dyzel (){
        $dyz=0;
        $sa = 0;
        for ($i=0; $i<count($this->sarasas); $i++){
            if ($this->sarasas[$i]['kuras'] == 'dyzelis'){
                $dyz+=1;
                $sa+= $this->sarasas[$i]['kuro sanaudos'];
            }
        }
        return $sa/$dyz;
    }
    function benz(){
        $benz =0;
        $sa = 0;
        for ($i=0; $i<count($this->sarasas); $i++){
            if ($this->sarasas[$i]['kuras'] == 'bendzinas'){
                $benz += 1;
                 $sa+=$this->sarasas[$i]['kuro sanaudos'];
            }

        }
        return $sa/$benz;
    }
}
$masina = new automobiliai();
$masina -> automobilis('Audi', 'A3', 'dyzelis', 5.5);
$masina -> automobilis('Bmw', '320i', 'bendzinas', "11,2");
$masina -> automobilis('honda', 'accord', 'bendzinas', "7.5");
$masina -> automobilis('Honda', 'Civic', 'dyzelis', 4.8);
echo $masina->dyzel().'<br>';
echo $masina->benz() .'<br>';
$a=3;
$b=4;
echo (((sqrt($a))+(sqrt($b)))/2).'<br>';
$masyvas = ['marke'=>"Ford", 'modelis'=> 'mustang', 'pagaminimo metai'=> 2017, 'spalva'=> 'juoda', 'galia'=>"320kW"];

function suma ($a, $b, $c){
    $suma=$a+$b+$c;
    return $suma;
}


echo suma(3,6,12).'<br>';

$php = ['Jonas', 'PetrAAAs', 'kazkas', 'kelintaS','kurmis'];
$i=0;
foreach ($php as $hpp){
$php[$i++]=strtoupper($hpp);
}
var_dump ($php);

class person {
    public $name;
    public $surname;
    public $age;
    function __construct($n, $s, $a){
        $this->name=$n;
        $this->surname=$s;
        $this->age=$a;
    }
}
class staff extends person {

}
$nr2=['Vardas'=>'JonAs', 'Pavarde'=>'jonaITIs','amzius'=>30];
foreach ($nr2 as $nr1=>$aaa){
    $nr2[$nr1]=ucfirst($aaa); strtolower($aaa);
}
var_dump ($nr2);
/*foreach ($v as $key=>$ccc) {

    $v[$key] =ucfirst ($ccc) ;strtoupper($ccc);


}
var_dump($v);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Teleloto bilietas</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti dolorem eligendi itaque nam nesciunt quas sequi veritatis. Adipisci aliquid atque dolor dolore, est impedit libero magni pariatur sit veritatis!</p>
<table>
    <tr>
        <td>
5
        </td>
        <td>
2
        </td>
        <td>
15
        </td>
        <td>
3
        </td>
        <td>
5
        </td>
    </tr>
    <tr>
        <td>
5
        </td>
        <td>
52
        </td>
        <td>
95
        </td>
        <td>
65
        </td>
        <td>
65
        </td>
    </tr>
    <tr>
        <td>
45
        </td>
        <td>
645
        </td>
        <td>
95
        </td>
        <td>
85
        </td>
        <td>
46
        </td>
    </tr>
    <tr>
        <td>
456
        </td>
        <td>
85
        </td>
        <td>
85
        </td>
        <td>
453
        </td>
        <td>
75
        </td>
    </tr>
    <tr>
        <td>
95
        </td>
        <td>
76
        </td>
        <td>
72
        </td>
        <td>
78
        </td>
        <td>
76
        </td>
    </tr>
</table>
gnnjj
</body>
</html>