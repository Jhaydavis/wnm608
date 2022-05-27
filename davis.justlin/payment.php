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

		<div class="storeItemFlex">



			<div class="adminItemFlex">

				<?= array_reduce($cart_items, 'cartListTemplate') ?>

				<div class="productCard-cart">
					<?= cartTotals() ?>
				</div>

			</div>


			<div class="paymentCard">
				<form action="confirmation.php">
					<label class="form-control-label">
						<h3>Enter Payment Information</h3>
					</label>

					<label class="form-control-label">Name</label>
					<input type="text" class="form-input" placeholder="Name on Card" required>

					<label class="form-control-label">Address</label>
					<input type="text" class="form-input" id="street" placeholder="Street Address" required>
					<input type="text" class="form-input" id="city" placeholder="City" required>
					<input type="number" class="form-input" id="zip" placeholder="Zip Code" required>

					<label class="form-control-label">CC Number</label>
					<input type="number" class="form-input" placeholder="Enter" required>


					<label class="form-control-label">Expiration Date</label>
					<input type="month" class="form-input" id="exp-date" placeholder="DD/YY" required>
					<hr>
					<div>
						<button class="productButton" type="submit" value="pay"> Purchase</button>
					</div>

				</form>
			</div>
		</div>



	</div>




	<?php include "components/footer.php"; ?>








	</div>
</body>

</html>