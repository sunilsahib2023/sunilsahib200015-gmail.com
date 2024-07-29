
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142106259-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142106259-1');
</script>

<!--
<meta http-equiv = "refresh" content="20">
-->

</head>

<body  style="margin-left:2%;text-align:center;"  onload="timer = setTimeout('auto_reload()',40000);">
    
   
<script>

var timer = null;

function auto_reload()
{
  window.location = 'sunil.php';
}


</script>




<a href="index.php">Home</a><br/>




<?php
$L = 1;
$mes ='';


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
                  $L = strlen($_POST["mes"]);
                  $h = fopen("maildata.txt","a+");
            echo "<b>Talk to each others <b>";
        
             if($h)
                 {
                      rewind($h);
      
                      if($L>0)
       	                  { 

                                 $m = "<br/>On Date : ".date("d/m/Y:h:m:s")."\nName :  ". $_POST["uname"]. "\n"."Message  : ".$_POST["mes"]."<br/>";  

  	                            	 fwrite($h,$m); 
  	                                     // echo "Message send...";
     	                   	}
                }
                        

             if(!$h)
                 {
                       die("Error :- File  is not created");
                 }
     


}

  

$file = fopen("maildata.txt", "r") or exit("Unable to open file!");
echo "
<div  id = 'main' style='width:450px;height:250;overflow:scroll;color:yellow;font-family:arial;font-size:16;text-align:justify;padding:5px;background-color:black'><br>";

    while(!feof($file))
        {
            echo fgets($file). "<br/>";
        }
        fclose($file);

?>
    </div>



<script>
var textarea = document.getElementById('main');
textarea.scrollTop = textarea.scrollHeight;
</script>

<form name="form1" method="post" action="sunil.php">

  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="uname"></label>
      <input name="uname" type="text" id="uname" size="50"></td>
    </tr>
    <tr>
      <td>Message</td>
      <td><label for="mes"></label>
      <textarea name="mes" cols="45" rows="5" id="mes"></textarea></td>
    </tr>
    <tr>
      <td><input type="reset" name="Reset" id="button" value="Reset"></td>
      <td><input type="submit" name="button2" id="button2" value="send"></td>
 
               
    </tr>
  </table>
</form>




<br/><a href="edit_messages.html">Manage Message Box (admin only)</a><br/>
</body>
</html>

