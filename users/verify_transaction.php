<?php 
if(isset($_GET['reference'])){
	$ref = $_GET['reference'];
	
	echo "Your Transaction was successful with Reference Number: " . $ref;
	
}
?>