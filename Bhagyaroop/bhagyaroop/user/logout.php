
<?php 
session_start();
//if(isset($_SESSION['user1'])){
    session_destroy();
    header("location:./../login.php?logout=0");
//}
?>