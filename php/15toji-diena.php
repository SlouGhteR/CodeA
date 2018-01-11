<?php
//Sukurkite PHP skriptą, kuriame būtų aprašyti trys kintamieji ir ekrane būtų išvestas tų kintamųjų kvadratų vidurkis.
function pirma ($a){
    $z=0;
    for ($i=0; $i<count($a); $i++){
        $z+=$a[$i]**2;
    }
   $z= $z/count($a);
    return $z;
}
$p = [1,2,3];
echo pirma($p).'<br>';

/*Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 5 parametrus ‐ skaičius, funkcija turi paskaičiuoti aritmenitinį vidurkį, ištraukti šaknį ir padauginti iš 10. Rezultatą gražinti. Iškviesti funkciją perduodant 5 parametrus (skaičius) ir parodyti rezultatą.*/

function antra ($a){
    $z=0;
    for ($i=0; $i<count($a); $i++){
        $z+=$a[$i];
    }
    $z=$z/count($a);
    $z= sqrt($z)*10;
    return $z;
}
$p1 = [5,1,2,3,5];
echo antra($p1).'<br>';

/*Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami while ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis, gale teksto prijunkite taško simbolį '.'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos kableliais ','.*/

$p2 = ('Labas rytas LIETUVA aS TAu SaKAu');
$pp= explode(" ", $p2);
$i=0;
while ($i<count($pp)){

    $zz[$i]= strtoupper($pp[$i]).'.';
    $i++;
}
$pz=implode(',', $zz);
echo $pz.'<br>';

/*Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas, miestas, studentai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, miestas, studentai ‐ perduotus parametrus padėtų į savo savybes.*/

class universitetas{
    public $pavadinimas;
    public $miestas;
    public $studentai;

    function __construct($p, $m, $s){
        $this->pavadinimas=$p;
        $this->miestas=$m;
        $this->studentai=$s;
    }
    function info (){
        $z=(' %s, %s, %s');
        return sprintf($z, $this->pavadinimas, $this->miestas, $this->studentai);
    }

}
/*Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę. universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”. ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (KTU)”. KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (VU)”. VU ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.*/

class KTU extends universitetas{
    function info (){
        $z=(' %s, %s, %s (KTU)');
        return sprintf($z, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
class VU extends universitetas{
    function info (){
        $z=(' %s, %s, %s (VU)');
        return sprintf($z, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$ppz = new universitetas('Pava', 'Klp', '1000');
echo $ppz->info().'<br>';
$ppz = new  KTU ('Pava', 'Kaunas', '50000');
echo $ppz->info().'<br>';
$ppz = new VU ('Pava', 'VU', '151515');
echo $ppz->info().'<br>';

/*Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas generate(), kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75). Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.*/

class loto {
    public $table=[];
    function generate(){
        $i=0;
        while ($i<25){
            $this->table[]=rand(1,75);
            $i++;
        }
    }
    function get(){
        $i=0;
        echo '<table>';
        echo '<tr>';
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '</tr>';
        echo '<tr>';
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '</tr>';
        echo '<tr>';
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '</tr>';
        echo '<tr>';
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '</tr>';
        echo '<tr>';
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '<td>'.$this->table[$i++];
        echo '</tr>';
        echo '<table>';
    }
}
$zzz = new loto();
echo $zzz->generate();
echo $zzz->get().'<br>';
echo 'KITA LENTELE' . '<br>';

/*Sukurkite PHP skriptą, kuriame aprašykite klasę lentele, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas add, kurio parametras yra 3 skaičių masyvas. Patalpinti gautą masyvą į savybės %table masyvą. Sukurkite metodą get(),kuris paskaičiuoja kiekvienoje lentelės eilutėje esančių elemntų vidurkį ir ją patalpina į eilutės pabaigą. Išvesti savybės $table masyvą HTML lentele. Pademonstruokite veikimą.*/

class lentele {
    public $table=[];
    function add(){
        $i=0;
        $m=[];
        $s=0;
        while ($i<3){
            $a=rand(1,15);
            $m[]=$a;
            $i++;
            $s+=$a;
        }
        $m[]= $s/count($m);
        $this->table[]=$m;

    }
    function get (){
        echo '<table>';

        for ($i=0; $i<count($this->table);$i++){
            echo '<tr>';
            for ($j=0; $j<count($this->table[$i]); $j++){
                    echo '<td>'.$this->table[$i][$j]. '</td>';
                }
            echo '</tr>';
        }
        echo '</table>';
    }
}

$zgz = new lentele();
echo $zgz->add();
echo $zgz->get();

/*Sukurkite klasę diagnostika. Klasės savybė - $duomenys - asociatyvimis masyvas, kuriame yra diagnostikos pranesimai apie klaidas: raktas => tekstas (angliškas). Padaryti funkcija, kuri pagal kodą (funkcijos parametras) gražina klaidos pranešimo tekstą. Sukurti lituanizuotą diagnostikos klasę diagnostika_lt, kuri paveldi klasę diagonostika ir turi kitą diagnostikos pranešimų masyvą (pakeičiantį originalą), kur kodai yra tie patys, o tekstai - lietuviški. Išbandyti abi klases kreipiantis į funkciją tuo pačiu kodu. Jeigu kodo masyve nėra, tai reikia gražinti pranešimą "Code not found" ("Kodas nerastas")*/

class diagnostika
{
    public $duomenys = ['Ratai' => 'Sugedo ratai Jums', 'Vairas' => 'Sugedo Vairo stiprintuvas', 'stabdziai' => 'reikia keisti stabdziu kaladeles'];

    function pirma($a)
    {
        if (isset($this->duomenys[$a])) {
            return $this->duomenys[$a];
        }
    }
}

$zzp = new diagnostika();
echo $zzp->pirma('stabdziai').'<br>';

class engdiag extends diagnostika{
    public $duomenys = ['wheels'=>'They broke', 'Windshield'=> 'Cracked wind shield'];
    function pirma($a)
    {
        if (isset($this->duomenys[$a])) {
            return $this->duomenys[$a];
        }
    }
}
$zzp = new engdiag();
echo $zzp->pirma('Windshield').'<br>';