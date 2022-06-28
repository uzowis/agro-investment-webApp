<?php 
include('../controllers/db.php');
$query = mysqli_query($db, "SELECT * FROM deposits WHERE user_id = $id AND status = 'Approved'");
$query_acct = mysqli_query($db, "SELECT * FROM users WHERE id = $id ");
$acct = mysqli_fetch_array($query_acct);
$acct_no = $acct['acct_no'];
$rows = mysqli_num_rows($query);

$today = date('Y-m-d');


if($rows > 0){
	while($result = mysqli_fetch_array($query)){
		$name = $result['name'];
		$project = $result['project'];
		$amount = $result['amount'];
		$cashout = $result['cashout'];
		$units = $result['units'];
		$due_date = $result['due_date'];
		$dep_date = $result['dep_date'];
		$due_date_c = date_create($due_date);
		$dep_date_c = date_create($dep_date);
		
		//Get the Difference between Date of Investment and End of Investment Date
		
		$diff = date_diff($due_date_c, $dep_date_c);
		$duration = $diff->format("%a");
		

		if($project ==='Poultry' && $duration >= 0){
			mysqli_query($db, "INSERT INTO withdrawals (user_id, name, acct_no, project, amount, cashout, units, due_date, dep_date, status) VALUES ('$id', '$name', '$acct_no', '$project', '$amount', '$cashout', '$units', '$due_date', '$dep_date', 'Pending')");
			mysqli_query($db, "UPDATE deposits SET status = 'Completed' WHERE user_id = '$id' AND due_date = '$due_date' AND status = 'Approved'");
		}elseif($project ==='Rice' && $duration >= 0){
			mysqli_query($db, "INSERT INTO withdrawals (user_id, name, acct_no, project, amount, cashout, units, due_date, dep_date, status) VALUES ('$id', '$name', '$acct_no', '$project', '$amount', '$cashout', '$units', '$due_date', '$dep_date', 'Pending')");
			mysqli_query($db, "UPDATE deposits SET status = 'Completed' WHERE user_id = '$id' AND due_date = '$due_date' AND status = 'Approved'");
		}elseif($project ==='Pig' && $duration >= 0){
			mysqli_query($db, "INSERT INTO withdrawals (user_id, name, acct_no, project, amount, cashout, units, due_date, dep_date, status) VALUES ('$id', '$name', '$acct_no', '$project', '$amount', '$cashout', '$units', '$due_date', '$dep_date', 'Pending')");
			mysqli_query($db, "UPDATE deposits SET status = 'Completed' WHERE user_id = '$id' AND due_date = '$due_date' AND status = 'Approved'");
		}
}
	
}





?>