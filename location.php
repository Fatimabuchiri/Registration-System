
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="location.css">
    <title>Location</title>
  <style>

     .building{
      height: 0.1px;

     }




  </style>

  </head>
  <body>
<header>
    <nav role="navigation">
      <div id="menuToggle">

        <input type="checkbox" />


        <span></span>
        <span></span>
        <span></span>

        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->
        <ul id="menu">
          <a href="#"><li>Registeration</li></a>
          <a href="#"><li>Payment</li></a>
          <a href="#"><li>Book store</li></a>
          <a href="Location.php"><li>Location</li></a>
          <a href="#"><li>Grades</li></a>
          <a href="#"><li>Grade Simulator</li></a>
          <a href="#"><li>Receipt</li></a>
          <a href="#"><li>Attendance</li></a>
            <a href="#"><li>Review</li></a>
        </ul>
      </div>
    </nav>
    <img src="image/logo.jpeg" alt="logo">
  </header>
  <form method="post">
    <div class="building" >
      <label for="building">Building</label>
      <input type="text" name="building"  placeholder="Building number"></br></br>
        <button class=btn name= btn value="Search" >Search</button>
  </form>
</div>

  <?php
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbpassword = "";
  $dbName = "rsu";

  // Create connection
  $conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbName);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['btn'])){
    $number=$_POST['building'];
  $sql = "SELECT location FROM building WHERE name='$number'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $location = $row["location"];
  echo "<div class='container2' style='padding-left:200px'>";
  echo "<iframe src= $location style='height:500px;width:1000px;'></iframe>";
echo "</div>";

      }
  } else {
      echo "0 results";
  }


  $conn->close();
  }
  ?>
    <footer></footer>


  </body>
</html>
