<?php
require_once('conexion/Trabajo.php');
//if (isset($_SESSION["admin"]))
//{
$t=new Trabajo();
$re=$t->consultarunning();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<title>configuración</title>
<style type="text/css">
.titulo1
{
	font-size: 24px;
    margin-left: 42px;
    margin-top: -793px;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
}
.titulo2
{
	 font-size: 24px;
    margin-left: 472px;
    margin-top: -137px;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
}
.titulo3
{
	font-size: 24px;
    margin-left: 64px;
    margin-top: 5px;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
}
.imagen1
{
margin-left: 477px;
    margin-top: 53px;
}
.imagen2
{
  margin-left: 18px;
    margin-top: -76px;
}
.imagen3
{
	 margin-left: 27px;
    margin-top: 38px;
}
.imagen4
{
	margin-left: 257px;
margin-top: -168px;
}
.imagen5
{
	margin-left: 529px;
margin-top: -168px;
}
.regresar
{
	 margin-left: 25px;
    margin-top: 314px;
}
.texto
{
	margin-left: 38px;
    margin-top: 8px;
	font-family: 'frutigernextltbold';
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-size:13px;
	float:left;
	
}
.fecha
{
	margin-top: -20px; 
	margin-left: 189px;
	color:#c1d82f;
	font-size:13px;
	font-weight:bold;
		float:left;
}
.texto2
{
	margin-left: 38px; 
	margin-top: 21px;
	color:#0a5a9c;
}
.fecha2
{
	margin-left: 188px; 
	margin-top: -20px;
	color:#bada2f;
	font-weight: bold;
}
.texto3
{
	margin-left: 38px; 
	margin-top: 22px;
	color:#0a5a9c;
}
.fecha3
{
	margin-top: -22px; 
	margin-left: 188px;
	color:#bada2f;
	font-weight: bold;
}
.texto4
{
	margin-left: 38px;
	 margin-top: 20px;
	 color:#0a5a9c;
}
.fecha4
{
	margin-left: 188px; 
	margin-top: -22px;
	color:#bada2f;
	font-weight: bold;
}

/*****************************/

#menu{
	margin: -152px auto;
    width: 907px
			/*float:left; width:99%; margin:-152px 4px 0 39px;*/
}

.runing{
	width:142px;
	height:41px; 
	background:url(ima/menu1.png);
	background-repeat:no-repeat;
	cursor:pointer;
	float:left;
	color:#FFF;
}

.biking{
	width:142px;
	height:41px; 
	background:url(ima/menu1.png);
	background-repeat:no-repeat;
	cursor:pointer;
	float:left;
	color:#FFF !important;
}
.runing:hover{
	width:142px;
	height:41px; 
	background:url(ima/menu2.png) no-repeat scroll 0 0 transparent !important;
}

.biking:hover{
	width:142px;
	height:41px; 
	background:url(ima/menu2.png) no-repeat scroll 0 0 transparent !important;
}
#menu a:link
{
	text-decoration:none;
	/*color:#FFF !important;*/
 	
	
}

/******************************/
</style>
</head>

<body>
<div id="maincontent">
<div id="menu1">
				<a href="vista.php"><div class="runing">RUNNING</div></a>
				<a href="vista2.php"><div class="biking">BIKING</div></a>
				<a href="vista3.php"><div class="biking">EXTREME</div></a>			
</div>
<div id="cuerpo">
<div class="titulo1">
Proximas Carreras
</div>
<div class="texto">
<?php echo $re[0]["texto1"] ?>
</div>
<div class="fecha">
<?php echo $re[0]["fecha1"] ?>
</div>
<div class="texto">
<?php echo $re[0]["texto2"] ?>
</div>
<div class="fecha">
<?php echo $re[0]["fecha2"] ?>
</div>
<div class="texto">
<?php echo $re[0]["texto3"] ?>
</div>
<div class="fecha">
<?php echo $re[0]["fecha3"] ?>
</div>
<div class="texto">
<?php echo $re[0]["texto4"] ?>
</div>
<div class="fecha">
<?php echo $re[0]["fecha4"] ?>
</div>
<div class="titulo2">
Producto Recomendado
</div>
<div class="imagen1">

<?php echo '<img src="upload/'.$re[0]["imagen1"].'" width="222px" height="180px" />';?>
<!--<img src="ima/carreradestacadabiking.jpg"width="222px" height="180px" />-->
</div>

<div class="imagen2">
<!--<img src="ima/carreradestacadarunning.jpg"width="250px" height="192px" />-->

<?php echo '<img src="upload/'.$re[0]["imagen2"].'" width="250px" height="192px" />';?>
</div>
<div class="titulo3">
Tips de entrenamiento
</div>
<div class="imagen3">
<?php echo '<img src="upload/'.$re[0]["imagen3"].'" width="700px" height="255px" />';?>
</div>

<div class="regresar">
<a href="home.php">Regresar</a>
</div>
</div>
</div>
</body>
</html>