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
		<div class="box">
			<h4>Pembayaran</h4>
		</div>
		<div class="payment">
			<div class="method" id="bca" onclick="setActivePaymentMethod('bca')">
				<div class="flex flex-direction">
					<div>
						<img src="./image/logo_bca.png" class="logo" alt="">
					</div>
					<div>
						<span class="bankname">BCA Transfer</span><br/>
						<strong>a.n Muhammad Gangsar</strong> <br/>
						<span class="title">1234567890</span><br/>
					</div>
				</div>
			</div>
			<div class="method" id="mandiri" onclick="setActivePaymentMethod('mandiri')">
				<div class="flex flex-direction">
					<div>
						<img src="./image/logo_bank_mandiri.png" class="logo" alt="">
					</div>
					<div>
						<span class="bankname">Mandiri Transfer</span><br/>
						<strong>a.n Muhammad Gangsar</strong> <br/>
						<span class="title">1234567890</span><br/>
					</div>
				</div>
			</div>
		</div>
		<div class="checkout-container">
			<a href="sukses.php">
				<button class="btn" id="btn">
					Checkout
				</button>
			</a>
		</div>
	</div>
	<script>
		function setActivePaymentMethod(method = 'bca') {
			setDeactivePaymentMethod();
			var el = document.getElementById(method)
			el.classList.add('active')
		}

		function setDeactivePaymentMethod() {
			var x = document.getElementsByClassName("method");
			for (i = 0; i < x.length; i++) {
				x[i].classList.remove('active')
			}
		}
	</script>
</body>
</html>