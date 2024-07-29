<?php
echo "<h1>PHP Banner</h1>";
$d = date("w");
//echo $d;
$image_of_day = "images/p5.jpg";
switch($d)
     {
         case 0:
         $image_of_day = "images/p0.jpg";
         echo "<title>Today is  Sunday</title>";  
         break;
	 case 1:

         $image_of_day = "images/p1.jpg";
         echo "<title>Today is  Monday</title>";  
         break;
	 case 2:

         $image_of_day = "images/p2.jpg";
         echo "<title>Today is  Tuesday</title>";  
         break;
	 case 3:

         $image_of_day = "images/p3.jpg";
         echo "<title>Today is  Wednesday</title>";  
         break;
	 case 4:

         $image_of_day = "images/p4.jpg";
         echo "<title>Today is  Thursday</title>";  
         break;
	 case 5:

         $image_of_day = "images/p5.jpg";
         echo "<title>Today is  Friday</title>";  
         break;
	 case 6:

         $image_of_day = "images/p6.jpg";
         echo "<title>Today is  Saturday</title>";  
         break;
  default:
        $image_of_day = "images/no.jpg";  
        echo "<title>Today is  Sunday</title>";  
        break;       


      }


?>




<!DOCTYPE html>
<html<head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142213830-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142213830-1');
</script>
</head>
<style>
.banner{width:1000px;height:300px;box-shadow:10px 10px 10px gray;}
</style>

<body>

<div class="banner">
<img class="banner" src="<?php echo $image_of_day ?>" width="1000px" height="400px">
</div>



</body>
</html>
