<?php
require_once('conexion/Trabajo.php');
$t=new Trabajo();
$re=$t->consultauni();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<title>Consulta</title>
<style type="text/css">
.consulta
{
	 margin-top:26px;
}
td
{
	font-size:16px;
	
	
}

</style>
</head>

<body>

<!--<img src="ima/fondos2.png" width="1100px" width="790px" />-->
<div class="consulta">
<table border="1">
<tr>
<!--<th align="center">id</th>-->
<th align="center">CATEGORIA</th>
<!--<td align="center"><a href="javascript:void();"><img src="ima/editar.png" width="16px" height="16px" /></a></td>-->
<th align="center">TEXTO</th>
<th align="center">FECHA</th>
<th align="center">TEXTO</th>
<th align="center">FECHA</th>
<th align="center">TEXTO</th>
<th align="center">FECHA</th>
<th align="center">TEXTO</th>
<th align="center">FECHA</th>
<th align="center">imagen1</th>
<th align="center">imagen2</th>
<th align="center">imagen3</th>
<th align="center">fecha</th>
<th align="center">usuario</th>
<th align="center">editar</th>
<th align="center">eliminar</th>
<!--<th align="center">PRE VISUALIZACION</th>-->
</tr>

    <tr>
<!--    <td><?php//echo $re[0]["idd"]?></td>-->
    <td><?php echo $re[0]["idc"]?></td>
    <td><?php echo $re[0]["texto1"]?></td>
      <td><?php echo $re[0]["fecha1"]?></td>
     <td><?php echo $re[0]["texto2"]?></td>
     <td><?php echo $re[0]["fecha2"]?></td>
    <td><?php echo $re[0]["texto3"]?></td>
    <td><?php echo $re[0]["fecha3"]?></td>
     <td><?php echo $re[0]["texto4"]?></td>
    <td><?php echo $re[0]["fecha4"]?></td>
   
    <td><?php echo '<img src="upload/'.$re[0]["imagen1"].'" width="100px" height="100px" />';?></td>
    <td><?php echo '<img src="upload/'.$re[0]["imagen2"].'" width="100px" height="100px" />';?></td>
      <td><?php echo '<img src="upload/'.$re[0]["imagen3"].'" width="100px" height="100px" />';?></td>
       <td><?php echo $re[0]["fechas"]?></td>
    <td><?php echo $re[0]["usuario"]?></td>
    <td align="center"><a href="javascript:void();"onclick="window.location='consultahomeid.php?idd=<?php echo $re[0]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>
    <td align="center"><a href="javascript:void();" onclick="window.location='eliminardescrip.php?idd=<?php echo $re[0]["idd"]; ?>'"><img src="ima/eliminar.png" width="16px" height="16px" /></td>
    
    <!--<td align="center"><a href="javascript:void();"onclick="window.location='mostrar.php?idd=<?php //echo $re[$i]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>-->
    </tr>
 
 
  <tr>
<!--    <td><?php//echo $re[0]["idd"]?></td>-->
    <td><?php echo $re[1]["idc"]?></td>
    <td><?php echo $re[1]["texto1"]?></td>
      <td><?php echo $re[1]["fecha1"]?></td>
     <td><?php echo $re[1]["texto2"]?></td>
     <td><?php echo $re[1]["fecha2"]?></td>
    <td><?php echo $re[1]["texto3"]?></td>
    <td><?php echo $re[1]["fecha3"]?></td>
     <td><?php echo $re[1]["texto4"]?></td>
    <td><?php echo $re[1]["fecha4"]?></td>
   
    <td><?php echo '<img src="upload/'.$re[1]["imagen1"].'" width="100px" height="100px" />';?></td>
    <td><?php echo '<img src="upload/'.$re[1]["imagen2"].'" width="100px" height="100px" />';?></td>
      <td><?php echo '<img src="upload/'.$re[1]["imagen3"].'" width="100px" height="100px" />';?></td>
       <td><?php echo $re[1]["fechas"]?></td>
    <td><?php echo $re[1]["usuario"]?></td>
    <td align="center"><a href="javascript:void();"onclick="window.location='consultahomeid.php?idd=<?php echo $re[1]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>
    <td align="center"><a href="javascript:void();" onclick="window.location='eliminardescrip.php?idd=<?php echo $re[1]["idd"]; ?>'"><img src="ima/eliminar.png" width="16px" height="16px" /></td>
    
    <!--<td align="center"><a href="javascript:void();"onclick="window.location='mostrar.php?idd=<?php //echo $re[$i]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>-->
    </tr>
    
    
     <tr>
<!--    <td><?php//echo $re[0]["idd"]?></td>-->
    <td><?php echo $re[2]["idc"]?></td>
    <td><?php echo $re[2]["texto1"]?></td>
      <td><?php echo $re[2]["fecha1"]?></td>
     <td><?php echo $re[2]["texto2"]?></td>
     <td><?php echo $re[2]["fecha2"]?></td>
    <td><?php echo $re[2]["texto3"]?></td>
    <td><?php echo $re[2]["fecha3"]?></td>
     <td><?php echo $re[2]["texto4"]?></td>
    <td><?php echo $re[2]["fecha4"]?></td>
   
    <td><?php echo '<img src="upload/'.$re[2]["imagen1"].'" width="100px" height="100px" />';?></td>
    <td><?php echo '<img src="upload/'.$re[2]["imagen2"].'" width="100px" height="100px" />';?></td>
      <td><?php echo '<img src="upload/'.$re[2]["imagen3"].'" width="100px" height="100px" />';?></td>
       <td><?php echo $re[2]["fechas"]?></td>
    <td><?php echo $re[2]["usuario"]?></td>
    <td align="center"><a href="javascript:void();"onclick="window.location='consultahomeid.php?idd=<?php echo $re[2]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>
    <td align="center"><a href="javascript:void();" onclick="window.location='eliminardescrip.php?idd=<?php echo $re[2]["idd"]; ?>'"><img src="ima/eliminar.png" width="16px" height="16px" /></td>
    
    <!--<td align="center"><a href="javascript:void();"onclick="window.location='mostrar.php?idd=<?php //echo $re[$i]["idd"];?>'"><img src="ima/editar.png" width="16px" height="16px" /></a></td>-->
    </tr>
    
    
</table>
</div>

</body>
</html>