<!DOCTYPE html>
<html>
<head>
	<title>POO-clases-instancia</title>
</head>
<body>

<?php 

class Coche{

   var $ruedas;
   var $color;
   var $motor;     
   
 
   function Coche(){   #metodo constructor

       $this->ruedas=4;  #estado inicial de lo que tenga el constructor
       $this->color="";
       $this->motor=1600;

   }




   function arrancar(){

      echo "Arrancar";

   }
   function girar(){

       echo "girar";

   }
   function frenar(){

       echo "frenar";

   }
  


}


$ferrari=new Coche();     #Instancias
$mazda=new Coche();

$ferrari->girar();

 ?>





</body>
</html>