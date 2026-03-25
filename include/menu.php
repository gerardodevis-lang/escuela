<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.jpg" type="image/jpg" />
<h5 class=<center><h5 class="text-info">


<link rel="stylesheet" href="css/estilos.css" rel="stylesheet">


<center> <?php  
                echo '<h4><strong><font color ="red"> BIENVENIDO  - '.$_SESSION["username"].'</h4>';  
                
                ?> 
                </font></center>


              <br>

                <script>



var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
var diasSemana = new Array("DOMINGO","LUNES","MARTES","MIÉRCOLES","JUEVES","VIERNES","SÁBADO");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>


<span id="liveclock" style="position:absolute;left:0;top:0;"></span><script language="JavaScript" type="text/javascript">
		 

		function show5(){
		if (!document.layers&&!document.all&&!document.getElementById)
		return

		 var Digital=new Date()
		 var hours=Digital.getHours()
		 var minutes=Digital.getMinutes()
		 var seconds=Digital.getSeconds()

		var dn="AM"
		if (hours<12)
		dn="PM"
		if (hours>12)
		hours=hours-12
		if (hours==0)
		hours=12

		 if (minutes<=9)
		 minutes="0"+minutes
		 if (seconds<=9)
		 seconds="0"+seconds
		//change font size here to your desire
		myclock="<font size='5' face='Arial' ><b><font size='1'>HORA ACTUAL:</font></br>"+hours+":"+minutes+":"
		 +seconds+" "+dn+"</b></font>"
		if (document.layers){
		document.layers.liveclock.document.write(myclock)
		document.layers.liveclock.document.close()
		}
		else if (document.all)
		liveclock.innerHTML=myclock
		else if (document.getElementById)
		document.getElementById("liveclock").innerHTML=myclock
		setTimeout("show5()",1000)

		}


		window.onload=show5
		






		 </script>
 

           