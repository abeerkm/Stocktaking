<?php
include"../dbcon.php"; 
$txtitem = $_POST['txtitem']; 
 $txtcost = $_POST['txtcost']; 

 $sql = "INSERT INTO costunits (Item, Cost_unit_2)
 VALUES ('".$txtitem."','".$txtcost."')";
 if ($conn->query($sql) === TRUE) {
 echo "<p class='btn btn-info' align='center'>New record created successfully</p>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error."";
 }
 $conn->close();

?>