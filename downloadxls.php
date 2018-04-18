<?php
	include "config.php";
	$filename = "DaftarMahasiswaSI2016.xls";
	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	$query = mysqli_query($conn,"select * from daftarmahasiswa");
	$flag = false;
	while ($row = mysqli_fetch_assoc($query))
	{	
		if (!$flag)
		{
			echo implode("\t", array_keys($row)) . "\r\n";
			$flag = true;
		}
		echo implode("\t", array_values($row)) . "\r\n";
	}
	exit();
?>