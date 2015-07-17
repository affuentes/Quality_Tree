<? 
include('Config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `registro` ( `id` ,  `created_on` ,  `riesgo` ,  `Fases` ,  `Estado` ,  `Accion` ,  `Seguimento` ,  `Nivel` ,  `Probabilidad` ,  `Impacto`  ) VALUES(  '{$_POST['id']}' ,  '{$_POST['created_on']}' ,  '{$_POST['riesgo']}' ,  '{$_POST['Fases']}' ,  '{$_POST['Estado']}' ,  '{$_POST['Accion']}' ,  '{$_POST['Seguimento']}' ,  '{$_POST['Nivel']}' ,  '{$_POST['Probabilidad']}' ,  '{$_POST['Impacto']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='Consultar.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Id:</b><br /><input type='text' name='id'/> 
<p><b>Created On:</b><br /><input type='text' name='created_on'/> 
<p><b>Riesgo:</b><br /><input type='text' name='riesgo'/> 
<p><b>Fases:</b><br /><input type='text' name='Fases'/> 
<p><b>Estado:</b><br /><input type='text' name='Estado'/> 
<p><b>Accion:</b><br /><input type='text' name='Accion'/> 
<p><b>Seguimento:</b><br /><input type='text' name='Seguimento'/> 
<p><b>Nivel:</b><br /><input type='text' name='Nivel'/> 
<p><b>Probabilidad:</b><br /><input type='text' name='Probabilidad'/> 
<p><b>Impacto:</b><br /><input type='text' name='Impacto'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
