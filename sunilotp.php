<?php


// Main program 
$o = rand(100,1000); 

//$cmail = "sunilsahib2000@gmail.com";
 
 $cmail = "arena.sunilk@gmail.com";
 
$cSubject = "Second OTP Test.";


$mes ="Your One Time Password is = $o";

mail($cmail ,$cSubject ,$mes); 

echo "<h1>OPT is sended  !</h1>";

echo "<br/><br/><br/>";
echo "<h1><a href='index.html'>Home</a></h1>";


?> 
