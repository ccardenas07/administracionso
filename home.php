<?php
require_once('conexion/Trabajo.php');
if (isset($_SESSION["admin"]))
{
/*$t=new Trabajo();
$nom=$t->saluda_al_usuario($_SESSION["admin"]);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRACION</title>

<!--------->

<!------------>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<link href="css/calendario.css" type="text/css" rel="stylesheet">
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-es.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<script src="js/funciones.js" type="text/javascript"></script>
<style type="text/css">

.fecha1
{
	margin-left: 225px;
    margin-top: -28px;
}
.fecha2
{
	 margin-left: 225px;
    margin-top: -28px;
}
.text2
{
	margin-top: 20px;
}
.text3
{
	margin-top: 16px;
}
.fecha3
{
	margin-left: 225px;
    margin-top: -25px;
}
.text4
{
  margin-top: 12px;	
}
.fecha4
{
	margin-left: 225px;
    margin-top: -22px;
}
.imagen1
{
	margin-top: 12px;
}
.panel
{
	color:#005295;	

	 margin: 80px auto;
    width: 522px;
}

#menu{
	
    margin: -152px auto;
    width: 449px;
}

#histrico
{
	background-position:200px -210px;
}
#histrico:hover
{
	background-position:200px -175px;
	cursor:pointer;
}
#mconsul
{
	background-position:250px -140px;
}
#mconsul:hover
{
	background-position:250px -105px;
	cursor:pointer;
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
.cat
{
	margin-left:120px;
}
.mostra
{
   
	margin: 2px auto;
    width: 1162px;
}
.ticarrera
{
	margin: 22px 137px;
	width: 350px;
}
.titprodrec
{
	margin: 18px 112px;
	width: 350px;
}
.tips
{
	margin: 14px 115px;
	width: 350px;
}
.salir
{
	margin: 0 1091px;
    width: 96px;

}

</style>
</head>

<body>
<div id="maincontent">

<div id="menu">
<!--<ul>
   <li  class="boton" id="historico">
         &nbsp;
        </li>
        <li  class="boton" id="mconsul">
         &nbsp;
        </li>
</ul>-->
				<a href="consulta.php" ><div class="runing">HISTORICO</div></a>
				<a href="vistaf.php" target="_blank"><div class="biking">MOSTRAR</div></a>
				<a href="ingreso.php" ><div class="biking">USUARIOS</div></a>			
</div>
<div class="salir">
<a href="salir.php">Cerrar Sesi&oacute;n</a>
</div>
<div class="panel">

<form name="form" action="procesa.php" method="post" enctype="multipart/form-data">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Datos Guardados</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==2)
{
	?>
	<h2 style="color:green;">Datos Borrados</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==3)
{
	?>
	<h2 style="color:green;">Datos Modificados</h2>
	<?php
}
?>
<div class="cat">
<p>Categoría
  <select name="opcion">
    <option value="0">Seleccione Categoria</option>
    <option value="Running">Running</option>
    <option value="Biking">Biking</option>
    <option value="Extreme">Extreme</option>
  </select>
</p>
</div>
<div class="ticarrera">
<h2 style="color:#9f9f9f!important">Próximas Carreras </h2>
</div>
Texto1
  <input type="text" name="texto" />
<div class="fecha1">
Fecha (d/m/a): 
  <!--************************-->
  <input type="text" name="fecha1" id="fecha1" value=""  />
</div>  
  <!-- script que define y configura el calendario-->
<div class="text2">
 Texto2
  <input type="text" name="texto2" />
</div>
<div class="fecha2">
Fecha (d/m/a): 
  <!--************************-->
  <input type="text" name="fecha2" id="fecha2" value=""  />
 </div> 
  <!-- script que define y configura el calendario-->
  <div class="text3">
  Texto3
  <input type="text" name="texto3" />
  </div>
<div class="fecha3">
Fecha (d/m/a): 
  <!--************************-->

  <input type="text" name="fecha3" id="fecha3" value=""  />
 </div> 
 
 <div class="text4">
  Texto4
  <input type="text" name="texto4" />
  </div>
<div class="fecha4">
Fecha (d/m/a): 
  <!--************************-->

  <input type="text" name="fecha4" id="fecha4" value=""  />
 </div> 
  <!-- script que define y configura el calendario-->
  <div class="imagen1">
  Imagen (281x316)
  <input type="file" name="foto" />
  </div>
  <div class="titprodrec">
<h2 style="color:#9f9f9f!important">Producto Recomendado</h2>
</div>
<div class="imagen2">
Imagen (300x168)
  <input type="file" name="foto2" />
</div>
<div class="tips">
<h2 style="color:#9f9f9f!important">Tips de Entrenamiento</h2>
</div>
<div class="imagen3">
Imagen (713x257)
  <input type="file" name="foto3" />
</div>
 
  
  <!--************************-->
</p>
<div class="boton">
  <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />
<input type="hidden" name="nombre" id="nombre"  value="<?php echo $nom[0]["user"]?>" />
<div id="error"></div>
<input type="button" name="enviar" value="guardar" onclick="valida_descripcion()"  />
</div>

</form>
</div>

<div class="mostra">
<?php //include'consultauni.php'?>
<?php include'consulta.php'?>
</div>


</div><!--fin maincontent--->
</body>
</html>

<?php
}else
{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='index.php';
	</script>
	";
}
?>

