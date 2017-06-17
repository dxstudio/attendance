<?php
	header('content-type:text/html;charset=utf-8');
	require_once('config.php');
	
	
	$username=$_POST['username'];
	$password=$_POST['password'];
    $conn = db_connect();
    mysqli_query($conn, "set character set 'utf8'");
    
    $result = $conn->query("select * from administrator where username='".$username."' and password = '".$password."'");
    
    if (!$result) {
    	throw new Exception("<script>alert('password or username not exist');location='login.php'</script>");
    }
    if ($result->num_rows>0) {
    	setcookie('username',$username,time()+6000,'/');
    	
    	echo "<script>location='../index.php'</script>";;
    } else {
    	echo("<script>alert('password or username error');location='login.php'</script>");
    }

   
?>