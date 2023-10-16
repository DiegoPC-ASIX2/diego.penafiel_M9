<!DOCTYPE html>
<html>
<head>
 <title> Funciona </title>
</head>
<body>
 <?php
  if (isset($_GET['numero'])) {
   $numero = intval($_GET['numero']);
   if ($numero % 2 == 0) {
	   echo "El numero $numero es parell.";
   } else {
	   echo "El numero $numero es senar.";
   }
 ?>
</body>
</html>
