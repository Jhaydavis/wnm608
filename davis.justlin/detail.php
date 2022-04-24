<!doctype html>

<html>

<head>
	<!-- BEGIN PHP Include for Meta Content -->
	<?php include "components/meta.php"; ?>
	<!-- END PHP Include for Meta Content -->

	<title>Car Enthusiast Art - Product Details</title>

</head>

<body>
	<div class="main">

		<!-- BEGIN PHP Include for Header/Nav Element -->
		<?php include "components/header.php"; ?>
		<!-- END PHP Include for Header/Nav Element -->


		<div class="siteInfo">
			<h3>Product Detail</h3>


		</div>


		<div class="storeItemFlex">

			<?php

			include_once "components/functions.php";
			include_once "components/templates-hr.php";
			$product = makeQuery(makeConn(), "SELECT *  FROM `products` WHERE `id`=" . $_GET['id']);
			echo '<div class="storeItemFlex">', array_reduce($product, 'productListTemplate'), '</div>';
			?>


		</div>



	</div>

	<!-- BEGIN PHP Include for Footer Element -->
	<?php include "components/footer.php"; ?>
	<!-- END PHP Include for Footer Element -->








	</div>
</body>

</html>