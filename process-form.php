<?php  
if (!empty($_POST)) {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
  }

  if (isset($_POST['title'])) {
    $title = $_POST['title'];
  }

  if (isset($_POST['URL'])) {
    $URL = $_POST['URL'];
  }

  if (isset($_POST['price'])) {
    $price = $_POST['price'];
  }

  if (isset($_POST['sales'])) {
    $sales = $_POST['sales'];
  }

  $title  = str_replace('\'', '\\\'', $title);
  $URL    = str_replace('\'', '\\\'', $URL);
  $price  = str_replace('\'', '\\\'', $price);
  $sales = str_replace('\'', '\\\'', $sales);


  if ($id != '') {
    //update
    $sql = "update product set title = '$title', URL = '$URL', price = '$price', sales = '$sales' where id = " .$id;
  } else {
    //insert
    $sql = "insert into product(title, URL, price, sales) value ('$title', '$URL', '$price', '$sales')";
  }

  // echo $sql;

  execute($sql);
  header('Location: index.php');
  die();
}