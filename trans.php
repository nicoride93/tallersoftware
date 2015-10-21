<?php
include ('config.php');

echo "<select name='o'>";
$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) {
		$row[$key] = stripslashes($value);
	}
	echo "Cuenta origen:<option value=" . nl2br($row['nombre']) . ">" . nl2br($row['nombre']) . "</option>";
}
echo "</select><br/>";

echo "<select name='d'>";
$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) {
		$row[$key] = stripslashes($value);
	}
	echo "Cuenta destino:<option value=" . nl2br($row['nombre']) . ">" . nl2br($row['nombre']) . "</option>";
}
echo "</select><br/>


<form method='post' action='depo.php'>
	<input type='text' name='monto' value='Ingrese el monto'/>
	<input type='submit' value='Depositar'/>
</form>
";
?>
