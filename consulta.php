<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
$re=$t->consulta();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta</title>
<style type="text/css">
.consulta
{
	/*margin-left: -282px;*/
    margin-top: 78px;
}
body
{
	/*background-image:url(ima/bkg_body.jpg);
	background-attachment:fixed;
	background-repeat:repeat;
	padding:0;
	margin:0 auto;
	width: 950px;
	color:#FFF;*/
	 
}

</style>
</head>

<body>
<!--<img src="ima/fondos2.png" width="1100px" width="790px" />-->
<div class="consulta">
    <?php if(sizeof($re)==0)
    {
        echo"Bienvenido";
    }else
    {
        
    ?>
<table border="1">
<tr>
<!--<td>id</td>-->
<td align="center">categoria</td>
<td align="center">texto</td>
<td align="center">fecha</td>
<td align="center">texto</td>
<td align="center">fecha</td>
<td align="center">texto</td>
<td align="center">fecha</td>
<td align="center">texto</td>
<td align="center">fecha</td>
<td align="center">imagen1</td>
<td align="center">imagen2</td>
<td align="center">imagen3</td>
<td align="center">fecha</td>
<td align="center">usuario</td>
<td align="center">editar</td>
<td align="center">eliminar</td>
<!--<td>PRE VISUALIZACION</td>-->
</tr>
<?php
for($i=0;$i<sizeof($re);$i++)
{
	?>
    <tr>
   <!-- <td><?php// echo $re[$i]["idd"]?></td>-->
    <td align="center"><?php echo $re[$i]["idc"]?></td>
    <td align="center"><?php echo $re[$i]["texto1"]?></td>
    <td align="center"><?php echo $re[$i]["fecha1"]?></td>
    <td align="center"><?php echo $re[$i]["texto2"]?></td>
    <td align="center"><?php echo $re[$i]["fecha2"]?></td>
    <td align="center"><?php echo $re[$i]["texto3"]?></td>
    <td align="center"><?php echo $re[$i]["fecha3"]?></td>
    <td align="center"><?php echo $re[$i]["texto4"]?></td>
    <td align="center"><?php echo $re[$i]["fecha4"]?></td>
    <td align="center"><?php echo '<img src="upload/'.$re[$i]["imagen1"].'" width="100px" height="100px" />';?></td>
    <td align="center"><?php echo '<img src="upload/'.$re[$i]["imagen2"].'" width="100px" height="100px" />';?></td>
    <td align="center"><?php echo '<img src="upload/'.$re[$i]["imagen3"].'" width="100px" height="100px" />';?></td>
    <td align="center"><?php echo $re[$i]["fechas"]?></td>
    <td align="center"><?php echo $re[$i]["usuario"]?></td>
    <td align="center"><a href="javascript:void();"onclick="window.location='consultahomeid.php?idd=<?php echo $re[$i]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>
    <td align="center"><a href="javascript:void();" onclick="window.location='eliminardescrip.php?idd=<?php echo $re[$i]["idd"]; ?>'"><img src="ima/eliminar.png" width="16px" height="16px" /></td>
    
    <!--<td align="center"><a href="javascript:void();"onclick="window.location='mostrar.php?idd=<?php// echo $re[$i]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>-->
    </tr>
    <?php
}
    
?>
</table>
</div>
    <?php
    }
    ?>
</body>
</html>