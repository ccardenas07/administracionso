<?php
session_start();
require_once("conexion/Coneccion.php");
if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
            $image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			           
           $sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: consultahomeid.php?m=1");
        }else
		{
						/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
			/*foto2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			
			
			/*foto3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			//echo"1".$foto1."2".$foto2."3".$foto3;
				//print_r($_POST);
				//print_r($_FILES);
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		copy($temp3,"upload/$nombre_foto3");

		}
		//Ahora guardamos el archivo en una tabla de la base  LA FOTO
	
	$sql="update descripcion set imagen2='$nombre_foto2',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	//header("Location: consultahomeid.php?m=1");	
		header("Location: home.php");	
		//header("Location: consultahomeid.php?m=2");
		


?>