<html>
    <head>
        
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142213830-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142213830-1');
</script>
        
    </head>
    


<?php

$files = glob("images2/*.*");

echo "<table cellpadding='10px' border='1';>";

for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];
echo "<tr>";

echo "<td> <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'><br/>$files[$j]</td>";

echo "<tr>";


  }

echo "</table>";


//$f = glob("images/*.*");
$f = "images/";
/*
$n = (count(scandir($f)) - 2);
//$n = 5;
for($i=1;$i<=$n;$i++)
{
echo "<img src='images/b$i.jpg' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";


}
*/


?>
