<?php
require_once('header.php');
?>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <h1><b><i>Patient History</i></b></h1>
            <?php
            include('dbconnection.php');
            $query ="select * from user_data";
            $data = mysqli_query($con,$query) or die('selection query failed');
            
            
            ?>
            <h3>Reports</h3>
            <div class="wrapper">
            
            <?php
    if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_array($data)){
                    ?>
                <div class="card1">
                    <img src="<?php echo $row['image']; ?>" alt="">
                    <label>Report No. :</label>
                    <?php echo $row['u_id']; ?><br>
                    <label>Remark :</label>
                    <?php echo $row['remark']; ?>
                </div>
                <?php } }?>
            </div>              
        </header>

        <hr>
        </div>

        <hr>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
