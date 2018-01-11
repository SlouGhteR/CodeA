 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    </head>
<body>
<?php
//$a = new handleForm();
//$aa= new antrasPvz();
$aaa= new treciasPvz();
?>

<!--<form method="post"
    <label>Vardas:</label><input name="vardas" text="text" value="--><?php //echo $a->getVariable("vardas")?><!--"><br>
    <label>Pavarde:</label><input name="pavarde" text="text"><br>
    <label>Slaptazodis:</label><input name="slaptazodis" type="password"><br>
  <input type="submit" value="O.K."> >-->
</form>
<form method="get">
    <label>Modelis: </label><input name="modelis" text="text"><br>
    <label>Marke: </label><input name="marke" text="text"><br>
    <label>Metai: </label><input name="metai" text="text"><br>
    <input type="submit" value="      ">

</form>
<form method="post">
    <label>Vardenis: </label><input name="vardas" text="text"><br>
    <label>Pavardenis: </label><input name="pavarde" text="text"><br>
    <label>Slaptenis: </label><input name="slaptazodis" text="text" type="text"><br>
    <input type="submit" value="                                                                                  ">

</form>
<form method="post">
    <label>Vardenis: </label><input name="vardas" text="text"><br>
    <label>Pavardenis: </label><input name="pavarde" text="text"><br>
    <label>Slaptenis: </label><input name="slaptazodis" text="text" type="text"><br>
    <input type="submit" value="                                                                                  ">

</form>
<form method="get">
    <label>Šalies pavadinimas: </label><input name="pavadinimas" text="text"><br>
    <label>Sostinė: </label><input name="sostine" text="text"><br>
    <label>Gyventojų skaičius: </label><input name="skaicius" text="text" type="text"><br>
    <input type="submit" value="Kas tas yr?">
</form>
<?php
class treciasPvz {

        function kiek ($salis, $sostine, $gyv){#
            $s=
            '<table>
     <tr>
     <td>%s</td><td>%s</td><td>%s</td>
</tr></table>';

            return sprintf($s, $salis, $sostine, $gyv);
        }

};
if (isset ($_GET['pavadinimas'])&& isset($_GET['sostine'])&& isset($_GET['skaicius'])){
    echo $aaa->kiek ($_GET['pavadinimas'], $_GET['sostine'], $_GET['skaicius']);}
else echo 'Iveskite duomenis'.'<br>';
$aaa= new treciasPvz();
$aaa-> kiek($_GET['pavadinimas'], $_GET['sostine'], $_GET['skaicius']);
//$xxx=$aaa-> kiek($_GET['pavadinimas'], $_GET['sostine'], $_GET['skaicius']);
/*class pirmasPvz{
    public $text2;
    function masina($gami, $model, $meta){
            $s = 'Sis %s %s yra pagamintas %s';
            return  sprintf($s,$gami, $model, $meta);
    }
};
$masina= new pirmasPvz();
if (isset ($_GET['modelis'])&& isset($_GET['modelis'])&& isset($_GET['metai'])){
    echo $masina->masina ($_GET['modelis'], $_GET['modelis'], $_GET['metai']);}
        else echo 'Iveskite duomenis'.'<br>';



class antrasPvz{
    public $text3;
    function zmogus ($v, $p, $pas){
        $s= 'Bandoma prisiregistruoti %s %s vardu %s';
        return sprintf($s, $v,$p, $pas);
    }
};
if (isset ($_POST['vardas'])&& isset($_POST['pavarde'])&& isset($_POST['slaptazodis'])){
    echo $aa->zmogus ($_POST['vardas'], $_POST['pavarde'], $_POST['slaptazodis']);}
else echo 'Iveskite duomenis';

$aa= new antrasPvz();
$aa->zmogus(($_POST['vardas']), ($_POST['pavarde']),($_POST['slaptazodis']));
$xx=$aa->zmogus(($_POST['vardas']), ($_POST['pavarde']),($_POST['slaptazodis']));

//var_dump ($_GET);
//echo json_encode($_GET);

class handleForm{
    public $text;
    function __construct(){
        $this->text='0';
        if(count($_GET)>0){
            foreach ($_GET as $key =>$value){
                $this->text.=$key.'='.$value.'<br>';
            }

        }

    }
    function toFile(){
        $f=fopen("failai/forma-post-parm.txt", "w") or die ("Unable to open a file!");
        fwrite($f, $this->text);
        fclose($f);
    }
    function fromFile(){
        $f=fopen("failai/forma-post-parm.txt", "w") or die ("Unable to open a file!");
        fwrite($f, $this->text);
        $s=fread($f, filesize('failai/forma-post-parm.txt'));
        fclose($f);
        return $s;
    }
    function getVariable($name){
        if (isset($$_GET [$name]))
        return ($_GET[$name]);
        else return ' ';
    }
}
$a = new handleForm();
$a->toFile();
$x=$a->fromFile();
echo $x;

*/
?>
</body>
</html>
<?php

/*class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

//class ChildClass extends BaseClass {
   // public function moreTesting() {
    //    echo "ChildClass::moreTesting() called\n";
  // }
//}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
$a=new BaseClass();
$a->test();

abstract class AbstractClass {//abstractine klase galima naudoti tik tada, kai ja extendinama
    abstract protected function getValue();//abstraktine f-ja galima naudoti tik tada, kai f-ja perra6oma.
    abstract protected function prefixValue();
    public function printOut(){
        echo $this->getValue()."\n";

    }
}
class ConcreteClass extends AbstractClass{
   protected function getValue (){
    return 'ConcreteClass';
}
public function prefixValue($prefix){
    echo "{prefix}.'_'.$this->getValue";
}
}
$b=new ConcreteClass();
$b->prefixValue('labas');

interface iTemplate{
    public function setVariable($name, $var);
    public function getHtml ($template);
}

class Template implements iTemplate{
    private $vars=array();
    public function setVariable($name, $var){
       $this->vars[$name]=$var;
       var_dump($this->vars);
    }
    public function getHtml($template){
        foreach ($this->vars as $name=>$value){
            $template=str_replace ('{'. $name.'}',$value, $template);
    }
    return $template;
    }

}
$c=new Template();
$c->setVariable('a',5);
*/
?>
