<?php 
    session_unset();
    //session_destroy();
    unset($_SESSION['auth']);
    header('Location: index.php');
    exit();
?>