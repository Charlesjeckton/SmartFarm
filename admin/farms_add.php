<?php
require_once('../connect/database.php');
require_once('../connect/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SmartFarm | Dashboard </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include_once ('page-headers.php'); ?>
        <div class="line"></div>  
        <?php
        function createFarmerAccount($name, $username, $password, $phone, $region) {
            global $db;
        
            // Escape user inputs to prevent SQL injection
            $name = mysqli_real_escape_string($db, $name);
            $phone = mysqli_real_escape_string($db, $phone);
            $region = mysqli_real_escape_string($db, $region);
            $username = mysqli_real_escape_string($db, $username);
            $password = mysqli_real_escape_string($db, $password);
            $password = md5($password);
        
            // Generate joined date
            $joined_date = date('Y-m-d');
        
            // Check if username already exists
            $sql_e = "SELECT * FROM farmers WHERE username ='$username'";
            $res_e = mysqli_query($db, $sql_e);
            if (mysqli_num_rows($res_e) > 0) {
                // Username already exists
                return 'Username already exists';
            } else {
                // Insert new farmer account
                $sql = "INSERT INTO farmers (name, username, password, phone, region, joined_date, type) VALUES ('$name', '$username', '$password', '$phone', '$region', '$joined_date', 'Farmer')";
                $result = mysqli_query($db, $sql);
        
                if ($result) {
                    // Farmer account created successfully
                    return 'Farmer account created successfully';
                } else {
                    // Error occurred during insertion
                    return 'Error: ' . mysqli_error($db);
                }
            }
        }
        
        // Usage example
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $region = $_POST['region'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $result_message = createFarmerAccount($name, $username, $password, $phone, $region);
            echo '<div class="alert alert-success">' . $result_message . '</div>';
        }
        ?>

        <div class="line"></div>
        <div class="row">
            <div class="col-md-12 ssm">
                <div class="card">
                    <p class="card-header deveops-cj">Add Farmers </p>
                    <div class="card-body">
                        <form action="farms_add.php" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Esther" required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" pattern="[0-0]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" placeholder="0774328908" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Region</label>
                                    <select class="form-control" name="region">
                                        <option>Nairobi</option>
                                        <option>Nyanza</option>
                                        <option>Upper Rift-Valley</option>
                                        <option>Lower Rift-Valley</option>
                                        <option>Central</option>
                                        <option>Coast</option>
                                        <option>Western</option>
                                        <option>North Eastern</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Mbugua" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" maxlength="20" placeholder="Mbugua123" required>
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
            <p class="text-center sm-system">
                &copy; <?php echo date('Y'); ?> by <span>Mr. Charles Jeckton</span> | All rights reserved!
            </p>
        </footer>
        <div class="line"></div>
    </div>

    <!-- JS -->
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#ssm").datepicker({
                minDate: 0,
                maxDate: 1,
            });
        });
    </script>
</body
