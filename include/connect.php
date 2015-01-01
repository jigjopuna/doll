<?php 
       $host = 'localhost';
       $user = 'root';
       $pass = '1234';
       $db = 'doll';
       
       $conn = mysql_connect($host, $user, $pass) or exit('server fail');
       mysql_select_db($db, $conn) or die('Not found database');
       mysql_query('set names utf8'); 
		
?>

  