<?php
include('config.php'); 
if (isset($_POST['submitted'])) { 
  $has=$_POST['password'];
  $has1=hash('sha256',$has);
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `usuario` ( `username` ,  `password`  ) VALUES(  '{$_POST['username']}' ,  '{$has1}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Username:</b><br /><input type='text' name='username'/> 
<p><b>Password:</b><br /><input type='text' name='password'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
