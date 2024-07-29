 <?php
echo '<br/><a href="https://sunilsahib2023.000webhostapp.com/sunil">Home</a><br/><br/><br/> ';

function showForm($error="LOGIN"){
?>
<!DOCTYPE HTML">
<html>
<head>
<script>

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


<body>


  <?php echo $error; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
    Password:
     <table>
       <tr>
         <td><input name="passwd" type="password"/></td>
       </tr>
       <tr>
         <td align="center"><br/>
          <input type="submit" name="submit_pwd" value="Login"/>
         </td>
       </tr>
     </table>  
   </form>
</body>       
<?php   
}
?> 

 <?php
$Password = "demo"; // Set your password here

if (isset($_POST['submit_pwd'])){
   $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
     
   if ($pass != $Password) {
      showForm("Error- Wrong password or Password not Filled");
      exit();     
   }
   else
     {
        echo "<h1>The Valid user </h1>";
            echo "<script> location.href='https://sunilsahib2023.000webhostapp.com/chat.php'</script>";
      }
} else {
 
 
  showForm();
  exit();
}
?>
<br/>
