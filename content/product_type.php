<?php
	require_once('../include/connect.php');
	$p_id = trim($_GET['p_id']);
	
	$sql = "
			SELECT * 
			FROM tb_product p JOIN tb_dolltype t ON t.type_id = p.p_type
			WHERE t.type_id = '$p_id'
		   ";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$row_cat = mysql_fetch_array($result);
	
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta http-equiv="content-language" content="en, th">
	<meta name="keywords" content="ซื้อตุ๊กตาชาววัง <?php echo $row_cat['p_name'];?> " />
    <meta name="description" content="ซื้อขายตุ๊กตาชาววังพร้อมส่งกรุงเทพและต่างจัดหวัด ตุ๊กตาชาววังอ่างทอง OTOP" />
    <title>ซื้อตุ๊กตาชาววัง  <?php echo $row_cat['p_name'];?></title>
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
                	<div class="product">
                    	<h1>สินค้าหมวด <?php echo $row_cat['type_name'];?></h1>
						<span>(มีทั้งหมด <?php echo $num;?>  รายการ)</span>
                    	<ul style="margin-top:10px;">
						<?php for ($i=1; $i<=$num; $i++) {
							$row = mysql_fetch_array($result);
						?>
                        	<li>
                            	<div class="product_image">
									<a class="example-image-link" href="images/large/<?php echo $row['p_image'].'.jpg';?>" data-lightbox="<?php echo $row['p_name'];?>"  data-title="<a href='product_detail.php?p_id=<?php echo $row[p_code]?>'><?php echo $row['p_name'];?> ราคา <?php echo $row['p_price'];?> บาท</a>"><img class="example-image" src="images/home/<?php echo $row['p_image'].'.jpg';?>" alt="<?php echo $row['p_name'];?>" />
									</a>
									
								</div>
                                <div class="product_detail"> 
									<a href="product_detail.php?p_id=<?php echo $row['p_code'];?>" target="blank"><span class="descript"><?php echo $row['p_name']?></span></a><br> <span class="price"> ราคา <?php echo $row['p_price'];?> บาท <br>รหัสสินค้า : <?php echo $row['p_code'];?> </span>
									
								</div>
                            </li>
							<?php } ?>
                        </ul>
                    </div><!--end product-->
                </section><!--end section1-->	
				
				
            </div><!-- end indetail---->
	    </div><!-- end detail---->    
                
             
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