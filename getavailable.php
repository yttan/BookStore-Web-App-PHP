<?php

define('DB_HOST', 'sylvester-mccoy-v3.ics.uci.edu');
    define('DB_USER', 'inf124-db-078');
    define('DB_PASS', '~BEJX.PYlict');
	define('DB_NAME', 'inf124-db-078');

	$data_base_connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if (!data_base_connect)
  	{
  		die('Could not connect:' . mysqli_connect_error());
  	}
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM books WHERE id = '".$q."'";
	$result = mysqli_query($data_base_connect,$sql);
	$row = mysqli_fetch_array($result);
	echo $row['available'];
	mysqli_close($data_base_connect);
?>