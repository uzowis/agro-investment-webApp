<?php 
include('db.php');


// REGISTER USER
$reg_success = "";
if (isset($_POST['submit'])) {
	if(!empty($_POST['fname']) &&  (!empty($_POST['lname']))&&  (!empty($_POST['email'])) && (!empty($_POST['pass'])) &&  (!empty($_POST['phone']))&&  (!empty($_POST['acct_no'])) &&  (!empty($_POST['bank'])) ){
		
		// receive all input values from the form
	  $fname = mysqli_real_escape_string($db, $_POST['fname']);
	  $lname = mysqli_real_escape_string($db, $_POST['lname']);
	  $email = mysqli_real_escape_string($db, $_POST['email']);
	  $phone = mysqli_real_escape_string($db, $_POST['phone']);
	  $pass = mysqli_real_escape_string($db, $_POST['pass']);
	  $pass = md5($pass);
	  $acct_no= mysqli_real_escape_string($db, $_POST['acct_no']);
	  $bank= mysqli_real_escape_string($db, $_POST['bank']);
	  $reg_date = Date('Y-m-d');
	  
	  $query = mysqli_query($db, "INSERT INTO users(fname, lname, email, pass, phone, acct_no, bank, reg_date) VALUES ('$fname', '$lname', '$email', '$pass', '$phone', '$acct_no', '$bank', '$reg_date') ");
	  if($query){
		$reg_success = "Registration Was Successful";  
	  }else{
		  echo "An Error occurred".mysqli_error($db, $query);
	  }
	 
	}
  
  
}


// USER LOGIN
$login_error = ""; 
if (isset($_POST['login'])) {
	if(!empty($_POST['email']) &&  (!empty($_POST['pass'])) ){
		
			// receive all input values from the form
		 
		  $email = mysqli_real_escape_string($db, $_POST['email']);
		  $pass = mysqli_real_escape_string($db, $_POST['pass']);
		  $pass = md5($pass);
		 
		  
		  $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND pass='$pass'");
		  
		  if (mysqli_num_rows($query) > 0) {
			while($row = mysqli_fetch_array($query)){
				session_start();
				$_SESSION['id'] = $row['id'];
						
			}
			
			header('location: ../users/');
		  
		}else{
			$login_error = " Invalid Login Details, try again";
		}
	
	}
  
}


// Make Deposit(Invest)
if(isset($_POST['poultry']) || isset($_POST['rice']) || isset($_POST['pig']) ){
	if(!empty($_POST['names'])  && !empty($_POST['plan'])  && !empty($_POST['amnt'])  && !empty($_POST['units'])  && !empty($_POST['user_id'])  ){
		$name = mysqli_real_escape_string($db, $_POST['names']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$admin_email ='tmapros@gmail.com';
		$project = mysqli_real_escape_string($db, $_POST['plan']);	
		$amount = mysqli_real_escape_string($db, $_POST['amnt']);	
		$units = mysqli_real_escape_string($db, $_POST['units']);	
		$user_id = mysqli_real_escape_string($db, $_POST['user_id']);	
		$cashout = "";
		$dep_date = date('Y-m-d');
		$due_date = "";
		$file_tmp  = $_FILES['image']['tmp_name'];
		$file_name = $_FILES['image']['name'];
		
		
		if($project === "Rice"){
			$cashout = (0.17 * $amount) + $amount;
			$due_date = date('Y-m-d', strtotime($dep_date ." + 120 days"));
		}elseif($project === "Poultry"){
			$cashout = (0.25 * $amount) + $amount;
			$due_date = date('Y-m-d', strtotime($dep_date ." + 90 days"));
		}elseif($project === "Pig"){
			$cashout = (0.25 * $amount) + $amount;
			$due_date = date('Y-m-d', strtotime($dep_date ." + 120 days"));
		}
		
		
		
		
		$query = mysqli_query($db, "INSERT INTO deposits(user_id, name, email, project, amount, cashout, dep_date, due_date, units, status) VALUES ('$user_id', '$name', '$email', '$project', '$amount', '$cashout', '$dep_date', '$due_date', '$units', 'Pending')");
		if($query){
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->isSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->SMTPAuth = true;
			$mail->Host = 'gozyfarms.com';
			$mail->Port = 465;
			$mail->Username = 'admin@gozyfarms.com';
			$mail->Password = '@Amin12345..@';
			$mail->setFrom('admin@gozyfarms.com', "Gozy Farms");
			$mail->addAddress($email);
			//$mail->addAddress($admin_email);
			$mail->isHTML(true);
					
			
			$message ="Hello Admin,";
			$message .="<br><br>";
			$message .="<h3>A user just made a deposit, find details of transaction below:</h3><br>";
			$message .="<h3>DEPOSIT TRANSACTION:</h3><hr>";
			$message .="<b><h4>Depositor's Name : ".$name."</h4> </b>";
			$message .="<b><h4>Depositor's Email : ".$email."</h2> </b>";
			$message .="<b><h4>Project : ".$project."</h2> </b>";
			$message .="<b><h4>Amount Deposited : N".$amount."</h2></b><hr>";
			$message .="<h3>Kindly confirm payment and approve, attached below is prove of payment</h3>";
			$message .="<h4>Regards!!!</h4>";
			
			
			$mail->Subject = "DEPOSIT NOTIFICATION";
			$mail->Body = $message;
			$mail->AddAttachment($file_tmp, $file_name);
			
			//send the message, check for errors
			if (!$mail->send()) {
				echo "ERROR: " . $mail->ErrorInfo;
			}
						
			header("Location: ../users/investments.php");
		}else{
			echo "unsuccessful deposit". mysqli_error($db, $query);
		}
		
		
		
	}
}




/// PAYSTACK PAYMENT INTEGRATION

// INITIALIZE TRANSACTION

if(isset($_POST['pay'])){
	
	$name = mysqli_real_escape_string($db, $_POST['names']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$amount = (mysqli_real_escape_string($db, $_POST['amnt']));	
	
	
	$url = "https://api.paystack.co/transaction/initialize";
	$callback_url = "http://localhost/investment/users/callback.php";
	
	$fields = [
		'email' => $email,
		'amount' => $amount * 100,
		'name' => $name,
		'phone' => $phone
	];
	
	$fields_string = http_build_query($fields);
	
	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"Authorization: Bearer sk_test_cdf236d5efeca280932a7b3a34d906692a1b4402",
	"Cache-Control: no-cache",
	));

	//So that curl_exec returns the contents of the cURL; rather than echoing it
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

	//execute post
	$result = curl_exec($ch);
	$result = json_decode($result);
	
	if(!$result->status){
		echo "API returned error: ". $result->message;
	}
	
	header("Location :".$result->data->authorization_url);
			
}


  
?>
