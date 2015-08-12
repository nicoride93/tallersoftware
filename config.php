<?php

$usuario=$_SERVER['dbuser'];
$pass=$_SERVER['dbpass'];

$link = mysql_connect("localhost", "$usuario", "$pass");
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('firstdb') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
