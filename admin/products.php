<?php
	if(!isset($_GET['pid'])){
		header("location:index_subcats.php");
		die();
	} else {
		require_once('connection.php');
		$products_query="select *
						from products
						inner join subcategories on products.subcategories_id=subcategories.id
						inner join categories on categories.id=subcategories.categories_id";
		if(isset($_GET['pid'])){
			$products_query.=" where products.alias like '".$_GET['pid']."'";
		} 
		mysqli_query($con,"SET NAMES 'utf8'");
		$products_recordset=mysqli_query($con,$products_query);
		$products_record=mysqli_fetch_assoc($products_recordset);
		//echo $products_query;
	}
?>
<!doctype html>
<html>
	<head>
		<title>PHP + MySQL</title>
		<meta charset="utf8" />
		<style>
			nav ul{
				margin:0;
				padding:0;
				list-style:none;
			}
		</style>
	</head>
	<body>
	<h1>Products</h1>
	<pre>
	<?php
		print_r($products_record);		
	?>
	</pre>	
	</body>
</html>