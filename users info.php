<?php

include_once("connections/db_connection.php");
session_start();
$conn = connection();
        if($_SESSION){

        $name = $_SESSION['name'];
        $contact_ = $_SESSION['contact'];
        
        $sql = "SELECT * FROM `usersinfo` WHERE FirstName LIKE '$name' AND MobileNo = '$contact_'";
        $info = $conn->query($sql) or die($conn->error);
        $row = $info->fetch_assoc();
        if($info->num_rows > 0){
            echo $info->num_rows;
            print_r($row);
         ?>
         <img src="<?php echo $row['profile'] ?>" alt="" srcset="" width="150" height="150">
        <h1><?php echo $row['FirstName']. " " .$row['LastName'] ?></h1>
        <form method="post">
            <button name="log-out">Log-out</button>
        </form>
        
        <?php   
            if(isset($_POST["log-out"])){
                $_SESSION['name'] = null;
                $_SESSION['contact'] = null;
                unset($_SESSION['name']);
                unset($_SESSION['contact']);
                header("Location:search.php");
            }
        }
    } else {
        http_response_code(404);
        echo "Page not found";
    ?>
    <a href="https:../php app/search.php">Log in</a>
    <?php
    }
        ?>
        
      

    
    
   

