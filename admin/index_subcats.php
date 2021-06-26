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
	<meta charset="utf-8" />
	<style>
		body {
			font-family: Helvetica, sans serif;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		#cat_menu {

			width: 200px;
		}

		#cat_menu li {
			position: relative;
		}

		#cat_menu ul {
			position: absolute;
			top: 0;
			left: 200px;
			display: none;
			width: 200px;
		}

		#cat_menu a {
			color: #000;
			text-decoration: none;
			display: block;
			background-color: #eee;
			padding: 10px 10px;
			border-bottom: dotted 1px #000;
		}

		#cat_menu li:hover ul {
			display: block;
		}

		#cat_menu a:hover {
			background-color: #ccc;
		}
	</style>
</head>

<body>
	<h1>PHP + MySQL</h1>
	<form action="prodlist.php" method="post">
		<input type="search" name="keyword" placeholder="Αναζήτηση..." />
		<button type="submit">Αναζήτηση</button>
	</form>
	<h2>Κατηγορίες προιόντων</h2>
	<ul id="cat_menu">
		<?php
		//3o εκτύπωση εγγραφών από το $categories_recordset
		while ($categories_record = mysqli_fetch_assoc($categories_recordset)) {
			//mysqli_fetch_assoc διαβάζει ένα record απο το recordset $categories_recordset και το επιστρ΄φει σε μορφή array της PHP

			//eshop subcategories
			$subcategories_query = "SELECT * FROM subcategories where categories_id = " . $categories_record['id'];
			mysqli_query($con, "set names 'utf8'"); //ορίζει encoding  utf8 στα αποτελέσματα της MySQL
			$subcategories_recordset = mysqli_query($con, $subcategories_query); //εκτελεί ενα ερω΄τημα προς την MySQL kai επιστρέφει ενα Recordset
		?>
			<li>
				<a href="<?= dirname($_SERVER["PHP_SELF"]) ?>/<?= $categories_record['alias'] ?>.html">
					<?= $categories_record['name'] ?>
				</a>
				<ul>
					<?php
					//τυπώνει τις υποκατηγορίες
					while ($subcategories_record = mysqli_fetch_assoc($subcategories_recordset)) {  ?>
						<li>
							<a href="<?= dirname($_SERVER["PHP_SELF"]) ?>/<?= $categories_record['alias'] ?>/<?= $subcategories_record['alias'] ?>">
								<?= $subcategories_record['name'] ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</li>
		<?php	}	?>
	</ul>

	<section id="products">
		<div class="row_title">
			<h2>Προιόντα</h2>
		</div>
		<div id="products-items">
			<?php
			//3o εκτύπωση εγγραφών από το $products_recordset
			while ($products_record = mysqli_fetch_assoc($products_recordset)) {
				//mysqli_fetch_assoc διαβάζει ένα record απο το recordset $categories_recordset και το επιστρ΄φει σε μορφή array της PHP
			?>
				<div class="product_item">
					<div class="product-name"><?= $products_record['name'] ?></div>
					<div class="product-image"></div>
					<div class="product-price"><?= $products_record['price'] ?></div>
					<div class="product-offer"><?= $products_record['offer-price'] ?></div>
				</div>
			<?php }	?>
		</div>
	</section>
</body>

</html>
<?php
mysqli_free_result($categories_recordset); //απελευθερώνει απο την μνήμη το REcordset
mysqli_close($con); //κλείνει το connection στη MySQL
?>