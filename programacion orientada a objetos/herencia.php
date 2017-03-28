<!DOCTYPE html>
<html>
<head>
	<title>Herencia</title>
</head>
<body>

<?php 

 include("vehiculos.php");

 $ferrari=new Camion();

 $ferrari->establece_color("azul");
 echo "<br>";  
 $ferrari->girar();

 ?>
</body>
</html>