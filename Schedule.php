<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Schedule.css">
    <script src="https://kit.fontawesome.com/6597541892.js" crossorigin="anonymous"></script>
    <title>Schedule</title></style>
    <style>
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
  color: #FFFFFF;
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
  /* to stop flickering of text in safari */

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

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}
.schedule1{
  display:contents;
}
    td{
      padding-left:8px;
      text-align:left;
      font-weight: normal;
      text-align:center;
      width:150px;
      background-color:white;
    }
    th{
      width:150px;
      height:50px;
    }
.schedule{
  max-height: 0.5px;
  padding-left:320px;
}
.pay{
  padding-left:450px;
}
.Paying{
  background-color: #7E7474;
  border: 1px solid #464646;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px;
  width: 60%;
  margin-bottom: 750px;
  text-align: center;
}
.Paying:hover,
.Paying:active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}

.Paying:active {
  opacity: .5;
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
    <img src="logo.jpeg" alt="logo">
  </header>
  <div class="schedule">
    <table class="schedule1">
        <th>Section</th>
        <th>Course code</th>
        <th>Day</th>
        <th>Time</th>
        <th>Replace</th>
        <th>Remove</th>
        <tr>
          <?php
          require('connection.php');
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete = mysqli_query($conn,"DELETE FROM schedule WHERE Id2 = '$id'");


          }
          $sql = "SELECT * FROM schedule WHERE Id='202001458'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $Sec=$row["Sec"];
                $Subject=$row["Subject"];
                $Day=$row["Day"];
                $Time1=$row["Time1"];
                ?>
          <td><?php echo $Sec ?></td>
          <td><?php echo $Subject ?></td>
          <td><?php echo $Day ?></td>
          <td><?php echo $Time1 ?></td>
          <?php
          echo "<td><a href='Registeration-replace.php?id=".$row["Id2"]."'>Yes</a></td>";

        echo "<td><a href='Schedule.php?id=".$row["Id2"]."' id='btn'><i class='fa-solid fa-trash-can fa-sm' style='color: #000000;''></i></a></td>
        </tr>";

      }
    }
    ?>
      </table>
      </div>
      <br>
      <br>
        <div class='pay'>
          <form action = "payment.php">
          <button class='Paying'>Procced to checkout</button>
          </div>
</form>





  </body>
</html>
