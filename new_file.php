<?php
include('config.php'); 
	$count=0;
    $sql = mysql_query('call mostrarpass');
while ($arr = mysql_fetch_assoc($sql)) {
	
		$has=hash('sha256',$arr['password']);
		mysql_query("UPDATE `usuario` SET `password` = '{$has}' where `id`= {$arr['id']}");
	$count++;
}
echo $count;
    
?>