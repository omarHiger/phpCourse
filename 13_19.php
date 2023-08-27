<?php
//variable
$username="loujain";
echo 'hello $username'; // hello $username
echo '<br>';
echo "hello $username"; // hello loujain
echo '<br>';

//variable variable
$a="osama";
$$a="elzero";
$$$a="school";
$$$$a="samer";
echo $a; //osama
echo '<br>';
echo $osama; //elzero
echo '<br>';
echo $$$a; //scool
echo '<br>';
echo $elzero; //scool
echo '<br>';
echo $$osama; // school
echo '<br>';
echo "hello $$a"; //hello $osama
echo '<br>';
echo "hello ${$a}"; // hello elzero
echo '<br>';
echo "hello ${$$a}"; // hello shcool 
echo '<br>';
echo "helllo ${$$$a}";// hello samer
echo '<br>';

//assign by reference
$a="os";
$b=&$a;
$b="shool";
echo $a; //shool
echo '<br>';
echo $b; //shool

//predefined varibles and test
echo '<pre>';
print_r($_SERVER);
echo $_SERVER["HTTP_CONNECTION"];
echo "<br>";
echo $_POST["username"];
echo $_GET["name"];
?>
<form  method="post">
<input type="text" name="username">
<input type="submit" value=send>
</form>
<form  method="GET">
<input type="text" name="name">
<input type="submit" value=send>
</form>


<?php

//constant
define("NAME","lolo");
echo NAME; //lolo
echo "<br>";

//predefined constant sensitive
echo php_uname();//return information about the operating system php is runing on
echo "<br>";
echo PHP_VERSION; //return version
echo "<br>";

//magic constant insensitive
echo __line__; // return line
echo "<br>";
echo __file__; //return file
echo "<br>"; 
echo __dir__; //return folder
echo "<br>";

?>



