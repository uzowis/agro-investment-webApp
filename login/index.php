<?php 
include('../controllers/db.php');
include('../controllers/config.php');




?>






<!DOCTYPE html>
<html>

<!-- Mirrored from www.Gozyfarms.com/Gozyversion/login/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 08:33:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Gozy Farms... Your food web</title>
	<link rel="stylesheet" type="text/css" href="logstyle.css">
	<link href="../users/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="../users/js/bootstrap.js" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript" src="script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body{
			background-image: url('../images/bg_login.jpg'); 
			background-size: cover ; 
			padding: 0px; 
			margin:0px;
		}
	</style>
</head>
<body>


<div class='container' style="">
  <div class='container_inner'>
    <div class='container_inner__login'>
      <div class='login'>
        <div class='login_profile'>
          <img class='logo' src='../images/logo.png' width='80px'>
        </div>
        <div class='login_desc'>
          <h3>
            Welcome back to
            <span style="color: Yellow">Gozy Farms</span>
          </h3>
			<?php 
				if($login_error != ""){?>
				<div class="alert alert-danger">
				<strong>Login Failed!</strong> Invalid login details. 
				</div>
			<?php } ?>
        </div>
        <div class='login_inputs'>
          <form method="post">
            <input placeholder='Your email' required='required' name="email" type='email'>
            &nbsp;
            <input placeholder='Your password' required='required' name="pass" type='password'>

            <input type='submit' name="login" class="btn btn-success btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Logging in..." value='Log in'>
          </form>
          <div class='forgotten' style='color:white;'>
            <a href='#'>Forgotten your password?</a> <a href='../'>Sign Up</a>
          </div>
        
          <div class='login_check'>
            <br/>Logging in to your client area <br/>
            <span>please wait</span>
          </div>
        </div>
      </div>
      <div class='tick'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/vtick.svg'>
      </div>
    </div>
  </div>
</div>
<!-- button loader onclick -->
<script>

$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 100000);
});

</script>
<!-- end of button loader -->
</body>

<!-- Mirrored from www.Gozyfarms.com/Gozyversion/login/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 08:33:38 GMT -->
</html>