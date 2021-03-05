<?php 
    include('dbconnection.php');
    $id =$_POST['r_id'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $folder = "upload-images/".$file_name;
    move_uploaded_file($file_tmp,$folder);
    $remark =$_POST['remark'];

$sql ="update user_data set remark='$remark', image='$folder' where u_id ='$id'";

$data = mysqli_query($con,$sql)or die('Query failed');

header("location:welcome.php");

 
?>
