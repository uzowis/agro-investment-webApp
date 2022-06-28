<?php 

session_start();
include('../controllers/db.php');
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
<!DOCTYPE HTML>
<html>
<head>
<title>Gozy Farms...Your food web </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<!--icons-css-->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-2.1.1.min.js"></script> 

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->

<!-- testimony pop -->
<style type="text/css">
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<!-- end testimony -->

<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['Nigeria - 2015'],
                    ['Ghana - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">
    
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post">
    <p>How do you feel about us</p>
    <p><textarea class="form-control" name="subject" style="height: 100px;"></textarea></p>
    <p>
    	&nbsp;
    </p>
    <p><button type="submit" name="test" class="btn btn-info btn-lg"> Submit</button></p>
    </form>
  </div>

</div>

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
<!--market updates updates-->
	<div class="blank">

    		<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
               	<div class="table-responsive">
               		<h2>INVESTMENTS</h2>
               		&nbsp;
    	<table class="table table-hover" style="height: relative;">
    			<thead>
			  <tr>
				<th>S.No</th>
				<th>Project</th>
				<th>Units</th>
				<th>Amount</th>
				<th>Cashout</th>
				<th>Dep. Date</th>
				<th>Due. Date</th>
				<th>Status</th>
			  </tr>
			  </thead>
			  <tbody>
				<?php 
					$query3 = mysqli_query($db, "SELECT * FROM deposits WHERE user_id='$id' ORDER BY id DESC");
					$result3 = mysqli_num_rows($query3);
					$counter = 0;
					while( $details3 = mysqli_fetch_assoc($query3)){

					?> 
					<tr class="odd">
						<?php if ($result3 > 0){ ?>
						<td> <?php $counter += 1; echo $counter;?></td>
						<td> <?php echo  $details3['project']; ?></td>
						<td> <?php echo $details3['units']; ?></td>
						<td> <?php echo 'N'.$details3['amount']; ?></td>
						<td> <?php echo 'N'.$details3['cashout']; ?></td>
						<td> <?php echo $details3['dep_date']; ?></td>
						<td> <?php echo $details3['due_date']; ?></td>
						<td><span class='badge' <?php if($details3['status'] ==="Pending") {echo 'style="background-color: orange;"';}elseif($details3['status'] ==="Approved"){echo 'style="background-color: green;"';} ?>> <?php echo $details3['status']; ?></span></td>
						
						<?php }else { ?>
					<td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr>
						<?php }};?>        

				
			  </tbody>
    
		</table>
    	</div>
    </div>
    </div>

        		
               
    </div>
    </div>
	
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
<!--main page chart layer2-->
<div class="chart-layer-2">
	

  <div class="clearfix"> </div>
</div>


</div>
<!--inner block end here-->
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
		         <li><a href="#"><i class="fa fa-user-plus"></i><span>Refer and Earn</span></a>
		         </li>
		         <li><a href="#" id="myBtn"><i class="fa fa-quote-left" aria-hidden="true"></i><span>Testimony</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<?php }?>
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
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<!-- testimony script -->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>                     