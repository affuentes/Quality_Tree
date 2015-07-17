<? 
include('Config.php'); 
$Id = (int) $_GET['id']; 
mysql_query("DELETE FROM `riesgo` WHERE `Id` = '$id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='Consultar.php'>Back To Listing</a>