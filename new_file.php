<?php
include('config.php'); 
	$count=0;
    $sql = mysql_query('call mostrarpass');
while ($arr = mysql_fetch_assoc($sql)) {
	
		$has=hash('sha256',$arr['password']);
		$upd = mysql_query("UPDATE `usuario` SET `password` = '{$has}' where `id`= {$arr['id']}");
		if($upd)
		{
			$count++;
		}	
	}
echo $count;
    
?>