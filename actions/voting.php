<?php
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$sql="update `userdata` set votes='$totalvotes' where id='$gid'";
$updatevotes=mysqli_query($conn,$sql);

$sql2="update `userdata` set status=1 where id='$uid'";
$updatestatus=mysqli_query($conn,$sql2);

if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($conn,"Select username,photo,votes,id from `userdata` where standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['group']=$group;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting successfull");
    window.location="../partials/dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("Technical error !! vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}

?>