<?php
session_start();
error_reporting(0);

include '../../utility/connect-db/connection.php';

$conn = OpenDbConnection();

$iYear = $_REQUEST['paramChart_year']-543;
$iMachineID = $_REQUEST['paramMachineID'];

//echo $iYear." : ".$iMachineID;

$sql = "select * from error_percentage where (machine_id ='".$iMachineID."' and year_mn = '".$iYear."')";
//echo $sql;
$result = mysql_query($sql);
//echo '<br/>';

$series1 = array();
while ($row = mysql_fetch_assoc($result)) {
    //echo $row['error_value'].'<br/>';
    
    //$myDateSTR = $row['date_mn']."_สวัสดีจ้า";
    $myDateSTR = $row['date_mn'];
    $temp = array('myDate' => $myDateSTR, 'error_value' => $row['error_value'], 'open' => rand(0, 1));
    $series1[] = $temp;
}

$b = array('rows' => $series1, 'name' => 'กราฟแสดง %Error, ปี'.$_REQUEST['paramChart_year']);
$json = json_encode($b);

echo $json;

CloseDbConnection($conn);
////Check machine name : End


//id	machine_id	year_mn 	error_value	date_mn	upper_value	lower_value



//    
//    //$i = 0;
//    echo "<h2>แสดงผลกราฟ % Error สะสมรายปี : ".$myMachineName."</h2>";
//    echo "<ul>";
//    while (($file_student = readdir($dh_student)) !== false) {
//        if (($file_student != ".") && ($file_student != "..")&&($file_student != ".DS_Store")) {
//            
//            echo "<li><a onclick=showHighcharts('".$file_student."','".$myMachineID."')>"."แสดงผลกราฟ - ปี ". $file_student ."</a></li>";
//
//        }
//    }
//    echo "</ul>";

/* Start Generate JSON Format*/

//$series_0_1 = array();
//
//$num_date_show = 10;
//
//for ($i = 0; $i < ($num_date_show + 1); $i++) {
//    $myTimestamp = (strtotime("-" . $num_date_show . " days") + (24 * 60 * 60) * $i);
//    $temp = array('date' => $myTimestamp, 'price' => rand(500, 700), 'open' => rand(0, 1));
//    $series_0_1[] = $temp;
//}
//
//
//
//$b = array('rows' => $series_0_1, 'bought' => $series_2, 'sold' => $series_3, 'name' => 'Anusorn');
//$json = json_encode($b);
//
//echo $json;


?>
