<?php
include"../dbcon.php";
 $id=$_POST['string'];
 $sql = "delete from gal_report where rowid='$id'";
 if ($conn->query($sql) === TRUE) {
  echo "<p class='btn btn-info' align='center'>Record deleted successfully</p>";
 } else {
  echo "Error deleting record: " . $conn->error;
 }
 
?>