<?php
require_once('conexion/Trabajo.php');
//if (isset($_SESSION["admin"]))
//{
$t=new Trabajo();
$cd=$t->consultaid($_GET["idd"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>configuración</title>
<style type="text/css">
.imagen1{
margin-top: -697px;
margin-left: 411px;
}
.imagen2
{
	margin-top:-45px;
}
.imagen3
{
	margin-left: 24px;
margin-top: 83px;
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
</style>
</head>

<body>

<img src="ima/background_sports.jpg" width="790px" height="975px" />
<div class="imagen1">

<?php echo '<img src="upload/'.$cd[0]["imagen1"].'" width="222px" height="180px" />';?>
<!--<img src="ima/carreradestacadabiking.jpg"width="222px" height="180px" />-->
</div>
<div class="imagen2">
<!--<img src="ima/carreradestacadarunning.jpg"width="250px" height="192px" />-->

<?php echo '<img src="upload/'.$cd[0]["imagen2"].'" width="250px" height="192px" />';?>
</div>
<div class="imagen3">
<?php echo '<img src="upload/'.$cd[0]["imagen3"].'" width="700px" height="255px" />';?>
</div>
<div class="imagen4">
<!--<img src="ima/carreradestacadaextreme.jpg" width="150px" height="169px" /-->>
</div>
<div class="imagen5">
<!--<img src="ima/carreradestacadaextreme.jpg"width="150px" height="169px" />
--></div>
<div class="regresar">
<input type="button" onclick="history.back()" value="REGRESAR" />
</div>
</body>
</html>