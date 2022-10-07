<?php
$cat=$_POST["opcion"];
print_r($cat);
 
if($cat=="Running")
{
	echo("<script> window.location.href='" . "procesarun.php" . "'</script>");
	
}
else
if($cat=='Biking')
{
	echo("<script> window.location.href='" . "procesabike.php" . "'</script>");
	
}
else
if($cat=='Extreme')
{
	echo("<script> window.location.href='" . "procesaextreme.php" . "'</script>");
	
}
?>