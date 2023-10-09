<?php
session_start();
if(isset($_POST['Login'])){
	if(($_POST['nama']=="") && ($_POST['pass']=="")) { echo "User Name dan Password masih kosong"; session_destroy();

	}else{
// user = “irna” & password = “alpian2004”
if(($_POST['nama']=="irna") and ($_POST['pass']=="alpian2004")){
$_SESSION['login']=1;
$_SESSION['username']=$_POST['nama'];

}

if ((isset($_SESSION['login'])) and ($_SESSION['login']==1)){ header("location: submit_formlogin.php");
exit();

}
}
}

?>
<html>
<head>
<title>Session</title>
</head>
<body>
<form name="session" method="POST" action=""> <p>Form Login</p>
<p>User Name <input type="text" name="nama"/></p> <p>Password <input type="password" name="pass" /></p> <input type="submit" name="Login" value="Login" />
</form>
</body>
</html>
