<!DOCTYPE html>
<html>
<head>
	<title>Soal 3</title>
</head>
<body>

	<form action="" method="POST">
		Masukan tinggi awal = <input type="text" name="awal">
		<br>
		Masukan tahun = <input type="text" name="tahun">
		<br>
		<input type="submit" name="kirim" value="kirim">
		
	</form>

</body>
</html>

<?php  

	function pohon($awal, $tahun) {

		$pohon = $awal;
		for ($i=0; $i < $tahun; $i++) {
			// saat musim semi 
			$pohon = $pohon+($pohon*2);
		
			// saat musim gugur
			$pohon += 1;
		}

		echo "tinggi akhir pohon = {$pohon} m";

	}

	if (isset($_POST['kirim'])) {
		$x = $_POST['awal'];
		$y = $_POST['tahun'];

		if ($x > 0 AND $y > 0) {
			pohon($x, $y);
		}
		else {
			echo "Masukan tinggi awal dan tahun > 0";
		}

	}

?>