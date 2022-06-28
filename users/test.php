<?php 
$today = date('Y-m-d');

$another_day = '2021-06-01';

$due = date_create($today);
$start = date_create($another_day);

$diff = date_diff($due, $start);
$duration = $diff->format('%a');


if($duration >= 7){
	echo "Hurray, Investment is due";
};

?>