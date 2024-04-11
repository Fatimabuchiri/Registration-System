<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctor-grades.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/6597541892.js" crossorigin="anonymous"></script>


    
   
    <title>Grades</title>
   
   
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
          <a href="doctor-grades.php"><li>Grades</li></a>
          <a href="doctor-attendance.php"><li>Attendance</li></a>
          

        </ul>
      </div>
    </nav>
    <img src="logo.png" alt="logo">
  </header>
  <form method="post">
    <div class="custom-select" >
      <label for="Reg">Course code</label>
    
  <?php
  require('connection.php');
  $sql = "SELECT code FROM courses";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<select name='course'>";
     echo "<option value=''>--- Choose a course ---</option>";
      while($row = $result->fetch_assoc()) {
      $code = $row["code"];
      echo "<option>".$code."</option>";

      }

      echo "</select>";
      echo " &nbsp &nbsp";
?>
  <select name="Sec">
       <option value="">--- Choose a section ---</option>
       <?php
       $sql = "SELECT sec FROM courses";
       $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $Sec = $row["sec"];
        ?>
        <option><?php  echo $Sec?></option>
        <?php
        }
        echo "</select>";
          echo " &nbsp &nbsp";
          echo"<form method=post>";
        echo "<button class='btn' name='btn'>search</button><br><br><br>";
      echo "</form>";
    } 
   $id="";
    if(isset($_POST['btn'])){

        $selected=$_POST['course'];
        $selected2=$_POST['Sec'];
        $sql = "SELECT name,Id FROM schedule WHERE Subject='$selected' AND Sec='$selected2'";
        $result = $conn->query($sql);
          ?>
          </div>
        
<div class='TheTable'>
      <table class="reg">
          <th>Student's name</th>
          <th>Student's Id</th>
          <th>Attendance</th>
          <?php
          while($row = $result->fetch_assoc()){
            $id=$row['Id'];
            $name=$row['name'];
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$id</td>";
            echo "<form method='post'>";
            echo "<td><a href='take-attendance.php?id=".$row["Id"]."'<i class='fa-solid fa-file-pen' style=color: #000000;'></i></a></td>";
            echo "</tr>";
          }
        // header('Location:add-grade.php?id='.$id);
         
        }
    ?>
    
    </div>
    </table>
    
</body>
</html>