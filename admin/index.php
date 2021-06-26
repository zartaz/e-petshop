<?php
require_once('connection.php');

//2o βήμα, εκτέλεση του ερωτήματος της SQL
$categories_query = "select * from categories";
mysqli_query($con, "set names 'utf8'");
$categories_recordset = mysqli_query($con, $categories_query);

// 
$products_query = "select * from products";
mysqli_query($con, "set names 'utf8'");
$products_recordset = mysqli_query($con, $products_query);

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

		nav ul li a {
			display: block;
			padding: 10px;
			background-color: #eee;
			border-bottom: dotted solid;
			color: #000;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<h1>Καλως ορισες στο Administration Panel του Petshop</h1>
	<ul>
		<li>
			<a href="categories_CRD.php">Επεξεργασια κατηγοριων</a>
		</li>
		<li>
			<a href="subcats_CRD.php">Επεξεργασια προιόντων</a>
		</li>
		<li>
			<a href="index_subcats.php">Αναζήτηση-προβολή προιόντων</a>
		</li>
	</ul>
	<nav>
		<ul>
			<?php
			//3o βήμα , εκτύπωση εγγραφών $categories_recordset		
			while ($categories_record = mysqli_fetch_assoc($categories_recordset)) { ?>
				<li>
					<a href="<?= dirname($_SERVER["PHP_SELF"]) ?>/<?= $categories_record['alias'] ?>.html">
						<?= $categories_record['name'] ?>
					</a>
				</li>
			<?php } ?>
		</ul>
		<select>
			<?php
			mysqli_data_seek($categories_recordset, 0);
			//στέλνει τον νοητό δείκτη του recordset στην πρώτη εγγραφή
			//3o βήμα , εκτύπωση εγγραφών $categories_recordset		
			while ($categories_record = mysqli_fetch_assoc($categories_recordset)) { ?>
				<option value="<?= $categories_record['id'] ?>">
					<?= $categories_record['name'] ?>
				</option>
			<?php } ?>
		</select>
	</nav>

	<h2>Προϊόντα</h2>
	<?php
	//3o βήμα , εκτύπωση εγγραφών $products_recordset		
	while ($products_record = mysqli_fetch_assoc($products_recordset)) { ?>
		<div>
			<?= $products_record['sku'] ?> <br />
			<?= $products_record['name'] ?> <br />
			<?= $products_record['price'] ?> <br />
			<?= $products_record['offer-price'] ?> <br />
		</div>
	<?php } ?>

</body>

</html>