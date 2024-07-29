<?php
$en = $_POST["ename"];
$ep = $_POST["epass"];

  if(($en != "sunil")&&($ep !="demo"))
    {
        echo "<script>alert('Not valid user or Pasword')</script>";
        echo "<h1><a href='sendmail.html'>Click to Cont....</h1></a>";
        
    }
    else
    {
        
        header("Location:email.php");
    }
  




?>
