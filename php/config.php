<?php
header('content-type:text/html;charset=utf-8');
function db_connect() {
	$result = new mysqli('localhost', 'root', 'dianxinstudio', 'attendance');
	
	if (!$result) {
		throw new Exception('Could not connect to database server');
	} else {
		return $result;
	}
}

?>
