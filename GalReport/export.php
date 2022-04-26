<?php

$connect = mysqli_connect("localhost", "root", "", "stocktaking");  
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=data.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('DOPR','DPROD', 'DORD','DQNTB', 'last_update'));  
$query = "SELECT DOPR,DPROD,DORD,DQNTB,last_update from gal_report  ";  

$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_assoc($result))  
{  
     fputcsv($output, $row);  
}  
fclose($output);  


?>