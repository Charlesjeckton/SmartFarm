<?php
session_start();
if($_SESSION['username']){
    
}else{
    header('Location:login.php');
}
?>