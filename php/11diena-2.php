<?php
/*var_dump ($_POST);
$cnn = new PDO ('mysql:host=eder.lt;dbname=test', 'root');
$res = $cnn->prepare ("insert into auto (aut_gamintojas, aut_modelis, aut_metai, aut_kaina)values(:gamintojas,:modelis,:metai,:kaina)");
$x = $res->execute([
    ':gamintojas'=> $_POST['gamintojas'],
    ':modelis'=> $_POST['modelis'],
    ':metai'=> $_POST['metai'],
    ':kaina'=> $_POST['kaina'],

]);
$sql="select * from auto";
$res=$cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>'. $row['aut_gamintojas'].'</td>';
    echo '<td>'. $row['aut_modelis'].'</td>';
    echo '<td>'. $row['aut_metai'].'</td>';
    echo '<td>'. $row['aut_kaina'].'</td>';
    echo '</tr>';
};
echo '</table>';
echo '<a href="11diena-2.php">Grįžti į formą</a>';*/
/*session_start();
if (!isset($_SESSION['postinfor']))$_SESSION['postinfo']=[];
$p= ['ipavadinimas'=>'bumba','ikodas'=>'12345'];*/
/*class numberList{
    public $numbers;
    function add ($numbers){
       if (!isset($this->numbers));
       $this->numbers=[];
       $this->numbers=$numbers;


    }
    function average(){
        $sum=0;
        for ($i=0; $i<count($this->numbers); $i++){
            $sum+= $this->numbers[$i];
        }
        return $sum / count($this->numbers);
    }
};
$objektas= new numberList();

$objektas=(1);
$objektas=(155);
$objektas=(15448);
$objektas=(18);
$objektas=(15548);


echo $objektas->average();*/
class turgus{
    public $automobiliai;
    function automobilis ($gamintojas, $modelis, $metai,$kaina){
        if (!isset($this->automobiliai)) $this-> automobliai = [];
        $this-> automobiliai[] = [
            'gamintojas' => $gamintojas,
            'modelis' => $modelis,
            'metai' => $metai,
            'kaina' => $kaina,
        ];
    }
    function minKaina (){
        $min = $this->automobiliai[0]['kaina'];
        for ($i=0; $i<count($this->automobiliai); $i++) {
           if ($this->automobiliai[$i]['kaina']<$min) $min=$this->automobiliai[$i]['kaina'];
        }
        return $min;
    }
}
$masina = new turgus ();
$masina->automobilis('honda', 'accord', '1995', '15000');
$masina->automobilis('audi', 'a3', '2005', '5005');
$masina->automobilis('bmw', '320i', '1986', '9');

echo $masina->minKaina();
