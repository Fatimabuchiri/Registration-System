<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctor-grades.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Taking attendance</title>
    <style>
        .first{
            padding-top:60px;
        }
        .error{
            color:red;
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
  $numberErr="";
  $aErr="";
    require('connection.php');
    $id = $_GET['id'];
    if(isset($_POST["btn"])){
        $name = $_POST["name"];
        $sec = $_POST["sec"];
        $sql = "UPDATE attendance SET absent='$name',excuses='$sec' WHERE id=$id";
        mysqli_query($conn,$sql);
    
   
if(empty($name)){
    $numberErr = "*Please write this field";
  }
  elseif(!(is_numeric($name))){
    $numberErr = "*Only write numbers";
  }
  elseif(empty($sec)){
    $aErr = "*Please write this field";
  }
  elseif(!(is_numeric($sec))){
    $aErr = "*Only write numbers";
  }

  else{
    ?>  <script>
    swal("Attendance added", "Attendance has been successfully added", "success");
   </script>
   <?php
  }
    
    }

    ?>
      <form method="post">
     <div class="first">
    <h1>take attendance</h1>
    
    Absents: <input type="text" name = name ><br><span class = "error"><?php echo $numberErr;  ?></span><br><br>
    Excuses:  <input type="text" name = sec ><br><span class = "error"><?php echo $aErr;  ?></span><br><br>
  
      
      <br>
    
    <button class=btn name= btn value="Search">Submit</button>
    </form>

    
</body>
</html>