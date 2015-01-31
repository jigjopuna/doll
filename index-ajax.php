<!DOCTYPE html>
<html>
  <head>
	<meta name="google-site-verification" content="9jywhHjeO7mD2EIeu5cbKZGmiTWwE9M_BvXDNE8iy1M" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-language" content="en, th">
    <meta charset="utf-8">
	<meta name="keywords" content="ซื้อขายตุ๊กตาชาววัง ซื้อขายตุ๊กตาดินเผา ตุ๊กตาดินเผากรุงเทพ " />
    <meta name="description" content="ซื้อและขายตุ๊กตาชาววัง ศูนย์ตุ๊กตาชาววังบ้านบางเสด็จ ทำเป็นสินค้า OTOP ของขึ้นชื่อและมีเสียงของจังหวัดอ่างทอง ตุ๊กตาดินเผาผลิตด้วยความปราณีตด้วยฝีมือชาวบ้านที่มีความชำนาญ" />
    <title>ซื้อตุ๊กตาชาววัง ผลิตและขายตุ๊กตาดินเผา</title>
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
			var keepHieght = 0;
			$( window ).scroll(function() {
			    var winWidth = GetWidth();
				var winTop = $(window).scrollTop();
				var winHieght = $(window).height();
				var docHieght = $(document).height();
				var b = (winTop + winHieght) - (docHieght - 800);
				$('.winTop').text('winTop : '+winTop);
				$('.winHieght').text('winHieght : '+winHieght);
				$('.docHieght').text('docHieght : '+docHieght);
				$('.diff').text('diff : '+b);
				
				if( winWidth > 800 ){
					if(winTop + winHieght  > docHieght - 800){
						if(keepHieght>(winTop + winHieght)) return false;
						keepHieght = winTop + winHieght;
						sendAjax();
					}
				}else if( winWidth > 600 ){
					if(winTop + winHieght  > docHieght - 800){  
						sendAjax();
					}
				}else{
					if(winTop + winHieght  > docHieght - 1500){  
						sendAjax();
					}
				}
				 
			});
		});//end ready
		
		function sendAjax(){ 
			var a = $('.indetail > section.items').length;
			if (a>10) return false;
			$('.numlist').text('numlist : '+a); 
			var url = "sys/ajax_product.php";
			var param = "numCate="+a;
			$.post(url, param, function(data){
				$('.indetail').append(data);
			});//end post ajax
		}//end fn sendAjax
		
		function GetWidth(){
			 var x = 0;
			 if (self.innerHeight)
			 {
			   x = self.innerWidth;
			 }
			 else if (document.documentElement && document.documentElement.clientHeight)
			 {
			   x = document.documentElement.clientWidth;
			 }
			 else if (document.body)
			 {
			   x = document.body.clientWidth;
			 }
			 return x;
		 }//end fn GetWidth
    </script>
 </head>
  <body>
    <?php include('include/inc_menu_mobile.php');?>
    <div id="wrapper">
      <?php include('include/inc_contact.php');?>
      <header>
			<?php include('include/inc_menu.php');?>
			<div id="corousel">
				<div id="slides">
                	<img src="content/images/headder/slide02.jpg">
                    <img src="content/images/headder/slide03.jpg" alt="โลโก้ ตุ๊กตาชาววัง">
                </div>
			</div><!---end corousel---->
      </header>
		<div class="detail">
			<div class="indetail">			
				<!--<section> 
                	<div class="product">        	
						<div class="texts">
						<h1><strong><U>แนะนำร้านขายตุ๊กตาชาววัง</U></strong></h1>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตุ๊กตาชาววังมีท่วงทาลีลาอ่อนช้อย   สวมใส่เสื้อผ้างดงามปราณีตด้วยผลงานของชาวบ้าน
							บ่งบอกถึงคุณค่าแห่งศิลปวัฒนธรรมไทย เรื่องราวมากมายที่มีมาแต่โบราณกาล
							ตุ๊กตาชาวไม่ได้เป็นแค่ก้อนดินเหนียวธรรมดาๆ แต่เป็นสัญลักษณ์ที่บอกถึงคุณค่าแห่งวัฒนธรรมไทย
							ทั้งวิถีชีวิต การแต่งกาย ชนบธรรมเนียมประเพณีของชาววังอย่างครบถ้วนสมบูรณ์ทางเว็บชาววัง
							จึงจัดตั้งขึ้นมาจัดหน่ายตุ๊กตาชาววังของชาวไทย เพื่อให้สินค้าของคนไทย ของชาวบ้านได้เแพร่หลายออกไป และยังทำให้ชาวบ้านมีอาชีพหลักให้การเลี้ยงชีพ จึงมั่นใจได้ว่าสินค้าตุ๊กตาชาววังมีคุณภาพสูงเนื่องจากประดิษฐ์ด้วยความปราณีต เหมาะกับเป็นสินค้าสะสม หรือ ตกแต่งในบ้านเรือน นอกจากยังสามารถเป็นของฝากได้อีกด้วย และมากไปกว่านั้นทำให้เราสามารถอนุรักษ์าความเป็นไทยและเผยแพร่ข้อมูลความรู้ให้คนรุ่นหลังสืบต่อไป 
						</p>
						</div>
                    </div>
                </section>-->
				<!--<section> 
					<div class="product">        	
						<div class="texts">
						<h1><strong><U>วิธีการสั่งซื้อ</U></strong></h1>
                        <p>
						   -โอนเงินผ่าน ธนาคาร กสิกรไทย สาขา ออลซีซั่นเพลส กรุงเทพมหานคร <br>
						   -เลขที่บัญชี : 617-2-12903-8  <br>
						   -ชื่อบัญชี นายภูริชญ์ โชคอุตสาหะ (Purit Chokeutsaha)<br>
						   -เมื่อชำระเงินแล้วกรุณาติดต่อแจ้งให้ผมทราบด้วย ผ่านทางไหนก็ได้ครับ <br>
						       &nbsp;&nbsp;&nbsp;&nbsp;*line (phurits)<br>
							   &nbsp;&nbsp;&nbsp;&nbsp;*โทรศัพท์ (084-0137350)<br>
						       &nbsp;&nbsp;&nbsp;&nbsp;*อีเมล์ phurit_18@hotmail.com<br>
						   -จากนั้นจะให้รหัสติดตามสินค้า (Tracking number) เพื่อติดตามสินค้า
						</p>
						</div>
                    </div>
                </section>-->		
				
				<!--<section> 
					<div class="product">        	
						<div class="texts">
						<h1><strong><U>ส่งสินค้า</U></strong></h1>
                        <p>
						   - ส่งผ่านไปรษณีย์ไทย วันละ 1 ครั้ง เวลา 8.30 น. <br>
						   - ค่าจัดส่งลงทะเบียน  30 บาท<br>
						   -  ค่าจัดส่ง EMS  50 บาท<br>
						   - ซื้อสินค้าครบ  500 บาท ฟรีค่าจัดส่งแบบลงทะเบียน<br>
						   - ซื้อสินค้าครบ  1,000 บาท ฟรีค่าจัดส่ง EMS<br>
						</p>
						</div>
                    </div>
					
                </section>-->	
				<p class="winTop"></p>
				<p class="winHieght"></p>
				<p class="docHieght"></p>
				
				<p class="numlist"></p>
				<section class="items"> 
                	<div class="product">
                    	<h1><strong><U>ตุ๊กตาเครื่องปั้นดินเผา สินค้าใหม่</U></strong></h1>
                        <span>ตุ๊กตามาใหม่</span>
                    	<ul style="margin-top:10px;">
                        	
                             <li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01231-AEC-MS.jpg" data-lightbox="mala_set"  data-title="<a href='content/product_detail.php?p_id=01231'>ตุ๊กตาอาเซียน มาเลเซีย </a>"><img class="example-image" src="content/images/home/01231-AEC-MS.jpg" alt="ตุ๊กตาอาอาเซียน มาเลเซีย" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="content/product_detail.php?p_id=01231" target="blank">
										<span class="descript">ตุ๊กตาอาเซียน มาเลเซีย</span></a><br> 
										<span class="price"> ราคา ๕oo บาท <br>รหัสสินค้า : 01231</span>
									<br>
									<a class="btn" href="content/product_detail.php?p_id=01231">ใส่ตะกร้า</a>
								</div>
                            </li>
							<li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01233-AEC-IDS.jpg" data-lightbox="indo_set"  data-title="<a href='content/product_detail.php?p_id=01233'>ตุ๊กตาอาเซียน อินโดนีเซีย </a>"><img class="example-image" src="content/images/home/01233-AEC-IDS.jpg" alt="ตุ๊กตาอาอาเซียน อินโดนีเซีย" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="content/product_detail.php?p_id=01233" target="blank"><span class="descript">ตุ๊กตาอาเซียน อินโดนีเซีย</span></a><br> <span class="price"> ราคา ๕oo บาท <br>รหัสสินค้า : 01233</span><br><a href="content/product_detail.php?p_id=01233" class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
                            <li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01234-AEC-PM.jpg" data-lightbox="pama_set"  data-title="<a href='content/product_detail.php?p_id=01234'>ตุ๊กตาอาเซียน พม่า </a>"><img class="example-image" src="content/images/home/01234-AEC-PM.jpg" alt="ตุ๊กตาอาอาเซียน พม่า" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="content/product_detail.php?p_id=01234" target="blank"><span class="descript">ตุ๊กตาอาเซียน พม่า</span></a><br> <span class="price"> ราคา ๕oo บาท <br>รหัสสินค้า : 01234</span><br><a href="content/product_detail.php?p_id=01234" class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
                            <li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01235-AEC-KPC.jpg" data-lightbox="kaman_set"  data-title="<a href='content/product_detail.php?p_id=01235'>ตุ๊กตาอาเซียน กัมพูชา </a>"><img class="example-image" src="content/images/home/01235-AEC-KPC.jpg" alt="ตุ๊กตาอาอาเซียน กัมพูชา" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="content/product_detail.php?p_id=01235" target="blank"><span class="descript">ตุ๊กตาอาเซียน กัมพูชา</span></a><br> <span class="price"> ราคา ๕oo บาท <br>รหัสสินค้า : 01235</span><br><a href="content/product_detail.php?p_id=01235" class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
							<li>
                            	<div class="product_image">
									<a class="example-image-link" href="content/images/large/01237-AEC-LOS.jpg" data-lightbox="loas_set"  data-title="<a href='content/product_detail.php?p_id=01237'>ตุ๊กตาอาเซียน ลาว </a>"><img class="example-image" src="content/images/home/01237-AEC-LOS.jpg" alt="ตุ๊กตาอาอาเซียน ลาว" />
									</a>
								</div>
                                <div class="product_detail"> 
									<a href="content/product_detail.php?p_id=01237" target="blank"><span class="descript">ตุ๊กตาอาเซียน ลาว</span></a><br> <span class="price"> ราคา ๕oo บาท <br>รหัสสินค้า : 01237</span><br><a href="content/product_detail.php?p_id=01237" class="btn">ใส่ตะกร้า</a>
								</div>
                            </li>
							<li>
                            	<div class="product_image">
									<a href="content/product_type.php?p_id=3"><img class="example-image" src="content/images/more.jpg" alt="ตุ๊กตาชาววัง สินค้า" />
									</a>
								</div>
                                
                            </li>
							
                        </ul>
                    </div><!--end product-->
                </section><!--end section1-->	
				<p class="diff"></p>
            </div><!-- end indetail-->
	    </div><!-- end detail-->    
		
		<?php include('include/inc_sitemap.php');?>
		
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