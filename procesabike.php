<?php
session_start();
require_once("conexion/Coneccion.php");
/*FOTO1*/

$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];
$tamano=$_FILES["foto"]["size"];
$tipo=$_FILES["foto"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto</strong>";
echo "<br>";
/*foto2*/
$foto2=$_FILES["foto2"]["name"];
$temp2=$_FILES["foto2"]["tmp_name"];
$tamano2=$_FILES["foto2"]["size"];
$tipo2=$_FILES["foto2"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto2</strong>";
echo "<br>";
/*foto3*/
$foto3=$_FILES["foto3"]["name"];
$temp3=$_FILES["foto3"]["tmp_name"];
$tamano3=$_FILES["foto3"]["size"];
$tipo3=$_FILES["foto3"]["type"];
echo "el archivo en el PC del cliente se llama: <strong>$foto3</strong>";
echo "<br>";
//if(!empty($foto)) // si esta lleno
//{
	if ($tipo=="image/jpeg" or $tipo=="image/png")
	{
		//**************************************************************************
		//Ahora podemos subir la imagen al servidor
		switch ($tipo)
		{
			case 'image/jpeg':
				$ext=".jpg";
			break;
			case 'image/png':
				$ext=".png";
			break;
		}		
		
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		//$nombre_foto=str_replace(" ","_",$nombre_foto);
		//$nombre_foto=$nombre_foto.$ext;
		//sube al servidor la imagen
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		copy($temp3,"upload/$nombre_foto3");
	}
//}
//else
//{
	//$nombre_foto = "Perfil_foto2.png";
	
	//'".Conectar::invierte_fecha($_POST["ingreso"],2)."'
//}
//***********************************************************************
//Ahora validamos la extensi�n o el tipo de archivo
	

//**************************************************************************
	//Ahora guardamos el archivo en una tabla de la base de datos HISTORIA Y NOMBRE DE LA FOTO
	$sql="insert into descripcion 	values (null,'".$_POST["opcion"]."','".$_POST["texto"]."','".Coneccion::invierte_fecha($_POST["fecha1"],2)."','".$_POST["texto2"]."','".Coneccion::invierte_fecha($_POST["fecha2"],2)."','".$_POST["texto3"]."','".Coneccion::invierte_fecha($_POST["fecha3"],2)."','".$_POST["texto4"]."','".Coneccion::invierte_fecha($_POST["fecha4"],2)."','$nombre_foto','$nombre_foto2','$nombre_foto3','".$_POST["datehost"]."','".$_SESSION['admin']."')";
	mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=1");
	
?>
