<?php
include '../database/db.php';

//SELECT * FROM `checkk` where username = '" . $app . "' 
$app = $_GET['appname'];
// $sql_query = "SELECT * FROM `checkk` where username = '" . $app . "' ";
// $resultset = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($conn));
// $developer_records = array('ID', 'KEY', 'USERNAME', 'STATUS', 'CREATED AT', 'HWID');
// while( $rows = mysqli_fetch_assoc($resultset) ) {
// 	$developer_records[] = $rows;
// }	
// if(isset($_GET["export_data"])) {	
// 	$filename = "phpzag_data_export_".date('Ymd') . ".xls";			
//     header("Content-type: application/vnd-ms-excel");

//     header("Content-Disposition: attachment; filename=hasil-export.xls");
// 	$show_coloumn = false;
// 	if(!empty($developer_records)) {
// 	  foreach($developer_records as $record) {
// 		if(!$show_coloumn) {
// 		  // display field/column names in first row
// 		  echo implode("\t", array_keys($record)) . "\n";
// 		  $show_coloumn = true;
// 		}
// 		echo implode("\t", array_values($record)) . "\n";
// 	  }
// 	}
//    // header('location:../dashboard.php'); 
// }
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('ID', 'KEY', 'USERNAME', 'STATUS', 'CREATED AT', 'HWID'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database
$sql_query = "SELECT * FROM `checkk` where username = '" . $app . "' ";
$query = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($conn)); 
//$query = $db->query("SELECT * FROM `checkk` where username = '" . $app . "'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        //$status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['id'], $row['keyy'], $row['username'], $row['exp'], $row['create_at'], $row['hwid']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;
?>