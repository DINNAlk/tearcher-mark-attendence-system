<?php
SESSION_START();
$connection=mysqli_connect('localhost','root','','teacherone');
$userid=$_POST['uid'];
$name=$_POST['uname'];
$subject=$_POST['usub'];
$query="INSERT INTO teacher VALUES('$userid','$name','$subject')";
$result = mysqli_query($connection, $query);
if($result){
    header('Location:Index.php');
}
else{
    print 'Something Went To Wrong';
}
?>