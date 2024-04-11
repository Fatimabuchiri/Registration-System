
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Payment</title>
    <style>
    .error{
      color:red;
    }

    </style>
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
    <img src=logo.png alt="logo">
  </header>
  <?php
  $name = $_POST["cardname"];
  $number = $_POST["cardnumber"];
  $exp = $_POST["expmonth"];
  $exp2 = $_POST["expyear"];
  $cvv = $_POST["cvv"];
  $nameErr = "";
  $numberErr = "";
  $expErr = "";
  $expYear = "";
  $cvvErr="";
  $month = date("m");
  $year = date("Y");

  if(isset($_POST["btn"])){
if(is_numeric($name)|| (!preg_match("/^[a-zA-Z-' ]*$/",$name))){
  $nameErr = "*name should only contain letters and space";
}
elseif(empty($name)){
  $nameErr = "*Please write your name";
}

elseif(empty($number)){
  $numberErr = "*Please write your card number";
}
elseif(!(is_numeric($number))){
  $numberErr = "*Only write numbers";
}
elseif(empty($exp)){
  $expErr = "*Please write the expiration month";
}
elseif($exp > 12){
  $expErr = "*Invalid month";
}
elseif(!(is_numeric($exp2))){
  $expErr = "*Only write numbers";
}
elseif(empty($exp2)){
  $expYear = "*Please write the expiration year";
}
elseif(!(is_numeric($exp2))){
    $expYear = "*Only write numbers";
}
elseif(empty($cvv)){
  $cvvErr = "*Please write the cvv";
}
elseif(!(is_numeric($cvv))){
    $cvvErr = "*Only write numbers";
}
elseif(($year > $exp2) or ($month > $exp)){
     ?> <script>swal("Expired!", "card is expired, cannot proceed the payment", "error");</script>
     <?php
}


  else{
    $id=$_GET['id'];
    header('Location:Receipt.php?id='.$id);
  }
}
   ?>

  <div class="bot">

    <div class="row">
      <div class="col-75">
        <div class="container">
          <form method="post">
              <div class="col-50">
                <h2>Payment</h2>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                </div>
              </br>
                <label for="cname">Name on Card</label><span class="error"><?php echo $nameErr; ?></span>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">

                <label for="ccnum">Credit card number</label><span class = "error"><?php echo $numberErr;  ?></span>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength="16">
                <label for="expmonth">Exp Month</label><span class = "error"><?php echo $expErr;  ?></span>
                <input type="text" id="expmonth" name="expmonth" placeholder="08" maxlength="2">

                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label><span class = "error"><?php echo $expYear;  ?></span>
                    <input type="text" id="expyear" name="expyear" placeholder="2018" maxlength="4">
                  </div>

                  <div class="col-50">
                    <label for="cvv">CVV</label><span class = "error"><?php echo $cvvErr;  ?></span>
                    <input type="text" id="cvv" name="cvv" placeholder="352" maxlength="3">

                  </div>
                </div>
              </div>
            </div>
          </br>
        <button class=btn name= btn value="Search">Pay</button></a>
          </div>


</form>

  </body>
</html>
