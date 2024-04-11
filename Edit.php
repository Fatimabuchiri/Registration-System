<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="Edit.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php
    require('connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM courses WHERE id2 = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $code=$row["code"];
        $sec=$row["sec"];
        $doctor=$row["doctor"];
        $location=$row["location1"];
        $time=$row["time1"];
        $day=$row["day1"];
        $seats=$row["seats"];
      }
    }
    if(isset($_POST["btn"])){
      $name = $_POST["name"];
      $sec = $_POST["sec"];
      $doctor = $_POST["doctor"];
      $l1 = $_POST["l1"];
      $t1 = $_POST["t1"];
      $d1 = $_POST["d1"];
      $seats=$_POST["seats"];
      $sql = "UPDATE courses SET code='$name',sec='$sec',doctor='$doctor'
      ,location1='$l1',time1='$t1',day1='$d1',seats='$seats' WHERE id2='$id'";
      mysqli_query($conn,$sql);
      ?>
      <script>
    swal("Course Updated", "course has been successfully updated", "success");
   </script>
   <?php

    }

    ?>
<h1>Edit the course</h1>
<form method="post">
 <div class="first">
course code: <input type="text" name = name value=<?php echo $code; ?>>
 Section:  <input type="text" name = sec value=<?php echo $sec; ?>>
Doctor's name: <input type="text" name = doctor value=<?php echo $doctor; ?>>
 Location: <input type="text" name = l1 value=<?php echo $location; ?>>
  Time: <input type="text" name = t1 value=<?php echo $time; ?>>
  Day: <input type="text" name = d1 value=<?php echo $day; ?>>
  Seats: <input type="text" name = seats value=<?php echo $seats; ?>>

  <br>

<button class=btn name= btn value="Search">Update</button>
</form>
</body>
</html>