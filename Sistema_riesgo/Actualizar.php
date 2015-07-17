<? 
include('Config.php'); 
if (isset($_GET['id']) ) { 
$Id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `riesgo` SET  `id` =  '{$_POST['id']}' ,  `fecha` =  '{$_POST['fecha']}' ,  `riesgo` =  '{$_POST['riesgo']}' ,  `Fases` =  '{$_POST['Fases']}' ,  `Estado` =  '{$_POST['Estado']}' ,  `Accion` =  '{$_POST['Accion']}' ,  `Seguimento` =  '{$_POST['Seguimento']}' ,  `Nivel` =  '{$_POST['Nivel']}' ,  `Probabilidad` =  '{$_POST['Probabilidad']}' ,  `Impacto` =  '{$_POST['Impacto']}'   WHERE `Id` = '$Id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='Consultar.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `riesgo` WHERE `Id` = '$Id' ")); 
?>

<form action='' method='POST'> 
<p><b>Id:</b><br /><input type='text' name='id' value='<?= stripslashes($row['id']) ?>' /> 
<p><b>Fecha:</b><br /><input type='text' name='fecha' value='<?= stripslashes($row['fecha']) ?>' /> 
<p><b>Riesgo:</b><br /><input type='text' name='riesgo' value='<?= stripslashes($row['riesgo']) ?>' /> 
<p><b>Fases:</b><br /><input type='text' name='fases' value='<?= stripslashes($row['fases']) ?>' /> 
<p><b>Estado:</b><br /><input type='text' name='estado' value='<?= stripslashes($row['estado']) ?>' /> 
<p><b>Accion:</b><br /><input type='text' name='accion' value='<?= stripslashes($row['accion']) ?>' /> 
<p><b>Seguimento:</b><br /><input type='text' name='seguimento' value='<?= stripslashes($row['seguimento']) ?>' /> 
<p><b>Nivel:</b><br /><input type='text' name='nivel' value='<?= stripslashes($row['nivel']) ?>' /> 
<p><b>Probabilidad:</b><br /><input type='text' name='probabilidad' value='<?= stripslashes($row['probabilidad']) ?>' /> 
<p><b>Impacto:</b><br /><input type='text' name='impacto' value='<?= stripslashes($row['impacto']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
