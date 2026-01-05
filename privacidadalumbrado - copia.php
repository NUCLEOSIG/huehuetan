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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="cont.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>



    <!-- ##### Header Area Start ##### -->
	  <?php
	  
 include 'menu.php';
 
 ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Single Blog Area Start ##### -->
    <br><br>
 <h4 align="center">AVISOS DE PRIVACIDAD</h4>


<p align="center"><!--<a href=""><img src=""></a>&nbsp;&nbsp;<a href=""><img src="img/2dotrimestre.png"></a>&nbsp;&nbsp;<a href=""><img src="img/3ertrimestre.png"></a>&nbsp;&nbsp;<a href=""><img src="img/4totrimestre.png"></a>--></p>
<br>
    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div>
                    
                    
                        <!-- Blog Content -->
<?php
$listar = null;
$directorio = opendir("privacidad/Aviso de Privacidad Alumbrado Publico/");
while($elemento = readdir($directorio))
{
    if($elemento != "." && $elemento != "..")
    {
    if (is_dir("privacidad/Aviso de Privacidad Alumbrado Publico/".$elemento))
    {
        $listar .= "<li><img src='pdf.png'><a href='privacidad/Aviso de Privacidad Alumbrado Publico/$elemento' target='_blank'>$elemento/</a></li>";
    }
    else
    {
        $listar .= "<li><img src='pdf.png'><a href='privacidad/Aviso de Privacidad Alumbrado Publico/$elemento' target='_blank'>$elemento</a></li>";
    }
    }
}
?>


<ul>
    <?php echo $listar ?>
</ul>
 
<br>
                		


                </div>

                <!-- ##### Sidebar Area ##### -->
               
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

 

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