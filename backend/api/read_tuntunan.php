<?php
	require_once 'config.php';

	$query = "SELECT judul, url FROM tuntunan";

	$sql = mysqli_query($con, $query);

	$ray = array();

	while ($row = mysqli_fetch_assoc($sql)){
		$ray[] = $row;
	}

	echo json_encode($ray);

	mysqli_close($con);
?>