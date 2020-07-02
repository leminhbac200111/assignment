<?php
require_once ('dbhelper.php');
require_once ('process-form.php');
$title = $URL = $price = $sales = '';
$id = '';
if (isset($_GET['id'])) {
  $id          = $_GET['id'];
  $sql         = 'select * from product where id = '.$id;
  $productList = execute_Result($sql);
  if ($productList != null && count($productList) > 0) {
    $pro        = $productList[0];
    $title  = $pro['title'];
    $URL    = $pro['URL'];
    $price  = $pro['price'];
    $sales = $pro['sales'];
  } else {
    $id = '';
  }
}
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
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="text-center">Thêm sản phẩm</h2>
      </div>
      <div class="panel-body">
        <form method="post">
          <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="number" name="id" value="<?=$id?>" style="display: none;">
            <input required="true" type="text" class="form-control" id="title" name="title" value="<?=$title?>">
          </div>
          <div class="form-group">
            <label for="URL">Link hình ảnh</label>
            <input required="true" type="text" class="form-control" id="URL" name="URL" value="<?=$URL?>">
          </div>
          <div class="form-group">
            <label for="price">Giá:</label>
            <input type="number" class="form-control" id="price" name="price" value="<?=$price?>">
          </div>
          <div class="form-group">
            <label for="sales">Giảm giá(%):</label>
            <input type="number" class="form-control" id="sales" name="sales" value="<?=$sales?>">
          </div>
          <button class="btn btn-success">Lưu</button>
        </form>
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
