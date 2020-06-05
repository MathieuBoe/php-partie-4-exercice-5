<?php
$var1 = 5;
$var2 = 'Test';
$title = 'Exercice5';

include 'header.php';
function good($var1,$var2){
    echo $var1 . $var2;
}
echo good($var1,$var2);
include 'footer.php';?>