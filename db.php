<?php
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	$db = mysqli_connect("localhost", "matthew624", "baedoksa6424!", "matthew624");

	function mq($sql)
	{

		global $db;
		return $db->query($sql);
	}

?>
