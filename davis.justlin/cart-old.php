<!doctype html>
<html>

<head>
	<!-- BEGIN PHP Include for Meta Content -->
	<?php include "components/meta.php"; ?>
	<!-- END PHP Include for Meta Content -->

	<title>Car Enthusiast Art - Cart</title>

</head>

<body>
	<div class="main">
		<!-- BEGIN PHP Include for Header/Nav Element -->
		<?php include "components/header.php"; ?>
		<!-- END PHP Include for Header/Nav Element -->


		<div class="siteInfo">
			<h3>Your Shopping Cart</h3>


		</div>


		<div class="storeContainerPaintings">

			<?php

			include_once "components/functions.php";
			include_once "components/templates-cart.php";
			//$product = makeQuery(makeConn(), "SELECT *  FROM `products` WHERE `id`=" . $_GET['id']);
			//echo '<div class="storeItemFlex">', array_reduce($product, 'productListTemplate'), '</div>';
			$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN(2,4,6)");
			?>

			<div class="productCard">
				<h1>Items in Cart</h1>

				<?= array_reduce($cart, function ($r, $o) {
					return $r . "<div>$o->name</div>";
				}) ?>


				<hr>
				<button class="productButton"><a href="cart.php?id=$o->id">Remove</a></button>
			</div>

			<div class="cartItem">
				<table class="cartSummary">
					<tr>
						<th>Item</th>
						<th>Quantity</th>
						<th>Price Each</th>
						<th>Item Total</th>

					</tr>

					<tr>
						<td class="productName">Name</td>
						<td class="productQty">2</td>
						<td class="priceEach">99</td>
						<td class="itemTotal">198</td>


					</tr>




				</table>
				<button class="productButton"><a href="payment.php?">Go to Payment</a></button>

			</div>

		</div>



	</div>

	<!-- BEGIN PHP Include for Footer Element -->
	<?php include "components/footer.php"; ?>
	<!-- END PHP Include for Footer Element -->








	</div>
</body>

</html>