<?php
// ** exponent
echo 2**4; //16
echo '<br>';
//+$a identity :return the number from string to int
//-$a negation : return the number from string to int and reverse signal
echo +"100";//100
echo '<br>';
echo gettype(+"100");//integer
echo '<br>';
echo -"100";// -100
echo '<br>';
echo-"-100"; //100
echo '<br>';

// == !=  equal and not equal in value
// === !== equal and not equal in value and data type
// <=> if value less than return -1 ,if value equals than return 0 ,if value greater than return 1
var_dump(100=="100"); //true
echo '<br>';
var_dump(100==="100");//false
echo '<br>';
var_dump(100<=>200);//return -1
echo '<br>';
var_dump(200<=>200);//return 0
echo '<br>';
var_dump(210<=>200);//return 1;
echo '<br>';

//concatenate strings
$a="osama";
$b="ali";
$c="ola";
define("elzero","1");
echo $a.$b.$c; //osamaaliola
echo '<br>';
echo $a." ".$b." ".$c; //osama ali ola
echo '<br>';
echo "$a $b elzero "; //osama ali elzero
echo'<br>';
echo "$a $b".elzero; //osama ali 1
echo '<br>';

// .=
$x="elzeo";
$x.="web"; //$x=$x."web"
echo $x; // elzeroweb

//Array operators
$arr1=[1 => "A" , 2 => "B"];
$arr2=[3 => "d" , 4 => "c"];
echo '<pre>';
print_r($arr1+$arr2); // + => union

// == same key and value
// === same key and value ,same order,same type
$a=[ 2=> "10" , 1=>"20"];
$b=[1=>20,2=>"10"];
var_dump($a==$b); //ture
var_dump($a===$b); //false
echo '<br>';

//error control operator 
// @ بتمنع ظهور الخطا
$t=10;
$v=@$t or die("variable not found");
echo "$t";

//$f=@file("osama.txt") or die("file not found");
//echo $f;

//@include("osama.php");

//  || has a greater precedence than or
//  && has a greater precedence than and
$a=10 || false; // $a=(10||false) $a=1
$b=10 or false;// ($b=10)||false $b=10;
echo $a;
echo $b;