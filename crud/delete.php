<?php
    include "connect.php";

    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `crud` where id=$id";
        $result=mysqli_query($con,$sql);

        if ($result) {
            //echo "Deleted successfully";
            header('location:display.php');
        }
        else {
            die(mysqli_error($con));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Operation</title>
</head>
<body>
<button class="btn btn-primary"><a href="display.php" class="text-light">Go back</a></button>
</body>
</html>
