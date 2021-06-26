<?php
if (isset($_GET['catalias']) || isset($_POST['keyword'])) {
	include("connection.php");
	$products_query = "select products.alias as prodalias,categories.alias as calias, subcategories.alias as scalias,products.name as prodname,products.price as prodprice,products.sku as prodsku,
							products.`offer-price` as prodoffer
						from products
						inner join subcategories on products.subcategories_id=subcategories.id
						inner join categories on categories.id=subcategories.categories_id";
	if (isset($_GET['subalias'])) {
		$products_query .= " where subcategories.alias like '" . $_GET['subalias'] . "'";
	}
	if (isset($_GET['catalias'])) {
		$products_query .= " where categories.alias like '" . $_GET['catalias'] . "'";
	}
	if (isset($_POST['keyword'])) {
		$products_query .= " where products.name like '%" . $_POST['keyword'] . "%'
								or products.`short-description` like '%" . $_POST['keyword'] . "%'
								or products.`long-description` like '%" . $_POST['keyword'] . "%'";
	}
	/*
		%INTEL σημαίνει όλα τα προιόντα που το όνομα τους τελειώνει σε intel 
		INTEL% σημαίνει όλα τα προιόντα που το όνομα τους ξεκινάει σε intel 
		%INTEL% σημαίνει όλα τα προιόντα που το όνομα τους οπουδήποτε ανάμεσα 
		*/
	mysqli_query($con, "SET NAMES 'utf8'");
	$products_recordset = mysqli_query($con, $products_query);
	//echo $products_query;
} else {
	header("location:index_subcats.php");
	die();
}
?>

<!doctype html>
<html>

<head>
	<title>PHP + MySQL</title>
	<meta charset="utf8" />
	<style>
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}
	</style>
</head>

<body>
	<h1>Products</h1>
	<a href="index_subcats.php">ΑΡχική</a>
	<?php
	//3o βήμα , εκτύπωση εγγραφών $products_recordset		
	while ($products_record = mysqli_fetch_assoc($products_recordset)) { ?>
		<div>
			<?= $products_record['prodsku'] ?> <br />
			<a href="<?= dirname($_SERVER["PHP_SELF"]) ?>/<?= $products_record['calias'] ?>/<?= $products_record['scalias'] ?>/<?= $products_record['prodalias'] ?>"><?= $products_record['prodname'] ?></a><br />
			<?= $products_record['prodprice'] ?> <br />
			<?= $products_record['prodoffer'] ?> <br />
		</div>
	<?php } ?>
</body>

</html>