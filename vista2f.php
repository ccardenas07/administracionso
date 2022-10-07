<?php
require_once('conexion/Trabajo.php');
//if (isset($_SESSION["admin"]))
//{
$t=new Trabajo();
$re=$t->consultarbiking();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>configuración</title>
<style type="text/css">
.titulo1
{
	font-size: 24px;
    margin-left: 42px;
    margin-top: 15px;
	margin-bottom:5px;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
}
.titulo2
{
	 font-size: 24px;
	 text-align:center;
	 width:100%;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
	margin-top:15px;
}
.titulo3
{
	font-size: 24px;
    margin-left: 64px;
    margin-top: 5px;
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-weight: bold;
}
.imagen1
{
margin:20px auto;
	width:250px;
}
.imagen2
{
	margin: 0 auto;
    position: relative;
    top: 55px;
    width: 250px;
}
.imagen3
{
	 
    margin-top: 38px;
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
.texto
{
	margin-left: 38px;
    margin-top: 8px;
	font-family: 'frutigernextltbold';
	color:#005395;
	text-decoration:none;
	cursor:pointer;
	font-size:13px;
		float:left;
}
.fecha
{
	margin-top: -20px; 
	margin-left: 189px;
	color:#c1d82f;
	font-size:13px;
	font-weight:bold;
		float:left;
		left: 34%;
		position:relative;
}
.texto2
{
	margin-left: 38px; 
	margin-top: 21px;
	color:#0a5a9c;
}
.fecha2
{
	margin-left: 188px; 
	margin-top: -20px;
	color:#bada2f;
	font-weight: bold;
}
.texto3
{
	margin-left: 38px; 
	margin-top: 22px;
	color:#0a5a9c;
}
.fecha3
{
	margin-top: -22px; 
	margin-left: 188px;
	color:#bada2f;
	font-weight: bold;
}
.texto4
{
	margin-left: 38px;
	 margin-top: 20px;
	 color:#0a5a9c;
}
.fecha4
{
	margin-left: 188px; 
	margin-top: -22px;
	color:#bada2f;
	font-weight: bold;
}

/*****************************/

#menu{
	
    margin: 0 auto;
    padding-top: 137px;
    width: 460px;

}

.runing{
	width:142px;
	height:41px; 
	background:url(ima/runing1.png);
	background-repeat:no-repeat;
	cursor:pointer;
	float:left;
	color:#FFF;
}

.biking{
	width:149px;
	height:41px; 
	background:url(ima/biking1.png);
	background-repeat:no-repeat;
	cursor:pointer;
	float:left;
	color:#FFF !important;
}
.extreme{
	width:155px;
	height:41px; 
	background:url(ima/extreme1.png);
	background-repeat:no-repeat;
	cursor:pointer;
	float:left;
}
.runing:hover{
	width:142px;
	height:41px; 
	background:url(ima/runing2.png) no-repeat scroll 0 0 transparent !important;
}

.biking:hover{
	width:142px;
	height:41px; 
	background:url(ima/biking2.png) no-repeat scroll 0 0 transparent !important;
}
.extreme:hover{
	width:155px;
	height:41px; 
	background:url(ima/extreme2.png) no-repeat scroll 0 0 transparent !important;
}
#menu a:link
{
	text-decoration:none;
	/*color:#FFF !important;*/
 	
	
}
#maincontent
{
	background:url(ima/background_sports.jpg) no-repeat;
	 width:790px;
	 height:975px; 
	 margin:0 auto;
}
.mainHolder{
	width:790px;
	margin:0 auto;
	 float: left;
}
.holderInfo
{
	width:45%;
	margin:1%;
	padding:5px;
	float:left;
}
.clear{
	clear:both;

}
.listItems{
	 margin: 110px auto;
    width: 80%;
}

/******************************/
</style>
<!-------------------------------------------------------------->

<!--------------------------------------------------------------->
</head>

<body >
<div  id="maincontent">
<div id="menu">
				<a href="vistaf.php"><div class="runing"></div></a>
				<a href="vista2f.php"><div class="biking"></div></a>
				<a href="vista3f.php"><div class="extreme"></div></a>			
</div>
<div class="mainHolder">

    <div class="holderInfo">
        <div class="titulo1">
            Proximas Carreras
        </div>
        <div class="texto">
        <?php echo $re[0]["texto1"] ?>
        </div>
        <div class="fecha">
        <?php echo $re[0]["fecha1"] ?>
        </div>
        <div class="texto">
        <?php echo $re[0]["texto2"] ?>
        </div>
        <div class="fecha">
        <?php echo $re[0]["fecha2"] ?>
        </div>
        <div class="texto">
        <?php echo $re[0]["texto3"] ?>
        </div>
        <div class="fecha">
        <?php echo $re[0]["fecha3"] ?>
        </div>
        <div class="texto">
        <?php echo $re[0]["texto4"] ?>
        </div>
        <div class="fecha">
        <?php echo $re[0]["fecha4"] ?>
        </div>
        <div class="clear"></div>
        <div class="imagen2">
        <!--<img src="ima/carreradestacadarunning.jpg"width="250px" height="192px" />-->
        
        <?php echo '<img src="upload/'.$re[0]["imagen2"].'" width="250px" height="192px" />';?>
        </div>
        
    </div>
    <div class="holderInfo">
        <div class="titulo2">
        Producto Recomendado
        </div>
        <div class="imagen1">
        
        <?php echo '<img src="upload/'.$re[0]["imagen1"].'" width="222px" height="180px" />';?>
        <!--<img src="ima/carreradestacadabiking.jpg"width="222px" height="180px" />-->
        </div>
        
        
    </div>
 </div>
<div class="clear"></div>
<div class="listItems">
    <div class="titulo3">
    Tips de entrenamiento
    </div>
    <div class="imagen3">
    <?php echo '<img src="upload/'.$re[0]["imagen3"].'" width="700px" height="255px" />';?>
    </div>
</div>
<div class="regresar">
<input type="button" onclick="history.back()" value="REGRESAR" />

</div>
</div>
</body>
</html>