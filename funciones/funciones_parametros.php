<!DOCTYPE html>
<html>
<head>
	<title>funcion2</title>
</head>
<body>

<?php 

function cambia_mayus(&$param){

    $param=strtolower($param);
    $param=ucwords($param);

    return $param;

}

$numero="CAtOrCe";

echo cambia_mayus($numero)."<br>";
echo $numero;

























/*function incremento(&$var1){ #esta es una funcion por referencia

    $var1++;
    return $var1;

}

$numero=4;

echo incremento($numero);

echo $numero;*/





 ?>



</body>
</html>