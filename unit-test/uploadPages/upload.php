<?php
$msgsuccess = 0;
$msgerror=0;
     //$typefile = $_FILES['myfile']['type'];
if ($_FILES['myfile']['error']!=0) {
	$msgerror=0;
} else {
	$accept_types=array("image/gif", "image/jpeg", "image/pjpeg", "image/pgn", "image/x-png", "application/vnd.ms-excel", "application/msword", "application/pdf");
    //$accept_types=array("image/gif", "image/jpeg", "image/pjpeg", "image/pgn", "image/x-png");
		
	$file = $_FILES['myfile']['name'];
	$typefile = $_FILES['myfile']['type'];	
	$sizefile = $_FILES['myfile']['size'];			
	$tempfile = $_FILES['myfile']['tmp_name'];
	//echo $tempfile;
	if(!in_array($typefile, $accept_types)) {
		$msgerror=1;
                echo 'error'.$msgerror;
	} else {
		$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$msgsuccess = 0;			
		$target_path = $destination_path . $file;
		   
	    if(@move_uploaded_file($tempfile, $target_path)) {
    	  	$msgsuccess = 1;
                echo 'Upload Success!!!!!'.$msgsuccess;
                echo '<br/>';
                echo "<TABLE border='1' style='width:600px'>";
                echo "<thead><tr><td>No.</td><td>Parameter</td><td>Value</td></tr></thead>";
                echo "<tr><td>1</td><td>ชื่อไฟล์</td><td>".$file."</td></tr>";
                echo "<tr><td>2</td><td>ชนิดของไฟล์</td><td>".$typefile."</td></tr>";
                echo "<tr><td>3</td><td>ขนาดไฟล์</td><td>".$sizefile."</td></tr>";
                echo "<tr><td>4</td><td>Path เก็บ Temp file</td><td>".$tempfile."</td></tr>";
                echo "</TABLE>";   
		}
	}
}

        

sleep(1)
?>
 