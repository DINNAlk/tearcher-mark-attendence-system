<?php
SESSION_START();
$connection=mysqli_connect('localhost','root','','teacherone');
$userid=$_POST['uid'];
$attendence = $_POST['uattend'] ?? 'NULL';
$currentDate = date('Y-m-d');
$queryOne="SELECT * FROM teacher WHERE ID='$userid'";
$queryTwo="INSERT INTO attend VALUES('$userid','$attendence','$currentDate')";
$result=mysqli_query($connection,$queryOne);
if(mysqli_num_rows($result)>0){
    $queryTwo = "INSERT INTO attend VALUES ('$userid', '$attendence', '$currentDate')";
    $resultTwo = mysqli_query($connection, $queryTwo);
    if($result){
        print "Your Attendences Marked !";
    }
    else{
        print "What ?";
    }
}
else{
    print "Palyan ynna hacker :)";
}
?>