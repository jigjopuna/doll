<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="content-language" content="en, th">
  </head>
  <body>
<?php 
	$name = trim($_POST['name']);
	$lastname = trim($_POST['lastname']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);
	$detail = trim($_POST['detail']);

	// send mail
	    $strTo = "phurit_18@hotmail.com";       
		$strSubject = "=?UTF-8?B?".base64_encode("ติดต่อตุ๊กกตาชาววัง")."?=";
		$strHeader .= "MIME-Version: 1.0' . \r\n";
		$strHeader .= "Content-type: text/html; charset=utf-8\r\n"; 
		$strHeader .= "From:".$email;
		$strMessage = " <h1><i>email ผู้สอบถามคือ</i> ".$email."</h1><br>
		 			    <p><i>ชื่อ :</i>".$name."</p>
						<p><i>นามสกุล :</i>".$lastname."</p>
						<p>ข้อความ</p>
		                <p>".$detail."</p>
                        <p>เบอร์ติดต่อกลับ: ".$phone."</p>
					  ";
	
		$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
			if($flgSend)
			{
				exit("<script>
					alert('ส่งข้อมูลเรียบร้อย');
					window.location = 'http://www.chowwang.com';
					</script>");
			}else{
				exit("<script>
					alert('ขออภัยระบบอีเมล์อยู่ระหว่างซ่อมบำรุง');
					window.location = 'http://www.chowwang.com';
					</script>");
			}
	//mysql_close($conn);
	

?>
<body>
</html>