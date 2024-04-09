<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="try3.css">
    <style media="screen">
    .start-10 {
      grid-row-start: 2;
    }

    .start-12 {
      grid-row-start: 9;
    }
  .events{
    height: 275px;
  }

    </style>
  </head>
  <body>
    <div class="calendar">
      <div class="timeline">
        </div>

      <div class="days">
        <div class="day mon">
          <div class="date">
            <p class="date-num"><?php echo date('d'); ?></p>
            <p class="date-day"><?php echo date('l'); ?></p>
          </div>

          <div class="events">
          <?php require('connection.php');
            $date=date("l");
            //$id = $_GET['id'];
             //AND Id = '$id'
            $sql = "SELECT Time1,Subject FROM schedule WHERE Day='$date'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $time1=$row["Time1"];
                  $subject=$row["Subject"];


             ?>
            <div class="event start-10 end-12 securities">
              <p class="title"><?php echo $subject; ?></p>
              <p class="time"><?php echo $time1; ?></p>
            </div>



        <?php
      }
    } ?>
  </div>
</div>


        </div>

      </div>
    </div>
  </body>
</html>
