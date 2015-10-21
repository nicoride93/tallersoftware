<?php
include ('config.php');

echo "<select name='o'>Cuenta origen:";
$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) {
		$row[$key] = stripslashes($value);
	}
	echo "<option value=" . nl2br($row['nombre']) . ">" . nl2br($row['nombre']) . "</option>";
}
echo "</select><br/>";

echo "<select name='d'>Cuenta destino:";
while ($row1 = mysql_fetch_array($result)) {
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
