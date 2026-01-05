<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HUEHUETÁN CHIAPAS</title>

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    

    <!-- ##### Header Area Start ##### -->
	  <?php
	  
 include 'menu.php';
 
 ?>
    <!-- ##### Header Area End ##### -->

<?php
 
//Lista de letras abecedario
$letras=array('C');
$carpeta="pdf";
$ruta="/".$carpeta."/";
$directorio=opendir($carpeta);
//recoger los  datos
$datos=array();
while ($archivo = readdir($directorio)) { 
  if(($archivo != '.')&&($archivo != '..')){
     $datos[]=$archivo; 
  } 
}
closedir($directorio);
 
for($j=0;$j<count($letras);$j++){
 echo "<div class='cuerpo'>";
 echo "<h2>".$letras[$j]."</h2>";
 echo "<ul>";
 //imprimir datos
 for($i=0;$i<count($datos);$i++){
   $archivo=$datos[$i];
   $archivo2 = explode("." , $archivo);
   if($archivo[0]==$letras[$j]){
      echo "<h3><li><a href='".$ruta.$archivo."' title='".$archivo2[0]."'>".$archivo2[0]."</a></li></h3><hr>";
   }
 }
 echo "</ul>";
 echo "</div>";
}
 
?>
<br><br><br><br><br><br><br><br>

    <!-- ##### Footer Area Start ##### -->

		   <?php
	  
 include 'footer.php';
 
 ?>
	
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>