

                           <?php
	error_reporting (E_ALL ^ E_NOTICE);
?>



<!DOCTYPE html>
<html>
<head>
	<title>GERARDO</title>
</head>
<body>

<form  action ="comentar.php " method="post"  >
	
<b>Nombre</b>:<input name="nombre"><br>
	<br>
	<textarea name ="comentario" cols=44>escribir comentario.... </textarea>
<br/>
<input type="submit" value ="enviar comentario"/>

</FORM>


<br>

<b>comentario de los visitantes </b>
<table width="10 " border =1>
	<td>

<?php

include("yo.php");

?>
</td>
</table>

</body>
</html>	