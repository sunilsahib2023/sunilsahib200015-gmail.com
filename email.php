<?php
$msend = mail("arena.sunilk@gmail.com","Trial","Test");
echo $msend;


// the message

if($_SERVER["REQUEST_METHOD"]=="POST")
{


$msg = $_POST['emessage'];
$ti =  $_POST['maddress'];
$sub = $_POST['subject'];


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

//$mse

$msend = mail($ti,$sub,$msg);


        if($msend)
            {
                echo "<h1  style='color:green'>Mail Send !</h1>";
                 echo "<h1 style='color:green'>Mail Send Successfully </h1>";
     
            }   
           else
            {
    
                  echo "<h1  style='color:red'>Could  not send mail....!</h1>";
            }

}

?>



<div style='text-align:left;margin-left:20px'>


<h3>E-malil</h3>

<form action="https://sunilsahib2025.000webhostapp.com/email.php" Method="post">

 <P>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "email" name="maddress" value="" size="25" required></p>
 <P>Subject <input type = "text" name="subject" value="" size="25" ></p>
 <p>Message<br/><textarea rows="15" cols="70" value="" name="emessage"></textarea>


</p><p><input type="submit" value="send"><input type="reset"> </p>
</form>

</div>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://sunilsahib2023.000webhostapp.com/'>Home</a>