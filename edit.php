<?php
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
  $has=$_POST['password'];
  $has1=hash('sha256',$has);
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `usuario` SET  `username` =  '{$_POST['username']}' ,  `password` =  '{$has1}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `usuario` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>Username:</b><br /><input type='text' name='username' value='<?php stripslashes($row['username']) ?>' /> 
<p><b>Password:</b><br /><input type='text' name='password' value='<?php stripslashes($row['password']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
