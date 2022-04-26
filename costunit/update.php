
<?php
include"../dbcon.php"; 
 $string  = $_POST['string'];
 $txtitem = $_POST['txtitem']; 
 $txtcost = $_POST['txtcost']; 

 $sql = "UPDATE costunits SET Item='$txtitem', Cost_unit_2='$txtcost'
  WHERE rowid = '$string' ";
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 

?>
