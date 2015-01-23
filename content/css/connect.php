<?php 
       $host = 'localhost';
       $user = 'u450591350_doll';
       $pass = 'thaidoll';
       $db = 'u450591350_doll';
       
       $conn = mysql_connect($host, $user, $pass) or exit('server fail');
       mysql_select_db($db, $conn) or die('Not found database');
       mysql_query('set names utf8'); 

		$sql = "SELECT * FROM tb_information";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		
		$row = mysql_fetch_array($result);
		
?>

  