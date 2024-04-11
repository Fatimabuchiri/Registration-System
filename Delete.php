<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('connection.php');
    $id=$_GET['id'];
    $sql = "SELECT * FROM schedule where Id2='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id2=$row['Id'];
    $sql = "DELETE FROM schedule WHERE Id2='$id'";
    mysqli_query($conn,$sql);
    if( mysqli_query($conn,$sql)){
        header('location:schedule.php?id='.$id2);
    }

    ?>
</body>
</html>