<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
    <script src="https://kit.fontawesome.com/6597541892.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </head>
  <body>

    <?php
    require('connection.php');
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $delete = mysqli_query($conn,"DELETE FROM courses WHERE id2 = '$id'");


    }
    if(isset($_POST["btn"])){ 
     
      $name = $_POST["name"];
    
      $sec = $_POST["sec"];
      $doctor = $_POST["doctor"];
      $l1 = $_POST["l1"];
      $t1 = $_POST["t1"];
      $d1 = $_POST["d1"];
      $seats = $_POST['seats'];
      $sql = "INSERT INTO courses(id2, code, sec, doctor, location1 , time1 , day1,seats)VALUES(NULL,'$name','$sec','$doctor','$l1','$t1','$d1','$seats')";
      mysqli_query($conn,$sql);
      ?>

<script>swal("Course Added!", "The course has been successfully added", "success");</script>
<?php } ?>
<h1>Add courses</h1>
<form method="post">
 <div class="first">
course code: <input type="text" name = name>
 Section:  <input type="text" name = sec>
Doctor's name: <input type="text" name = doctor>
 Location: <input type="text" name = l1>
  Time: <input type="text" name = t1>
  Day: <input type="text" name = d1>
  Seats: <input type="text" name = seats>
  <br>

<button class=btn name= btn value="Search">Add</button>
</form>
<br><br>
    </div>
  <h1> Registred Courses<h1>
    <table border='1'>
      <tr>
        <th>Course code</th>
        <th>Sec</th>
        <th>Doctor</th>
        <th>Location</th>
        <th>Time</th>
        <th>Day</th>
        <th>Seats</th>
        <th>Actions</th>
    </tr>
    <?php
   
    $sql = "SELECT id2,code,sec,doctor,location1,time1,day1,seats FROM courses";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $code=$row["code"];
        $sec=$row["sec"];
        $doctor=$row["doctor"];
        $location=$row["location1"];
        $time=$row["time1"];
        $day=$row["day1"];
        $seats=$row['seats'];
        ?>
        <tr>
          <td><?php echo $code;?></td>
          <td><?php echo $sec;?></td>
          <td><?php echo $doctor;?></td>
          <td><?php echo $location;?></td>
          <td><?php echo $time;?></td>
          <td><?php echo $day;?></td>
          <td><?php echo $seats;?></td>
          <td>
            <?php
         
          echo "<a href='Edit.php?id=".$row["id2"]."'> <i class='fa-solid fa-pencil' style='color: #ffa200;'></i></a>";
    echo " ";
          echo "<a href='Admin.php?id=".$row["id2"]."'><i class='fa-solid fa-trash' style='color: #f00000;'></i></a>";
          ?>
      </td>
      </tr>
<?php

      }
    
    ?>

    </table>
    </body>
    </html>