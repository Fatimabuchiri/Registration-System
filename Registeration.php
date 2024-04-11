<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
   
    <title>Course registration</title>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <style>
      header{
  background-color:#7E7474;
  left:0;
  top:0;
  max-height:110px;
  position: fixed;
  width:100%;
  justify-content:space-between;
  display:flex;
}

img{
  max-height:110px;
  max-width:260px;

}


.custom-select{

  font-size: 25px;
  color: #615959;
  justify-content: space-between;
  padding-left: 250px;
  padding-top: 250px;}
select{
  text-align: center;
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #ccc;
 
}

body
{
  margin: 0;
  padding: 0;
  text-transform: uppercase;

  /* make it look decent enough */
  background-color:#efeeeee0;
}



.TheTable{
  padding-left:100px;
  text-align:center;
}

.reg{

  border-spacing: 1;
  border-collapse: collapse;
  border-radius:6px;
  height: 100px;
  overflow:hidden;
  width: auto;
  font-size:18px;

}


th{
  background-color: #7E7474;
  width:150px;
  height:50px;
  color: #ccc;

}
td{
  padding-left:8px;
  text-align:left;
  text-align:center;
  background-color: white;
  width:150px;
  color: #7E7474;

}

.Add{
  background-color: #7E7474;
  border: 1px solid #464646;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color:#ccc;
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
  margin-top: 50px;
  text-align: center;

}
.Add:hover,
.Add:active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}

.Add:active {
  opacity: .5;
}

.adding{
  padding-left: 300px;
  align-items: center;
  
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

  background: #ccc;
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
  background:#ffffff;
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
  width:200px;
  margin: -100px 0 0 -50px;
  padding-top: 125px;
  background: #7E7474;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  min-height:1000px;
}

#menu li
{
  padding: 15px 0;
  font-size: 22px;
  color: #ffffff;

}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}




.btn{
  background-color:#7E7474;
  border: 1px solid #464646;
  text-transform: uppercase;

  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color:#FFFFFF;
  cursor: pointer;
  min-height: 40px;
  text-align: center;
  width:25%;
  font-size: 1rem;
  margin-top: 20px;
  margin-bottom: 20px;
}

.btn:hover,
.btn :active {
  background-color: initial;
  background-position: 0 0;
  color: #464646;
}
.message_box{
  padding: 20px;
}

h1{
  margin-left: 80px;
margin-top: 30px;
  font-size: 1.7rem;
  font-weight: 500px;
  margin-bottom: 20px;
  line-height: 1.2;
  text-align: center;
color: #ffffff;
}
    </style>

<header>
    <nav role="navigation">
      <div id="menuToggle">

        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
       
          <a href='Schedule.php?id=<?php echo $_GET['id'];?>'><li>Schedule</li></a>
          <a href='BookStore.php?id=<?php echo $_GET['id'];?>'><li>Book store</li></a>
          <a href='Location.php?id=<?php echo $_GET['id'];?>'><li>Location</li></a>
          <a href='Grades.php?id=<?php echo $_GET['id'];?>'><li>Grades</li></a>
          <a href='Grade_simulator.php?id=<?php echo $_GET['id'];?>'><li>Grade Simulator</li></a>
          <a href='Attendance.php?id=<?php echo $_GET['id'];?>'><li>Attendance</li></a>
          <a href='Review.php?id=<?php echo $_GET['id'];?>'><li>Review</li></a>
        </ul>
      </div>
    </nav>
    <a href='home.php?id=<?php echo $_GET['id'];?>'><img src="logo.png" alt="logo"></a>
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

      echo "<button class='btn' name='btn'>search</button><br><br><br>";



if(isset($_POST['btn'])){
          $selected=$_POST['course'];
          $selected2=$_POST['Sec'];
          $excuted="FALSE";
          $sql = "SELECT * FROM courses WHERE code='$selected' AND sec='$selected2'";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()){
            $code=$row["code"];
            $doctor=$row["doctor"];
            $Day=$row["day1"];
            $time2=$row["time1"];
            $Sec = $row["sec"];
            $location = $row["location1"];
            $seats = $row["seats"];
          
          ?>
            </div>
          <div class='TheTable'>
      <table class="reg">
          <th>Section</th>
          <th>Course code</th>
          <th>Doctor name</th>
          <th>Day</th>
          <th>Time</th>
          <th>location</th>
          <th>Available seats</th>
        <tr>
          <td><?php echo $Sec ?></td>
          <td><?php echo $code ?></td>
          <td><?php echo $doctor ?></td>
          <td><?php echo $Day ?></td>
          <td><?php echo $time2 ?></td>
          <td><?php echo $location ?></td>
          <td><?php echo $seats ?></td>
        </tr>
      </table>

  </div>

        <?php
      }
      $id=$_GET['id'];
        $sql = "SELECT Subject FROM schedule WHERE Subject = '$selected' AND Id= '$id'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
          $Subject=$row["Subject"];
          if($Subject == $selected){
          ?><script>
                swal("Cannot add a course!", "course has been already added to your schedule", "error");
               </script>
               <?php
               $excuted = "TRUE";
          }
        }

$sql = "SELECT * FROM courses WHERE code='$selected' AND sec='$selected2'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  $Day = $row['day1'];
  $time2=$row["time1"];
  $Sec = $row["sec"];
  $code=$row["code"];
  $id=$_GET['id'];
if (($seats > 0) and ($excuted == "FALSE") ){
$sql = "INSERT INTO schedule (Id, Day, Time1, Subject,Sec)
VALUES ('$id', '$Day','$time2','$code','$Sec');";
mysqli_query($conn,$sql);
$seats = $seats - 1;
$sql = "UPDATE courses SET seats=$seats WHERE  code='$selected' AND sec='$selected2'";
mysqli_query($conn,$sql);
echo "<div class='adding'>";
echo "<button class='Add' name='Add'>Add</button>";
echo "</div>";
}
}
}


if(isset($_POST['Add'])){
?>
<script>
    swal("Course added!", "course has been successfully added to your schedule", "success");
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
