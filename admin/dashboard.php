<?php require_once('../connect/database.php');
      require_once('../connect/session.php');
      require_once('retrieve.php');

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
        <div class="row">

            <div class="col-md-4">
                <div class="card-counter warning">
                <a href="dashboard.php"> <i class="fa fa-th"></i></a>
                    <span class="count-numbers">6</span>
                    <span class="count-name"><a href="dashboard.php"> Dashboard</a></span>
                </div>
            </div>

            <div class="col-md-4">
            <a href="farms_view.php">
                <div class="card-counter info">
                <a href="farms_view.php"><i class="fa fa-user-circle-o"> </i> </a>
                    <span class="count-numbers"><?php echo $jeckton;?></span>
                    <span class="count-name"> <a href="farms_view.php"> Farmers</a></span>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-counter success">
                <a href="pest_view.php"><i class="fa fa-info"></i></a>
                    <span class="count-numbers"><?php echo $jeckton1;?></span>
                    <span class="count-name"> <a href="pest_view.php"> Pest Control Tips</a></span>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card-counter danger">
                <a href="weather_view.php"><i class="fa fa-thermometer-half"></i></a>
                    <span class="count-numbers"><?php echo $jeckton2;?></span>
                    <span class="count-name"><a href="weather_view.php">Weather</a></span>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card-counter jeckton">
                <a href="farm_inputs_view.php"><i class="fa fa-product-hunt"></i></a>
                    <span class="count-numbers"><?php echo $jeckton3;?></span>
                    <span class="count-name"><a href="farm_inputs_view.php">Farm Inputs</a></span>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card-counter charles">
                <a href="users_view.php"><i class="fa fa-users"></i></a>
                    <span class="count-numbers"><?php echo $jeckton4;?></span>
                    <span class="count-name"><a href="users_view.php">Users</a></span>
                </div>
            </div>


        </div>

        <div class="line"></div>
        <?php require('weather.php');?>
        <div class="line"></div>
        <footer>
            <p class="text-center sm-system">
                &copy; copyright @ <?php echo date('Y');?> by <span>Mr. Charles Jeckton</span> | All rights reserved!
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

</body>

</html>