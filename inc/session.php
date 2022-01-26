<?php
session_start();
if($_SESSION["sid"] ==''){
    header('location:login.php?Login+first');
}
?>