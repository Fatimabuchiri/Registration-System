<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Grades.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Grades</title>
<style>
.part23{
  padding-left: 60px;
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

                 <!--
             Too bad the menu has to be inside of the button
             but hey, it's pure CSS magic.
             -->
             <ul id="menu">
               <a href="Registeration.php"><li>Registeration</li></a>
               <a href="payment.php"><li>Payment</li></a>
               <a href="BookStore.php"><li>Book store</li></a>
               <a href="Location.php"><li>Location</li></a>
               <a href="Grades.php"><li>Grades</li></a>
               <a href="Grade-simulator.php"><li>Grade Simulator</li></a>
               <a href="Attendance.php"><li>Attendance</li></a>
              <a href="review.php"><li>Review</li></a>


             </ul>
           </div>
         </nav>
         <a href="home.php">
         <img src="images/logo4.jpeg" alt="logo">
         </a>
       </header>


    <div id="bot">

					<div id="table">
						<table id ="customers">

							<tr class="tabletitle">
								<td class="item"><h2> COURES </h2></td>
								<td class="Rate"><h2> CREDIT </h2></td>
                <td class="Grades"><h2> GRADE </h2></td>
							</tr>
<?php
                require('connection.php');
                $sql = "SELECT code,credit,grade,status,CGPA FROM grades WHERE Id = '202001458'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $passed = 0;
                  $points = 0.0;
                  $SGPA = 0.0;
                  $count = 0;
               while($row = $result->fetch_assoc()) {
                 $code = $row["code"];
                 $credit = $row["credit"];
                 $grade = $row["grade"];
                 $status = $row["status"];
                 $CGPA = $row["CGPA"];
                 if($grade != 'F'){
                 $passed = $passed + $credit;
               }
               if($grade == 'A'){
                  $points = 4.0;
               }
               if($grade == 'A-'){
                 $points = 3.67;
               }
               if($grade == 'B+' ){
                 $points = 3.33;
               }
               if($grade == 'B'){
                 $points = 3.00;
               }
               if($grade == 'B-'){
                 $points = 2.67;
               }
               if($grade == 'C+'){
                 $points = 2.33;
               }
               if($grade == 'C'){
                 $points = 2.00;
               }
               if($grade == 'C-'){
                 $points = 1.67;
               }
               if($grade == 'D+'){
                  $points = 1.33;
               }
               if($grade == 'D'){
                 $points = 1.00;
               }
               if($grade == 'F'){
                 $points = 0.0;
               }
               $count = $count + 1;
               $SGPA = $SGPA + $points;



                 ?>
                 <tr class="service">
                   <td class="tableitem"><p><?php echo $code; ?></p>
                    </td>
                    <td class="tableitem"><?php echo $credit; ?></td>
                    <td class="tableitem"><?php echo $grade; ?></td>
                 </tr>
<?php
                }
                }

 ?>

						</table>
					</div><!--End Table-->
<div class="part22">
<form name="l1">
  <label for="fname">Passed CH</label>
  <input type="text" id="fname" name="fname" value="<?php echo $passed; ?>">
  <label for="lname">SGPA</label>
  <input type="text" id="lname" name="lname" value="<?php echo $SGPA/$count; ?>">
</div>
</form>
<br>
<form name="l2">
  <div class="part23">
  <label for="fname">Enrollment Status</label>
  <input type="text" id="fname" name="fname" value="<?php echo $status; ?>">
  <label for="lname">CGPA</label>
  <input type="text" id="lname" name="lname" value="<?php $SGPA= $SGPA/$count;
                                                          echo ($CGPA + $SGPA)/2;?>">
</div>
</form>


				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->






       </body>
</html>
