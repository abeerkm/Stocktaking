
<?php
include"../../dbcon.php"; 
 $string  = $_POST['string'];
 $txtprod = $_POST['txtprod']; 
 $txtqntb = $_POST['txtqntb']; 
 $txtname = $_POST['txtname'];  

 $sql = "UPDATE Inventory_at_contractor SET PROD='$txtprod', QNTB='$txtqntb',Name='$txtname'
  WHERE rowid = '$string' ";
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 

?>
