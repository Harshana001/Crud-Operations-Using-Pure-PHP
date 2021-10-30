<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from 'crud' where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$joined_date=$row['joined_date'];
$routes=$row['routes'];
$comments=$row['comments'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $joined_date=$_POST['joined_date'];
    $routes=$_POST['routes'];
    $comments=$_POST['comments'];

    $sql="update 'crud' set id=$id,name='$name',email='$email',mobile='$mobile',joined_date='$joined_date',routes='$routes',comments='$comments'
    where id=$id";
    $result=mysqli_query($con,$sql);
    
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Practical Test</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off"
                value=<?php echo $name;?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off"
                value=<?php echo $email;?>>
            </div>

            <div class="form-group">
                <label>Telephone Number</label>
                <input type="text" class="form-control" placeholder="Enter Telephone Number" name="mobile" autocomplete="off"
                value=<?php echo $mobile;?>>
            </div>

            <div class="form-group">
                <label>Joined Date</label>
                <input type="date" class="form-control" name="joined_date" autocomplete="off"
                value=<?php echo $joined_date;?>>
            </div>

            <div class="form-group">
                <label>Current Working Routes</label>
                <input type="text" class="form-control" placeholder="Enter Working Route" name="routes" autocomplete="off"
                value=<?php echo $routes;?>>
            </div>

            <div class="form-group">
                <label>Comment of the Managers</label>
                <input type="text" class="form-control" placeholder="Comment" name="comments" autocomplete="off"
                value=<?php echo $comments;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>