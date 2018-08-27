<?php
	require_once 'config.php';

	$query = "Select * from pengetahuan";

	$sql = mysqli_query($con, $query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray, array(
			"id_pengetahuan" => $row ['id'],
			"judul_pengetahuan" => $row ['judul'],
			"isi_pengetahuan" => $row ['isi'],
			"gambar_pengetahuan" => $row ['gambar'],
			));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>
