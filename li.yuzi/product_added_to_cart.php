 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Added to Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>#### Added To Your Cart</h2>

			<div>This is product item: #<?= $_GET['id']?> </div>
			<div><a href="product_list.php">Back To Shopping</a></div>
		</div>
	</div>
</body>
</html>