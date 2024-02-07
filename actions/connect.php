<?php

$conn=mysqli_connect("localhost","root","","votingsystem");
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
// else{
//     die(mysqli_error($conn));
// }

?>