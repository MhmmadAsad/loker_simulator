<?php
include "config.php";

session_start();

$i = mysqli_escape_string($conn,$_POST['i']);
$f = mysqli_escape_string($conn,$_POST['f']);

while(true) {

	// Serial Number //
	$serial_number = trim($i);

	// Flag //
	$flag = trim($f);

	// Epoctime //
	$ts = trim(time());

	// Timestamp //
	$tp = trim(date('Y-m-d'));

	// Mengirim Data Diatas Ke Url Lain //
	file_get_contents('http://localhost/loker_monita?i='.$serial_number.'&f='.$flag.'&ts='.$ts.'&tp='.$tp);

	sleep(100);

}


?>