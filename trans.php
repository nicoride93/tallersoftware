
<html>
<?php
    include ('config.php');
	?>
	<select>
	<?php
	$result = mysql_query("call mostarusuarios") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) { $row[$key] = stripslashes($value);
	}
	
	echo "<option value=".$row['nombre'].">" . nl2br($row['nombre']) . "</option>";
	
?>
</select>
</html>