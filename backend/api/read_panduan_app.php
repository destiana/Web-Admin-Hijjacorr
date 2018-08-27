<?php
	require_once 'config.php';

	$query = "Select * from panduan_app";

	$sql = mysqli_query($con, $query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray, array(
			"id_panduan_app" => $row ['id_panduan_app'],
			"judul_panduan_app" => $row ['judul'],
			"isi_panduan_app" => $row ['isi'],
			"gambar_panduan_app" => $row ['gambar'],
			));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>
