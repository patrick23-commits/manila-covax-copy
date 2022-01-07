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
            print_r($row);
         ?>
         <img src="<?php echo $row['profile'] ?>" alt="" srcset="" width="150" height="150">
        <h1><?php echo $row['FirstName']. " " .$row['LastName'] ?></h1>
  
        <?php   
        } else {
            
        }
    } else {
        header("Location:search.php");
    }
        ?>
      

    
    
   

