<?php
require_once ('database.php');
require_once ('dbhelper.php');
require_once ('process-form.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
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
		

		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="home.php">Trang chủ</a>
			</li>
			<li class="nav-item">
				<a class="navbar-brand" href="product.php">Sản phẩm</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Liên hệ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Trang quản lý</a>
			</li>
		</ul>
	</nav>
	<div class="container pb-4 mb-4">
		<div class="row">
			<div class="col-md-3" data-aos="fade-right">
				<h1 style="text-align: left;">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<br>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<br>
					<i class="fa fa-star"></i>

				</h1>
			</div>
			<div class="col-md-6" data-aos="fade-up">
				<h1 style="text-align: center" data-aos="fade-down">!!!!~~<i class="fa fa-cog fa-spin"></i><i class="fa fa-cog fa-spin"></i>~~<i class="pb-4 mb-4 fa fa-mobile-phone" style="font-size: 100px"></i>~~<i class="fa fa-cog fa-spin"></i><i class="fa fa-cog fa-spin"></i>~~!!!!</h1>
			</div>
			<div class="col-md-3" data-aos="fade-left">
				<h1 style="text-align: right;">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<br>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<br>
					<i class="fa fa-star"></i>
				</h1>
			</div>
		</div>
		<h3 style="text-align: center" data-aos="fade-up">Ở đây chúng tôi có những thứ ngon hơn cả người yêu cũ của bạn</h3>

	</div>

	<div class="container" style="font-size: 14px">
		
		<?php
		$sql      = "select * from product";
		$productList = execute_Result($sql);
		$index = 0;
		$dem = 0;
		foreach ($productList as $product) {
			if ($index == 0) {
				echo '<div class="row mb-4 pb-4">';
			}
			$index++; 
			$dem++;
			echo '
			<div class="col-md-2">
			
			<span class="bg-success text-white" style="padding: 3px 10px; border-radius: 5px;float: left">Giảm '.$product['sales'].'%</span>
			<span class="bg-primary text-white" style="padding: 3px 10px; border-radius: 5px;float: right">Mới</span><br>
			<img src="'.$product['URL'].'" width="100%" class="mt-2"><br>
			<h6 class="text-body">'.$product['title'].'</h6>
			<h8 class="text-body"><del>'.$product['price'].' VNĐ</del></h8><br>
			<h6 class="text-danger">'.($product['price'] - ($product['price'] * $product['sales'] / 100)).' VNĐ</h6><br>
			<button class="btn btn-warning" onclick=\'window.open("detail.php?id='.$product['id'].'","_self")\'>Xem chi tiết</button>
			</div>';
			if ($index == 6 || $dem == count($productList)) {
				echo '</div>';
				$index = 0;
			}
		}
		?> 
	</div>

	<footer class="bg-dark" style="width:100%;height: 70px; line-height: 70px; text-align: center; color: white;">
		Copyright &copy; 2020 LeMinhBac.ClassT1907A | Số 8C,Tôn Thất Thuyết - Mỹ Đình - Nam Từ Liêm - Hà Nội
	</footer>
</body>
<script>
	AOS.init();
</script>
</html>

