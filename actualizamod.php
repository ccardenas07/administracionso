<?php
session_start();
require_once("conexion/Coneccion.php");

if(empty($_FILES["foto"]["name"])or empty($_FILES["foto2"]["name"])or empty($_FILES["foto3"]["name"]))
        {
            $image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			echo"1".$image1."2".$image2."3".$image3;
           $sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',
imagen1='$image1',imagen2='$image2',imagen3='$image3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_GET["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: consultahomeid.php?m=1");	
        }else
        {
            if($_FILES["foto"]["type"]=="image/jpeg"or$_FILES["foto2"]["type"]=="image/jpeg"or $_FILES["foto3"]["type"]=="image/jpeg")
            {
				
                $image1=$_POST["image1"].".jpg";
				$image2=$_POST["image2"].".jpg";
				$image3=$_POST["image3"].".jpg";
				
                copy($_FILES["foto"]["tmp_name"],"upload/$image1");
				copy($_FILES["foto2"]["tmp_name"],"upload/$image2");
				copy($_FILES["foto3"]["tmp_name"],"upload/$image3");
                $sql="update descripcion set idc='".$_POST["idc"]."',texto1='".$_POST["texto"]."',fecha1='".Coneccion::invierte_fecha($_POST["fecha1"],2)."',texto2='".$_POST["texto2"]."',fecha2='".Coneccion::invierte_fecha($_POST["fecha2"],2)."',texto3='".$_POST["texto3"]."',fecha3='".Coneccion::invierte_fecha($_POST["fecha3"],2)."',texto4='".$_POST["texto4"]."',fecha4='".Coneccion::invierte_fecha($_POST["fecha4"],2)."',
imagen1='$image1',imagen2='$image2',imagen3='$image3',fechas='".$_POST["datehost"]."',usuario='".$_SESSION['admin']."' where idd=".$_GET["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: consultahomeid.php?m=1");	
        }
	}
