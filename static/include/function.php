
<?php 

SESSION_START();
require("db-conn.php");

if (isset($_POST['loginBTN'])) {
	
	$uName = mysqli_real_escape_string($conn, $_POST['uName']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	$hashPWD = md5($pwd);

	$query = mysqli_query($conn, "SELECT * FROM `customer` WHERE mobile='$uName' AND pwd='$hashPWD'");
	$checkQuery = mysqli_num_rows($query);
	if ($checkQuery) {

		$_SESSION['loggedIn']="1";
		header("location: ../index.php");

	}else{
		$_SESSION['error']="<font color='red'>Wrong Credentials</font>";
		header("location: ../login.php");
	}

}

if (isset($_POST['logout'])) {
	unset($_SESSION['loggedIn']);
	header("location: ../login.php");
}



if (isset($_POST['registerBTN'])) {
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);

	if ($pwd==$cpwd) {

		$hashPWD = md5($pwd);

		$query = mysqli_query($conn, "SELECT * FROM customer WHERE mobile='$mobile' LIMIT 1");
		$checkQuery = mysqli_num_rows($query);

		if (!$checkQuery) {

			$insert = mysqli_query($conn, "INSERT INTO `customer`(`name`, `mobile`, `pwd`) VALUES ('$name','$mobile','$hashPWD')");
			if ($insert) {
				$_SESSION['error']='<font color="green">Successfully registered! Please login</font>';
				header("location: ../login.php");
			}else{
				$_SESSION['error']='<font color="red">Registration failed try again</font>';
				header("location: ../register.php");
			}
			
		}else{
			$_SESSION['error']='<font color="red">Mobile already exists</font>';
			header("location: ../register.php");
		}
		
	}else{
		$_SESSION['error']='<font color="red">Confirm password not match</font>';
		header("location: ../register.php");
	}

}



?>