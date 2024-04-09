<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Review.css">
    <title>Home</title>

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
               <a href="#"><li>Registeration</li></a>
               <a href="#"><li>Payment</li></a>
               <a href="#"><li>Book store</li></a>
               <a href="Location.php"><li>Location</li></a>
               <a href="#"><li>Grades</li></a>
               <a href="#"><li>Grade Simulator</li></a>
               <a href="#"><li>Receipt</li></a>
               <a href="#"><li>Attendance</li></a>
                 <a href="#"><li>Review</li></a>
               <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
             </ul>
           </div>
         </nav>
         <img src="images/logo.jpeg" alt="logo">
       </header>


       <section id="testimonials">
         <form method="post">
           <div class="building" >
             <label for="building">Coures Code </label>
             <input type="text" name="coures"  placeholder="coures code"></br>
             <label for="building"> Doctor Name  </label>
             <input type="text" name="doctor"  placeholder="doctor name "></br>
               <button class=btn name= btn value="Search">Search</button>
         </form>
       </div>
     </br>
         <?php
         require('connection.php');
         if(isset($_POST['btn'])){
           $course=$_POST['coures'];
           $doctor=$_POST['doctor'];


           $sql = "SELECT review FROM review WHERE code='$course' AND doctor='$doctor'";
           $result = $conn->query($sql);

           if ($result->num_rows > 0) {
               // output data of each row
               while($row = $result->fetch_assoc()) {
                   $review = $row['review'];
           echo "<table >";
           echo "<tr>";
           echo "<td>";
           echo $review."<br>";
           echo "</td>";
           echo "</tr>";
           echo"</table>";


             }
         } else {
             echo "0 results";
         }


         $conn->close();
         }

          ?>
        </section>

       </body>
</html>
