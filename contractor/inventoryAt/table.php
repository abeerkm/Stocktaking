<!DOCTYPE html>
<html lang="en">
<head>
<div class="topnav">

<!-- Left-aligned links (default) -->
<form method="get" action="../home.php">
<input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
<a><button >home</button></a>
</form>
<!-- Right-aligned links -->
<div class="topnav-right">
  <a href="../../logout.php">logout</a>

</div>

</div>
<form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>

<?php
if(isset($_POST["submit"]))
{

                $url='localhost';
                $username='root';
                $password='';
                $conn=mysqli_connect($url,$username,$password,"stocktaking");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
		  }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 1;
          while(($filesop = fgetcsv($handle, 10000, ",")) !== false)
                    {
          $txtprod = $filesop[0];
          $txtqntb = $filesop[1];
          $txtname = $filesop[2];
          $sql = "insert into inventory_at_contractor (PROD, QNTB,Name) values
           ('".$txtprod."','".$txtqntb."','".$txtname."')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
               echo "sucess";
             } 
		 else
		 {
            echo "Sorry! Unable to impo.";
          }

}
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
include"../../dbcon.php";
if(isset($_POST["drop"]))
{
  $user = $_GET['user'];
  $sql = "delete from inventory_at_contractor where name='$user'";
 if ($conn->query($sql) === TRUE) {
  echo "<p class='btn btn-info' align='center'>Record deleted successfully</p>";
 } else {
  echo "Error deleting record: " . $conn->error;
 }
}

?>

<script>
        function Export()
        {
            var conf = confirm("Export table to CSV?");
            if(conf == true)
            {
                window.open("export.php", '_blank');
            }
        }
    </script>

<script type = "text/javascript" >

   function preventBack(){window.history.forward();}
   setTimeout("preventBack()", 0);
   }
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Table </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #404E67;
        background: #F0F8FF;
  font-family: 'Open Sans', sans-serif;
 }
 .table-wrapper {
  width: 800px;
  margin: 30px auto;
        background: #fff;
        padding: 20px; 
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
        color:#1E90FF;
    }
    .table-title .add-new {
  float: right;
  height: 30px;
  font-weight: bold;
  font-size: 12px;
  text-shadow: none;
  min-width: 100px;
  border-radius: 50px;
  line-height: 13px;
    }
 .table-title .add-new i {
  margin-right: 4px;
 }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;

    }
    th{
        color:#1E90FF;

    }
    table.table td a {
  cursor: pointer;
        display: inline-block;
        margin: 0 5px;
  min-width: 24px;
    }   
 table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table td a.add i {
        font-size: 24px;
     margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    .form-group{
        font-size: 19px;
    }
    .form-group button{
        color:blue;
    }
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
 table.table .form-control.error {
  border-color: #f50000;
 }
 table.table td .add {
  display: none;
 }
 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
.topnav button{
  background-color: #5cc5f5
}
#myBtn:hover {
  background-color: #5cc5f5;
}
.topnav {
    position: relative;
    overflow: hidden;
    background-color: #5cc5f5  ;
}
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font:bold;
  }
  
  .topnav a:hover {
    background-color: rgb(7, 84, 156);
    color: rgb(196, 219, 223);
  }
  
  .topnav a.active {
    background-color: #aa0f04;
    color: white;
  }
  
  .topnav-centered a {
    float: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .topnav-right {
    float: right;
  }
  .redbutton {background-color: #f44336;
    border-radius: 14px;  
    padding: 3px 8px;
    color: white;

  } 

</style>

<script type="text/javascript">
$(document).ready(function(){
 $('[data-toggle="tooltip"]').tooltip();
 var actions = $("table td:last-child").html();
 // Append table with add row form on add new button click
    $(".add-new").click(function(){
  $(this).attr("disabled", "disabled");
  var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="PROD" id="PROD"></td>' +
            '<td><input type="text" class="form-control" name="QNTB" id="QNTB"></td>' +
            '<td><input type="text" class="form-control" name="Name" id="Name"></td>' +

   '<td>' + actions + '</td>' +
        '</tr>';
     $("table").append(row);  
  $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
  
 // Add row on add button click
 $(document).on("click", ".add", function(){
  var empty = false;
  var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
   if(!$(this).val()){
    $(this).addClass("error");
    empty = true;

   } else{
        $(this).removeClass("error");
            }

  });
  var txtprod = $("#PROD").val();
  var txtqntb = $("#QNTB").val();
  var txtname = $("#Name").val();
  var date = $("#last_update").val();

  $.post("add.php", { txtprod: txtprod,  txtqntb: txtqntb,txtname:txtname,date:date}, function(data) {
   $("#displaymessage").html(data);
  });
  $(this).parents("tr").find(".error").first().focus();
  if(!empty){
   input.each(function(){
    $(this).parent("td").html($(this).val());
   });   
   $(this).parents("tr").find(".add, .edit").toggle();
   $(".add-new").removeAttr("disabled");
   location.reload();

  } 
    });
 // Delete row on delete button click
 $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
  $(".add-new").removeAttr("disabled");
  var id = $(this).attr("id");
  var string = id;
  $.post("delete.php", { string: string}, function(data) {
   $("#displaymessage").html(data);
  });
  location.reload();

    });
 // update rec row on edit button click
 $(document).on("click", ".update", function(){
  var id = $(this).attr("id");
  var string = id;
  var txtprod = $("#txtprod").val();
  var txtqntb = $("#txtqntb").val();
  var txtname = $("#txtname").val();
  var date = $("#date").val();
  $.post("update.php", { string: string,txtprod: txtprod,  txtqntb: txtqntb,txtname:txtname,date:date}, function(data) {
   $("#displaymessage").html(data);
  });
  location.reload();
    });
 // Edit row on edit button click
 $(document).on("click", ".edit", function(){  
        $(this).parents("tr").find("td:not(:last-child)").each(function(i){
   if (i=='0'){
    var idname = 'txtprod';
   }else if (i=='1'){
    var idname = 'txtqntb';
   }
   else if (i=='2'){
    var idname = 'txtname';
   }else{} 
   $(this).html('<input type="text" name="updaterec" id="' + idname + '" class="form-control" value="' + $(this).text() + '">');
  });  
  $(this).parents("tr").find(".add, .edit").toggle();
  $(".add-new").attr("disabled", "disabled");
  $(this).parents("tr").find(".add").removeClass("add").addClass("update");

    });
    
});
</script> 
</head>
<body>
    <div class="container"><p><h1 align="center">inventory at SubContractor </h1><div id="displaymessage"></div></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for.." title="Type in a name">
</div>

                    <div class="col-sm-4" id="section1">
                    <a href="#section2"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                    <form method="post">
                    <button type="drop" name="drop" value="drop" class="redbutton"><i class="fa fa-minus"></i> delete table</button></a>
                    </form>
                    </div>
           
                </div>
            </div>
   <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>QNT</th>
                        <th>SubContractor</th>
                        <th>Update date</th>
                        <th><form method="get" action='export.php'><input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
                         <button type="submit" class="btn btn-success">Export</button>
                        </form> </th>
                    </tr>
                </thead>
                <tbody>
<?php 
include"../../dbcon.php"; 
$user = $_GET['user'];
$query_pag_data = "SELECT * from inventory_at_contractor  WHERE Name = '$user'";
$result_pag_data = mysqli_query($conn, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
    $rowid = $row['rowid']; 
    $txtprod = $row['PROD']; 
 $txtqntb = $row['QNTB']; 
 $txtname = $row['Name']; 
 $date = $row['last_update'];
?>
                    <tr>
                        <td><?php echo $txtprod; ?></td>
                        <td><?php echo $txtqntb; ?></td>
                        <td><?php echo $txtname; ?></td>
                        <td><?php echo $date; ?></td>

                        <td>
       <a class="add" title="Add" data-toggle="tooltip" id="<?php echo $rowid; ?>" ><i class="fa fa-user-plus"></i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip" id="<?php echo $rowid; ?>"><i class="fa fa-pencil"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" id="<?php echo $rowid; ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>   
<?php } ?>     
                </tbody>
            </table>
        </div>
    </div>    
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
       
  }
 
}
</script> 
<div class="main" id="section2">
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>                            

