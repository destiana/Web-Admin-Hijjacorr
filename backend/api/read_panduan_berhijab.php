<?php
	require_once 'config.php';

	$query = "Select * from panduan";

	$sql = mysqli_query($con, $query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray, array(
			"id_panduan" => $row ['id_panduan'],
			"judul_panduan" => $row ['judul'],
			"isi_panduan" => $row ['isi'],
			"gambar_panduan" => $row ['gambar'],
			));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>
