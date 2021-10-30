<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $joined_date=$_POST['joined_date'];
    $routes=$_POST['routes'];
    $comments=$_POST['comments'];

    $sql="insert into 'crud' (name,email,mobile,joined_date,routes,comments) values('$name','$email','$mobile','$joined_date','$routes','$comments')";

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
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Telephone Number</label>
                <input type="text" class="form-control" placeholder="Enter Telephone Number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Joined Date</label>
                <input type="date" class="form-control" name="joined_date" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Current Working Routes</label>
                <input type="text" class="form-control" placeholder="Enter Working Route" name="routes" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Comment of the Managers</label>
                <input type="text" class="form-control" placeholder="Comment" name="comments" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>