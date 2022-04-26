<?php

$connect = mysqli_connect("localhost", "root", "", "stocktaking");  
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=data.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('Name', 'PROD', 'QNTB', 'ORD', 'last_update'));  
$user = $_GET['user'];
$query = "SELECT PROD,ORD,QNTB,Name,last_update from Inventory_on_way WHERE Name = '$user' ";  

$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_assoc($result))  
{  
     fputcsv($output, $row);  
}  
fclose($output);  


?>