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

			<div class="productCartItem">
				<img src="img/art1.jpg" class="productImage" alt="Car Art">
				<h3>Framed GT4 Poster</h3>
				<p class="productPrice">$99.99</p>
				<button class="productButton">Remove</button>
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

					<tr>
						<td class="productName">Name</td>
						<td class="productQty">2</td>
						<td class="priceEach">99</td>
						<td class="itemTotal">198</td>


					</tr>


				</table>
				<button class="buttonPayment">Go to Payment</button>

			</div>

		</div>



	</div>

	<!-- BEGIN PHP Include for Footer Element -->
	<?php include "components/footer.php"; ?>
	<!-- END PHP Include for Footer Element -->








	</div>
</body>

</html>