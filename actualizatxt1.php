<?php
session_start();
require_once("conexion/Coneccion.php");
if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
            $image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			           
           $sql="update descripcion set texto2='".$_POST["texto2"]."',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: consultahomeid.php?m=1");
        }else
		{
			

		}
		//Ahora guardamos el archivo en una tabla de la base  LA FOTO
	
	
	//header("Location: consultahomeid.php?m=1");	
		header("Location: home.php");	
		//header("Location: consultahomeid.php?m=2");
		


?>