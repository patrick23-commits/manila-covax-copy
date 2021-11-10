<?php

use function PHPSTORM_META\type;

include_once("connections/header.php"); ?>
<?php 
    session_start();
    $con = con();
    if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users_account WHERE username = '$username' AND password = '$password'";
    $account = $con->query($sql) or die($con->connect_error);
    $row = $account->fetch_assoc();
    
    if($row){

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password; 
        echo "hi ".$_SESSION['username'];
    }
    else {
        echo header("Location: index.php");
    }
}
?>
<?php include_once("connections/footer.php")?>