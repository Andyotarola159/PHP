<!DOCTYPE html>
<html>
<head>
	<title>funcion</title>
</head>
<body>
<?php 
  

  function frase_mayus($frases,$conversion=true){
 
      $frases=strtolower($frases);

      if ($conversion==true) {


      	  $resultado=ucwords($frases);
      	
      }
      else{
      	$resultado=strtoupper($frases);
      }
      return $resultado;

  }

echo frase_mayus("LOL");























  #$var1="CASA";
  
  #echo strtolower($var1);  sirve para poner en minusculas cualquier string
  #strtoupper()    sirve para para en mayusculas cualquier string



 ?>
</body>
</html>