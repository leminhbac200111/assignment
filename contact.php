<!DOCTYPE html>
<html>
<head>
	<title>Liên hệ</title>
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
				<a class="nav-link" href="product.php">Sản phẩm</a>
			</li>
			<li class="nav-item">
				<a class="navbar-brand" href="contact.php">Liên hệ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Trang quản lý</a>
			</li>
		</ul>
	</nav>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Gửi phản hồi</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="ok.php">
					<div class="form-group">
						<label for="email">Email: </label><br>
						<input required="true" type="email" class="form-group" id="email" name="email" placeholder="Nhập email của bạn">
					</div>
					<div class="form-group">
						<label for="comment">Phản hồi: </label><br>
						<input required="true" type="text" class="form-control" id="comment" name="comment" placeholder="Mọi phản hồi hoặc thắc mắc của bạn...." style="height: 300px;">
					</div>
					<button class="btn btn-success pb-4 mb-4" >Gửi</button>
				</form>
			</div>
		</div>
	</div>

	<footer class="bg-dark" style="position: absolute; bottom: 0;width:100%;height: 70px; line-height: 70px; text-align: center; color: white;">
		Copyright &copy; 2020 LeMinhBac.ClassT1907A | Số 8C,Tôn Thất Thuyết - Mỹ Đình - Nam Từ Liêm - Hà Nội
	</footer>
</body>
<script>
	AOS.init();
</script>
</html>