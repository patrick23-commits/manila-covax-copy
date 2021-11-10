<?php include_once("connections/header.php"); ?>
    
    <h1>Log-in</h1>
    <form action=
    "<?php 
        if(isset($_POST['submit'])){
            echo "login.php";
        } else {
            echo "";
        }
    ?>" method="post">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">

        <button type="submit" name="submit">Log in</button>
        
    </form>
<?php include_once("connections/footer.php"); ?>