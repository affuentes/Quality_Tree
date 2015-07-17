<? 
include('Config.php'); 
if (isset($_GET['Id']) ) { 
$Id = (int) $_GET['Id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `riesgo` SET  `id` =  '{$_POST['id']}' ,  `created_on` =  '{$_POST['created_on']}' ,  `riesgo` =  '{$_POST['riesgo']}' ,  `Fases` =  '{$_POST['Fases']}' ,  `Estado` =  '{$_POST['Estado']}' ,  `Accion` =  '{$_POST['Accion']}' ,  `Seguimento` =  '{$_POST['Seguimento']}' ,  `Nivel` =  '{$_POST['Nivel']}' ,  `Probabilidad` =  '{$_POST['Probabilidad']}' ,  `Impacto` =  '{$_POST['Impacto']}'   WHERE `Id` = '$Id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='Consultar.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `riesgo` WHERE `Id` = '$Id' ")); 
?>

<form action='' method='POST'> 
<p><b>Id:</b><br /><input type='text' name='id' value='<?= stripslashes($row['id']) ?>' /> 
<p><b>Created On:</b><br /><input type='text' name='created_on' value='<?= stripslashes($row['created_on']) ?>' /> 
<p><b>Riesgo:</b><br /><input type='text' name='riesgo' value='<?= stripslashes($row['riesgo']) ?>' /> 
<p><b>Fases:</b><br /><input type='text' name='Fases' value='<?= stripslashes($row['Fases']) ?>' /> 
<p><b>Estado:</b><br /><input type='text' name='Estado' value='<?= stripslashes($row['Estado']) ?>' /> 
<p><b>Accion:</b><br /><input type='text' name='Accion' value='<?= stripslashes($row['Accion']) ?>' /> 
<p><b>Seguimento:</b><br /><input type='text' name='Seguimento' value='<?= stripslashes($row['Seguimento']) ?>' /> 
<p><b>Nivel:</b><br /><input type='text' name='Nivel' value='<?= stripslashes($row['Nivel']) ?>' /> 
<p><b>Probabilidad:</b><br /><input type='text' name='Probabilidad' value='<?= stripslashes($row['Probabilidad']) ?>' /> 
<p><b>Impacto:</b><br /><input type='text' name='Impacto' value='<?= stripslashes($row['Impacto']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
