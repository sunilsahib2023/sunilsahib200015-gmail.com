<?php
$f = $_POST['fname'];
echo "<h1>Image </h1>";
echo "<img src='images/$f' width='300' height='200'></br>";

echo "<br/><br/><a href='readallfilename.php'>back</a><br/><br/>";

echo '<form action="del.php" Method="post"><input type="hidden" name="fdel" value="'.$f.'"><input type="Submit" value="delete File">
</form>';


?>
