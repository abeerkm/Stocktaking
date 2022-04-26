<?php
include"../dbcon.php"; 
$txtprod = $_POST['txtprod']; 
 $txtqntb = $_POST['txtqntb']; 
 $txtname = $_POST['txtname']; 

 $sql = "INSERT INTO Inventory_at_contractor (PROD, QNTB,Name)
 VALUES ('".$txtprod."','".$txtqntb."','".$txtname."')";
 if ($conn->query($sql) === TRUE) {
 echo "<p class='btn btn-info' align='center'>New record created successfully</p>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error."";
 }
 $conn->close();

?>