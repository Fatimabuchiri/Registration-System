<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Grade-simulator.css">
    <title>Grade Simulator</title>
    <style>
    .error {color: #FF0000;}
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
          <a href="#"><li>Registeration</li></a>
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

        <?php

        $Err="";
        $coures=$_POST['coures'];
        $grade=$_POST['grade'];
      if(isset($_POST['btn']) ){
        if (trim($grade)=="" || trim($coures)==""){
        $Err = "*grade or course code is missing!";
          }
          elseif($grade>60){ $Err="*grade should be out of 60%";}

      else{
        $p="";
        $f="";
        $s="";

        if($grade >= 50 and $grade<=60){
          $p = "you will pass the course!";
          $s="success";
          $f="Good job!";

        }
        elseif($grade <= 30){
          $p="you will not pass the course.";
          $s="error";
          $f="Unfourtunatly!";
        }
        else{
          $p="There is 50% chance to pass the course.";
          $s="warning";
          $f="you still can do it!";
        }


         ?>
         <script>
             swal("<?php echo $f ?>", "<?php echo $p ?>", "<?php echo $s ?>");
            </script>
      <?php     }
    }?>


         <form method="post">
               <section id="testimonials">

                   <div class="buildin" >
                     <label for="bu">COURSE NAME </label>
                     <input type="text" name="coures"  placeholder=" ITCS 489 "></br>
                     <label for="bu"> GRADE  </label></br>
                     <input type=text name=grade placeholder="grade out of 60%">
                   </br>
                   <span class="error"><?php echo  $Err;?></span></br></br>
                 <button class=btn name= btn value="Search"> CALCULATE </button>
                 <div>
                </section>
              </form>


       </body>
</html>
