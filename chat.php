<html>
    <head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142106259-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142106259-1');
</script>
</head>
    
</html>


<?php
header("Refresh:20 ;url=chat.php");
date_default_timezone_set("Asia/Kolkata");
$f = fopen("message.txt","a+");
if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  rewind($f);
        $L=strlen($_POST["mes"]);
                  if($L>0)
                   {
             $m = "<br/> On Date:".date("d/m/Y:h+5:m+30:s").
                            "\nName_:".$_POST["uname"]."\n"."Message_:".$_POST["mes"]."</br>";
//echo $m;
              fwrite($f,$m);
echo "<script>document.title='Message send'</script>";
                    } 
  }
else
{
fclose($f);
}
// showing chat in chat box
$fr = fopen("message.txt","r") or exit("Unable to read the chat file");
echo "
<div id='main' style='background:black;color:yellow;width:450px;height:250;overflow:scroll;font-size:16;font-family:arial'><br/>";
while(!feof($fr))
   {
  echo fgets($fr)."<br/>";
     }
fclose($fr);
echo "</div>";
echo "<script>
d = document.getElementById('main')
d.scrollTop = d.scrollHeight;
</script>";
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" Method="post">
<h1>Name __ :<input  type="text" name="uname" value=""></h1>
<h1>Message :<input type="text" name="mes" value=""></h1>
<input type="submit" value="send"><input type="reset">
</form>

<br/>
<a href="https://sunilsahib2021.000webhostapp.com/sunil">Home</a>

