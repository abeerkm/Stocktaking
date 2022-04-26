<?php

$connect = mysqli_connect("localhost", "root", "", "stocktaking");  
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=data.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('Name','DPROD','UnitCost', 'PositionGal', 'OnRouteFrom', 'OnRouteTo', 'SUB','difference'));  
$query = "SELECT Name,DPROD,UnitCost,PositionGal,OnRouteFrom,OnRouteTo,SUB,difference from costtable  ";  

$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_assoc($result))  
{  
     fputcsv($output, $row);  
}  
fclose($output);  


?>