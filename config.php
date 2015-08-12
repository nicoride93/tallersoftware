<?php

$usuario=$_ENV['dbuser'];
$pass=$_ENV['dbpass'];
var_dump($usuario);
var_dump($pass);

$link = mysql_connect("localhost", "$usuario", "$pass");
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('foo') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
