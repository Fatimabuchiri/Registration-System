<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<button type="button" name="button">button</button>
<?php
if(isset($_POST['button'])){
?>
<script>
    swal("Course added!", "course has been successfully added to your schedule", "success");
   </script>
   <?php
}
 ?>
