<!DOCTYPE html>
<html>
<head>
	<title>switch</title>
</head>
<body>

<form id="datos" name="datos" method="post">

<label for="nombre">Nombre</label>	
<input type="text" name="nombre" id="nombre">

<label for="contraseña">Contraseña</label>
<input type="password" name="contra" id="contra">

<input type="submit" name="enviar" id="enviar">

</form>



<?php 

   if (isset($_POST["enviar"])) {

   	  $nombre=$_POST["nombre"];
      $contra_usuario=$_POST["contra"];

      
      switch (true) {
      	case $nombre=="a" &&  $contra_usuario=="1":
      		echo "welcome";
      		break;
      	
        case $nombre=="b" &&  $contra_usuario=="2":
          	echo "welcome";
          	break;  
        case $nombre=="c" &&  $contra_usuario=="3":
          	echo "welcome";
          	break; 
        case $nombre=="d" &&  $contra_usuario=="4":
          	echo "welcome";
          	break;   

      	default:
      		echo "dadfsa";
      
      }

   }
   
 

 ?>
</body>
</html>