<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="BookkStore.css">
    <link rel="stylesheet" href="style.css">
    <title>Book Store</title>
    <style>

    .cc{
      padding-left: 100px;
      padding-top: 200px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;

    }
    #menu li
    {
      padding: 10px 0;
      font-size: 1.7rem;
      color: #FFFFFF;
      margin-top:20px;
    }

    </style>
<script src="https://kit.fontawesome.com/6597541892.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
<header>
    <nav role="navigation">
      <div id="menuToggle">

        <input type="checkbox" />


        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
        <a href='Registeration.php?id=<?php echo $_GET['id'];?>'><li>Registeration</li></a>
          <a href='Schedule.php?id=<?php echo $_GET['id'];?>'><li>Schedule</li></a>
          <a href='BookStore.php?id=<?php echo $_GET['id'];?>'><li>Book store</li></a>
          <a href='Location.php?id=<?php echo $_GET['id'];?>'><li>Location</li></a>
          <a href='Grades.php?id=<?php echo $_GET['id'];?>'><li>Grades</li></a>
          <a href='Grade_simulator.php?id=<?php echo $_GET['id'];?>'><li>Grade Simulator</li></a>
          <a href='Attendance.php?id=<?php echo $_GET['id'];?>'><li>Attendance</li></a>
          <a href='Review.php?id=<?php echo $_GET['id'];?>'><li>Review</li></a>
        </ul>
      </div>
    </nav>
    <a href='home.php?id=<?php echo $_GET['id'] ?>'>
    <img src="images/logo4.jpeg" alt="logo" style="max-height: 120px;
      max-width:200px" >
        </a>
  </header>
  <link rel="stylesheet" href="BookStore.css">


<div class="cc">
  <?php
  session_start();
  include('connection.php');
  $status="";
  if (isset($_POST['code']) && $_POST['code']!=""){
  $code = $_POST['code'];
  $result = mysqli_query(
  $conn,
  "SELECT * FROM `books` WHERE `code`='$code'"
  );
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $code = $row['code'];
  $price = $row['price'];
  $image = $row['pic'];

  $cartArray = array(
  	$code=>array(
  	'name'=>$name,
  	'code'=>$code,
  	'price'=>$price,
  	'quantity'=>1,
  	'image'=>$image)
  );

  if(empty($_SESSION["shopping_cart"])) {
      $_SESSION["shopping_cart"] = $cartArray;
      $id=$_GET['id'];
      $sql = "INSERT INTO `cart`(`Id`, `code`, `book`, `price`, `quantity`) VALUES ('$id','$code','$name','$price','1');";
      mysqli_query($conn,$sql);
      ?> <script> swal("Product added!", "Product is added to your cart", "success");</script>
      <?php
      //$status = "<div class='box'>Product is added to your cart!</div>";
  }else{
      $array_keys = array_keys($_SESSION["shopping_cart"]);
      if(in_array($code,$array_keys)) {
      ?><script>  swal("Product not added!", "Product is already added to your cart", "warning");</script>
      <?php
  	//$status = "<div class='box' style='color:red;'>
  	//Product is already added to your cart!</div>";
      } else {
      $_SESSION["shopping_cart"] = array_merge(
      $_SESSION["shopping_cart"],
      $cartArray
      );
    //  $status = "<div class='box'>Product is added to your cart!</div>";
    $id=$_GET['id'];
    $sql = "INSERT INTO `cart`(`Id`, `code`, `book`, `price`, `quantity`) VALUES ('$id','$code','$name','$price','1');";
    mysqli_query($conn,$sql);
    ?> <script> swal("Product added!", "Product is added to your cart", "success");</script>
    <?php
  	}

  	}
  }
  ?>
  <?php
  if(!empty($_SESSION["shopping_cart"])) {
  $cart_count = count(array_keys($_SESSION["shopping_cart"]));
  ?>
  <div class="cart_div" style=" min-width:1000px; min-height:100px;">
  <a href='cart.php?id=<?php echo $_GET['id'];?>'><i class="fa-solid fa-cart-shopping fa-bounce fa-2xl" style="color: #000000;"></i></a>
  </div>
  <?php
  }
  ?>

  <?php

  $result = mysqli_query($conn,"SELECT * FROM `books`");
  while($row = mysqli_fetch_assoc($result)){
      echo "<div class='product_wrapper'>
      <form method='post' action=''>
      <input type='hidden' name='code' value=".$row['code']." />
      <div class='image'><img src='".$row['pic']."' /></div>
      <div class='name'>".$row['name']."</div>
      <div class='price'>$".$row['price']."</div>
      <button type='submit' class='buy'>Add to your cart</button>
      </form>
      </div>";
          }
  mysqli_close($conn);
  ?>

  <div style="clear:both;"></div>
  <div class="message_box" style="margin:10px 10px;">
  <?php echo $status; ?>
  </div>

</div>
  </body>
</html>
