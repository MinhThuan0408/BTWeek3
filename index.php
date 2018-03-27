<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
	include "products.php";

	foreach ($products as $key => $row) {
	 
	 ?>

		<div class='sanpham'>
		<img src='public/images/<?php echo $row['image'];?>'>
		<h1><a href='detail.php?id=<?php echo "$key" ?>&name=<?php echo $row['name']?>&gia=<?php echo $row['price']?>&image=<?php echo $row['image'] ?>'> <?php echo $row['name'] ?> </a></h1>
		<b>Giá: </b> <span class='gia'> <?php echo $row['price'] ?></span><br>
		<p> <?php echo substr($row['desc'], 0, 100); ?><a href='detail.php?id=<?php echo "$key" ?>&name=<?php echo $row['name']?>&gia=<?php echo $row['price']?>&image=<?php echo $row['image'] ?>'>[...]</a></p>
	</div>
	<?php } ?>
</body>
</html>
