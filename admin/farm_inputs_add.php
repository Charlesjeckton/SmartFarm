<?php require_once('../connect/database.php');
      require_once('../connect/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SmartFarm | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  include_once ('page-headers.php'); ?>
            <div class="line"></div>
            <?php
            function addFarmInput($description, $name, $price, $db) {
                $description = mysqli_real_escape_string($db, $description);
                $name = mysqli_real_escape_string($db, $name);
                $price = mysqli_real_escape_string($db, $price);
            
                $sql = "INSERT INTO farm_inputs (description, name, price) VALUES ('$description', '$name', '$price')";
                $result = mysqli_query($db, $sql);
            
                if ($result) {
                    return true; // Successful insertion
                } else {
                    return false; // Error occurred
                }
            }
            
            // Check if form is submitted
            if (isset($_POST['submit'])) {
                $description = $_POST['description'];
                $name = $_POST['name'];
                $price = $_POST['price'];
            
                // Call function to add farm input
                $inserted = addFarmInput($description, $name, $price, $db);
            
                if ($inserted) {
                    // Farm input added successfully
                    echo '<script>alert("Farm input added successfully.");</script>';
                } else {
                    // Error adding farm input
                    echo '<script>alert("Error: Unable to add farm input.");</script>';
                }
            }
                
                ?>    
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">Add Farm Inputs </p>    
            <div class="card-body">
              <form action="pest_add.php" method="post">
             <div class="row">
             <div class="col-md-12 form-group">
                 <label>Description</label>
                 <input type="text" name="description" class="form-control" maxlength="200" placeholder="Describe the farm input" required>
             </div>  
               
                 
             </div>  
         <div class="row">
             <div class="col-md-6 form-group">
                 <label>Farm Input Name</label>
                 <input type="text" name="name" class="form-control" maxlength="200" placeholder="Enter the Input name" required>
             </div> 
              
                 <div class="col-md-6 form-group">
                 <label>Price</label>
                 <input type="number" name="price" class="form-control" maxlength="200" placeholder="" required>
             </div> 
             
             
                 
             </div>  
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Add</button>  
                </div> 
                 <div class="col-md-6 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
            </div>
            </div>    
            </div>
           
            </div>
             <div class="line"></div>
                 <footer>
            <p class="text-center sm-sys">
            &copy; copyright @  <?php echo date('Y');?> by <span>Mr. Charles Jeckton</span>  |  All rights reserved!  
            </p>
            </footer>
           <div class="line"></div> 
        
        </div>
    </div>
  
       
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>
    <script>
  $( function() {
   $("#ssm").datepicker({
    minDate: 0,
    maxDate:1,
});
      
  } );
  </script>
   
</body>
</html>