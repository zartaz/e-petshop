<?php
	require_once('connection.php');
		
		
		
							
		//Εισαγωγή κατηγορίας
		if(isset($_POST['name']) && isset($_POST['alias'])
			&& !empty($_POST['name']) && !empty($_POST['alias'])){	
					$update_categories="update categories set name='".$_POST['name']."' ,alias='".$_POST['alias']."'
							where id like ".$_POST['id'];
					
					mysqli_query($con,"SET NAMES 'utf8'");
					$result=mysqli_query($con,$update_categories);
					if($result){
						$msg="Η μεταβολή της κατηγορίας ολοκληρώθηκε με επιτυχία!!";
					} else {
						$msg="Σφάλμα κατά την μεταβολή της κατηγορίας!!<hr/>".$update_categories;
					}
		}
		//Τέλος εισαγωγής κατηγορίας
			
				
		//Εκτύπωση κατηγορίας προς επεξεργασία
		$categories="select * from categories where id like ".$_REQUEST['id'];
		//$_GET['id']  περιέχει την κατηγορία που πάτησε κλικ ο χρήστης
		mysqli_query($con,"SET NAMES 'utf8'");
		$categories_recordset=mysqli_query($con,$categories);
		$categories_data=mysqli_fetch_assoc($categories_recordset);
		/*καλώ την mysqli_fetch_assoc χωρίς while γιατι το ερωτημα με κριτήριο το id 
		θα μου επιστρέφει πάντα μια εγγραφή */
		//τέλος εκτύπωσης κατηγοριών
?>
<!doctype html>
	<html>
		<head>
			<title>PHP + MySQL Insert</title>
			<meta charset="utf-8" />
		</head>
		<body>
			<h1>Κατηγορίες</h1>
			<?php
				if(isset($msg)){
					echo $msg;
				}	
			?>
			<h2>Μεταβολή κατηγορίας</h2>
			<a href="categories_CRD.php">Επιστροφή</a>
			<form action="" method="post">
				<input type="hidden" name="id" value="<?=$categories_data['id']?>" />
				<label for="name">Όνομα κατηγορίας</label>
				<input type="text" name="name" value="<?=$categories_data['name']?>" />
				<label for="alias">Alias κατηγορίας</label>
				<input type="text" name="alias" value="<?=$categories_data['alias']?>" />
				<button type="submit">Μεταβολή </button>
			</form>			
		</body>
	</html>
	<?php
		mysqli_free_result($categories_recordset);
		mysqli_close($con);
	?>