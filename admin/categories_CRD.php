<?php
require_once('connection.php');

//Εισαγωγή κατηγορίας
if (
	isset($_POST['name']) && isset($_POST['alias'])
	&& !empty($_POST['name']) && !empty($_POST['alias'])
) {

	$cat_insert = "insert into categories (name,alias)
								values(
									'" . $_POST['name'] . "',
									'" . $_POST['alias'] . "'
								)";
	mysqli_query($con, "SET NAMES 'utf8'");
	$result = mysqli_query($con, $cat_insert);
	if ($result) {
		$msg = "Η εισαγωγή της κατηγορίας ολοκληρώθηκε με επιτυχία!!";
	} else {
		$msg = "Σφάλμα κατά την εισαγωγή της κατηγορίας!!<hr/>" . $cat_insert;
	}
}
//Τέλος εισαγωγής κατηγορίας

$var1 = null;
$var2 = "";
$var3;

//διαγραφή κατηγορίας
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$delete_categories = "delete from categories where id=" . $_GET['id'];
	$result = mysqli_query($con, $delete_categories);
	if ($result) {
		$msg = "Η διαγραφη της κατηγορίας ολοκληρώθηκε με επιτυχία!!";
	} else {
		$msg = "Σφάλμα κατά τη διαγραφή της κατηγορίας!!<hr/>" . $cat_insert;
	}
}
//Τέλος διαγραφής


//Εκτύπωση κατηγοριών
$categories = "select * from categories";
mysqli_query($con, "SET NAMES 'utf8'");
$categories_recordset = mysqli_query($con, $categories);
//τέλος εκτύπωσης κατηγοριών
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
	<h1>Κατηγορίες</h1>
	<a href="index.php">Αρχικη</a>
	<?php
	if (isset($msg)) {
		echo $msg;
	}
	?>
	<h2>Εισαγωγή κατηγορίας</h2>
	<form action="" method="post">
		<label for="name">Όνομα κατηγορίας</label>
		<input type="text" name="name" />
		<label for="alias">Alias κατηγορίας</label>
		<input type="text" name="alias" />
		<button type="submit">Εισαγωγή </button>
	</form>
	<h2>Προβολή κατηγοριών</h2>
	<table width="600" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>ALIAS</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($categories_record = mysqli_fetch_assoc($categories_recordset)) { ?>
				<tr>
					<td><?= $categories_record['id'] ?></td>
					<td><?= $categories_record['name'] ?></td>
					<td><?= $categories_record['alias'] ?></td>
					<td><a class="btn btn-danger" href="categories_CRD.php?id=<?= $categories_record['id'] ?>">Διαγραφή</a></td>
					<td><a class="btn btn-normal" href="categories_U.php?id=<?= $categories_record['id'] ?>">Επεξεργασία</a></td>
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