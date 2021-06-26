<?php
		//Σύνδεση στη MySQL
		$host="localhost"; 	//localhost=όταν η mysql τρέχει στο ίδιο server με την PHP, διαφορετικά βάζουμε την IP του Server
		$username="lefkoula"; //"root"
		$password="6p8Gl8PYKOwK8f4W"; //""
		$db="petshop";

		$con=@mysqli_connect($host,$username,$password,$db);//δημιουργεί ενα αντικείμενο σύνδεσης στη MySQL
		//το @ απενεργοποιεί τα warning & errors του Apache
		if(!$con){ //ελέγχουμε αν το $con έχει τιμή False
			echo "Παρουσιάστηκε σφάλμα σύνδεσης στη MySQL. Παρακαλώ δοκιμάστε αργότερα!!";
			die();
        }
?>