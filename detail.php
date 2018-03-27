<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
	include "products.php";
		
	if($_GET['id'] == 'p01')
	{
	 ?>
		<div class='sanpham'>
		<img src='public/images/<?php echo $_GET["image"]?>'>
		<h1> <?php echo $_GET["name"]?> </h1>
		<b>Giá: </b> <span class='gia'> <?php echo $_GET['gia'] ?> </span><br>
		<p>This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality testing, inspection, and repackaging. The product is backed by a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.</p>
		<a class="addcart" href="#">Add To Cart</a>
	</div>
	<?php } ?>

	<?php	
	if($_GET['id'] == 'p02')
	{
	 ?>
		<div class='sanpham'>
		<img src='public/images/<?php echo $_GET["image"]?>'>
		<h1><?php echo $_GET["name"]?></h1>
		<b>Giá: </b> <span class='gia'><?php echo $_GET['gia'] ?></span><br>
		<p>This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality testing, inspection, and repackaging. The product is backed by a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.</p>
		<a class="addcart" href="#">Add To Cart</a>
	</div>
	<?php } ?>

	<?php	
	if($_GET['id'] == 'p03')
	{
	 ?>
		<div class='sanpham'>
		<img src='public/images/<?php echo $_GET["image"]?>'>
		<h1><?php echo $_GET["name"]?></h1>
		<b>Giá: </b> <span class='gia'><?php echo $_GET['gia'] ?></span><br>
		<p>This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality testing, inspection, and repackaging. The product is backed by a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.</p>
		<a class="addcart" href="#">Add To Cart</a>
	</div>
	<?php } ?>

</body>
</html>
