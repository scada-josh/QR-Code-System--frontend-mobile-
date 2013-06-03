<?php
session_start();
error_reporting(0);
header("Content-type:text/html; charset=UTF-8");

include '../../utility/connect-db/connection.php';

$conn = OpenDbConnection();

$sql = "select * from main where machine_id ='".$_REQUEST['paramMachineID']."'";
//echo $sql;
$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
    echo $row['machine_name'];
}

CloseDbConnection($conn);

?>
