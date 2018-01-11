
    <?php

    $m = ['Textas1', '.....TExtas2', 'TEXTAS3', 'Textas textuotas#'];

function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#');        //apvalo texta
    return $x;
}
/////////////////////////////////////////////////////////////////////
$mns = [];
$nm = [];
$mps = [];
$lms = [];
$lmx = [];
$lme = [];

    for ($i=0; $i<count($m); $i++){

        $s = mazosios($m[$i]);
        // $nm = ucfirst($s);
        $nm[] = ucwords($s);
        $mns [] = strtoupper($s);
        $mps [] = str_replace('a' , '*', $s);
        $lms [] = $s . '-' . strlen($s);
        $lmx [] = $s . ' - ' . strpos($s, 'a');
        $lme [] = str_shuffle($s);
    }

    echo json_encode($nm) . '<br>';
    echo json_encode($mns) . '<br>';
    echo json_encode($mps) . '<br>';
    echo json_encode($lms) . '<br>';
    echo json_encode($lmx) . '<br>';
    echo json_encode($lme) . '<br>';


$h = ['Koja', 'ranka', 'Galva'];

function gf ($s){
    $cc=[];
    for ($i=0; $i<count($s); $i++){
        $cc[]=strtoupper($s[$i]);
    }
        return $cc;

    };

    echo json_encode (gf($h));


