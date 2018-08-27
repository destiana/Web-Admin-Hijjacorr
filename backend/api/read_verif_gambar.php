<?php
	require_once 'config.php';

	$query = "Select * from verif_gambar";

	$sql = mysqli_query($con, $query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray, array(
			"id_gambar_verifikasi" => $row ['id_verif_gambar'],
			"gambar_verifikasi" => $row ['gambar'],
			));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>
