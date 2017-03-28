<?php 
    
  $nombre="lorem ipsum";


   function nombre4(){
      global $nombre;

      $nombre="Tu nombre es :" . $nombre;

      echo $nombre;
 }

 ?>