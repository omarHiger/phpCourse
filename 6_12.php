<?php

//gettype():return data type
echo gettype(1+'2'); //integer
echo '<br>';
echo gettype(true+true); // 2 integer
echo '<br>';
echo gettype(5+'5 lessons');// integer + warning
echo '<br>';
echo gettype(10.5+10.5);// double 21
echo '<br>';
echo gettype((int)10.5+(int)10.5);//integer 20
echo '<br>';
echo gettype((int)(10.5+10.5));//integer 21
echo '<br>';



//var_dump() :dumps information about variable
var_dump((bool) ""); // bool(false)
var_dump((bool)" "); //bool(ture);
var_dump((bool)[]); //bool(false);
var_dump((bool)[1]); //bool(true);



//string and escaping 
echo "hello 'php'"; // hello 'php'
echo 'hello \'php\''; // hello 'php' : opration escape \
echo "hello php \\"; // hello php \ 



//nl2br(): inserts html line breaks befor all newlines in a string
echo nl2br("i love
php
php");  // print the same as they are




// Heredoc and Nowdoc
// Heredoc: work parsing and esacaping 
$name="osama";
echo <<< "here"
\\\\ $name
here; // print \\ osama
//Nowdoc
echo <<<'now'
\\\\$name
now; //print \\\\ &name




//print_r(): prints human-readable information about a variable 
echo '<pre>';// print the same as they are
print_r([
    "A"=>"ahmed",
    "B"=>"aber",
    "mohammed",
    "names"=>["osama","ahmed"]   // nested array
]);
echo '</pre>';
//اذا كررت انديكس بيعمل اوفررايد للقيمة واذا حطيت قيمة بدون انديكس بيمشي من اكبر انديكس عندي ياه

