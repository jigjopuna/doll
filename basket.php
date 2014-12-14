<?php require_once('include/connect.php'); ?>
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
	<link rel="shortcut icon" href="content/images/logo/favicon.png">
    <link type="text/css" rel="stylesheet" href="content/css/base.css">
    <link type="text/css" rel="stylesheet" href="content/css/style.css">  
	<link type="text/css" rel="stylesheet" href="content/css/media_query/desktop_small.css">	
	<link type="text/css" rel="stylesheet" href="content/css/media_query/tablet.css">
	<link type="text/css" rel="stylesheet" href="content/css/media_query/mobile.css">
	<link type="text/css" rel="stylesheet" href="content/lightbox/css/lightbox.css">
	<script src="content/js/jquery-1.11.1.min.js"></script>
    <script src="content/js/main.js"></script>
    <script src="content/js/slider/jquery.slides.min.js"></script>
	<script src="content/lightbox/js/lightbox.min.js"></script>
    <script>
    	$(document).ready(function(){
		
			$('#slides').slidesjs({
			width: 720,
			height: 250,
			play: {
			  active: true,
			  auto: true,
			  interval: 4000,
			  swap: true
			}
		  }); //end slide
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
    <?php include('include/inc_menu_mobile.php');?>
    <div id="wrapper">
      <?php include('include/inc_contact.php');?>
      <header>
			<?php include('include/inc_menu.php');?>
      </header>
		<div class="detail">
			<div class="indetail">			
				
				<section> 
                	<div class="product" style="overflow: hidden;">
                    	<h1><strong><U>สินค้าในตระกร้า</U></strong></h1>
                    	<div class="b_item">
							<div class="b_eachItem">
								<div class="b_content">
									<div class="b_img"><img src="content/images/home/<?php echo $row['p_image'];?>"></div><!--end b_img-->
									<div class="b_pname"><?php echo $row['p_name'];?></div><!--end b_pname-->
								</div><!--end b_content-->
								<div class="b_cash">
									<table>
										<tr style=" height: 35px;">
											<td align="left">จำนวน</td>
											<td align="right">ราคา</td>
										</tr>
										<tr class="hr">
											<td align="left"><input type="text" value="<?php echo $p_qty; ?>"><a class="btn_del">แก้ไข</a></td>
											<td align="right">฿<?php echo $row['p_price'];?></td>
										</tr>
										<tr class="hr">
											<td align="left">รวม</td>
											<td align="right">฿<?php echo $row['p_price']*$p_qty;?></td>
										</tr>
										<tr style=" height: 40px; margin: 10px 0 0 50px; ">
											<td align="left"><a class="btn_del">ลบ</a></td>
											<td align="right"></td>
										</tr>
									</table>
								</div><!--end b_cash-->
							</div><!--end b_eachItem-->
							
							<div style="clear:both;"></div> 
							
							
						</div><!--end b_item-->
						
						<div class="b_amount">
							<table style="width:90%; margin: 3px auto;">
								<tr style="height: 35px;">
									<td align="center" colspan="2" style="background-color:orange;">รายการซื้อทั้งหมด</td>
								</tr>
								<tr style="height: 35px; border-bottom:1px solid gray;">
									<td align="left">รายการ(<?php echo $num; ?>)</td>
									<td align="right">฿<?php echo $row['p_price'];?></td>
								</tr>
								<tr style="height: 35px; border-bottom:1px solid gray;">
									<td align="left">ราคา</td>
									<td align="right">฿<?php echo $row['p_price']*$p_qty;?></td>
								</tr>
								<tr>
									<td align="center" colspan="2"><a href="content/ordersum.php" class="btn_del">ชำระเงิน</a></td>
									</tr>
							</table>
						
						</div><!--end b_amount-->
                    </div><!-----end product----->
                </section><!-----end section2----->	
				
				<section> 
                	<div class="product">
                    	<h1><strong><U>สินค้าแนะนำ</U></strong></h1>
                    	<ul style="margin-top:10px;">
                        	
							<li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/0098_3woman.jpg" data-lightbox="female02"  data-title="<a href='#'>การแต่งกายผู้หญิงไทย เครื่องปั้นดินเผา</a>"><img class="example-image" src="content/images/home/0098_3woman.jpg" alt="การแต่งกายผู้หญิงไทย เครื่องปั้นดินเผา" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="" target="blank"><span class="descript">การแต่งกายผู้หญิงไทย ๓ คน</span><br> <span class="price"> ราคา ๕o บาท <br>รหัสสินค้า : 00983</span></a><br><a class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
							
							<li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01106_ancestor.jpg" data-lightbox="01106_ancestor"  data-title="<a href='#'>ตุ๊กตาการแต่งกายคุณตา คุณยาย</a>"><img class="example-image" src="content/images/home/01106_ancestor.jpg" alt="ตุ๊กตาการแต่งกายคุณตา คุณยาย เครื่องปั้นดินเผา" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="" target="blank"><span class="descript">ตุ๊กตาการแต่งกายคุณตา คุณยาย</span><br> <span class="price"> ราคา ๓oo บาท <br>รหัสสินค้า : 01106</span></a><br><a class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
							
							<li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01108_ancestor.jpg" data-lightbox="01108_ancestor"  data-title="<a href='#'>ตุ๊กตาการแต่งกายคุณตา คุณยาย</a>"><img class="example-image" src="content/images/home/01108_ancestor.jpg" alt="ตุ๊กตาการแต่งกายคุณตา คุณยาย เครื่องปั้นดินเผา" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="" target="blank"><span class="descript">ตุ๊กตาการแต่งกายคุณตา คุณยาย</span><br> <span class="price"> ราคา ๓oo บาท <br>รหัสสินค้า : 01108</span></a><br><a class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
                        </ul>
                    </div><!-----end product----->
                </section><!-----end section2----->	
				
                
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

	<script src="content/js/classie.js"></script>
    <script src="content/js/nav.js"></script>
  </body>
</html>