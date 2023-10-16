<!DOCTYPE html>
<html>
 <head>
  <title> Numero 3 </title>
 </head>
 <body>
  <?php
  if(isset($_GET['numero'])) {
   $numero = intval($_GET['numero']);
 
   $anys = floor($numero / 365);
   $mesos = floor(($numero % 365) / 30);
   $dies_restants = $numero % 30;

   echo "<h2>Resultats:</h2>";
   echo "Dies: $dies<br>";
   echo "Anys: $anys<br>";
   echo "Mesos: $mesos<br>";
   echo "Dies Restants: $dies_restants";
  } else {
    echo "Si us plau, introdueix un nombre de dies.";
  }
  ?>
 </body>
</html>
