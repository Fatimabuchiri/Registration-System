<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="doctor-home.css">
    <link rel="stylesheet" href="try3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <img src="logo.jpeg" alt="logo">
  </header>
  <div class="part1">
  <h1> TODAY'S SCHEDULE</h1>
  <div class="calendar">
      <div class="days">
        <div class="day mon">
          <div class="date">
            <p class="date-num"><?php echo date('d'); ?></p>
            <p class="date-day"><?php echo date('l'); ?></p>
          </div>
            <div class="events">
            <?php

              require('connection.php');
            $date=date("l");
            $id = $_GET['id'];
            $sql = "SELECT code,sec,location1,time1,day1 FROM courses WHERE day1='$date' id='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $sec=$row['sec'];
        $code=$row['code'];
        $time=$row['time1'];
        $day=$row['day1'];
        $location=$row['location1'];
        ?>
        <div class="event start-10 end-12 securities shadow p-3 mb-5 bg-body-tertiary rounded">
          <p class="title"><?php echo $sec; ?> -
    <?php echo $code; ?> -
          <?php echo $time; ?> -
          <?php echo $location; ?></p>
        </div>
          <?php
      }
    }
          ?>  


    
</body>
</html>