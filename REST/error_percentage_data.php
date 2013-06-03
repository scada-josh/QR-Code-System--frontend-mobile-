<?php
session_start();
header("Content-type:text/html; charset=UTF-8");

include '../../utility/connect-db/connection.php';

$conn = OpenDbConnection();

$sql_select = "SELECT * FROM error_percentage WHERE (machine_alias_code like '".$_REQUEST['paramMachineAliasName']."%') order by machine_alias_code";

//$fp = fopen('data.txt', 'w');
//fwrite($fp, $sql_select);
//fclose($fp);








//echo $sql_select.'<br/>';
$result_select = mysql_query($sql_select);

echo '{"users": [';
while ($row = mysql_fetch_assoc($result_select)) {
    //echo $row['machine_name'];

    $myDate_mn = $row['date_mn'];
    
    //$fromMYSQL = '2007-10-17 21:46:59';
//    echo date("m/d/Y", strtotime($myDate_mn)).'<br/>';
//    echo date("m", strtotime($myDate_mn)).'<br/>';
//    echo date("d", strtotime($myDate_mn)).'<br/>';
//    echo date("Y", strtotime($myDate_mn)).'<br/>';
    
$thai_w=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_n=array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

//$w=$thai_w[date("w")];
//$d=date("d");
$d=date("d", strtotime($myDate_mn));
//$n=$thai_n[date("n") -1];
$n=$thai_n[date("m", strtotime($myDate_mn)) -1];
//$y=date("Y") +543;
$y=date("Y", strtotime($myDate_mn))+543;
//$t=date("เวลา H นาฬิกา i นาที s วินาที");
//
//echo "วัน $w ที่ $d เดือน $n ปี พ.ศ. $y $t"; 
////echo "วันที่ $d เดือน $n ปี พ.ศ. $y"; 
////echo '<br/>';
//echo $d;
//echo '<br/>';

    //$myThaiDate = $d.'/'.date("m", strtotime($myDate_mn)).'/'.$y;
    $myMonth = $n;
    //$myData = $myData.'{"name": "'.$row['date_mn'].'","android": "'.$row['error_value'].'","ipad": "'.$row['lower_value'].'","iphone": "'.$row['upper_value'].'"},';
    $myData = $myData.'{"name": "'.$myMonth.'","android": "'.$row['error_value'].'","ipad": "'.$row['lower_value'].'","iphone": "'.$row['upper_value'].'"},';
}

echo substr($myData, 0, -1);

echo "]}";
CloseDbConnection($conn);

//echo '{"users": [
//    {"name": "2012-10-30","android": "55","ipad": "20","iphone": "100"},
//    {"name": "2012-05-29","android": "0","ipad": "20","iphone": "100"},
//    {"name": "2012-08-29","android": "0","ipad": "20","iphone": "100"},
//    {"name": "2012-10-30","android": "22","ipad": "20","iphone": "100"}
// ]}';

// echo '{"users": [
//                    {"name": "2012-10-30","android": "21","ipad": "10","iphone": "35"},
//                    {"name": "ก.พ.","android": "31","ipad": "10","iphone": "35"},
//                    {"name": "มี.ค.","android": "41","ipad": "10","iphone": "35"},
//                    {"name": "เม.ย.","android": "31","ipad": "10","iphone": "35"},
//                    {"name": "พ.ค.","android": "11","ipad": "10","iphone": "35"},
//                    {"name": "มิ.ย.","android": "13","ipad": "10","iphone": "35"},
//                    {"name": "ก.ค.","android": "55","ipad": "10","iphone": "35"},
//                    {"name": "ส.ค.","android": "45","ipad": "10","iphone": "35"},
//                    {"name": "ก.ย.","android": "33","ipad": "10","iphone": "35"},
//                    {"name": "ต.ค.","android": "66","ipad": "10","iphone": "35"},
//                    {"name": "พ.ย.","android": "10","ipad": "10","iphone": "35"},
//                    {"name": "ธ.ค.","android": "15","ipad": "10","iphone": "35"},
//                    {"name": "2012-10-30","android": "55","ipad": "20","iphone": "100"}
//]}';

?>

       
