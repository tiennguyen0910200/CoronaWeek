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
	<?php include 'database.php';?>
	<div class="flex">
		
		<?php for ($i=0; $i < count($result)  ; $i++) { 
			$result_sale = $result[$i]["price"] - ($result[$i]["price"]*$result[$i]["percent"])/100;
			?>
			<div class="border">
				<center><h4><?php echo $result[$i]["names"];  ?></h4></center>
				<div class="flex">
					<h5 style="background-color: #fa9902; height: 15px;"><?php echo $result[$i]["percent"]."%";  ?></h5>
					<img style="width: 200px; height: 200px" src="<?php  echo $result[$i]["img"]; ?>">
				</div>
				<h5 style="color: red"><?php echo number_format($result_sale)."đ";  ?></h5>
				<h5 ><strike><?php echo number_format($result[$i]["price"])."đ";  ?></strike></h5>
			</div>
		<?php } ?>
		
	</div>

</body>
</html>