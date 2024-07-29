
<?php
// Site visitng Counter
session_start();

$cf = "counter.txt";

if (!file_exists($cf)) 
{
  $f = fopen($cf, "w");

  fwrite($f,"0");

  fclose($f);
}

$f = fopen($cf,"r");
$cn = fread($f, filesize($cf));
fclose($f);


if(!isset($_SESSION['visiting_not_refreshing'])){
  $_SESSION['visiting_not_refreshing']="yes";
  $cn++;

  $f = fopen($cf, "w");

  fwrite($f, $cn);

  fclose($f);
}

//echo "You are visitor number $counterVal to this site";

?>
<div style="color:white;font-family:Arial Black;position:relative;background:purple;display:inline-block;padding:10px;box-shadow:10px 10px 10px gray;">
Visit count : <?php  echo $cn ; ?>
</div>


