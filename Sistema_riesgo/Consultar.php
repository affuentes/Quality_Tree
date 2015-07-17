<? 
include('Config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id</b></td>"; 
echo "<td><b>Created On</b></td>"; 
echo "<td><b>Riesgo</b></td>"; 
echo "<td><b>Fases</b></td>"; 
echo "<td><b>Estado</b></td>"; 
echo "<td><b>Accion</b></td>"; 
echo "<td><b>Seguimento</b></td>"; 
echo "<td><b>Nivel</b></td>"; 
echo "<td><b>Probabilidad</b></td>"; 
echo "<td><b>Impacto</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `riesgo`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['created_on']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['riesgo']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Fases']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Estado']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Accion']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Seguimento']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Nivel']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Probabilidad']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Impacto']) . "</td>";  
echo "<td valign='top'><a href=Actualizar.php?Id={$row['Id']}>Edit</a></td><td><a href=Eliminar.php?Id={$row['Id']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=Registro.php>New Row</a>"; 
?>