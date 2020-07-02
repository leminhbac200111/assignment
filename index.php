<?php
require_once ('dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
				<a class="nav-link" href="contact.php">Liên hệ</a>
			</li>
			<li class="nav-item">
				<a class="navbar-brand" href="index.php">Trang quản lý</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý thông tin sản phẩm
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm</th>
							<th style="text-align: center">Hình ảnh</th>
							<th style="text-align: center">Giá</th>
							<th style="text-align: center">Giảm</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if (isset($_GET['s']) && $_GET['s'] != '') {
							$sql = 'select * from product where title like "%'.$_GET['s'].'%"';
						} else {
							$sql = 'select * from product';
						}

						$productList = execute_Result($sql);

						$index = 1;
						foreach ($productList as $pro) {
							echo '<tr>
							<td>'.($index++).'</td>
							<td>'.$pro['title'].'</td>
							<td><center><img src="'.$pro['URL'].'" width="50px"></center></td>
							<td style="text-align: center">'.$pro['price'].'</td>
							<td style="text-align: center">'.$pro['sales'].'</td>
							<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$pro['id'].'","_self")\'>Edit</button></td>
							<td><button class="btn btn-danger" onclick="deleteProduct('.$pro['id'].')">Delete</button></td>
							</tr>';
						}
						?>
					</tbody>
				</table>
				<button class="btn btn-success mt-4 mb-4" onclick="window.open('input.php', '_self')">Thêm sản phẩm</button>
			</div>
		</div>
	</div>
	<footer class="bg-dark" style="width:100%;height: 70px; line-height: 70px; text-align: center; color: white;">
		Copyright &copy; 2020 LeMinhBac.ClassT1907A | Số 8C,Tôn Thất Thuyết - Mỹ Đình - Nam Từ Liêm - Hà Nội
	</footer>
	<script type="text/javascript">
		function deleteProduct(id) {
			option = confirm('Bạn có muốn xoá sản phẩm này không??')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete_product.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</body>

</html>