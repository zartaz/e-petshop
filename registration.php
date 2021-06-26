<?php
if (empty($_POST)) {
	header("location:register.php");
	die();
}
// else {
//     echo '<pre>';
//     var_dump($_POST);
//     echo '</pre>';
// }
require_once('./partials/database/connection.php');
?>

<!doctype html>
<html>

<head>
	<title>Εγγραφή νέου Χρήστη</title>
	<meta charset="utf-8" />
	<!-- <style>
				body{
					background-color: black;
				    color: rgb(251, 255, 0);
    				font: 2em sans-serif;
				}
			</style> -->

</head>

<body>
	<h1>Registration validation</h1>
	<div>
		<?php
		$onoma = $_POST['fname'];
		$eponimo = $_POST['lname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$repass = $_POST['repassword'];
		$tilefono = $_POST['phone'];
		$diefthinsi = $_POST['Address'];
		$poli = $_POST['City'];
		$taxkodikas = $_POST['Postcode'];
		$xwra = $_POST['Country'];
		$sundromi = $_POST['subscribe'];
		$apodoxi = $_POST['pp'];
		$eml = $onm = $epnm = $psw = FALSE;
		$br = '</br>';
		if (empty($onoma)) {
			echo "Δε δώσατε Ονομα" . $br;
		} elseif (preg_match('/^[a-zA-Z\x{0386}-\x{03CE}\s]*$/u', $onoma)) {
			$onm = TRUE;
		} else {
			echo 'Λάθος μορφή ονόματος' . $br;
		}

		if (empty($eponimo)) {
			echo "Δε δώσατε Επωνυμο" . $br;
		} elseif (preg_match('/^[a-zA-Z\x{0386}-\x{03CE}\s]*$/u', $eponimo)) {
			$epnm = TRUE;
		} else {
			echo 'Λάθος μορφή επωνυμου' . $br;
		}

		if (empty($email)) {
			echo "Δε δώσατε Email" . $br;
		} elseif (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,20})$/', $email)) {
			$eml = TRUE;
		} else {
			echo "Λάθος μορφή Email" . $br;
		}

		if (empty($pass)) {
			echo "Δε δώσατε Κωδικό" . $br;
		} elseif (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $pass)) {
			echo "Μη αποδεκτός κωδικός <br />Ο κωδικός πρέπει να περιέχει τουλαχιστον 8 χαρακτηρες, έναν Αριθμό, έναν πεζό χαρακτήρα, έναν κεφαλαίο και ένα σύμβολο @#-_$%^&+=§!? " . $br;
		} elseif (strcmp($pass, $repass) != 0) {
			echo "Oι κωδικοι δεν ταιριαζουν Η το πεδιο ειναι κενο" . $br;
		} else {
			$psw = TRUE;
		}
		if ($onm && $epnm && $eml && $psw) {
			$cus_insert = "INSERT INTO `customers`(`First Name`, `Last Name`, `Address`, `Zip`, `City`, `Country`, `Phone`, `Email`, `syndromi`, `kodikos`) VALUES (
                            '" . $onoma . "','" . $eponimo . "','" . $diefthinsi . "','" . $taxkodikas . "','" . $poli . "','" . $xwra . "',
                            '" . $tilefono . "','" . $email . "','" . $sundromi . "','" . $pass . "'
                        )";
			mysqli_query($con, "SET NAMES 'utf8'");
			$result = mysqli_query($con, $cus_insert);
			if ($result) {
				$msg = "Η εισαγωγή της κατηγορίας ολοκληρώθηκε με επιτυχία!!";
			} else {
				$msg = "Σφάλμα κατά την εισαγωγή της κατηγορίας!!<hr/>" . $cus_insert;
			}
			echo $msg;
		} else {
			echo $br . "Η εγγραφη ηταν ανεπιτυχης, σας επιστρεφω στην φορμα για να διορθωστε τα απαραιτητα πεδια";
			// header("refresh:7; url=register.php");
		}
		?>
	</div>
</body>

</html>