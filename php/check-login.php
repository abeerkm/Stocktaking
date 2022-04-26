<?php
	$adminuser = 'root';
	$password = ''  ; //To be completed if you have set a password to root
	$database = 'localdata'  ; //To be completed to connect to a database. 
	$mysqli = new mysqli('localhost', $adminuser, $password, 'stocktaking');

	if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
				. $mysqli->connect_error);
	}
	
    $newUsername = $_POST['user'];
    $newPassword = $_POST['pwd'];
	$role = $_POST['rolle'];


	if (empty($newUsername)) {
		header("Location: ../index.php?error=User Name is Required");
	}else if (empty($newPassword)) {
		header("Location: ../index.php?error=Password is Required");
	}
	else{
	$result = $mysqli->query("SELECT * FROM users WHERE username = '$newUsername' AND password='$newPassword' AND role='$role'");
	$my_array = $result->fetch_assoc(); 
	
	define("USER",$my_array["username"]); 
	define("PASS",$my_array["password"]); 
	define("Role",$my_array["role"]);

	
	
	if(isset($_POST["user"])&& isset($_POST["pwd"]))
	{
		$user = $_POST["user"];
		$pass = $_POST["pwd"];
		
		if($user==USER && $pass==PASS )
		{
			if($my_array['role'] == 'admin'){
			header("Location: ../hPage.html");
			}
			if($my_array['role'] == 'contractor'){
				$url = "../contractor/home.php?user=" . $user;
	        	header('Location: ' . $url);

			}

		}
	
		else
		{
			header("Location: ../index.php?error=Incorect User name or password");
		}
	}
	else{
		header("Location: ../index.php?error=Incorect User name or password");
	}
}
	
	
	
?>
	  <a href="try.php?varname=<?php echo $newUsername ?>">Page2</a>

<?php  
/*session_start();
include "../dbcon.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../index.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	}else {

		
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_fetch_assoc($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {

        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: ../home.php");

        	}else {
        		header("Location: ../index.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../index.php?error=error");
        }

	}
	
}else {
	header("Location: ../index.php");
}*/