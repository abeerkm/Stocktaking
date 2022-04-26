
<?php
include"../dbcon.php"; 
 $string  = $_POST['string'];
 $txtprod = $_POST['txtprod']; 
 $txtord = $_POST['txtord']; 
 $txtqntb = $_POST['txtqntb']; 
 $txtname = $_POST['txtname'];  

 $sql = "UPDATE gal_report SET DPROD='$txtprod', DORD='$txtord', DQNTB='$txtqntb',DOPR='$txtname'
  WHERE rowid = '$string' ";
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 

?>
