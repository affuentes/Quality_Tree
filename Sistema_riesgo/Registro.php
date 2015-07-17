<? 
include('Config.php'); 
if (isset($_POST['submitted'])) { 
 
$sql = "INSERT INTO `registro` ( `id` ,  `fecha` ,  `riesgo` ,  `fases` ,  `estado` ,  `accion` ,  `seguimento` ,  `nivel` ,  `probabilidad` ,  `impacto`  ) VALUES(  '{$_POST['id']}' ,  '{$_POST['fecha']}' ,  '{$_POST['riesgo']}' ,  '{$_POST['fases']}' ,  '{$_POST['estado']}' ,  '{$_POST['accion']}' ,  '{$_POST['seguimento']}' ,  '{$_POST['nivel']}' ,  '{$_POST['probabilidad']}' ,  '{$_POST['impacto']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 

<form action='' method='POST'> 
<p><b>Nombre:</b><br /><input type='text' name='id'/> 
<p><b>Fecha:</b><br /><input type='text' name='fecha'/> 
<p><b>Riesgo:</b><br /><input type='text' name='riesgo'/> 
<p><b>Fases:</b><br /><input type='text' name='fases'/> 
<p><b>Accion:</b><br /><input type='text' name='accion'/> 
<p><b>Seguimento:</b><br /><input type='text' name='seguimento'/> 
<p><b>Estado:</b><br /> 
 <select>
  <option value="Activo">Activo</option>
  <option value="Inactivo">Inactivo</option>
 </select> 
<p><b>Nivel:</b><br />
<select>
  <option value="Bajo">Bajo</option>
  <option value="Medio">Medio</option>
  <option value="Alto">Alto</option>
  <option value="Muy Alto">Muy Alto</option>
 </select> 
<p><b>Probabilidad:</b><br />
<select>
  <option value="Bajo">Bajo</option>
  <option value="Medio">Medio</option>
  <option value="Alto">Alto</option>
   </select> 
<p><b>Impacto:</b><br />
<select>
  <option value="Bajo">Bajo</option>
  <option value="Medio">Medio</option>
  <option value="Alto">Alto</option>
  <option value="Muy Alto">Muy Alto</option>
 </select> 
<div><input type='submit' value='   Enviar   '></div>
</form> 
