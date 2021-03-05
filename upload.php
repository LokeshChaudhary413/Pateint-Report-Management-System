<?php

require_once('header.php');
?>

<div class="container">
        <header class="jumbotron hero-spacer">

<?php
if(isset($_POST['submit'])){
    include('dbconnection.php');
    
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $folder = "upload-images/".$file_name;
    move_uploaded_file($file_tmp,$folder);
    $remark =$_POST['remark'];
    
    
    $query ="insert into user_data(image,remark) values('$folder','$remark')";
    
    $result = mysqli_query($con,$query)or die('Query Failed');
    if($result){
        echo "<sricpt>alert('Report uploaded successfully')";
        header("location:welcome.php");
    }else{
        echo "<sricpt>alert('Please Check your Reports')";
    }
 } 

?>
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <h2><b><i>Patient History</i></b></h2>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image"><br>
                <input type="text" name="remark" placeholder="Extra Details"><br><br>
                <input type="submit" name="submit" value="Upload"><br>
            </form>
        </header>
        <hr>
    </div>
    <hr>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>