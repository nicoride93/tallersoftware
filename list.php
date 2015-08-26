<?php
include ('config.php');
echo "
<table border=1 >
	";
echo "
	<tr>
		";
echo "<td><b>Id</b></td>";
echo "<td><b>Username</b></td>";
echo "<td><b>Password</b></td>";
echo "
	</tr>";
$result = mysql_query("SELECT * FROM `usuario`") or trigger_error(mysql_error());
while ($row = mysql_fetch_array($result)) {
	foreach ($row AS $key => $value) { $row[$key] = stripslashes($value);
	}
	echo "
	<tr>
		";
	echo "<td valign='top'>" . nl2br($row['id']) . "</td>";
	echo "<td valign='top'>" . nl2br($row['username']) . "</td>";
	echo "<td valign='top'>" . nl2br($row['password']) . "</td>";
	echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a></td><td><a href=delete.php?id={$row['id']}>Delete</a></td> ";
	echo "
	</tr>";
}
echo "
</table>
";
echo "<a href=new.php>New Row</a>";
$sql = mysql_query('call mostrarusuarios');
while ($arr = mysql_fetch_array($sql)) {
	echo $arr['username'], "<br>";
}


?>
