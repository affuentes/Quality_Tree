<? 
connect to db
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('riesgo') ) {
    die ('Can\'t use riesgo: ' . mysql_error());
}
?>