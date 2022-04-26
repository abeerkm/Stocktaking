<?php

$connect = mysqli_connect("localhost", "root", "", "stocktaking");  
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=data.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('PROD', 'QNTB', 'Name', 'last_update'));  
$query = "SELECT PROD,QNTB,Name,last_update from inventory_at_contractor  ";  

$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_assoc($result))  
{  
     fputcsv($output, $row);  
}  
fclose($output);  


?>