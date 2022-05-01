<?php
include_once "components/functions.php";
include_once "components/templates-hr.php";
include_once "components/cartList.php";
?>

<!doctype html>
<html>

<head>
	<!-- BEGIN PHP Include for Meta Content -->
	<?php include "components/meta.php"; ?>
	<!-- END PHP Include for Meta Content -->
	<title>Car Enthusiast Art - Payment</title>

</head>

<body>
	<div class="main">

		<!-- BEGIN PHP Include for Header/Nav Element -->
		<?php include "components/header.php"; ?>
		<!-- END PHP Include for Header/Nav Element -->

		<div class="siteInfo">
			<h3>Payment Information</h3>
			<hr>




			<form>
				<label class="form-control-label">Name</label>
				<input type="text" class="form-input" placeholder="Name on Credit Card">

				<label class="form-control-label">Address</label>
				<input type="text" class="form-input" id="street" placeholder="Street Address">
				<input type="text" class="form-input" id="city" placeholder="City">
				<input type="number" class="form-input" id="zip" placeholder="Zip Code">

				<label class="form-control-label">CC Number</label>
				<input type="number" class="form-input" placeholder="Enter">


				<label class="form-control-label">Expiration Date</label>
				<input type="text" class="form-input" id="exp-date" placeholder="DD/YY">
				<hr>
				<button class="productButton"><a href="confirmation.php">Purchase</a></button>

			</form>




		</div>




		<?php include "components/footer.php"; ?>








	</div>
</body>

</html>