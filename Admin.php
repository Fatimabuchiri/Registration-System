<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <h1>Add a course</h1>
<?php
require('connection.php');
extract($_POST);
if(isset($_POST['btn'])){
?>
<script>
    swal("Course added!", "course has been successfully added to your schedule", "success");
   </script>
   <?php
$sql = "INSERT INTO `courses`(`id`, `code`, `sec`, `doctor`, `location`, `time`, `day`) VALUES (NULL,'$code','$sec','$doctor','$location','$time','$day');";
mysqli_query($conn,$sql);
}
 ?>
   <form method="post">


 Sec: <input type="text" name=sec><br>
 Code course: <input type="text" name=code><br>
 Doctor's name: <input type="text" name=doctor><br>
 Time: <input type="text" name=time ><br>
 Day: <input type="text" name=day ><br>
 location: <input type="text" name=location ><br>
 <button type="button" name=btn>Add</button>
 </form>

</body>
</html>
