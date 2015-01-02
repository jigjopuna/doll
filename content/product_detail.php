<?php
	require_once('../include/connect.php');
	$p_id = trim($_GET['p_id']);
	
	$sql = "SELECT * FROM tb_product WHERE p_code = '$p_id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$product_type = $row[p_type];
	
	/*Select relate with product type*/
	
	$sql_ptype = "SELECT * FROM tb_product WHERE p_type = '$product_type' Limit 0, 10";
	$result_ptype = mysql_query($sql_ptype);
	$num_ptype = mysql_num_rows($result_ptype);
	$t =  '.jpg';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta http-equiv="content-language" content="en, th">
	<meta name="keywords" content="
		<?php if( $row['p_keyword']!='') { ?>
			<?php echo $row['p_keyword'];?>
		<?php } else { ?>
			ซื้อขายตุ๊กตาวัฒนธรรมไทย, ซื้อขายตุ๊กตาไทย, ตุ๊กตาชาววัง
		<?php } ?>
	">
    <meta name="description" content="
		<?php if( $row['p_descript']!='') { ?>
			<?php echo $row['p_descript'];?>
		<?php } else { ?>
			ซื้อขายตุ๊กตาวัฒนธรรมไทยชาววังพร้อมส่งกรุงเทพและต่างจัดหวัด ตุ๊กตาชาววังอ่างทอง OTOP
		<?php } ?>
	
	" />
    <title>ซื้อตุ๊กตาชาววัง  <?php echo $row['p_name']; ?></title>
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
	<script src="js/lightbox.min.js"></script>
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
			$("#btn_basket").click(send_basket);
		});//end ready
		
		function send_basket(){
			$('#form1').submit();
		}
    </script>
	
 </head>
  <body>
    <?php include('../include/inc_menu_mobile_pdetail.php');?>
    <div id="wrapper">
      <?php include('../include/inc_contact_content.php');?>
      <header>
			<?php include('../include/inc_menu_pdetail.php');?>
      </header>
		<div class="detail">
			<div class="indetail">	
				
				<section>
					<div class="p_img">
						<a class="example-image-link" href="images/large/<?php echo $row['p_image'];?>" data-lightbox="01230-AEC-SP"  data-title="<?php echo $row['p_name']?>"><img class="example-image" src="images/large/<?php echo $row['p_image'].$t;?>" alt="<?php echo $row['p_name']?>" />
						</a>
					</div>		
					<div class="p_detail">
						<div class="p_name"><h1 style="color: black"><?php echo $row['p_name']?></h1></div><!---end p_name-->
						<div class="p_price">
							<strong>ราคา : </strong> <s>฿<?php echo $row['p_fullprice'];?></s> &nbsp;&nbsp;&nbsp;&nbsp;
							<strong>พิเศษ : </strong> ฿<?php echo $row['p_price'];?>
						</div><!---end p_price-->
						<div class="p_stock"><strong>In Stock : </strong><?php echo $row['p_stock'];?></div><!---end p_stock-->
						<div class="p_size"><strong>
						ขนาด : </strong>
						 <?php echo $row['p_width'];?> x 
						<?php echo $row['p_length'];?> x
						 <?php echo $row['p_height'];?> นิ้ว (ก x ย  x ส)</div><!---end p_size-->
						<div class="p_weight"><strong>น้ำหนัก : </strong> <?php echo $row['p_weight'];?> กรัม </div><!---end p_weight-->
						<div class="p_action">
							<form name="form1" id="form1" method="post" action="../basket.php">
								<div class="p_qty">
									<strong>จำนวน : </strong>
									
										<input type="text" name="p_qty" value="1">
										<input type="hidden" name="p_code" value="<?php echo $row['p_code'];?>">
									
								</div><!---end p_qty-->
							</form>
							<div class="p_btn"><a id="btn_basket" class="bnt_basket">ใส่ตระกร้า</a></div><!---end p_btn-->
						</div><!---end p_action-->
						<div class="p_descript"><strong>รายละเอียด  : </strong><?php echo $row['p_descript'];?></div><!---end p_descript-->
					</div><!---end p_detail-->
				</section>
				
				<section>
					<div class="p_img_extend">
						<?php 
							$a =  $row['p_image'];
							$z =  $row['p_num_img'];
							
							for($i=1; $i<=$z; $i++){
								$b = $a.$i.$t; 
						?>
						    
						<a class="example-image-link" href="images/large/<?php echo $b;?>" data-lightbox="<?php echo $row['p_image'];?>"  data-title="<?php echo $row['p_name'];?> ราคา <?php echo $row['p_price'];?> บาท"><img class="example-image" src="images/home/<?php echo $b;?>" alt="<?php echo $row['p_name'];?>" />
						</a>
						<?php } //end for ?>
					</div>	
				</section>
				
				<section> 
                	<div class="product">
                    	<h1>สินค้าที่ลูกค้าอาจชอบ</h1>
                    	<ul style="margin-top:10px;">
						<?php for ($i=1; $i<=$num_ptype; $i++) {
							$row_ptype = mysql_fetch_array($result_ptype);
						?>
                        	<li>
                            	<div class="product_image">
									<a class="example-image-link" href="images/large/<?php echo $row_ptype['p_image'];?>" data-lightbox="<?php echo $row_ptype['p_name'];?>"  data-title="<a href='product_detail.php?p_id=<?php echo $row_ptype[p_code]?>'><?php echo $row_ptype['p_name'];?> ราคา <?php echo $row_ptype['p_price'];?> บาท</a>"><img class="example-image" src="images/home/<?php echo $row_ptype['p_image'];?>" alt="เรือพระบิณฑบาตร ทำจากเครื่องปั้นดินเผา ของฝาก" />
									</a>
									
								</div>
                                <div class="product_detail"> 
									<a href="product_detail.php?p_id=<?php echo $row_ptype['p_code'];?>" target="blank"><span class="descript"><?php echo $row_ptype['p_name']?></span></a><br> <span class="price"> ราคา <?php echo $row_ptype['p_price'];?> บาท <br>รหัสสินค้า : <?php echo $row_ptype['p_code'];?> </span>
									
								</div>
                            </li>
							<?php } ?>
                        </ul>
                    </div><!--end product-->
                </section><!--end section1-->		
				
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