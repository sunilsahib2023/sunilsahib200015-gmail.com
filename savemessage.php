<h1>Following Data is updated or Saved in  Data File </h1>
<?php


$d = $_POST['editeddata'];

echo $d;

$ff = fopen("maildata.txt", "w+") or die("Unable to open file!");
fwrite($ff,$d);

?>

<br/><br/>
<a href="http://sunilsahib200015net23net.000webhostapp.com/message.php">Back to  Message</a>
<br/><br/>
<a href="first.php">Edit Message File Again </a><br/>

<a href="http://sunilsahib200015net23net.000webhostapp.com">Home</a><br/>