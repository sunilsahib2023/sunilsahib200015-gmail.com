<?php
echo "<style>
img{transition:0.50s;cursor:pointer;position:relative;box-shadow:10px 10px 10px gray;border-radius:100px;}
img:hover{transform:scale(0.90);border-radius:1px;}

</style>";
echo "<h1> For LOOP</h1>";
$r = 5;
$c = 3;
$t = 0;

echo "<table border='0'>";

for($i = 1;$i<=$r;$i++)
   {
  echo "<tr>";
         for($b = 1;$b<=$c;$b++)
           {
      echo "<td><img src='images/p$t.jpg' width='200' height='200'></td>"; 

$t++;
            }
           
     echo "</tr>";

    }

echo "</table>";







?>
<!Doctype HTML>
<html>
<body>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142106259-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142106259-1');
</script>

    </head>

</body>


</html>



