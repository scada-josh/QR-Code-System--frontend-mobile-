<?php
session_start();
error_reporting(0);
    //echo $_REQUEST['myUser'];
    //echo $_REQUEST['myPass'];
//    $_SESSION['MachineID'] = $_REQUEST['myUser'];
    if(isset($_SESSION['MachineID'])){
        echo $_SESSION['MachineID'];
    }
    //echo $_SESSION['MachineID'];
    //echo 'success ';
?>
