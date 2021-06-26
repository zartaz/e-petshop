<?php
//1o βήμα , συνδεση της php με την MySQL
	$host="localhost";//localhost ή IP
	$username="lefkoula"; // ή root
	$password="6p8Gl8PYKOwK8f4W";
	$db="petshop";	
	
	$con=@mysqli_connect($host,$username,$password,$db);
	//mysqli_connect επιστρέφει ένα connection object ή αν αποτύχει να συνδεθεί επιστρ΄φει False 
	if(!$con){
		echo "Η σελίδα δεν είναι διαθέσιμη για τεχνικούς λόγους. Παρακαλώ 
				δοκιμάστε αργότερα!!";
		die();
	}
?>