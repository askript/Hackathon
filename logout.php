<?php
    unset($_SESSION['auth']);
    header('Location: index.php');
    exit();
?>