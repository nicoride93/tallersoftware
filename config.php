<?php

$usuario=$_ENV['dbuser'];
$pass=$_ENV['dbpass'];

$link = mysql_connect("localhost", "beri", "$pass");
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('foo') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
