<?php
session_start();
require_once("conexion/Trabajo.php");
$des=new Trabajo();
$des-> borrarima1($_GET["idd"]);
?>