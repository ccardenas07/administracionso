<?php
session_start();
require_once("conexion/Coneccion.php");
/*texto sin imagenes*/

if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
						           
           $sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");
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
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$nombre_foto',imagen2='$nombre_foto2',imagen3='$nombre_foto3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
/************************imagen1****************************************/
if(!empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
			/*foto2*/
			
		$nombre_foto=$foto;
		
		copy($temp,"upload/$nombre_foto");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$nombre_foto',imagen2='$image2',imagen3='$image3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}
/********************************imagen2**************************************************/		
if(empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO1*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			/*foto2*/
			
		$nombre_foto2=$foto2;
		
		copy($temp2,"upload/$nombre_foto2");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$image1',imagen2='$nombre_foto2',imagen3='$image3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/********************************imagen3**************************************************************************/
	if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO1*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			/*foto2*/
			
		$nombre_foto3=$foto3;
		
		copy($temp3,"upload/$nombre_foto3");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$image1',imagen2='$image2',imagen3='$nombre_foto3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************************************imagen 1 -2******************************************************************/
	
	if(!empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			
			
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$nombre_foto',imagen2='$nombre_foto2',imagen3='$image3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************imagen1-3 ********************************************/
	if(!empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
							/*FOTO3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			
			
		$nombre_foto=$foto;
		$nombre_foto3=$foto3;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp3,"upload/$nombre_foto3");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$nombre_foto',imagen2='$image2',imagen3='$nombre_foto3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************imagen 2-3***************************************/
	if(empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
							/*FOTO3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			
			
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp3,"upload/$nombre_foto3");
		
		$sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',imagen1='$image1',imagen2='$nombre_foto2',imagen3='$nombre_foto3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
?>


