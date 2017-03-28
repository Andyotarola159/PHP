<?php 

class Coche{

   var $ruedas;
   var $color;
   var $motor;
   var $tamaño;    
    
   function Coche(){   #metodo constructor

       $this->ruedas=4;  #estado inicial de lo que tenga el constructor
       $this->color="";
       $this->motor=1600;
       $this->tamaño="";
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
  function establece_color($color_coche){

      $this->color=$color_coche;
    
      echo "El color de este coche es:" . $this->color;
  }

  function establece_tamaño($coche_tamaño){
      $this->tamaño=$coche_tamaño;

      echo "El tamaño de este coche es : " . $this->tamaño;
  }


}

class Camion{

   var $ruedas;
   var $color;
   var $motor;
   var $tamaño;     
    
   function Camion(){   #metodo constructor

       $this->ruedas=8;  #estado inicial de lo que tenga el constructor
       $this->color="";
       $this->motor=2600;
       $this->tamaño="";
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
  function establece_color($color_coche){

      $this->color=$color_coche;
    
      echo "El color de este coche es:" . $this->color;
  }

  function establece_tamaño($coche_tamaño){
      $this->tamaño=$coche_tamaño;

      echo "El tamaño de este coche es : " . $this->tamaño;
  }


}







/*$ferrari=new Coche();     #Instancias
$mazda=new Coche();


$ferrari->establece_color("Verde");
echo "<br>";
$mazda->establece_color("Azul");
$ferrari->establece_tamaño("500");


/*$ferrari->girar();
echo $ferrari->motor;*/

 ?>

