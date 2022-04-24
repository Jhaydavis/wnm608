<!doctype html>
<html>

<head>
	<!-- BEGIN PHP Include for Meta Content -->
	<?php include "components/meta.php"; ?>
	<!-- END PHP Include for Meta Content -->

	<title>Car Enthusiast Art - Home Page</title>
</head>

<body>
	<div class="main">

		<!-- BEGIN PHP Include for Header/Nav Element -->
		<?php include "components/header.php"; ?>
		<!-- END PHP Include for Header/Nav Element -->

		<div class="siteInfo">
			<h3>Gallery Items on Sale!</h3>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita at vero consectetur deserunt saepe ipsum unde, facilis consequatur, quidem obcaecati distinctio officiis modi natus aliquam, numquam debitis qui reiciendis!</p>
		</div>


		<div class="storeContainerPaintings">

			<?php include "components/paintingsCard.php"; ?>
			<?php include "components/postersCard.php"; ?>
			<?php include "components/digitalCard.php"; ?>

		</div>

		<?php

		include_once "components/functions.php";
		include_once "components/templates.php";

		$result = makeQuery(makeConn(), "SELECT *  FROM `products` ORDER BY `price`");
		//print_p($result);

		echo '<div class="productCard">', array_reduce($result, 'productListTemplate'), '</div>';

		?>


	</div>

	<!-- BEGIN PHP Include for Footer Element -->
	<?php include "components/footer.php"; ?>
	<!-- END PHP Include for Footer Element -->







	</div>
</body>

</html>