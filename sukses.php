<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tokokue</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
 	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fa fa-th-list" aria-hidden="true" id="btn"></i>
		<i class="fa fa-times" aria-hidden="true" id="cancel"></i>
	</label>
	<?php include 'sidebar.php';?>

	<div class="section">
		<h3>Sweet Bakery</h3>
	</div>

	<div class="container">
		<div class="success">
			<div class="alert">
				Pembayaran Berhasil, Pesanan Anda akan segera diproses.
			</div>
		</div>
		<div class="checkout-container">
			<a href="dashboard.php">
				<button class="btn" id="btn">
					Kembali ke Dashboard
				</button>
			</a>
		</div>
	</div>
</body>
</html>