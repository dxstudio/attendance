<?php
header('content-type:text/html;charset=utf-8');
require_once('../lib/config.php');

session_start();
$old_user = $_COOKIE['username'];

unset($_COOKIE['username']);
$result_dest = session_destroy();

if (!empty($old_user)) {
	if ($result_dest)  {
		// if they were logged in and are now logged out
		echo "<script>alert('Log out,goodbye');location='../view/index.php'</script>";
		
	} else {
		// they were logged in and could not be logged out
		echo "<script>alert('Could not log out,please try again');location='../view/person.php'</script>";
	}
}

/*else {
	// if they weren't logged in but came to this page somehow
	echo "<script>alert('You were never not logged in,please try again');location='../view/login.php'</script>";
	
}*/


?>