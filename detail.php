<?php
require_once ('database.php');
require_once ('dbhelper.php');

$title = $URL = $price = $sales = $id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from product where id = '.$id;
	$productList = execute_Result($sql);
}
foreach ($productList as $product) {
	if ($id == $product['id']) {
		$title = $product['title'];
		$URL = $product['URL'];
		$price = $product['price'];
		$sales = $product['sales'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Frontend</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acumin">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		/* Make the image fully responsive */
		.carousel-inner img {
			width: 100%;
			height: 500px;
		}
	</style>
	<style type="text/css">
		body {
			font-family: "Acumin", sans-serif;
		}
		a:hover {
			text-decoration-line: none;
			color: white;
		}

		a {color: black;}
		td:hover{
			background-color: red;
			color: white;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a class="navbar-brand" href="home.php">Trang chủ</a>

		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="product.php">Sản phẩm</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Liên hệ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Trang quản lý</a>
			</li>
		</ul>
	</nav>
	<div class="container mt-4 pt-4">
		<div class="row">
			<h3><?=$title?></h3>
		</div>
		<div class="row">
			<div class="col-md-4 mr-4 pt-4">
				<img src="<?=$URL?>" width="100%">
			</div>
			<div class="col-md-4 ml-4 pl-4">
				<h4 class="text-danger"><?=($price - $price*$sales/100)?>VNĐ</h4>
				<p><b>Giá gốc</b>: <del><?=$price?></del>VNĐ (Giảm <?=$sales?> %) </p>  
				<i class="fa fa-shield fa-rotate-270"></i> Chip: Snapdragon 636<br>
				<i class="fa fa-shield fa-rotate-270"></i> RAM: 8GB<br>
				<i class="fa fa-shield fa-rotate-270"></i> Bộ nhớ trong: 64GB




			</div>
		</div>
	</div>
	<footer class="bg-dark" style="width:100%;height: 70px; line-height: 70px; text-align: center; color: white;">
		Copyright &copy; 2020 LeMinhBac.ClassT1907A | Số 8C,Tôn Thất Thuyết - Mỹ Đình - Nam Từ Liêm - Hà Nội
	</footer>


</body>
<script>
	AOS.init();
</script>
</html>
