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
	margin-left: 169px;
    margin-top: -671px;
    position: relative;
}
</style>
</head>

<body>
<img src="ima/background_sports.jpg" width="790px" height="790px" />
<div class="inscripcion">
<h1>EDICION DE ADMINISTRACION</h1>
<form name="form" action="actualizatxt.php" method="post" enctype="multipart/form-data">
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

  <!-- script que define y configura el calendario
  -->
  <div class="imagen1">
  Categoria

   <input type="text" name="texto" value="<?php echo $cd[0]["texto1"]?>" />
  </div>

 
  
  <!--************************-->
</p>
<div class="boton">
  <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />
<input type="hidden" name="idd" value="<?php echo $_GET["idd"];?>" />
<!--<input type="hidden" name="image1" value="<?php //echo $cd[0]["imagen1"]?>"/>
 <input type="hidden" name="image2" value="<?php //echo $cd[0]["imagen2"]?>"/>
  <input type="hidden" name="image3" value="<?php //echo $cd[0]["imagen3"]?>"/>-->
<div id="error"></div>
<input type="button" value="editar" onclick="document.form.submit();" />
<!--<input type="button" name="editar" value="editar" onclick="valida_descripcionid()" />-->
</div>
<a href="salir.php">Cerrar Sesi&oacute;n</a>
<a href="home.php">regresar</a>

</form>
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
