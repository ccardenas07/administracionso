<?php
require_once('conexion/Trabajo.php');
require_once('conexion/Coneccion.php');
//if (isset($_SESSION["admin"]))
//{
$t=new Trabajo();
$cd=$t->consultaid($_GET["idd"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRACION</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<link href="css/calendario.css" type="text/css" rel="stylesheet">
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
.inscripcion
{
	
	margin: -149px auto;
    width: 790px;
}
.formul
{
	margin: 53px auto;
    width: 494px;
}
.tituloed
{
	margin: -2px auto;
    width: 172px;
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

<div class="inscripcion">
<div class="tituloed">
<h1 >EDICIÓN </h1>
</div>

<div class="formul">
<form name="form" action="actualiza.php" method="post" enctype="multipart/form-data">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Datos Modificado</h2>
	<?php
}
if (isset($_GET["m"]) and $_GET["m"]==2)
{
	?>
	<h2 style="color:green;">PASO</h2>
	<?php
}
?>
Categoría
   <input type="text" name="idc" value="<?php echo $cd[0]["idc"]?>" />


<h2>Próximas Carreras </h2>
Texto1
  <input type="text" name="texto" value="<?php echo $cd[0]["texto1"]?>" />
<div class="fecha1">
Fecha (d/m/a): 
  <!--************************-->
  <input type="text" name="fecha1" id="fecha1" value="<?php echo $cd[0]["fecha1"]?>"  />
</div>  
  <!-- script que define y configura el calendario-->
<div class="text2">
 Texto2
  <input type="text" name="texto2"value="<?php echo $cd[0]["texto2"]?>" />
</div>
<div class="fecha2">
Fecha (d/m/a): 
  <!--************************-->
  <input type="text" name="fecha2" id="fecha2" value="<?php echo $cd[0]["fecha2"]?>" />
 </div> 
  <!-- script que define y configura el calendario-->
  <div class="text3">
  Texto3
  <input type="text" name="texto3" value="<?php echo $cd[0]["texto3"]?>" />
  </div>
<div class="fecha3">
Fecha (d/m/a): 
  <!--************************-->

  <input type="text" name="fecha3" id="fecha3" value="<?php echo $cd[0]["fecha3"]?>" />
 </div> 
 
 <div class="text4">
  Texto4
  <input type="text" name="texto4" value="<?php echo $cd[0]["texto4"]?>"/>
  </div>
<div class="fecha4">
Fecha (d/m/a): 
  <!--************************-->

  <input type="text" name="fecha4" id="fecha4" value="<?php echo $cd[0]["fecha4"]?>"  />
 </div> 
  <!-- script que define y configura el calendario
  -->
  <div class="imagen1">
  Imagen (281x316)
<img src="<?php Coneccion::ruta()?>upload/<?php echo $cd[0]["imagen1"];?>" width="100px" height="100px" />
<!--<input type="text" name="image1" value="<?php //echo $cd[0]["imagen1"]?>"/>-->
<!--value="<?php //echo $cd[0]["imagen1"]?>"--->
   <input type="file" name="foto"  />
  </div>
<h2>Producto Recomendado</h2>
<div class="imagen2">
Imagen (300x168)

  <img src="<?php Coneccion::ruta()?>upload/<?php echo $cd[0]["imagen2"];?>" width="100px" height="100px" />
  <input type="file" name="foto2"  />
</div>
<h2>Tips de Entrenamiento</h2>
<div class="imagen3">
Imagen (713x257)
<img src="<?php Coneccion::ruta()?>upload/<?php echo $cd[0]["imagen3"];?>" width="100px" height="100px" />
  <input type="file" name="foto3" />
</div>
 
  
  <!--************************-->
</p>
<div class="boton">
  <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />
<input type="hidden" name="idd" value="<?php echo $_GET["idd"];?>" />
<input type="hidden" name="image1" value="<?php echo $cd[0]["imagen1"]?>"/>
 <input type="hidden" name="image2" value="<?php echo $cd[0]["imagen2"]?>"/>
  <input type="hidden" name="image3" value="<?php echo $cd[0]["imagen3"]?>"/>
<div id="error"></div>
<input type="button" value="editar" onclick="document.form.submit();" />
<!--<input type="button" name="editar" value="editar" onclick="valida_descripcionid()" />-->
</div>

<a href="home.php">regresar</a>

</form>
</div>

</div>
<!--<div class="salir">
<a href="salir.php">Cerrar Sesi&oacute;n</a>
</div>-->
</div>
</body>
</html>

<?php
/*}else
{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='ingreso.php';
	</script>
	";
}*/
?>
