<?php 

session_start();

require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');
require('PHPMailer/src/Exception.php');

include('../controllers/db.php');
include ('../controllers/config.php');


$id = $_SESSION['id'];
$query = mysqli_query($db, "SELECT * FROM users WHERE id='$id'");


if(!isset($_SESSION['id'])){
	header('location: ../login');
}

if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['id']);
	header('location: ../login');
}



while ($result = mysqli_fetch_assoc($query)){


	


?>
<!DOCTYPE html>
<html style="overflow: hidden;"><head>
<title>Gozy Farms... Your food web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all">
<!--js-->
<script src="./js/jquery-2.js"></script> 
<!--icons-css-->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!--Google Fonts-->
<link href="./css/css_002.css" rel="stylesheet" type="text/css">
<link href="./css/css.css" rel="stylesheet" type="text/css">
<!--//skycons-icons-->
<!--pop up strat here-->
<script src="./js/jquery.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<!--pop up end here-->
</head>
<body>	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Gozy</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<div class="user-name">
													<p><h6 style="color: orange;"><?php echo $result['fname']. " ".$result['lname'] ?></h6></p>
													<span>User</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="index.php?logout='1'" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="price-block-main">
    	<div class="prices-head">
    		<h2>Investment Projects</h2>
    	</div>
    	<div class="price-tables">
	    		<div class="col-md-4 price-grid">
	    		   <div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Poultry Farms</h4>
		    				<h3><span class="usa-dollar">₦</span> 15,000<span class="per-month">/Unit</span></h3>
		    				<h5>For 120 days</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<img src="images/Poultry.jpg" width="100%">
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">		    			   
		    			   	  <a class="popup-with-zoom-anim" href="#small-dialog2">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Rice Processing</h4>
		    				<h3><span class="usa-dollar">₦</span> 120,000<span class="per-month">/Unit</span></h3>
		    				<h5>For 90 days</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<img src="images/rice1.jpg" width="100%">
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog3">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Pig Farm</h4>
		    				<h3><span class="usa-dollar">₦</span> 50,000<span class="per-month">/Unit</span></h3>
		    				<h5>For 120 days</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<img src="images/Pigs.jpg" width="100%">
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	<a class="popup-with-zoom-anim" href="#small-dialog1">Select Plan</a>
		    			</div>
		    		</div>
    	       </div>

    	       <!--<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Meat Processing</h4>
		    				<h3><span class="usa-dollar">₦</span> 150,000<span class="per-month">/Unit</span></h3>
		    				<h5>For Monthly/Yearly plan</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<img src="images/meats.jpg" width="100%">
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	<a class="popup-with-zoom-anim" href="#">Sold Out</a>
		    			</div>
		    		</div>
    	       </div>
			   -->

	    		
	    		
    	  <div class="clearfix"> </div>
    	  </div>
   </div>
</div>
<!--inner block end here-->
<!--pop-up-grid-->
				                 <div id="popup">
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
										<div class="alert alert-info" style="text-align: justify;">
											<b>Investment Procedure:</b> Make payment through Gozy Farms bank account shown below.
											<p><b>Bank Name:</b> United Bank of Africa (UBA)</p>
											<p><b>Account Number:</b> 1022553927</p>
											<p><b>Account Name:</b> Gozy Farms</p>
											 After payment has been deducted, kindly fill the form below and upload a screen shot of your payment proof.
										</div>
									 	<div class="payment-online-form-left">
											<form method="post" enctype="multipart/form-data">
												<h4><span class="shoppong-pay-1"> </span>Meat Processing Project</h4>
												<ul>
													<li><input name="names" class="text-box-dark" type="text" value="John Doe" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="email" type="text" value="uzowis@gmail.com" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" name="phone" type="text" value="08134120108" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="date" type="text" value="2021-06-06" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><select class="text-box-dark" name="duration" required="required">
														<option selected="selected" disabled="disabled" value="">--Select Cashout Plan--</option>
														<option value="1">Monthly Plan</option>
														<option value="12">Yearly Plan</option>
													</select></li>

													<li><input class="text-box-dark" type="number" placeholder="Units" name="unit" required="required"></li>
												
												</ul>
												<ul>
													<li><input id="formattedNumberField" class="text-box-light" type="text" placeholder="Amount" name="amnt" min="150000" required="required"></li>

													<li><input class="text-box-dark" type="file" name="image" required="required"></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Reset"></li>
													<li><input type="submit" name="meat"></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>
								 <div id="popup">
								 <div id="small-dialog2" class="mfp-hide">
									<div class="pop_up">
										<div class="alert alert-info" style="text-align: justify;">
											<b>Investment Procedure:</b> Make payment through Gozy Farms bank account shown below.
											<p><b>Bank Name:</b> United Bank of Africa (UBA)</p>
											<p><b>Account Number:</b> 1022553927</p>
											<p><b>Account Name:</b> Gozy Farms</p>
											 After payment has been deducted, kindly fill the form below and upload a screen shot of your payment proof.
										</div>
									 	<div class="payment-online-form-left">
											<form method="post" enctype="multipart/form-data" action="#" id="paymentForm">
												<h4><span class="shoppong-pay-1"> </span>Poultry Farm Project</h4>
												<ul>
													<li><input name="names" id="name" class="text-box-dark" type="text" value="<?php echo $result['fname']. " ".$result['lname'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" id="email" name="email" type="text" value="<?php echo $result['email'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="user_id" type="hidden" value="<?php echo $result['id'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" id="phone" name="phone" type="text" value="<?php echo $result['phone'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="date" type="text" value="<?php echo Date('Y-m-d') ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><select class="text-box-dark" name="plan" readonly="readonly">
														<option selected="selected" value="Poultry">Duration: 120 days </option>
													</select></li>

													<li><input class="text-box-dark" type="number" name="units" placeholder="Units"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-dark" id="amount" type="text" min="15000" placeholder="Amount(₦)" name="amnt" required></li>

													<li><input class="text-box-dark" type="file" title="select payment proof" name="image" ></li>
												
												</ul>
												
												<ul class="payment-sendbtns form-submit">
													<input type="submit" class="btn " style="background-color: #fc8213; color: white;" name="pay" value="PAY WITH CARD" >
													<li><input type="reset" value="Reset"></li>													
													<li><input type="submit" name="poultry" value="Submit"></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
									
								</div>
								</div>
								<div id="popup">
								 <div id="small-dialog1" class="mfp-hide">
									<div class="pop_up">
										<div class="alert alert-info" style="text-align: justify;">
											<b>Investment Procedure:</b> Make payment through Gozy Farms bank account shown below.
											<p><b>Bank Name:</b> United Bank of Africa (UBA)</p>
											<p><b>Account Number:</b> 1022553927</p>
											<p><b>Account Name:</b> Gozy Farms</p>
											 After payment has been deducted, kindly fill the form below and upload a screen shot of your payment proof.
										</div>
									 	<div class="payment-online-form-left">
											<form method="post" enctype="multipart/form-data" action="#">
												<h4><span class="shoppong-pay-1"> </span>Pig Farm Project</h4>
												<ul>
													<li><input name="names" class="text-box-dark" type="text" value="<?php echo $result['fname']. " ".$result['lname'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="email" type="text" value="<?php echo $result['email'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="user_id" type="hidden" value="<?php echo $result['id'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" name="phone" type="text" value="<?php echo $result['phone'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="date" type="text" value="<?php echo Date('Y-m-d') ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><select class="text-box-dark" name="plan" readonly="readonly">
														<option selected="selected" value="Pig">Duration: 120 days</option>
													</select></li>

													<li><input class="text-box-dark" type="number" name="units" placeholder="Units"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" min="50000" placeholder="Amount(₦)" name="amnt" required></li>

													<li><input class="text-box-dark" type="file" title="select payment proof" name="image" required></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<a class="btn " style="background-color: #fc8213; color: white;" href="#">PAY WITH CARD</a>
													<li><input type="reset" value="Reset"></li>
													<li><input type="submit" name="pig" value="Submit"></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>
								 <div id="popup">
								 <div id="small-dialog3" class="mfp-hide">
									<div class="pop_up">
										<div class="alert alert-info" style="text-align: justify;">
											<b>Investment Procedure:</b> Make payment through Gozy Farms bank account shown below.
											<p><b>Bank Name:</b> United Bank of Africa (UBA)</p>
											<p><b>Account Number:</b> 1022553927</p>
											<p><b>Account Name:</b> Gozy Farms</p>
											 After payment has been deducted, kindly fill the form below and upload a screen shot of your payment proof.
										</div>
									 	<div class="payment-online-form-left">
											<form method="post" enctype="multipart/form-data" action="#">
												<h4><span class="shoppong-pay-1"> </span>Rice Processing Project</h4>
												<ul>
													<li><input name="names" class="text-box-dark" type="text" value="<?php echo $result['fname']. " ".$result['lname'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="email" type="text" value="<?php echo $result['email'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="user_id" type="hidden" value="<?php echo $result['id'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" name="phone" type="text" value="<?php echo $result['phone'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="date" type="text" value="<?php echo Date('Y-m-d') ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><select class="text-box-dark" name="plan" readonly="readonly">
														<option selected="selected" value="Rice">Duration: 90 days</option>
													</select></li>

													<li><input class="text-box-dark" type="number" name="units" placeholder="Units"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" min="120000" placeholder="Amount(₦)" name="amnt" required></li>

													<li><input class="text-box-dark" type="file" title="select payment proof" name="image" required></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<a class="btn " style="background-color: #fc8213; color: white;" href="#">PAY WITH CARD</a>
													<li><input type="reset" value="Reset"></li>
													<li><input type="submit" name="rice" value="Submit"></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>
								 <div id="popup">
								 <div id="small-dialog1" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shoppong-pay-1"> </span>Pig Farm Project</h4>
												<ul>
													<li><input name="names" class="text-box-dark" type="text" value="<?php echo $result['fname']. " ".$result['lname'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="email" type="text" value="<?php echo $result['email'] ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" name="phone" type="text" value="<?php echo $result['phone'] ;?>" readonly="readonly" style="cursor: no-drop;"></li>
													<li><input class="text-box-dark" name="date" type="text" value="<?php echo Date('Y-m-d') ?>" readonly="readonly" style="cursor: no-drop;"></li>
												</ul>
												
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<li><input class="text-box-dark" type="text" value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}"></li>
													
												</ul>
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Reset"></li>
													<li><a href="#" class="order">Process order</a></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>

<?php } ?>								
<!--pop-up-grid-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>2021 Gozy Farms. All Rights Reserved | Design by  <a href="https://www.facebook.com/wisdom.uzochukwu.10" target="_blank">Techcrest Innovations</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
        <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Transactions</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-boletim" ><a href="investments.php">Investments</a></li>
			            <li id="menu-academico-boletim" ><a href="cashout.php">Withdrawals</a></li>
			            
		             </ul>
		        </li>
		        
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Packages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="#">Meat Shop</a></li>
			            <li id="menu-academico-boletim" ><a href="plan.php">Projects</a></li>
		             </ul>
		         </li>
		         <li><a href="referal.php"><i class="fa fa-user-plus"></i><span>Refer and Earn</span></a>
		         </li>
		         <li><a href="#" id="myBtn"><i class="fa fa-quote-left" aria-hidden="true"></i><span>Testimony</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
		<script src="js/jquery_002.js"></script>
		<script src="js/scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(255, 255, 255) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 234px; background-color: rgb(104, 174, 0); border: 0px none; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(255, 255, 255) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(104, 174, 0); border: 0px none; background-clip: padding-box; border-radius: 10px;"></div></div>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<!-- converting amount to number formart -->
<script type="text/javascript">
	var fnf = document.getElementById("formattedNumberField");
fnf.addEventListener('keyup', function(evt){
    var n = parseInt(this.value.replace(/\D/g,''),10);
    fnf.value = n.toLocaleString();
}, false);
</script>


<!--<script src="https://js.paystack.co/v1/inline.js"></script> -->
<script>
	/* const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);
	function payWithPaystack(e) {
	  e.preventDefault();
	  let handler = PaystackPop.setup({
		key: 'pk_test_76e499693f20addcc0962acd9bd83b612d95c0e4', // Replace with your public key
		email: document.getElementById("email").value,
		amount: document.getElementById("amount").value * 100,
		metadata: {
			custom_fields: [
				{	
					display_name: "Phone Number",
					variable_name: "phone",
					value: document.getElementById("phone").value
				},
				{	
					display_name: "Customer Name",
					variable_name: "name",
					value: document.getElementById("name").value
				}
			]
		},
		// label: "Optional string that replaces customer email"
		onClose: function(){
		  alert('Window closed.');
		},
		callback: function(response){
		  $.ajax({
			url: 'http://localhost/investment/users/verify_transaction?reference='+ response.reference,
			method: 'get',
			success: function (response) {
			  // the transaction status is in response.data.status
			}
		  });
		}
	  });
	  handler.openIframe();
	} */
</script>





                      
						
</body></html>