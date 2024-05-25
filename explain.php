<?php 
//printing a php
echo "hello world </br>";

// declaring a variable
$a = 10;
echo "$a </br>";

// concatination
echo "hi </br>".$a;

// indexed array
$fruits=array("seap","aam","ananas");

//accessing array value
echo "$fruits[0] </br>";

// index array print using var
var_dump($fruits);
print_r($fruits);

// associative array
$details = array("name"=>"imran","age"=>21,"height"=>165);
echo $details["age"];

// for each loop
foreach($details as $detail){
    echo $detail."</br>";
}

//if condition
$age=20;
if ("age" <= 21){
   echo "not allowed to drink";
}else if("age" >= 21){
   echo "allowed";
}















?>