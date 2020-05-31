<?php
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$Dbpass=md5($Password);
	include 'connection.php';

	$insert = "SELECT* From users Where '$Username'= username && '$Dbpass'=password ;";
	$search = mysqli_query($conn, $insert);
	$insert2 = "SELECT* From admins Where '$Username'= username && '$Password'=password ;";
	$search2 = mysqli_query($conn, $insert2);
	if(mysqli_num_rows($search2)){
	session_start();
	$_SESSION['AdminFlag']=TRUE;
	echo $_SESSION['AdminFlag'];
	$_SESSION['Username'] = $Username;
	header("Location:adminTrue.php");
		
}
	if(mysqli_num_rows($search)){
		session_start();
		$_SESSION['Username'] = $Username;
		$_SESSION['Logged'] = TRUE;
		header("Location: LoggedUser.php");
	}
	else{$uflag=true;
			include 'index.html';
		echo "Something went horribly wrong with your details. "."<br>"."Please make sure your username and password meets our requirements.";
	}
	?>