<!DOCTYPE html>
<html>
<body>

<?php
//Superglobale significa variabile predefinita sempre accessibile.


//$_GLOBALS
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z; 



//$_SERVER            informazioni             
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


//$_REQUEST   è usato per collezionare i dati di un form
if (isset($_POST['submit'])) {
    var_dump($_REQUEST);
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="name" value="Mario">
    <input type="text" name="lastname" value="Rossi">
    <input type="submit" name="submit" value="submit">
</form>
<?php 
}




//$_POST   è usato per collezionare i dati di un form tramite metodo post
if (isset($_POST['submit'])) {
    var_dump($_REQUEST);
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="name" value="Mario">
    <input type="text" name="lastname" value="Rossi">
    <input type="submit" name="submit" value="submit">
</form>
<?php 
}



//$_GET   è usato per collezionare i dati tramite metodo get (barra degli indirizzi del browser)
if (isset($_GET['submit'])) {
  var_dump($_REQUEST);
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="name" value="Mario">
  <input type="text" name="lastname" value="Rossi">
  <input type="submit" name="submit" value="submit">
</form>
<?php 
}
?>







 
</body>
</html>