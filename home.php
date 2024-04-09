
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="try3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <style>
    :root {
      --numDays: 5;
      --numHours: 10;
      --timeHeight: 60px;

      --eventColor4: #CED4DA;
    }
    .event{
      text-align: center;
      font-size:1.7rem;
      width:95%;
      height:100%;

    }
    .calendar {
      display: grid;
      gap: 10px;
      grid-template-columns: auto 1fr;
      margin: 2rem;
    }
    .timeline {
      display: grid;
      grid-template-rows: repeat(var(--numHours), var(--timeHeight));
    }
    .days {
      display:grid;
      grid-column: 2;
      gap: 5px;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
    .events {
      display: grid;
      grid-template-rows: repeat(var(--numHours), var(--timeHeight));
      border-radius: 5px;
      background: var(--calBgColor);
    }
    .title {
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .event {
      border: 1px solid var(--eventBorderColor);
      border-radius: 5px;
      padding: 0.5rem;
      margin: 0 0.5rem;
      background: white;
    }

    .securities {
      background: var(--eventColor4);
    }





      .date-num {
        font-size: 3rem;
        font-weight: 600;
        display: inline;
      }


      .date-day {
        display: inline;
        font-size: 3rem;
        font-weight: 100;
      }

    header{
      background-color:#7E7474;
      left:0;
      top:0;
      max-height:120px;
      position: fixed;
      width:100%;
      justify-content:space-between;
      display:flex;
    }

    img{
      max-height: 120px;
      max-width:200px;
    }

  #menuToggle
{
  display: block;
  position: relative;
  top: 50px;
  left: 50px;

  z-index: 1;

  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;

  transition: color 0.3s ease;
}

#menuToggle a:hover
{
  color: black;
}


#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;

  cursor: pointer;

  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */

  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;

  background: white;
  border-radius: 3px;

  z-index: 1;

  transform-origin: 4px 0px;

  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/*
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background:white;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 300px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  background: #7E7474;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;


  transform-origin: 0% 0%;
  transform: translate(-100%, 0);

  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  min-height:750px;
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
  color: #FFFFFF;
}

#menuToggle input:checked ~ ul
{
  transform: none;
}
#menu li:hover,
#menu li:active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}

#menu li:active {
  opacity: .5;

}

.start-10 {
  grid-row-start: 2;
}

.start-12 {
  grid-row-start: 9;
}
.events{

height: 275px;
width:110%;


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
          <a href="Registeration.php"><li>Registeration</li></a>
          <a href="Schedule.php"><li>Schedule</li></a>
          <a href="BookStore.php"><li>Book store</li></a>
          <a href="Location.php"><li>Location</li></a>
          <a href="Grades.php"><li>Grades</li></a>
          <a href="Grade_simulator.php"><li>Grade Simulator</li></a>
          <a href="Attendance.php"><li>Attendance</li></a>
          <a href="Review.php"><li>Review</li></a>

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

  $sql = "SELECT Time1,Subject FROM schedule WHERE Day='$date' AND Id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $time1=$row["Time1"];
        $subject=$row["Subject"];
        ?>
        <div class="event start-10 end-12 securities shadow p-3 mb-5 bg-body-tertiary rounded">
          <p class="title"><?php echo $subject; ?></p>
          <p class="time"><?php echo $time1; ?></p>
        </div>

    <?php



      }
    }else {
      ?> <div class="alert alert-secondary" role="alert">
There is no lectures for today!
</div>
<?php
    }
    $conn->close();


    ?>













  </body>
</html>
