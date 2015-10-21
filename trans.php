<?php
include ('config.php');

echo "<select>";
$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) {
		$row[$key] = stripslashes($value);
	}
	echo "<option value=" . nl2br($row['nombre']) . ">" . nl2br($row['nombre']) . "</option>";
}
echo "</select>";
?>
