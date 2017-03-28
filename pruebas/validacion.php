<?php 
if (isset($_POST["enviar"])){
	$usuario=$_POST["nombre"];
	$edad=$_POST["edad"];

   if ($usuario=="andy" && $edad>=18) {
   	  echo "welcome";
   }
   else{
   	echo "chao";
   }


}

 ?>