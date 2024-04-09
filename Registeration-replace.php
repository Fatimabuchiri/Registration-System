<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Registeration-replace.css">
    <title>Course registration</title>
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
  color: #EEEEEE;
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
  padding: 50px;
  margin: -100px 0 0 -50px;
  padding-top: 125px;
  background: #7E7474;
  list-style-type: none;
  /* to stop flickering of text in safari */
  -webkit-font-smoothing: antialiased;

  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  min-height:750px;

}

#menu li
{
  padding: 10px 0;
  color: #FFFFFF;
  font-size: 22px;
}
/*

 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}
header{
  background-color:#7E7474;
}
.btn{
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
  width: 90px;
  margin-bottom: 750px;
  text-align: center;

}
.btn:hover,
.btn:active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}

.btn:active {
  opacity: .5;
}
.custom-select{
  padding:200px 100px ;
  height: 0px;
  color: black;
  font-weight: bold;
  font-size: 25px;
}
select{
  width:400px;
  height:40px;
}

.reg{
  border-spacing: 1;
  border-collapse: collapse;
  background:white;
  border-radius:6px;
  height: 100px;
  overflow:hidden;
  width: 1000px;
  margin:0 auto;
  position:relative;
  font-size:25px;
  display:contents;
}
.TheTable{
  padding-left:180px;

}

th{
  background-color: #7E7474;
  padding-left:8px;
  text-align:center;
  width:150px;
  height:50px;
}
td{
  padding-left:8px;
  text-align:left;
  font-weight: normal;
  text-align:center;
  background-color: white;
  width:150px;

}
.adding{
  padding-left:350px;
}
.Replace{
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
  width: 70%;
  margin-bottom: 750px;
  text-align: center;
}
.Replace:hover,
.Replace:active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}

.Replace:active {
  opacity: .5;
}

</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <img src="image/logo.jpeg" alt="logo">
  </header>
  <form method="post">
    <div class="custom-select" >
      <label for="Reg">Course code</label>
  <?php
  require('connection.php');
  $sql = "SELECT code FROM registeration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<select name='course'>";
     echo "<option value=''>--- Choose a course ---</option>";
      while($row = $result->fetch_assoc()) {
      $code = $row["code"];
      echo "<option>".$code."</option>";
      }
      echo "</select>";
      echo "&nbsp &nbsp";
?>
  <select name="Sec">
       <option value="">--- Choose a section ---</option>
       <?php
       $sql = "SELECT Sec FROM registeration";
       $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $Sec = $row["Sec"];
        ?>
        <option><?php  echo $Sec?></option>
        <?php
        }
        echo "</select>";
          echo " &nbsp &nbsp";

      echo "<button class='btn' name='btn'>search</button><br><br><br>";
?>
</div>
<?php
if(isset($_POST['btn'])){
  $excuted = "FALSE";
          $selected=$_POST['course'];
          $selected2=$_POST['Sec'];
          $sql = "SELECT Sec,code,doctor,Day,time2,exam,seats FROM registeration WHERE code='$selected' AND Sec='$selected2'";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()){
            $code=$row["code"];
            $doctor=$row["doctor"];
            $Day=$row["Day"];
            $time2=$row["time2"];
            $Sec = $row["Sec"];
            $exam = $row["exam"];
            $seats = $row["seats"];
          ?>
          <div class="TheTable">
      <table class="reg">
          <th>Section</th>
          <th>Course code</th>
          <th>Doctor name</th>
          <th>Day</th>
          <th>Tima and Date</th>
          <th>Exam time</th>
          <th>Available seats</th>
        <tr>
          <td><?php echo $Sec ?></td>
          <td><?php echo $code ?></td>
          <td><?php echo $doctor ?></td>
          <td><?php echo $Day ?></td>
          <td><?php echo $time2 ?></td>
          <td><?php echo $exam ?></td>
          <td><?php echo $seats ?></td>
        </tr>
      </table>
    </div>

        <?php
      }
        $sql = "SELECT Subject FROM schedule WHERE Subject = '$selected'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $Subject=$row["Subject"];
          if($Subject == $selected){
          ?><script>
                swal("Cannot replace a course!", "course is already in your schedule", "error");
               </script>
               <?php
               $excuted = "TRUE";
          }
        }
        $sql = "SELECT * FROM registeration WHERE code='$selected' AND Sec='$selected2'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $Day = $row['Day'];
          $time2=$row["time2"];
          $Sec = $row["Sec"];
          $code=$row["code"];

        $id = $_GET['id'];
if(($seats > 0) and ($excuted == "FALSE")){

$sql = "UPDATE schedule SET Day = '$Day', Time1 = '$time2', Subject = '$code',Sec = '$Sec' WHERE Id2='$id'";
mysqli_query($conn,$sql);
echo "<br><br>";
echo "<div class='adding'>";
echo "<button class='Replace' name='Replace'>Replace</button>";
echo "</div>";
}
}

}

if(isset($_POST['Replace'])){
?>

<script>
    swal("Course Replaced!", "course has been successfully Replaced", "success");
   </script>

<?php
  }
}


    $conn->close();
   ?>

   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script type="text/javascript">
   var code = {};
   $("select[name='course'] > option").each(function () {
       if(code[this.text]) {
           $(this).remove();
       } else {
           code[this.text] = this.value;
       }
   });
   </script>
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script type="text/javascript">
   var code = {};
   $("select[name='Sec'] > option").each(function () {
       if(code[this.text]) {
           $(this).remove();
       } else {
           code[this.text] = this.value;
       }
   });
   </script>







  </body>
</html>
