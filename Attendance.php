<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Attendance.css">

    <title>Attendance</title>
<style>
.error{
  color:red;
}

</style>
  </head>

<header>
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

             <ul id="menu">
               <a href="Registeration.php"><li>Registeration</li></a>
               <a href="BookStore.php"><li>Book store</li></a>
               <a href="Location.php"><li>Location</li></a>
               <a href="Grades.php"><li>Grades</li></a>
               <a href="Grade-simulator.php"><li>Grade Simulator</li></a>
               <a href="Attendance.php"><li>Attendance</li></a>
              <a href="review.php"><li>Review</li></a>
              <a href="receipt.php"><li>Riceipt</li></a>
             </ul>
           </div>
         <img src="images/logo4.jpeg" alt="logo">
       </header>


  <body>
       <section id="testimonials">
         <form method="post">
           <div class="buildin" >
             <label for="bu">Coures Code </label>
             <input type="text" name="coures"  placeholder="ITCS389">
           </br>
           <button class="btn" name ="btn">Search</button>
         </form>
         <?php
         require('connection.php');
         if(isset($_POST["btn"])){
           $course = $_POST["coures"];
           $sql = "SELECT * FROM attendance WHERE code = '$course' AND Id = '202001458'";
             $result = $conn->query($sql);
             if ($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                 $absent = $row["absent"];
                 $excuses = $row["excuses"];
                 $remain = 12 - $absent;
                 $remain = $excuses + $remain;
                 ?>
                 <div id="bot">
                      <div id="table">
                        <table id ="customers">
                          <tr class="tabletitle">
                            <td class="item"><P> ABSENT  : <?php echo $absent ;?></P></td>
                          </tr>

                          <tr class="service">
                            <td class="tableitem"><p class="itemtext"> EXCUSES: <?php echo $excuses; ?></p>
                            </td>
                          </tr>

                          <tr class="service">
                            <td class="tableitem"><p class="itemtext"> REMAIN WF :<?php echo $remain; ?> </p></td>
                          </tr>
                </table>
                      </div>
               </div>
             </br>
             <?php

               }
             }
             else {
               echo "<p class = 'error'> *you do not have this course.</p>";
             }
         }


          ?>


       </body>
</html>
