<?php
require_once('connection.php');

//Εισαγωγή υποκατηγορίας
if (
	isset($_POST['name']) && isset($_POST['alias']) && isset($_POST['catid'])
	&& !empty($_POST['name']) && !empty($_POST['alias']) && !empty($_POST['catid'])
) {

	$subcat_insert = "insert into subcategories (name,alias,categories_id)
								values(
									'" . $_POST['name'] . "',
									'" . $_POST['alias'] . "',
									" . $_POST['catid'] . "
									)";
	mysqli_query($con, "SET NAMES 'utf8'");
	$result = mysqli_query($con, $subcat_insert);
	if ($result) {
		$msg = "Η εισαγωγή της υποκατηγορίας ολοκληρώθηκε με επιτυχία!!";
	} else {
		$msg = "Σφάλμα κατά την εισαγωγή της υποκατηγορίας!!<hr/>" . $subcat_insert;
	}
}
//Τέλος εισαγωγής κατηγορίας


//διαγραφή υποκατηγορίας
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$delete_categories = "delete from subcategories where id=" . $_GET['id'];
	$result = mysqli_query($con, $delete_categories);
	if ($result) {
		$msg = "Η διαγραφη της υποκατηγορίας ολοκληρώθηκε με επιτυχία!!";
	} else {
		$msg = "Σφάλμα κατά τη διαγραφή της υποκατηγορίας!!<hr/>" . $cat_insert;
	}
}
//Τέλος διαγραφής

//Κατηγορίες
$categories_query = "select * from categories";
mysqli_query($con, "SET NAMES 'utf8'");
$categories_recordset = mysqli_query($con, $categories_query);

//Εκτύπωση υποκατηγοριών
$subcategories = "select  categories.name as catname,
								categories.alias as catalias,
								subcategories.alias as subcatalias, 
								subcategories.name as subcatname,
								subcategories.id as subcatid 
						from subcategories 
						inner join categories on subcategories.categories_id=categories.id";
mysqli_query($con, "SET NAMES 'utf8'");
$subcategories_recordset = mysqli_query($con, $subcategories);
//τέλος εκτύπωσης υποκατηγοριών
?>
<!doctype html>
<html>

<head>
	<title>PHP + MySQL Insert</title>
	<meta charset="utf-8" />
	<style>
		.btn {
			text-decoration: none;
			color: #000;
			border: solid 1px;
			display: inline-block;
			padding: 10px;
		}

		.btn-danger {
			background-color: red;
		}

		.btn-normal {
			background-color: blue;
		}
	</style>
</head>

<body>
	<h1>Προϊόντα</h1>
	<a href="index.php">Αρχικη</a>
	<?php
	if (isset($msg)) {
		echo $msg;
	}
	?>
	<h2>Εισαγωγή προιόντων</h2>
	<form action="" method="post">
		<label for="name">Όνομα προιοντος</label>
		<input type="text" name="name" />
		<label for="alias">Alias προιοντος</label>
		<input type="text" name="alias" />
		<label for="alias">Κατηγορία</label>
		<!-- εκτύπωση κατηγοριών σε Drop down list -->
		<select name="catid">
			<option value="">Επιλέξτε κατηγορία</option>
			<?php while ($categories_record = mysqli_fetch_assoc($categories_recordset)) { ?>
				<option value="<?= $categories_record['id'] ?>">
					<?= $categories_record['name'] ?>
				</option>
			<?php } ?>
		</select>
		<button type="submit">Εισαγωγή </button>
	</form>
	<h2>Προβολή προιόντων</h2>
	<table width="600" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>ALIAS</th>
				<th>Κατηγορία</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($subcategories_record = mysqli_fetch_assoc($subcategories_recordset)) { ?>
				<tr>
					<td><?= $subcategories_record['subcatid'] ?></td>
					<td><?= $subcategories_record['subcatname'] ?></td>
					<td><?= $subcategories_record['subcatalias'] ?></td>
					<td><?= $subcategories_record['catname'] ?></td>
					<td><a class="btn btn-danger" href="?id=<?= $subcategories_record['subcatid'] ?>">Διαγραφή</a></td>
					<td><a class="btn btn-normal" href="subcat_U.php?id=<?= $subcategories_record['subcatid'] ?>">Επεξεργασία</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>
<?php
mysqli_free_result($categories_recordset);
mysqli_close($con);
?>