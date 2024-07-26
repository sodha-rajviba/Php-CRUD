<?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$option=$_POST['option'];

if($option=="Addition")
echo $num1 + $num2;

elseif($option=="Substraction")
echo $num1-$num2;

elseif($option=="Multiplication")
echo $num1*$num2;

elseif($option=="Division")
echo $num1/$num2;

?>