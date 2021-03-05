<div class="container">
    <header class="jumbotron hero-spacer">

        <h1>A Warm Welcome!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        <?php require_once('header.php'); ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <label>Report No. : </label>
            <input type="text" name="rid"><br>
            
            <input type="submit" name="showbtn" value="Show"><br><br>
        </form>
<?php
if(isset($_POST['showbtn'])){
    require_once('dbconnection.php');  
    $id = $_POST['rid'];
    $query = "select * from user_data where u_id ='$id'";
    $data = mysqli_query($con,$query) or die('Query Failed');
    if(mysqli_num_rows($data)>0){
        while($row=mysqli_fetch_assoc($data)){
    
        ?>

        <h2><b><i>Patient History</i></b></h2>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r_id" value="<?php echo $row['u_id'] ?>">
            <label>Report : </label><br><br>
            <img src="<?php echo $row['image']; ?>" width='100' alt="check image">
            <input type="file" name="image" value="<?php echo $row['image']; ?>"><br>
            <label>Remark : </label>
            <input type="text" name="remark" placeholder="Extra Details" value="<?php echo $row['remark'] ?>"><br><br>
            <input type="submit" name="submit" value="Update"><br>
        </form>
        <?php }} }?>
    </header>
    <hr>
</div>
<hr>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>