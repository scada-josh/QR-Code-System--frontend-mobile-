<?php
session_start();
error_reporting(0);

header("Content-type:text/html; charset=UTF-8");

include '../../utility/connect-db/connection.php';

//echo $_REQUEST['myUser'];
//echo $_REQUEST['myPass'];
$_SESSION['MachineID'] = $_REQUEST['myMachineID'];
$_SESSION['myUser'] = $_REQUEST['myUser'];
$_SESSION['iYear_session'] = '';

$conn = OpenDbConnection();

$sql = "select * from user where (username='" . $_REQUEST['myUser'] . "' and password = '" . $_REQUEST['myPass'] . "')";
//echo $sql;
$result = mysql_query($sql);

//while ($row = mysql_fetch_assoc($result)) {
//    echo $row['id'];
//}

if (mysql_num_rows($result)) {
    echo 'success';
}  else {
    echo 'fail';
}

//echo $_REQUEST['myMachineID'];
//    if(isset($_SESSION['MachineID'])){
//        echo 'success';
//    }
//echo $_SESSION['MachineID'];
//echo 'success ';
CloseDbConnection($conn);
?>
