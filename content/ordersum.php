<?php require_once('../include/connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-language" content="en, th">
    <meta charset="utf-8">
	<meta name="keywords" content="ซื้อตุ๊กตาชาววัง ขายตุ๊กตาชาววัง ตุ๊กตาเครื่องปั้นดินเผา" />
    <meta name="description" content="ตุ๊กตาชาววังเป็นผลิตภัณฑ์พื้นเมือง เป็นสินค้า OTOP ของดีของขึ้นชื่อและมีเสียงของจังหวัดอ่างทอง
	ตุ๊กตาชาววังผลิตด้วยความปราณีตด้วยฝีมือชาวบ้านที่มีความชำนาญ" />
    <title>ตะกร้าตุ๊กตาชาววัง ผลิตและขายตุ๊กตาชาววังปั้นดินเผา</title>
	<link rel="shortcut icon" href="images/logo/favicon.png">
    <link type="text/css" rel="stylesheet" href="css/base.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">  
	<link type="text/css" rel="stylesheet" href="css/media_query/desktop_small.css">	
	<link type="text/css" rel="stylesheet" href="css/media_query/tablet.css">
	<link type="text/css" rel="stylesheet" href="css/media_query/mobile.css">
	<link type="text/css" rel="stylesheet" href="lightbox/css/lightbox.css">
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider/jquery.slides.min.js"></script>
	<script src="lightbox/js/lightbox.min.js"></script>
    <script>
    	$(document).ready(function(){
		  /*---no click right--*/
			$(document).bind("contextmenu",function(e){   
					return false;   
			 });
		/*---end no click right----*/
		});//end ready
    </script>
	<?php
	
	$p_code = trim($_POST['p_code']);
	$p_qty = trim($_POST['p_qty']);
	
	$sql = "SELECT * 
			FROM tb_product
			WHERE p_code = '$p_code';
			";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
?>
 </head>
  <body>
    <?php include('../include/inc_menu_mobile_pdetail.php');?>
    <div id="wrapper">
      <?php include('../include/inc_contact_content.php');?>
      <header>
			<?php include('../include/inc_menu.php');?>
      </header>
		<div class="detail">
			<div class="indetail">			
				
				<section> 
                	<div class="product" style="overflow: hidden;">
                    	<h1><strong><U>รายการสั่งซื้อ</U></strong></h1>
						<div>
							<div id="odelivery">
								<div class="obox">
									<div class="box">
										<div class="headbox">	
											ที่อยู่ที่รับสินค้า
										</div><!--end headbox-->
										
										<div class="bcontent">
											หมู่บ้านสรรเสริญวิลล่า 190/70 ม.10 ต.ดอนตะโก อ.เมือง จ.ราชบุรี 70000
										</div><!--end bcontent-->
										<div class="box_btn">	
											เพิ่ม/แก้ไขปลายทางจัดส่ง
										</div><!--end box_btn-->
									</div><!--end box-->
									
									<div class="box">
										<div class="headbox">	
											การจัดส่ง
										</div><!--end headbox-->
										
										<div class="bcontent">
											<input type="radio" name="mail" value="EMS">EMS <br>
											<input type="radio" name="mail" value="register">ลงทะเบียน
										</div><!--end bcontent-->
										<div class="box_btn">
										</div><!--end box_btn-->
									</div><!--end box-->
								</div><!---end obox-->
							</div><!--- end odelivery-->
							<div id="oItem">
								<div class="box">
										<div class="headbox" style="background-color: blue">	
											สินค้า
										</div><!--end headbox-->
										
										<div class="bcontent" style="overflow: hidden;">
											<div class="eachItem" style="clear:both;">
												<div class="ipic"><img src="images/home/01001_child.jpg"></div>
												<div class="iname"><span>ควายตัวเมีย</span><br><span>20 บาท</span></div>
												<div class="iprice">icolumn</div>
											</div><!--end eachItem-->
											
											<div class="eachItem" style="clear:both;">
												<div class="ipic"><img src="images/home/01001_child.jpg"></div>
												<div class="iname">icolumn</div>
												<div class="iprice">icolumn</div>
											</div><!--end eachItem-->
											
										</div><!--end bcontent-->
									</div><!--end box-->
							</div><!--- end oItem-->
						</div>
						<div id="ototal" style="border: 1px solid gray; width: 98.5%;">
							<table style="width: 97%; margin: 0 auto;">
								<tr>
									<td align="left">ราคาสินค้ารวม</td>
									<td align="right">ototal</td>
								</tr>
								<tr>
									<td align="left">ค่าขนส่ง</td>
									<td align="right">ototal</td>
								</tr>
								<tr>
									<td align="left">ราคารวมทั้งหมด</td>
									<td align="right">ototal</td>
								</tr> 
							</table>
						</div><!--- end ototal-->
						<div id="opayment">
							<div class="box" style="border: none;">
								<div class="headbox">	
											ช่องทางการชำระเงิน
								</div><!--end headbox-->
										
								<div class="bcontent">
									<table style="width: 97%; margin: 0 auto; border: 1px solid #E6E6E6">
										<tbody><tr>
												<th>หมายเลขบัญชี</th>
												<th>ธนาคาร</th>
												<th>ชื่อบัญชี</th>
											</tr>
											<tr style="color:#002f94;">
												<td>101-888031-8</td>
												<td><img alt="ธนาคารกรุงเทพ" src="images/logo/bbl.png" title="ธนาคารกรุงเทพ"> ธนาคารกรุงเทพ สาขาสำนักงานใหญ่สีลม</td>
												<td>นาย ภูริชญ์ โชคอุตสาหะ</td>
											</tr>
											<tr style="color:#4f2a81;">
												<td>008-0-04976-1</td>
												<td><img alt="ธนาคารกรุงไทย" src="images/logo/ktb.png" title="ธนาคารกรุงไทย"> ธนาคารกรุงไทย สาขาปทุมวัน</td>
												<td>นาย ภูริชญ์ โชคอุตสาหะ</td>
											</tr>
											<tr style="color:#097405;">
												<td>617-2-12903-8</td>
												<td><img alt="ธนาคารกสิกรไทย" src="images/logo/kbank.png" title="ธนาคารกสิกรไทย"> ธนาคารกสิกรไทย สาขาออลซีซั่นส์ เพลส</td>
												<td>นาย ภูริชญ์ โชคอุตสาหะ</td>
											</tr>
											
										</tbody>
									</table>
								</div><!--end bcontent-->
							</div><!--end box-->
						</div><!--- end opayment-->
					</div><!-----end product----->
                </section><!-----end section----->	
				
            </div><!--- end indetail---->
	    </div><!--- end detail---->    
		 	
		
		<footer>
      	<div id="social_icon">
        	<ul>
            	<li id="f_facecook"><a target="_blank" href="https://www.facebook.com/chowwangtukkata"><div></div></a></li>
                <li id="f_twitter"><div></div></li>
                
            </ul>
        </div>
		  
        <div id="footaddress">
        	
        </div>
     
      </footer> 
      
    </div><!-----end wrapper----->

	<script src="js/classie.js"></script>
    <script src="js/nav.js"></script>
  </body>
</html>