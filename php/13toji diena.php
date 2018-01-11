<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            font-size: 40px;
            background-image: url('../Images/159.jpg');
            color: white;
        }

        .pirmas {

            border-spacing: 5px ;

            display: table;
        }
        .antras {
            display: table-row;
        }
        .trecias {
            display: table-cell;
            padding: 5px;
            background-color: lightgreen;
        }
    </style>
</head>
<body>
<div class="pirmas">
    <div class="antras"">
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut, consequuntur error ex expedita harum itaque natus nesciunt officia optio perspiciatis praesentium provident quo sed similique tenetur vel! Quas, sunt.
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam animi at dolore dolorem ea, exercitationem fugit iste maiores molestiae, nostrum perferendis porro reprehenderit rerum, totam. Ad autem nulla perspiciatis.
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eius eveniet fugiat illo modi, possimus sed similique. Ab at deleniti est labore laborum, libero, molestiae nam praesentium, sunt voluptatibus voluptatum?
</div>
</div>
<div class="antras"">
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur, cumque ea eaque est et facere fugit id magnam minima quae quo quod ratione reiciendis reprehenderit repudiandae sequi, totam voluptatum.
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut, distinctio inventore ipsam iste magnam molestiae natus nesciunt numquam officia, optio possimus repellat saepe ut voluptas voluptate voluptatem voluptatum.
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dignissimos doloribus est eveniet laboriosam necessitatibus nobis non odit perferendis, praesentium, quaerat quisquam repudiandae sed sequi similique ullam voluptatem? Architecto, totam.
</div>
</div>
<div class="antras"">
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci culpa eaque enim, ipsum sapiente sequi temporibus ullam? Iusto nulla numquam porro quam, sed voluptates voluptatum. Dolorum itaque nobis ratione sint.
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi consequuntur corporis culpa delectus distinctio dolorum fugit laudantium nemo, nesciunt nihil officiis omnis perferendis quasi saepe totam veniam voluptates?
</div>
<div class="trecias">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, blanditiis commodi cumque doloribus ducimus eveniet hic ipsa laudantium minus mollitia, nemo nobis nulla obcaecati quasi, quo quos sapiente ut veniam!
</div>
</div>
</div>
</body>
</html>
<?php
$a=5;
$b=3;
$c=15;

$d=($a**2)+($b**2)+($c**3);
echo $d;

$e=['vardas'=>'Jonas', 'pavarde'=> 'Jonaitis' , 'Gimimo metai' => 1995];

function pvz ($a, $b, $c, $d){
    $e=($a+$b+$c+$d)/4;
    return $e;
}


$a=['Pirmas'=>'Labas rytas','antras'=> 'aš tau sakau' , 'trecias'=>'kiekvieną rytą' , 'ketvirtas'=>'kaskart kitaip'];
foreach ($a as $x){

    $a[$x]=ucfirst(strtolower($x)). ' . ';
}
var_dump ($a);
$masina = ['audi', 'a3', '1995'];
class automobilis {
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($g, $mod, $met){
        $this->gamintojas=$g;
        $this->modelis=$mod;
        $this->metai=$met;
    }
    function duomenys(){
        $x=$this->gamintojas . ' - '. $this->modelis .' -  '. $this->metai;
        echo $x;
    }
}
$masina= new automobilis( 'audi', 'a3' , 1995);

var_dump ($masina);

class lengvasis extends automobilis {
    function duomenys(){
        $d=$this->gamintojas . ' - '. $this->modelis .' -  '. $this->metai.' - '.'(lengvasis automobilis)';
        echo $d;
    }
}
class krovininis extends automobilis {
}
$masina = new lengvasis('honda', 'accord', 1995);
echo $masina->duomenys(). '<br>';
$masina2 = new krovininis ('uaz', 'ufo', 1888);
echo $masina2->duomenys(). '<br>';

class textList {
    public $texts=[];
    function add($d){
        $this->texts[]=$d;
    }
    function prided (){
        $x=0;
        foreach ($this->texts as $d) {
            $x+=strlen($d);
        }
        return $x;

    }
}
$pvz = new textList();
$pvz->add('Jonas');
$pvz->add('Jonaitis');
echo $pvz->prided();

?>

