<?php
$a = 5;
$A = 6;
var_dump ($a);
var_dump ($A);

function writeMsg(){
    echo"Hello wold<br>";

}
writeMsg();//call the function
writeMsg();
function familyName($fname, $lname = 'nežinomas'){
    echo "$fname  $lname .<br>";
}
$fn='familyname';
familyName ( 'Jonas');
call_user_func ($fn,   'Petras', 'Petraitis');

function familyNameRet($fname='nesamone', $lname = 'nežinomas'){
    return "$fname  $lname .<br>";
    echo familyName ( 'Jonas', 'Jonaitis');
}
$fnc = 'familyNameRet';
echo $fnc ("Jonas", "Jonaitis");
$fm =function ($fname='nesamone', $lname='nezinomas'){
    return "$fname $lname .<br>";
};
echo $fm ( 'Jonas', 'Jonaitis');
$fm=function ($a='', $b = ''){
    return 'belekas';
};
echo $fm ("Jonas", "Jonaitis");
?>