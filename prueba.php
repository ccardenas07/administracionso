<?php
/*funcion que llama a la clase donde se ingresa los metodos de insercion*/
require_once'conexion/Trabajo.php';
require_once'conexion/Coneccion.php';
/*condicional para guardadr el dato*/
/*	if(isset($_POST) and $_POST["grabar"]=="si")
{
		
	$tra=new Trabajo();
	$tra->insertcursper();
	exit; 
	
}*/
$datr=new Trabajo();
$dt=$datr->getdatospeid($_GET["idper"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<link href="css/estilo2.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="cabecera">
<h1 style="color: black">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1280" height="95">
    <param name="movie" value="img/moodle.swf">
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="8.0.35.0">
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="img/moodle.swf" width="1280" height="95">
      <!--<![endif]-->
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</h1>
</div>
<div id="cuerpop" style="left: 125px !important;
border: 1px solid;
height: 5922px;
padding: 46px 0px 0px 88px;
border-radius: 10px; font-size:17px !important;">
<form name="form" action="pruebaeva.php" method="post">
<div class="datosper">
     <div class="espapre">
 		<label for="puesto" style="font-size:17px !important;">1.¿Me enfado por muchas cosas?</label>
        si<input type="radio" id="si" name="op1" value="0" class="opp" />
        no<input type="radio" id="no" name="op1" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto" style="font-size:17px !important;">2.¿Estoy pasando por unos momentos <br /> malos tensos o de inquietud?</label>
        si<input type="radio" id="si" name="op2" value="0" class="opp" />
        no<input type="radio" id="no" name="op2" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">3.¿Me esfuerzo por demostrar que tengo raz&oacute;n <br /> aunque para ello tenga que luchar?</label>
        si<input type="radio" id="si" name="op3" value="0" class="opp" />
        no<input type="radio" id="no" name="op3" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">4.¿Creo que muchas de las cosas que me <br />suceden se deben a la mala suerte?</label>
        si<input type="radio" id="si" name="op4" value="0" class="opp" />
        no<input type="radio" id="no" name="op4" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">5.¿Me gusta ir a reuniones y fiestas donde hay mucha gente?</label>
        si<input type="radio" id="si" name="op5" value="1" class="opp" />
        no<input type="radio" id="no" name="op5" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">6.¿Tengo tacto y diplomacia al decir las cosas?</label>
        si<input type="radio" id="si" name="op6" value="1" class="opp" />
        no<input type="radio" id="no" name="op6" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">7.¿Busco el aplauso y la alabanza de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op7" value="0" class="opp" />
        no<input type="radio" id="no" name="op7" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">8.¿Cuando me enfado suelo hablar alto?</label>
        si<input type="radio" id="si" name="op8" value="0" class="opp" />
        no<input type="radio" id="no" name="op8" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">9.¿Sin duda soy una persona formal y responsable?</label>
        si<input type="radio" id="si" name="op9" value="1" class="opp" />
        no<input type="radio" id="no" name="op9" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">10.¿Mi escala de valores e intereses cambia f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op10" value="0" class="opp" />
        no<input type="radio" id="no" name="op10" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">11.¿Por lo general dudo bastante antes de hacer las cosas?</label>
        si<input type="radio" id="si" name="op11" value="0" class="opp" />
        no<input type="radio" id="no" name="op11" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">12.¿F&aacute;cilmente abandono las obligaciones?</label>
        si<input type="radio" id="si" name="op12" value="0" class="opp" />
        no<input type="radio" id="no" name="op12" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">13.¿Me encanta comunicar mi tristezas y alegr&iacute;as a los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op13" value="0" class="opp" />
        no<input type="radio" id="no" name="op13" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">14.¿Soy una persona bastante estricta con las normas?</label>
        si<input type="radio" id="si" name="op14" value="1" class="opp" />
        no<input type="radio" id="no" name="op14" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">15.¿Soy una persona a la que se puede otorgar confianza?</label>
        si<input type="radio" id="si" name="op15" value="1" class="opp" />
        no<input type="radio" id="no" name="op15" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">16.¿Evito las discusiones que no llevan a nada?</label>
        si<input type="radio" id="si" name="op16" value="1" class="opp" />
        no<input type="radio" id="no" name="op16" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">17.¿Procuro dar buena imagen de m&iacute;?</label>
        si<input type="radio" id="si" name="op17" value="0" class="opp" />
        no<input type="radio" id="no" name="op17" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">18.¿Cambio bastante de estado de &aacute;nimo?</label>
        si<input type="radio" id="si" name="op18" value="0" class="opp" />
        no<input type="radio" id="no" name="op18" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">19.¿Actualmente vivo un poco estresado?</label>
        si<input type="radio" id="si" name="op19" value="0" class="opp" />
        no<input type="radio" id="no" name="op19" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">20.¿Soy una persona muy trabajadora y eficiente?</label>
        si<input type="radio" id="si" name="op20" value="1" class="opp" />
        no<input type="radio" id="no" name="op20" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">21.¿El &eacute;xito es mi meta y estilo de vida?</label>
        si<input type="radio" id="si" name="op21" value="1" class="opp" />
        no<input type="radio" id="no" name="op21" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">22.¿Soy franco y abierto con los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op22" value="1" class="opp" />
          no<input type="radio" id="no" name="op22" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">23.¿Soy una persona reservada o retra&iacute;da?</label>
        si<input type="radio" id="si" name="op23" value="0" class="opp" />
        no<input type="radio" id="no" name="op23" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">24.¿Se puede decir que mi comportamiento se ajusta <br />bastante bien a las normas convencionales?</label>
        si<input type="radio" id="si" name="op24" value="1" class="opp" />
        no<input type="radio" id="no" name="op24" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">25.¿Con frecuencia alardeo de mis &eacute;xitos?</label>
        si<input type="radio" id="si" name="op25" value="0" class="opp" />
        no<input type="radio" id="no" name="op25" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">26.¿Me disgusto f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op26" value="0" class="opp" />
        no<input type="radio" id="no" name="op26" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">27.¿Me ruborizo con cierta facilidad?</label>
        si<input type="radio" id="si" name="op27" value="0" class="opp" />
        no<input type="radio" id="no" name="op27" value="1" class="opp" />
      </div>
            <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">28.¿Mis amigos me hacen cambiar de opini&oacute;n f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op28" value="0" class="opp" />
        no<input type="radio" id="no" name="op28" value="1" class="opp" />
      </div>
            <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">29.¿A veces me inquieta asistir a reuniones sociales o conocer gente nueva?</label>
        si<input type="radio" id="si" name="op29" value="0" class="opp" />
        no<input type="radio" id="no" name="op29" value="1" class="opp" />
      </div>
            <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">30.¿Cuando tengo problemas prefiero tener a alguien a mi lado?</label>
        si<input type="radio" id="si" name="op30" value="1" class="opp" />
        no<input type="radio" id="no" name="op30" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">31.¿Me gusta dirigir y hacer que las cosas funcionen?</label>
        si<input type="radio" id="si" name="op31" value="1" class="opp" />
        no<input type="radio" id="no" name="op31" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">32.¿Me gusta organizar bien mi trabajo?</label>
        si<input type="radio" id="si" name="op32" value="1" class="opp" />
        no<input type="radio" id="no" name="op32" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">33.¿Me encanta relacionarme con la gente?</label>
        si<input type="radio" id="si" name="op33" value="1" class="opp" />
        no<input type="radio" id="no" name="op33" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">34.¿Suelo criticar a las personas informales o incumplidoras ?</label>
        si<input type="radio" id="si" name="op34" value="0" class="opp" />
        no<input type="radio" id="no" name="op34" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">35.¿Respetar las costumbres o formas sociales <br />forma parte esencial de mis valores?</label>
        si<input type="radio" id="si" name="op35" value="1" class="opp" />
        no<input type="radio" id="no" name="op35" value="0" class="opp" />
      </div>
<div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">36.¿Empiezo cosas que luego no termino?</label>
        si<input type="radio" id="si" name="op36" value="0" class="opp" />
        no<input type="radio" id="no" name="op36" value="1" class="opp" />
      </div>
<div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">37.¿Me gusta quedar por encima de los dem&aacute;s, en las discusiones de grupo?</label>
        si<input type="radio" id="si" name="op37" value="0" class="opp" />
        no<input type="radio" id="no" name="op37" value="1" class="opp" />
      </div>
<div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">38.¿Me siento asustado cuando tengo que hablar en p&uacute;blico?</label>
        si<input type="radio" id="si" name="op38" value="0" class="opp" />
        no<input type="radio" id="no" name="op38" value="1" class="opp" />
      </div>
<div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">39.¿Tengo una alta opini&oacute;n de m&iacute; mismo?</label>
        si<input type="radio" id="si" name="op39" value="1" class="opp" />
        no<input type="radio" id="no" name="op39" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">40.¿Generalmente no necesito consejo de nadie?</label>
        si<input type="radio" id="si" name="op40" value="0" class="opp" />
        no<input type="radio" id="no" name="op40" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">41.¿En general manifiesto un comportamiento distante a la gente?</label>
        si<input type="radio" id="si" name="op41" value="0" class="opp" />
        no<input type="radio" id="no" name="op41" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">42.¿Me suele suceder que, cuando tomo una desici&oacute;n ya se me ha <br />pasado la oportunidad?</label>
        si<input type="radio" id="si" name="op42" value="0" class="opp" />
        no<input type="radio" id="no" name="op42" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">43.¿Cuando alguien se incorpora a un grupo de gente, lo acepto <br /> y entablo conversaci&oacute;n con &eacute;l?</label>
        si<input type="radio" id="si" name="op43" value="1" class="opp" />
        no<input type="radio" id="no" name="op43" value="0" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">44.¿Si me hacen alguna mala jugada, me la pagan?</label>
        si<input type="radio" id="si" name="op44" value="0" class="opp" />
        no<input type="radio" id="no" name="op44" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">45.¿Generalmente cumplo lo que he prometido hacer?</label>
        si<input type="radio" id="si" name="op45" value="1" class="opp" />
        no<input type="radio" id="no" name="op45" value="0" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">46.¿Aprovecho cualquier ocasi&oacute;n para llamar la atenci&oacute;n <br /> de personas del otro sexo?</label>
        si<input type="radio" id="si" name="op46" value="0" class="opp" />
        no<input type="radio" id="no" name="op46" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">47.¿A veces expreso mis emociones de forma explosiva?</label>
        si<input type="radio" id="si" name="op47" value="0" class="opp" />
        no<input type="radio" id="no" name="op47" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">48.¿Me considero una persona un tanto nerviosa?</label>
        si<input type="radio" id="si" name="op48" value="0" class="opp" />
        no<input type="radio" id="no" name="op48" value="1" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">49.¿Tengo una gran capacidad de trabajo?</label>
        si<input type="radio" id="si" name="op49" value="1" class="opp" />
        no<input type="radio" id="no" name="op49" value="0" class="opp" />
      </div>
       <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">50.¿Conf&iacute;o bastante en mis posibilidades?</label>
        si<input type="radio" id="si" name="op50" value="1" class="opp" />
        no<input type="radio" id="no" name="op50" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">51.¿Procuro no tener en cuenta los problemas de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op51" value="1" class="opp" />
        no<input type="radio" id="no" name="op51" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">52.¿A veces soy autoritario y dominante?</label>
        si<input type="radio" id="si" name="op52" value="0" class="opp" />
        no<input type="radio" id="no" name="op52" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">53.¿Creo que soy la persona adecuada para ser l&iacute;der?</label>
        si<input type="radio" id="si" name="op53" value="1" class="opp" />
        no<input type="radio" id="no" name="op53" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">54.¿Si me fastidian, suelo reponder agresivamente?</label>
        si<input type="radio" id="si" name="op54" value="0" class="opp" />
        no<input type="radio" id="no" name="op54" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">55.¿Procuro no decir cosas que ofendan a los dem&aacute;s cuando <br />veo que pueden perjudicarme?</label>
        si<input type="radio" id="si" name="op55" value="1" class="opp" />
        no<input type="radio" id="no" name="op55" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">56.¿Intento demostrar que s&eacute; o entiendo de todo?</label>
        si<input type="radio" id="si" name="op56" value="0" class="opp" />
        no<input type="radio" id="no" name="op56" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">57.¿Manifiesto, a menudo, mi mal humor?</label>
        si<input type="radio" id="si" name="op57" value="0" class="opp" />
        no<input type="radio" id="no" name="op57" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">58.¿Me pongo muy nervioso cuando alg&uacute;n imprevisto interrumpe <br /> mi vida o me dan malas noticias?</label>
        si<input type="radio" id="si" name="op58" value="0" class="opp" />
        no<input type="radio" id="no" name="op58" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">59.¿A veces suelo hacer el rid&iacute;culo?</label>
        si<input type="radio" id="si" name="op59" value="0" class="opp" />
        no<input type="radio" id="no" name="op59" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">60.¿Cuando me hago cargo de algo, soy responsable y eficaz?</label>
        si<input type="radio" id="si" name="op60" value="1" class="opp" />
        no<input type="radio" id="no" name="op60" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">61.¿Me encanta mandar?</label>
        si<input type="radio" id="si" name="op61" value="0" class="opp" />
        no<input type="radio" id="no" name="op61" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">62.¿Me cuesta entablar conversaci&oacute;n con la gente?</label>
        si<input type="radio" id="si" name="op62" value="0" class="opp" />
        no<input type="radio" id="no" name="op62" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">63.¿Cuando alguien me inpide o&iacute;r o ver una pel&iacute;cula o espect&aacute;culo,<br /> suelo llamarle la atenci&oacute;n e reprenderle ?</label>
        si<input type="radio" id="si" name="op63" value="1" class="opp" />
        no<input type="radio" id="no" name="op63" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">64.¿A menudo, mis padres no estar&iacute;an de acuerdo con mi forma <br /> de ser y de comportarme?</label>
        si<input type="radio" id="si" name="op64" value="0" class="opp" />
        no<input type="radio" id="no" name="op64" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">65.¿Soy cumplidor de mi deber?</label>
        si<input type="radio" id="si" name="op65" value="1" class="opp" />
        no<input type="radio" id="no" name="op65" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">66.¿Cuando me propongo conseguir algo importante para mi vida(P. ejm. un trabajo),<br /> pongo todos los medios adecuados para alcanzarlo?</label>
        si<input type="radio" id="si" name="op66" value="1" class="opp" />
        no<input type="radio" id="no" name="op66" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">67.¿Creo que tengo mucha influencia sobre los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op67" value="0" class="opp" />
        no<input type="radio" id="no" name="op67" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">68.¿Me siento herido f&aacute;cilmente en mis sentimientos?</label>
        si<input type="radio" id="si" name="op68" value="0" class="opp" />
        no<input type="radio" id="no" name="op68" value="1" class="opp" />
      </div>
  <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">69.¿En general manifiesto impaciencia por terminar las tareas o trabajos?</label>
        si<input type="radio" id="si" name="op69" value="0" class="opp" />
        no<input type="radio" id="no" name="op69" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">70.¿Me hundo con facilidad ante las adversidades?</label>
        si<input type="radio" id="si" name="op70" value="0" class="opp" />
        no<input type="radio" id="no" name="op70" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">71.¿En asuntos serios, prefiero llevar yo solo la responsabilidad?</label>
        si<input type="radio" id="si" name="op71" value="0" class="opp" />
        no<input type="radio" id="no" name="op71" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">72.¿En general s&eacute; llevar a la gente por donde a m&iacute; me interesa?</label>
        si<input type="radio" id="si" name="op72" value="0" class="opp" />
        no<input type="radio" id="no" name="op72" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">73.¿Cuando doy mi palabra es como si hubiera escrito?</label>
        si<input type="radio" id="si" name="op73" value="1" class="opp" />
        no<input type="radio" id="no" name="op73" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">74.¿Me gusta participar en las conversaciones de grupos?</label>
        si<input type="radio" id="si" name="op74" value="1" class="opp" />
        no<input type="radio" id="no" name="op74" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">75.¿Para m&iacute; son muy importantes mis obligaciones con el trabajo <br />o con las personas?</label>
        si<input type="radio" id="si" name="op75" value="1" class="opp" />
        no<input type="radio" id="no" name="op75" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">76.¿Sin duda, mis superiores pueden depositar en m&iacute; su confianza?</label>
        si<input type="radio" id="si" name="op76" value="1" class="opp" />
        no<input type="radio" id="no" name="op76" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">77.¿Procuro ser el mejor en casi todo?</label>
        si<input type="radio" id="si" name="op77" value="1" class="opp" />
        no<input type="radio" id="no" name="op77" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">78.¿Cuando quedo a una hora, suelo llegar puntual?</label>
        si<input type="radio" id="si" name="op78" value="1" class="opp" />
        no<input type="radio" id="no" name="op78" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">79.¿Seg&uacute;n me vayan las cosas, as&iacute; va mi estado de &aacute;nimo?</label>
        si<input type="radio" id="si" name="op79" value="0" class="opp" />
        no<input type="radio" id="no" name="op79" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">80.¿A veces tengo pensamientos reiterativos que me perturban?</label>
        si<input type="radio" id="si" name="op80" value="0" class="opp" />
        no<input type="radio" id="no" name="op80" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">81.¿ Cuando me ofrecen la oportunidad, demuestro lo que valgo?</label>
        si<input type="radio" id="si" name="op81" value="1" class="opp" />
        no<input type="radio" id="no" name="op81" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">82.¿Hago valer mis derechos ante los superiores o autoridades?</label>
        si<input type="radio" id="si" name="op82" value="1" class="opp" />
        no<input type="radio" id="no" name="op82" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">83.¿Me gusta planificar las cosas con antelaci&oacute;n?</label>
        si<input type="radio" id="si" name="op83" value="1" class="opp" />
        no<input type="radio" id="no" name="op83" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">84.¿En las discusiones s&eacute; controlar mis palabras?</label>
        si<input type="radio" id="si" name="op84" value="1" class="opp" />
        no<input type="radio" id="no" name="op84" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">85.¿Me gusta m&aacute;s trabajar en equipo que solo?</label>
        si<input type="radio" id="si" name="op85" value="1" class="opp" />
        no<input type="radio" id="no" name="op85" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">86.¿Cuando alguna persona me planta cara, le pongo <bR />los puntos sobre las <<&iacute;es>>?</label>
        si<input type="radio" id="si" name="op86" value="0" class="opp" />
        no<input type="radio" id="no" name="op86" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">87.¿La educaci&oacute;n c&iacute;vica y las buenas maneras son para otros?</label>
        si<input type="radio" id="si" name="op87" value="0" class="opp" />
        no<input type="radio" id="no" name="op87" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">88.¿Rechazo a las personas cre&iacute;das o mandonas?</label>
        si<input type="radio" id="si" name="op88" value="0" class="opp" />
        no<input type="radio" id="no" name="op88" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">89.¿Tiendo a reducir las amistades a un grupo muy peque&ntilde;o?</label>
        si<input type="radio" id="si" name="op89" value="0" class="opp" />
        no<input type="radio" id="no" name="op89" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">90.¿ Procuro quedar bien a toda costa con los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op90" value="0" class="opp" />
        no<input type="radio" id="no" name="op90" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">91.¿A veces me siento turbado por sentimientos de inferioridad?</label>
        si<input type="radio" id="si" name="op91" value="0" class="opp" />
        no<input type="radio" id="no" name="op91" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">92.¿A veces tengo dificultades para concentrarme en mis tareas?</label>
        si<input type="radio" id="si" name="op92" value="0" class="opp" />
        no<input type="radio" id="no" name="op92" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">93.¿Los hechos me demuestran que soy competente en casi todo?</label>
        si<input type="radio" id="si" name="op93" value="1" class="opp" />
        no<input type="radio" id="no" name="op93" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">94.¿Generalmente hago las cosas a mi manera?</label>
        si<input type="radio" id="si" name="op94" value="0" class="opp" />
        no<input type="radio" id="no" name="op94" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">95.¿No me gusta que me impongan normas y reglas estrictas <br />en mi trabajo y forma de hacer las cosas?</label>
        si<input type="radio" id="si" name="op95" value="0" class="opp" />
        no<input type="radio" id="no" name="op95" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">96.¿Intento decir casi siempre la &uacute;ltima palabra?</label>
        si<input type="radio" id="si" name="op96" value="0" class="opp" />
        no<input type="radio" id="no" name="op96" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">97.¿Soy prudente y cauteloso cuando me tengo que entrevistar con alguien?</label>
        si<input type="radio" id="si" name="op97" value="1" class="opp" />
        no<input type="radio" id="no" name="op97" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">98.¿Me cuesta mucho hablar con una persona de otro rango o nivel?</label>
        si<input type="radio" id="si" name="op98" value="0" class="opp" />
        no<input type="radio" id="no" name="op98" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">99.¿Si quedo con una persona y me da plant&oacute;n, suelo criticarla duramente?</label>
        si<input type="radio" id="si" name="op99" value="0" class="opp" />
        no<input type="radio" id="no" name="op99" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">100.¿A veces suelo ir contra las reglas y hacer cosas que no debiera?</label>
        si<input type="radio" id="si" name="op100" value="0" class="opp" />
        no<input type="radio" id="no" name="op100" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">101.¿Me gusta imponer mis opiniones a los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op101" value="0" class="opp" />
        no<input type="radio" id="no" name="op101" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">102.¿Antes de tomar una decisi&oacute;n importante analizo las distintas<br /> alternativas posibles?</label>
        si<input type="radio" id="si" name="op102" value="1" class="opp" />
        no<input type="radio" id="no" name="op102" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">103.¿Estoy preocupado e inquieto cuando espero resultados <br /> relativamente importantes?</label>
        si<input type="radio" id="si" name="op103" value="0" class="opp" />
        no<input type="radio" id="no" name="op103" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">104.¿Me desanimo f&aacute;cilmente ante los fracasos?</label>
        si<input type="radio" id="si" name="op104" value="0" class="opp" />
        no<input type="radio" id="no" name="op104" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">105.¿A veces me siento culpable de algo que no he hecho?</label>
        si<input type="radio" id="si" name="op105" value="0" class="opp" />
        no<input type="radio" id="no" name="op105" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">106.¿Se puede decir que, en general, hago bien las cosas?</label>
        si<input type="radio" id="si" name="op106" value="1" class="opp" />
        no<input type="radio" id="no" name="op106" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">107.¿Mis problemas prefiero solucionarlos yo?</label>
        si<input type="radio" id="si" name="op107" value="1" class="opp" />
        no<input type="radio" id="no" name="op107" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">108.¿Hay alguna persona en mi entorno que influye mucho en mi vida?</label>
        si<input type="radio" id="si" name="op108" value="1" class="opp" />
        no<input type="radio" id="no" name="op108" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">109.¿Cuando alguien est&aacute; diciendo tonter&iacute;as, suelo interrumpirle y le <br />hago callar?</label>
        si<input type="radio" id="si" name="op109" value="0" class="opp" />
        no<input type="radio" id="no" name="op109" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">110.¿No hago juicios de valor sobre la gente hasta que conozco<br /> los hechos?</label>
        si<input type="radio" id="si" name="op110" value="1" class="opp" />
        no<input type="radio" id="no" name="op110" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">111.¿Cuando una persona me ha hecho algo, no le hablo o evito <br />encontrarme con ella?</label>
        si<input type="radio" id="si" name="op111" value="0" class="opp" />
        no<input type="radio" id="no" name="op111" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">112.¿Me enfado mucho cuando estoy jugando y pierdo?</label>
        si<input type="radio" id="si" name="op112" value="0" class="opp" />
        no<input type="radio" id="no" name="op112" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">113.¿No permito a otras personas que se entrometan en mi vida?</label>
        si<input type="radio" id="si" name="op113" value="0" class="opp" />
        no<input type="radio" id="no" name="op113" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">114.¿A menudo critico el modo de actuar y los errores de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op114" value="0" class="opp" />
        no<input type="radio" id="no" name="op114" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">115.¿Si alguien no me valora de forma reiterada, me mantengo en mi sitio <br /> y le demuestro lo que valgo?</label>
        si<input type="radio" id="si" name="op115" value="1" class="opp" />
        no<input type="radio" id="no" name="op115" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">116.¿Exagero mis &eacute;xitos y fracasos para lograr la atenci&oacute;n de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op116" value="0" class="opp" />
        no<input type="radio" id="no" name="op116" value="1" class="opp" />
      </div>
   
    </div>
   <div class="datosper">  
    
    <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">117.¿Me encanta estar solo?</label>
        si<input type="radio" id="si" name="op117" value="0" class="opp" />
        no<input type="radio" id="no" name="op117" value="1" class="opp" />
      </div>  
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">118.¿Me preocupo demasiado por mi aspecto f&iacute;sico?</label>
        si<input type="radio" id="si" name="op118" value="0" class="opp" />
        no<input type="radio" id="no" name="op118" value="1" class="opp" />
      </div>
    
     
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">119.¿Desear&iacute;a tener una personalidad m&aacute;s estable o ajustada?</label>
        si<input type="radio" id="si" name="op119" value="0" class="opp" />
        no<input type="radio" id="no" name="op119" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">120.¿Muchas veces tengo dudas de si lo que hago lo hago bien?</label>
        si<input type="radio" id="si" name="op120" value="0" class="opp" />
        no<input type="radio" id="no" name="op120" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">121.¿Cuando trabajo en grupo, prefiero hacerme cargo de la <br /> organizaci&oacute;n y desarrollo de tareas?</label>
        si<input type="radio" id="si" name="op121" value="1" class="opp" />
        no<input type="radio" id="no" name="op121" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">122.¿Los intereses de los dem&aacute;s no cuentan para m&iacute;<br /> cuando quiero conseguir algo?</label>
        si<input type="radio" id="si" name="op122" value="0" class="opp" />
        no<input type="radio" id="no" name="op122" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">123.¿Suelo meter la pata con cierta frecuencia?</label>
        si<input type="radio" id="si" name="op123" value="0" class="opp" />
        no<input type="radio" id="no" name="op123" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">124.¿Me gusta organizar y participar en actividades sociales?</label>
        si<input type="radio" id="si" name="op124" value="1" class="opp" />
        no<input type="radio" id="no" name="op124" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">125.¿Me fastidia que me interrumpan cuando estoy hablando, <br />trabajando,estudiando,leyendo o viendo la televisi&oacute;n?</label>
        si<input type="radio" id="si" name="op125" value="0" class="opp" />
        no<input type="radio" id="no" name="op125" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">126.¿Me gusta influir en las decisiones de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op126" value="0" class="opp" />
        no<input type="radio" id="no" name="op126" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">127.¿No hago nada importante sin tener en cuenta sus consecuencias?</label>
        si<input type="radio" id="si" name="op127" value="0" class="opp" />
        no<input type="radio" id="no" name="op127" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">128.¿Si una persona me humilla en p&uacute;blico hago lo mismo?</label>
        si<input type="radio" id="si" name="op128" value="0" class="opp" />
        no<input type="radio" id="no" name="op128" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">129.¿Soy amable con ciertas personas a las que no aprecio?</label>
        si<input type="radio" id="si" name="op129" value="0" class="opp" />
        no<input type="radio" id="no" name="op129" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">130.¿A veces soy una persona impulsiva?</label>
        si<input type="radio" id="si" name="op130" value="0" class="opp" />
        no<input type="radio" id="no" name="op130" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">131.¿A veces no me siento bien?</label>
        si<input type="radio" id="si" name="op131" value="0" class="opp" />
        no<input type="radio" id="no" name="op131" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">132.¿Me siento desanimado cuando las opiniones de los <br /> dem&aacute;s difieren de las m&iacute;as?</label>
        si<input type="radio" id="si" name="op132" value="0" class="opp" />
        no<input type="radio" id="no" name="op132" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">133.¿No permito que los dem&aacute;s me impongan sus criterios?</label>
        si<input type="radio" id="si" name="op133" value="1" class="opp" />
        no<input type="radio" id="no" name="op133" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">134.¿Me importan mucho lo que los dem&aacute;s piensen de m&iacute;?</label>
        si<input type="radio" id="si" name="op134" value="0" class="opp" />
        no<input type="radio" id="no" name="op134" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">135.¿En las discusiones de grupo suelo llevar la iniciativa?</label>
        si<input type="radio" id="si" name="op135" value="1" class="opp" />
        no<input type="radio" id="no" name="op135" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">136.¿Abandono con facilidad las tareas cuando me encuentro con <br /> ciertos problemas?</label>
        si<input type="radio" id="si" name="op136" value="0" class="opp" />
        no<input type="radio" id="no" name="op136" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">137.¿Es muy importante para m&iacute; tener una vida social y bastantes amigos?</label>
        si<input type="radio" id="si" name="op137" value="0" class="opp" />
        no<input type="radio" id="no" name="op137" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">138.¿Cuando tengo raz&oacute;n, soy bastante duro e inflexible?</label>
        si<input type="radio" id="si" name="op138" value="0" class="opp" />
        no<input type="radio" id="no" name="op138" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">139.¿No me gusta que me digan lo que tengo que hacer o c&oacute;mo hacerlo?</label>
        si<input type="radio" id="si" name="op139" value="0" class="opp" />
        no<input type="radio" id="no" name="op139" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">140.¿Mi modo de hacer las cosas suele ser diferente al de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op140" value="1" class="opp" />
        no<input type="radio" id="no" name="op140" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">141.¿Tiendo a desconfiar de la gente?</label>
        si<input type="radio" id="si" name="op141" value="0" class="opp" />
        no<input type="radio" id="no" name="op141" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">142.¿Me gusta que los dem&aacute;s me digan que hago bien las cosas?</label>
        si<input type="radio" id="si" name="op142" value="0" class="opp" />
        no<input type="radio" id="no" name="op142" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">143.¿Cuando alguien me observa me inquieta?</label>
        si<input type="radio" id="si" name="op143" value="0" class="opp" />
        no<input type="radio" id="no" name="op143" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">144.¿Se puede decir que soy una persona tranquila,serena y sosegada?</label>
        si<input type="radio" id="si" name="op144" value="1" class="opp" />
        no<input type="radio" id="no" name="op144" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">145.¿Generalmente busco el reconocimiento de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op145" value="0" class="opp" />
        no<input type="radio" id="no" name="op145" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">146.¿Me cuesta bastante comenzar una conversaci&oacute;n con desconocidos?</label>
        si<input type="radio" id="si" name="op146" value="0" class="opp" />
        no<input type="radio" id="no" name="op146" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">147.¿En una relaci&oacute;n de pareja dejo que la otra persona tome la iniciativa?</label>
        si<input type="radio" id="si" name="op147" value="0" class="opp" />
        no<input type="radio" id="no" name="op147" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">148.¿Cuando las dificultades se me amontonan, me desconcierto y no se qu&eacute; hacer?</label>
        si<input type="radio" id="si" name="op148" value="0" class="opp" />
        no<input type="radio" id="no" name="op148" value="1" class="opp" />
      </div>

      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">149.¿Soy una persona de trato f&aacute;cil y agradable?</label>
        si<input type="radio" id="si" name="op149" value="1" class="opp" />
        no<input type="radio" id="no" name="op149" value="0" class="opp" />
      </div>
            <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">150.¿Cuando alguien se pone delante de m&iacute; en una cola, suelo llamarle la atenci&oacute;n?</label>
        si<input type="radio" id="si" name="op150" value="1" class="opp" />
        no<input type="radio" id="no" name="op150" value="0" class="opp" />
      </div>
            <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">151.¿Estoy muy unido a mi familia?</label>
        si<input type="radio" id="si" name="op151" value="1" class="opp" />
        no<input type="radio" id="no" name="op151" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">152.¿Se puede decir que casi siempre consigo lo que pretendo?</label>
        si<input type="radio" id="si" name="op152" value="1" class="opp" />
        no<input type="radio" id="no" name="op152" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">153.¿En fiestas y reuniones sociales me gusta ser el centro de atenci&oacute;n?</label>
        si<input type="radio" id="si" name="op153" value="0" class="opp" />
        no<input type="radio" id="no" name="op153" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">154.¿Me preocupo bastante por todo?</label>
        si<input type="radio" id="si" name="op154" value="0" class="opp" />
        no<input type="radio" id="no" name="op154" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">155.¿Cuando tengo oportunidad, hago ostentaci&oacute;n de mis capacidades y val&iacute;a?</label>
        si<input type="radio" id="si" name="op155" value="0" class="opp" />
        no<input type="radio" id="no" name="op155" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">156.¿Muchas veces me falta confianza y seguridad en m&iacute; mismo?</label>
        si<input type="radio" id="si" name="op156" value="0" class="opp" />
        no<input type="radio" id="no" name="op156" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">157.¿Los &eacute;xitos de los dem&aacute;s me hacen sentirme fracasado?</label>
        si<input type="radio" id="si" name="op157" value="0" class="opp" />
        no<input type="radio" id="no" name="op157" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">158.¿Puedo presumir de que, cuando tomo una decisi&oacute;n, <br />nada ni nadie puede hacerme cambiar de opini&oacute;n ?</label>
        si<input type="radio" id="si" name="op158" value="0" class="opp" />
        no<input type="radio" id="no" name="op158" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">159.¿A veces me rebelo contra las normas y reglamentos de ciertos<br /> establecimientos y organismos?</label>
        si<input type="radio" id="si" name="op159" value="0" class="opp" />
        no<input type="radio" id="no" name="op159" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">160.¿A las personas que deb&iacute;an devolverme algo en un determinado<br /> plazo y no lo hacen, les doy su correctivo?</label>
        si<input type="radio" id="si" name="op160" value="0" class="opp" />
        no<input type="radio" id="no" name="op160" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">161.¿Me encanta estar rodeado de gente?</label>
        si<input type="radio" id="si" name="op161" value="1" class="opp" />
        no<input type="radio" id="no" name="op161" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">162.¿Cuando me enfado, me entran ganas de destrozar cosas?</label>
        si<input type="radio" id="si" name="op162" value="0" class="opp" />
        no<input type="radio" id="no" name="op162" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">163.¿Si me comprometo a hacer algo importante lo hago?</label>
        si<input type="radio" id="si" name="op163" value="1" class="opp" />
        no<input type="radio" id="no" name="op163" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">164.¿Tiendo a hacer burlas y cr&iacute;ticas de gente que menosprecio?</label>
        si<input type="radio" id="si" name="op164" value="0" class="opp" />
        no<input type="radio" id="no" name="op164" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">165.¿Le doy una soluci&oacute;n adecuada a la mayor&iacute;a de los <br />problemas que se me presentan?</label>
        si<input type="radio" id="si" name="op165" value="1" class="opp" />
        no<input type="radio" id="no" name="op165" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">166.¿No tengo en cuenta las costumbres o tradiciones familiares?</label>
        si<input type="radio" id="si" name="op166" value="0" class="opp" />
        no<input type="radio" id="no" name="op166" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">167.¿Me emociono f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op167" value="0" class="opp" />
        no<input type="radio" id="no" name="op167" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">168.¿Admiro a quienes saben aprovecharse de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op168" value="0" class="opp" />
        no<input type="radio" id="no" name="op168" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">169.¿A veces tengo la impresi&oacute;n de que soy un in&uacute;til?</label>
        si<input type="radio" id="si" name="op169" value="0" class="opp" />
        no<input type="radio" id="no" name="op169" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">170.¿A veces me preocupo mucho por posibles desgracias futuras?</label>
        si<input type="radio" id="si" name="op170" value="0" class="opp" />
        no<input type="radio" id="no" name="op170" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">171.¿Mi comportamiento no es tan apropiado en familia como en p&uacute;blico?</label>
        si<input type="radio" id="si" name="op171" value="0" class="opp" />
        no<input type="radio" id="no" name="op171" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">172.¿En casa, hago lo posible por salirme con la m&iacute;a?</label>
        si<input type="radio" id="si" name="op172" value="0" class="opp" />
        no<input type="radio" id="no" name="op172" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">173.¿Cuando me conf&iacute;an secretos, s&eacute; guardarlos bien?</label>
        si<input type="radio" id="si" name="op173" value="1" class="opp" />
        no<input type="radio" id="no" name="op173" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">174.¿Si alguien me ofende, que se atenga a las consecuencias?</label>
        si<input type="radio" id="si" name="op174" value="0" class="opp" />
        no<input type="radio" id="no" name="op174" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">175.¿Conf&iacute;o m&aacute;s en la suerte que en el esfuerzo propio?</label>
        si<input type="radio" id="si" name="op175" value="0" class="opp" />
        no<input type="radio" id="no" name="op175" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">176.¿lo que puedo hacer hoy, no suelo dejarlo para mañana?</label>
        si<input type="radio" id="si" name="op176" value="1" class="opp" />
        no<input type="radio" id="no" name="op176" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">177.¿Los dem&aacute;s me consideran una persona que sabe imponerse?</label>
        si<input type="radio" id="si" name="op177" value="0" class="opp" />
        no<input type="radio" id="no" name="op177" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">178.¿Si uno se equivoca, cuantos menos lo sepan mejor?</label>
        si<input type="radio" id="si" name="op178" value="0" class="opp" />
        no<input type="radio" id="no" name="op178" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">179.¿La disciplina y la puntualidad no son mi fuerte?</label>
        si<input type="radio" id="si" name="op179" value="0" class="opp" />
        no<input type="radio" id="no" name="op179" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">180.¿Cuando voy a llegar tarde a una cita, me pongo muy nervioso?</label>
        si<input type="radio" id="si" name="op180" value="0" class="opp" />
        no<input type="radio" id="no" name="op180" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">181.¿Soy una persona con grandes iniciativas y proyectos?</label>
        si<input type="radio" id="si" name="op181" value="1" class="opp" />
        no<input type="radio" id="no" name="op181" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">182.¿A veces me siento inferior ante personas del otro sexo?</label>
        si<input type="radio" id="si" name="op182" value="0" class="opp" />
        no<input type="radio" id="no" name="op182" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">183.¿Me gusta imponer a mis amigos los lugares a donde ir?</label>
        si<input type="radio" id="si" name="op183" value="0" class="opp" />
        no<input type="radio" id="no" name="op183" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">184.¿Cuando algo me sale mal, tiendo a echar la culpa a los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op184" value="0" class="opp" />
        no<input type="radio" id="no" name="op184" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">185.¿Los dem&aacute;s piensan que soy una persona amable?</label>
        si<input type="radio" id="si" name="op185" value="1" class="opp" />
        no<input type="radio" id="no" name="op185" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">186.¿Si las cosas me sale mal, me enfado f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op186" value="0" class="opp" />
        no<input type="radio" id="no" name="op186" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">187.¿Generalmente hago lo que mis padres me dicen o lo que les hubiera gustado?</label>
        si<input type="radio" id="si" name="op187" value="0" class="opp" />
        no<input type="radio" id="no" name="op187" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">188.¿En las reuniones y fiestas sociales s&eacute; controlar bien mis <br />emociones y mi comportamiento?</label>
        si<input type="radio" id="si" name="op188" value="1" class="opp" />
        no<input type="radio" id="no" name="op188" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">189.¿Me pone nervioso esperar ante las ventanillas de las oficinas?</label>
        si<input type="radio" id="si" name="op189" value="0" class="opp" />
        no<input type="radio" id="no" name="op189" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">190.¿A menudo me dejo llevar por los sentimientos?</label>
        si<input type="radio" id="si" name="op190" value="0" class="opp" />
        no<input type="radio" id="no" name="op190" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">191.¿Algunas veces siento una gran tensi&oacute;n interna?</label>
        si<input type="radio" id="si" name="op191" value="0" class="opp" />
        no<input type="radio" id="no" name="op191" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">192.¿S&eacute; aceptar bien las cr&iacute;ticas de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op192" value="1" class="opp" />
        no<input type="radio" id="no" name="op192" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">193.¿Si llego unos minutos tarde a un establecimiento y no me atienden, <br />suelo protestar duramente?</label>
        si<input type="radio" id="si" name="op193" value="0" class="opp" />
        no<input type="radio" id="no" name="op193" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">194.¿Suelo tener en cuenta la opini&oacute;n de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op194" value="1" class="opp" />
        no<input type="radio" id="no" name="op194" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">195.¿Cuando alguien me lleva la contraria, le hago frente?</label>
        si<input type="radio" id="si" name="op195" value="0" class="opp" />
        no<input type="radio" id="no" name="op195" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">196.¿Me resulta f&aacute;cil tomar parte en las discusiones o conversaciones de grupo?</label>
        si<input type="radio" id="si" name="op196" value="1" class="opp" />
        no<input type="radio" id="no" name="op196" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">197.¿Si alguien me insulta, me defiendo con coraje y firmeza?</label>
        si<input type="radio" id="si" name="op197" value="0" class="opp" />
        no<input type="radio" id="no" name="op197" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">198.¿Tengo bastantes enfrentamientos con miembros de mi familia?</label>
        si<input type="radio" id="si" name="op198" value="0" class="opp" />
        no<input type="radio" id="no" name="op198" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">199.¿Si alguien me acusa o me insulta,tambi&eacute;n hago lo mismo?</label>
        si<input type="radio" id="si" name="op199" value="0" class="opp" />
        no<input type="radio" id="no" name="op199" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">200.¿Creo que s&eacute; c&oacute;mo tratar y llevar adecuadamente a la gente?</label>
        si<input type="radio" id="si" name="op200" value="1" class="opp" />
        no<input type="radio" id="no" name="op200" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">201.¿Soy muy cauteloso cuando  se trata de elegir a las personas <br /> en las que debo confiar asuntos delicados?</label>
        si<input type="radio" id="si" name="op201" value="1" class="opp" />
        no<input type="radio" id="no" name="op201" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">202.¿Pierdo f&aacute;cilmente la paciencia con los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op202" value="0" class="opp" />
        no<input type="radio" id="no" name="op202" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">203.¿Se me saltan las l&aacute;grimas con facilidad?</label>
        si<input type="radio" id="si" name="op203" value="0" class="opp" />
        no<input type="radio" id="no" name="op203" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">204.¿Me doy por vencido f&aacute;cilmente cuando las cosas van mal?</label>
        si<input type="radio" id="si" name="op204" value="0" class="opp" />
        no<input type="radio" id="no" name="op204" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">205.¿Antes de hacer algo tengo en cuenta el criterio de mis amigos?</label>
        si<input type="radio" id="si" name="op205" value="0" class="opp" />
        no<input type="radio" id="no" name="op205" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">206.¿Cuando alguien conf&iacute;a en m&iacute;, no suelo defraudarlo?</label>
        si<input type="radio" id="si" name="op206" value="1" class="opp" />
        no<input type="radio" id="no" name="op206" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">207.¿Si intentan enga&ntilde;arme, o me han enga&ntilde;ado, act&uacute;o con dureza?</label>
        si<input type="radio" id="si" name="op207" value="0" class="opp" />
        no<input type="radio" id="no" name="op207" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">208.¿Muchas veces me implico en situaciones que conllevan riesgos innecesarios?</label>
        si<input type="radio" id="si" name="op208" value="0" class="opp" />
        no<input type="radio" id="no" name="op208" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">209.¿Soy muy hablador?</label>
        si<input type="radio" id="si" name="op209" value="0" class="opp" />
        no<input type="radio" id="no" name="op209" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">210.¿Si alguien me ha roto algo personal o me lo devuelve en mal estado,<br /> me suelo enojar con &eacute;l?</label>
        si<input type="radio" id="si" name="op210" value="0" class="opp" />
        no<input type="radio" id="no" name="op210" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">211.¿Cuando trabajo en grupo, no soporto f&aacute;cilmente los errores o <br /> deficiencias de los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op211" value="0" class="opp" />
        no<input type="radio" id="no" name="op211" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">212.¿Cuando era joven, por cualquier motivo dejaba de asistir al colegio?</label>
        si<input type="radio" id="si" name="op212" value="0" class="opp" />
        no<input type="radio" id="no" name="op212" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">213.¿Si alguien me pregunta algo muy personal, trato de contestarle <br /> diplom&aacute;ticamente?</label>
        si<input type="radio" id="si" name="op213" value="1" class="opp" />
        no<input type="radio" id="no" name="op213" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">214.¿Muchas veces hago cosas por los dem&aacute;s, s&oacute;lo por quedar bien?</label>
        si<input type="radio" id="si" name="op214" value="0" class="opp" />
        no<input type="radio" id="no" name="op214" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">215.¿Tengo poco aguante y las cosas me desbordan f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op215" value="0" class="opp" />
        no<input type="radio" id="no" name="op215" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">216.¿Duermo mal e inquieto?</label>
        si<input type="radio" id="si" name="op216" value="0" class="opp" />
        no<input type="radio" id="no" name="op216" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">217.¿Suelo buscar nuevas formas de hacer las cosas?</label>
        si<input type="radio" id="si" name="op217" value="1" class="opp" />
        no<input type="radio" id="no" name="op217" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">218.¿Doy mucha importancia a las normas y buenas maneras?</label>
        si<input type="radio" id="si" name="op218" value="1" class="opp" />
        no<input type="radio" id="no" name="op218" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">219.¿A la gente que no me atiende bien dentro de su horario <br />laboral( oficinas, bancos...) les llamo la atenci&oacute;n y me quejo?</label>
        si<input type="radio" id="si" name="op219" value="1" class="opp" />
        no<input type="radio" id="no" name="op219" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">220.¿Cualquier excusa me es buena para abandonar lo que estoy haciendo?</label>
        si<input type="radio" id="si" name="op220" value="0" class="opp" />
        no<input type="radio" id="no" name="op220" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">221.¿Los fracasos y experiencias negativas me hunden f&aacute;cilmente?</label>
        si<input type="radio" id="si" name="op221" value="0" class="opp" />
        no<input type="radio" id="no" name="op221" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">222.¿A veces experimento per&iacute;odos de soledad?</label>
        si<input type="radio" id="si" name="op222" value="0" class="opp" />
        no<input type="radio" id="no" name="op222" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">223.¿Los dem&aacute;s deber&iacute;an aprender de m&iacute;?</label>
        si<input type="radio" id="si" name="op223" value="0" class="opp" />
        no<input type="radio" id="no" name="op223" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">224.¿A los que intentan imponerme sus gustos, les llevo la contraria?</label>
        si<input type="radio" id="si" name="op224" value="0" class="opp" />
        no<input type="radio" id="no" name="op224" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">225.¿Poseo dotes para hacer que los dem&aacute;s cambien de opini&oacute;n?</label>
        si<input type="radio" id="si" name="op225" value="1" class="opp" />
        no<input type="radio" id="no" name="op225" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">226.¿Pienso dos veces las cosas antes de tomar una decisi&oacute;n?</label>
        si<input type="radio" id="si" name="op226" value="1" class="opp" />
        no<input type="radio" id="no" name="op226" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">227.¿Soy sincero o agresivo cuando debo serlo y tambi&eacute;n <br /> diplom&aacute;tico cuando debo serlo?</label>
        si<input type="radio" id="si" name="op227" value="0" class="opp" />
        no<input type="radio" id="no" name="op227" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">228.¿Antes de comprar o ponerme ropa, antepongo los <br /> gustos de los dem&aacute;s a los m&iacute;os ?</label>
        si<input type="radio" id="si" name="op228" value="0" class="opp" />
        no<input type="radio" id="no" name="op228" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">229.¿Me siento bien dando instrucciones a los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op229" value="1" class="opp" />
        no<input type="radio" id="no" name="op229" value="0" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">230.¿Reacciono mal cuando me hacen bromas pesadas?</label>
        si<input type="radio" id="si" name="op230" value="0" class="opp" />
        no<input type="radio" id="no" name="op230" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">231.¿Me gustar&iacute;a que los dem&aacute;s tuvieran otra opini&oacute;n de m&iacute;?</label>
        si<input type="radio" id="si" name="op231" value="0" class="opp" />
        no<input type="radio" id="no" name="op231" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">232.¿Me resulta dif&iacute;cil hablar de m&iacute; mismo?</label>
        si<input type="radio" id="si" name="op232" value="0" class="opp" />
        no<input type="radio" id="no" name="op232" value="1" class="opp" />
      </div>
      <div class="espapre">
 		<label for="puesto"style="font-size:17px !important;">233.¿Procuro destacar sobre los dem&aacute;s?</label>
        si<input type="radio" id="si" name="op233" value="0" class="opp" />
        no<input type="radio" id="no" name="op233" value="1" class="opp" />
      </div>
       <input type="hidden" name="ci" id="ci" value="<?php echo $dt[0]["cedula"]?>" />
      <input type="submit" name="calcular" value="enviar" />
      

</div>
</form>
</div>
  
</body>
</html>