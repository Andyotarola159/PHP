<?php 

 if (isset($_POST["enviar"])){#isser:funciona cuando el ha sido enviado algo {
 
    $num1=$_POST["numero1"]; #es una super variable que funciona como el document.getElementById
    $num2=$_POST["numero2"];
    $operar=$_POST["tipo_operacion"];


	if ($operar=="sumar") {
		echo "El resultado es :" . ($num1 + $num2);
	}
	elseif ($operar=="resta") {
		echo "El resultado es :" . ($num1 - $num2);
	}
	elseif ($operar=="multiplicar") {
		echo "El resultado es :" . ($num1 * $num2);
	}
	elseif ($operar=="division") {
		echo "El resultado es : " . ($num1 / $num2);
	}
    elseif ($operar=="elevar") {
    	echo "El resultado es:" . pow($num1, $num2);
    }

   #define("Edad","14"); #es constante

}
 ?>