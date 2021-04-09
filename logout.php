<?php
    session_start();

    $_SESSION["isloggedin"]=false;

    echo "<script>location.assign('index.html');</script>";
?>