<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctor-grades.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>grades</title>
    <style>
        .first{
            padding-top:20px;
        }
        label{
  padding-right: 50px;
  color: #615959;
  font-size: 25px;
}
       
       form{
  padding-left: 250px;
  padding-top: 100px;
    font-size: 25px;
    color: #615959;
    justify-content: space-between;
    align-items: center;  
   

  }
 
  input{
   
  background-color: #ccc;
  outline: 0;
  width: 70%;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  display: grid;

}
button{
    background-color: #7E7474;
    border: 1px solid #464646;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
    box-sizing: border-box;
    color:#ccc;
    cursor: pointer;
    min-height: 40px;
    text-align: center;
    width:70%;
    font-size: 1.5rem;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  
  button :hover,
  button :active {
    background-color: initial;
    background-position: 0 0;
    color: #464646;
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

        <ul id="menu">
          <a href="doctor-grades.php"><li>Grades</li></a>
          <a href="doctor-attendance.php"><li>Attendance</li></a>
          

        </ul>
      </div>
    </nav>
    <img src="logo.png" alt="logo">
  </header>

  <?php
    require('connection.php');
    $id = $_GET['id'];
    if(isset($_POST["btn"])){
        $name = $_POST["name"];
        $sec = $_POST["sec"];
        $doctor = $_POST["doctor"];
        $l1 = $_POST["l1"];
        $d1 = $_POST["d1"];

        
        $sql = "UPDATE grades SET grade='$d1',exams='$name',project='$l1'
        ,Quiz='$sec',Assignment='$doctor' WHERE id=$id";
        mysqli_query($conn,$sql);
    
   
    ?>
    <script>
    swal("Grades added", "grades has been successfully added", "success");
   </script>
   <?php

    }

    ?>
    <h1>Add grades</h1>
    <form method="post">
     <div class="first">
    Exams grades: <input type="text" name = name ><br>
     Quizes grades:  <input type="text" name = sec ><br>
    Assignment grades: <input type="text" name = doctor ><br>
     Project grade: <input type="text" name = l1 ><br>
     The final grade: <input type="text" name = d1 ><br>

      
      <br>
    
    <button class=btn name= btn value="Search">Submit</button>
    </form>


    




  
    
</body>
</html>