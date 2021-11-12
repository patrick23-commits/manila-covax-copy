<?php
include_once("connections/db_connection.php");
$conn = connection();
    if(isset($_POST['search_btn'])){
    $fname = $_POST['search'];
    $contact = $_POST['contact_search'];

    $sql = "SELECT * FROM `usersinfo` WHERE FirstName LIKE '$fname' AND MobileNo = '$contact'";
    $info = $conn->query($sql) or die($conn->error);
    $row = $info->fetch_assoc();
    }
    $date = new DateTime();
    $a = date("Y/m/d");
    
?>
<img src="<?php echo $row['profile'] ?>" alt="" srcset="" width="150" height="150">
<h1><?php echo $row['FirstName']. $row['LastName'] ?></h1>
