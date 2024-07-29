<?php
echo "<h1>Sending Mail </h1>";

$s = "Trial Mail ";
$m="Testing the Message";

$header = "From sunil "."\r\n"."CC:sunilsahib2016@gmail.com";

$r = mail("arena.sunilk@gmail.com",$s,$m,$header);
echo $r;

if($r)
{
echo "<h1>mail is sended</h1>";
}
else
{

echo "<h1>Colod not send mail </h1>";

}





?>
