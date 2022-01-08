<?php
require_once("connections/db_connection.php");
require_once("connections/header.php");
$name = " ";
$conn = connection();
?>
<link rel="stylesheet" href="css/search.css">
</head>
<form method="post" id="form">
    <input type="text" name="search" id="search">
    <input type="text" name="contact_search" id="contact_search">
    <button type="submit" name="search_btn" id="submit">Search</button>
</form>
    
<?php

if(isset($_POST['search_btn']))
{
    session_start();
    
    $sql = "SELECT * FROM usersinfo WHERE FirstName LIKE ? AND MobileNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$name, $contact_);
    
    $name = $_POST['search'];
    $contact_ = $_POST['contact_search'];

    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    
    if($result->num_rows > 0){
        $_SESSION['name'] = $_POST['search'];
        $_SESSION['contact'] = $_POST['contact_search'];
        header("Location:users info.php");
    } else {
        ?>
        
    <h2 style="color:red;" id="message">User not found!</h2> 
    <?php
    }
    $stmt->close();
}

?>
<script src="js/search.js"></script>
<?php
    require_once("connections/footer.php");
?>



