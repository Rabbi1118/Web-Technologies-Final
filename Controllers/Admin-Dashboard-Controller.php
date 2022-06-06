<?php
    session_start();
    if ($_SESSION['username'])
    {
        echo "";
    }
    else
    {
        header("location:../view/Login.php");
    }
   

?>