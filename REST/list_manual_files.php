<?php
session_start();
error_reporting(0);


if (isset($_SESSION['MachineID'])) {
    $myMachineID = $_SESSION['MachineID'];

    $dir = "../../resource/". $myMachineID . "/Manuals/";
    $dir_file = "../resource/". $myMachineID . "/Manuals";

    $dh_student = opendir($dir);

//Check machine name : Start
include '../../utility/connect-db/connection.php';

$conn = OpenDbConnection();

$sql = "select * from main where machine_id ='".$myMachineID."'";
//echo $sql;
$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
    //echo $row['machine_name'];
    $myMachineName = $row['machine_name'];
}

CloseDbConnection($conn);
//Check machine name : End
    
    $i = 0;
    echo "<h2>รายการคู่มือและเอกสารที่เกี่ยวข้อง : ".$myMachineName."</h2>";
    echo "<ul>";
    while (($file_student = readdir($dh_student)) !== false) {
        if (($file_student != ".") && ($file_student != "..")&&($file_student != ".DS_Store")) {
            //echo $file_student."<br/>";
            echo "<li><a target='_blank' href='" . $dir_file . "/" . $file_student . "'>" . $file_student . "</a></li>";
        }
    }
    echo "</ul>";
    closedir($dh_student);
}
?>
