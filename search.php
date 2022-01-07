<?php
require_once("connections/db_connection.php");
$name = " ";
$conn = connection();
?>
<form method="post">
    <input type="text" name="search" id="">
    <input type="text" name="contact_search" id="">
    <button type="submit" name="search_btn">Search</button>
</form>
<?php

if(isset($_POST['search_btn']))
{
    session_start();
    $name = $_POST['search'];
    $contact_ = $_POST['contact_search'];
    
    $sql = "SELECT * FROM `usersinfo` WHERE FirstName LIKE '$name' AND MobileNo = '$contact_'";
    $info = $conn->query($sql) or die($conn->error);
    $row = $info->fetch_assoc();
    $_SESSION['name'] = $_POST['search'];
    $_SESSION['contact'] = $_POST['contact_search'];
    if($row){
        
        header("Location:users info.php");
    } else {
        ?>
        
    <h2>hgugu</h2> 
    <?php
    }
    
}

?>
