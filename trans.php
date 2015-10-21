<?php
include ('config.php');

echo "Cuenta origen:<select name='o'>";
$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) {
		$row[$key] = stripslashes($value);
	}
	echo "<option value=" . nl2br($row['nombre']) . ">" . nl2br($row['nombre']) . "</option>";
}
echo "</select><br/>";

$link->next_result();

$result1 = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
echo "Cuenta destino:<select name='d'>";
while ($row1 = mysql_fetch_array($result1)) {
	foreach ($row1 AS $key1 => $value1) {
		$row1[$key1] = stripslashes($value1);
	}
	echo "<option value=" . nl2br($row1['nombre']) . ">" . nl2br($row1['nombre']) . "</option>";
}
echo "</select><br/>


<form method='post' action='depo.php'>
	<input type='text' name='monto' value='Ingrese el monto'/>
	<input type='submit' value='Depositar'/>
</form>
";
?>
