<?php
require_once('../connect/database.php');

$username_not_exist = false;
$password_not_match = false;

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $password= md5($password);
    
    $query1=mysqli_query($db,"SELECT username,password,type,name FROM farmers WHERE username='$username'");
    
    if(mysqli_num_rows($query1) > 0) {
        while($row=mysqli_fetch_array($query1)) {
            $db_name=$row["name"];
            $db_username=$row["username"];
            $db_password=$row["password"];
            $db_type=$row["type"];

            if($username==$db_username && $password==$db_password){
                session_start();
                $_SESSION["username"]=$db_username;
                $_SESSION["type"]=$db_type;
                $_SESSION["name"]=$db_name;

                if($_SESSION["type"]=='Farmer'){
                    header("Location:dashboard.php");
                    exit; // Redirect and stop further execution
                }
            } else {
                // Password doesn't match
                $password_not_match = true;
            }
        }
    } else {
        // Username doesn't exist
        $username_not_exist = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agriculture Support System Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/signUp.css">
</head>
<body>
<div class="container">
    <form action="login.php" method="post">
        <h2>Farmer Login</h2>
		<?php if ($username_not_exist): ?>
            <div class="alert alert-danger" role="alert">
                The username does not exist
                <a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
        <?php endif; ?>
        <?php if ($password_not_match): ?>
            <div class="alert alert-danger" role="alert">
                The password doesn't match with the username
                <a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
        <?php endif; ?>
        
        <div class=" form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20"
                   placeholder="Mbugua" required>
        </div>
        <div class=" form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" maxlength="20" placeholder="" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-block"> Login</button>
        </div>
		<p>
            Don't have an account?<a href="signUp.php" class="already"> Sign Up</a>
        </p>
    </form>
</div>

<script src="../vendor/bootstrap/js/popper.min.js"></script>
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
