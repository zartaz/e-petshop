<?php
	require_once('connection.php');
		
		
		//Κατηγορίες
		$categories_query="select * from categories";
		mysqli_query($con,"SET NAMES 'utf8'");
		$categories_recordset=mysqli_query($con,$categories_query);
							
		//ΜΕταβολή  υποκατηγορίας
		if(isset($_POST['name']) && isset($_POST['alias'])
			&& !empty($_POST['name']) && !empty($_POST['alias'])){	
					$update_categories="update subcategories set 
										name='".$_POST['name']."' ,
										alias='".$_POST['alias']."',
										categories_id=".$_POST['catid']."
							where id like ".$_POST['id'];
					
					mysqli_query($con,"SET NAMES 'utf8'");
					$result=mysqli_query($con,$update_categories);
					if($result){
						$msg="Η μεταβολή της υποκατηγορίας ολοκληρώθηκε με επιτυχία!!";
					} else {
						$msg="Σφάλμα κατά την μεταβολή της κατηγορίας!!<hr/>".$update_categories;
					}
		}
		//Τέλος εισαγωγής κατηγορίας
			
				
		//Εκτύπωση κατηγορίας προς επεξεργασία
		$subcategories="select * from subcategories where id like ".$_REQUEST['id'];
		//$_GET['id']  περιέχει την κατηγορία που πάτησε κλικ ο χρήστης
		mysqli_query($con,"SET NAMES 'utf8'");
		$subcategories_recordset=mysqli_query($con,$subcategories);
		$subcategories_data=mysqli_fetch_assoc($subcategories_recordset);
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
			<h1>Υποκατηγορίες</h1>
			<?php
				if(isset($msg)){
					echo $msg;
				}	
			?>
			<h2>Μεταβολή υποκατηγορίας</h2>
			<a href="subcats_CRD.php">Επιστροφή</a>
			<form action="" method="post">
				
				<input type="hidden" name="id" value="<?=$subcategories_data['id']?>" />
				<label for="name">Όνομα υποκατηγορίας</label>
				<input type="text" name="name" value="<?=$subcategories_data['name']?>" />
				<label for="alias">Alias υποκατηγορίας</label>
				<input type="text" name="alias" value="<?=$subcategories_data['alias']?>" />
				<label for="alias">Κατηγορία</label>
				<?=$subcategories_data['categories_id']?>
				<select name="catid">
					<option value="">Επιλέξτε κατηγορία</option>
					<?php while($categories_record=mysqli_fetch_assoc($categories_recordset)){?>
						<option <?=($subcategories_data['categories_id']==$categories_record['id']?' selected ':'')?> 
						value="<?=$categories_record['id']?>">
						<?=$categories_record['id']?> / 
							<?=$categories_record['name']?>
						</option>
					<?php } ?>
				</select>
				<button type="submit">Μεταβολή </button>
			</form>			
		</body>
	</html>
	<?php
		mysqli_free_result($categories_recordset);
		mysqli_close($con);
	?>