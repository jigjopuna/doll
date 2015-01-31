<?php 
    /*require_once('../include/connect.php');
	$numCate = trim($_POST['numCate']);
	
	$sql = "
			SELECT * 
			FROM tb_product p JOIN tb_dolltype t ON t.type_id = p.p_type
			WHERE t.type_id = '$numCate'
		   ";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$row_cat = mysql_fetch_array($result);*/
	 echo "
			<section class='items'> 
                	<div class='product'>
                    	<h1><strong><U><a href='content/product_type.php?p_id=2'>ตุ๊กตาวัฒนธรรมและการแต่งกาย(10)</a></U></strong></h1>
                    	<ul style='margin-top:10px;'>
							<li>
                            	<div class='product_image'>
									<a href='content/product_detail.php?p_id=01490' target='blank'>
										<img class='example-image' src='content/images/home/00977_woman.jpg' alt='การแต่งกายผู้หญิงไทย เครื่องปั้นดินเผา'/>
									</a>
								</div>
                                <div class='product_detail'> 
									<a href='content/product_detail.php?p_id=00977' target='blank'><span class='descript'>การแต่งกายผู้หญิงไทย</span></a><br> <span class='price'> ราคา ๒o บาท <br>รหัสสินค้า : 00977</span><br><a href='content/product_detail.php?p_id=00977' class='btn'>ใส่ตะกร้า</a>
								</div>
                            </li>
							
                        </ul>
                    </div><!--end product-->
                </section><!--end section2-->	
			";   	

?>