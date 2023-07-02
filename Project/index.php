<?php
include "includes/class-autoload.inc.php";
include "classes/View/productView.class.php";
include "classes/Controller/Delete.class.php";
$del=new Delete;
$del->deleteProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="includes/stylesheet.css"> 
    <title> E-Commerce Website </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
<form id="delete" action="" method="POST"  >
<header>
      <h1><span>Product List </span> </h1>
      <nav>
        <ul>
          <li class="a"> <a href="Product.Add.php"> ADD </a></li>
          <button class="delbutton" type="submit" name="products_btn" >Mass Delete </button>
       </u1>
  </nav>
</header>
		      <?php
           $showData=new show;
           $showData->showProduct();
           ?>
</form>
</body>
</html>