<html>

<body bgColor="cyan">
<center>
<h1>File to Server</h1>
<?php


if($_FILES["noticefile"] ["error"] > 0)
    {
      echo "Error ! ".$_FILES["noticefile"]["Error"]."<br/>";

    }
  else
  {
echo "<br>";
echo "Upload :".  $_FILES["noticefile"]["name"]."<br>";
echo "Type :".  $_FILES["noticefile"]["type"]."<br>";
echo "Size:".( $_FILES["noticefile"]["size"] /1024)."kb</br>";
echo "Stored in :".  $_FILES["noticefile"]["tmp_name"];
 }
  

move_uploaded_file($_FILES["noticefile"]["tmp_name"],
      "notice/".$_FILES["noticefile"]["name"]);
      
      echo "Stored in: " . "notice/".$_FILES["noticefile"]["name"];
 
 

?>


</center>
</body>




</html>
