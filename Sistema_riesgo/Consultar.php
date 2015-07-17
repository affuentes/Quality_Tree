<? 
include('Config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>id</b></td>"; 
echo "<td><b>fecha</b></td>"; 
echo "<td><b>riesgo</b></td>"; 
echo "<td><b>fases</b></td>"; 
echo "<td><b>estado</b></td>"; 
echo "<td><b>accion</b></td>"; 
echo "<td><b>seguimento</b></td>"; 
echo "<td><b>nivel</b></td>"; 
echo "<td><b>probabilidad</b></td>"; 
echo "<td><b>impacto</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `riesgo`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['fecha']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['riesgo']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['fases']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['estado']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['accion']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['seguimento']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nivel']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['probabilidad']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['impacto']) . "</td>";  
echo "<td valign='top'><a href=Actualizar.php?Id={$row['Id']}>Edit</a></td><td><a href=Eliminar.php?Id={$row['Id']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=Registro.php>New Row</a>"; 
?>