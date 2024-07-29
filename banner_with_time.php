<?php
header("Refresh:1; url=banner_with_time.php");
echo "<h1>PHP Banner</h1>";
$d = date("s");
//echo $d;

date_default_timezone_set("Asia/Kolkata");
//echo date_default_timezone_get();

//echo "The time is " . date("h:i:sa");

echo "The time is " . date("s");

$i =  date("s");

echo "<title>".date('s')."</title>";  

$image_of_day = "images/p5.jpg";

switch($i)
     {
         case $i<=10:
         $image_of_day = "images/p0.jpg";
         
         break;
	 case $i<=15:

         $image_of_day = "images/p1.jpg";
         echo "<title>Today is  Monday</title>";  
         break;
	 case $i<=25:

         $image_of_day = "images/p2.jpg";
         echo "<title>Today is  Tuesday</title>";  
         break;
	 case $i<=35:

         $image_of_day = "images/p3.jpg";
         echo "<title>Today is  Wednesday</title>";  
         break;
	 case $i<=45:

         $image_of_day = "images/p4.jpg";
         echo "<title>Today is  Thursday</title>";  
         break;
	 case $i<=55:

         $image_of_day = "images/p5.jpg";
         echo "<title>Today is  Friday</title>";  
         break;
	 case $i<=59:

         $image_of_day = "images/p6.jpg";
         echo "<title>Today is  Saturday</title>";  
         break;
  default:
        $image_of_day = "images/p5.jpg";  
        echo "<title>Today is  Sunday</title>";  
        break;       


      }


?>




<!DOCTYPE html>
<html>
<style>
.banner{width:1000px;height:300px;box-shadow:10px 10px 10px gray;}
</style>

<body>


<div class="banner">
<img class="banner" src="<?php echo $image_of_day ?>" width="1000px" height="400px">
</div>



</body>
</html>
