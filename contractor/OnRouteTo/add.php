<?php
include"../../dbcon.php"; 
$txtprod = $_POST['txtprod']; 
 $txtord = $_POST['txtord']; 
 $txtqntb = $_POST['txtqntb']; 
 $txtname = $_POST['txtname']; 

 $sql = "INSERT INTO Inventory_on_way (PROD, ORD, QNTB,Name)
 VALUES ('".$txtprod."','".$txtord."','".$txtqntb."','".$txtname."')";
 if ($conn->query($sql) === TRUE) {
 echo "<p class='btn btn-info' align='center'>New record created successfully</p>";

 } else {
 echo "Error: " . $sql . "<br>" . $conn->error."";
 }
 $conn->close();

?>