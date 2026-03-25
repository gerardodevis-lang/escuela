
                           <?php
	error_reporting (E_ALL ^ E_NOTICE);

?>

        <li class=""><a href="index.html"class="btn btn-primary">INICIO</a></li>


<?php
$comentario =$_POST ['comentario'];
$nombre = $_POST  ['nombre'];

$aleer = fopen("yo.php", "r");
$aleer =fread($aleer, filesize("yo.php") );
$escribir =fopen("yo.php", "w+1");
fwrite ($escribir,"<b>Nombre:$nombre<br>Comentatio:$comentario</p><hr>$aleer");
fclose($escribir);
include ("yo.php");


?>