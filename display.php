<?php
include 'connect.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Test</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone Number</th>
                <th scope="col">Joined_date</th>
                <th scope="col">Current Working Route</th>
                <th scope="col">Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="select * from 'crud'";
                    $result=mysqli_query($con, $sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $mobile=$_POST['mobile'];
                            $joined_date=$_POST['joined_date'];
                            $routes=$_POST['routes'];
                            $comments=$_POST['comments'];

                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$joined_date.'</td>
                            <td>'.$routes.'</td>
                            <td>'.$comments.'</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>