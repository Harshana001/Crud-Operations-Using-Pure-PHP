<?php

$con=new mysqli('localhost', 'root', '12345', 'practical_test');

if(!$con){
    die(mysqli_error($con));
}

?>