<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Receipt.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Home</title>
    <style>
    .print1{
      padding-left:450px;
    }
    .print{
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
      width: 50%;
      margin-bottom: 750px;
      text-align: center;

    }
    .print:hover,
    .print:active {
      background-color: initial;
      background-position: 0 0;
      color: #464646;
    }

    .print:active {
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
         <img src="images/logo4.jpeg" alt="logo">
       </header>


    <div id="bot">
      <h1> RECIPT DETAILS </h1>

					<div id="table">
						<table id ="customers">
							<tr class="tabletitle">
								<td class="item"><h2>RECIPT NO : </h2></td>
								<td class="Rate"><h2></h2></td>
							</tr>
              <tr class="service">
                <td class="tableitem"><p class="itemtext"> COURSES :</p></td>
<?php
              require('connection.php');
              $sql = "SELECT Subject FROM schedule WHERE Id='202001458'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
$Subject = $row["Subject"];
?>
<td class="tableitem"><p class="itemtext"> <?php echo $Subject; ?></p></td>
<?php
                }
              }
 ?>

								<td class="tableitem"><p class="itemtext">25 BD each course</p></td>
							</tr>
							<tr class="service">
								<td class="tableitem"><p class="itemtext"> PAYED AMOUNT : </p></td>
                <?php
                $sql = "SELECT COUNT(Subject) FROM schedule WHERE Id='202001458'";
                $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      $count=$row["COUNT(Subject)"];
                      $total = 25*$count;
                      ?>
                      <td class="tableitem"><p class="itemtext">BD <?php echo $total; ?></p></td>
                    </tr>
                    <?php
                    }
                  }
                 ?>


						</table>
					</div><!--End Table-->



				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  <br>
  <div class="print1">
  <button onclick="window.print()" name = "print" class = "print">Print</button>
</div>






       </body>
</html>
