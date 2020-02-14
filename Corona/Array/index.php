<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.flex{
			display: flex;
		}
		.border{
			border: 1px black solid;
			width: 300px;
			height: 360px;
		}
	</style>
</head>
<body>
<?php 
$product = array(
		[
			"name" => "Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU",
			"img" => "../Database/mln.jpg",
			"percent" => "28",
			"price" => "11500000"],
		[
			"name" => "Máy lọc nước Kangaroo Hydrogen KG100HG không vỏ",
			"img" => "../Database/mln2.jpg",
			"percent" => "34",
			"price" => "9100000"],

		[
			"name" => "Máy lọc nước Kangaroo Hydrogen KG100HB vỏ tủ VTU",
			"img" => "../Database/mln3.jpg",
			"percent" => "33",
			"price" => "9700000"]);
 ?>

 <div class="flex">
		
		<?php for ($i=0; $i < count($product)  ; $i++) {
			$product_percent = $product[$i]["price"] - ($product[$i]["percent"]*$product[$i]["price"])/100;
			?>
			<div class="border">
				<center><h4><?php echo $product[$i]["name"];  ?></h4></center>
				<div class="flex">
					<h5 style="background-color: #fa9902; height: 15px;"><?php echo $product[$i]["percent"];  ?>%</h5>
					<img style="width: 200px; height: 200px" src="<?php echo $product[$i]["img"];  ?>">
				</div>
				<h5 style="color: red"><?php echo number_format($product_percent);  ?>đ</h5>
				<h5 ><strike><?php echo number_format($product[$i]["price"]);  ?>đ</strike></h5>
			</div>
		<?php } ?>
		
	</div>
</body>
</html>

