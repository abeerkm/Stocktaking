<?php 
session_start();
$user = $_GET['user'];
echo "Hello $user";



?>
<style type="text/css">




/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
    font-family: Montserrat-Regular;
    src: url('../fonts/montserrat/Montserrat-Regular.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-Bold;
    src: url('../fonts/montserrat/Montserrat-Bold.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-ExtraBold;
    src: url('../fonts/montserrat/Montserrat-ExtraBold.ttf'); 
  }
  
  @font-face {
    font-family: Montserrat-Medium;
    src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
  }
  
  
  
  /*//////////////////////////////////////////////////////////////////
  [ RESTYLE TAG ]*/
  
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0; 
  }
  
   button{
    padding: 9px 15px;
    background-color: blue(0,136,169,1);
    border: none;
    border-radius: 50px;
    cursor:pointer;
    transition: all 0.3 ease 0s; 
  
  }
   button :hover{
    background-color: black(0,136,169,1);
  
  }
  
  
    
  
  body, html {
      height: 100%;
      font-family: Montserrat-Regular, sans-serif;
      background-image: url('../images/wp2590323.png')   ;

  }
  
  /*---------------------------------------------*/
  a {
      font-family: Montserrat-Regular;
      font-size: 14px;
      line-height: 1.7;
      color: #666666;
      margin: 0px;
      transition: all 0.4s;
      -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
  }
  
  a:focus {
      outline: none !important;
  }
  
  a:hover {
      text-decoration: none;
      color: #57b846;
  }
  
  /*---------------------------------------------*/
   h1{
    margin: 0;
    top: 50%;
    left: 50%;
    text-align: center;
    color: white;
    }
  
  p {
      font-family: Montserrat-Regular;
      font-size: 14px;
      line-height: 1.7;
      color: #666666;
      margin: 0px;
  }
  
  ul, li {
      margin: 0px;
      list-style-type: none;
  }
  
  
  /*---------------------------------------------*/
  input {
      outline: none;
      border: none;
  }
  
  textarea {
    outline: none;
    border: none;
  }
  
  textarea:focus, input:focus {
    border-color: transparent !important;
  }
  
  input::-webkit-input-placeholder { color: #999999; }
  input:-moz-placeholder { color: #999999; }
  input::-moz-placeholder { color: #999999; }
  input:-ms-input-placeholder { color: #999999; }
  
  textarea::-webkit-input-placeholder { color: #999999; }
  textarea:-moz-placeholder { color: #999999; }
  textarea::-moz-placeholder { color: #999999; }
  textarea:-ms-input-placeholder { color: #999999; }
  
  /*---------------------------------------------*/
  
  iframe {
      border: none !important;
  }
  
  
  
  
  /*//////////////////////////////////////////////////////////////////
  [ table 1 ]*/
  
  .table1 {
    width: 100%;
    min-height: 100%;
    padding: 15px;
  
    background-image: url('../images/wp2590323.png')   ;
   
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }
  
  .container-table1 {
    width: 1163px;
    background: rgb(247, 248, 250);
    border-radius: 10px;
    overflow: hidden;
  
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  
    padding: 90px 130px 88px 148px;
  }
  .btn-group button {
    background-color: #2296da; /* blue background */
    border: 1px solid rgb(0, 0, 0); /* blue border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    width: 350px; /* Set a width if needed */
    display: block; /* Make the buttons appear below each other */
    justify-content: center;
  align-items: center;
  }
  .container { 
    height: 300px;
    width: 1260px;
    position: relative;
    border: 3px solid rgb(20, 127, 160); 
  }
  
  .center .container {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 70%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  .btn-group button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
  }
  .center .btn-group {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  /* Add a background color on hover */
  .btn-group button:hover {
    background-color: #2a8ed1;
  }
  .flex-parent {
    display: flex;
  }
  
  .jc-center {
    justify-content: center;
  }
  
  button.margin-right {
    margin-right: 20px;
  }
  
  /*------------------------------------------------------------------
  
  [  ]*/
  .table1-form {
    width: 390px;
  }
  
  .table1-form-title {
    display: block;
    font-family: Montserrat-ExtraBold;
    font-size: 24px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 44px;
  }
  
  input.input1 {
    height: 50px;
    border-radius: 25px;
    padding: 0 30px;
  }
  input.input1 + .shadow-input1 {
    border-radius: 25px;
  }
  
  textarea.input1 {
    min-height: 150px;
    border-radius: 25px;
    padding: 12px 30px;
  }
  textarea.input1 + .shadow-input1 {
    border-radius: 25px;
  }
  
  /*---------------------------------------------*/
  .wrap-input1 {
    position: relative;
    width: 100%;
    z-index: 1;
    margin-bottom: 20px;
  }
  
  .input1 {
    display: block;
    width: 100%;
    background: #035a83;
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #666666;
  }
  
  .shadow-input1 {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 0px 0px;
    color: rgba(87,184,70, 0.5);
  }
  
  .topnav {
    position: relative;
    overflow: hidden;
    background-image: url('images/wp2590323.png')   ;
}
  
  .topnav a {
    float: left;
    color: #e3eff5;
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
  
 
  

 
  
  @-webkit-keyframes anim-shadow {
    to {
      box-shadow: 0px 0px 80px 30px;
      opacity: 0;
    }
  }
  
  @keyframes anim-shadow {
    to {
      box-shadow: 0px 0px 80px 30px;
      opacity: 0;
    }
  }
  
  /*---------------------------------------------*/
  
  
  
  
  
  
  /*------------------------------------------------------------------
  [ Responsive ]*/
  
  @media (max-width: 1200px) {
    .table1-pic {
      width: 33.5%;
    }
  
    .table1-form {
      width: 44%;
    }
  }
  
  @media (max-width: 992px) {
    .container-table1 {
      padding: 90px 80px 88px 90px;
    }
  
    
  
    .table1-form {
      width: 55%;
    }
  }
  
  @media (max-width: 768px) {
    .container-table1 {
      padding: 90px 80px 88px 80px;
    }
  
    .table1-pic {
      display: none;
    }
  
    .table1-form {
      width: 100%;
    }
  }
  
  @media (max-width: 576px) {
    .container-table1 {
      padding: 90px 15px 88px 15px;
    }
  }
  
  
  /*------------------------------------------------------------------
  [ Alert validate ]*/
  
  .validate-input {
    position: relative;
  }
  
  .alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    max-width: 70%;
    background-color: rgb(17, 111, 173);
    border: 1px solid #c80000;
    border-radius: 13px;
    padding: 4px 25px 4px 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 8px;
    pointer-events: none;
  
    font-family: Montserrat-Medium;
    color: #c80000;
    font-size: 13px;
    line-height: 1.4;
    text-align: left;
  
    visibility: hidden;
    opacity: 0;
  
    -webkit-transition: opacity 0.4s;
    -o-transition: opacity 0.4s;
    -moz-transition: opacity 0.4s;
    transition: opacity 0.4s;
  }
  
  .alert-validate::after {
    content: "\f06a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    color: #c80000;
    font-size: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 13px;
  }
  
  .alert-validate:hover:before {
    visibility: visible;
    opacity: 1;
  }
  
  @media (max-width: 992px) {
    .alert-validate::before {
      visibility: visible;
      opacity: 1;
    }
  }

  </style>
<html>
<!DOCTYPE html>

<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
</script>
<html lang="en">
<head>
	<title>tables </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="hpage.css">
<!--===============================================================================================-->
    
<div class="topnav">

  
  
  <!-- Left-aligned links (default) -->
  <a href="#">Home page</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="../logout.php">logout</a>
  
  </div>
  
</div>
</head>
<body>
	<div class="table1">
        <h1>Data tables</h1>
  
		<div class="container-table1">
       <div class="container">
             

  <div class="center">
    <div class="btn-group">
<form method="get" action="OnRouteFrom/table.php">
<input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
<button type="submit" class="button" name="submit" value="submit">inventory from SubContractor table</button>
</form>
<form method="get" action="OnRouteTo/table.php">
<input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
<button type="submit" class="button" name="submit" value="submit">inventory to SubContractor table</button>
</form>
<form method="get" action="inventoryAt/table.php">
<input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
<button type="submit" class="button" name="submit" value="submit">inventory at SubContractor table</button>
</form>
<form method="get" action="reportTable.php">
<input type="hidden" name="user" value="<?php  echo $_GET['user']; ?>">
<button type="submit" class="button" name="submit" value="submit">Summary report</button>
</form>
  </div>
</div>
</div>
  
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
</body>

</html>


