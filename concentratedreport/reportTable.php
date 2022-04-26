
<!DOCTYPE html>
<html lang="en">
<head>
<div class="topnav">

<!-- Left-aligned links (default) -->
<a href="../hpage.html">Home page</a>

<!-- Right-aligned links -->
<div class="topnav-right">
  <a href="../logout.php">logout</a>

</div>

</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Table </title>
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
.topnav {
    position: relative;
    overflow: hidden;
    background-color: #5cc5f5  ;
}
 .topnav {
    position: relative;
    overflow: hidden;
    background-image: url('images/wp2590323.png')   ;
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
</style>
</head>
<body>
    <div class="container"><p><h1 align="center">Summary Report </h1><div id="displaymessage"></div></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                
                    <div class="col-sm-4">
                    <form method="get" action='export.php'><input type="hidden" name="user" >
                         <button type="submit" class="btn btn-success">Export</button>
                        </form>
                        <h1></h1>
                    <div class="col-sm-8"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Subcontractor" title="Type in a name">
                    <h1></h1>
                    </div>
                
                        
                </div>
            </div>
   <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th width=20%>SubContractor</th>
                        <th>PROD</th>
                        <th>Unit Cost</th>
                        <th>Position Gal</th>
                        <th>On Route From</th>
                        <th>On Route To</th>
                        <th>SUB</th>
                        <th>difference</th>


                    </tr>
                </thead>
                <tbody>
               
         
<?php 
include"../dbcon.php"; 
$query_pag_data = "SELECT * from costtable   ";
$result_pag_data = mysqli_query($conn, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
    $txtname = $row['Name']; 
 $txtprod = $row['DPROD']; 
 $txtcost = $row['UnitCost']; 
 $txtgal = $row['PositionGal']; 
 $txtfrom = $row['OnRouteFrom']; 
 $txtto = $row['OnRouteTo']; 
 $txtsub = $row['SUB']; 
 $txtdiff = $row['difference']; 

?>
                    <tr>
                        <td><?php echo $txtname; ?></td>
                        <td><?php echo $txtprod; ?></td>
                        <td><?php echo $txtcost ,'$'; ?></td>
                        <td><?php echo $txtgal,'$'; ?></td>
                        <td><?php echo $txtfrom,'$'; ?></td>
                        <td><?php echo $txtto,'$'; ?></td>
                        <td><?php echo $txtsub,'$'; ?></td>
                        <td><?php echo $txtdiff,'$'; ?></td>


                       
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
