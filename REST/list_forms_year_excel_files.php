<?php
session_start();
error_reporting(0);

header("Content-type:text/html; charset=UTF-8");

if (isset($_SESSION['MachineID'])) {
    $myMachineID = $_SESSION['MachineID'];
    //$myMachineID = 'M0000001';

    $dir = "../../resource/" . $myMachineID . "/Forms/";
    
    //$dir_file = "../../resource/" . $myMachineID . "/Forms";
    
    //$dir_file = "../../rresource/" . $myMachineID . "/Forms";

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
    
    
    //$i = 0;
    echo "<h2>รายการแบบฟอร์ม : ".$myMachineName."</h2>";
    echo "<ul>";
    while (($file_student = readdir($dh_student)) !== false) {
        if (($file_student != ".") && ($file_student != "..")&&($file_student != ".DS_Store")) {
            //echo $file_student."<br/>";
            //echo "<li><a target='_blank' href='" . $dir_file . "/" . $file_student . "'>" . $file_student . "</a></li>";
            echo "<li><a onclick='check_forms_excel_files(".$file_student.")'>" ."ปี ". $file_student . "</a></li>";
            
        }
    }
    echo "</ul>";
    
    closedir($dh_student);
}
?>
