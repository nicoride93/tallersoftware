<?php

$usuario=$_SERVER['dbuser'];
$pass=$_SERVER['dbpass'];

$link = mysqli_connect("localhost", "$usuario", "$pass");
if (!$link) {
    die('Not connected : ' . mysqli_error());
}

if (! mysqli_select_db('firstdb') ) {
    die ('Can\'t use foo : ' . mysqli_error());
}
?>
